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
            <div class="row" style="height:100%;margin-top:20px">

                <div class="col-xl-12 col-lg-12">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Admin</h4>
                        </div>
                        <div class="card-body">
                            <?php if(Session::has('error')): ?>
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
                                    <strong>Error!</strong> <strong><?php echo e(Session::get('error')); ?></strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                    </button>
                                </div>
                            <?php elseif(Session::has('success')): ?>
                                <div class="alert alert-success alert-dismissible fade show">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                        stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        class="me-2">
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
                                <?php if($value): ?>
                                <form method="post" action="<?php echo e(url('update-admin').'/'.$value->id ?? ''); ?>">
                                  <?php else: ?>
                                  <form method="post" action="<?php echo e(url('add-admin')); ?>" id="myform">
                                    <?php endif; ?>
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">User Name</label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Name of the User" value="<?php echo e($value->name ?? ''); ?>">
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

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">User Email</label>
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Email of the User" value="<?php echo e($value->email ?? ''); ?>">
                                            <?php $__errorArgs = ['email'];
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
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Phone</label>
                                            <input type="number" class="form-control" name="phone"
                                                placeholder="Phone .No" pattern="[1-9]{1}[0-9]{9}" maxlength="10" value="<?php echo e($value->number ?? ''); ?>">
                                            <?php $__errorArgs = ['phone'];
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
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Type</label>
                                            <select class="form-control" name="type" required>
                                                <option value="admin" <?php if($value && $value->user_type == 'admin'): ?> selected <?php endif; ?>>Admin</option>
                                            </select>
                                            <?php $__errorArgs = ['type'];
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
                                        <?php if(!$value): ?>
                                        <div class="mb-3 col-md-12">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password"
                                                placeholder="****">
                                            <?php $__errorArgs = ['password'];
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
                                        <?php endif; ?>

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
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Type</th>
                                                    
                                                    <th>Update</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($users->isEmpty()): ?>
                                                <tr>
                                                    <td colspan="5">No data available.</td>
                                                </tr>
                                                <?php else: ?>
                  <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <tr>
                                                    <td><?php echo e($key+1 ?? ''); ?></td>
                                                    <td><?php echo e($d->name ?? ''); ?></td>
                                                    <td><?php echo e($d->number ?? ''); ?></td>
                                                    <td><?php echo e($d->email ?? ''); ?></td>


                                                    <td><?php echo e($d->user_type ?? ''); ?></td>
                                                   

                                                    <td>
                                                        <a href="<?php echo e(url('add-admin').'/'.$d->id ?? ''); ?>">
                                                            <i class="fa fa-edit text-success fa-2x"></i>
                                                        </a>
                                                        <!--<a href="" class="delete-confirm">
                                                              <i class="fa fa-trash text-danger fa-2x"></i>
                                                          </a>-->
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
<?php /**PATH E:\xampp\htdocs\fastkart\resources\views/Member/Add.blade.php ENDPATH**/ ?>