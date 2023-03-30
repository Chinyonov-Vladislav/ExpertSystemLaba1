@extends('layouts.layout')
@section('title')
    Результат работы экспертной системы
@endsection

@section('content')
    <result-page
        :text_help='{!! json_encode($text_help) !!}'
        :text_result='{!! json_encode($text_result) !!}'
        :flag_start = false></result-page>
@endsection
