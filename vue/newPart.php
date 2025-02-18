<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle partie</title>
</head>

<body>
    <h1>Créez une nouvelle partie !</h1>
    <form action="" method="post">
        <fieldset>
            <legend>Formulaire de création d'une nouvelle partie.</legend>
            <div>
                <label for="gameName">Nom de la partie</label>
                <input type="text" id="gameName" name="gameName">
            </div>
            <div>
                <label for="numPlayers">Nombre de joueurs</label>
                <input type="number" min="1" max="5" step="1" id="numPlayers" name="numPlayers">
            </div>
            <div>
                <p>Difficulté du jeu</p>
                <div>
                    <input type="radio" id="easy" name="difficulty" value="easy">
                    <label for="easy">Facile</label>
                </div>
                <div>
                    <input type="radio" id="normal" name="difficulty" value="normal">
                    <label for="normal">Normale</label>
                </div>
                <div>
                    <input type="radio" id="hard" name="difficulty" value="hard">
                    <label for="hard">Difficile</label>
                </div>
                <div>
                    <input type="radio" id="expert" name="difficulty" value="expert">
                    <label for="expert">Expert</label>
                </div>
            </div>
            <div>
                <button id="random">Aléatoire</button>
            </div>
            <div>
                <button id="create">Créer la partie !</button>
            </div>
            <span>Info : toute partie créée expire au bout de 24 heures.</span>

        </fieldset>
    </form>
</body>

</html>
