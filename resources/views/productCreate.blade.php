@extends('layout')
@section('content')
<div style="width:250px; margin-left:auto;margin-right:auto;margin-top:50px;">
<form action ="product" method="POST" class="form-group">
@csrf
    <input type="text" name="title" placeholder="Enter title " class="form-control"></input><br/><br/>
    <input type="text" name="detail" placeholder="Enter description" class="form-control"></input><br/><br/>
    <input type="number" name="price" placeholder="Enter price" class="form-control"></input><br/><br/>
    <button type="submit" class="btn btn-primary">Create Product</button>
</form>
</div>

@stop