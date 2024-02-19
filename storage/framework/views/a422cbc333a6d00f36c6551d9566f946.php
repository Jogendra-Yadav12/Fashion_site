<?php if (isset($component)) { $__componentOriginalffd9e7d0f2ae4f8b13da017cd21d9448 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalffd9e7d0f2ae4f8b13da017cd21d9448 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layoutadmin','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layoutadmin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="content-body">
        <div class="container-fluid">

            <!-- row -->

            <div class="row" style="height:100%">
                <div class="card-header">
                    <button type="button" class="btn btn-secondary btn-sm ms-1 open-category"> View Category
                    </button>
                    <button type="button" class="btn btn-secondary btn-sm ms-1 open-sub-category"> View Sub Category
                    </button>
                    <button type="button" class="btn btn-secondary btn-sm ms-1 open-color"> View Color
                    </button>
                    <button type="button" class="btn btn-secondary btn-sm ms-1 open-size"> View Size
                    </button>
                </div>
                
                <div class="Category">
                    <div class="col-xl-12 col-lg-12">

                        <div class="card">

                            <div class="card-body">
                                <?php if(Session::has('error')): ?>
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                            stroke-width="2" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" class="me-2">
                                            <polygon
                                                points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                            </polygon>
                                            <line x1="15" y1="9" x2="9" y2="15"></line>
                                            <line x1="9" y1="9" x2="15" y2="15"></line>
                                        </svg>
                                        <strong>Error!</strong> <strong><?php echo e(Session::get('error')); ?></strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                        </button>
                                    </div>
                                <?php elseif(Session::has('success')): ?>
                                    <div class="alert alert-success alert-dismissible fade show">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                            stroke-width="2" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" class="me-2">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg>
                                        <strong>Success!</strong> <?php echo e(Session::get('success')); ?></strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>

                                        </button>
                                    </div>
                                <?php endif; ?>
                                <div class="basic-form">
                                    <form method="POST" action="<?php echo e(route('uploadcategory')); ?>"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Category Name</label>
                                                <input type="text" class="form-control" name="category"
                                                    placeholder="Name of the Category">
                                                    
                                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="alert alert-danger alert-dismissible fade show">
                                                        <svg viewBox="0 0 24 24" width="24" height="24"
                                                            stroke="currentColor" stroke-width="2" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                                            <polygon
                                                                points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                                            </polygon>
                                                            <line x1="15" y1="9" x2="9"
                                                                y2="15"></line>
                                                            <line x1="9" y1="9" x2="15"
                                                                y2="15"></line>
                                                        </svg>
                                                        <strong>Error!</strong> <strong><?php echo e($message); ?></strong>
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                            aria-label="btn-close"><span><i
                                                                    class="fa-solid fa-xmark"></i></span>
                                                        </button>
                                                    </div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                                        <th>Category Name</th>

                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if(empty($data)): ?>
                                                        <tr>
                                                            <td colspan="5">No data available.</td>
                                                        </tr>
                                                    <?php else: ?>
                                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td><?php echo e($loop->index + 1); ?></td>
                                                                <td><?php echo e($d->category); ?></td>
                                                                <td>


                                                                    <a href="<?php echo e(route('deletecategory', ['id' => $d->id])); ?>"
                                                                        class="delete-confirm">
                                                                        <i class="fa fa-trash text-danger fa-2x"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
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

                
                <div class="SubCategory">
                    <div class="col-xl-12 col-lg-12">

                        <div class="card">

                            <div class="card-body">

                                <div class="basic-form">
                                    <form method="POST" action="<?php echo e(route('uploadsubcategory')); ?>"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Sub Category Name</label>
                                                <input type="text" class="form-control" name="subcategory"
                                                    placeholder="Name of the SubCategory">
                                                    <input type="file" class="form-control mt-2" name="image">
                                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="alert alert-danger alert-dismissible fade show">
                                                        <svg viewBox="0 0 24 24" width="24" height="24"
                                                            stroke="currentColor" stroke-width="2" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="me-2">
                                                            <polygon
                                                                points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                                            </polygon>
                                                            <line x1="15" y1="9" x2="9"
                                                                y2="15">
                                                            </line>
                                                            <line x1="9" y1="9" x2="15"
                                                                y2="15">
                                                            </line>
                                                        </svg>
                                                        <strong>Error!</strong> <strong><?php echo e($message); ?></strong>
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                            aria-label="btn-close"><span><i
                                                                    class="fa-solid fa-xmark"></i></span>
                                                        </button>
                                                    </div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                    <h4 class="card-title">Sub Category details</h4>

                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <!--<button class="nav-link  " id="home-tab" data-bs-toggle="tab" data-bs-target="#Preview" type="button" role="tab"  aria-selected="true">Preview</button>-->
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
                                                        <th>Sub Category Name</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if(empty($Subdata)): ?>
                                                        <tr>
                                                            <td colspan="5">No data available.</td>
                                                        </tr>
                                                    <?php else: ?>
                                                        <?php $__currentLoopData = $Subdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td><?php echo e($loop->index + 1); ?></td>
                                                                <td><?php echo e($sub->subcategory); ?></td>
                                                                <td>
                                                                    <a href="<?php echo e(route('deletesubcategory', ['id' => $sub->id])); ?>"
                                                                        class="delete-confirm">
                                                                        <i class="fa fa-trash text-danger fa-2x"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
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
        
        <div class="Color">
          <div class="col-xl-12 col-lg-12">

            <div class="card">
                <div class="card-body">
                    
                    <div class="basic-form">
                        <form method="POST" action="<?php echo e(route('uploadcolor')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="mb-3 col-md-6 example">
                                    <label class="form-label">Color Name or Code</label>
                                    <input type="text" class="gradient-colorpicker form-control"
                                        value="#bee0ab" name="color" placeholder="Enter color name or code">
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
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
                                            <strong>Error!</strong> <strong><?php echo e($message); ?></strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="btn-close"><span><i
                                                        class="fa-solid fa-xmark"></i></span>
                                            </button>
                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                        <h4 class="card-title">Color details</h4>

                    </div>
                   
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
                                            <th>Color Name</th>

                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(empty($colors)): ?>
                                            <tr>
                                                <td colspan="5">No data available.</td>
                                            </tr>
                                        <?php else: ?>
                                            <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $col): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($loop->index + 1); ?></td>
                                                    <td><?php echo e($col->color); ?></td>
                                                    <td>


                                                        <a href="<?php echo e(route('deletecolor', ['id' => $col->id])); ?>"
                                                            class="delete-confirm">
                                                            <i class="fa fa-trash text-danger fa-2x"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
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

    <div class="Size">
      <div class="col-xl-12 col-lg-12">

        <div class="card">
            
            <div class="card-body">
               
                <div class="basic-form">
                    <form method="POST" action="<?php echo e(route('uploadsize')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Size Name</label>
                                <input type="text" class="form-control" name="size"
                                    placeholder="Enter Size">
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
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
                                        <strong>Error!</strong> <strong><?php echo e($message); ?></strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="btn-close"><span><i
                                                    class="fa-solid fa-xmark"></i></span>
                                        </button>
                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                    <?php if(empty($sizes)): ?>
                                        <tr>
                                            <td colspan="5">No data available.</td>
                                        </tr>
                                    <?php else: ?>
                                        <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->index + 1); ?></td>
                                                <td><?php echo e($size->size); ?></td>
                                                <td>


                                                    <a href="<?php echo e(route('deletesize', ['id' => $size->id])); ?>"
                                                        class="delete-confirm">
                                                        <i class="fa fa-trash text-danger fa-2x"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
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
            </div>
        </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalffd9e7d0f2ae4f8b13da017cd21d9448)): ?>
<?php $attributes = $__attributesOriginalffd9e7d0f2ae4f8b13da017cd21d9448; ?>
<?php unset($__attributesOriginalffd9e7d0f2ae4f8b13da017cd21d9448); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalffd9e7d0f2ae4f8b13da017cd21d9448)): ?>
<?php $component = $__componentOriginalffd9e7d0f2ae4f8b13da017cd21d9448; ?>
<?php unset($__componentOriginalffd9e7d0f2ae4f8b13da017cd21d9448); ?>
<?php endif; ?>
<script>
  $(document).ready(function() {
    
              $(".SubCategory").hide();
              $(".Color").hide();
              $(".Size").hide();
      $('.open-sub-category').on('click', function() {
        $(".SubCategory").show();
          $(".Category").hide();
          $(".Color").hide();
          $(".Size").hide();
      });
      $('.open-category').on('click', function() {
        $(".SubCategory").hide();
          $(".Category").show();
          $(".Color").hide();
          $(".Size").hide();
      });
      $('.open-color').on('click', function() {
        $(".SubCategory").hide();
          $(".Category").hide();
          $(".Color").show();
          $(".Size").hide();
      });
      $('.open-size').on('click', function() {
        $(".SubCategory").hide();
          $(".Category").hide();
          $(".Color").hide();
          $(".Size").show();
      });
  });
</script><?php /**PATH E:\xampp\htdocs\fastkart\resources\views/admin/add_category.blade.php ENDPATH**/ ?>