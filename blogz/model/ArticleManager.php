<?php

namespace Blogz\Model;

require_once("Manager.php");

class ArticleManager extends Manager {

    // Creation d'un Article
    public function createArticle(){
        
    }

    // récupération d'un Article
    public function readArticle($idArticle) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM articles WHERE article_id=?');
        $req->execute(array($idArticle)); 
        return $req;
    }
    
    // récupération tous les Articles
    public function readAll() {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM articles ORDER BY article_date');
        return $req;
    }     

    // Update d'un Article
    public function updateArticle($idArticle) {

    }

    // Suppression d'un Article
    public function deleteArticle($idArticle) {

    }

}