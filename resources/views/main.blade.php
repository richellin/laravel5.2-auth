@extends('layouts.app')
 
@section('title')
    투두 로그
@endsection
 
@section('content')
    <div class="container">
        <div class="title">라라벨 Todo 사이트</div>
        <div class="content">
            총 가입자 수 : {{ $total['user'] }}</p>
            프로젝트  수 : {{ $total['project'] }}</p>
            Task     수 : {{ $total['task'] }}</p>
        </div>
    </div>
 
@endsection