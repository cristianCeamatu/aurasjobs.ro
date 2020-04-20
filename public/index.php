<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);


$response->send();

// set the public path to this directory
$app->bind('path.public', function() {
    return __DIR__;
});

/* GETTING IP FOR EVERY DEVICE VISITING THE SITE
$file = fopen("/home/q59b21z5/public_html/ips.txt","a");
$ip = $_SERVER["REMOTE_ADDR"];
$data = date("Y-m-d H:i:s");
$xml = json_decode(file_get_contents("http://api.ipstack.com/{$_SERVER["REMOTE_ADDR"]}?access_key=79cd61ce2bb20a9f2a016bf07af0e976"), true);
$locatie = $xml['country_name'].", ".$xml['region_name'].", ".$xml['city'];
$vizitator = $ip . ", " . $locatie . ", " . $data . "\r\n";
fwrite($file, $vizitator);
fclose($file);*/

$kernel->terminate($request, $response);
