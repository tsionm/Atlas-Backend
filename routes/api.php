<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AiPoweredController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactUSController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaasController;
use App\Http\Controllers\SdevelopmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UnicashController;
// use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Auth Routes


Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->middleware('auth:sanctum')->name('logout');
Route::post('/forgot-password', 'App\Http\Controllers\Auth\ForgotPasswordController@forgotPassword')->name('forgot');
Route::post('/reset-password', 'App\Http\Controllers\Auth\ForgotPasswordController@reset')->name('reset');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/email/verification-notification', 'App\Http\Controllers\Auth\EmailVerificationController@sendVerificationEmail')->middleware('auth:sanctum')->name('email_verification');
Route::get('verify-email/{id}/{hash}', 'App\Http\Controllers\Auth\EmailVerificationController@verify')->middleware('auth:sanctum')->name('get.verification');
Route::get('test_api', 'App\Http\Controllers\Api@index')->name('api');

Route::apiResources([
    'aipowered' => AiPoweredController::class,
    'blogs' => BlogController::class,
    'categories' => CategoryController::class,
    'clients' => ClientController::class,
    'comments' => CommentController::class,
    'contactus' => ContactUsController::class,
    'contactinfos' => ContactInfoController::class,
    'partners' => PartnerController::class,
    'products' => ProductController::class,
    'saass' => SaasController::class,
    'sdevelopments' => SdevelopmentController::class,
    'services' => ServiceController::class,
    'unicashs' => UnicashController::class,
    // 'posts' => PostController::class,
    // 'posts' => PostController::class,
]);


// Route::get('/test_api', 'App\Http\Controllers\Api@index')->('api');


// Route::