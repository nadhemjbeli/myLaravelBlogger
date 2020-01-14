@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="form-group">
            <label for="usr">body:</label><br>
            {{$article ->body ?? ''}}
        </div>

        <div class="form-group">
            <table class="table table-striped">
                <tr>
                    <td>comments</td>
                </tr>
                @foreach ($article ->comments ?? '' as $comment)
                    <tr>
                        <td>{{Auth::User()->name}} </td>
                    <td>{{$comment->comment}}</td>
                    </tr>
                @endforeach
            </table>
            <form action="/read/{{$article ->id?? ''}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">body:</label><br>
                    <textarea name="body" id="" cols="50" rows="4"class="form-control"></textarea>
                </div>

                <br>
                <input type="submit" name="" id="" class="btn btn-primary" value="add">
            </form>
        </div>
    </div>
@endsection