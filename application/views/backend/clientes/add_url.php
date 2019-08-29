<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    <h3><?php echo "Adicionar URL"; ?></h3>
                </div>
            </div>

            <div class="panel-body">

                <form role="form" class="form-horizontal form-groups-bordered" action="<?php echo base_url(); ?>index.php?cliente/profile/create" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="cliente_id" value="<?php echo $this->session->userdata('login_user_id'); ?>">
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('URL'); ?></label>

                        <div class="col-sm-5">
                            <input type="text" name="url" class="form-control" id="field-1" >
                        </div>
                    </div>

                    

                    <div class="col-sm-3 control-label col-sm-offset-2">
                        <input type="submit" class="btn btn-success" value="Salvar">
                    </div>
                </form>

            </div>

        </div>

    </div>
</div>