<?php if(count($errors) > 0): ?>
    <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalAdvertencias">
  Launch demo modal
</button>-->

    <div id="ModalAdvertencias" class="modal fade show" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Advertencia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">            
                    <div class="alert alert-danger">
                        <p class="helvetica font-weight-normal">Corrija los siguientes errores:</p>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Msn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($Msn); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a id="Modal" data-target="#ModalAdvertencias" data-toggle="modal">Clic Modal</a>
    <script type="text/javascript" charset="utf8">
        document.getElementById("Modal").click();
        console.log('Clic Modal');
        /*$('#ModalAdvertencias').modal(
            {
                show: true,
                focus: true,
                keyboard: true,
                hide: true
            }
        );*/
    </script>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\ProyectoPVIT\resources\views/Vista parcial/MsnAdvertencia.blade.php ENDPATH**/ ?>