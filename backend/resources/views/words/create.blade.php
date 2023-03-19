@extends('layouts.app')
@section('title', 'Question New')
@section('content')
<div class="card">
<div class="card-header page-header column">
    <h3>Add New Question</h3>
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

  <form method="POST" action="{{ route('admin.words.store') }}">
  @csrf
  <input type="hidden" class="form-control" name="user_id" id="user_id" value="{{ auth()->user()->id }}" />
<table class="form-table" role="presentation">
<tbody>
<tr class="form-field">
    <th scope="row">
      <label for="name">Question Name  (required)</label>
    </th>
    <td>
    <input type="text" class="form-control" placeholder="Word" name="word" id="word" required>
    </td>
  </tr>
  <tr class="form-field">
    <th>
      <label for="time_limit">Level (required)</label>
    </th>
    <td>
    <select class="form-control" name="level_id" id="level_id" required>
                            <option value="">Select Level</option>
                            @foreach ($levels as $level)
                                <option value="{{ $level->id }}">{{ $level->name }}</option>
                            @endforeach
                        </select>    </td>
  </tr>

</tbody>
</table>
<p class="submit"><input type="submit" name="createlevel" id="createlevelsub" class="btn" value="Add New Question"></p>
</form>
  
 
  </div>
</div>
@endsection