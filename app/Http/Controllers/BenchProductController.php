<?php

namespace App\Http\Controllers;

use App\Http\Requests\BenchProductRequest;
use App\Models\BenchImage;
use App\Models\BenchProduct;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use function Laravel\Prompts\warning;

class BenchProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BenchProductRequest $benchProductRequest, BenchImage $benchImage)
    {
        $data = $benchProductRequest->all();

        for ($i = 1;  $i<=5; $i++){
            $data['size'] = $data['size'].'|'.$data['size'.$i];
            unset($data['size'.$i]);
            $data['weight'] = $data['weight'].'|'.$data['weight'.$i];
            unset($data['weight'.$i]);
            $data['price'] = $data['price'].'|'.$data['price'.$i];
            unset($data['price'.$i]);
        }

        $data['size'] = trim($data['size'],  '|');
        $data['weight'] = trim($data['weight'],  '|');
        $data['price'] = trim($data['price'],  '|');

        $benchProduct = BenchProduct::create($data);

        $data['bench_product_id'] = $benchProduct->id;


        if ($benchProductRequest->hasFile('image')) {
            foreach ($benchProductRequest->file('image') as $file) {
//                dd($file);
                $path = Storage::putFileAs('images', $file, save_image($file, BenchImage::query())); // Даем путь к этому файлу
                $data['image'] = $path;

                ImageManager::gd()->read($file)->scaleDown(360,  360)->save(storage_path('app/public/images/'.save_image($file, BenchImage::query())));

                BenchImage::create($data);
            }
        }

        return redirect(route('admin_benches'));
    }

    /**
     * Display the specified resource.
     */
    public function show(BenchProduct $benchProduct)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BenchProduct $benchProduct)
    {
        $benchImages = BenchImage::query()->where('bench_product_id', $benchProduct->id)->get();


        $sizes = explode('|', $benchProduct->getAttribute('size'));
        $weights = explode('|', $benchProduct->getAttribute('weight'));
        $prices = explode('|', $benchProduct->getAttribute('price'));

        return view('includes.elitvid.admin.update_bench_product', compact( 'benchImages', 'benchProduct', 'sizes', 'weights', 'prices'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BenchProductRequest $benchProductRequest, BenchProduct $benchProduct, BenchImage $benchImage)
    {
        $data = $benchProductRequest->all();

        for ($i = 1;  $i<=5; $i++){
            $data['size'] = $data['size'].'|'.$data['size'.$i];
            unset($data['size'.$i]);
            $data['weight'] = $data['weight'].'|'.$data['weight'.$i];
            unset($data['weight'.$i]);
            $data['price'] = $data['price'].'|'.$data['price'.$i];
            unset($data['price'.$i]);
        }

        $data['size'] = trim($data['size'],  '|');
        $data['weight'] = trim($data['weight'],  '|');
        $data['price'] = trim($data['price'],  '|');

        $benchProduct->fill($data)->save();

        $data['pot_product_id'] = $benchProduct->id;

        if ($benchProductRequest->hasFile('image')) {
            foreach ($benchProductRequest->file('image') as $file) {
                $path = Storage::putFileAs('images', $file, save_image($file, BenchImage::query())); // Даем путь к этому файлу
                $data['image'] = $path;
                BenchImage::create($data);

                ImageManager::gd()->read($file)->scaleDown(360,  275)->save(storage_path('app/public/images/'.save_image($file, BenchImage::query())));
            }
        }

        return redirect(route('admin_benches'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BenchProduct $benchProduct)
    {
        $images = $benchProduct->bench_images()->where('bench_product_id', $benchProduct->attributesToArray()['id'])->get();
        foreach ($images as $image) {
            Storage::delete($image->image);
        }

        $benchProduct->delete();
        return redirect(route('admin_benches'));
    }
}