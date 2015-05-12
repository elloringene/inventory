@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Create a Product</div>

                <div class="panel-body">
                    {!! Form::open(['enctype'=>'multipart/form-data']) !!}

                        <div class="form-group {{ $errors->first('name') ? 'has-error' : '' }}">
                            {!! Form::label('Product Name' , 'Name:'); !!}
                            {!! Form::input('text' , 'name' , null , [ 'class' => 'form-control' ] ); !!}
                            {!! $errors->first('name','<span class="help-block">:message</span>') !!}
                        </div><br/>

                        <div class="form-group">
                        {!! Form::label('Product Photo' , 'Photo:'); !!}
                        {!! Form::input('file' , 'filefield' , null , [ 'class' => 'form-control' ] ); !!}
                        </div><br/>

                        <div class="form-group">
                        {!! Form::label('Category' , 'Category:'); !!}
                        {!! Form::select('categories', $categories , null, [ 'class' => 'form-control' ]); !!}
                        </div><br/>

                        <div class="form-group">
                        {!! Form::label('Brand' , 'Brand:'); !!}
                        {!! Form::select('brand', $brands , null, [ 'class' => 'form-control' ]); !!}
                        </div><br/>

                        <div class="form-group">
                            {!! Form::label('Price' , 'Price:'); !!}
                            <div class="input-group">
                              <span class="input-group-addon">$</span>
                                {!! Form::input('text' , 'sell_price' , null , [ 'class' => 'form-control' , 'aria-label' => 'Amount (to the nearest dollar)'] ); !!}
                              {{--<span class="input-group-addon">.00</span>--}}
                            </div>
                        </div><br/>

                        <div class="form-group">
                        {!! Form::label('Description' , 'Description:'); !!}
                        {!! Form::textarea('description' , null , [ 'class' => 'form-control' ] ); !!}
                        </div><br/>

                        {!! Form::input('hidden' , 'slug' , null ); !!}

                        {!! Form::submit('Submit' , [ 'class' => 'form-control' ] ); !!}
                    {!! Form::close() !!}
                </div><!-- END Panel BOdy -->
            </div><!-- END Panel -->
        </div><!-- END Row -->
    </div><!-- END Container -->
@stop