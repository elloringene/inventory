 @extends('app')

 @section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-10 col-md-offset-1">
             <div class="panel panel-default">
                 <div class="panel-heading">Home</div>

                 <div class="panel-body">
                    <table class="table table-condensed">
                        <thead>
                          <tr>
                            <th>Product Name</th>
                            <th>In-stock</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                    @foreach($stocks as $stock)
                        <tr>
                            <td>{{ $stock->name }}</td>
                            <td>{{ $stock->quantity }}</td>
                            <td>
                                {!! Html::link('stocks/delete/'.$stock->slug, 'Dispose'); !!}
                            </td>
                        </tr>
                    @endforeach
                        </tbody>
                    </table>
                    {!! Html::link('stocks/create' , 'Add Stocks +'); !!}
                 </div><!-- ENd Panel Body -->
             </div><!-- ENd panel -->
         </div><!-- ENd Col -->
     </div><!-- End Row -->
 </div><!-- End Container -->
 @endsection
