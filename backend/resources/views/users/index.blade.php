@extends('layouts.app')
@section('title', 'User List')
@section('content')
<div class="card">
<div class="card-header page-header">
<h3>All Users</h3>
<a href="user-new.html" class="btn-outline">Add New</a>
</div>
  <div class="card-body">
 
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

      <tr>
        <td><input type="checkbox" name="users[]" id="user_1" class="administrator" value="1"></td>
        <td class="username">
         <div> <img src="https://randomuser.me/api/portraits/women/50.jpg" width="32" height="32" alt="1">
         <div>
         <strong>admin</strong>
         <div class="row-actions">
            <span class="edit"><a href="">Edit</a> | </span>
           <span class="view"> <a href="">View</a> | </span>
            <span class="delete"><a href="">Delete</a></span>
          </div>
         </div>
        </div>
         
        </td>
        <td>James</td>
        <td>admin@yopmail.com</td>
        <td>Administrator</td>
      </tr>
   
    
    </tbody>
  </table>
 
  </div>
</div>
@endsection