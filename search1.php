<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Recherche par domaine/statut</title>
    </head>
    <body>
        <header>
            <?php include("part/header.php"); ?>
        </header>
        <nav>
            <?php include("part/nav.php"); ?>
        </nav>
        <section class="preamble">
            <?php
                // ----------------------_ Connection à la base de données _----------------------_#
                $bdd=mysqli_connect ('127.0.0.1', 'root', '','informaticiens');
                echo mysqli_connect_error();
                    //$reqA=mysqli_query($bdd,"SELECT ID, nom, prenom, competence FROM info WHERE domaine LIKE '".$area."';");
                ## ==> Si le domaine a été défini __
                if(!empty($_POST['area'])){
                    $area=mysqli_real_escape_string($bdd,strip_tags($_POST['area']));
                    $reqA=mysqli_query($bdd,"SELECT ID, nom, prenom, competence FROM info WHERE domaine LIKE '%".$area."%';");
                    $nbResA=mysqli_num_rows($reqA);
                    if($nbResA>=1){
                        echo "<h1>Liste d'informaticiens de la banche ".$area.":</h1><hr>";
                        while($data=mysqli_fetch_array($reqA)){
                            echo '<a href="details.php?id='.$data['ID'].'" title="'.$data['competence'].'">'.$data['nom'].' '.$data['prenom'].'</a><BR>';
                        }
                    }else{
                        echo 'Aucun résultat. :(';
                    }
                }
                ## ==> Si le statut a été défini __
                elseif(!empty($_POST['state'])){
                    $state=mysqli_real_escape_string($bdd,strip_tags($_POST['state']));
                    $reqS=mysqli_query($bdd,"SELECT ID, nom, prenom, competence FROM info WHERE statut LIKE '%".$state."%';");
                    $nbResS=mysqli_num_rows($reqS);
                    if($nbResS>=1){   // Si il y a plus d'un résultat
                        echo "<h1>Liste d'informaticiens étant ".$state.":</h1><hr>";
                        while($data=mysqli_fetch_array($reqS)){
                            echo '<a href="details.php?id='.$data['ID'].'" title="'.$data['competence'].'">'.$data['nom'].' '.$data['prenom'].'</a><BR>';
                        }
                    }else{  // Sinon on affiche le message:
                        echo 'Aucun résultat. :(';
                    }
                }else{   ## ==> Si aucun champs n'a été renseigné on retourne sur la page de recherche ;)
                    header('Location:search.php');
                }
                mysqli_close($bdd);
            ?>
            <br><hr>
        </section>
        <footer>
            <?php include("part/footer.php"); ?>
        </footer>
    </body>
</html>