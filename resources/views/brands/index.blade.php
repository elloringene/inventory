 @extends('app')

 @section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-10 col-md-offset-1">
             <div class="panel panel-default">
                 <div class="panel-heading">Brands</div>

                 <div class="panel-body">

                    <table class="table table-condensed">
                        <thead>
                          <tr>
                            <th>Brand Name</th>
                            <th>Description</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>

                    @foreach($brands as $brand)
                        <tr>
                            <td>{{ $brand->name }}</td>
                            <td>{{ $brand->description }}</td>
                            <td>
                                {!! Html::link('brands/'.$brand->slug.'/edit', 'Edit'); !!} |
                                {!! Html::link('brands/delete/'.$brand->slug, 'Delete'); !!}
                            </td>
                        </tr>
                    @endforeach
                        </tbody>
                    </table>
                    {!! Html::link('brands/create' , 'Add Brand +'); !!}
                 </div><!-- ENd Panel Body -->
             </div><!-- ENd panel -->
         </div><!-- ENd Col -->
     </div><!-- End Row -->
 </div><!-- End Container -->
 @endsection
