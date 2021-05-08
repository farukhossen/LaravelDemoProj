@extends('layout')
@section('content')

<form action ="/edit" method="POST">
@csrf
    <input type="hidden" name="id" value="{{$product['id']}}"></input>
    <input type="text" name="title" placeholder="Enter title " value="{{$product['title']}}"></input><br/><br/>
    <input type="text" name="detail" placeholder="Enter description" value="{{$product['detail']}}"></input><br/><br/>
    <input type="number" name="price" placeholder="Enter price" value="{{$product['price']}}"></input><br/><br/>
    <button type="submit">Update Product</button>
</form>

@stop