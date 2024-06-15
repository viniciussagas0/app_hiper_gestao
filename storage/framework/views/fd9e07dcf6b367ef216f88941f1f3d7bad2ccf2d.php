<?php echo e($slot); ?>


<form action=<?php echo e(route('site.contato')); ?> method="post">
            <?php echo csrf_field(); ?>
                <input name="nome" value="<?php echo e(old('nome')); ?>" type="text" placeholder="Nome" class="<?php echo e($classe); ?>">
                <br>
                <input name="telefone" value="<?php echo e(old('telefone')); ?>" type="text" placeholder="Telefone" class="<?php echo e($classe); ?>">
                <br>
                <input name="email" value="<?php echo e(old('email')); ?>" type="text" placeholder="E-mail" class="<?php echo e($classe); ?>">
                <br>
                <select name="motivo_contato" class="<?php echo e($classe); ?>">
                    <option value="">Qual o motivo do contato?</option>

                    <?php $__currentLoopData = $motivo_contatos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $motivo_contato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key); ?>" <?php echo e(old('motivo_contato') == $key ? 'selected' : ''); ?>><?php echo e($motivo_contato); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </select>
                <br>
                <textarea name="mensagem"  class="<?php echo e($classe); ?>"><?php echo e((old('mensagem') != '') ?  old('mensagem') : 'Preencha aqui seu texto'); ?></textarea>
                <br>
                <button type="submit" class="<?php echo e($classe); ?>">ENVIAR</button>
</form>

<div style="position:absolute; top:0px; left:0px; width:100%; background:red">
    <pre>
    <?php echo e(print_r($errors)); ?>

    </pre>
</div><?php /**PATH C:\Users\Vinicius\Documents\GitHub\app_hiper_gestao\resources\views/site/layouts/_components/form_contato.blade.php ENDPATH**/ ?>