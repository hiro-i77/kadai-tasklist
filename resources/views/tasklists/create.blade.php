@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
    @include('commons.error_tasks')
    
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-ocd ffset-3">
    
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
                <div class="form-group">    
                    {!! Form::label('status', 'ステータス：') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('content', 'タスク：') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('確定', ['class' => 'btn btn-primary']) !!}
            
            {!! Form::close() !!}
        </div><!--.col-xs-6-->
    </div><!--.row-->
@endsection