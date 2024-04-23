<?php

use Illuminate\Support\Facades\Route;
use Farhat\Websocket\Events\CsvExportProgressEventt; // Import the correct namespace

Route::get('/test-push-message', function () {
    event(new CsvExportProgressEventt("Perla"));

    return view('websocket::index');
});
