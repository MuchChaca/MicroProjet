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
            <div>
                <?php
                    $bdd=mysqli_connect('127.0.0.1','root','','informaticiens');
                    echo mysqli_connect_error();
                    // stoque les données entrées dans des variables
                    $nom=mysqli_real_escape_string($bdd,strtolower(strip_tags($_POST['nom'])));
                    $prenom=mysqli_real_escape_string($bdd,strtolower(strip_tags($_POST['prenom'])));
                    $old=$_POST['old'];
                    $area=$_POST['dom'];
                    $skill=mysqli_real_escape_string($bdd,strip_tags($_POST['skill']));
                    $state=$_POST['state'];
                    
                    /*
                     * Traitement des données
                     */
                    // si tout les champs sont remplit alors:
                    if (!empty($nom) && !empty($prenom) && $old!="<choisir anciennete>" && $area!="<choisir domaine>" && !empty($skill) && $state!="<choisir statut>"){
                        echo '<h1>Un nouvel informaticien:</h1>';
                        //echo "<!-- <p class='tip'><i>(accents non-prit en charge)</i></p> -->";
                        echo '<hr><br>';
                        //$sqlAdd=;
                        $sqlAdd=mysqli_query($bdd,"INSERT INTO info (nom,prenom,anciennete,domaine,competence,statut) VALUES ('$nom','$prenom','$old','$area','$skill','$state');");
                        
                        if($sqlAdd){
                            $id=mysqli_insert_id($bdd);
                            $reqD=mysqli_query($bdd,"SELECT * FROM info WHERE ID='".$id."';");
                            $data=mysqli_fetch_array($reqD);
                            echo '<div class="det">';
                            echo '<h2>Ajouter '.$data['prenom'].' '.$data['nom'].'?</h2><BR>';
                            echo '<b>ID: </b>'.$data['ID'].'<BR>';
                            echo '<b>Domaine: </b>'.$data['domaine'].'<BR>';
                            echo '<b>Ancienneté: </b>'.$data['anciennete'].'<BR>';
                            echo '<b>Statut: </b>'.$data['statut'].'<BR>';
                            echo '<b>Compétences: </b>'.$data['competence'].'<BR>';
                            echo '</div>';
                            
                            echo "<form action='choice.php?id=$id' method='POST'>";
                            echo "<p><label><input type='submit' value='Valider' name='ok'/>  <input type='submit' value='Annuler' name='nope'/></label></p>";
                            echo "</form>";
                            
                        }else{
                            echo '<h1>UNKNOWN ERROR</h1><BR>   <h2>'.mysqli_error($bdd);
                        }
                        
                    }else{ //si il en manque (nottement pour les lites déroulantes)
                        echo '<h3>Un des champs n\'est pas renseigné!</h3>';
                    }
                    mysqli_close($bdd);
                ?>
            </div>
            <br><hr>
        </section>
        <footer>
            <?php include("part/footer.php"); ?>
        </footer>
    </body>
</html>