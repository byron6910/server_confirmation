<?php if(session('message')): ?>
    <div class="alert alert-danger">
        <strong> <?php echo e(session('message')); ?> </strong>  
     </div>
<?php endif; ?>

