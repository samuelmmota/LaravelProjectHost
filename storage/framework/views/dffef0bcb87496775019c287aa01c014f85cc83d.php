<html>
 
 <body>

<?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


   <?php echo $__env->yieldContent('title'); ?>

   <?php echo $__env->yieldContent('content'); ?>


<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



</body>



</html><?php /**PATH /home/vagrant/Code/public/resources/views/layouts/app.blade.php ENDPATH**/ ?>