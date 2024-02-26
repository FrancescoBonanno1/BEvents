@extends('layouts.app')
@section('content')
<h1 class="display-5 fw-bold">
    Welcome to Laravel+Bootstrap 5
</h1>

<div>@foreach ($operators as $operator)
    <h2>{{$operator -> name}}</h2>
@endforeach
</div>