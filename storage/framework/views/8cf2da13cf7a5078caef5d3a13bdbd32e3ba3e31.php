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
                                            $count=($Testimonies->currentPage() * $Testimonies->perPage())-($Testimonies->perPage() - 1);
                                            ?>

                                            <?php $__currentLoopData = $Testimonies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Testimony): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <tr>
                                                <td><?php echo e($count); ?></td>
                                                <td><?php echo e(date('d-m-Y h:i', strtotime($Testimony->created_at))); ?></td>
                                                <td><?php echo e($Testimony->referee->name); ?></td>
                                                <td>

                                                    <?php if($Testimony->amount==0): ?>
                                                    <?php echo e('Pending'); ?>

                                                    <?php else: ?>
                                                    <?php echo e(number_format($Testimony->amount)); ?>

                                                    <?php endif; ?>

                                            </td>
                                                <td>
                                                    <?php if($Testimony->amount>0): ?>
                                                   <!-- <a href="" class="btn btn-sm btn-danger">Pending</a>-->

                                                   <?php if($Testimony->has_invested == 1): ?>
                                                   <label class="btn btn-sm btn-success">Invested</label>

                                                   <?php else: ?>

                                                    <?php if($Testimony->has_requested <=0 && $Testimony->has_paid <=0 ): ?>
                                                    <a href="" class="btn btn-sm btn-primary">Matured</a>
                                                    <?php endif; ?>

                                                    <?php if($Testimony->has_requested == 1): ?>
                                                    <a href="" class="btn btn-sm btn-info">Requested</a>
                                                    <?php endif; ?>

                                                    <?php if($Testimony->has_paid ==1): ?>
                                                    <a href="" class="btn btn-sm btn-success">Paid</a>
                                                    <?php endif; ?>

                                                    <?php endif; ?>

                                                    <?php endif; ?>
                                                </td>

                                                <td>
                                                    <?php if($Testimony->amount>0): ?>
                                                   <?php if($Testimony->request==0): ?>
                                                    <a href="<?php echo e(URL::to('/request/testimony/bonus/'.$Testimony->id)); ?>" class="btn btn-sm btn-primary">Cash-out</a>
                                                    <?php endif; ?>

                                                    <?php if($Testimony->request==0 && $Testimony->has_invested ==0): ?>
                                                    <a href="<?php echo e(URL::to('/invest/testimony/bonus/'.$Testimony->id)); ?>" class="btn btn-sm btn-success">Re-invest</a>
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
                                    <?php echo e($Testimonies->links()); ?>

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