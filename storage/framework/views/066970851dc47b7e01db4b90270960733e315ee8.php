<?php $__env->startSection('admin_dashboard_content'); ?>




<div class="row">

                    <div class="col-md-1 col-lg-1 hidden-sm hidden-xs"></div>
                    <div class="col-lg-10">


                        <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">All Requeted Bonuses</div>
                                    
                                        <div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Investor</th>
                                                <th>Amount ($)</th>
                                                <th>Currency | ADDS</th>
                                                <th>Status</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                            $count=($Bonuses->currentPage() * $Bonuses->perPage())-($Bonuses->perPage() - 1);
                                            ?>

                                            <?php $__currentLoopData = $Bonuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Bonus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            


                                            <tr>
                                                <td><?php echo e($count); ?></td>
                                                <td><?php echo e($Bonus->referral->name); ?></td>
                                                <td><?php echo e(number_format($Bonus->amount)); ?></td>


                                                <td>
                                                    <?php echo e($Bonus->referral->currency_type); ?>

                                                    &nbsp;|&nbsp;
                                                    <?php echo e($Bonus->referral->wallet_address); ?>

                                                </td>
                                                <td>

                                                    <?php if($Bonus->has_invested==1): ?>
                                                    <label href="" class="label label-xs label-success">Invested</label>
                                                    <?php else: ?>

                                                    <?php if($Bonus->has_paid==1): ?>
                                                    <label class="label label-xs label-success">Paid</label>
                                                    <?php endif; ?>


                                                     <?php if($Bonus->has_requested==1): ?>
                                                    <label class="label label-xs label-success">Requested</label>
                                                    <?php endif; ?>

                                                    <?php endif; ?>

                                                    <?php if($Bonus->automate==1): ?>
                                                    <label href="" class="label label-xs label-info">Automated</label>
                                                    <?php endif; ?>
                                                </td>

                                                <td>
                                                   
                                                   <?php if($Bonus->has_requested==1 && $Bonus->has_paid==0 && $Bonus->automate==0): ?>
                                                    <a href="<?php echo e(URL::to('')); ?>" class="btn btn-sm btn-primary">Pay</a>

                                                    
                                                    <a href="<?php echo e(URL::to('/admin/request/bonus/automate/'.$Bonus->id)); ?>" class="btn btn-sm btn-primary">Automate Payment</a>
                                                   

                                                   <a href="<?php echo e(URL::to('/admin/request/bonus/con_trans/'.$Bonus->id)); ?>" class="">.</a>

                                                   <?php endif; ?>
                                                    
                                                </td>
                                                
                                                
                                            </tr>

                                            <?php
                                                $count++;
                                            ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                           
                                           
                                        </tbody>
                                    </table>
                                </div>


                                <center>
                                    <?php echo e($Bonuses->links()); ?>

                                </center>

                            </div>
                        </div>
                                   
                                </div>



                        
                    </div>

                    <div class="col-md-1 col-lg-1 hidden-xs hidden-sm"></div>
                </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>