<?php
function testAuthorExist($PDO, $authorData)
{
    $query = "select * from authors where authors.pseudo = ". $authorData['pseudo'];
        $request = $PDO->query($query);
        $authorHasPseudo = $request->fetchall(PDO::FETCH_ASSOC);
        if (count($authorHasPseudo)==0) {
            blogAuthorCreate($PDO, $authorData);
        } else {echo 'existe déjà';};
}
function blogAuthorCreate($PDO , $authorData)
{
    $authorData[0]=
    try {
        $query ="insert into authors (name, first_name, pseudo) values (?, ?, ?)";
        echo $query; echo '</br>';
        //$request = $PDO->prepare($query);
        //$request->execute(array( $name , $first_name , $pseudo ));
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
        $query ="insert into Posts (titre, body, date1, date0, classification, authors_id) values (?, ? , ? +30, ?, ?, ?)";
        echo $query; echo '</br>';
        //$request = $PDO->prepare($query);
        //$request->execute(array( $formulaire['title'] , $formulaire['body'] , $formulaire['title'] , $6 , $7 , $authorId ));
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};
function getPostId($PDO, $titre)
{
    try {
        $query = "select id from Posts where Posts.title = $titre ";
        $request = $PDO->query($query);
        $PostId = $request->fetchall(PDO::FETCH_ASSOC);
        return $PostId;
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};
function blogCategorieChoice ($PDO, $lastPostId, $nbCategorie)
{
    try {
        $query ="insert into Post_Categories (Post_id, Categories_id) values (?, ?)";
        $request = $PDO->prepare($query);
        $request->execute(array( $lastPostId , $nbCategorie ));
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};