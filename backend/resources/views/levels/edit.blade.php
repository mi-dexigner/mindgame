@extends('layouts.app')
@section('title', 'User Edit')
@section('content')
<div class="card">
<div class="card-header page-header column">
    <h3>Update Level</h3>
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

<form action="{{ route('admin.levels.update', $level->id) }}" method="POST">
  @csrf
  @method('PUT')
<table class="form-table" role="presentation">
<tbody>
<tr class="form-field">
    <th scope="row">
      <label for="name">Level Name  (required)</label>
    </th>
    <td>
      <input type="text" placeholder="Level  Name" name="name" id="name" value="{{ old('name', $level->name) }}">
    </td>
  </tr>
  <tr class="form-field">
    <th>
      <label for="time_limit">Time Limit (required)</label>
    </th>
    <td>
     <input type="number" placeholder="Time Limit" name="time_limit" id="time_limit" value="{{ old('time_limit', $level->time_limit) }}">
    </td>
  </tr>

</tbody>
</table>
<p class="submit"><input type="submit" name="createuser" id="createusersub" class="btn" value="Update Level"></p>
</form>
  
 
  </div>
</div>
@endsection