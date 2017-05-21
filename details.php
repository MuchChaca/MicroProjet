<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Details</title>
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
                $bdd=mysqli_connect('127.0.0.1','root','','informaticiens');
                echo mysqli_connect_error();
                
                $id=strip_tags($_GET['id']);
                
                
                
                if ($id>0){
                    //code si bon
                    $req=mysqli_query($bdd,"SELECT * FROM info WHERE ID='".$id."';");
                    $data=mysqli_fetch_array($req);
                    echo '<div class="det">';
                    echo '<p>Détails sur '.strtoupper($data['prenom']).' '.strtoupper($data['nom']).':</p><hr>';
                    echo '<b>ID: </b>'.$data['ID'].'<BR>';
                    echo '<b>Domaine: </b>'.$data['domaine'].'<BR>';
                    echo '<b>Ancienneté: </b>'.$data['anciennete'].'<BR>';
                    echo '<b>Statut: </b>'.$data['statut'].'<BR>';
                    echo '<b>Compétences: </b>'.$data['competence'].'<BR>';
                    
                    echo "<form action='choice.php?id=$id' method='POST'>";
                    echo "<p><label><input type='submit' value='Modifier' name='modif'/>  <input type='submit' value='Supprimer' name='del'/></label></p>";
                    echo "</form>";
                    echo '</div>';
                }else{
                    echo 'Détails non trouvés! :Ô';
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