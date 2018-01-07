<?php $__env->startSection('admin_dashboard_content'); ?>




<div class="row">

                    <div class="col-md-3 col-lg-3 hidden-sm hidden-xs"></div>
                    <div class="col-lg-6">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Profile Details</h4>
                            </div>
                            <div class="card-body">
                                    <div class="form-body">
                                       
                                       
                                       
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Username : </label>
                                                    <span><?php echo e($User->name); ?></span>
                                                    
                                                </div>
                                            </div>
                                        </div>


                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Email : </label>
                                                    <span><?php echo e($User->email); ?></span>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Country : </label>
                                                    <span><?php echo e($User->country); ?></span>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Phone : </label>
                                                    <span><?php echo e($User->Phone); ?></span>
                                                    
                                                </div>
                                            </div>
                                        </div>


                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Wallet Adrress : </label>
                                                    <span><label><?php echo e($User->wallet_address); ?></label></span>
                                                    
                                                </div>
                                            </div>
                                        </div>


                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Status : </label>
                                                    <span>
                                                        
                                                        <?php if($User->status==0): ?>
                                                    <label href="" class="label label-xs label-danger">Blocked</label>
                                                    <?php endif; ?>
                                                    <?php if($User->status==1): ?>
                                                    <label class="label label-xs label-success">Active</label>
                                                    <?php endif; ?>
                                                    </span>
                                                    
                                                </div>
                                            </div>
                                        </div>


                                        <hr>

                                          <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <span>
                                                        
                                                         
                                                   <?php if($User->status==1): ?>
                                                    <a href="<?php echo e(URL::to('/admin/user/block/'.$User->id)); ?>" class="btn btn-sm btn-danger">Block</a>
                                                    <?php endif; ?>
                                                    
                                                    <?php if($User->status==0): ?>
                                                    <a href="<?php echo e(URL::to('/admin/user/unblock/'.$User->id)); ?>" class="btn btn-sm btn-success">Unblock</a>
                                                    <?php endif; ?>

                                                    <a href="<?php echo e(URL::to('/admin/user/delete/'.$User->id)); ?>" class="btn btn-sm btn-danger">Delete</a>

                                                    </span>
                                                    
                                                </div>
                                            </div>
                                        </div>


                                      
                                       


                                    </div>
                            
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3"></div>
                </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>