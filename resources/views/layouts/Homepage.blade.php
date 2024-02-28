@extends('layouts.app')
@section('content')
<nav class="navbar">
    <a href="/">login</a>
</nav>

<div class="containerHome" >@foreach ($operators as $operator)
    <h2>{{$operator -> name}}</h2>
@endforeach
</div>

