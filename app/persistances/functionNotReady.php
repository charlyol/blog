<?php
function blogAuthorCreate($PDO)
{
    try {
        $query ="insert into authors (name,first_name, pseudo) values (?, ?, ?)";
        echo $query; echo '</br>';
        //$request = $PDO->priper($query);
        //$request->execute(array( $1 , $2 , $3pseudo ));
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};
function lastAuthorId($PDO, $3pseudo)
{
    try {
        $query = "select id from authors where authors.pseudo = $3pseudo ";
        $request = $PDO->query($query);
        $lastAuthorId = $request->fetchall(PDO::FETCH_ASSOC);
        return $lastAuthorId;
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};
function blogPostCreate($PDO)
{
    try {
        $query ="insert into Posts (titre, body, date1, date2, authors_id) values (?, ?, ?, ?, ?)";
        echo $query; echo '</br>';
        //$request = $PDO->priper($query);
        //$request->execute(array( $1titre , $4 , $5 , $6 , $lastAuthorId ));
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};
function lastPostId($PDO, $1titre)
{
    try {
        $query = "select id from Posts where Posts.title = $1titre ";
        $request = $PDO->query($query);
        $lastPostId = $request->fetchall(PDO::FETCH_ASSOC);
        return $lastPostId;
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};
function blogCategorieChoice ($PDO, $lastPostId, $nbCategorie)
{
    try {
        $query ="insert into Post_Categories (Post_id, Categories_id) values (?, ?)";
        echo $query; echo '</br>';
        //$request = $PDO->priper($query);
        //$request->execute(array( $lastPostId , $nbCategorie ));
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};