@extends('layouts.app')
@section('styles')
     <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
@endsection