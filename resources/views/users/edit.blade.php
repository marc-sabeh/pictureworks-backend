@extends('layouts.app')

@section('content')
    <h1>Edit a User</h1>
<form action="/users/{{$user->id}}" method="POST"  enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="id">Id</label>
    <input type="text" name="id" id="id" placeholder="ID" class="form-control" value="{{$user->id}}">
    </div>
    <div class="form-group">
        <label for="email">Name</label>
    <input type="text" name="name" id="name" placeholder="Name" class="form-control" value="{{$user->name}}">
    </div>
    <div class="form-group">
        <label for="email">Comments</label>
    <input type="text" name="comments" id="comments" placeholder="Comments" class="form-control" value="{{$user->comments}}">
    </div>
    
    <input type="submit" value="Submit" class="btn btn-primary">
</form>
@endsection