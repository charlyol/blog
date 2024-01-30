<?php
$metaTitle=("Article N°").$id;
include('header.tpl.php');
?>


<?php if (empty($Postsid)): ?>
    <p>Aucun article disponible pour le moment.</p>
<?php else: ?>
    <section>
        <?php foreach ($Postsid as $article): ?>
            <article>
                <h2>
                    <a><?= $article['title']; ?></a>
                </h2>
                <p><?= $article['body']; ?></p>
                <p>Auteur : <?= $article['pseudo']; ?></p>
            </article>
        <?php endforeach;?>
    </section>
<?php endif; ?>

<?php if (empty($listCommentsPosts)): ?>
    <p>Aucun commentaire pour cette article disponible pour le moment.</p>
<?php else: ?>
    <section>
        <?php foreach ($listCommentsPosts as $comment): ?>
            <article>
                <h2>
                    <a><?= $comment['body']; ?></a>
                </h2>
                <p><?= $comment['datec']; ?></p>
                <p>Auteur : <?= $comment['pseudo']; ?></p>
            </article>
        <?php endforeach;?>
    </section>
<?php endif; ?>


<?php
include('footer.tpl.php');
?>
