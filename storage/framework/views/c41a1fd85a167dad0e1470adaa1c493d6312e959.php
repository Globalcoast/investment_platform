<?php $__env->startSection('admin_dashboard_content'); ?>




<div class="row">

                    <div class="col-md-1 col-lg-1 hidden-sm hidden-xs"></div>
                    <div class="col-lg-10">


                        <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">Contact Messages</div>
                                    
                                        <div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Sender</th>
                                                <th>Sender's email</th>
                                                <th>Message</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                            $count=($Messages->currentPage() * $Messages->perPage())-($Messages->perPage() - 1);
                                            ?>

                                        	<?php $__currentLoopData = $Messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        	


                                            <tr>
                                                <td><?php echo e($count); ?></td>
                                                <td><?php echo e($Message->name); ?></td>
                                                <td><?php echo e($Message->email); ?></td>
                                                <td><?php echo e(substr($Message->message, 0, 50)); ?>

                   <?php if(strlen($Message->message)<=50): ?>
                   <?php echo e('.'); ?>

                   <?php else: ?>
                   <?php echo e('...'); ?>

                   <?php endif; ?></td>
                                               

                                                <td>
                                                   
                                                   <a href="<?php echo e(URL::to('/admin/inbox/view/'.$Message->id)); ?>" class="btn btn-sm btn-primary">View</a>
                                                   

                                                  
                                                    <a href="<?php echo e(URL::to('/admin/inbox/delete/'.$Message->id)); ?>" class="btn btn-sm btn-danger">Delete</a>
                                              
                                                    
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
                                	<?php echo e($Messages->links()); ?>

                                </center>

                            </div>
                        </div>
                                   
                                </div>



                        
                    </div>

                    <div class="col-md-1 col-lg-1 hidden-xs hidden-sm"></div>
                </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>