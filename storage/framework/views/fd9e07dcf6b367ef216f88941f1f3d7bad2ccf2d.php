<?php echo e($slot); ?>


<form action=<?php echo e(route('site.contato')); ?> method="post">
            <?php echo csrf_field(); ?>
                <input name="nome" value="<?php echo e(old('nome')); ?>" type="text" placeholder="Nome" class="<?php echo e($classe); ?>">
                <?php if($errors->has('nome')): ?>
                    <?php echo e($errors->first('nome')); ?>

                <?php endif; ?>
                <br>
                <input name="telefone" value="<?php echo e(old('telefone')); ?>" type="text" placeholder="Telefone" class="<?php echo e($classe); ?>">
                <?php echo e($errors->has('telefone') ? $errors->first('telefone') : ''); ?>

                <br>
                <input name="email" value="<?php echo e(old('email')); ?>" type="text" placeholder="E-mail" class="<?php echo e($classe); ?>">
                <?php echo e($errors->has('email') ? $errors->first('email') : ''); ?>

                <br>
                <select name="motivo_contatos_id" class="<?php echo e($classe); ?>">
                    <option value="">Qual o motivo do contato?</option>

                    <?php $__currentLoopData = $motivo_contatos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $motivo_contato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($motivo_contato->id); ?>" <?php echo e(old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : ''); ?>><?php echo e($motivo_contato->motivo_contato); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </select>
                <?php echo e($errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : ''); ?>

                <br>
                <textarea name="mensagem"  class="<?php echo e($classe); ?>"><?php echo e((old('mensagem') != '') ?  old('mensagem') : 'Preencha aqui seu texto'); ?></textarea>
                <?php echo e($errors->has('motivo_contatos_id') ? $errors->first('mensagem') : ''); ?>

                <br>
                <button type="submit" class="<?php echo e($classe); ?>">ENVIAR</button>
</form>

<?php if($errors->any()): ?>
<div style="position:absolute; top:0px; left:0px; width:100%; background:red">

      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $erro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      <?php echo e($erro); ?> <br>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    

</div>
<?php endif; ?><?php /**PATH C:\Users\Vinicius\Documents\GitHub\app_hiper_gestao\resources\views/site/layouts/_components/form_contato.blade.php ENDPATH**/ ?>