<x-layoutadmin>
    <div class="content-body">
        <div class="container-fluid">
            
            <!-- row -->
            <div class="row" style="height:100%">
       
     <!--tab-content-->
     <div class="col-xl-12">
        <div class="card dz-card" id="accordion-one">
          <div class="card-header flex-wrap">
            <div>
              <h4 class="card-title">Order details</h4>
             
            </div>
            <ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
               </li>
              
            </ul>
          </div>
     <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="Preview" role="tabpanel" aria-labelledby="home-tab">
         <div class="card-body pt-0">
          <div class="table-responsive">
            <table id="example" class="display table" style="min-width: 845px">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Payment Id</th>
                  <th>User Id</th>
                  <th>Product Id</th>
                  <th> Size</th>
                  <th>Color</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  
                  <th>Order Status</th>
                  <!--<th>Delete</th>-->
                </tr>
              </thead>
              <tbody>
                @if (empty($orderdata))
                <tr>
                  <td colspan="5">No data available.</td>
                </tr>
              @else
                @foreach ($orderdata as $d)
               
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $d->payment_id}}</td>
                  <td>{{ $d->user_id}}</td>
                  <td>{{ $d->p_id}}</td>
                  <td>{{ $d->size}}</td>
                  <td>{{ $d->color}}</td>
                  <td>{{$d->quantity}}</td>
                  <td>₹ {{ $d->price}}</td>
                  @if($d->status=='0')
                    <td><a href="{{ route('approveorder', ['id' => $d->id]) }}"><span class="badge light badge-warning">Pending</span></a></td>
                    @else
                    <td><a href="{{ route('pendingorder', ['id' => $d->id]) }}"><span class="badge light badge-success">Delivered</span></a></td>
                                         
                    @endif 
                  <!--<td>
                 
														
														<a href="{{ route('deletecolor', ['id' => $d->id]) }}" class="delete-confirm">
															<i class="fa fa-trash text-danger fa-2x"></i>
														</a>
													</td>-->
                </tr>
                @endforeach
                @endif
              </tbody>
              <tfoot>
               
              </tfoot>
            </table>
          </div>
        </div>
          <!-- /Default accordion -->	
        </div>
       
       
    </div>
  </div>
</div>
</div>
</div>
</x-layoutadmin>