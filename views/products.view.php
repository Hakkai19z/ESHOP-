<?php

include '../partials/header.php';
include '../config/cURL.php'

    ?>

<div class="wrapper">
    <h1>Page de produits</h1>

    <ul>
        <div class="liste_p">
            <?php foreach ($products as $product): ?>
                <div class="coca">
                    <li>
                        <a href="product.view.php?product=<?= $product['id'] ?>"><img src="<?= $product['image'] ?>"
                                alt=""></a>
                        <h2>
                            <?= $product['title'] ?>
                        </h2>
                        <h3>
                            <?= substr($product['description'], 0, 100) ?> ...
                        </h3>
                        <h2>
                            <?= $product['price'] ?> €
                        </h2>
                        <button><a>Ajouter au panier</a></button>
                    </li>
                </div>
            <?php endforeach ?>
        </div>
    </ul>


</div>