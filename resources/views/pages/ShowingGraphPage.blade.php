@extends('layouts.layout')
@section('title')
    Граф вопрос-ответ-результаты
@endsection

@section('content')
    <show-graph-page :data-graph='{!! json_encode($graphData) !!}'></show-graph-page>
@endsection
