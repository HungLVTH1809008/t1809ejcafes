<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;

use Exception;

class MyController extends Controller
{
    public function CategoryList(){
        $categorys = Category::all();
        return view("List.ListCategory" , compact("categorys"));
    }

    public function danhsach(){
        $users = User::all();
        return view("danhsach" , compact("users"));
    }

  public function ProductList(){
       $Products= Product::all();
     return view("List.ListProduct",compact("Products"));
    }

// public function CustomerList(){
//        $Customers= Customer::all();
//      return view("List.ListCustomer",compact("Customers"));
//    }

// public function EmployeesList(){
//        $Employeess= Employees::all();
//      return view("List.ListEmployees",compact("Employeess"));
//    }
//
//
    function them_category()
    {
        $categorys=Category::all();
        //$sanphams=Sanpham::all();
        return view("More.more_category",compact("categorys"));//,"sanphams"));
//        return $categorys;
    }
    public function luucategory(Request $request)
    {
        $messages = [
            "required" => "Bắt buộc phải nhập thông tin",
            "string" => "Phải nhập vào 1 chuỗi",
            "numeric" => "Giá trị tối thiểu 0 hoặc 6 kí tự",
            "max" => "Tối đa 255 ký tự",
            "unique" => "Đã tồn tại giá trị này"
        ];
        $rules = [
            "category_id" => "required|numeric",
            "category_name" => "required|string|unique:Category",
            "content" => "required|string",
            "images" => "required|string",
            "describe" => "required|string",
            "status" => "required|string"

        ];
        $this->validate($request, $messages, $rules);
        /*   "book_name"=>"required|string|max:255|unique:book","qty"=>"required|numeric|min:0","author_id"=>"required|numeric","nxb _id"=>"required|numeric"
       ]);*/
        try {
            Category::create([
                "category_name" => $request->get("category_name"),
                "content" => $request->get("content"),
                "images" => $request->get("images"),
                "describe" => $request->get("describe"),
                "status" => $request->get("status"),
            ])->save();
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return redirect("/quan_ly_category");
    }

        function them_Product()
        {
            $products = Product::all();
            $categorys = Category::all();
            return view("More.more_product", compact("products", "categorys"));//,"sanphams"));

        }

}



