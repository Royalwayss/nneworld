<div class="addedit-form">
   <div class="row popup-sticky">
      <div class="col-8 tab">
         <button class="tab1 project_tabs tablinks active" onclick="openTab(1)">Product Details</button>
         <button class="tab2 project_tabs tablinks" onclick="openTab(2)">Images</button>
      </div>
      <div class="col-4 " >
         <div class="form-group col-12 text-right">
            <button type="submit" class="btn btn-success save-btn top-submit-btn">Save Product</button> 
         </div>
      </div>
   </div>
   <form name="productForm" data-modal="Product" id="addEditForm" action="javascript:;" <?php if(!empty($id)): ?> data-action="<?php echo e(route('saveproperty',[$id])); ?>" <?php else: ?> data-action="<?php echo e(route('saveproperty')); ?>" <?php endif; ?>  method="post" enctype="multipart/form-data"><?php echo csrf_field(); ?>
   <div class="row" >
      <?php if(!empty($id)): ?>
      <input type="hidden" name="id" value="<?php echo e($id); ?>">
      <?php endif; ?>
      <div class="row tabcontent" id="Property_Details">
         <div class="form-group col-4">
            <label for="product_name">Product Name<span class="red_star"> *</span></label>
            <input type="text" class="form-control forminput"   id="product_name" name="product_name" placeholder="Enter Product Name" <?php if(!empty($id)): ?> value="<?php echo e($product['product_name']); ?>" <?php endif; ?> onkeyup="get_slug('product_name','product_url')">
            <p class="error-message" id="error-product_name"></p>
         </div>
         <div class="form-group col-4">
            <label for="product_url">Product Url<span class="red_star"> *</span></label>
            <input type="text" class="form-control forminput" id="product_url" name="product_url" placeholder="Enter Product Url" <?php if(!empty($id)): ?> value="<?php echo e($product['product_url']); ?>" <?php endif; ?>>
            <p class="error-message" id="error-product_url"></p>
         </div>
         <div class="form-group col-4">
            <label for="property_name">Category<span class="red_star"> *</span></label>
            <select id="category_id" name="category_id" class="form-control forminput">
               <option value="">Choose ... </option>
               <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <option value="<?php echo e($category['id']); ?>" <?php if(!empty($id) && $product['category_id'] == $category['id'] ): ?> selected <?php endif; ?> >&#9679;&nbsp;<?php echo e($category['category_name']); ?></option>
               <?php $__currentLoopData = $category['sub_categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <option value="<?php echo e($sub_category['id']); ?>" <?php if(!empty($id) && $product['category_id'] == $sub_category['id'] ): ?> selected <?php endif; ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&raquo;&raquo;<?php echo e($sub_category['category_name']); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <p class="error-message" id="error-category_id"></p>
         </div>
         <?php
            $selected_components = [];
            $product_components = [];
            if(!empty($id)){
              foreach($product['product_components'] as $product_component){
               $selected_components[] = $product_component['component_id'];
               $product_components[ $product_component['component_id']] = $product_component;
              }
              
              
            }else{
             foreach($components as $component){
              if($component['is_default'] == '1'){
            	  $selected_components[] = $component['id'];
              }
             }
            }
            
            
            ?>
         <div class="form-group col-12">
            <label for="components">Components<span class="red_star"> *</span></label>
            <select id="components" width="width:100%" name="components[]" class="form-control forminput selectbox MultipleSelect select2" multiple onchange="components_onchange('1')">
				<?php $__currentLoopData = $components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($component['id']); ?>" <?php if(in_array($component['id'],$selected_components)): ?> selected <?php endif; ?>><?php echo e($component['name']); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <span class="btn btn-success btn-sm select-all" style="margin-top:8px;">Select all</span>
            <span class="btn btn-danger btn-sm deselect-all" style="margin-top:8px;">Deselect all</span>
            <p class="error-message" id="error-components"></p>
         </div>
         <div class="form-group col-12">
            <table  class="table table-hover table-bordered table-striped" id="component-table" >
               <tbody>
                  <tr>
                     <th style="width:250px">Label</th>
                     <th >Value</th>
                     <th>Actions</th>
                  </tr>
                  <?php $__currentLoopData = $components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr class="component-input" id="component-<?php echo e($component['id']); ?>" <?php if(in_array($component['id'],$selected_components)): ?> <?php else: ?> style="display:none" <?php endif; ?> >
                  <td><?php echo e($component['name']); ?></td>
                  <td>
                     <?php if( $component['type'] == 'Textbox'): ?>
                     <input type="textbox" class="form-control" name="component_value_<?php echo e($component['id']); ?>" <?php if(!empty( $product_components) && isset( $product_components[$component['id']])): ?> value="<?php echo e($product_components[$component['id']]['value']); ?>" <?php endif; ?>>
                     <?php endif; ?>
                     <?php if( $component['type'] == 'Dropdown'): ?>
                     <?php $options = json_decode($component['options']); ?>
                     <select class="form-control" name="component_value_<?php echo e($component['id']); ?>">
                        <option value="">select</option>
                        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($option); ?>" <?php if(!empty( $product_components) && isset( $product_components[$component['id']]) && $product_components[$component['id']]['value'] == $option): ?>  selected <?php endif; ?>><?php echo e($option); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                     <?php endif; ?>
                  </td>
                  <td class="text-center">
                     <a class="btn btn-danger componentRemove" data-id="<?php echo e($component['id']); ?>" href="javascript:void(0);"><i class="fa fa-times"></i>                                           </a>
                  </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
            </table>
         </div>
         <div class="form-group col-4">
            <label for="sort_order">Sort<span class="red_star"> *</span></label>
            <input type="text" class="form-control forminput" id="sort_order" name="sort_order" placeholder="Sort" <?php if(!empty($id)): ?> value="<?php echo e($product['sort_order']); ?>" <?php endif; ?>>
         </div>
         <div class="form-group col-md-4">
            <label for="status">Status</label>
            <select id="status" name="status" class="form-control">
            <option value="1" <?php if(!empty($id) && $product['status'] == '1' ): ?> selected <?php endif; ?> >Active</option>
            <option value="0" <?php if(!empty($id) && $product['status'] == '0' ): ?> selected <?php endif; ?> >InActive</option>
            </select> 	  
         </div>
         <div class="form-group col-md-4">
            <label for="newly_launched">Newly Launched </label>
            <select id="newly_launched" name="newly_launched" class="form-control">
            <option value="0" <?php if(!empty($id) && $product['newly_launched'] == '0' ): ?> selected <?php endif; ?> >No</option>
            <option value="1" <?php if(!empty($id) && $product['newly_launched'] == '1' ): ?> selected <?php endif; ?> >Yes</option>
            </select> 	  
         </div>
      </div>
      <div class="row tabcontent" id="Images" style="display:none">
         <div class="form-group col-md-8">
            <label class="col-md-12 control-label">Product Images: <span style="color:red">Dimensions (1290 X 628)</span></label>
            <div class="col-md-12">
               <table  class="table table-hover table-bordered table-striped" id="image-table" >
                  <tbody>
                     <tr>
                        <th width="35%">Image</th>
                        <th width="35%">Sort</th>
                        <th>Actions</th>
                     </tr>
                     <?php if(!empty($product['product_images'])): ?>
                     <?php $__currentLoopData = $product['product_images']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr id="delete-<?php echo e($image['id']); ?>">
                        <td>
                           <?php if(!empty($image['image'])): ?>
                           <img  style="width:30%" src="<?php echo e(asset('front/assets/images/products/large/'.$image['image'])); ?>"/>
                           <?php else: ?>
                           N/A
                           <?php endif; ?>
                        </td>
                        <td class="text-center">
                           <input id="ImageSort-<?php echo e($image['id']); ?>"  type="number" class="" style="width:100px" value="<?php echo e($image['image_order']); ?>">
                           <button data-imageid="<?php echo e($image['id']); ?>" style="height: 28px;padding-top: 0px" class="btn btn-success updateImageSort" type="button"> Update</button>
                        </td>
                        <td class="text-center">
                           <a   data-id="<?php echo e($image['id']); ?>" class="btn btn-danger Deleteimage" href="javascript:void(0);"><i class="fa fa-times"></i>
                           </a>
                        </td>
                     </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <?php endif; ?>
                     <?php for($i=1; $i <=1; $i++): ?>
                     <tr class="blockIdWrap">
                        <td>
                           <input type="file" class="form-control" name="images[]">
                        <td>
                           <input type="text" placeholder="Image Sort" name="image_order[]" style="color:gray" autocomplete="off" class="form-control"  />
                        </td>
                        </td>
                        <td></td>
                     </tr>
                     <?php endfor; ?>
                  </tbody>
               </table>
               <input type="button" onclick="addImageRow()" value="Add More" />
            </div>
         </div>
      </div>
   </div>
   <div>
      <div class="row ">
         <div class="form-group col-12 text-right">
            <button type="submit" class="btn btn-primary bottom-submit-btn save-btn" >Save Product</button> 
         </div>
      </div>
   </div>
</div>
</form>
</div><?php /**PATH D:\xampp\htdocs\nne\resources\views/admin/products/addeditproduct.blade.php ENDPATH**/ ?>