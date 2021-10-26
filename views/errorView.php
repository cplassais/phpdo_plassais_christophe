<div class="container">
    <div class="card row text-center justify-content-center">
        <div class="card-header col-12">
            GESTION DES ERREURS
        </div>
        <div class="card-body">
            <h5 class="card-title">Erreur n° <?php echo($errorCode) ?></h5>
            <p class="card-text"><strong>Fichier : <?php echo($errorFile) ?></strong></p>
            <p class="card-text"><strong>Ligne n° <?php echo($errorLine) ?></strong></p>
            <p class="card-text"><strong><?php echo($errorMessage) ?></strong></p>

            <a type="button" class="btn btn-dark" href="/">Retour</a>
        </div>
    </div>
</div>
