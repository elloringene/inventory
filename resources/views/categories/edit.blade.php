@extends('app')

@section('content')
    <div class="container">
        <div class="row">
        <h2>Edit Category</h2>
        {!! Form::model($category , ['method'=>'PATCH']) !!}
            {!! Form::label('Category Name' , 'Name:'); !!}
            {!! Form::input('text' , 'name' , null , [ 'class' => 'form-control' ] ); !!}
            <br>
            {!! Form::label('For' , 'For:'); !!}
            {!! Form::select('for', $categories , null, [ 'class' => 'form-control' ]); !!}
            <br>
            {!! Form::label('Description' , 'Description:'); !!}
            {!! Form::textarea('description', null, [ 'class' => 'form-control' ]); !!}
            <br>
            {!! Form::input('hidden' , 'slug' , null ); !!}

            {!! Form::submit('Submit' , [ 'class' => 'form-control' ] ); !!}
        {!! Form::close() !!}
        </div>
    </div>
@stop