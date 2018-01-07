<?php $__env->startSection('dashboard_content'); ?>



                  <!-- Row -->
                <div class="row">

                    <div class="col-md-1 col-lg-1 hidden-sm hidden-xs"></div>
                    <div class="col-lg-10">


                        <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">Referred by me</div>
                                    
                                        <div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Date</th>
                                                <th>Name</th>
                                                <th>Bonus ($)</th>
                                                <th>Status</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                            $count=($Downlines->currentPage() * $Downlines->perPage())-($Downlines->perPage() - 1);
                                            ?>

                                            <?php $__currentLoopData = $Downlines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Downline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <tr>
                                                <td><?php echo e($count); ?></td>
                                                <td><?php echo e(date('d-m-Y h:i', strtotime($Downline->created_at))); ?></td>
                                                <td><?php echo e($Downline->referee->name); ?></td>
                                                <td>

                                                    <?php if($Downline->amount==0): ?>
                                                    <?php echo e(null); ?>

                                                    <?php else: ?>
                                                    <?php echo e(number_format($Downline->amount)); ?>

                                                    <?php endif; ?>

                                            </td>
                                                <td>
                                                    <?php if($Downline->amount>0): ?>
                                                   <!-- <a href="" class="btn btn-sm btn-danger">Pending</a>-->

                                                   <?php if($Downline->has_invested == 1): ?>
                                                   <label class="btn btn-sm btn-success">Invested</label>

                                                   <?php else: ?>

                                                    <?php if($Downline->has_requested <=0 && $Downline->has_paid <=0 ): ?>
                                                    <a href="" class="btn btn-sm btn-primary">Matured</a>
                                                    <?php endif; ?>

                                                    <?php if($Downline->has_requested == 1): ?>
                                                    <a href="" class="btn btn-sm btn-info">Requested</a>
                                                    <?php endif; ?>

                                                    <?php if($Downline->has_paid ==1): ?>
                                                    <a href="" class="btn btn-sm btn-success">Paid</a>
                                                    <?php endif; ?>

                                                    <?php endif; ?>

                                                    <?php endif; ?>
                                                </td>

                                                <td>
                                                    <?php if($Downline->amount>0): ?>
                                                   <?php if($Downline->request==0): ?>
                                                    <a href="<?php echo e(URL::to('/request/bonus/'.$Downline->id)); ?>" class="btn btn-sm btn-primary">Cash-out</a>
                                                    <?php endif; ?>

                                                    <?php if($Downline->request==0 && $Downline->has_invested ==0): ?>
                                                    <a href="<?php echo e(URL::to('/invest/bonus/'.$Downline->id)); ?>" class="btn btn-sm btn-success">Re-invest</a>
                                                    <?php endif; ?>
                                                    <?php endif; ?>
                                                </td>
                                                
                                                
                                            </tr>

                                            <?php $count++; ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                          
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                                   
                                </div>


                                <center>
                                    <?php echo e($Downlines->links()); ?>

                                </center>

                        
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
                <!-- .right-sidebar -->
              
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->



            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>