<?php $__env->startSection('admin_dashboard_content'); ?>




<div class="row">

                    <div class="col-md-1 col-lg-1 hidden-sm hidden-xs"></div>
                    <div class="col-lg-10">


                        <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">All wallets</div>
                                    
                                        <div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Currency</th>
                                                <th>Address</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                            $count=($AddressList->currentPage() * $AddressList->perPage())-($AddressList->perPage() - 1);
                                            ?>

                                        	<?php $__currentLoopData = $AddressList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        	


                                            <tr>
                                                <td><?php echo e($count); ?></td>
                                                <td><?php echo e($Address->currency); ?></td>
                                                <td><?php echo e($Address->address); ?></td>

                                                <td>
                                                   
                                                   

                                                    <a href="<?php echo e(URL::to('/admin/delete_wallet/'.$Address->id)); ?>" class="btn btn-sm btn-danger">Delete</a>
                                                    
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
                                	<?php echo e($AddressList->links()); ?>

                                </center>

                            </div>
                        </div>
                                   
                                </div>



                        
                    </div>

                    <div class="col-md-1 col-lg-1 hidden-xs hidden-sm"></div>
                </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>