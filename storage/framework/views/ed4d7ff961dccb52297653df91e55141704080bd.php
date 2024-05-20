<h3>Hello world no fornecedor controller pela view</h3>

<?php if(isset($fornecedores)): ?>


<?php $__currentLoopData = $fornecedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $fornecedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     Fornecedor: <?php echo e($fornecedor['nome']); ?>

     <br>
     Status: <?php echo e($fornecedor['status']); ?>

     <br>
     numero: <?php echo e($fornecedor['telefone']); ?>

     <hr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php endif; ?><?php /**PATH C:\Users\Suporte\Documents\Coding\app_hiper_gestao\resources\views/app/fornecedor/index.blade.php ENDPATH**/ ?>