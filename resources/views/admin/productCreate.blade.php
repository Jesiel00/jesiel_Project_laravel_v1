@extends('templates.dashboard')
@section('content')
<body>
    <main>

 <div class="card">
  <div class="card-body">
      
    <form action="{{url('/admin')}}" method="post">
        {!! csrf_field() !!}
        <label>title</label></br>
        <input type="text" name="title_food" id="text" class="form-control"></br>
        <label>Menu</label></br>
        <input type="text" name="menu" id="text" class="form-control"></br>
        <label>Description</label></br>
        <input type="paragraph" name="desc" id="text" class="form-control"></br>
        <label>Sub-description</label></br>
        <input type="paragraph" name="sub_desc" id="text" class="form-control"></br>
        <label>Image</label></br>
        <input type="text" name="image" id="text" class="form-control"></br>
        <label>Class</label></br>
        <input type="text" name="class" id="text" value="img-fluid" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
</main>

</body>
</html>

@endsection