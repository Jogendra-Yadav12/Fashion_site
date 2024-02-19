<x-layoutadmin>
    <div class="content-body">
        <div class="container-fluid">
            
            <!-- row -->
            <div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit data</h4>
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
                    <form method="POST" action="{{ route('up_product',$data->id) }}" enctype="multipart/form-data" >
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
                                        <option value="{{ $category->category }}" selected>{{ $category->category }}</option>
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
                                        <option value="{{ $subcategory->subcategory }}" selected>{{ $subcategory->subcategory }}</option>
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
                                        <option value="{{ $color->color }}" selected>{{ $color->color }}</option>
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
                                        <option value="{{ $size->size }}" selected>{{ $size->size }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Product Name</label>
                                <input type="text" class="form-control" name="name" value="@if (!empty($data->product_name)) {{ $data->product_name }} @endif">
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
                                <label class="form-label">Product Price</label>
                                <input type="text" class="form-control" name="price" value="@if (!empty($data->price)) {{ $data->price }} @endif">
                                @error('price')
                    
                                <div class="alert alert-danger alert-dismissible fade show">
                                   <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                   <strong>Error!</strong> <strong>{{$message}}</strong>
                                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                   </button>
                               </div>
                              @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Product Images</label>
                                <input type="file" class="form-control" name="images[]" multiple  accept="image/png, , image/jpeg" >
                                @error('images')
                    
                                <div class="alert alert-danger alert-dismissible fade show">
                                   <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                   <strong>Error!</strong> <strong>{{$message}}</strong>
                                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                   </button>
                               </div>
                              @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Product Description</label>
                                <input type="text" class="form-control" name="description" value="@if (!empty($data->description)) {{ $data->description}} @endif">
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
   
</div>
</div>
</div>
</x-layoutadmin>