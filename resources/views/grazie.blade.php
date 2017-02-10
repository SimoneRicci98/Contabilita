@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')

    @parent

@stop

@section('content')

    <style>
        div.thanks{
            font-size: 50px;
        }
    </style>


<div class="thanks">
    GRAZIE
</div>


@stop