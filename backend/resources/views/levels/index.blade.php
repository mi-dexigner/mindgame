@extends('layouts.app')
@section('title', 'Levels')
@section('content')
<div class="card">
<div class="card-header page-header">
<h3>All Levels</h3>
<a href="{{ route('admin.levels.create') }}" class="btn-outline">Add New</a>
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
        <td>Name</td>
       <td>Time Limit</td>
       <td>Published Date</td>
      </tr>
    </thead>
    <tfoot>
      <tr>
      <td><input id="cb-select-all-2" type="checkbox"></td>
      <td>Name</td>
       <td>Time Limit</td>
       <td>Published Date</td>
      </tr>
    </tfoot>
    <tbody>
    @foreach ($levels as $level)
      <tr>
        <td><input type="checkbox" name="users[]" id="user_1" class="administrator" value="1"></td>
        <td class="username">
          <div></div>
         <div>
         <strong>{{ $level->name }}</strong>
         <div class="row-actions">
            <span class="edit"><a href="{{ route('admin.levels.edit', ['level' => $level->id]) }}">Edit</a> | </span>
            <span class="delete"><form action="{{ route('admin.levels.destroy', $level->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this level?')">Delete</button>
            </form></span>
          </div>
         </div>
        </div>
         
        </td>
        <td>{{ $level->time_limit }}</td>
        @if (!is_null($level->created_at))
        <td>{{ $level->created_at->format('m/d/Y') }}</td>
        @endif
      </tr>
      @endforeach
    
    </tbody>
  </table>
 
  </div>
</div>
@endsection