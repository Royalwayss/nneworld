<div class="view-data">
   <form name="componentForm" data-modal="Component" id="addEditForm" action="javascript:;" <?php if(!empty($id)): ?> data-action="<?php echo e(route('savecomponent',[$id])); ?>" <?php else: ?> data-action="<?php echo e(route('savecomponent')); ?>" <?php endif; ?>  method="post" enctype="multipart/form-data"><?php echo csrf_field(); ?>
	   <?php if(!empty($id)): ?>
	   <input type="hidden" name="id" value="<?php echo e($id); ?>">
	   <?php endif; ?>
	   <div class="row">
		  <div class="form-group col-12">
			 <label for="name">Component Name<span class="red_star"> *</span></label>
			 <input type="textbox"  class="form-control forminput"   id="name" name="name" placeholder="Name" <?php if(!empty($id)): ?> value="<?php echo e($row['name']); ?>" <?php endif; ?> >
			 <p class="error-message" id="error-name"></p>
		  </div>
		  <div class="form-group col-12">
			 <label for="type">Component Type<span class="red_star"> *</span></label>
			 <select id="type" name="type" class="form-control forminput component_type" onchange="component_type()">
				<option value="">Select</option>
				<option value="Textbox" <?php if(!empty($id) && $row['type'] == 'Textbox'): ?> selected <?php endif; ?> >Textbox</option>
				<option value="Dropdown" <?php if(!empty($id) && $row['type'] == 'Dropdown'): ?> selected <?php endif; ?> >Dropdown</option>
			 </select>
			 <p class="error-message" id="error-type"></p>
		  </div>
		  
		   <div class="form-group col-12" <?php if(empty($id) || $row['type'] != 'Dropdown'): ?>  style="display:none" <?php endif; ?> id="DropdownOtion">
		          <table  class="table table-hover table-bordered table-striped" id="options-table" >
						<thead>
							<tr>
								  <td>Options</td>
								  <td>Action</td>
							</tr>
						</thead>
						<tbody>
						
						    <?php if(!empty($id) && $row['type'] == 'Dropdown'): ?>
								<?php $options = json_decode($row['options']); ?>
							   <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							      <tr>
								   <td>
									  <input type="textbox" class="form-control forminput option" name="options[]" placeholder="Enter the option" value="<?php echo e($option); ?>">
								      <p class="error-message error-options"></p>
								   </td>
								    <td class="text-center">
										<a  class="btn btn-danger optionRowRemove" href="javascript:void(0);"><i class="fa fa-times"></i>  </a>
									</td>
							    </tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						    <?php else: ?>
								<tr>
									  <td>
										<input type="textbox" class="form-control forminput option drop-down-option" name="options[]" placeholder="Enter the option">
										<p class="error-message error-options"></p>
									  </td>
									  <td></td>
								</tr>
							<?php endif; ?>
						</tbody>
						</tr>
		           </table>
				   <input type="button" value="Add" onclick="addOptionRow()">
		   </div>
		  
		  
		  
		  
		  
		  <div class="form-group col-4">
			 <label for="sort_order">Sort<span class="red_star"> *</span></label>
			 <input type="number"  class="form-control forminput"   id="sort_order" name="sort_order" placeholder="Component Sort" <?php if(!empty($id)): ?> value="<?php echo e($row['sort_order']); ?>" <?php endif; ?> >
			 <p class="error-message" id="error-sort_order"></p>
		  </div>
		  <div class="form-group col-md-4">
			 <label for="is_default">Is Default </label>
			 <select id="is_default" name="is_default" class="form-control forminput">
			 <option value="0" <?php if(!empty($id) && $row['is_default'] == '0' ): ?> selected <?php endif; ?> >No</option>
			 <option value="1" <?php if(!empty($id) && $row['is_default'] == '1' ): ?> selected <?php endif; ?> >Yes</option>
			 </select> 	  
		  </div>
		  <div class="form-group col-md-4">
			 <label for="status">Status </label>
			 <select id="status" name="status" class="form-control forminput">
			 <option value="1" <?php if(!empty($id) && $row['status'] == '1' ): ?> selected <?php endif; ?> >Active</option>
			 <option value="0" <?php if(!empty($id) && $row['status'] == '0' ): ?> selected <?php endif; ?> >InActive</option>
			 </select> 	  
		  </div>
	   </div>
	   <div class="row ">
		  <div class="form-group col-12 text-right">
			 <button type="submit" class="btn btn-primary bottom-submit-btn save-btn" > <?php if(!empty($id)): ?> Save <?php else: ?> Add <?php endif; ?> Component</button> 
		  </div>
	   </div>
   </form>
</div><?php /**PATH /home/rtpltechin/nneworld.rtpltech.in/resources/views/admin/components/add-edit-form.blade.php ENDPATH**/ ?>