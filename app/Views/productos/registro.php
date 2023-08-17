<?php echo $this->extend('index'); ?>
<?php echo $this->section('content'); ?>


<div class="container">
    <h1> Registro de Productos </h1>

    <form method="POST" action="<?php echo base_url()?>productos/registrar">
        <div class="mb-3">
            <label for="nombre_pro" class="form-label">Nombre Producto</label>
            <input type="text" class="form-control" id="nombre_pro" name="nombre_pro" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="pre" class="form-label">Precio</label>
            <input type="text" class="form-control" id="pre"  name="pre">
        </div>
        <div class="mb-3">
            <label for="cant" class="form-label">Cantidad</label>
            <input type="text" class="form-control" id="cant"  name="cant">
        </div>
        <div class="mb-3">
            <label for="cate" class="form-label">Categoria</label>
            <input type="text" class="form-control" id="cate"  name="cate">
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>

<?php echo $this->endSection(); ?>
