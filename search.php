<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Recherche</title>
    </head>
    <body>
        <header>
            <?php include("part/header.php"); ?>
        </header>
        <nav>
            <?php include("part/nav.php"); ?>
        </nav>
        <section class="preamble">
            <h1>Recherche d'informaticiens.</h1>
            <hr><br>

            <!-- Recherche par domaine ou statut -->
            <div>
                <h2>Recherche par domaine ou statut:</h1>
                <form action="search1.php" method="POST">
                    <p><label for='area'>Domaine: <input type='text' name='area' maxlength='30' size='32' placeholder='ex: developpeur (30 caractères max)' /> <input type='submit' value='Rechercher' /></label></p>
                    <p><label>Statut: <input type='text' name='state' maxlength='30' size='31' placeholder='ex: ingenieur (30 caractères max)' /> <input type='submit' value='Rechercher' /></label></p>

                </form>
            </div>
            <!-- SEP -->
            <hr>
            <!-- SEP -->
            <!-- Recherche par langage et ancienneté -->
            <div>
                <h2>Recherche par langage et ancienneté:</h1>
                <form action="search2.php" method="POST">
                    <p><label>
                        Langage: <input type='text' name='lang' maxlength='100' size='35' placeholder='ex: Java, PHP, [...] (100 caractères max)'/> <select name='old'>
                            <option id='0'>&ltchoisir anciennete&gt</option>
                            <option id='1'>stagiaire</option>
                            <option id='2'>junior</option>
                            <option id='3'>senior</option>
                        </select> <input type='submit' value='Rechercher' /></label></p><br><hr>
                </form>

            </div>
        </section>
        <footer>
            <?php include("part/footer.php"); ?>
        </footer>
    </body>
</html>