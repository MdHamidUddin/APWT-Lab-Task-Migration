@extends('layouts.app')
@section('content')
    <form action="{{route('addProductSubmit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}

        
        <div class="col-md-4 form-group">
            <span>Product Id</span>
            <input type="text" name="id" value="{{old('id')}}"class="form-control">
            @error('id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-md-4 form-group">
            <span>Product Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="col-md-4 form-group">
            <span>Product Code</span>
            <input type="text" name="code" value="{{old('code')}}" class="form-control">
            @error('code')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="col-md-4 form-group">
            <span>Product Description</span>
            <input type="text" name="desc" value="{{old('desc')}}" class="form-control">
            @error('desc')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="col-md-4 form-group">
            <span>Product Category</span>
            <input type="text" name="cate" value="{{old('cate')}}" class="form-control">
            @error('cate')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="col-md-4 form-group">
            <span>Product Price</span>
            <input type="text" name="price" value="{{old('price')}}" class="form-control">
            @error('price')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="col-md-4 form-group">
            <span>Quantity</span>
            <input type="text" name="quantity" value="{{old('quantity')}}" class="form-control">
            @error('quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

        <div class="col-md-4 form-group">

            <span>Stock Date</span>
            <input type="date" name="s_date" value="{{old('s_date')}}" class="form-control">
            @error('s_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Rating</span>
            <input type="text" name="rating" value="{{old('rating')}}" class="form-control">
            @error('rating')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>


        <div class="col-md-4 form-group">

        <span>Purchased Date</span>
        <input type="date" name="p_date" value="{{old('p_date')}}" class="form-control">
        @error('p_date')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        
        <input type="submit" class="btn btn-success" value="Add Product" >
    </form>

    @endsection