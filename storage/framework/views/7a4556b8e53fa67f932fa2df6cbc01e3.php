<!-- Deal Section Start -->
<section class="product-section product-section-3">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Mens</h2>
            </div>
            <div class="row g-sm-4 g-3">
                <div class="col-xxl-12 ratio_110">
                    <div class="slider-6 img-slider">
                        <?php $__currentLoopData = $men; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <div class="product-box-5 wow fadeInUp">
                                <div class="product-image">
                                    <a href="<?php echo e(url('product-details/'.$value['id'])); ?>">
                                    <?php $__currentLoopData = json_decode($value['image']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($key === 0): ?>
                                                <img src="<?php echo e(asset('public/images/'.$image)); ?>"
                                                class="img-fluid blur-up lazyload" style="height:300px;width:330px;object:conatin" alt="">  
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </a>
                                </div>

                                <div class="product-detail">
                                    <a href="<?php echo e(url('product-details/'.$value['id'])); ?>">
                                        <h5 class="name"><?php echo e($value->product_name); ?></h5>
                                    </a>

                                    <h5 class="sold text-content">
                                        <span class="theme-color price"><i class="bi bi-currency-rupee"></i> <?php echo e($value->price); ?></span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Deal Section End -->
<?php /**PATH E:\xampp\htdocs\fastkart\resources\views/website/home-dealsection.blade.php ENDPATH**/ ?>