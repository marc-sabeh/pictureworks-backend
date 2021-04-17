@extends('layouts.app')

@section('content')
    <h1>Users</h1>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Comment</th>
          </tr>
        </thead>
        <tbody>
    @if (count($users) > 0)
        @foreach ($users as $user)

      <tr>
      <th scope="row">{{$user->id}}</th>
        <td>
            {{$user->name}}
        </td>
        <td>
            {{$user->comments}}
        </td>
        <td>
            <a href="/users/{{$user->id}}/edit" class="btn btn-secondary float-left mr-1">Edit</a>
            <form action="/users/{{$user->id}}" method="post">
                @csrf
                <button class="btn btn-danger ">Delete</button>
                @method('DELETE')
            </form>
        </td>
      </tr>


            
        @endforeach
 
    @else
        <p>No Users found</p>
    @endif
  <a href="/users/create" class="btn btn-secondary float-right mr-1">Create</a>


@endsection
</tbody>
</table>

