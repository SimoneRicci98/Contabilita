@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="col-md-3">Numero fattura<input type="number"min="0" a></div>
        <div class="col-md-5">
            <div class="col-md-3"><input type="radio" name="clifor">Cliente</div >
            <div class="col-md-3">
                <select>
                    <option value="null"></option>
                    <option value="cli1">cliente1</option>
                    <option value="cli2">cliente2</option>
                    <option value="cli3">cliente3</option>
                    <option value="cli4">Cliente4</option>
                </select>
            </div>
            <div class="col-md-6"><button><a href="paginainiziale"> &nbsp;aggiungi &nbsp;cliente</a></button></div>
            <div class="col-md-3"><input type="radio" name="clifor">Fornitore</div>
            <div class="col-md-3">
                <select>
                    <option value="null"></option>
                    <option value="for1">fornitore1</option>
                    <option value="for2">fornitore2</option>
                    <option value="for3">fornitore3</option>
                </select>
            </div>
            <div class="col-md-6">
                <button>aggiungi fornitore</button>
            </div>
        </div>
    </div>
    <div class="col-md-12" style="margin-top: 3%">
        <div class="col-md-3">Codice
            <select>
                <option value="null"></option>
                <option value="cod1">codice1</option>
                <option value="cod2">codice2</option>
                <option value="cod3">codice3</option>
            </select>
        </div>
        <div class="col-md-3">Conto di mastro
            <select>
                <option value="null"></option>
                <option value="con1">conto1</option>
                <option value="con2">conto2</option>
                <option value="con3">conto3</option>
            </select>
        </div>
    </div>
    <div class="col-md-12" style="margin-top: 3%">

    </div>
</div>
@endsection