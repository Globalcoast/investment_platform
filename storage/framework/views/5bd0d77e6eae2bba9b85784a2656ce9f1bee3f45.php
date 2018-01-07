<?php $__env->startSection('admin_dashboard_content'); ?>





<div class="container">
                  <!-- Row -->
                <div class="row">

                 
            



<?php $__currentLoopData = $Testimonies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Testimony): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <div class="col-sm-12 col-md-4 col-lg-4 col-xs-12" style="background-color: ;">
   

    <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info"><?php echo e(date('F d, Y h:i', strtotime($Testimony->created_at))); ?></div>
                                    <div class="ribbon-content">
                                        <div class="thumbnail">



      <?php if($Testimony->video_link != null): ?>

<?php

     $rawLink=$Testimony->video_link;
     $explodedLink=explode('watch?v=', $rawLink);
     $implodedLink=implode('embed/', $explodedLink);
?>
   

          <iframe style="width:100%; height: 200px;" src="<?php echo e($implodedLink); ?>" frameborder="0" allowfullscreen></iframe>

           

       <!--<video controls poster="" width="350">
          <source src="<?php echo e($Testimony->video_link); ?>" type="video/mp4">
            Your browser does not support HTML5 video.
    </video>-->
        <?php else: ?>

        <img src="<?php echo e(asset('vid/placeholderImage.png')); ?>" style="width:100%;height: 200px">

        <?php endif; ?>
        

  


     <hr>
      <div class="caption">
        <h3><?php echo e($Testimony->user->name); ?></h3>
        <p>
            <?php echo e(substr($Testimony->message, 0, 250)); ?>

                   <?php if(strlen($Testimony->message)<=250): ?>
                   <?php echo e('.'); ?>

                   <?php else: ?>
                   <?php echo e('...'); ?>

                   <?php endif; ?>
               </p>
        <p>

          <label  class="label label-info label-xs" style="text-transform: capitalize;"><?php echo e($Testimony->user->country); ?></label>

            

           

        </p>

        <p>

          <?php if($Testimony->has_approved==1): ?>

           <label  class="label label-info label-xs" style="text-transform: capitalize;">Approved</label>
          <?php else: ?>



          <a class="btn btn-sm btn-primary" href="<?php echo e(URL::to('admin/testimony/approve/'.$Testimony->id)); ?>">Approve</a>
          <?php endif; ?>


        </p>
      </div>
    </div>
                                    </div>
                                    <!--<p>
                                    Payment mode : <a class="label label-sm label-success" style="color:white">BitPay</a>
                                </p>-->

                                    
                                </div>

    
  </div>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <center>
      <?php echo e($Testimonies->links()); ?>

  </center>






 


                    
                </div>
                <!-- Row -->

 </div>


 <br>







                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
             
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>