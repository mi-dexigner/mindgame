@extends('layouts.app')
@section('title', 'Words')
@section('content')
<div class="card">
<div class="card-header page-header">
<h3>All Words</h3>
<a href="{{ route('admin.words.create') }}" class="btn-outline">Add New</a>
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
        <td>Word</td>
       <td>Level</td>
       <td>Published Date</td>
      </tr>
    </thead>
    <tfoot>
      <tr>
      <td><input id="cb-select-all-2" type="checkbox"></td>
       <td>Word</td>
       <td>Level</td>
       <td>Published Date</td>
      </tr>
    </tfoot>
    <tbody>
    @foreach ($words as $word)
      <tr>
        <td><input type="checkbox" name="users[]" id="user_1" class="administrator" value="1"></td>
        <td class="username">
          <div></div>
         <div>
         <strong>{{ $word->word }}</strong>
         <div class="row-actions">
            <span class="edit"><a href="{{ route('admin.words.edit', ['word' => $word->id]) }}">Edit</a> | </span>
            <span class="delete"><form action="{{ route('admin.words.destroy', $word->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this word?')">Delete</button>
            </form></span>
          </div>
         </div>
        </div>
         
        </td>
        <td>{{ $word->level->name }}</td>
        @if (!is_null($word->created_at))
        <td>{{ $word->created_at->format('m/d/Y') }}</td>
        @endif
      </tr>
      @endforeach
    
    </tbody>
  </table>
 
  </div>
</div>
@endsection