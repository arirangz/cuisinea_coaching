<div class="col-md-4 my-2">
    <div class="card">
        <?php
            if ($recipe['image'] == null) {
                $imagePath = _ASSETS_IMAGES_FOLDER_.'recipe_default.jpg';
            } else {
                $imagePath = _RECIPES_FOLDER_ . $recipe['image'];
            }
        ?>

        <img src="<?=$imagePath ; ?>" class="card-img-top" alt="<?= $recipe['title']; ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $recipe['title']; ?></h5>
            <p class="card-text"><?= $recipe['description']; ?></p>
            <a href="recette.php?id=<?=$key; ?>" class="btn btn-primary">Voir la recette</a>
        </div>
    </div>
</div>