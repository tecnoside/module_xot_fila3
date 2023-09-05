<?php

declare(strict_types=1);

// custom route finche' siamo legati ai modelli
// lista e' index, mostrare un elemento e' show ..

\Illuminate\Support\Facades\Route::get('{lang}/feed/{item}', 'RssFeedController@feed');
\Illuminate\Support\Facades\Route::get('/sitemap.xml', 'SiteMapController@index');
\Illuminate\Support\Facades\Route::get('{lang}/sitemap', 'SiteMapController@index');
