<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Admin Profile</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e('/admin/dashboard'); ?>">Home</a></li>
            <li class="breadcrumb-item active">Update Admin Details</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Admin Details</h3>
              </div>
              <!-- /.card-header -->
                  <?php if(Session::has('error_message')): ?>
                      <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin:10px;">
                      <strong>Error:</strong> <?php echo e(Session::get('error_message')); ?>

                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <?php endif; ?>

                    <?php if(Session::has('success_message')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin:10px;">
                      <strong>Success:</strong> <?php echo e(Session::get('success_message')); ?>

                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <?php endif; ?>
                    
                    
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin:10px;">
                      <strong>Error:</strong> <?php echo $error; ?>

                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <!-- form start -->
              <form method="post" action="<?php echo e(url('admin/update-details/request')); ?>" enctype="multipart/form-data"><?php echo csrf_field(); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input class="form-control" id="email" value="<?php echo e(Auth::guard('admin')->user()->email); ?>" readonly="" >
                  </div>
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo e(Auth::guard('admin')->user()->name); ?>">
                  </div>
                  <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile" value="<?php echo e(Auth::guard('admin')->user()->mobile); ?>">
                  </div>
                  <div class="form-group">
                    <label for="image">Photo</label>
                    <input type="file" class="form-control" name="image" id="image" accept="image/*">
                    <?php if(!empty(Auth::guard('admin')->user()->image)): ?>
                      <a target="_blank" href="<?php echo e(url('admin/images/photos/'.Auth::guard('admin')->user()->image)); ?>">View Photo</a>
                      <input type="hidden" name="current_image" value="<?php echo e(Auth::guard('admin')->user()->image); ?>">
                    <?php endif; ?>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rtpltechin/nneworld.rtpltech.in/resources/views/admin/update_details.blade.php ENDPATH**/ ?>