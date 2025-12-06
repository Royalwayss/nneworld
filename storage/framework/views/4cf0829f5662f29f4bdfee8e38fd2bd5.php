<?php
use App\Models\Module;
$modules =  Module::get_modules() 
?>
<link rel="stylesheet" href="<?php echo e(asset('admin/css/sidebar.css')); ?>">
<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <a href="<?php echo e(url('admin/dashboard')); ?>" class="brand-link" style="background-color:#fff; border:0px !important;">
      <img src="<?php echo e(asset('front/assets/images/logo.png')); ?>" alt="Logo" class="brand-image" style="width:120px; height:auto; max-height:100% !important; border:0px !important;">
   </a>
   <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
            <a href="<?php echo e(route('adminprofile')); ?>" class="d-block">
				<?php if(!empty(Auth::guard('admin')->user()->image)): ?>
				<img src="<?php echo e(asset('admin/images/photos/'.Auth::guard('admin')->user()->image)); ?>" class="img-circle elevation-2" alt="User Image">
				<?php else: ?>
				<img src="<?php echo e(asset('admin/images/no-image.png')); ?>" class="img-circle elevation-2" alt="User Image"> 
				<?php endif; ?>
			</a>
         </div>
         <div class="info">
            <a href="<?php echo e(route('adminprofile')); ?>" class="d-block"><?php echo e(Auth::guard('admin')->user()->name); ?></a>
         </div>
      </div>
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <?php if(Session::get('page')=="dashboard"): ?>
				<?php $active="active" ?>
            <?php else: ?>
				<?php $active = "" ?>
            <?php endif; ?>
				<li class="nav-item">
				   <a href="<?php echo e(url('admin/dashboard')); ?>" class="nav-link <?php echo e($active); ?>">
					  <i class="nav-icon fas fa-th"></i>
					  <p>Dashboard </p>
				   </a>
				</li>
            <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if(Session::get('page')==$module['session_value']): ?>
					<?php $active="active" ?>
				<?php else: ?>
					<?php $active = "" ?>
				<?php endif; ?>
				<li class="nav-item menu-open">
				   <a href="<?php echo e(url($module['view_route'])); ?>" class="nav-link <?php echo e($active); ?>">
					  <i class="nav-icon <?php echo e($module['icon']); ?>"></i>
					  <p style="font-size:15.5px !important"><?php echo e($module['name']); ?></p>
					  <?php if(!empty($module['unseen'])): ?>
					  <small  style="color:red;">&nbsp;&nbsp; <i class="fa fa-eye-slash" aria-hidden="true"></i>&nbsp; <?php echo e($module['unseen']); ?></small>
				      <?php endif; ?>
				   </a>
				</li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </ul>
      </nav>
   </div>
</aside><?php /**PATH /home/rtpltechin/nneworld.rtpltech.in/resources/views/admin/layout/sidebar.blade.php ENDPATH**/ ?>