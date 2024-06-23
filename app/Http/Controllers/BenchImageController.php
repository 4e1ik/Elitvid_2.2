<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Models\BenchImage;
use App\Models\BenchProduct;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;

class BenchImageController extends Controller
{
    public function pot_image_store(ImageRequest $request)
    {
//        $data = $request->all();
//
////        save_image($request);
//
//        if ($request->hasFile('image')) {
//            foreach ($request->file('image') as $file) {
//                $path = Storage::putFileAs('images', $file, save_image($file)); // Даем путь к этому файлу
//                $data['image'] = $path;
//                PotImage::create($data);
//
//                ImageManager::gd()->read($file)->scaleDown(360,  275)->save(storage_path('app/public/images/'.'test'.save_image($file)));
//            }
//        }
//
//        return redirect(route('admin_pots'));
    }

    public function bench_image_update(BenchImage $benchImage, BenchProduct $benchProduct, ImageRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $path = Storage::putFileAs('images', $file, save_image($file, BenchImage::query())); // Даем путь к этому файлу
                $data['image'] = $path;
                BenchImage::create($data);

                ImageManager::gd()->read($file)->scaleDown(360,  275)->save(storage_path('app/public/images/'.save_image($file, BenchImage::query())));
            }
        }

        $benchImage->fill($data)->save();

        return redirect(route('benchProducts.edit', ['benchProduct' => $benchProduct]));
    }

    public function bench_image_destroy(BenchImage $benchImage, BenchProduct $benchProduct)
    {
        Storage::delete($benchImage->image);

        $benchImage->delete();

        return redirect(route('benchProducts.edit', ['benchProduct' => $benchProduct]));
    }
}
