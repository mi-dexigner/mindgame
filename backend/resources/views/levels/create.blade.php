@extends('layouts.app')
@section('title', 'Levels New')
@section('content')
<div class="card">
<div class="card-header page-header column">
    <h3>Add New Level</h3>
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

  <form method="POST" action="{{ route('admin.levels.store') }}">
  @csrf
<table class="form-table" role="presentation">
<tbody>
<tr class="form-field">
    <th scope="row">
      <label for="name">Level Name  (required)</label>
    </th>
    <td>
      <input type="text" placeholder="Level  Name" name="name" id="name">
    </td>
  </tr>
  <tr class="form-field">
    <th>
      <label for="time_limit">Time Limit (required)</label>
    </th>
    <td>
     <input type="number" placeholder="Time Limit" name="time_limit" id="time_limit">
    </td>
  </tr>

</tbody>
</table>
<p class="submit"><input type="submit" name="createlevel" id="createlevelsub" class="btn" value="Add New Level"></p>
</form>
  
 
  </div>
</div>
@endsection