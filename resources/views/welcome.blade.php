@extends('layout')

@section('customCss')
    @parent
@append

@section('content')
    <div class="contenido">
        <figure>
            <img src="{{asset('salmonPez.png')}}" alt="">
        </figure>
        <h2>Santiago</h2>
    </div>
@endsection

@section('jsScripts')
    @parent
    @include('js.welcomeJS')
@append
