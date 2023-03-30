@extends('layouts.layout')
@section('title')
    Вопросы экспертной системы
@endsection

@section('content')
    <question-page :question='{!! json_encode($start_question) !!}'
                   :answers_on_question='{!! json_encode($answers) !!}'
                    :help='{!! json_encode($text_help) !!}'
                   :flag_start = false></question-page>
@endsection
