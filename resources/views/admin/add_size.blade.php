<x-layoutadmin>
    <div class="content-body">
        <div class="container-fluid">

            <!-- row -->
            <div class="row" style="height:100%">

                <div class="col-xl-12 col-lg-12">

                    <div class="card">
                        <div class="card-header">
                            <a href="{{ url('/add_category') }}" class="btn btn-secondary btn-sm ms-1"> View Category
                            </a>
                            <a href="{{ url('/add_subcategory') }}" class="btn btn-secondary btn-sm ms-1"> View Sub
                                Category
                            </a>
                            <a href="{{ url('/add_color') }}" class="btn btn-secondary btn-sm ms-1"> View Color
                            </a>
                            <a href="{{ url('/add_size') }}" class="btn btn-secondary btn-sm ms-1"> View Size
                            </a>
                        </div>
                        <div class="card-body">
                            @if (Session::has('error'))
                                <div class="alert alert-danger alert-dismissible fade show">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                        stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        class="me-2">
                                        <polygon
                                            points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                        </polygon>
                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                    </svg>
                                    <strong>Error!</strong> <strong>{{ Session::get('error') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                    </button>
                                </div>
                            @elseif (Session::has('success'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                        stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        class="me-2">
                                        <polyline points="9 11 12 14 22 4"></polyline>
                                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                    </svg>
                                    <strong>Success!</strong> {{ Session::get('success') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>

                                    </button>
                                </div>
                            @endif
                            <div class="basic-form">
                                <form method="POST" action="{{ route('uploadsize') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Size Name</label>
                                            <input type="text" class="form-control" name="size"
                                                placeholder="Enter Size">
                                            @error('name')
                                                <div class="alert alert-danger alert-dismissible fade show">
                                                    <svg viewBox="0 0 24 24" width="24" height="24"
                                                        stroke="currentColor" stroke-width="2" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                                        <polygon
                                                            points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                                        </polygon>
                                                        <line x1="15" y1="9" x2="9" y2="15">
                                                        </line>
                                                        <line x1="9" y1="9" x2="15" y2="15">
                                                        </line>
                                                    </svg>
                                                    <strong>Error!</strong> <strong>{{ $message }}</strong>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="btn-close"><span><i
                                                                class="fa-solid fa-xmark"></i></span>
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
                <div class="col-xl-12">s
                    <div class="card dz-card" id="accordion-one">
                        <div class="card-header flex-wrap">
                            <div>
                                <h4 class="card-title">Size details</h4>

                            </div>
                            <ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">

                                </li>

                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="Preview" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="card-body pt-0">
                                    <div class="table-responsive">
                                        <table id="example" class="display table" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>S.NO</th>
                                                    <th>Size Name</th>

                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (empty($data))
                                                    <tr>
                                                        <td colspan="5">No data available.</td>
                                                    </tr>
                                                @else
                                                    @foreach ($data as $d)
                                                        <tr>
                                                            <td>{{ $loop->index + 1 }}</td>
                                                            <td>{{ $d->size }}</td>
                                                            <td>


                                                                <a href="{{ route('deletesize', ['id' => $d->id]) }}"
                                                                    class="delete-confirm">
                                                                    <i class="fa fa-trash text-danger fa-2x"></i>
                                                                </a>
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
</x-layoutadmin>
