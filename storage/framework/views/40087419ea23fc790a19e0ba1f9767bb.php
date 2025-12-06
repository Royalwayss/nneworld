<div class="view-data">
  <form name="categoryForm" data-modal="Message" id="addEditForm" action="javascript:;" <?php if(!empty($id)): ?> data-action="<?php echo e(route('savemessage',[$id])); ?>" <?php else: ?> data-action="<?php echo e(route('savemessage')); ?>" <?php endif; ?>  method="post" enctype="multipart/form-data"><?php echo csrf_field(); ?>
	             <?php if(!empty($id)): ?>
				  <input type="hidden" name="id" value="<?php echo e($id); ?>">
				  <?php endif; ?>
				 <div class="row">
				 <div class="form-group col-6">
					<label for="parent_id">Select Parent Category<span class="red_star"> *</span></label>
					<select id="parent_id" name="parent_id" class="form-control forminput">
					      <option value="ROOT">Main Category</option>
						  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						  <option value="<?php echo e($category['id']); ?>" <?php if(!empty($id) && $row['parent_id'] == $category['id']): ?> selected <?php endif; ?> ><?php echo e($category['category_name']); ?>  </option>
						  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
				    <p class="error-message" id="error-parent_id"></p>
				  </div> 
		      
			  <div class="form-group col-6">
				<label for="category_name">Category Name<span class="red_star"> *</span></label>
				<input type="textbox"  class="form-control forminput"   id="category_name" name="category_name" placeholder="Category Name" <?php if(!empty($id)): ?> value="<?php echo e($row['category_name']); ?>" <?php endif; ?>   onkeyup="get_slug('category_name','category_url')">
				<p class="error-message" id="error-category_name"></p>
			  </div>


			  <div class="form-group col-6">
				<label for="category_url">Category Url<span class="red_star"> *</span></label>
				<input type="textbox"  class="form-control forminput"   id="category_url" name="category_url" placeholder="Category Url" <?php if(!empty($id)): ?> value="<?php echo e($row['category_url']); ?>" <?php endif; ?> >
				<p class="error-message" id="error-category_url"></p>
			  </div>
			  
			   <div class="form-group col-6">
				<label for="image">Image (Recommended size 311 x 212)<span class="red_star"> *</span></label>
				<input type="file"  class="form-control forminput"   id="image" name="image">
				<p class="error-message" id="error-image"></p>
			   </div>
			  
			  <?php if(!empty($id) && $row['image'] != ''): ?>
				  <div class="form-group col-6">
						<label for="">Uploaded Image</label>
						<img src="<?php echo e(asset('front/assets/images/category/'.$row['image'])); ?>" style="width:20%">
						
			      </div>
			  <?php endif; ?>
			  
			  <div class="form-group col-12">
				<label for="description">Description<span class="red_star"> *</span></label>
				<textarea  class="form-control forminput"   id="description" name="description" placeholder="Description"  >
				<?php if(!empty($id)){ echo $row['description']; }  ?>
				</textarea>
				<p class="error-message" id="error-description"></p>
			  </div>

             <div class="form-group col-6">
				<label for="sortorder">Sort<span class="red_star"> *</span></label>
				<input type="number"  class="form-control forminput"   id="sortorder" name="sortorder" placeholder="Category Sort" <?php if(!empty($id)): ?> value="<?php echo e($row['sortorder']); ?>" <?php endif; ?> >
				<p class="error-message" id="error-sortorder"></p>
			  </div>


              <div class="form-group col-md-6">
                    <label for="status">Status </label>
					 <select id="status" name="status" class="form-control forminput">
					      <option value="1" <?php if(!empty($id) && $row['status'] == '1' ): ?> selected <?php endif; ?> >Active</option>
					      <option value="0" <?php if(!empty($id) && $row['status'] == '0' ): ?> selected <?php endif; ?> >InActive</option>
					  </select> 	  
                  </div>


			  
			  <div>
			  <div>
			  <div class="row ">
			   <div class="form-group col-12 text-right">
					 <button type="submit" class="btn btn-primary bottom-submit-btn save-btn" > <?php if(!empty($id)): ?> Save <?php else: ?> Add <?php endif; ?> Category</button> 
			   </div>		  
			  </div>
			
		
	</form>
  
</div><?php /**PATH /home/rtpltechin/nneworld.rtpltech.in/resources/views/admin/categories/add-edit-form.blade.php ENDPATH**/ ?>