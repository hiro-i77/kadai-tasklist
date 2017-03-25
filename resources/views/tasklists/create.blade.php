@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::labal('content', 'タスク：') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('確定') !!}
    
    {!! Form::close() !!}

@endsection