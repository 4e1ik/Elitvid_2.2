<?php

use App\Models\Image;
use Illuminate\Support\Facades\Storage;

function save_image($file, $image)
{
//    if ($request->hasFile('image')) {
//        foreach ($request->file('image') as $file) {

            $name = $file->getClientOriginalName();

            $tmp_name = explode('.', $name);

            $img_names_arr = $image->pluck('image');

//            dd($img_names_arr);

            $img_names_arr_explode = [];
            $i = 0;

            foreach ($img_names_arr as $img_name_item) {

                $img_names_arr_explode[] = explode('/', $img_name_item)[1];
            }
            foreach ($img_names_arr_explode as $img_names_arr_explode_item) {

                if (str_contains($name, $img_names_arr_explode_item)) {

                    $i++;
                    $name = $tmp_name[0] . '(' . $i . ').' . $tmp_name[1];

                    if (in_array($name, $img_names_arr_explode)) {

                        while (in_array($name, $img_names_arr_explode)) {
                            $i++;
                            $name = $tmp_name[0] . '(' . $i . ').' . $tmp_name[1];

//                            dd($name);
                        }
                    }
                }
            }

            return $name;

//            $path = Storage::putFileAs('images', $file, $name); // Даем путь к этому файлу
//            $data['image'] = $path;
//            return Image::create($data);
//        }
//    }
}
