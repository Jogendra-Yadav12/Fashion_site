<x-layoutadmin>
  <style>
    .div-img{
    justify-content: center;
    align-items: center;
    display:flex;
    padding-top:20%;
}
img{
    transition: transform .2s;
    width:50px;
    height:50px;
    margin:0 auto;
    background-color: rgb(173, 173, 237);
    border-radius: 10px;
    border: 1px solid black;
}
img:hover{
    transform:scale(2.5);
}
    </style>
    <div class="content-body">
     
        <div class="container-fluid">
          <button type="button" class="btn btn-secondary btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#exampleModal1">+ Add Category
          </button>
          <button type="button" class="btn btn-secondary btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#exampleModal2">+ Add Sub Category
          </button>
          <button type="button" class="btn btn-secondary btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#exampleModal3">+ Add Color
          </button>
          <button type="button" class="btn btn-secondary btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#exampleModal4">+ Add Size
          </button>
         <!-- <a class="btn btn-primary btn-sm"  href="{{url('/add_subcategory')}}" role="button" aria-controls="offcanvasExample">+ Add Sub Category</a>
          <a class="btn btn-primary btn-sm"  href="{{url('/add_color')}}" role="button" aria-controls="offcanvasExample">+ Add Color</a>
          <a class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" href="{{url('/add_size')}}" role="button" aria-controls="offcanvasExample">+ Add Size</a>
         -->
               
            <!-- row -->
            <div class="row" style="height:100%;margin-top:20px">
             
    <div class="col-xl-12 col-lg-12">
     
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Data</h4>
            </div>
            <div class="card-body">
                @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show">
                  <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                  <strong>Error!</strong> <strong>{{ Session::get('error') }}</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                  </button>
              </div>
              
                    @elseif (Session::has('success'))
                 <div class="alert alert-success alert-dismissible fade show">
                  <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>	
                  <strong>Success!</strong> {{ Session::get('success') }}</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
  
                  </button>
              </div>
              @endif
                <div class="basic-form">
                    <form method="POST" action="{{ route('uploadproduct') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label class="form-label">Category</label>
                            
                            @error('category')
                                <div class="alert alert-danger alert-dismissible fade show">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                        <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                    </svg>
                                    <strong>Error!</strong> <strong>{{$message}}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                        <span><i class="fa-solid fa-xmark"></i></span>
                                    </button>
                                </div>
                            @enderror
                        
                            <select class="form-select" name="category">
                                @foreach($data1 as $category)
                                    <option value="{{ $category->category }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                          <label class="form-label">Sub Category</label>
                          
                          @error('subcategory')
                              <div class="alert alert-danger alert-dismissible fade show">
                                  <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                      <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                      <line x1="15" y1="9" x2="9" y2="15"></line>
                                      <line x1="9" y1="9" x2="15" y2="15"></line>
                                  </svg>
                                  <strong>Error!</strong> <strong>{{$message}}</strong>
                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                      <span><i class="fa-solid fa-xmark"></i></span>
                                  </button>
                              </div>
                          @enderror
                      
                          <select class="form-select" name="subcategory">
                              @foreach($data3 as $subcategory)
                                  <option value="{{ $subcategory->subcategory }}">{{ $subcategory->subcategory }}</option>
                              @endforeach
                          </select>
                      </div>
                      
                      <div class="mb-3 col-md-6">
                        <label class="form-label">Color</label>
                        
                        @error('color')
                            <div class="alert alert-danger alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                    <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                    <line x1="15" y1="9" x2="9" y2="15"></line>
                                    <line x1="9" y1="9" x2="15" y2="15"></line>
                                </svg>
                                <strong>Error!</strong> <strong>{{$message}}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    <span><i class="fa-solid fa-xmark"></i></span>
                                </button>
                            </div>
                        @enderror
                    
                        <select class="form-select" name="color[]" multiple>
                            @foreach($data4 as $color)
                                <option value="{{ $color->color }}">{{ $color->color }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                      <label class="form-label">Size</label>
                      
                      @error('size')
                          <div class="alert alert-danger alert-dismissible fade show">
                              <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                  <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                  <line x1="15" y1="9" x2="9" y2="15"></line>
                                  <line x1="9" y1="9" x2="15" y2="15"></line>
                              </svg>
                              <strong>Error!</strong> <strong>{{$message}}</strong>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                  <span><i class="fa-solid fa-xmark"></i></span>
                              </button>
                          </div>
                      @enderror
                  
                      <select class="form-select" name="size[]" multiple>
                          @foreach($data5 as $size)
                              <option value="{{ $size->size }}">{{ $size->size }}</option>
                          @endforeach
                      </select>
                  </div>
                    
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Product Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Name of the data ">
                                @error('name')
                    
                                 <div class="alert alert-danger alert-dismissible fade show">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                    <strong>Error!</strong> <strong>{{$message}}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                    </button>
                                </div>
                               @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Price</label>
                                <input type="number" class="form-control" name="price" placeholder="Price of the product ">
                                @error('price')
                    
                                <div class="alert alert-danger alert-dismissible fade show">
                                   <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                   <strong>Error!</strong> <strong>{{$message}}</strong>
                                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                   </button>
                               </div>
                                 @enderror
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Product Image</label>
                                <input type="file" class="form-control" name="images[]" multiple accept="image/png, , image/jpeg">
                                @error('images')
                    
                                <div class="alert alert-danger alert-dismissible fade show">
                                   <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                   <strong>Error!</strong> <strong>{{$message}}</strong>
                                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                   </button>
                               </div>
                              @enderror
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Product Description</label>
                                <textarea rows="2" class="form-control" name="description" placeholder="Product description"></textarea>
                               <!-- <input type="text" class="form-control" name="description" placeholder="Product description">-->
                                @error('description')
                    
                                <div class="alert alert-danger alert-dismissible fade show">
                                   <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                   <strong>Error!</strong> <strong>{{$message}}</strong>
                                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                   </button>
                               </div>
                              @enderror
                            </div>
                           
                        </div>
                        
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    
    </div>
   
     <!--tab-content-->
     <div class="col-xl-12">
        <div class="card dz-card" id="accordion-one">
          <div class="card-header flex-wrap">
            <div>
              <h4 class="card-title">Data details</h4>
             
            </div>
            <ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <!--<button class="nav-link  " id="home-tab" data-bs-toggle="tab" data-bs-target="#Preview" type="button" role="tab"  aria-selected="true">Preview</button>-->
              </li>
              <!--<li class="nav-item" role="presentation">
                <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#html" type="button" role="tab" aria-controls="html" aria-selected="false">HTML</button>
              </li>-->
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
                  <th>Category</th>
                  <th>Sub Category</th>
                  <th>Color</th>
                  <th>Size</th>
                  <th>Product Name</th>
                  <th>Product Price</th>
                  <th>Product Description</th>

                  <th>Product Image</th>
                 
                  
                  <th>Update</th>
                </tr>
              </thead>
              <tbody>
                @if ($data2->isEmpty())
                <tr>
                  <td colspan="5">No data available.</td>
                </tr>
              @else
                @foreach ($data2 as $d)
               
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $d->category}}</td>
                  <td>{{ $d->subcategory}}</td>
                  <td>
                    @php
                        $decodedColors = json_decode($d->color);
                        echo is_array($decodedColors) ? implode(', ', $decodedColors) : $decodedColors;
                    @endphp
                </td>
                <td>
                    @php
                        $decodedSizes = json_decode($d->size);
                        echo is_array($decodedSizes) ? implode(', ', $decodedSizes) : $decodedSizes;
                    @endphp
                </td>
                
                  <td>{{ $d->product_name}}</td>
                  <td>₹ {{ $d->price}}</td>
                  <td>{{ $d->description}}</td>
                  <td class="div-img">
                    @foreach(json_decode($d->image) as $image)
                        <img src="{{ asset('public/images/' . $image) }}" alt="Image" style="height:70px!important;width:70px!important">
                    @endforeach
                </td>
													<td>
														<a href="{{ route('updateproduct', ['id' => $d->id]) }}">
															<i class="fa fa-edit text-success fa-2x"></i>
														</a>
														<!--<a href="{{ route('deleteproduct', ['id' => $d->id]) }}" class="delete-confirm">
															<i class="fa fa-trash text-danger fa-2x"></i>
														</a>-->
													</td>
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
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-center">
	  <div class="modal-content">
		<div class="modal-header">
		  <h1 class="modal-title fs-5" id="exampleModalLabel1">Add Category</h1>
      
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
      
			  <div class="row">
          <form method="POST" action="{{ route('uploadcategory') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="mb-3 col-md-12">
                    <label class="form-label">Category Name</label>
                    <input type="text" class="form-control" name="category" placeholder="Name of the Category">
                    @error('name')
        
                     <div class="alert alert-danger alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                        <strong>Error!</strong> <strong>{{$message}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                        </button>
                    </div>
                   @enderror
                </div>
                
                
                
            </div>
            
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
			  </div>
			  
		</div>
		<!--<div class="modal-footer">
		  <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button>
		</div>-->
	  </div>
	</div>
</div>
<!--model2-->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
	<div class="modal-dialog modal-dialog-center">
	  <div class="modal-content">
		<div class="modal-header">
		  <h1 class="modal-title fs-5" id="exampleModalLabel1">Add Subcategory</h1>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			  <div class="row">
          <form method="POST" action="{{ route('uploadsubcategory') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="mb-3 col-md-12">
                    <label class="form-label">Sub Category Name</label>
                    <input type="text" class="form-control" name="subcategory" placeholder="Name of the SubCategory">
                    @error('name')
        
                     <div class="alert alert-danger alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                        <strong>Error!</strong> <strong>{{$message}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                        </button>
                    </div>
                   @enderror
                </div>
                
                
                
            </div>
            
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
			  </div>
			  
		</div>
		<!--<div class="modal-footer">
		  <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button>
		</div>-->
	  </div>
	</div>
</div>
<!--model2-->
<!--model3-->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
	<div class="modal-dialog modal-dialog-center">
	  <div class="modal-content">
		<div class="modal-header">
		  <h1 class="modal-title fs-5" id="exampleModalLabel1">Add Color</h1>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			  <div class="row">
          <form method="POST" action="{{ route('uploadcolor') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="mb-3 col-md-12 example">
                    <label class="form-label">Color Name or Code</label>
                    <input type="text" class="gradient-colorpicker form-control" value="#bee0ab" name="color" placeholder="Enter color name or code">
                    @error('name')
        
                     <div class="alert alert-danger alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                        <strong>Error!</strong> <strong>{{$message}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                        </button>
                    </div>
                   @enderror
                </div>
                
                
                
            </div>
            
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
			  </div>
			  
		</div>
		<!--<div class="modal-footer">
		  <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button>
		</div>-->
	  </div>
	</div>
</div>
<!--model3-->
<!--model4-->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
	<div class="modal-dialog modal-dialog-center">
	  <div class="modal-content">
		<div class="modal-header">
		  <h1 class="modal-title fs-5" id="exampleModalLabel1">Add Size</h1>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			  <div class="row">
          <form method="POST" action="{{ route('uploadsize') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="mb-3 col-md-12">
                    <label class="form-label">Size Name</label>
                    <input type="text" class="form-control" name="size" placeholder="Enter Size">
                    @error('name')
        
                     <div class="alert alert-danger alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                        <strong>Error!</strong> <strong>{{$message}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                        </button>
                    </div>
                   @enderror
                </div>
                
                
                
            </div>
            
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
			  </div>
			  
		</div>
		<!--<div class="modal-footer">
		  <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button>
		</div>-->
	  </div>
	</div>
</div>
<!--model4-->
</x-layoutadmin>