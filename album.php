<div class="album">
    <!-- cover album-->
    <div class="mb-3">
        <img src="<?= $songs['cover']?>" alt="<?= $songs['title']?>">
    </div>

    <!-- titolo canzone -->
    <h3 class="text-uppercase">
        <?= $songs['title']?>
    </h3>

    <!-- album -->
    <p class="lh-1 mb-1">
        <?= $songs['album']?>
    </p>

    <!-- autore -->
    <p class="lh-1 mb-1">
        <?= $songs['author']?>
    </p>

    <!-- anno -->
    <p class="lh-1 mb-1">
        <?= $songs['year']?>
    </p>

    <!-- genere -->
    <p class="lh-1 mb-1 text-uppercase">
        <?= $songs['genre']?>
    </p>
</div>