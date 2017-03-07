@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <div class="page-header" id="banner" style="">
                    <b>Selamat datang {{Auth::User()->username}}</b>
                </div>
            </div>
        </div>
</div>
@endsection
