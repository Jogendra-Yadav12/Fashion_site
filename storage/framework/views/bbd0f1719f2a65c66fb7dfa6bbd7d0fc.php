<!-- Category Section Start -->
    <section>
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="slider-9">
                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <div class="category-box category-dark wow fadeInUp">
                                <div>
                                    <img src="<?php echo e(asset('public/images/' . $value['image'])); ?>" class="blur-up lazyload" alt="">
                                    <h5><?php echo e($value['subcategory']); ?></h5>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Section End --><?php /**PATH E:\xampp\htdocs\fastkart\resources\views/website/category.blade.php ENDPATH**/ ?>