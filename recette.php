<?php
require_once 'lib/config.php';
require_once 'lib/recipe.php';

require_once 'templates/header.php';

?>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="uploads/recipes/<?=$recipes[$_GET['id']]['image'];  ?>" class="d-block mx-lg-auto img-fluid" alt="XXX" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3"><?=$recipes[$_GET['id']]['title'];  ?></h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
    </div>
</div>


<?php
require_once 'templates/footer.php';
?>