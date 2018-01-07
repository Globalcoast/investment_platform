<?php $__env->startSection('dashboard_content'); ?>

                  <!-- Row -->
                <div class="row">

                    <div class="col-md-2 col-lg-2 hidden-sm hidden-xs"></div>
                    <div class="col-lg-8">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Transactions Log</h4>
                            </div>
                            <div class="card-body">


                                <?php $__currentLoopData = $Transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                               <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info"><?php echo e(date('F d, Y h:i', strtotime($Transaction->created_at))); ?></div>
                                    <p class="ribbon-content">
                                        <?php echo e($Transaction->message); ?>

                                    </p>
                                    <!--<p>
                                    Payment mode : <a class="label label-sm label-success" style="color:white">BitPay</a>
                                </p>-->

                                    
                                </div>


                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                <center>
                                    <?php echo e($Transactions->links()); ?>

                                </center>


                                <!--
                                <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">12 | 11 | 2017</div>
                                    <p class="ribbon-content">
                                        You cashed out $400.00
                                    </p>

                                    
                                </div>

                                <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">12 | 11 | 2017</div>
                                    <p class="ribbon-content">
                                        You re-invested $2,500,000.00
                                    </p>

                                    
                                </div>

                            -->


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
             
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->


            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>