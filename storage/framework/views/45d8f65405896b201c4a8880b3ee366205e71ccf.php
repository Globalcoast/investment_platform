<?php $__env->startSection('dashboard_content'); ?>



                  <!-- Row -->
                <div class="row">

                    <div class="col-md-3 col-lg-3 hidden-sm hidden-xs"></div>
                    <div class="col-lg-6">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Account Details</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="<?php echo e(URL::to('/account')); ?>" role="form">

                                    <?php echo e(csrf_field()); ?>


                                    <div class="form-body">
                                       
                                       
                                       
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Currency</label>

                                                    <?php if(Auth::user()->currency_type ==null): ?>
                                                    <select class="form-control<?php echo e($errors->has('currency') ? ' has-error' : ''); ?> custom-select" name="currency">
                                                        <option>--Select your Currency--</option>
                                                        <option value="btc">BTC</option>
                                                        <option value="eth">ETH</option>
                                                        <option value="ltc">LTC</option>
                                                    </select>

                                                    <?php else: ?>

                                                    <input disabled="disabled" type="text" class="form-control<?php echo e($errors->has('currency') ? ' has-error' : ''); ?>" placeholder="Currency" name="currency"
                                                    value="<?php echo e(Auth::user()->currency_type); ?>">

                                                    <?php endif; ?>

                                                </div>

                                                 <?php if($errors->has('currency')): ?>
                                    <span class="help-block">
                                        <strong style="color: red;"><?php echo e($errors->first('currency')); ?></strong>
                                    </span>
                                <?php endif; ?>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Wallet Address</label>
                                                    <input

                                                        <?php

                                                            if(Auth::user()->wallet_address !=null){
                                                                echo "disabled='disabled";
                                                            }
                                                        ?>

                                                     type="text" class="form-control<?php echo e($errors->has('wallet_address') ? ' has-error' : ''); ?>" placeholder="wallet Address" name="wallet_address"
                                                    value="<?php echo e(Auth::user()->wallet_address); ?>">
                                                </div>

                                                 <?php if($errors->has('wallet_address')): ?>
                                    <span class="help-block">
                                        <strong style="color: red;"><?php echo e($errors->first('wallet_address')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <?php if(Auth::user()->wallet_address ==null): ?>

                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Confirm Wallet Address</label>
                                                    <input type="text" class="form-control<?php echo e($errors->has('wallet_address_confirmation') ? ' has-error' : ''); ?>" placeholder="Confirm Wallet Address" name="wallet_address_confirmation" value="<?php echo e(Auth::user()->wallet_address); ?>">
                                                </div>
                                            </div>

                                              <?php if($errors->has('wallet_address_confirmation')): ?>
                                    <span class="help-block">
                                        <strong style="color: red;"><?php echo e($errors->first('wallet_address_confirmation')); ?></strong>
                                    </span>
                                <?php endif; ?>

                                        </div>
                                        <?php endif; ?>

                                       


                                    </div>

                                     <?php if(Auth::user()->wallet_address ==null || Auth::user()->currency_type == null): ?>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Update</button>
                                    </div>

                                    <?php endif; ?>


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
              
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->


            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>