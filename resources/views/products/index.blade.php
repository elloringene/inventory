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
                            <th>Brand</th>
                            <th>Categories</th>
                            <th>Price</th>
                            <th>In-stock</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->name }}<br>
                            @if($product->photo)
                                <img src="{{ URL::to('/') }}/uploads/{{ $product->photo }}" height="70">
                            @endif
                            </td>
                            <td>{{ $product->brand }}</td>
                            <td>{{ $product->categories }}</td>
                            <td>{{ $product->sell_price }}</td>
                            <td></td>
                            <td>
                                {!! Html::link('products/'.$product->slug.'/edit', 'Edit'); !!} |
                                {!! Html::link('products/delete/'.$product->slug, 'Delete'); !!}
                            </td>
                        </tr>
                    @endforeach
                        </tbody>
                    </table>
                    <?php echo $products->render(); ?>
                    {!! Html::link('products/create' , 'Create Product +'); !!}
                 </div><!-- ENd Panel Body -->
             </div><!-- ENd panel -->
         </div><!-- ENd Col -->
     </div><!-- End Row -->
 </div><!-- End Container -->
 @endsection
