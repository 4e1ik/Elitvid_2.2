<?php

use App\Models\BenchProduct;
use App\Models\PotProduct;
use Tabuna\Breadcrumbs\Breadcrumbs;
use Tabuna\Breadcrumbs\Trail;
//use \App\Providers\BreadcrumbsServiceProvider;

Breadcrumbs::for('home', fn (Trail $trail) =>
    $trail->push('Главная', route('home'))
);

Breadcrumbs::for('directions', fn (Trail $trail) =>
    $trail->parent('home')->push('Наши направления', route('directions'))
);

Breadcrumbs::for('decorations', fn (Trail $trail) =>
$trail->parent('home')->push('Декоративные элементы', route('decorations'))
);

Breadcrumbs::for('benches', fn (Trail $trail) =>
    $trail->parent('directions')->push('Скамьи', route('benches'))
);

Breadcrumbs::for('verona_benches', fn (Trail $trail) =>
$trail->parent('benches')->push('Коллекция Verona', route('verona_benches'))
);

Breadcrumbs::for('show_bench_product', fn (Trail $trail, $id) =>
$trail->parent('verona_benches')->push('Скамья'.' '.BenchProduct::query()->with('bench_images')->where('id', $id)->get()[0]['name'], route('show_bench_product', $id))
);

Breadcrumbs::for('street_furniture_benches', fn (Trail $trail) =>
$trail->parent('benches')->push('Коллекция Street Furniture', route('street_furniture_benches'))
);

Breadcrumbs::for('show_bench_product', fn (Trail $trail, $id) =>
$trail->parent('street_furniture_benches')->push('Скамья'.' '.BenchProduct::query()->with('bench_images')->where('id', $id)->get()[0]['name'], route('show_bench_product', $id))
);

Breadcrumbs::for('solo_benches', fn (Trail $trail) =>
$trail->parent('benches')->push('Коллекция Solo', route('solo_benches'))
);

Breadcrumbs::for('show_bench_product', fn (Trail $trail, $id) =>
$trail->parent('solo_benches')->push('Скамья'.' '.BenchProduct::query()->with('bench_images')->where('id', $id)->get()[0]['name'], route('show_bench_product', $id))
);

Breadcrumbs::for('lines_benches', fn (Trail $trail) =>
$trail->parent('benches')->push('Коллекция Lines', route('lines_benches'))
);

Breadcrumbs::for('show_bench_product', fn (Trail $trail, $id) =>
$trail->parent('lines_benches')->push('Скамья'.' '.BenchProduct::query()->with('bench_images')->where('id', $id)->get()[0]['name'], route('show_bench_product', $id))
);

Breadcrumbs::for('stones_benches', fn (Trail $trail) =>
$trail->parent('benches')->push('Коллекция Stones', route('stones_benches'))
);

Breadcrumbs::for('show_bench_product', fn (Trail $trail, $id) =>
$trail->parent('stones_benches')->push('Скамья'.' '.BenchProduct::query()->with('bench_images')->where('id', $id)->get()[0]['name'], route('show_bench_product', $id))
);


Breadcrumbs::for('pots', fn (Trail $trail) =>
    $trail->parent('directions')->push('Кашпо', route('pots'))
);

Breadcrumbs::for('rectangular_pots', fn (Trail $trail) =>
    $trail->parent('pots')->push('Прямоугольные кашпо', route('rectangular_pots'))
);

Breadcrumbs::for('show_pot_product', fn (Trail $trail, $id) =>
$trail->parent('rectangular_pots')->push('Кашпо'.' '.PotProduct::query()->with('pot_images')->where('id', $id)->get()[0]['name'], route('show_pot_product', $id))
);

Breadcrumbs::for('square_pots', fn (Trail $trail) =>
    $trail->parent('pots')->push('Квадратные кашпо', route('square_pots'))
);

Breadcrumbs::for('show_pot_product', fn (Trail $trail, $id) =>
$trail->parent('square_pots')->push('Кашпо'.' '.PotProduct::query()->with('pot_images')->where('id', $id)->get()[0]['name'], route('show_pot_product', $id))
);

Breadcrumbs::for('round_pots', fn (Trail $trail) =>
    $trail->parent('pots')->push('Круглые кашпо', route('round_pots'))
);

Breadcrumbs::for('show_pot_product', fn (Trail $trail, $id) =>
$trail->parent('round_pots')->push('Кашпо'.' '.PotProduct::query()->with('pot_images')->where('id', $id)->get()[0]['name'], route('show_pot_product', $id))
);

//Breadcrumbs::for('round_pots', fn (Trail $trail) =>
//$trail->parent('pots')->push('Круглые кашпо', route('round_pots'))
//);
