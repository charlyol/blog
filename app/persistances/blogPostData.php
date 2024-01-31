<?php
function lastBlogPosts($PDO, $nbLastPosts)
{
    try {
        $query = "select title, body, Posts.id, Date0, authors.pseudo as pseudo from Posts inner join authors on authors.id = Posts.author_id order by date0 desc limit $nbLastPosts";
        $request = $PDO->query($query);
        $listPosts = $request->fetchall(PDO::FETCH_ASSOC);
        return $listPosts;
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};
function commentsByBlogPost($PDO, $id)
{
    try {
        $query = "select Comments.body as body, Comments.publication_date as datec, authors.pseudo as pseudo from Comments inner join authors on authors.id=Comments.author_id where Comments.Post_id=$id";
        $request = $PDO->query($query);
        $listCommentsPosts = $request->fetchall(PDO::FETCH_ASSOC);
        return $listCommentsPosts;
    } catch (PDOException $e) {
       die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};
function blogPostByld($PDO, $id)
{
    try {
        $query = "select title, body, authors.pseudo as pseudo from Posts inner join authors on authors.id = Posts.author_id where Posts.id = $id";
        $request = $PDO->query($query);
        $Postsid = $request->fetchall(PDO::FETCH_ASSOC);
        return $Postsid;
    } catch (PDOException $e) {
       die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};

function findAllCategories($PDO)
{
    try {
        $query = "select * from Categories";
        $request = $PDO->query($query);
        $allCategories = $request->fetchall(PDO::FETCH_ASSOC);
        return $allCategories;
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};

//---------------------------------------------------------


function testAuthorExist($PDO, $formulaire)
{
    $query = "select * from authors where authors.pseudo = '" . $formulaire['pseudo']."'";
    echo $query.'<br>';
    $request = $PDO->query($query);
    $authorHasPseudo = $request->fetchall(PDO::FETCH_ASSOC);
    if (count($authorHasPseudo) == 0) {
        blogAuthorCreate($PDO, $formulaire);
    } else {
        echo 'existe déjà';
    };
};

function blogAuthorCreate($PDO, $formulaire)
{
    try {
        $query = "insert into authors (name, first_name, pseudo) values (?, ?, ?)";
        echo $query;
        echo '</br>';
        $request = $PDO->prepare($query);
        $request->execute(array($formulaire['name'], $formulaire['first_name'], $formulaire['pseudo']));
    } catch (PDOException $e) {
       die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};
function authorIdByPseudo($PDO, $pseudo)
{
    try {
        $query = "select id from authors where authors.pseudo = '".$pseudo ."'";
        $request = $PDO->query($query);
        echo $query;
        echo '</br>';
        $lastAuthorId = $request->fetchall(PDO::FETCH_ASSOC);
        return $lastAuthorId;
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};
function blogPostCreate($PDO, $formulaire, $authorId)
{
    try {
        $query = "insert into Posts (title, body, date1, date0, classification, author_id)
        values (? , ? , ? , ? , ?, ?)";
        $request = $PDO->prepare($query);
        $request->execute(array(
            $formulaire['title'],
            $formulaire['body'],
            $formulaire['date_start'],
            $formulaire['date_start'],
            (int)$formulaire['nbCategorie'],
            $authorId[0]['id']));
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};
function getPostId($PDO, $titre)
{
    try {
        $query = "select id from Posts where Posts.title = '"$titre"'";
        $request = $PDO->query($query);
        $PostId = $request->fetchall(PDO::FETCH_ASSOC);
        return $PostId;
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};
function blogCategorieChoice($PDO, $lastPostId, $nbCategorie)
{
    try {
        $query = "insert into Post_Categories (Post_id, Categories_id) values (?, ?)";
        $request = $PDO->prepare($query);
        $request->execute(array($lastPostId, $nbCategorie));
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};














