
          <!-- Begin Page Content -->
          <div class="container-fluid">

            

              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                  <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Nouveau Plat</h6>
                  </div>
                  <div class="card-body">
                    <div class="row" >
                    <div class="col-md-12"style="padding:2rem 15rem">
                    <form action="<?php echo site_url('Plat_controller/ajouter_plat') ?>" method="get">
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" placeholder="Nom du plat" name="nom">
                        </div>
                        <div class="form-group">
                            <label for="categ">Catégories</label>
                            <select class="form-control" name="categ">
                                <?php for($i=0;$i<count($categories);$i++) { ?>
                                    <option value="<?php echo $categories[$i]['idCategorie'] ?>"><?php echo $categories[$i]['nomCategorie'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="type">Types</label>
                            <select class="form-control" name="type">
                                <?php for($i=0;$i<count($types);$i++) { ?>
                                    <option value="<?php echo $types[$i]['idType'] ?>"><?php echo $types[$i]['nomType'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="objectif">Objéctif</label>
                            <select class="form-control" name="objectif">
                                <option value="plus">Augmentation de Poid</option>
                                <option value="moins">Perte de Poid</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" id="exampleInputFile" name="photo">
                        </div>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                    </div>
                   
                    </div>
                      
          
                  </div>
                    
              </div>

          </div>
          <!-- /.container-fluid -->

    