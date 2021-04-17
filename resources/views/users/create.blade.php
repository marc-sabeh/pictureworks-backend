@extends('layouts.app')

@section('content')

    <h1>Add a User</h1>
<form action="/users" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <div class="col-md-12">
          <label for="name">Id</label>
          <input type="text" name="id" id="id" placeholder="Id" class="form-control" >
          <label for="name">Name</label>
          <input type="text" name="name" id="name" placeholder="name" class="form-control" >
          <label for="name">Password</label>
          <input type="text" name="password" id="password" placeholder="password" class="form-control" >
          <label for="name">Comments</label>
          <input type="text" name="comments" id="comments" placeholder="comments" class="form-control" >
    <input type="submit" value="Submit" class="btn btn-primary mt-2">
        </div></div>
</form>
@endsection