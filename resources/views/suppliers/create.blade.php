@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Create a Product</div>

                <div class="panel-body">
                    {!! Form::open() !!}
                        {!! Form::label('Supplier Name' , 'Name:'); !!}
                        {!! Form::input('text' , 'name' , null , [ 'class' => 'form-control' ] ); !!}
                        <br/>
                        {!! Form::label('Type' , 'Type:'); !!}
                        {!! Form::select('types', $categories , null, [ 'class' => 'form-control' ]); !!}
                        <br/>
                        {!! Form::label('Location' , 'Location:'); !!}
                        {!! Form::textarea('address' , null , [ 'class' => 'form-control' ] ); !!}
                        <br/>
                        {!! Form::label('Description' , 'Description:'); !!}
                        {!! Form::textarea('description' , null , [ 'class' => 'form-control' ] ); !!}

                        {!! Form::input('hidden' , 'slug' , null ); !!}
                        <br/>
                        {!! Form::submit('Submit' , [ 'class' => 'form-control' ] ); !!}
                    {!! Form::close() !!}
                </div><!-- END Panel BOdy -->
            </div><!-- END Panel -->
        </div><!-- END Row -->
    </div><!-- END Container -->
@stop