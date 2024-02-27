@extends('layouts.app')
@section('content')

<div>@foreach ($operators as $operator)
    <h2>{{$operator -> name}}</h2>
@endforeach
</div>