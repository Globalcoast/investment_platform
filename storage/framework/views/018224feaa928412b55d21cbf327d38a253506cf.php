<?php $__env->startSection('admin_dashboard_content'); ?>




<div class="row">

                    <div class="col-md-1 col-lg-1 hidden-sm hidden-xs"></div>
                    <div class="col-lg-10">


                        <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">All Investments</div>
                                    
                                        <div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Investor</th>
                                                <th>Capital ($)</th>
                                                <th>Amount Received($)</th>

                                                <th>Currency | Receiving ADDS</th>
                                               
                                                <th>Status</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                            $count=($Capitals->currentPage() * $Capitals->perPage())-($Capitals->perPage() - 1);
                                            ?>

                                        	<?php $__currentLoopData = $Capitals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Capital): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        	


                                            <tr>
                                                <td><?php echo e($count); ?></td>
                                                <td><?php echo e($Capital->user->name); ?></td>
                                                <td><?php echo e(number_format($Capital->amount)); ?></td>
                                                <td><?php echo e(number_format($Capital->receiving->amount_received)); ?></td>
                                                <td>
                                                    <?php echo e($Capital->user->currency_type); ?>

                                                    <br>

                                                    <?php if(isset($Capital->receivingwallet->address)): ?>

                                                    <label class="label label-info label-sm">

                                                         <?php echo e($Capital->receivingwallet->address); ?>

                                                        
                                                    </label>
                                                   
                                                    <?php else: ?>
                                                    <label class="label label-info label-sm">
                                                    ---
                                                </label>

                                                    <?php endif; ?>
                                                </td>
                                             
                                                <td>

                                                	<?php if($Capital->has_reinvested==1): ?>
                                                    <label href="" class="label label-xs label-success">Reinvested</label>
                                                    <?php else: ?>

                                                    <?php if($Capital->has_ended==1): ?>
                                                    <label class="label label-xs label-success">Cmpleted</label>
                                                    <?php endif; ?>

                                                     <?php if($Capital->has_confirmed_payment==1): ?>
                                                    <label class="label label-xs label-success">Comfirmed</label>
                                                    <?php endif; ?>


                                                     <?php if($Capital->has_requested==1): ?>
                                                    <label class="label label-xs label-success">Requested</label>
                                                    <?php endif; ?>

                                                    <?php endif; ?>
                                                </td>

                                                <td>

                                                    <?php if($Capital->has_confirmed_payment==0): ?>
                                                    <a href="<?php echo e(URL::to('/admin/investment/confirm/'.$Capital->id)); ?>" class="btn btn-sm btn-primary">Confirm payment</a>
                                                    <?php else: ?>

                                                    <?php if($Capital->has_reinvested !=1): ?>
                                                   
                                                   <a href="<?php echo e(URL::to('/admin/profit/view/'.$Capital->id)); ?>" class="btn btn-sm btn-primary">View profits</a>

                                                   <?php endif; ?>
                                                   

                                                    <?php if(Auth::guard('admin')->user()->role==1): ?>
                                                    <a href="<?php echo e(URL::to('/admin/investment/delete/'.$Capital->id)); ?>" class="btn btn-sm btn-danger">Delete</a>
                                                    <?php endif; ?>

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
                                	<?php echo e($Capitals->links()); ?>

                                </center>

                            </div>
                        </div>
                                   
                                </div>



                        
                    </div>

                    <div class="col-md-1 col-lg-1 hidden-xs hidden-sm"></div>
                </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>