 @extends('app')

 @section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-10 col-md-offset-1">
             <div class="panel panel-default">
                 <div class="panel-heading">Categories</div>

                 <div class="panel-body">

                    <table class="table table-condensed">
                        <thead>
                          <tr>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>For</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>

                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>{{ $category->for }}</td>
                            <td>
                                {!! Html::link('categories/'.$category->slug.'/edit', 'Edit'); !!} |
                                {!! Html::link('categories/delete/'.$category->slug, 'Delete'); !!}
                            </td>
                        </tr>
                    @endforeach
                        </tbody>
                    </table>
                    {!! Html::link('categories/create' , 'Create Category +'); !!}
                 </div><!-- ENd Panel Body -->
             </div><!-- ENd panel -->
         </div><!-- ENd Col -->
     </div><!-- End Row -->
 </div><!-- End Container -->
 @endsection
