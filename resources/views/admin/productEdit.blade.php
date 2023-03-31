@extends('templates.dashboard')
@section('content')

<div class="card">
  <div class="card-body">
      
    <form action="{{url('/admin/'.$products->id)}}" method="post">
    {!! csrf_field() !!}
        @method ("PATCH")
        <label>ID</label></br>
        <input type="hidden" name="id" id="id" value="{{$products->id}}" id="id"/></br>
        <label>Title</label></br>
        <input type="text" name="title_food" id="name" value="{{$products->title_food}}" class="form-control"></br>
        <label>Menu</label></br>
        <input type="text" name="menu" id="name" value="{{$products->menu}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="paragraph" name="desc" id="name" value="{{$products->desc}}" class="form-control"></br>
        <label>Sub-description</label></br>
        <input type="paragraph" name="sub_desc" id="name" value="{{$products->sub_desc}}" class="form-control"></br>
        <label>Image</label></br>
        <input type="text" name="image" id="name" value="{{$products->image}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>

@stop  