@extends('layouts.app')
@section('content')
    <form action="{{route('product/edit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}

        
        <div class="col-md-4 form-group">
            <span>Product Id</span>
            <input type="text" name="id" value="{{$product->ProductId}}" class="form-control">
            @error('id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-md-4 form-group">
            <span>Product Name</span>
            <input type="text" name="name" value="{{$product->ProductName}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="col-md-4 form-group">
            <span>Product Code</span>
            <input type="text" name="code" value="{{$product->ProductCode}}" class="form-control">
            @error('code')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="col-md-4 form-group">
            <span>Product Description</span>
            <input type="text" name="desc" value="{{$product->ProductDesc}}" class="form-control">
            @error('desc')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="col-md-4 form-group">
            <span>Product Category</span>
            <input type="text" name="cate" value="{{$product->Category}}" class="form-control">
            @error('cate')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="col-md-4 form-group">
            <span>Product Price</span>
            <input type="text" name="price" value="{{$product->Price}}" class="form-control">
            @error('price')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="col-md-4 form-group">
            <span>Quantity</span>
            <input type="text" name="quantity" value="{{$product->Quantity}}" class="form-control">
            @error('quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

        <div class="col-md-4 form-group">

            <span>Stock Date</span>
            <input type="date" name="s_date" value="{{$product->StockDate}}" class="form-control">
            @error('s_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Rating</span>
            <input type="text" name="rating" value="{{$product->Rating}}" class="form-control">
            @error('rating')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>


        <div class="col-md-4 form-group">

        <span>Purchased Date</span>
        <input type="date" name="p_date" value="{{$product->PurchasedDate}}" class="form-control">
        @error('p_date')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        
        <input type="submit" class="btn btn-success" value="Save" >
    </form>

    @endsection