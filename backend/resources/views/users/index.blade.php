@extends('layouts.app')
@section('title', 'Users')
@section('content')
<div class="card">
<div class="card-header page-header">
<h3>All Users</h3>
<a href="{{ route('admin.users.create') }}" class="btn-outline">Add New</a>
</div>
  <div class="card-body">
  @if (session('success'))
    <div class="status success">
        {{ session('success') }}
    </div>
@endif
  <table>
    <thead>
      <tr>
        <td><input id="cb-select-all-1" type="checkbox"></td>
        <td>Username</td>
        <td>Name</td>
        <td>Email</td>
        <td>Role</td>
      </tr>
    </thead>
    <tfoot>
      <tr>
      <td><input id="cb-select-all-2" type="checkbox"></td>
        <td>Username</td>
        <td>Name</td>
        <td>Email</td>
        <td>Role</td>
      </tr>
    </tfoot>
    <tbody>
    @foreach ($users as $user)
      <tr>
        <td><input type="checkbox" name="users[]" id="user_1" class="administrator" value="1"></td>
        <td class="username">
         <div> <img src="{{ $user->gravatarUrl }}" width="32" height="32" alt="1">
         <div>
         <strong>{{ $user->username }}</strong>
         <div class="row-actions">
            <span class="edit"><a href="{{ route('admin.users.edit', ['user' => $user->id]) }}">Edit</a> | </span>
           <span class="view"> <a href="">View</a> | </span>
            <span class="delete"><form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
            </form></span>
          </div>
         </div>
        </div>
         
        </td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->user_role }}</td>
        <!-- <td>  <td>{{ $user->created_at->format('m/d/Y') }}</td></td> -->
      </tr>
      @endforeach
    
    </tbody>
  </table>
 
  </div>
</div>
@endsection