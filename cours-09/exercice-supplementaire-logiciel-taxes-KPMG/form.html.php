<h4>Formulaire d'entrée de factures</h4>

<form method="post">
    <div class="form-group">
        <label for="numero_facture">Numéro de facture</label>
        <input type="text" name="numero_facture" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="montant">Montant de la facture</label>
        <input type="text" name="montant" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="pourcentage_taxes">Pourcentage de taxes à appliquer</label>
        <input type="text" name="pourcentage_taxes" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="fournisseur">Nom du fournisseur</label>
        <input type="text" name="fournisseur" class="form-control"/>
    </div>

    <input type="submit" value="Soumettre la facture" class="btn btn-primary btn-block"/>
</form>