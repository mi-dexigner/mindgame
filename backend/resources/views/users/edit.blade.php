@extends('layouts.app')
@section('title', 'User New')
@section('content')
<div class="card">
<div class="card-header page-header column">
    <h3>Add New User</h3>
    <small>Create a brand new user and add them to this site.</small>
</div>
  <div class="card-body">
  @if ($errors->any())
    <div class="status danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.users.update', $user->id) }}" method="POST">
  @csrf
  @method('PUT')
<table class="form-table" role="presentation">
<tbody>
<tr class="form-field">
    <th scope="row">
      <label for="name">Name  (required)</label>
    </th>
    <td>
      <input type="text" placeholder="Full Name" name="name" id="name" value="{{ $user->name }}">
    </td>
  </tr>
  <tr class="form-field">
    <th>
      <label for="username">Username (required)</label>
    </th>
    <td>
     <input type="text" placeholder="Username" name="username" id="username" value="{{ $user->username }}">
    </td>
  </tr>
  <tr class="form-field">
    <th>
      <label for="user_email">Email (required)</label>
    </th>
    <td>
      <input type="email" placeholder="Email" name="email" id="email" value="{{ $user->email }}">
      
    </td>
  </tr>
 
 
  <tr class="form-field">
     <th scope="row">
      <label for="password">Password</label>
    </th>
    <td>
      <input type="password" id="password" placeholder="password" name="password" id="password">
    </td>
  </tr>
  <tr class="form-field">
     <th scope="row">
      <label for="password_confirmation">Confirm Password</label>
    </th>
    <td>
    <input type="password" name="password_confirmation" id="password_confirmation">
    </td>
  </tr>
    <tr class="form-field">
         <th scope="row">
      <label for="user_role">Role</label>
    </th>
    <td>
  <select id="role"  name="user_role" id="role">
    <option selected="selected" value="user">User</option>
    <option value="admin">Administrator</option>
</select>
    </td>
 </tr>

</tbody>
</table>
<p class="submit"><input type="submit" name="createuser" id="createusersub" class="btn" value="Add New User"></p>
</form>
  
 
  </div>
</div>
@endsection