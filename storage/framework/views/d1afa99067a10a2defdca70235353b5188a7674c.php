<?php $__env->startSection('admin_dashboard_content'); ?>





  <!-- Row -->
  <div class="container">


                <div class="row">

                <legend>
                    Ratio
                </legend>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-info"><i class="ti-wallet"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-light">$ <?php echo e(number_format($TotalProfitPaid + $TotalCapitalPaid + $TotalBonusPaid)); ?></h3>
                                        <h5 class="text-muted m-b-0">Total Paid Out</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-warning"><i class="mdi mdi-cellphone-link"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-lgiht">$ <?php echo e(number_format($TotalConfirmedInvestment)); ?></h3>
                                        <h5 class="text-muted m-b-0">Total Paid In</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <!-- Column -->
                    <!-- Column -->
                    
                    <!-- Column -->
                </div>




            <div class="row">

                <legend>
                    Users Stats
                </legend>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-info"><i class="ti-wallet"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-light"><?php echo e(number_format($TotalUsers)); ?></h3>
                                        <h5 class="text-muted m-b-0">Total Users</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-warning"><i class="mdi mdi-cellphone-link"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-lgiht"><?php echo e(number_format($TotalBlockedUsers)); ?></h3>
                                        <h5 class="text-muted m-b-0">Total Blocked Users</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-lgiht"><?php echo e(number_format($TotalActiveUsers)); ?></h3>
                                        <h5 class="text-muted m-b-0">Total Active Users</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                   
                    <!-- Column -->
                </div>





                <div class="row">

                <legend>
                    Investment Stats
                </legend>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-info"><i class="ti-wallet"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-light">$ <?php echo e(number_format($TotalConfirmedInvestment)); ?></h3>
                                        <h5 class="text-muted m-b-0">Total Confirmed Investment</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-warning"><i class="mdi mdi-cellphone-link"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-lgiht">$ <?php echo e(number_format($TotalInvestment- $TotalConfirmedInvestment)); ?></h3>
                                        <h5 class="text-muted m-b-0">Total Unconfirmed Investment</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-lgiht">$ <?php echo e(number_format($TotalInvestment)); ?></h3>
                                        <h5 class="text-muted m-b-0">Total Investment</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    
                    <!-- Column -->
                </div>





                <div class="row">

                <legend>
                    Requests Stats
                </legend>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-info"><i class="ti-wallet"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-light">$ <?php echo e(number_format($TotalCapitalRequested)); ?></h3>
                                        <h5 class="text-muted m-b-0">Total Requested Capital</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-warning"><i class="mdi mdi-cellphone-link"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-lgiht">$ <?php echo e(number_format($TotalCapitalPaid)); ?></h3>
                                        <h5 class="text-muted m-b-0">Total Paid Capital</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-lgiht">$ <?php echo e(number_format($TotalProfitRequested)); ?></h3>
                                        <h5 class="text-muted m-b-0">Total Requested Profit</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-danger"><i class="mdi mdi-bullseye"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h5 class="m-b-0 font-lgiht">$ <?php echo e(number_format($TotalProfitPaid)); ?></h5>
                                        <h5 class="text-muted m-b-0">Total Paid Profit</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>







                <div class="row">

                <legend>
                    Bonus Stats
                </legend>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-info"><i class="ti-wallet"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-light">$ <?php echo e(number_format($TotalBonusRequested)); ?></h3>
                                        <h5 class="text-muted m-b-0">Total Requested Bonus</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-warning"><i class="mdi mdi-cellphone-link"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-lgiht">$ <?php echo e(number_format($TotalBonusPaid)); ?></h3>
                                        <h5 class="text-muted m-b-0">Total Paid Capital</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                   
                    <!-- Column -->
                    <!-- Column -->
                    
                    <!-- Column -->
                </div>




</div>















                

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>