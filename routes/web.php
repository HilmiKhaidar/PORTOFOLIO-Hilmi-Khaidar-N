<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda'); // <--- ini nama file .blade.php nanti
});
