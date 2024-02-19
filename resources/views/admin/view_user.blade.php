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
              <h4 class="card-title">User details</h4>
             
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
                  <th>Name</th>
                  <th>Email</th>
                  
                  <th>Number</th>
                <!--  <th>Status</th>-->
                  
                  <!--<th>Delete</th>-->
                </tr>
              </thead>
              <tbody>
                @if (empty($userdata))
                <tr>
                  <td colspan="5">No data available.</td>
                </tr>
              @else
                @foreach ($userdata as $d)
               
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $d->name}}</td>
                  <td>{{ $d->email}}</td>
                  <td>{{ $d->phone}}</td>
                  
                  
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