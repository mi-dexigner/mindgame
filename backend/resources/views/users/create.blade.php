@extends('layouts.app')
@section('title', 'User New')
@section('content')
<div class="card">
<div class="card-header page-header column">
    <h3>Add New User</h3>
    <small>Create a brand new user and add them to this site.</small>
</div>
  <div class="card-body">
  <form method="post" method="user-new.html" id="createuser">
<input type="hidden" name="action" value="createuser">
<table class="form-table" role="presentation">
<tbody>
  <tr class="form-field">
    <th>
      <label for="user_login">Username (required)</label>
    </th>
    <td>
     <input type="text" placeholder="Username" name="user_login" id="user_login">
    </td>
  </tr>
  <tr class="form-field">
    <th>
      <label for="user_email">Email (required)</label>
    </th>
    <td>
      <input type="email" placeholder="Email" name="user_email" id="user_email">
      
    </td>
  </tr>
  <tr class="form-field">
    <th scope="row">
      <label for="first_name"> First Name</label>
    </th>
    <td>
      <input type="text" placeholder="First Name" name="meta[first_name]" id="first_name">
    </td>
  </tr>
  <tr class="form-field">
    <th scope="row">
      <label for="last_name">Last Name</label>
    </th>
    <td>
      <input type="text" placeholder="Last Name" name="meta[last_name]" id="last_name">
    </td>
  </tr>
   <tr class="form-field">
    <th scope="row">
      <label for="website">Website</label>
    </th>
    <td>
      <input type="text" placeholder="Website" name="meta[website]" id="website">
    </td>

  </tr>
  <tr class="form-field">
     <th scope="row">
      <label for="user_pass">Password</label>
    </th>
    <td>
      <input type="password" id="password" placeholder="password" name="user_pass" id="user_pass">
    </td>
  </tr>
    <tr class="form-field">
         <th scope="row">
      <label for="role">Role</label>
    </th>
    <td>
  <select id="role"  name="meta[role]" id="role">
    <option value="shop_manager">Shop manager</option>
    <option value="customer">Customer</option>
    <option selected="selected" value="subscriber">Subscriber</option>
    <option value="contributor">Contributor</option>
    <option value="author">Author</option>
    <option value="editor">Editor</option>
    <option value="administrator">Administrator</option>
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