@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Create a Category</div>

                <div class="panel-body">
                    {!! Form::open() !!}
                        {!! Form::label('Name' , 'Name:'); !!}
                        {!! Form::input('text' , 'name' , 'Category Name' , [ 'class' => 'form-control' ] ); !!}
                        <br>
                        {!! Form::label('Name' , 'Name:'); !!}
                        {!! Form::input('email' , 'email' , 'Email' , [ 'class' => 'form-control' ] ); !!}
                        <br>
                        {!! Form::label('Description' , 'Description:'); !!}
                        {!! Form::password('password', [ 'class' => 'form-control' ]); !!}
                        <br>
                        {!! Form::input('hidden' , 'slug' , null ); !!}

                        {!! Form::submit('Submit' , [ 'class' => 'form-control' ] ); !!}
                    {!! Form::close() !!}
                </div><!-- END Panel BOdy -->
            </div><!-- END Panel -->
        </div><!-- END Row -->
    </div><!-- END Container -->
@stop