@extends('laravel-usp-theme::master')

@section('title') Sistema USP @endsection

@section('styles')
@parent
<style>
    /*seus estilos*/
</style>
@endsection

@section('skin_footer')
    {{-- Seu código --}}
@endsection

@section('javascripts_bottom')
@parent
<script>
    // Seu código .js
</script>
@endsection
