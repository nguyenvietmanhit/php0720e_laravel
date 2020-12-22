<?php
//app/http/controllers
namespace App\Http\Controllers;

use App\Product;
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

    public function create() {
      //url: /create
//      echo "create";
      // Gọi view, rất giống hàm render của MVC
      return view('products/create');
    }

    public function store(Request $request) {
//      echo "store";
      // Ko sử dụng các mảng $_POST, $_GET, $_FILES
      //để lấy dữ liệu từ form gửi lên
//      dd($request->all());
      // + Validate form
      $rules = [
          'name' => ['required', 'min:3'],
          'price' => ['numeric']
      ];
      $messages = [
        'name.required' => 'Phải nhập tên sp',
        'name.min' => 'Name ít nhất 3 ký tự',
        'price.numeric' => 'Giá phải là số'
      ];
      //Valiate
      $this->validate($request, $rules, $messages);
      // gọi model để insert data
      $name = $request->get('name');
      $price = $request->get('price');
      $status = $request->get('status');
      $data = [
          'name' => $name,
          'price' => $price,
          'status' => $status,
          'description' => 'Description 123',
      ];
      $product_model = new Product();
      $is_insert = $product_model->insert($data);
      if ($is_insert) {
        session()->flash('success', 'Thêm thành công');
      } else {
        session()->flash('error', 'Thêm thất bại');
      }
      return redirect('/create');

    }
}
