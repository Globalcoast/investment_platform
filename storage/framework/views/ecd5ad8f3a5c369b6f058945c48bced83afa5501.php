<?php $__env->startSection('auth_content'); ?>





  <!-- Row -->
                <div class="row">

                    <div class="col-md-3 col-lg-3 hidden-sm hidden-xs"></div>
                    <div class="col-lg-6">


                        <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">Create new admin</div>
                                    

                                    <form class="form-horizontal" method="GET" action="<?php echo e(URL::to('/admin/register_g')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">Username</label>

                            <div class="col-md-12">
                                <input id="username" type="text" class="form-control" name="username" value="<?php echo e(old('username')); ?>" required autofocus>

                                <?php if($errors->has('username')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('username')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="reg-password" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-12">

                                <input id="reg-password" name="password_confirmation" class="form-control" type="password"
                    required placeholder="confirm your password"
                    />

                                

                               
                            </div>
                        </div>

                        

                         <div class="form-group<?php echo e($errors->has('role') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Role</label>

                            <div class="col-md-12">

                                <select id="role" class="form-control" name="role" required>
                                    <option selected="selected" value="0">Ordinary admin</option>
                                    <option value="1">Super admin</option>
                                </select>

                                <?php if($errors->has('role')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('role')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>




                      

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>

                                
                            </div>
                        </div>
                    </form>
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
              
                <!-- ============================================================== -->
            </div>







<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>