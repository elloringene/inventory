 @extends('app')

 @section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-10 col-md-offset-1">
             <div class="panel panel-default">
                 <div class="panel-heading">Login</div>

                 <div class="panel-body">
                    @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif

                    {!! Form::open() !!}
                        {!! Form::label('E-mail' , 'E-mail:'); !!}
                        {!! Form::input('text', 'email' , null , ['class'=>'form-control']); !!}
                        <br>
                        {!! Form::label('Password' , 'Password:'); !!}
                        {!! Form::password('password' , ['class'=>'form-control']); !!}
                        <br>
                        {!! Form::submit('Submit' , ['class'=>'form-control'] ); !!}
                    {!! Form::close() !!}

                 </div><!-- ENd Panel Body -->
             </div><!-- ENd panel -->
         </div><!-- ENd Col -->
     </div><!-- End Row -->
 </div><!-- End Container -->
 @endsection
