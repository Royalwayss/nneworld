<?php $__env->startSection('content'); ?>

<main>

    <!-- Breadcrumb area start -->
    <section class="breadcrumb__area" style="background-image: url('<?php echo e(asset('front/assets/imgs/ebikeBd.jpg')); ?>');">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__inner">
                        <div class="breadcrumb__left">
                            <h1 class="breadcrumb__title"><?php echo e($catdetails['category_name']); ?></h1>
                        </div>
                        <div class="breadcrumb__right">
                            <ul>
                                <li> <a href="<?php echo e(route('home')); ?>">home</a> </li>
                                <li> <a href=""><?php echo e($catdetails['category_name']); ?></a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb area end -->


    <!-- Portfolio area start -->
    <section class="portfolio__area-6 pt-150">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="portfolio__list-6">
                        <?php if(!empty(count($products))): ?>
							<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php 
							$product_url = route('product',[$product['id'],$product['product_url']]);
							$product_image = isset($product['product_image']['image']) ? 'front/assets/images/products/medium/'.$product['product_image']['image'] : '';
							if(empty($product_image) || !File::exists(public_path($product_image))){
								$product_image = 'front/assets/images/no-image-found.jpg';
							} 
							?>
							<div class="portfolio__item-4">
								<div class="shine">
									<a href="<?php echo e($product_url); ?>"><img src="<?php echo e($product_image); ?>" alt="NNE Curl" data-lag="0.3"></a>
								</div>
								<div class="portfolio__content-4">
									<p>Verdant by NNE</p>
									<a href="<?php echo e($product_url); ?>">
										<h2 class="portfolio__title-4"><?php echo e($product['product_name']); ?></h2>
									</a>
								</div>
							</div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
							<h4>Products not found</h4>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio area end -->


</main>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\nneworld2025\nneworld\resources\views/front/pages/products/listing/index.blade.php ENDPATH**/ ?>