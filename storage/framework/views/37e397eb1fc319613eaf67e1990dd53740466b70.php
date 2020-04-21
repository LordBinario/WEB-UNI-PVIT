<?php 
    $Band = false;
?>


<?php if(count($errors->all()) > 0): ?>
    <?php 
        $Band = true;
    ?>
<?php endif; ?>


<?php if($Band == true || session('Band') == true): ?>    
    <?php $__env->startSection('Scripts'); ?>
        ##parent-placeholder-381e3298b2b8f6caeb2208b57d805ada38402f0b##
        <script type="text/javascript" charset="utf-8">
            $('#ModalMensaje').modal(
                {
                    show: true,
                    focus: true,
                    keyboard: true,
                    hide: true
                }
            );
        </script>
    <?php $__env->stopSection(); ?>
<?php endif; ?>

    <div id="ModalMensaje" class="modal fade show" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <?php if($Band == true): ?>
                        <h4 class="modal-title text-warning">Advertencia</h4>
                    <?php else: ?>
                        <h4 class="modal-title text-blue">Información</h4>
                    <?php endif; ?>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">            
                    <div class="container-fluid">
                        <?php if($Band == true): ?>
                            <h5 class="helvetica font-weight-normal">Corrija los siguientes errores:</h5>
                            <ul class="list-group list-group-flush">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="helvetica font-weight-normal list-group-item"><?php echo e($Error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
                            </ul>
                        <?php else: ?>
                            <h4 class="helvetica font-weight-normal">Su mensaje ha sido enviado satisfactoriamente.</h4>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div><?php /**PATH C:\xampp\htdocs\ProyectoPVIT\ProyectoPVIT\resources\views/Vista parcial/MsnAdvertencia.blade.php ENDPATH**/ ?>