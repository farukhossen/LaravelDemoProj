@extends('layout')
@section('content')


<table class="table">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{$product['id']}}</td>
        <td>{{$product['title']}}</td>
        <td>{{$product['detail']}}</td>
        <td>{{$product['price']}}</td>
        <td><a href="edit/{{$product['id']}}">Edit</a></td>
        <td><a href="delete/{{$product['id']}}">Delete</a></td>
    </tr>
    @endforeach
</table>

<a href="new">new Product</a>

@stop