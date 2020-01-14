
@extends('layouts.app')

@section('content')
<div class="container">
    <form action="add" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="usr">title:</label>
            <input type="text" name="title" id="" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="usr">body:</label><br>
            <textarea name="body" id="" cols="50" rows="10" placeholder="put your article here" class="form-control"></textarea>
        </div>
        <br>
        <input type="submit" value="add new" class="btn btn-primary">
    </form>
</div>
@endsection