
          <div class="container-fluid">

            

              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <div class="row">
                          <div class="col-md-2">
                            <h6 class="m-0 font-weight-bold text-primary">
                            Listes Sport
                            </h6>
                          </div>
                          <div class="col-md-3">
                          <a href="<?php echo site_url('Sport_controller/init_ajout_sport') ?>" class="btn btn-success btn-user btn-block">
                            Nouveau Sport
                        </a>
                          </div>
                      </div>
                  </div>
                  <div class="card-body">
                    <?php for($i=0;$i<count($sports);$i++) { ?>
                     <div class="row">
                       <div class="col-md-2 nom"><?php echo $sports[$i]['nomSport'] ?></div>
                       <div class="col-md-2"><a href="#" class="btn btn-primary btn-user btn-block">
                            Modifier
                        </a></div>
                       <div class="col-md-2"><a href="#" class="btn btn-danger btn-user btn-block">
                            Suprimer
                        </a></div>
                     </div>
                     <hr class="sidebar-divider">
                    <?php } ?>
                     <div class="row">
                       <div class="col-md-2 nom">Pompe</div>
                       <div class="col-md-2"><a href="#" class="btn btn-success btn-user btn-block">
                            Modifier
                        </a></div>
                       <div class="col-md-2"><a href="#" class="btn btn-danger btn-user btn-block">
                            Supprimer
                        </a></div>
                     </div>
                  </div>
              </div>

          </div>
          <!-- /.container-fluid -->

     