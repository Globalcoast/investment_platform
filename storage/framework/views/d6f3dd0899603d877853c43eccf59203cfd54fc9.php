<?php $__env->startSection('dashboard_content'); ?>

                  <!-- Row -->
                <div class="row">

                    <div class="col-md-2 col-lg-2 hidden-sm hidden-xs"></div>
                    <div class="col-lg-8">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Capital & Profit Log</h4>
                            </div>
                            <div class="card-body">


                                <?php $__currentLoopData = $Capitals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Capital): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                               <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info"><?php echo e(date('F d, Y h:i', strtotime($Capital->created_at))); ?></div>
                                    <p class="ribbon-content">
                                        <b>Capital </b>:$ <?php echo e(number_format($Capital->amount)); ?>

                                    </p>

                                    <p class="ribbon-content">
                                        <b>Received by system </b>:$ <?php echo e(number_format($Capital->receiving->amount_received)); ?>

                                    </p>

                                    <p class="ribbon-content">
                                        <b>Accumulated Profit </b>:$ <?php echo e(number_format($Capital->profit->sum('amount'))); ?>

                                    </p>





                              <!--status and action section-->

                                    <p>

                                        <?php if($Capital->has_confirmed_payment == 0): ?>

                                        <span>
                                            <label class="label label-sm label-info">
                                                Awaiting full payment
                                            </label>
                                        </span>
                                        <br>
                                    <span>


                                      <label  class="label label-default" style="color: black;"><b>Make payment to:</b> <?php echo e($Capital->receiving->generated_address); ?></label>


                                    </span>

                                     
                                        

                                        <?php else: ?>

                                        <?php
                                            if($Capital->has_reinvested==1){$label="View profit log";}else{
                                                $label="Cashout profits";
                                            }
                                        ?>
                                        
                                        <span><a href="<?php echo e(URL::to('/request/profit/'.$Capital->id)); ?>" class="btn btn-sm btn-primary"><?php echo e($label); ?></a></span> &nbsp;
                                        

                                        <?php if($Capital->has_requested==0): ?>
                                        <span><a href="<?php echo e(URL::to('/request/capital/'.$Capital->id)); ?>" class="btn btn-sm btn-primary" disabled="disabled">Cashout capital</a></span>
                                        <?php endif; ?>

                                        <?php if($Capital->has_reinvested==0): ?>

                                        <span><a  style="color:white;" class="btn btn-sm btn-success" href="<?php echo e(URL::to('/reinvest/'.$Capital->id)); ?>">Re-invest</a></span>

                                        <?php endif; ?>


                                        <?php endif; ?>


                                    </p>



                        <!--status and action section-->



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