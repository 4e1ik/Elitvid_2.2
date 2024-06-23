<?php

namespace App\Http\Controllers;

use App\Http\Requests\PotProductRequest;
use App\Models\Image;
use App\Models\PotImage;
use App\Models\PotProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use function Laravel\Prompts\warning;

class PotProductController extends Controller
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
    public function store(PotProductRequest $PotProductRequest)
    {
        $data = $PotProductRequest->all();

//        dd($data);
//        dd(phpinfo());

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

        $potProduct = PotProduct::create($data);

        $data['pot_product_id'] = $potProduct->id;

        if ($PotProductRequest->hasFile('image')) {
            foreach ($PotProductRequest->file('image') as $file) {
                $path = Storage::putFileAs('images', $file, save_image($file, PotImage::query())); // Даем путь к этому файлу
                $data['image'] = $path;

                ImageManager::gd()->read($file)->scaleDown(360,  360)->save(storage_path('app/public/images/'.save_image($file, PotImage::query())));

                PotImage::create($data);
            }
        }

        return redirect(route('admin_pots'));
    }

    /**
     * Display the specified resource.
     */
    public function show(PotProduct $PotProduct)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PotProduct $potProduct)
    {
        $potImages = PotImage::query()->where('pot_product_id', $potProduct->id)->get();


        $sizes = explode('|', $potProduct->getAttribute('size'));
        $weights = explode('|', $potProduct->getAttribute('weight'));
        $prices = explode('|', $potProduct->getAttribute('price'));

//        dd($sizes[0]);

        return view('includes.elitvid.admin.update_pot_product', compact( 'potProduct', 'potImages', 'sizes', 'weights', 'prices'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PotProductRequest $PotProductRequest, PotProduct $potProduct)
    {
        $data = $PotProductRequest->all();

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

//        dd($data);

        $potProduct->fill($data)->save();

        $data['pot_product_id'] = $potProduct->id;

        if ($PotProductRequest->hasFile('image')) {
            foreach ($PotProductRequest->file('image') as $file) {
//                dd($file->hashName());
                $path = Storage::putFileAs('images', $file, save_image($file, PotImage::query())); // Даем путь к этому файлу
                $data['image'] = $path;
                PotImage::create($data);

                ImageManager::gd()->read($file)->scaleDown(360,  275)->save(storage_path('app/public/images/'.save_image($file, PotImage::query())));
            }
        }

        return redirect(route('admin_pots'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PotProduct $potProduct)
    {
//        dd($potProduct->query()->where('id', 4));

        $images = $potProduct->pot_images()->where('pot_product_id', $potProduct->attributesToArray()['id'])->get();
        foreach ($images as $image) {
            Storage::delete($image->image);
        }

        $potProduct->delete();
        return redirect(route('admin_pots'));
    }
}
