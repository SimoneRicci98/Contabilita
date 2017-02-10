@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')

    @parent

@endsection

@section('content')

    <form action="{{ route('postVersion') }}" method="post">
        {!! csrf_field() !!}

        <div class="radio">
            <label>
                <input type="radio" name="optionsRadios" id="compraprova" value="0" checked>
                Voglio acquistare la versione completa al costo di qualcosa
            </label>
            <label>
                <input type="radio" name="optionsRadios" id="compraprova" value="1" checked>
                Voglio provare il programma per 15 giorni
            </label>
        </div>

        <div>
            <button type="submit" class="btn btn-primary btn-lg">Avanti</button>

        </div>

    </form>

@endsection