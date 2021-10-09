@extends('layouts.app')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Product Code</th>
            <th>Product Desc</th>
            <th>Quantity</th>
            <th>Category</th>
            <th>Price</th>
            <th>Stock Date</th>
            <th>Rating</th>
            <th>Purchased Date</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($products as $item)
            <tr>
                <td>{{$item->ProductId}}</td>
                <td>{{$item->ProductName}}</td>
                <td>{{$item->ProductCode}}</td>
                <td>{{$item->ProductDesc}}</td>
                <td>{{$item->Quantity}}</td>
                <td>{{$item->Category}}</td>
                <td>{{$item->Price}}</td>
                <td>{{$item->StockDate}}</td>
                <td>{{$item->Rating}}</td>
                <td>{{$item->PurchasedDate}}</td>
                <td><a href="/product/edit/{{$item->ProductId}}/{{$item->ProductName}}">Edit</a></td>
                <td><a href="/product/delete/{{$item->ProductId}}/{{$item->ProductName}}">Delete</a></td>
                  </tr>
        @endforeach
    </table>
@endsection