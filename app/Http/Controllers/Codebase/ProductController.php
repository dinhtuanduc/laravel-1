<?php

namespace App\Http\Controllers\Codebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Hàm này trả về view để hiển thị form
    public function create()
    {
        return view('product.create');
    }

    //Hàm này để chứa các giá trị nhập từ form và lưu vào cơ sở dữ liệu
    public function store(Request $request)
    {
        echo "<br>".__METHOD__;
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';

        //Lấy ra tất cả giá trị của ô input
        $input = $request -> all();
        echo '<pre>';
        print_r($input);
        echo '</pre>';

        //Lấy ra từng giá trị của ô input
        echo '<br>'.$input['product_name'];
        echo '<br>'.$input['product_price'];
    }

    public function detail(Request $request,$id,$return)
    {
        echo "<br>".__METHOD__;
        echo "<br> ID : $id";
        echo "<br> Return : $return";

        //Lấy url sau tên domain
        $url = $request -> path();
        echo "<br> $url";

        //Lấy full url nhưng ko lấy query string ( sau dấu ?)
        $url2 = $request ->url();
        echo "<br> $url2";

        //Lấy full url
        $url3 = $request -> fullUrl();
        echo "<br> $url3";

        //Lấy dữ liệu từ query string
        $abc = $request -> query('abc');
        $v = $request -> query('v');
        echo "<br>$abc";
        echo "<br>$v";

        //lấy tất cả dữ liệu từ query
        $query = $request ->query();
        echo '<pre>';
        print_r($query);
        echo '</pre>';
    }

    public function response1()
    {
        return response('Hello Worl',200) -> header('Content-Type','text/plain');
    }
    public function response2()
    {
        return response('<h1>Thẻ h1 </h1>',200) -> header('Content-Type','text/html;charset=utf-8');
    }
    public function response3()
    {
        return redirect()->away('https://www.google.com');
    }
    public function response4()
    {
        return redirect('/product/response1');
    }
    public function response5()
    {
        return redirect()->route('response2');
    }
    public function response6()
    {
        //Chuyển hướng đến 1 router name kèm biến trên URL
        return redirect()->route('response7',['id'=>19]);
    }
    public function response7($id)
    {
        echo "ID là $id";
    }
    public function response8()
    {
        return redirect()->action('Codebase\ProductController@create');
    }
    public function response9()
    {
        return redirect()->action('Codebase\ProductController@response7',['id'=>2000]);
    }
}
