@extends('voyager::master')

@section('content')
    <div class="container">
        <br>
        <form class="form" action="{{ url('admin/mail/send') }}" method="post">
            {{ csrf_field() }}
            <textarea name="message" class="form-control" rows="20"></textarea>
            <input type="submit" class="btn btn-success" value="Send">
        </form>
    </div>
@stop
