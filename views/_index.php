<section class="banner d-flex justify-content-center align-items-center pt-5" xmlns="http://www.w3.org/1999/html">
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <h1 class=" text-capitalize py-3 redressed banner-desc">
                    Les plats Camerounais les plus populaires
                </h1>
                <p class="text-light">
                    Le Cameroun, Afrique en miniature et en raison de sa diversité ethnique et culturelle,
                    présente une cuisine variée.
                    Ses recettes riches en couleurs sont faites à la base d’épices et de condiments
                    qui lui valent un goût extraordinaire.
                </p>
            </div>
        </div>
    </div>
</section>


<div class="album py-5 bg-light">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


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
</div>
