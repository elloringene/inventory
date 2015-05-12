 @extends('app')

 @section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-10 col-md-offset-1">
             <div class="panel panel-default">
                 <div class="panel-heading">Users</div>

                 <div class="panel-body">

                    <table class="table table-condensed">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Level</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>

                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->level }}</td>
                            <td>
                                {!! Html::link('users/'.$user->id.'/edit', 'Edit'); !!} |
                                {!! Html::link('users/delete/'.$user->id, 'Delete'); !!}
                            </td>
                        </tr>
                    @endforeach
                        </tbody>
                    </table>
                    {!! Html::link('users/create' , 'Create User +'); !!}
                 </div><!-- ENd Panel Body -->
             </div><!-- ENd panel -->
         </div><!-- ENd Col -->
     </div><!-- End Row -->
 </div><!-- End Container -->
 @endsection
