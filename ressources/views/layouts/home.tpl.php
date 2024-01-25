<?php
$metaTitle='homePage';
include('header.tpl.php');
?>

<?php if (empty($listPosts)): ?>
    <p>Aucun article disponible pour le moment.</p>
<?php else: ?>
<section>
    <?php foreach ($listPosts as $article): ?>
        <article>
                <h2><?= $article['title']; ?></h2>
                <p><?= $article['body']; ?></p>
                <p>Auteur : <?= $article['pseudo']; ?></p>
        </article>
    <?php endforeach; ?>
</section>
<?php endif; ?>



<?php
include('footer.tpl.php');
?>