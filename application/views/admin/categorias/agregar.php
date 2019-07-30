<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Categorías</h2>
                    </div>
                </div>
            </div>
            <!-- FORM ADD -->            
            <div class="row">
                <div class="col-md-6">
                    <h3 class="title-5 m-b-35">Nuevo</h3>
                    <div class="card">
                        <div class="card-header">
                            <strong>Agregar</strong> Categoría
                        </div>
                        <?php if($this->session->flashdata("error")): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $this->session->flashdata("error"); ?>
                        </div>
                        <?php endif; ?>
                        <form action="<?php echo base_url(); ?>categorias/store" method="post" class="">
                            <div class="card-body card-block">
                                    <div class="form-group">
                                        <label for="nombre" class=" form-control-label">Nombre</label>
                                        <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre.." class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="descripcion" class=" form-control-label">Descripción</label>
                                        <input type="text" id="descripcion" name="descripcion" placeholder="Ingrese la descripción.." class="form-control">
                                    </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary btn-sm">
                                </input>
                                <input type="reset" class="btn btn-danger btn-sm">                            
                                </input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- FORM ADD -->
        </div>
    </div>
</div>