<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Recherche par competence/anciennete</title>
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
                $bdd=mysqli_connect ('127.0.0.1', 'root', '','informaticiens');
                echo mysqli_connect_error();

                $lang=mysqli_real_escape_string($bdd,strip_tags($_POST['lang']));
                $old=$_POST['old'];

                /*
                $reqWhere=mysqli_query($bdd,"SELECT nom, prenom FROM info WHERE domaine LIKE '".$area."' ;");
                $nbResWhere=mysqli_num_rows($reqWhere);
                */

                if(!empty($lang) && $old!='<choisir anciennete>'){
                    echo "<h1>Résultats pour la recherche de: ".$lang." pour des informaticiens étant ".$old."</h1><hr>";
                    $req2=mysqli_query($bdd,"SELECT ID, nom, prenom, competence FROM info WHERE (competence LIKE '%".$lang."%') AND (anciennete = '".$old."') ;");
                    $nbRes2=mysqli_num_rows($req2);
                    if($nbRes2>=1){
                        while($data=mysqli_fetch_array($req2)){
                            echo '<a href="details.php?id='.$data['ID'].'" title="'.$data['competence'].'">'.$data['nom'].' '.$data['prenom'].'</a><BR>';
                        }
                    }else{
                        echo '<BR><h2>Aucun résultat! :-(</h2>';
                    }
                }elseif(!empty($lang) && $old=='<choisir anciennete>'){
                    echo "<h1>Résultats pour la recherche de: ".$lang."</h1><hr>";
                    $req11=mysqli_query($bdd,"SELECT ID, nom, prenom, competence FROM info WHERE competence LIKE '%".$lang."%' ;");
                    $nbRes11=mysqli_num_rows($req11);
                    if($nbRes11>=1){
                        while($data=mysqli_fetch_array($req11)){
                            echo '<a href="details.php?id='.$data['ID'].'" title="'.$data['competence'].'">'.$data['nom'].' '.$data['prenom'].'</a><BR>';
                        }
                    }else{
                        echo '<BR><h2>Aucun résultat! :-(</h2>';
                    }
                }else{
                    echo "<h1>Liste d'informaticiens étant ".$old.":</h1><hr>";
                    $req12=mysqli_query($bdd,"SELECT ID, nom, prenom, competence FROM info WHERE anciennete ='$old' ;");
                    $nbRes12=mysqli_num_rows($req12);
                    //if($nbRes12>=1){
                        while($data=mysqli_fetch_array($req12)){
                            echo '<a href="details.php?id='.$data['ID'].'" title="'.$data['competence'].'">'.$data['nom'].' '.$data['prenom'].'</a><BR>';
                        }
                    /*}else{
                        echo '<BR><h2>Aucun résultat! :(</h2>';
                    }*/
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