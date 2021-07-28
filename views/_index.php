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


<section class="available merriweather py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($produits as $produit): ?>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= $produit->image_met  ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $produit->Nom_mets_cul ?></h5>
                            <p class="card-text"><?= $produit->description ?></p>
                            <p class="card-text"><small class="text-muted">region:<strong><?= $produit->regions?></strong></small></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<div class="separetor wow fadeInUp" data-wow-duration="2s" style="background: #10f1e7!important;"></div>



