 @extends('app')

 @section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-10 col-md-offset-1">
             <div class="panel panel-default">
                 <div class="panel-heading">Suppliers</div>

                 <div class="panel-body">

                    <table class="table table-condensed">
                        <thead>
                          <tr>
                            <th>Supplier Name</th>
                            <th>Description</th>
                            <th>Location</th>
                            <th>Type</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>

                    @foreach($suppliers as $supplier)
                        <tr>
                            <td>{{ $supplier->name }}</td>
                            <td>{{ $supplier->brand }}</td>
                            <td>{{ $supplier->categories }}</td>
                            <td>{{ $supplier->sell_price }}</td>
                            <td>
                                {!! Html::link('suppliers/'.$supplier->slug.'/edit', 'Edit'); !!} |
                                {!! Html::link('suppliers/delete/'.$supplier->slug, 'Delete'); !!}
                            </td>
                        </tr>
                    @endforeach
                        </tbody>
                    </table>
                    {!! Html::link('suppliers/create' , 'Add Supplier +'); !!}
                 </div><!-- ENd Panel Body -->
             </div><!-- ENd panel -->
         </div><!-- ENd Col -->
     </div><!-- End Row -->
 </div><!-- End Container -->
 @endsection
