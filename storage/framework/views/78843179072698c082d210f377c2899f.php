<?php $__env->startSection('content'); ?>

<main>

  <!-- Breadcrumb area start -->
  <section class="breadcrumb__area" style="background-image: url('<?php echo e(asset('front/assets/imgs/kidBd.jpg')); ?>');">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="breadcrumb__inner">
            <div class="breadcrumb__left">
              <h1 class="breadcrumb__title"><?php echo e($productdetails['category']['category_name']); ?></h1>
            </div>
            <div class="breadcrumb__right">
              <ul>
                <li> <a href="<?php echo e(route('home')); ?>">home</a> </li>
                <li> <a href="<?php echo e(url($productdetails['category']['category_url'])); ?>"><?php echo e($productdetails['category']['category_name']); ?></a> </li>
                <li> <a href=""><?php echo e($productdetails['product_name']); ?></a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Breadcrumb area end -->


  <!-- Portfolio area start -->
  <section class="projectd__details-inner pt-150 pb-130">
    <div class="container">
      <div class="projectd__wrapper-inner">
        <div class="projectd__thumb pb-lg-5">
		 <?php if(!empty($productdetails['product_image'])): ?>
          <img data-aos="fade-up" data-aos-delay="200" src="<?php echo e(asset('front/assets/images/products/large/'.$productdetails['product_image']['image'])); ?>" alt="img">
		  <?php endif; ?>
        </div>
        <div class="about__content pt-0">
          <h2 class="sec-subtitle" data-aos="fade-up" data-aos-delay="100">Verdant Kids
          </h2>
          <h3 class="sec-title" data-aos="fade-right" data-aos-delay="200"><?php echo e($productdetails['product_name']); ?></h3>
        </div>
        <h2 class="projectd__details-title mb-3"> </h2>
        <?php if(!empty($productdetails['components'])): ?>
		<table class="table table-striped">
          <thead>
            <tr>
              <th>Component</th>
              <th>Specification</th>
            </tr>
          </thead>
          <tbody class="">
            <?php $__currentLoopData = $productdetails['components']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
              <td><?php echo e($component['name']); ?></td>
              <td><?php echo e($component['value']); ?></td>
            </tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
        <?php endif; ?>
		<div class="contact__submitwrap">
		 <form action="<?php echo e(route('addtocart')); ?>" method="post"><?php echo csrf_field(); ?>
		  <input type="hidden" name="product_id" value="<?php echo e($productdetails['id']); ?>">
		  <button class="contact__submit btn-rollover" type="submit" id="enquire-now">Enquire Now<i class="fa-solid fa-arrow-right"></i></button>
		 </form>
		</div>
      </div>
    </div>
  </section>
  <!-- Portfolio area end -->


</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rtpltechin/nneworld.rtpltech.in/resources/views/front/pages/products/details/index.blade.php ENDPATH**/ ?>