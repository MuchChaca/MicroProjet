<html>
    <head>
        <meta charset="utf-8" />
        <title>Modifier un informaticien</title>
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
            <div>
                <?php
                    $bdd=mysqli_connect('127.0.0.1','root','','informaticiens');
                    echo mysqli_connect_error();
                    // stoque les données entrées dans des variables
                    $nom=mysqli_real_escape_string($bdd,strtolower(strip_tags($_POST['nom'])));
                    $prenom=mysqli_real_escape_string($bdd,strtolower(strip_tags($_POST['prenom'])));
                    $old=$_POST['old'];
                    $area=$_POST['dom'];
                    $skill=strip_tags($_POST['skill']);
                    $state=$_POST['state'];
                    $id=mysqli_real_escape_string($bdd,strip_tags($_GET['id']));

                    /*
                     * Traitement des données
                     */
                    // si tout les champs sont remplit alors:
                    if (!empty($nom) && !empty($prenom) && $old!="<choisir anciennete>" && $area!="<choisir domaine>" && !empty($skill) && $state!="<choisir statut>"){
                        $sqlAdd=mysqli_query($bdd,"UPDATE info SET nom='$nom',prenom='$prenom',anciennete='$old',domaine='$area',competence='$skill',statut='$state' WHERE ID='$id';");
                        $sqlInfo=mysqli_query($bdd,"SELECT * FROM info WHERE ID='$id';");
                        $dataInfo=mysqli_fetch_array($sqlInfo);
                        if($sqlAdd){
                            echo '<h2>Modification effectuée avec succès!</h2>';
                            echo '<div class="det">';
                                echo '<p>Nouvelles informations de  '.strtoupper($dataInfo['prenom']).' '.strtoupper($dataInfo['nom']).':</p><hr>';
                                echo '<b>ID: </b>'.$dataInfo['ID'].'<BR>';
                                echo '<b>Domaine: </b>'.$dataInfo['domaine'].'<BR>';
                                echo '<b>Ancienneté: </b>'.$dataInfo['anciennete'].'<BR>';
                                echo '<b>Statut: </b>'.$dataInfo['statut'].'<BR>';
                                echo '<b>Compétences: </b>'.$dataInfo['competence'].'<BR>';
                            echo '</div>';
                        }else{
                            //echo '<h2>'.mysqli_error($bdd).'</h2>';
                            echo '/!\\ :UNDETERMINED ERROR: /!\\';
                        }

                    }else{ //si il en manque (nottement pour les lites déroulantes)
                        echo '<BR><h1>ERROR: Un des champs n\'a pas été renseigné!</h1><BR>  <h2>';  // message erreur
                    }

                    mysqli_close($bdd);
                ?>
            </div>
            <br><hr>
            <a href='search.php'>Retour</a>
        </section>
        <footer>
            <?php include("part/footer.php"); ?>
        </footer>
    </body>
</html>