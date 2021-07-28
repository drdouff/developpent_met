





<section class="dd-banner d-flex justify-content-center align-items-center pt-5">
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <form method="post">
                    <h5>suprimer un Met</h5>
                    <label for="staticEmail2" class="visually-hidden">code_mets</label><br>
                    <input type="number" name="idproduit" class="form-control" id="staticEmail2"><br>
                    <button type="submit" name="suprimer" class="btn btn-primary">suprimer un met</button>
                </form><br>
                <?php foreach ($produits as $produit): ?>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= $produit->image_met  ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $produit->CODE_METS_CUL ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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