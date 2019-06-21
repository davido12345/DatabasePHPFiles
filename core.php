
<?php	
require_once('config.php');
class getCore{
     public $link_allegro;
     public $link_facebook;


     function getLinks(){
           $databaseConnect = new DatabaseConnect();
           $pdo = $databaseConnect->__construct();
           $query= $pdo->query('SELECT id_Mower FROM a18ee5mow2.Mower;');
           $row = $query->fetch();
           $this->link_facebook = $row["id_Mower"];
			
           //$query= $pdo->query('SELECT id_Mower FROM a18ee5mow2.Mower;');
           //$row = $query->fetch();
           //$this->link_allegro = $row["id_Mower"];

           $query->closeCursor();
     }
 }


	?>