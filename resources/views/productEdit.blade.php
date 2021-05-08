@extends('layout')
@section('content')

<div style="width:250px; margin-left:auto;margin-right:auto;margin-top:50px;">
<form action ="/edit" method="POST" class="form-group">
@csrf
    <input type="hidden" name="id" value="{{$product['id']}}" class="form-control"></input>
    <input type="text" name="title" placeholder="Enter title " value="{{$product['title']}}" class="form-control"></input><br/><br/>
    <input type="text" name="detail" placeholder="Enter description" value="{{$product['detail']}}" class="form-control"></input><br/><br/>
    <input type="number" name="price" placeholder="Enter price" value="{{$product['price']}}" class="form-control"></input><br/><br/>
    <button type="submit" class="btn btn-primary">Update Product</button>
</form>
</div>

@stop