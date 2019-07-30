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
            <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35">Listado</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            
                        </div>
                        <div class="table-data__tool-right">
                            <a class="btn btn-link active" href="<?php echo base_url(); ?>categorias/agregar">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i>
                                        agregar
                                </button>
                            </a>
                        </div>
                    </div>
                    <?php if($this->session->flashdata("success")): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata("success"); ?>
                        </div>
                    <?php endif; ?>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2" id="myTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(!empty($categorias)): ?>
                                <?php foreach($categorias as $categoria): ?>
                                <tr class="tr-shadow">
                                    <td><?php echo $categoria->id_categoria; ?></td>
                                    <td><?php echo $categoria->nombre; ?></td>
                                    <td class="desc"><?php echo $categoria->descripcion; ?></td>
                                    <td>
                                        <div class="table-data-feature">
                                            <button type="button" class="item btn-view" data-toggle="modal" data-target="#mediumModal" value="<?php echo $categoria->id_categoria; ?>">
                                                <i class="zmdi zmdi-eye" data-toggle="tooltip" data-placement="top" title="Ver"></i>
                                            </button>
                                            <a href="<?php echo base_url(); ?>categorias/edit/<?php echo $categoria->id_categoria; ?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Editar">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button></a>
                                            <a href="<?php echo base_url(); ?>categorias/delete/<?php echo $categoria->id_categoria; ?>" class="item btn-remove" >
                                                <i class="zmdi zmdi-delete" data-toggle="tooltip" data-placement="top" title="Eliminar"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="spacer"></tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL INFO -->
<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Información de la categoría</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- MODAL INFO -->