<?php $__env->startSection('dashboard_content'); ?>


<div class="container">
                  <!-- Row -->
                <div class="row">

                 
            



<?php $__currentLoopData = $NewsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $News): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <div class="col-sm-12 col-md-4 col-lg-4 col-xs-12" style="background-color: ;">
   

    <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info"><?php echo e(date('F d, Y h:i', strtotime($News->created_at))); ?></div>
                                    <div class="ribbon-content">
                                        <div class="thumbnail">
        

      <div class="caption">
        <h3><?php echo e($News->title); ?></h3>
        
        <p>

           
                    <a href="<?php echo e(URL::to('/news/view/'.$News->id)); ?>" class="btn btn-primary" role="button">View</a>
               

           

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
      <?php echo e($NewsList->links()); ?>

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
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>