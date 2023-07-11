
          <!-- Begin Page Content -->
          <div class="container-fluid">

            

              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                  <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Nouveau Sport</h6>
                  </div>
                  <div class="card-body">
                    <div class="row" >
                    <div class="col-md-12"style="padding:2rem 15rem">
                    <form action="<?php echo site_url('Sport_controller/ajouter_sport') ?>" method="get">
                            <label>Nom</label>
                            <input class="form-control" name="nom" type="text" name="nom">
                            <div class="form-group">
                            <label for="resultat">Objectifs</label>
                            <select class="form-control" name="resultat">
                                <option value="plus">Augmentation de Poid</option>
                                <option value="moins">Duminution de Poid</option>
                            </select>
                            <button class="btn btn-primary" type="submit" style="margin-top: 7px;">Ajouter</button>
                      </form>
                    </div>
                   
                    </div>
                      
          
                  </div>
                    
              </div>

          </div>
          <!-- /.container-fluid -->

    