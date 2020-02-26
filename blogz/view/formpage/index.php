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

    <h1><?php echo $titre. " de l'article " .$nom; ?></h1>
	
	<a href="index.php?page=listPosts" ><-- Retour</a>

    <form class="form-article">
    <div class="form-group">
        <label for="titrearticle">Titre</label>
        <input type="text" class="form-control" id="titrearticle" aria-describedby="emailHelp" value="<?php echo $nom; ?>" required>
    </div>
    <div class="form-group">
        <label for="contentarticle">Contenu</label>
        <textarea class="form-control" id="contentarticle" rows="3"><?php echo $texte; ?></textarea>
    </div>    
    <div class="form-group">
        <label for="auteurarticle">Auteur</label>
        <input type="text" class="form-control" id="auteurarticle" value="<?php echo $contributeur; ?>">
    </div>
    <div class="form-group row">
        <label for="datearticle" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="datearticle" value="<?php echo $date; ?>">
        </div>
    </div>    
    <button class="btn btn-primary">Retour</button>
    <button type="submit" class="btn btn-success">Enregistrer</button>
    <button class="btn btn-danger">Supprimer</button>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>    