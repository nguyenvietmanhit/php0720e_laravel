<?php
//app/Product.php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    public $table = 'products';
    public function insert($data) {
      // Laravel có 2 cơ chế truy vấn CSDL:
      // - Eloquent: dùng Model giống như MVC
      // - QueryBuilder: dùng thiên về truy vấn SQL
      //thuần
      $this->name = $data['name'];
      $this->price = $data['price'];
      $this->status = $data['status'];
      $this->description = $data['description'];
      $is_insert = $this->save();
      return $is_insert;
    }
}
