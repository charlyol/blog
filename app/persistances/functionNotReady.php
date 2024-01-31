<?php
function testAuthorExist($PDO, $formulaire)
{
    $query = "select * from authors where authors.pseudo = ". $fomulaire['pseudo'];
        $request = $PDO->query($query);
        $authorHasPseudo = $request->fetchall(PDO::FETCH_ASSOC);
        if (count($authorHasPseudo)==0) {
            blogAuthorCreate($PDO, $formulaire);
        } else {echo 'existe déjà';};
}
function blogAuthorCreate($PDO , $formulaire )
{
    $authorData[0]=
    try {
        $query ="insert into authors (name, first_name, pseudo) values (?, ?, ?)";
        echo $query; echo '</br>';
        $request = $PDO->prepare($query);
        $request->execute(array( $formulaire['name'] , $formulaire['first_name'] , $formulaire['pseudo'] ));
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};
function authorIdByPseudo($PDO, $pseudo)
{
    try {
        $query = "select id from authors where authors.pseudo = $pseudo ";
        $request = $PDO->query($query);
        $lastAuthorId = $request->fetchall(PDO::FETCH_ASSOC);
        return $lastAuthorId;
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};
function blogPostCreate($PDO , $formulaire , $authorId)
{
    try {
        $query ="insert into Posts (titre, body, date1, date0, classification, authors_id) values (?, ? , ? , DATE_ADD("$formulaire['date_start']", INTERVAL 30 DAY) , ?, ?)";
        echo $query; echo '</br>';
        $request = $PDO->prepare($query);
        $request->execute(array( $formulaire['title'] , $formulaire['body'] , $formulaire['date_start'] , , $formulaire['nbCategorie'] , $authorId ));
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};
function getPostId($PDO, $titre)
{
    try {
        $query = "select id from Posts where Posts.title = $titre";
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
        $query ="insert into Post_Categories (Post_id, Categories_id) values (?, ?)";
        $request = $PDO->prepare($query);
        $request->execute(array( $lastPostId , $nbCategorie ));
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};