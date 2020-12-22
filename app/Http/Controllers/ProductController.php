<?php
//app/http/controllers
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
      echo "Trang danh sách sản phẩm";
    }

    //Khi url có tham số động, Laravel có cơ chế
  //tạo biến bất kỳ tương ứng trong phương thức
    public function edit($id) {
      echo "Trang cập nhật sản phẩm: $id";
    }
}
