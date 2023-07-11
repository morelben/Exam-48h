

          <!-- Begin Page Content -->
          <div class="container-fluid">

            

              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                  <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Ajouter Régime</h6>
                  </div>
                  <div class="card-body">
                    <div class="row" >
                    <div class="col-md-12"style="padding:2rem 15rem">
                    <form action="<?php echo site_url('Regime_controller/ajouter_regime') ?>" method="get">
                            <label>Durée</label>
                            <input class="form-control" type="text" name="duree" placeholder="duree du regime">
                            <label style="font-weight:bold">Objetif</label>
                            <select class="form-control" name="objectif">
                                <option value="plus">Augmentation de Poid</option>
                                <option value="moins">Perte de Poid</option>
                            </select>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Poid Minimum</label>
                                    <input class="form-control" name="min" type="text" placeholder="Poid minimum">
                                </div>
                                <div class="col-md-6">
                                    <label>Poid Maximum</label>
                                    <input class="form-control" name="max" type="text"  placeholder="Poid maximum">
                                </div>
                            </div>
                            <label>Prix</label>
                            <input class="form-control" name="prix" type="text"  placeholder="Prix du régime">
                            <label>Déscription</label>
                            <input class="form-control" name="desc" type="text" placeholder="Déscription du régime">
                            <button class="btn btn-primary" type="submit" style="margin-top: 7px;">Ajouter</button>
                      </form>
                    </div>
                   
                    </div>
                      
          
                  </div>
                    
              </div>

          </div>
          <!-- /.container-fluid -->

     