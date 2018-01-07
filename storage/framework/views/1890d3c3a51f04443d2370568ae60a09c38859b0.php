<?php $__env->startSection('admin_dashboard_content'); ?>

  <!-- Row -->
                <div class="row">

                    <div class="col-md-2 col-lg-2 hidden-sm hidden-xs"></div>
                    <div class="col-lg-8">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Profit Requests</h4>
                            </div>
                            <div class="card-body">


                                <?php $__currentLoopData = $Capitals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Capital): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                               <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info"><?php echo e(date('F d, Y h:i', strtotime($Capital->created_at))); ?></div>
                                    <p class="ribbon-content">

                                        <span>
                                            <label>Investor:&nbsp;</label><?php echo e($Capital->user->name); ?>

                                        </span>
                                        &nbsp;|
                                        <span>
                                            <label>Currency:&nbsp;</label><?php echo e($Capital->user->currency_type); ?>


                                            &nbsp;|

                                           <?php if(isset($Capital->user->wallet_address)): ?>
                                                    Investor's Address: 
                                                    <label class="label label-info label-sm">

                                                         <?php echo e($Capital->user->wallet_address); ?>

                                                        
                                                    </label>
                                                   
                                                    <?php else: ?>
                                                    Investor's Address:
                                                    <label class="label label-info label-sm">
                                                        
                                                    ---
                                                </label>

                                                    <?php endif; ?>
                                        </span>
                                    </p>

                                    <p class="ribbon-content">

                                        <span>
                                            <label>Capital:&nbsp;</label>$ <?php echo e(number_format($Capital->amount)); ?>

                                        </span>

                                        &nbsp;|&nbsp;

                                        <span>
                                        <label>Accumulated Profits:&nbsp;</label>$ <?php echo e(number_format($Capital->profit->sum('amount'))); ?>&nbsp;
                                    </span>

                                    </p>

                                    <script type="text/javascript">
                                       
                                       window.onload = function(){

                                        //$('#toggle_target').hide();

                                        $('#toggle_trigger_<?php echo e($Capital->id); ?>').click(function(){
                                           $('#toggle_target_<?php echo e($Capital->id); ?>').toggle();
                                        });

                                       }
                                   </script>

                                   <p class="ribbon-content">
                                       <button id="toggle_trigger_<?php echo e($Capital->id); ?>" class="btn btn-sm btn-primary">Toggle
                                   </button>

                                   </p>

                                    <div id="toggle_target_<?php echo e($Capital->id); ?>" style="display: none;">
                                        <hr>
                                        <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>DAY</th>
                                                <th>Date</th>
                                                <th>Value ($)</th>
                                                <th>Status</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php $count =1;
                                                $remainingProfit=0;
                                                    ?>
                                            <?php $__currentLoopData = $Capital->profit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Profit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                            <tr>
                                                <td><?php echo e($count); ?></td>
                                                <td><?php echo e(date('F d, Y h:i', strtotime($Profit->created_at))); ?></td>
                                                <td><?php echo e(number_format($Profit->amount)); ?></td>
                                                <td>
                                                    <?php if($Profit->has_requested==1): ?>
                                                    <label href="" class="btn btn-sm btn-info">Requested</label>
                                                    <?php else: ?>
                                                   <!-- <a href="" class="btn btn-sm btn-danger">Pending</a>-->
                                                     
                                                    <label href="" class="btn btn-sm btn-success">Matured</label>
                                                  

                                                    <?php if($Profit->has_paid==1): ?>
                                                    <label href="" class="btn btn-sm btn-success">Paid</label>
                                                    <?php endif; ?>

                                                    <?php endif; ?>

                                                    <?php if($Profit->automate==1): ?>
                                                    <label href="" class="btn btn-sm btn-info">Automated</label>
                                                    <?php endif; ?>
                                                    
                                                </td>

                                                <td>
                                                   <?php if($Profit->has_requested==1 && $Profit->has_paid==0 && $Profit->automate==0): ?>
                                                    <a href="<?php echo e(URL::to('')); ?>" class="btn btn-sm btn-primary">Pay</a>

                                                    
                                                    <a href="<?php echo e(URL::to('/admin/profit/payment/automate/'.$Profit->id)); ?>" class="btn btn-sm btn-primary">Automate Payment</a>

                                                    <a href="<?php echo e(URL::to('/admin/profit/payment/con_trans/'.$Profit->id)); ?>" class="">.</a>
                                                   

                                                   <?php endif; ?>
                                                </td>
                                                
                                            </tr>
                                            <?php
                                                if($Profit->has_requested==0){
                                                    $remainingProfit=$remainingProfit+$Profit->amount;
                                                }
                                            ?>
                                            <?php $count++; ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                             
                                        

                                        <!--total section-->
                                            <tr>
                                                <td>Total Left</td>
                                                <td></td>
                                                <?php
                                                if($remainingProfit==null || $remainingProfit==0){
                                                    $remainingProfit=0;
                                                }
                                                    ?>
                                                <td>$ <?php echo e(number_format($remainingProfit)); ?></td>
                                                <td>
                                                    
                                                </td>

                                                <td>
                                                    <?php if($remainingProfit!=null || $remainingProfit > 0): ?>
                                                    <a href="<?php echo e(URL::to('')); ?>" class="btn btn-sm btn-primary" title="Pay currently requested profits not automated">Pay</a>

                                                      <a href="<?php echo e(URL::to('/admin/profit/payment/automateall/'.$Capital->id)); ?>" class="btn btn-sm btn-primary" title="Automate currently requested profits not automated">Automate Payment</a>

                                                      <a href="<?php echo e(URL::to('/admin/profit/payment/con_trans_all/'.$Capital->id)); ?>" class="">.</a>

                                                    <?php endif; ?>
                                                </td>
                                                
                                            </tr>


                                           
                                        </tbody>
                                    </table>
                                </div>
                                    </div>

                                    
                                
                                </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                <center>
                                    <?php echo e($Capitals->links()); ?>

                                </center>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3"></div>
                </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>