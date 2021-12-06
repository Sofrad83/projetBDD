<div class="modal fade" id="modal_add_vendeur">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ajouter un vendeur</h5>
      </div>
      <div class="modal-body">
        <form id="form_add_vendeur">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <label for="id_vend">ID vendeur : </label>
                        <input type="number" class="form form-control" id="id_vend" name="id_vend">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="nom_vend">Nom : </label>
                        <input type="text" class="form form-control" id="nom_vend" name="nom_vend">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="id_vend">Prénom : </label>
                        <input type="text" class="form form-control" id="prenom_vend" name="prenom_vend">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="id_vend">Pays : </label>
                        <input type="text" class="form form-control" id="pays_vend" name="pays_vend">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="id_vend">Ville : </label>
                        <input type="text" class="form form-control" id="ville_vend" name="ville_vend">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="id_vend">Adresse : </label>
                        <input type="text" class="form form-control" id="adresse_vend" name="adresse_vend">
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
          <button class="btn btn-success" id="btn_save_vendeur">Enregistrer</button>
      </div>
    </div>
  </div>
</div>