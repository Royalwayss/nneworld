<?php $__env->startSection('content'); ?>
<?php
use App\Models\Module;
$modules =  Module::get_modules() 
?>
<link rel="stylesheet" href="<?php echo e(asset('admin/css/sidebar.css')); ?>">
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?php echo e('/admin/dashboard'); ?>">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <?php if(Session::has('error_message')): ?>
   <div class="alert alert-danger alert-dismissible fade show mx-3" role="alert">
      <strong>Error:</strong> <?php echo e(Session::get('error_message')); ?>

      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
   </div>
   <?php endif; ?>
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 col-sm-6 col-md-3">
               <a href="<?php echo e(url($module['view_route'])); ?>">
                  <div class="info-box">
                     <span class="info-box-icon bg-info elevation-1" style="background-color:<?php echo e($module['bg_color']); ?>!important"><i class="nav-icon <?php echo e($module['icon']); ?>"></i></span>
                     <div class="info-box-content">
                        <span class="info-box-text"><?php echo e($module['name']); ?></span>
                        <span class="info-box-number">
                        <?php echo e($module['count']); ?>

                        </span>
                     </div>
                  </div>
               </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
      </div>
   </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rtpltechin/nneworld.rtpltech.in/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>