<?php $__env->startSection('admin_dashboard_content'); ?>





  <!-- Row -->
                <div class="row">

                    <div class="col-md-3 col-lg-3 hidden-sm hidden-xs"></div>
                    <div class="col-lg-6">


                        <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">Add wallet</div>
                                    

                                    <form class="form-horizontal" method="POST" action="<?php echo e(URL::to('/admin/create_wallet')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('currency') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">Currency</label>

                            <div class="col-md-12">

                               <select class="form-control<?php echo e($errors->has('currency') ? ' has-error' : ''); ?> custom-select" name="currency">
                                                        <option>--Select your Currency--</option>
                                                        <option value="btc">BTC</option>
                                                        <option value="eth">ETH</option>
                                                        <option value="ltc">LTC</option>
                                                    </select>

                                <?php if($errors->has('currency')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('currency')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
                            <label for="roi_value" class="col-md-4 control-label">Address</label>

                            <div class="col-md-12">
                                <input id="address" type="text" class="form-control" name="address" value="<?php echo e(old('address')); ?>" required autofocus>

                                <?php if($errors->has('address')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('address')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>




                        

                         



                      

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                   Add wallet
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

<?php echo $__env->make('layouts.admin_dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>