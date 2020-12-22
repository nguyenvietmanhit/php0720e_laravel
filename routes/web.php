<?php
//routes/web.php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route truy cập vào trang danh sách sản phẩm
Route::get('/danh-sach-san-pham',
[\App\Http\Controllers\ProductController::class,
    'index']);

// Route thêm mới sản phẩm
Route::get('/create',
[\App\Http\Controllers\ProductController::class,
    'create']);
// Route submit form create
Route::post('/store',
[\App\Http\Controllers\ProductController::class,
    'store']);
// Class Route có nhiều phương thức tĩnh: get, post,
//put, patch, delete -> chuẩn API Resful

// Route update 1 bản ghi theo id
Route::get('/cap-nhat/{id}',
  [\App\Http\Controllers\ProductController::class,
      'edit']);
//cap-nhat/345