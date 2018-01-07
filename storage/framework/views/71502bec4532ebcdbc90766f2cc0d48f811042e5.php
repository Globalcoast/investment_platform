<?php $__env->startSection('dashboard_content'); ?>

                  <!-- Row -->
                <div class="row">

                    <div class="col-md-3 col-lg-3 hidden-sm hidden-xs"></div>
                    <div class="col-lg-6">


                        <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">Investment Console</div>
                                    

                                     <form action="<?php echo e(URL::to('/invest')); ?>" method="POST" role="form">

                                        <?php echo e(csrf_field()); ?>


                                    <div class="form-body">
                                       
                                       
                                       
                                        





                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Amount ($)</label>
                                                    <input type="number" class="form-control<?php echo e($errors->has('amount') ? ' has-error' : ''); ?>" placeholder="Amount to invest" name="amount" value="<?php echo e(old('amount
                                                    ')); ?>">
                                                </div>

                                                  <?php if($errors->has('amount')): ?>
                                    <span class="help-block">
                                        <strong style="color: red;"><?php echo e($errors->first('amount')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                            </div>
                                        </div>


                                         <hr>

                                        <div class="row">
                                            <div class="col-md-12 ">
                                               
                                               <i class="h6" style="color:red;font-size: 12px;">
                                                 By proceeding, you accept accept all the terms & conditions  of the Globalcoast Investment Platform
                                                   
                                               </i>

                                            </div>
                                        </div>

                                   

                                       


                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Complete</button>
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
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>