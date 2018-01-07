<?php $__env->startSection('admin_dashboard_content'); ?>




<div class="row">

                    <div class="col-md-1 col-lg-1 hidden-sm hidden-xs"></div>
                    <div class="col-lg-10">


                        <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">All Registered Users</div>
                                    
                                        <div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Country</th>
                                                <th>Status</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                            $count=($Users->currentPage() * $Users->perPage())-($Users->perPage() - 1);
                                            ?>

                                        	<?php $__currentLoopData = $Users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $User): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        	


                                            <tr>
                                                <td><?php echo e($count); ?></td>
                                                <td><?php echo e($User->name); ?></td>
                                                <td><?php echo e($User->phone); ?></td>
                                                <td><?php echo e($User->country); ?></td>
                                                <td>

                                                	<?php if($User->status==0): ?>
                                                    <label href="" class="label label-xs label-danger">Blocked</label>
                                                    <?php endif; ?>
                                                    <?php if($User->status==1): ?>
                                                    <label class="label label-xs label-success">Active</label>
                                                    <?php endif; ?>
                                                </td>

                                                <td>
                                                   
                                                   <a href="<?php echo e(URL::to('/admin/user/view/'.$User->id)); ?>" class="btn btn-sm btn-primary">View</a>
                                                   <?php if($User->status==1): ?>
                                                    <a href="<?php echo e(URL::to('/admin/user/block/'.$User->id)); ?>" class="btn btn-sm btn-danger">Block</a>
                                                    <?php endif; ?>
                                                    
                                                    <?php if($User->status==0): ?>
                                                    <a href="<?php echo e(URL::to('/admin/user/unblock/'.$User->id)); ?>" class="btn btn-sm btn-success">Unblock</a>
                                                    <?php endif; ?>

                                                    <a href="<?php echo e(URL::to('/admin/user/delete/'.$User->id)); ?>" class="btn btn-sm btn-danger">Delete</a>
                                                    
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
                                	<?php echo e($Users->links()); ?>

                                </center>

                            </div>
                        </div>
                                   
                                </div>



                        
                    </div>

                    <div class="col-md-1 col-lg-1 hidden-xs hidden-sm"></div>
                </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>