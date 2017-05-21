<html>
    <head>
        <meta charset="utf-8" />
        <title>Un nouvel informaticien</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <header>
            <?php include("part/header.php"); ?>
        </header>
        <nav>
            <?php include("part/nav.php"); ?>
        </nav>
        <section class="preamble">
            <h1>Enregistrement d'un nouvel informaticien.</h1>
            <hr><br>
            
            <!-- Renseignement d'informations -->
            <div>
                <form action='new1.php' method='POST'>
                    <p><label>Nom: <input type='text' name='nom' placeholder='30 caractères maximum' maxlength='30' required></label> <label>Prénom:
                    <input type='text' name='prenom' placeholder='30 caractères maximum' maxlength='30' required></label></p>
                    <p><label> <select name='dom'>
                            <option id='0'>&ltchoisir domaine&gt</option>
                            <option id='1'>reseau</option>
                            <option id='2'>developpeur</option>
                    </select> <select name='old'>
                            <option id='0'>&ltchoisir anciennete&gt</option>
                            <option id='1'>stagiere</option>
                            <option id='2'>junior</option>
                            <option id='3'>senior</option>
                    </select></label></p>
                    <p><label>Compétences: <input type='text' name='skill' placeholder='ex: Java, PHP, administration reseau, [...] (100 caractères max)' maxlength='100' size='50' required /></label>
                    <label><select name='state'>
                            <option id='0'>&ltchoisir statut&gt</option>
                            <option id='1'>stagiere</option>
                            <option id='2'>technicien</option>
                            <option id='2'>ingenieur</option>
                    </select></label></p>
                <p><input type='submit' value='Créer' /></p>
                </form>
                <br><hr>
            </div>
        </section>
        <footer>
            <p class='tip1'><i>(tout les champs sont obligatoires)</i></p>
            <?php include("part/footer.php"); ?>
        </footer>
    </body>
</html>