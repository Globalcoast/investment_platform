<?php $__env->startSection('dashboard_content'); ?>

<!-- Row -->
                <div class="row">

                    <div class="col-md-3 col-lg-3 hidden-sm hidden-xs"></div>
                    <div class="col-lg-6">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Change Password</h4>
                            </div>
                            <div class="card-body">
                               <form role="form" class="form-horizontal p-t-20" method="POST" action="<?php echo e(URL::to('/setting/changePassword')); ?>">


                                <?php echo e(csrf_field()); ?>



                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Current password</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                               
                                                <input  type="text" class="form-control<?php echo e($errors->has('current_password') ? ' has-error' : ''); ?>" id="exampleInputuname3" placeholder="Current password" name="current_password" value="<?php echo e(old('current_password')); ?>">
                                                

                                            </div>


                                                 <?php if($errors->has('current_password')): ?>
                                    <span class="help-block">
                                        <strong style="color: red;"><?php echo e($errors->first('current_password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 control-label">New password</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input  type="password" class="form-control<?php echo e($errors->has('password') ? ' has-error' : ''); ?>" id="" placeholder="Enter new password" name="password" value="">
                                                
                                            </div>


                                                 <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong style="color: red;"><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Confirm new password</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                
                                                <input type="password" class="form-control<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>" id="exampleInputuname3" placeholder="Confirm new password" name="password_confirmation" value="">
                                                 

                                            </div>


                                                   <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong style="color: red;"><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                <?php endif; ?>

                                        </div>
                                    </div>
                                   
                                   
                                    <div class="form-group row m-b-0">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3"></div>
                </div>
                <!-- Row -->





























                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>