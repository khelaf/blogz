<?php
require_once('controller/homepageController.php');

try {
    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'listPosts') {
            listArticles();
        }
        elseif ($_GET['page'] == 'article') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                getArticleById($_GET['id']);
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
    }
    else {
        listArticles();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}