<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    $disk = Storage::disk('sounds');
    $files = collect($disk->allFiles());

    if ($search = request('search')) {
        $files = $files->filter(function ($file) use ($search)  {
            return (bool)preg_match('/.*\Q'.$search.'\E.*/i', $file);
        });
    }

    return view('home', [
        'sounds' => $files->map(function ($filename) use ($disk) {
            return ['name' => $filename, 'url' => $disk->url($filename)];
        }),
    ]);
});
