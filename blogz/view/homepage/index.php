<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Mes articles de blog!</title>
  </head>
  
  <body>
  
    <h1>Bienvenue dans mon blog!</h1>
	
	<a href="#" >Créer un article</a>
    <table class="table table-bordered">
			<tr>
				<th>Titre</th>
				<th>Contributeur</th>
				<th>Date</th>
				<th>Article</th>
			</tr>
        <?php
            $html = "";
            // Boucle qui parcours l'objet $articles
            while( $data = $articles->fetch() ){
                $html .= '
                <tr>
                    <td><a href="index.php?page=article&id='.$data['article_id'].'">'.$data['article_nom'].'</a></td>
                    <td>'.$data['article_contributeur'].'</td>
                    <td>'.$data['article_date'].'</td>
                    <td>'.substr($data['article_texte'],0,50).'...</td>
                </tr>';
            }
            echo $html;   
        ?>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
