@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Create a Product</div>

                <div class="panel-body">
                    {!! Form::open() !!}
                        {!! Form::label('Brand Name' , 'Name:'); !!}
                        {!! Form::input('text' , 'name' , 'Brand Name' , [ 'class' => 'form-control' ] ); !!}
                        <br>
                        {!! Form::label('Description' , 'Description:'); !!}
                        {!! Form::input('text' , 'description' , 'Description' , [ 'class' => 'form-control' ] ); !!}
                        <br>
                        {!! Form::input('hidden' , 'slug' , null ); !!}

                        {!! Form::submit('Submit' , [ 'class' => 'form-control' ] ); !!}
                    {!! Form::close() !!}
                </div><!-- END Panel BOdy -->
            </div><!-- END Panel -->
        </div><!-- END Row -->
    </div><!-- END Container -->
@stop