<?php $__env->startSection('dashboard_content'); ?>

                  <!-- Row -->
                <div class="row">

                    <div class="col-md-1 col-lg-1 hidden-sm hidden-xs"></div>
                    <div class="col-lg-10">


                        <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">Profit log for $ <?php echo e(number_format($Capital->id)); ?> </div>
                                    
                                        <div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>DAY</th>
                                                <th>Date</th>
                                                <th>Value ($)</th>
                                                <th>Status</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php $count =1;?>
                                            <?php $__currentLoopData = $Profits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Profit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                            <tr>
                                                <td><?php echo e($count); ?></td>
                                                <td><?php echo e(date('F d, Y h:i', strtotime($Profit->created_at))); ?></td>
                                                <td><?php echo e(number_format($Profit->amount)); ?></td>
                                                <td>
                                                    <?php if($Profit->has_requested==1): ?>
                                                    <label href="" class="btn btn-sm btn-info">Requested</label>
                                                    <?php endif; ?>
                                                   <!-- <a href="" class="btn btn-sm btn-danger">Pending</a>-->
                                                     <?php if($Profit->has_requested==0): ?>
                                                    <label href="" class="btn btn-sm btn-primary">Matured</label>
                                                    <?php endif; ?>

                                                    <?php if($Profit->has_requested==1 && $Profit->has_paid==1): ?>
                                                    <label href="" class="btn btn-sm btn-info">Paid</label>
                                                    <?php endif; ?>
                                                    
                                                </td>

                                               
                                                
                                            </tr>
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
                                                    <a href="<?php echo e(URL::to('/request/profit/cashoutall/'.$Capital->id)); ?>" class="btn btn-sm btn-success">Cash-out</a>
                                                    <?php endif; ?>
                                                </td>
                                                
                                            </tr>


                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                                   
                                </div>



                        
                    </div>

                    <div class="col-md-1 col-lg-1 hidden-xs hidden-sm"></div>
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
            <!-- ============================================================== -->


               <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>