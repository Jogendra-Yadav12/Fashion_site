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
                <?php if(empty($orderdata)): ?>
                <tr>
                  <td colspan="5">No data available.</td>
                </tr>
              <?php else: ?>
                <?php $__currentLoopData = $orderdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
                <tr>
                  <td><?php echo e($loop->index + 1); ?></td>
                  <td><?php echo e($d->payment_id); ?></td>
                  <td><?php echo e($d->user_id); ?></td>
                  <td><?php echo e($d->p_id); ?></td>
                  <td><?php echo e($d->size); ?></td>
                  <td><?php echo e($d->color); ?></td>
                  <td><?php echo e($d->quantity); ?></td>
                  <td>₹ <?php echo e($d->price); ?></td>
                  <?php if($d->status=='0'): ?>
                    <td><a href="<?php echo e(route('approveorder', ['id' => $d->id])); ?>"><span class="badge light badge-warning">Pending</span></a></td>
                    <?php else: ?>
                    <td><a href="<?php echo e(route('pendingorder', ['id' => $d->id])); ?>"><span class="badge light badge-success">Delivered</span></a></td>
                                         
                    <?php endif; ?> 
                  <!--<td>
                 
														
														<a href="<?php echo e(route('deletecolor', ['id' => $d->id])); ?>" class="delete-confirm">
															<i class="fa fa-trash text-danger fa-2x"></i>
														</a>
													</td>-->
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalffd9e7d0f2ae4f8b13da017cd21d9448)): ?>
<?php $attributes = $__attributesOriginalffd9e7d0f2ae4f8b13da017cd21d9448; ?>
<?php unset($__attributesOriginalffd9e7d0f2ae4f8b13da017cd21d9448); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalffd9e7d0f2ae4f8b13da017cd21d9448)): ?>
<?php $component = $__componentOriginalffd9e7d0f2ae4f8b13da017cd21d9448; ?>
<?php unset($__componentOriginalffd9e7d0f2ae4f8b13da017cd21d9448); ?>
<?php endif; ?><?php /**PATH E:\xampp\htdocs\fastkart\resources\views/admin/adminorder.blade.php ENDPATH**/ ?>