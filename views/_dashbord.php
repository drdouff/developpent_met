





<section class="dd-banner d-flex justify-content-center align-items-center pt-5">
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <form method="post">
                    <h5>suprimer un produit</h5>
                    <label for="staticEmail2" class="visually-hidden">code_mets</label><br>
                    <input type="number" name="idproduit" class="form-control" id="staticEmail2"><br>
                    <button type="submit" name="suprimer" class="btn btn-primary">suprimer un nouveau met</button>
                </form><br>
                <div class="row  row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php foreach ($produits as $produit): ?>
                        <div class="col-lg-5 col-md-6">
                            <div class="card shadow-sm">
                                <h1 class="text-center py-5"><?= $produit->Nom_mets_cul ?></h1>
                                <img src="<?= substr($produit->image_met, 0,200)  ?>"</img>


                                <div class="card-body">
                                    <p class="card-text"><?= $produit->description ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">commander</button>
                                        </div>
                                        <small class="text-muted">region:<strong><?= $produit->regions?></strong></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <form method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">titre image</label>
                        <input type="name" name="image" class="form-control" id="exampleInputEmail1" required>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">nom du met</label>
                        <input type="texte"  name="nom" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">region du met</label>
                        <input type="texte" name="region" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Description</label>
                        <textarea class="form-control" name="desc" required></textarea>
                    </div>

                    <button type="submit" name="valider" class="btn btn-primary">ajouter un nouveau met</button>
                </form>
            </div>

        </div>
    </div>
</section>