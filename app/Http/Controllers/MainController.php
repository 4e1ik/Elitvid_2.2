<?php

namespace App\Http\Controllers;

use App\Models\BenchProduct;
use App\Models\PotProduct;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class MainController extends Controller
{
    function index() {
        return view('elitvid.site.index');
    }

    function about() {
        return view('elitvid.site.about');
    }

    function show_pot_product($id){
        $products = PotProduct::query()->with('pot_images')->where('id', $id)->get();
        $i = 1;
        $j = 1;

        $rows = [];
        foreach ($products as $product) {
            $p_size = explode("|", $product->size);
            $p_weight = explode("|", $product->weight);
            $p_price = explode("|", $product->price);


            $count = min(count($p_price), count($p_weight), count($p_size));


            for ($key = 0; $key < $count; $key++){
                if ($p_size[$key]){
                    if ($p_weight[$key]){
                        if ($p_price[$key]){
                            $rows[$key] = $p_size[$key].'|'.$p_weight[$key].'|'.$p_price[$key];
                        }
                    }
                }
            }
        }

        $count = count($rows);

        return view('elitvid.site.pots.pot_product_page', compact('products', 'i', 'j', 'rows', 'count'));
    }

    function show_bench_product($id){
        $products = benchProduct::query()->with('bench_images')->where('id', $id)->get();
        $i = 1;
        $j = 1;

        $rows = [];
        foreach ($products as $product) {
            $p_size = explode("|", $product->size);
            $p_weight = explode("|", $product->weight);
            $p_price = explode("|", $product->price);

            $count = min(count($p_price), count($p_weight), count($p_size));


            for ($key = 0; $key < $count; $key++){
                if ($p_size[$key]){
                    if ($p_weight[$key]){
                        if ($p_price[$key]){
                            $rows[$key] = $p_size[$key].'|'.$p_weight[$key].'|'.$p_price[$key];
                        }
                    }
                }
            }
        }

//        dd($rows);

        $count = count($rows);

//        dd($count);

        return view('elitvid.site.benches.bench_product_page', compact('products', 'i', 'j', 'rows', 'count'));
    }

    function benches() {

        return view('elitvid.site.benches');
    }

    function street_furniture_benches() {

        $benches = BenchProduct::query()->whereIn('active', [1])->with(['bench_images'])->get();
        $street_furniture_benches = $benches->where('collection', 'Street_furniture');

        return view('elitvid.site.benches.street_furniture_benches', compact('street_furniture_benches'));
    }

    function verona_benches() {

        $benches = BenchProduct::query()->whereIn('active', [1])->with(['bench_images'])->get();
        $verona_benches = $benches->where('collection', 'Verona');

        return view('elitvid.site.benches.verona_benches', compact('verona_benches'));
    }

    function stones_benches() {

        $benches = BenchProduct::query()->whereIn('active', [1])->with(['bench_images'])->get();
        $stones_benches = $benches->where('collection', 'Stones');

        return view('elitvid.site.benches.stones_benches', compact('stones_benches'));
    }

    function solo_benches() {

        $benches = BenchProduct::query()->whereIn('active', [1])->with(['bench_images'])->get();
        $solo_benches = $benches->where('collection', 'Solo');

        return view('elitvid.site.benches.solo_benches', compact('solo_benches'));
    }

    function lines_benches() {

        $benches = BenchProduct::query()->whereIn('active', [1])->with(['bench_images'])->get();
        $lines_benches = $benches->where('collection', 'Line');

        return view('elitvid.site.benches.lines_benches', compact('lines_benches'));
    }

    function directions() {
        return view('elitvid.site.directions');
    }

    function decorations()
    {
        return view('elitvid.site.decorations');
    }

    function pots() {

        return view('elitvid.site.pots');
    }

    function rectangular_pots() {

    }

    function square_pots() {

    }

    function round_pots() {
        $pots = PotProduct::query()->whereIn('active', [1])->with(['pot_images'])->get();
        $round_pots = $pots->where('collection', 'Round');
        return view('elitvid.site.pots.round_pots', compact('round_pots'));
    }
}
