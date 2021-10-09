<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;

class ProductController extends Controller
{
    //

    function home()
    {
        return view('home');
    }

    function AddProduct()
    {
        return view('AddProduct');
    }

    function AddProductSubmit(Request $request)
    {{
        $this->validate(
            $request,
            [
                'name'=>'required|min:3|max:30',
                'id'=>'required',
                'code'=>'required',
                'desc'=>'required',
                'quantity'=>'required',
                'cate'=>'required',
                'price'=>'required',
                's_date'=>'required',
                'rating'=>'required',
                'p_date'=>'required',

            ],
            [
                'id.required'=>'Product id required',
                'name.required'=>'Please enter product name',
                'name.min'=>'Name must be greater than 2 charcters',
                'desc.required'=>'Enter Product Description',
                'quantity.required'=>'Enter Product Quantity',
                'cate.required'=>'Enter Product category',
                'price.required'=>'Enter Product price',
                's_date.required'=>'Enter Product Stock Date',
                'p_date.required'=>'Enter Product purchased Date',


    
    
            ]
        );
        $var = new Product();
        $var->ProductId= $request->id;
        $var->ProductName= $request->name;
        $var->ProductCode = $request->code;
        $var->ProductDesc = $request->desc;
        $var->Quantity=$request->quantity;
        $var->Category = $request->cate;
        $var->Price = $request->price;
        $var->StockDate = $request->s_date;
        $var->Rating = $request->rating;
        $var->PurchasedDate = $request->p_date;
        $var->save();
    

        return redirect()->route('product/List');
    
      
    }
    }

    public function list(){
        $products = Product::all();
        return view('ProductList')->with('products',$products);
    }

    public function edit(Request $request){
        //
        $id = $request->id;
        //$student = Student::where('id',$id)->get(); //for multiple values : return array
        $product = Product::where('ProductId',$id)->first();
        //$student = Student::where('id','>',$id)->first();//default operator =
        return view('ProductEdit')->with('product', $product);

    }


    public function editSubmit(Request $request){

        $this->validate(
            $request,
            [
                'name'=>'required|min:3|max:30',
                'id'=>'required',
                'code'=>'required',
                'desc'=>'required',
                'quantity'=>'required',
                'cate'=>'required',
                'price'=>'required',
                's_date'=>'required',
                'rating'=>'required',
                'p_date'=>'required',

            ],
            [
                'id.required'=>'Product id required',
                'name.required'=>'Please enter product name',
                'name.min'=>'Name must be greater than 2 charcters',
                'desc.required'=>'Enter Product Description',
                'quantity.required'=>'Enter Product Quantity',
                'cate.required'=>'Enter Product category',
                'price.required'=>'Enter Product price',
                's_date.required'=>'Enter Product Stock Date',
                'p_date.required'=>'Enter Product purchased Date',


    
    
            ]
        );
        $var = Product::where('ProductId',$request->id)->first();
        $var->ProductId= $request->id;
        $var->ProductName= $request->name;
        $var->ProductCode = $request->code;
        $var->ProductDesc = $request->desc;
        $var->Quantity=$request->quantity;
        $var->Category = $request->cate;
        $var->Price = $request->price;
        $var->StockDate = $request->s_date;
        $var->Rating = $request->rating;
        $var->PurchasedDate = $request->p_date;
        $var->save();
        return redirect()->route('product/List');

    }

    public function delete(Request $request){
        $var = Product::where('ProductId',$request->id)->first();
        $var->delete();
        return redirect()->route('product/List');

    }
}
