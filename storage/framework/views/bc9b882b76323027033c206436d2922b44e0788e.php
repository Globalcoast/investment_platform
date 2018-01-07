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
                                                <th>Name</th>
                                                <th>Country</th>
                                                <th>Currency</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                            $count=($Downlines->currentPage() * $Downlines->perPage())-($Downlines->perPage() - 1);
                                            ?>

                                            <?php $__currentLoopData = $Downlines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Downline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <tr>
                                                <td><?php echo e($count); ?></td>
                                                <td><?php echo e($Downline->referee->name); ?></td>
                                                <td><span style="text-transform: capitalize;"><?php echo e($Downline->referee->country); ?></span></td>
                                                <td><?php echo e($Downline->referee->currency_type); ?></td>
                                                <td><?php echo e(date('d-m-Y h:i', strtotime($Downline->created_at))); ?></td>
                                                
                                                
                                                
                                                
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