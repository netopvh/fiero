@extends('frontend.layouts.app')

@section('scripts')
    <script src="{{ asset('frontend/assets/js/app.js') }}"></script>
@stop

@section('slider')
    @include('slider')
@stop

@section('box')
    @include('box')
@stop

@section('content')
    <hr>
    <div class="row">
        <div class="col-md-4">
            <fieldset>
                <legend>Notícias <span class="pull-right">Ver mais</span></legend>
                asdasdsasd
            </fieldset>
        </div>
        <div class="col-md-6">
            <fieldset>
                <legend>Notícias </legend>

                asdasdsasd
            </fieldset>
        </div>
@endsection
