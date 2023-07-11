
          <!-- Begin Page Content -->
        <div class="container-fluid">

             <!-- DataTales Example -->
             <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <div class="row">
                          <div class="col-md-2">
                            <h6 class="m-0 font-weight-bold text-primary">
                            Listes Plats
                            </h6>
                          </div>
                          <div class="col-md-3">
                          <a href="<?php echo site_url('Plat_controller/init_ajout_plat') ?>" class="btn btn-success btn-user btn-block">
                            Nouveau Plat
                        </a>
                          </div>
                      </div>
                  </div>
                  <div class="card-body">
                    <?php for($i=0;$i<count($plats);$i++) { ?>
                     <div class="row">
                       <div class="col-md-4 nom"><?php echo $plats[$i]['nomPlat'] ?></div>
                       <div class="col-md-2"><a href="#" class="btn btn-primary btn-user btn-block">
                            Modifier
                        </a></div>
                       <div class="col-md-2"><a href="<?php echo site_url('Plat_controller/delete_plat/'.$plats[$i]['idPlat']) ?>" class="btn btn-danger btn-user btn-block">
                            Suprimer
                        </a></div>
                     </div>
                     <hr class="sidebar-divider">
                     <?php } ?>
                  </div>
              </div>

        </div>
          <!-- /.container-fluid -->

      