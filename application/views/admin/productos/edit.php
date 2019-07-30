<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Productos</h2>
                    </div>
                </div>
            </div>   
            <!-- EDIT FORM-->         
            <div class="row">
                <div class="col-md-6">
                    <h3 class="title-5 m-b-35">Edición</h3>
                    <div class="card">
                        <div class="card-header">
                            <strong>Editar</strong> Producto
                        </div>
                        <?php if($this->session->flashdata("error")): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $this->session->flashdata("error"); ?>
                        </div>
                        <?php endif; ?>
                        <form action="<?php echo base_url(); ?>productos/update" method="post" class="">
                            <div class="card-body card-block">
                                    <input type="hidden" name="idProducto" value="<?php echo $producto->id_prod; ?>">
                                    <div class="form-group">
                                        <label for="nombre" class=" form-control-label">Nombre</label>
                                        <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre.." class="form-control" value="<?php echo $producto->nombre; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="descripcion" class=" form-control-label">Descripción</label>
                                        <input type="text" id="descripcion" name="descripcion" placeholder="Ingrese la descripción.." class="form-control" value="<?php echo $producto->descripcion; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="select" class=" form-control-label">Categoria</label>
                                        <select name="id_categoria" id="select" class="form-control">
                                            <?php if(!empty($categorias)): ?>
                                                <?php foreach($categorias as $categoria): ?>
                                                    <?php if($categoria->id == $producto->f_id_categoria): ?>
                                                        <option value="<?php echo $categoria->id_categoria; ?>" selected><?php echo $categoria->nombre; ?></option>
                                                    <?php else: ?>
                                                        <option value="<?php echo $categoria->id_categoria; ?>"><?php echo $categoria->nombre; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary btn-sm">
                                </input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- EDIT FORM-->         
        </div>
    </div>
</div>