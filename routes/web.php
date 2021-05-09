<?php

use Illuminate\Support\Facades\Route;

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
//Khai báo 1 route mới
Route::get('/intro',function (){
   return view('intro');
});
//Khai báo thêm 1 ví dụ khó hơn
Route::get('/danh-muc/quan-ao-tre-em',function (){
   return view('danhmuc.quanaotreem');
});
//Khai báo biến trên url
Route::get('/tin-tuc/{id}',function ($id){
    echo "$id";
   return view('tintuc');
});
//Khai bao biến trên url ko bắt buộc phải nhập
Route::get('/binh-luan/{id?}',function ($id=0){
    echo "$id";
    return view('binhluan');
});
//Khai báo nhiều biến trên url
Route::get('/post/{id}/{comments}',function ($id,$comments){
   echo '<br>ID: '.$id;
   echo '<br>Comments: '.$comments;
});
//Truyền biến url xuống view
Route::get('/tin-tuc-trong-ngay/{id?}',function ($id=0){
    // truyền mảng xuống view
    $data = [];
    $data['id'] =$id;
    $data['name'] = 'duc';
    $data['age'] = '21';
   return view('tintuctrongngay',$data);
});
//Khai báo tên cho route
Route::get('/lien-he',function (){
   echo 'lien he';
})->name('lienhe');
//Kết nối tới controller cấp 1
Route::get('lien-he-admin', 'LienheController@index');
//Kết nối tới controller cấp 2
Route::get('lien-he-mod','Codebase\ContactController@index');
//Truyền biến trên url xuống controller
Route::get('lien-he-mod-var/{id}/{name}','Codebase\ContactController@index2');
//Truyền biến trên url xuống controller BIẾN ĐÓ KHÔNG BẮT BUỘC PHẢI CÓ
Route::get('lien-he-mod-cc/{id?}/{name?}','Codebase\ContactController@index3');

//Controller > View
Route::get('/codebase/index','Codebase\BlogController@index');
Route::get('/codebase/create','Codebase\BlogController@create');
Route::get('/codebase/edit/{id?}','Codebase\BlogController@edit');
Route::get('/codebase/delete/{id?}','Codebase\BlogController@delete');

//Phương thức POST
Route::get('/product/create','Codebase\ProductController@create');
Route::post('/product/store','Codebase\ProductController@store');
Route::get('/product/detail/{id}/{return}','Codebase\ProductController@detail');

//Response
Route::get('/product/response1','Codebase\ProductController@response1');
Route::get('/product/response2','Codebase\ProductController@response2')->name('response2');

//Đây là cách chuyển hướng đến 1 url bên ngoài trang web của chúng ta
Route::get('/product/response3','Codebase\ProductController@response3');
//Chuyển hướng đến 1 router trong trang web của chúng ta
Route::get('/product/response4','Codebase\ProductController@response4');
//Chuyển hướng đến 1 router name
Route::get('/product/response5','Codebase\ProductController@response5');
//Chuyển hướng đến 1 router name kèm biến trên URL
Route::get('/product/response6','Codebase\ProductController@response6');
Route::get('/product/response7/{id}','Codebase\ProductController@response7')->name('response7');
//Chuyển hướng đến 1 method trong controller
Route::get('/product/response8','Codebase\ProductController@response8');
//Chuyển hướng đến 1 method trong controller kèm đối số cho method đó
Route::get('/product/response9','Codebase\ProductController@response9');

//Middleware
Route::get('/di-an-sang',function (){
   echo '<br> Đi ăn sáng';
})-> middleware('openhour');
Route::get('/dong-cua',function (){
   echo '<br> Đóng cửa';
});

Route::get('test', 'LienheController@test');
Route::get('cart', 'LienheController@cart');


