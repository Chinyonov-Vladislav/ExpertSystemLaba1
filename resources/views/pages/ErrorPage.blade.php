@extends('layouts.layout')
@section('title')
    Страница ошибки
@endsection

@section('content')
    <error-page :text_error='{!! json_encode($message) !!}'></error-page>
@endsection
