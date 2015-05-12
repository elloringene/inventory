@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Create a Category</div>

                <div class="panel-body">
                    {!! Form::open() !!}
                        {!! Form::label('Category Name' , 'Name:'); !!}
                        {!! Form::input('text' , 'name' , 'Category Name' , [ 'class' => 'form-control' ] ); !!}
                        <br>
                        {!! Form::label('For' , 'For:'); !!}
                        {!! Form::select('types', $categories , null, [ 'class' => 'form-control' ]); !!}
                        <br>
                        {!! Form::label('Description' , 'Description:'); !!}
                        {!! Form::textarea('description', null, [ 'class' => 'form-control' ]); !!}
                        <br>
                        {!! Form::input('hidden' , 'slug' , null ); !!}

                        {!! Form::submit('Submit' , [ 'class' => 'form-control' ] ); !!}
                    {!! Form::close() !!}
                </div><!-- END Panel BOdy -->
            </div><!-- END Panel -->
        </div><!-- END Row -->
    </div><!-- END Container -->
@stop