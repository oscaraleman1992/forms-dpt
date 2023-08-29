

<?php $__env->startSection('content'); ?>
<div class="container">
    <form action="<?php echo e(route('upload.imagenes')); ?>" class="dropzone" id="my-dropzone">
        <?php echo csrf_field(); ?>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.js"></script>
<script>
    Dropzone.options.myDropzone = {
        paramName: "images", // Nombre del campo en el formulario
        maxFilesize: 2, // Tamaño máximo de archivo en MB
        addRemoveLinks: true,
        dictDefaultMessage: "Arrastra las imágenes aquí o haz clic para subirlas",
        success: function(file, response) {
            console.log(response.message);
        }
    };
</script>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\Users\Usuario\Desktop\dpt\adminlte-generator\resources\views/formularios/imagen.blade.php ENDPATH**/ ?>