
<div class="view-data">
	<div class="row">
		<div class="col-3"><strong>Name</strong></div>
		<div class="col-1">:</div>
		<div class="col-8"><?php echo e($data['name']); ?></div>
	</div>
	<div class="row">
		<div class="col-3"><strong>Email</strong></div>
		<div class="col-1">:</div>
		<div class="col-8"><?php echo e($data['email']); ?></div>
	</div>
	<div class="row">
		<div class="col-3"><strong>Message</strong></div>
		<div class="col-1">:</div>
		<div class="col-8"><?php echo e($data['message']); ?></div>
	</div>
	<div class="row">
		<div class="col-3"><strong>Date</strong></div>
		<div class="col-1">:</div>
		<div class="col-8"><?php echo e(date("M-d-Y H:i a", strtotime($data['created_at']))); ?></div>
	</div>
	
		<?php if(!empty(count($data['enquiry_products']))): ?>
						
						
						   <tr> 
                            <td colspan="3" align='left' valign='top' class='style3'>
                                <table width='95%' border='0' align='left' cellpadding='3' cellspacing='1' bgcolor='ACA899'>
                                    <tr><td colspan="3"' align='left' valign='top' class='style2' bgcolor='#fff'><strong>Enquiry  Products</strong></td></tr>
									<tr>
                                        <td width='20%' align='center' valign='top' class='style2' bgcolor='#cccccc'>Product Name</td>
                                        <td width='15%' align='center' valign='top' class='style2' bgcolor='#cccccc'>Image</td>
                                        <td width='15%' align='center' valign='top' class='style2' bgcolor='#cccccc'>Category</td>
                                    </tr> 
                                   <?php $__currentLoopData = $data['enquiry_products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $product = $product_details['product']; ?>
									<tr>
                                        <td align='center' valign='top' class='style3' bgcolor='#F7F7F7'>
										<a target="_block" style="text-decoration: none;color: #666666;" href="<?php echo e(route('product',[$product['id'],$product['product_url']])); ?>">
										   <?php echo e($product['product_name']); ?>

										</a>
                                        </td>
                                        <td align='center' valign='top' class='style3' bgcolor='#F7F7F7'>
										 
										 <?php if(!empty($product['product_image'])): ?>
												<a  target="_block" href="<?php echo e(route('product',[$product['id'],$product['product_url']])); ?>">
													  <img width="30%" src="<?php echo e(asset('front/assets/images/products/large/'.$product['product_image']['image'])); ?>">
												</a>
										 <?php endif; ?>
										</td>
                                        <td align='center' valign='top' class='style3' bgcolor='#F7F7F7'>
										 <?php if(!empty($product['category'])): ?>
										       <a target="_block" style="text-decoration: none;color: #666666;" href="<?php echo e(url($product['category']['category_url'])); ?>">
										           <?php echo e($product['category']['category_name']); ?>

										        </a>
										 <?php endif; ?>
										
										</td>
										
                                    </tr>
                                  
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   
                                </table>
                            </td>
                        </tr>
                       
						<?php endif; ?>
	
	
	
	
	
	
</div>
       <?php /**PATH D:\xampp\htdocs\nne\resources\views/admin/contacts/view.blade.php ENDPATH**/ ?>