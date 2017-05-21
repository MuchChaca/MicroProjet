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
                    $id=strip_tags($_GET['id']);
                    if(isset($_POST['ok'])){
                        echo '<h2>Ajout terminé avec succès!</h2>';
                    }elseif(isset($_POST['nope'])){
                        $sql=mysqli_query($bdd,"DELETE FROM `informaticiens`.`info` WHERE `info`.`ID` = $id");
                        echo '<h2>Entrée annulée.</h2>';
                    }elseif(isset($_POST['modif'])){
                        //echo '<h3>ERROR: Fonction nom implantée pour le moment.</h3>';
                        $sql=mysqli_query($bdd,"SELECT * FROM info WHERE ID=$id;");
                        $data=mysqli_fetch_array($sql);
                        echo '<h1>Modification d\'un informaticien</h1>';
                        //echo "<!-- <p class='tip'><i>(accents non-prit en charge)</i></p> -->";
                        echo '<hr><br>';
                        //$sqlAdd=;
                        echo '<div>';
                        echo'<h2>Anciennes informations:</h2><b>';
                        echo ' '.strtoupper($data['prenom']).' '.strtoupper($data['nom']).'</b><BR>';
                        echo '<b>ID: </b>'.$data['ID'].'<BR>';
                        echo '<b>Domaine: </b>'.$data['domaine'].'<BR>';
                        echo '<b>Ancienneté: </b>'.$data['anciennete'].'<BR>';
                        echo '<b>Statut: </b>'.$data['statut'].'<BR>';
                        echo '<b>Compétences: </b>'.$data['competence'].'<BR>';
                        echo '</div>';
                        echo '<hr>';
                        echo '<h2>Nouvelles informations: </h2>';
                        ?>
                            <div>
                                <form action="change.php?id=<?php echo $id; ?>" method='POST'>
                                    <p><label>Nom: <input type='text' name='nom' placeholder='30 caractères maximum' maxlength='30' value="<?php echo $data['nom']; ?>"required="champ obligatoire!"></label>
                                    <label>Prénom: <input type='text' name='prenom' placeholder='30 caractères maximum' maxlength='30' value="<?php echo $data['prenom']; ?>" required="champ obligatoire!"></label></p>
                                    <p><label> <select name='dom'>
                                            <option id='0'>&ltchoisir domaine&gt</option>
                                            <option id='1'<?php if($data['domaine']=='reseau'){ echo 'selected';} ?>>reseau</option>
                                            <option id='2'<?php if($data['domaine']=='developpeur'){ echo 'selected';} ?>>developpeur</option>
                                    </select> <select name='old'>
                                            <option id='0'>&ltchoisir anciennete&gt</option>
                                            <option id='1'<?php if($data['anciennete']=='stagiaire'){ echo 'selected';} ?>>stagiere</option>
                                            <option id='2'<?php if($data['anciennete']=='junior'){ echo 'selected';} ?>>junior</option>
                                            <option id='3'<?php if($data['anciennete']=='senior'){ echo 'selected';} ?>>senior</option>
                                    </select></label></p>
                                    <p><label>Compétences: <input type='text' name='skill' placeholder='ex: Java, PHP, administration reseau [...] (100 carac max)' maxlength='100' size='50' value="<?php echo $data['competence']; ?>" required="champ obligatoire!" /> <select name='state'>
                                            <option id='0'>&ltchoisir statut&gt</option>
                                            <option id='1'<?php if($data['statut']=='stagiaire'){ echo 'selected';} ?>>stagiere</option>
                                            <option id='2'<?php if($data['statut']=='technicien'){ echo 'selected';} ?>>technicien</option>
                                            <option id='2'<?php if($data['statut']=='ingenieur'){ echo 'selected';} ?>>ingenieur</option>
                                    </select></label></p>
                                <p><input type='submit' value='Modifer' /></p>
                                </form>
                            </div>
                        <?php
                    }elseif(isset($_POST['del'])){
                        $sql=mysqli_query($bdd,"DELETE FROM `informaticiens`.`info` WHERE `info`.`ID` = $id");
                        echo '<h3>INFO: Informaticien supprimé.</h3>';
                    }else{
                        echo '<h1><b>ERROR TYPE: WRONG WAY</b></h1>';
                    }
                    mysqli_close($bdd);
                ?>
            </div>
            <br><hr>
            <center><p><b><a href="new.php">Retour</a></b></p></center>
        </section>
        <footer>

            <?php include("part/footer.php"); ?>
        </footer>
    </body>
</html>