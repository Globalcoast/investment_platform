<?php $__env->startSection('admin_dashboard_content'); ?>




<div>
	
	You are logged in
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>