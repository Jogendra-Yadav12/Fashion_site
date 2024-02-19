
<?php $__env->startSection('content'); ?>

 <!-- Product Left Sidebar Start 1656-->
 <section class="product-section mb-4">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 wow fadeInUp">
                    <div class="row g-4">
                        <div class="col-xl-6 wow fadeInUp">
                            <div class="product-left-box">
                                <div class="row g-sm-4 g-2">
                                    <div class="col-12">
                                        <div class="product-main no-arrow">
                                            <div>
                                                <div class="slider-image">
                                                <?php $__currentLoopData = json_decode($data['image']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($key === 0): ?>
                                                <img src="<?php echo e(asset('public/images/'.$image)); ?>" id="img-1"
                                                        data-zoom-image="<?php echo e(asset('public/images/'.$image)); ?>" class="
                                                        img-fluid image_zoom_cls-0 blur-up lazyload" alt=""> 
                                                        <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                                </div>
                                            </div>
                                            
                                            <div>
                                                <div class="slider-image">
                                                <?php $__currentLoopData = json_decode($data['image']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($key !== 0): ?>
                                                <img src="<?php echo e(asset('public/images/'.$image)); ?>" id="img-1"
                                                        data-zoom-image="<?php echo e(asset('public/images/'.$image)); ?>" class="
                                                        img-fluid image_zoom_cls-0 blur-up lazyload" alt=""> 
                                                        <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="left-slider-image left-slider no-arrow slick-top">
                                            <div>
                                                <div class="sidebar-image">
                                                <?php $__currentLoopData = json_decode($data['image']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($key !== 0): ?>
                                                <img src="<?php echo e(asset('public/images/'.$image)); ?>" id="img-1"
                                                        data-zoom-image="<?php echo e(asset('public/images/'.$image)); ?>" class="
                                                        img-fluid image_zoom_cls-0 blur-up lazyload" alt=""> 
                                                        <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 wow fadeInUp">
                            <div class="right-box-contain">
                                
                                <h2 class="name"><?php echo e($data['product_name']); ?></h2>
                                <div class="price-rating">
                                    <h3 class="theme-color price"><i class="bi bi-currency-rupee"></i> <?php echo e($data['price']); ?> </h3>
                                </div>

                                <div class="product-contain">
                                    <p class="w-100"><?php echo e($data->description); ?></p>
                                </div>

                                <div class="product-package">
                                    <div class="product-title">
                                        <h4>Size </h4>
                                    </div>
                                    <ul class="circle select-package">
                                    
                                    <?php $__currentLoopData = json_decode($data->size); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n=>$t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="form-check">
                                            <input class="form-check-input" checked type="radio" name="size" id="<?php echo e($t); ?>">
                                            <label class="form-check-label" for="<?php echo e($t); ?>" value="<?php echo e($t); ?>">
                                                <span><?php echo e($t); ?></span>
                                            </label>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>

                                <div class="product-package">
                                    <div class="product-title">
                                        <h4>Color </h4>
                                    </div>
                                    <ul class="circle select-package">
                                    
                                    <?php $__currentLoopData = json_decode($data->color); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n=>$t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="form-check">
                                            <input class="form-check-input" checked type="radio" name="color" id="<?php echo e($t); ?>">
                                            <label class="form-check-label" for="<?php echo e($t); ?>" value="<?php echo e($t); ?>">
                                                <span class="p-4"><?php echo e($t); ?></span>
                                            </label>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>

                                <ul class="feature-list">
                                    <li>
                                        <a href="#" data-bs-toggle="modal">
                                            <svg>
                                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/ruler.svg#ruler"></use>
                                            </svg>
                                            <span>Size Chart</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="modal">
                                            <i data-feather="truck"></i>
                                            <span>Delivery & Return</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="modal">
                                            <i data-feather="help-circle"></i>
                                            <span>Ask a question</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="note-box product-package">
                                    <div class="cart_qty qty-box product-qty">
                                        <div class="input-group">
                                            <button type="button" class="qty-left-minus" data-type="minus"
                                                data-field="">
                                                <i class="bi bi-dash"></i>
                                            </button>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="1">
                                            <button type="button" class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <a href = "#" class="btn btn-md bg-dark cart-button text-white w-100">Add To Cart</a>
                                </div>

                                <div class="payment-option">
                                    <div class="product-title">
                                        <h4>Guaranteed Safe Checkout</h4>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/1.svg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/2.svg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/3.svg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/4.svg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/5.svg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Left Sidebar End -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    $(document).ready(function () {
        $('.qty-right-plus').click(function () {
            var quantityInput = $(this).closest('.input-group').find('.qty-input');
            var currentValue = parseInt(quantityInput.val());
            if (currentValue < 10) {
                quantityInput.val(currentValue + 1);
            }
        });

        $('.qty-left-minus').click(function () {
            var quantityInput = $(this).closest('.input-group').find('.qty-input');
            var currentValue = parseInt(quantityInput.val());
            if (currentValue > 1) {
                quantityInput.val(currentValue - 1);
            }
        });

        $('.cart-button').click(function (e) {
            e.preventDefault();

            var quantity = $('.qty-input').val();
            var sizeLabel = $('input[name="size"]:checked').next('label').text();
            var size = sizeLabel.trim()
            var colorLabel = $('input[name="color"]:checked').next('label').text();
            var color = colorLabel.trim()
            var addToCartUrl = "<?php echo e(url('usercart/'.$data->id)); ?>?quantity=" + quantity + "&size=" + size + "&color=" + color;
            window.location.href = addToCartUrl;
            
        });
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\fastkart\resources\views/website/product-details.blade.php ENDPATH**/ ?>