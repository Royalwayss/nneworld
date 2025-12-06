<!DOCTYPE html>
<html lang="en">
   <head>
      <?php echo $__env->make('front.elements.meta-tag', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('front.elements.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </head>
   <body>
      <?php echo $__env->make('front.elements.loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('front.elements.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	  <?php echo $__env->yieldContent('content'); ?>
	  <?php echo $__env->make('front.elements.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	  <?php echo $__env->make('front.elements.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </body>
</html><?php /**PATH /home/rtpltechin/nneworld.rtpltech.in/resources/views/front/layout/layout.blade.php ENDPATH**/ ?>