<?php $__env->startSection('dashboard_content'); ?>

<!-- Row -->
                <div class="row">

                    <div class="col-md-3 col-lg-3 hidden-sm hidden-xs"></div>
                    <div class="col-lg-6">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Create Testimony</h4>
                            </div>
                            <div class="card-body">
                               <form role="form" class="form-horizontal p-t-20" method="POST" action="<?php echo e(URL::to('/testimony/create')); ?>">


                                <?php echo e(csrf_field()); ?>



                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Video link (optional)</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                               
                                                <input  type="url" class="form-control<?php echo e($errors->has('video_link') ? ' has-error' : ''); ?>" id="exampleInputuname3" placeholder="Youtube link" name="video_link" value="<?php echo e(old('video_link')); ?>">
                                                

                                            </div>


                                                 <?php if($errors->has('video_link')): ?>
                                    <span class="help-block">
                                        <strong style="color: red;"><?php echo e($errors->first('video_link')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                        </div>
                                    </div>


                                  


                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Testimony</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                
                                                <textarea required class="form-control<?php echo e($errors->has('message') ? ' has-error' : ''); ?>" id="exampleInputuname3" placeholder="Testimonial message" name="message">

                                                    <?php echo e(old('message')); ?>

                                                    
                                                </textarea>

                                             
                                                 

                                            </div>


                                                   <?php if($errors->has('message')): ?>
                                    <span class="help-block">
                                        <strong style="color: red;"><?php echo e($errors->first('message')); ?></strong>
                                    </span>
                                <?php endif; ?>

                                        </div>
                                    </div>
                                   
                                   
                                    <div class="form-group row m-b-0">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                                        </div>
                                    </div>
                                </form>
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
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>