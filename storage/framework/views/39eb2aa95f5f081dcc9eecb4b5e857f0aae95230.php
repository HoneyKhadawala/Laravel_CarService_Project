

<?php $__env->startSection("pagetitle"); ?>
	Add Shop Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css-section'); ?>
	<!-- Bootstrap Css -->
    <link href="<?php echo e(URL::asset('assets/css/bootstrap.min.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo e(URL::asset('assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo e(URL::asset('assets/css/app.min.css')); ?>" id="app-style" rel="stylesheet" type="text/css" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo e(URL::asset('assets/images/favicon.ico')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection("main-section"); ?>
	<div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Edit Shop</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="\Dashboard" class="waves-effect">
                                        <i class="bx bx-home-circle"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="/PendingShop/view">Pending Shop</a>
                                </li>
                                <li class="breadcrumb-item active">Add new Shop</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Form of Shop</h4>
                            <?php if(session("status")): ?>
                               
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all mr-2"></i>
                                <?php echo e(session("status")); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <?php endif; ?>

                            <?php $__currentLoopData = $pendingdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <form id="form1" enctype="multipart/form-data" method="post" action="/PendingShop/update">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <input type="hidden" name="id" value="<?php echo e($item->Shop_Id); ?>">
                                <input type="hidden" name="oldimg" value="<?php echo e($item->Shop_Image); ?>">
                                <input type="hidden" name="oldimg1" value="<?php echo e($item->Shop_logo); ?>">
                                <input type="hidden" name="oldimg2" value="<?php echo e($item->Shop_proof); ?>">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtshopname">Shop name</label>
                                            <input type="text" class="form-control" id="txtshopname" name="txtshopname" value="<?php echo e($item->Shop_name); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtownername">Ower name</label>
                                            <input type="text" class="form-control" id="txtownername" name="txtownername" value="<?php echo e($item->Shop_OwnerName); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtusername">User name</label>
                                            <input type="text" class="form-control" id="txtusername" name="txtusername" value="<?php echo e($item->User_name); ?>">
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtpass">Password</label>
                                            <input type="Password" class="form-control" id="txtpass" name="txtpass" value="<?php echo e($item->password); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtnum">Contact No.</label>
                                            <input type="text" class="form-control" id="txtnum" name="txtnum" value="<?php echo e($item->Contact_No); ?>">
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtmail">Email</label>
                                            <input type="email" class="form-control" id="txtmail" name="txtmail" value="<?php echo e($item->Email_Id); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtadd">Address 1</label><br/>
                                            <textarea id="txtadd" class="form-control" name="txtadd"><?php echo e($item->Address); ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtadd2">Address 2</label><br/>
                                            <textarea id="txtadd2" class="form-control" name="txtadd2"><?php echo e($item->Address2); ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div id="divmap" style="height: 300px;"></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="txtcity">City_Name</label>
                                            <select id="txtcity" name="txtcity" class="btn btn-secondary dropdown-toggle col-12" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <?php $__currentLoopData = $citydata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php if($item->City_Id == $row['City_Id']): ?> selected <?php endif; ?> value="<?php echo e($row['City_Id']); ?>"> <?php echo e($row['City_name']); ?> </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="txtlandmark">Landmark</label>
                                            <input type="text" class="form-control" id="txtlandmark" name="txtlandmark" value="<?php echo e($item->landmark); ?>">
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="txtpin">Pincode</label>
                                            <input type="text" class="form-control" id="txtpin" name="txtpin" value="<?php echo e($item->pincode); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="txtregidate">Registration Date</label>
                                            <input type="text" class="form-control" id="txtregidate" name="txtregidate" value="<?php echo e($item->Registration_Date); ?>">   
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="txtlattitide">Lattitude</label>
                                            <input type="text" class="form-control" id="txtlattitide" name="txtlattitide" value="<?php echo e($item->latitude); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="txtlongitude">Longtitude</label>
                                            <input type="text" class="form-control" name="txtlongitude" id="txtlongitude" value="<?php echo e($item->longitude); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="txtaboutshop">About Shop</label>
                                            <textarea id="txtaboutshop" class="form-control" name="txtaboutshop" style="width: 72vw;"><?php echo e($item->About_Shop); ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtstatus">Status</label><br/>
                                            &nbsp;&nbsp;&nbsp;
                                            <input type="radio" id="txtstatus" name="txtstatus" value="Pending" <?php if($item->Status=="Pending"): ?> Checked <?php endif; ?> >
                                            <label>Pending</label><br/>
                                            &nbsp;&nbsp;&nbsp;
                                            <input type="radio" id="txtstatus" name="txtstatus" value="Approve" <?php if($item->Status=="Approve"): ?> Checked <?php endif; ?> >
                                            <label>Approve</label><br/>
                                            &nbsp;&nbsp;&nbsp;
                                            <input type="radio" id="txtstatus" name="txtstatus" value="Rejected" <?php if($item->Status=="Rejected"): ?> Checked <?php endif; ?> >
                                            <label>Rejected</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="UserBlock">Is Block</label><br/>
                                            &nbsp;&nbsp;&nbsp;
                                            <input type="radio" id="UserBlock" name="UserBlock" value="yes" <?php if($item->IsBlock=="yes"): ?> Checked <?php endif; ?>>
                                            <label>Yes</label><br/>
                                            &nbsp;&nbsp;&nbsp;
                                             <input type="radio" id="UserBlock" name="UserBlock" value="no" <?php if($item->IsBlock=="no"): ?> Checked <?php endif; ?>>
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <label for="txtproofupload" class="col-form-label">Shop_Proof</label><br/>
                                        <button type="button" class="btn btn-light waves-effect waves-light w-sm">
                                            <div class="fallback">
                                                <input name="txtproofupload" id="txtproofupload" type="file" multiple />
                                                <!-- <i class="mdi mdi-upload d-block font-size-16"></i> Upload -->
                                                <img src="<?php echo e(URL::asset('uploads/shop/proof')); ?>/<?php echo e($item->Shop_proof); ?>" width="100" height="100">
                                            </div>
                                        </button>
                                    </div>       

                                    <div class="col-md-4">
                                        <label for="txtlogoupload" class="col-form-label">Logo</label><br/>
                                        <button type="button" class="btn btn-light waves-effect waves-light w-sm">
                                            <div class="fallback">
                                                <input name="txtlogoupload" id="txtlogoupload" type="file" multiple />
                                                <!-- <i class="mdi mdi-upload d-block font-size-16"></i>Upload -->
                                                <img src="<?php echo e(URL::asset('uploads/shop/logo')); ?>/<?php echo e($item->Shop_logo); ?>" width="100" height="100">
                                            </div>
                                        </button>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <label for="txtimgupload" class="col-form-label">Photo</label><br/>
                                        <button type="button" class="btn btn-light waves-effect waves-light w-sm">
                                            <div class="fallback">
                                                <input name="txtimgupload" id="txtimgupload" type="file" multiple />
                                                <!-- <i class="mdi mdi-upload d-block font-size-16"></i> Upload -->
                                                <img src="<?php echo e(URL::asset('uploads/shop/photo')); ?>/<?php echo e($item->Shop_Image); ?>" width="100" height="100">
                                            </div>
                                        </button>
                                    </div>
                                </div>

                                <div class="row">        
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary w-md">Update</button>
                                    </div>
                                </div>
                            </form>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->                        
        </div> <!-- container-fluid -->
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection("js-section"); ?>
 <!-- JAVASCRIPT -->
        <script src="<?php echo e(URL::asset('assets/libs/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/metismenu/metisMenu.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/simplebar/simplebar.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/node-waves/waves.min.js')); ?>"></script>

        <script src="<?php echo e(URL::asset('assets/js/app.js')); ?>"></script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyClJ7bohWjfhtUsd71UVKXfsu48-Wq5O5s"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-locationpicker/0.1.12/locationpicker.jquery.min.js"></script>
        <script>
            $('#divmap').locationpicker({
                location: {latitude: 21.1702, longitude: 72.8311},
                radius: 0,
                inputBinding: {
                      latitudeInput: $('#txtlattitide'),
                      longitudeInput: $('#txtlongitude'),
                      locationNameInput: $('#txtlandmark')
                  },
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                enableAutocomplete: true,
                });
        </script>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('MasterPage.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectWork\CarProject\resources\views/Pending-Shop/editpendingshop.blade.php ENDPATH**/ ?>