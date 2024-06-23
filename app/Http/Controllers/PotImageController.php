<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Models\PotImage;
use App\Models\PotProduct;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;

class PotImageController extends Controller
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

    public function pot_image_update(PotImage $potImage, PotProduct $potProduct, ImageRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $path = Storage::putFileAs('images', $file, save_image($file, PotImage::query())); // Даем путь к этому файлу
                $data['image'] = $path;
                PotImage::create($data);

                ImageManager::gd()->read($file)->scaleDown(360,  275)->save(storage_path('app/public/images/'.'test'.save_image($file, PotImage::query())));
            }
        }

        $potImage->fill($data)->save();

        return redirect(route('potProducts.edit', ['potProduct' => $potProduct]));
    }

    public function pot_image_destroy(PotImage $potImage, PotProduct $potProduct)
    {
        Storage::delete($potImage->image);

        $potImage->delete();

        return redirect(route('potProducts.edit', ['potProduct' => $potProduct]));
    }
}
