@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
    @include('commons.error_tasks')
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('status', 'ステータス：') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', 'タスク：') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('確定') !!}
    
    {!! Form::close() !!}

@endsection