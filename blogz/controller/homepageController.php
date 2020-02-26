<?php
require_once("model/ArticleManager.php");

// Liste des articles
function listArticles()
{
    $articleManager = new \Blogz\Model\ArticleManager();
    $articles = $articleManager->readAll();

    require('view/homepage/index.php');
}

function getArticleById($idArticle) 
{
    $articleManager = new \Blogz\Model\ArticleManager();
    $article = $articleManager->readArticle($idArticle);

    //ICI le controle et création des variables a envoyer à la vue
    if( $article->rowCount() == 1 ){
		// on va chercher le data
		$data = $article->fetch();
		 
		// on écrase nos variables à afficher dasn le form
		$nom 			= $data['article_nom'];
		$contributeur 	= $data['article_contributeur'];
		$texte 			= $data['article_texte'];
		$date 			= $data['article_date'];
		
		// on modifie le titre
		$titre = 'Modification';
	}    

    require('view/formpage/index.php');
}