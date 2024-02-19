
<?php $__env->startSection('content'); ?>

<!-- Breadcrumb Section Start -->
<section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>Profile</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo e(url('/')); ?>">
                                    <i class="bi bi-house-door"></i> <i class="bi bi-caret-right-fill"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

<!-- User Dashboard Section Start -->
<section class="user-dashboard-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-xxl-3 col-lg-4">
                    <div class="dashboard-left-sidebar">
                        <div class="close-button d-flex d-lg-none">
                            <button class="close-sidebar">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                        <div class="profile-box">
                            <div class="cover-image">
                                <img src="<?php echo e(asset('public/assets/images/inner-page/cover-img.jpg')); ?>" class="img-fluid blur-up lazyload"
                                    alt="">
                            </div>

                            <div class="profile-contain">
                                <div class="profile-image">
                                    <div class="position-relative">
                                        <img src="<?php echo e(asset('public/assets/images/inner-page/otp.png')); ?>" class="blur-up lazyload update_img" style="object-fit:contain" alt="">
                                        <!-- <div class="cover-icon">
                                            <i class="bi bi-pencil-fill">
                                                <input type="file" onchange="readURL(this,0)">
                                            </i>
                                        </div> -->
                                    </div>
                                </div>

                                <div class="profile-name">
                                    <h3><?php echo e(session()->get('name')); ?></h3>
                                    <h6 class="text-content"><?php echo e(session()->get('email')); ?></h6>
                                </div>
                            </div>
                        </div>

                        <ul class="nav nav-pills user-nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-dashboard-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-dashboard" type="button"><i data-feather="home"></i>
                                    DashBoard</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-order-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-order" type="button"><i
                                        data-feather="shopping-bag"></i>Order</button>
                            </li>
                            
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-address-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-address" type="button" role="tab"><i
                                        data-feather="map-pin"></i>Address</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"><i data-feather="user"></i>
                                    Profile</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <?php echo csrf_field(); ?>
                                <a href="<?php echo e(url('/signout')); ?>" class="nav-link" style="color:#239698 !important;">
                                    <i data-feather="log-out"></i> Logout
                                </a>
                        </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xxl-9 col-lg-8">
                    <button class="btn left-dashboard-show btn-animation btn-md fw-bold d-block mb-4 d-lg-none">Show
                        Menu</button>
                    <div class="dashboard-right-sidebar">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel">
                                <div class="dashboard-home">
                                    <div class="title">
                                        <h2>My Dashboard</h2>
                                        <span class="title-leaf">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="dashboard-user-name">
                                        <h6 class="text-content">Hello, <b class="text-title"><?php echo e(session()->get('name')); ?></b></h6>
                                        <p class="text-content">From your My Account Dashboard you have the ability to
                                            view a snapshot of your recent account activity and update your account
                                            information. Select a link below to view or edit information.</p>
                                    </div>

                                    <div class="total-box">
                                        <div class="row g-sm-4 g-3">
                                            <div class="col-xxl-6 col-lg-6 col-md-4 col-sm-6">
                                                <div class="total-contain">
                                                    <img src="https://themes.pixelstrap.com/fastkart/assets/images/svg/order.svg"
                                                        class="img-1 blur-up lazyload" alt="">
                                                    <img src="https://themes.pixelstrap.com/fastkart/assets/images/svg/order.svg" class="blur-up lazyload"
                                                        alt="">
                                                    <div class="total-detail">
                                                        <h5>Total Order</h5>
                                                        <h3><?php echo e($order); ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-lg-6 col-md-4 col-sm-6">
                                                <div class="total-contain">
                                                    <img src="https://themes.pixelstrap.com/fastkart/assets/images/svg/order.svg"
                                                        class="img-1 blur-up lazyload" alt="">
                                                    <img src="https://themes.pixelstrap.com/fastkart/assets/images/svg/order.svg" class="blur-up lazyload"
                                                        alt="">
                                                    <div class="total-detail">
                                                        <h5>Pending Order</h5>
                                                        <h3><?php echo e($pending); ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dashboard-title">
                                        <h3>Account Information</h3>
                                    </div>

                                    <div class="row g-4">
                                        <div class="col-xxl-12">
                                            <div class="dashboard-detail">
                                                <h6 class="text-content"><?php echo e(session()->get('name')); ?></h6>
                                                <h6 class="text-content"><?php echo e(session()->get('email')); ?></h6>
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit">Edit Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-order" role="tabpanel">
                                <div class="dashboard-order">
                                    <div class="title">
                                        <h2>My Orders History</h2>
                                        <span class="title-leaf title-leaf-gray">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="order-contain">
                                       <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="order-box dashboard-bg-box">
                                            <div class="order-container">
                                                <div class="order-icon">
                                                    <i data-feather="box"></i>
                                                </div>

                                                <div class="order-detail">
                                                <?php if($value->status=='0'): ?>
                                                <h4>Pending </h4>
                                                <?php else: ?>
                                                <h4>Delivered </h4>                    
                                                <?php endif; ?> 
                                                    
                                                </div>
                                            </div>

                                            <div class="product-order-detail">
                                                <a href="<?php echo e(url('product-details/'.$value->p_id)); ?>" class="order-image">
                                                <?php $__currentLoopData = json_decode($value['image']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($key === 0): ?>
                                                    <img src="<?php echo e(asset('public/images/'.$image)); ?>"
                                                    class="img-fluid blur-up lazyload" alt="" style="width:200px;height:200px" >  
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </a>

                                                <div class="order-wrap">
                                                    <a href="product-left-thumbnail.html">
                                                        <h3><?php echo e($value->name); ?></h3>
                                                    </a>
                                                    
                                                    <ul class="product-size">
                                                        <li>
                                                            <div class="size-box">
                                                                <h6 class="text-content">Price : </h6>
                                                                <h5> <i class="bi bi-currency-rupee"></i> <?php echo e($value->price); ?></h5>
                                                            </div>
                                                        </li>

                                                        
                                                        <li>
                                                            <div class="size-box">
                                                                <h6 class="text-content">Color : </h6>
                                                                <h5><?php echo e($value->color); ?></h5>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <div class="size-box">
                                                                <h6 class="text-content">Size : </h6>
                                                                <h5><?php echo e($value->size); ?></h5>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="size-box">
                                                                <h6 class="text-content">Quantity : </h6>
                                                                <h5><?php echo e($value->quantity); ?></h5>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-address" role="tabpanel">
                                <div class="dashboard-address">
                                    <div class="title title-flex">
                                        <div>
                                            <h2>My Address Book</h2>
                                            <span class="title-leaf">
                                                <svg class="icon-width bg-gray">
                                                    <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                                                </svg>
                                            </span>
                                        </div>

                                        <button class="btn theme-bg-color text-white btn-sm fw-bold mt-lg-0 mt-3"
                                            data-bs-toggle="modal" data-bs-target="#editProfile"><i data-feather="plus"
                                                class="me-2"></i> Add New Address</button>
                                    </div>

                                    <div class="row g-sm-4 g-3">
                                        <?php $__currentLoopData = $address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <!-- Edit Profile Start -->
                                         <div class="modal fade theme-modal" id="editProfile-<?php echo e($value->id); ?>" tabindex="-1">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen-sm-down">
                                                    <form action="<?php echo e(url('addAddress/'.$value->id)); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel2">Edit Profile</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                                    <i class="bi-x"></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row g-4">
                                                                    <div class="col-xxl-12">
                                                                        
                                                                            <div class="form-floating theme-form-floating">
                                                                                <input type="text" class="form-control" id="pname" name="name" value="<?php echo e($value->name); ?>" required>
                                                                                <label for="pname">Name</label>
                                                                            </div>
                                                                    
                                                                    </div>

                                                                    <div class="col-xxl-12">
                                                                            <div class="form-floating theme-form-floating">
                                                                                <input type="email" class="form-control" id="email1" name="email" value="<?php echo e(session()->get('email')); ?>" readonly>
                                                                                <label for="email1">Email address</label>
                                                                            </div>
                                                                    </div>

                                                                    <div class="col-12">
                                                                            <div class="form-floating theme-form-floating">
                                                                                <input type="text" class="form-control" id="address1" name="street"
                                                                                    value="<?php echo e($value->street); ?>" required>
                                                                                <label for="address1">Add Address</label>
                                                                            </div>
                                                                    </div>

                                                                    <div class="col-xxl-4">
                                                                            <div class="form-floating theme-form-floating">
                                                                            <input type="text" class="form-control" id="Phone" name="phone"
                                                                                    value="<?php echo e($value->phone); ?>" required>
                                                                                <label for="Phone">Mobile No.</label>
                                                                            </div>
                                                                    </div>

                                                                    <div class="col-xxl-4">
                                                                            <div class="form-floating theme-form-floating">
                                                                            <input type="text" class="form-control" name="city" id="city"
                                                                                    value="<?php echo e($value->city); ?>" required>
                                                                                <label for="city">City</label>
                                                                            </div>
                                                                    </div>

                                                                    <div class="col-xxl-4">
                                                                            <div class="form-floating theme-form-floating">
                                                                                <input type="text" class="form-control" id="address3" name="state" value="<?php echo e($value->state); ?>" required>
                                                                                <label for="address3">State</label>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-animation btn-md fw-bold"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" data-bs-dismiss="modal"
                                                                    class="btn theme-bg-color btn-md fw-bold text-light">Save changes</button>
                                                            </div>
                                                        </div>
                                            </form>
                                                    </div>
                                                </div>
                                                <!-- Edit Profile End -->
                                        <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6">
                                            <div class="address-box">
                                                <div>

                                                    <div class="table-responsive address-table">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    
                                                                    <td colspan="2"><?php echo e($value->name); ?></td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Address :</td>
                                                                    <td>
                                                                        <p><?php echo e($value->street); ?>

                                                                        </p>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>City :</td>
                                                                    <td><?php echo e($value->city); ?></td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Phone :</td>
                                                                    <td><?php echo e($value->phone); ?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="button-group">
                                                    <button class="btn btn-sm add-button w-100" data-bs-toggle="modal"
                                                        data-bs-target="#editProfile-<?php echo e($value->id); ?>"><i data-feather="edit"></i>
                                                        Edit</button>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                                <div class="dashboard-profile">
                                    <div class="title">
                                        <h2>My Profile</h2>
                                        <span class="title-leaf">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    
                                    <div class="profile-detail dashboard-bg-box">
                                        <div class="dashboard-title">
                                            <h3>Profile Name</h3>
                                        </div>
                                        <div class="profile-name-detail">
                                            <div class="d-sm-flex align-items-center d-block">
                                                <h3><?php echo e(session()->get('name')); ?></h3>
                                            </div>

                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#edit">Edit</a>
                                        </div>

                                        <div class="location-profile">
                                            <ul>

                                                <li>
                                                    <div class="location-box">
                                                        <i data-feather="mail"></i>
                                                        <h6><?php echo e(session()->get('email')); ?></h6>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="profile-about dashboard-bg-box">
                                        <div class="row">
                                            <div class="col-xxl-7">
                                                <?php if($count > 0): ?>
                                                <div class="dashboard-title mb-3">
                                                    <h3>Profile About</h3>
                                                </div>

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td>City :</td>
                                                                <td><?php echo e($address[0]['city']); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>State :</td>
                                                                <td><?php echo e($address[0]['state']); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phone Number :</td>
                                                                <td>
                                                                    <a href="javascript:void(0)"><?php echo e($address[0]['phone']); ?></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Address :</td>
                                                                <td><?php echo e($address[0]['street']); ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <?php else: ?>
                                                <?php endif; ?>

                                                <div class="dashboard-title mb-3">
                                                    <h3>Login Details</h3>
                                                </div>

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td>Email :</td>
                                                                <td>
                                                                    <a href="javascript:void(0)"><?php echo e(session()->get('email')); ?>

                                                                        <!-- <span data-bs-toggle="modal"
                                                                            data-bs-target="#edit">Edit</span> -->
                                                                        </a> 
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Password :</td>
                                                                <td>
                                                                    <a href="javascript:void(0)">●●●●●●</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="col-xxl-5">
                                                <div class="profile-image">
                                                    <img src="<?php echo e(asset('public/assets/images/inner-page/dashboard-profile.png')); ?>"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- User Dashboard Section End -->

     <!-- Edit Profile Start -->
     <div class="modal fade theme-modal" id="editProfile" tabindex="-1">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen-sm-down">
                                                    <form method="POST" action="<?php echo e(url('addAddress')); ?>">
                                                    <?php echo csrf_field(); ?>
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel2">Edit Profile</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                                    <i class="bi-x"></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row g-4">
                                                                    <div class="col-xxl-12">
                                                                            <div class="form-floating theme-form-floating">
                                                                                <input type="text" class="form-control" id="pname" value="" name="name" required>
                                                                                <label for="pname">Name</label>
                                                                            </div>
                                                                    
                                                                    </div>

                                                                    <div class="col-xxl-12">
                                                                            <div class="form-floating theme-form-floating">
                                                                                <input type="email" class="form-control" id="email1" value="<?php echo e(session()->get('email')); ?>" name="email" readonly>
                                                                                <label for="email1">Email address</label>
                                                                            </div>
                                                                    </div>

                                                                    <div class="col-12">
                                                                            <div class="form-floating theme-form-floating">
                                                                                <input type="text" class="form-control" id="address1"
                                                                                    value="" name="street" required>
                                                                                <label for="address1">Add Address</label>
                                                                            </div>
                                                                    </div>

                                                                    <div class="col-xxl-4">
                                                                            <div class="form-floating theme-form-floating">
                                                                            <input type="text" class="form-control" id="Phone"
                                                                                    value="" name="phone" required>
                                                                                <label for="Phone">Mobile No.</label>
                                                                            </div>
                                                                    </div>

                                                                    <div class="col-xxl-4">
                                                                            <div class="form-floating theme-form-floating">
                                                                            <input type="text" class="form-control" id="city"
                                                                                    value="" name="city" required>
                                                                                <label for="city">City</label>
                                                                            </div>
                                                                    </div>

                                                                    <div class="col-xxl-4">
                                                                            <div class="form-floating theme-form-floating">
                                                                                <input type="text" class="form-control" id="address3" value="" name="state" required>
                                                                                <label for="address3">State</label>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-animation btn-md fw-bold"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" data-bs-dismiss="modal"
                                                                    class="btn theme-bg-color btn-md fw-bold text-light">Save changes</button>
                                                            </div>
                                                        </div>
                                            </form>
                                                    </div>
                                                </div>
                                                <!-- Edit Profile End -->

                                                <!-- Edit Profile Start -->
                                                <div class="modal fade theme-modal" id="edit" tabindex="-1">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen-sm-down">
                                                    <form method="POST" action="<?php echo e(url('upduser')); ?>">
                                                    <?php echo csrf_field(); ?>
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel2">Edit Profile</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                                    <i class="bi-x"></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row g-4">
                                                                    <div class="col-xxl-12">
                                                                            <div class="form-floating theme-form-floating">
                                                                                <input type="text" class="form-control" value="<?php echo e($profile->name); ?>" name="name" required>
                                                                                <label for="pname">Name</label>
                                                                            </div>
                                                                    
                                                                    </div>

                                                                    <div class="col-xxl-12">
                                                                            <div class="form-floating theme-form-floating">
                                                                                <input type="email" class="form-control" value="<?php echo e($profile->email); ?>" name="email" readonly>
                                                                                <label for="email1">Email address</label>
                                                                            </div>
                                                                    </div>

                                                                    <div class="col-12">
                                                                            <div class="form-floating theme-form-floating">
                                                                                <input type="number" class="form-control"
                                                                                    value="<?php echo e($profile->phone); ?>" name="phone" required>
                                                                                <label for="address1">Number</label>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-animation btn-md fw-bold"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" data-bs-dismiss="modal"
                                                                    class="btn theme-bg-color btn-md fw-bold text-light">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                                <!-- Edit Profile End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\fastkart\resources\views/website/profile.blade.php ENDPATH**/ ?>