        </div>
   </div>

   <!-- Jquery JS-->
    <script src="<?php echo base_url();?>assets/template/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url();?>assets/template/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/template/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url();?>assets/template/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/template/vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url();?>assets/template/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url();?>assets/template/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/template/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/template/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/template/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url();?>assets/template/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url();?>assets/template/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/template/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url();?>assets/template/js/main.js"></script>
    <script src="<?php echo base_url();?>assets/template/js/datatables.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            var base_url = "<?php echo base_url(); ?>";
            $(".btn-remove").on("click", function(event){
                var ruta = $(this).attr("href");
                $.ajax({
                    url: ruta,
                    type: "POST",
                    success: function (resp){
                        window.location.href = base_url + resp;
                    }
                });
               
            });

            $(".btn-view").on("click", function(){
                var id = $(this).val();
                $.ajax({
                    url: base_url + "categorias/view/" + id,
                    type: "POST",
                    success: function(resp){
                        $("#mediumModal .modal-body").html(resp);
                    }
                });
            });

            $(".btn-remove-product").on("click", function(event){
                var ruta = $(this).attr("href");
                $.ajax({
                    url: ruta,
                    type: "POST",
                    success: function (resp){
                        window.location.href = base_url + resp;
                    }
                });
               
            });

            $(".btn-view-product").on("click", function(){
                var id = $(this).val();
                $.ajax({
                    url: base_url + "productos/view/" + id,
                    type: "POST",
                    success: function(resp){
                        $("#mediumModal .modal-body").html(resp);
                    }
                });
            });            
        });
    </script>
</body>

</html>
<!-- end document-->