<div class="modal fade" id="modal_add_client">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ajouter un client</h5>
      </div>
      <div class="modal-body">
        <form id="form_add_client">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <label for="id_cli">ID client : </label>
                        <input type="number" class="form form-control" id="id_cli" name="id_cli">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="nom_cli">Nom : </label>
                        <input type="text" class="form form-control" id="nom_cli" name="nom_cli">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="id_cli">Prénom : </label>
                        <input type="text" class="form form-control" id="prenom_cli" name="prenom_cli">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="id_cli">Pays : </label>
                        <input type="text" class="form form-control" id="pays_cli" name="pays_cli">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="id_cli">Ville : </label>
                        <input type="text" class="form form-control" id="ville_cli" name="ville_cli">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="id_cli">Adresse : </label>
                        <input type="text" class="form form-control" id="adresse_cli" name="adresse_cli">
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
          <button class="btn btn-success" id="btn_save_client">Enregistrer</button>
      </div>
    </div>
  </div>
</div>