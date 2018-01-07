<?php $__env->startSection('admin_dashboard_content'); ?>

  <!-- Row -->
                <div class="row">

                    <div class="col-md-2 col-lg-2 hidden-sm hidden-xs"></div>
                    <div class="col-lg-8">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Profit Log</h4>
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

                                           <?php if(isset($Capital->receivingwallet->address)): ?>
                                                    Investor's Address: 
                                                    <label class="label label-info label-sm">

                                                         <?php echo e($Capital->receivingwallet->address); ?>

                                                        
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

                                    <p>

                                       <a href="<?php echo e(URL::to('/admin/profit/view/'.$Capital->id)); ?>" class="btn btn-sm btn-primary">View</a>

                                   </p>
                                
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