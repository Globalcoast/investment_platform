<?php $__env->startSection('dashboard_content'); ?>


<div class="container">
                  <!-- Row -->
                <div class="row">

                 
            





  <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="background-color: white;">
    <br>
    <div class="thumbnail">
    
      <div class="caption">
        <h3><?php echo e($News->title); ?></h3>
         <hr>
       <p>

          <?php echo html_entity_decode($News->message); ?>


            
               </p>
        <p>

           
                    <a href="<?php echo e(URL::to('/news')); ?>" class="btn btn-primary" role="button">Back</a>
                 

           

        </p>
      </div>
    </div>
  </div>










 


                    
                </div>
                <!-- Row -->

 </div>


 <br><br>
 






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