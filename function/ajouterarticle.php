<?php
$bdd = new PDO ("mysql:host=127.0.0.1;dbname=test;charset=utf8","root","");
if(isset($_POST['article_titre'],$_POST['article_contenu'])){
    if (!empty($_POST['article_titre']) AND !empty($_POST['article_contenu'])){
        $article_titre=htmlspecialchars($_POST['article_titre']);
        $article_contenu=htmlspecialchars($_POST['article_contenu']);
        
        $ins=$bdd->prepare('INSERT INTO article (article_titre,article_contenu,date_time_publication) 
        VALUES(?, ?, NOW())');
        $ins->execute(array($article_titre,$article_contenu));
        
        $message='votre article a ete poste';

       
      } else{
            $message='veuillezz remplir tous les champs';
        }
    
}
?>
<?php
if (isset($message)){echo$message; }
?>