<html>
<head>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="../bootstrap-3.7/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/templatemo_style.css" rel="stylesheet" media="screen">
    <link href="../css/template-default.css" rel="stylesheet" media="screen">
</head>

<body> 
    <div id="bg-image" class="bg-image"></div>
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <?php
                        include("conexao.php"); 

                        $nome = $_POST['nome'];
                        $apelido = $_POST['apelido'];
                        $email= $_POST['email'];
                        $senha = $_POST['senha'];

                        $sql = $db->query("SELECT * FROM usuarios WHERE email='$email' ");
                        if($db->affected_rows > 0){ 
                          ?>
                              <div class="alert alert-danger">
                                      <strong>Error!</strong> Email ja cadastrado.
                                      <a href="../criarConta.php"><button type="button" class="btn btn-danger">ok</button></a>
                              </div>
                          <?php 

                        }
                        else{
                          
                          if (!file_exists('../images/usuarios/'.$email)) {
                              mkdir('../images/usuarios/'.$email, 0777, true);
                          }

                          $sql ="INSERT INTO usuarios (nome, apelido, email, senha) 
                                values ('$nome', '$apelido', '$email', '$senha')";

                                $result = mysqli_query( $db, $sql);
                                 if(!$result)
                                {
                                  ?>
                                      <div class="alert alert-danger">
                                              <strong>Error!</strong> não foi possivel realizar seu cadastro.
                                              <a href="../criarConta.php"><button type="button" class="btn btn-danger">ok</button></a>
                                      </div>
                                  <?php         
                                }        
                                 else
                                    {
                                      createDocumento();  
                                      ?>                              
                                      <div class="alert alert-success">
                                                    <strong>Success!</strong> cadastro realizado com sucesso.
                                                        <a href="../login.php"><button type="button" class="btn btn-primary">ok</button>
                                               </div>
                                      <?php                                  
                                    }
                        }

                        function createDocumento(){
                            include("../conexaoMongo.php");
                            global $email; 

                            $document = array( 
                              "_id" =>$email, 
                              "escudo" => "arenam1lg4au.png",
                              "clube" => array("nome"=>"myClub", "color"=>"#FFFFFF"),
                              "background" => "myClub.png",
                              "jogos"=>array(
                                    "ultimoJogo" => array(
                                                "header" => array("background"=>"green", "color"=>"white", "text-aling"=>"center"), 
                                                "body" => array("background"=>"rgba(0, 0, 0, 0.7)", "color"=>"black", "man"=>"MAN", "placarMan"=>"", "vis"=>"VIS", "placarVis"=>"", "data"=>"")),
                                    "proximoJogo" => array(
                                                  "header" => array("background"=>"green", "color"=>"white", "text-aling"=>"center"), 
                                                  "body" => array("background"=>"black", "color"=>"white", "man"=>"MAN", "vis"=>"VIS", "data"=>""))
                              ),
                              "news"=>array("background"=>"rgba(0, 0, 0, 0.7)", "color"=>"#FFFFFF", "titleColor"=>"#FFFFFF",
                                    "news1" => array(
                                            "noticia"=>"Noticia", 
                                            "title"=>array("texto"=>"Titulo", "text-aling"=>"center")),
                                    "news2" => array(
                                            "noticia"=>"Noticia",
                                            "title"=>array("texto"=>"Titulo", "text-aling"=>"center")),
                                    "news3" => array(
                                            "noticia"=>"Noticia",
                                            "title"=>array("texto"=>"Titulo", "text-aling"=>"center"))
                              ),
                              "jogadores" => array("textColor"=>"#FFFFFF",
                                         "player1"=>array("imagem"=>"player.jpg", "nome"=>"player", "numero"=>"1", "posicao"=>"GOL"),
                                         "player2"=>array("imagem"=>"player.jpg", "nome"=>"Player", "numero"=>"2", "posicao"=>"ZAG"),
                                         "player3"=>array("imagem"=>"player.jpg", "nome"=>"Player", "numero"=>"3", "posicao"=>"ZAG"),
                                         "player4"=>array("imagem"=>"player.jpg", "nome"=>"Player", "numero"=>"4", "posicao"=>"MEI"), 
                                         "player5"=>array("imagem"=>"player.jpg", "nome"=>"Player", "numero"=>"5", "posicao"=>"MEI"),
                                         "player6"=>array("imagem"=>"player.jpg", "nome"=>"Player", "numero"=>"6", "posicao"=>"MEI"),
                                         "player7"=>array("imagem"=>"player.jpg", "nome"=>"Player", "numero"=>"7", "posicao"=>"LAT"), 
                                         "player8"=>array("imagem"=>"player.jpg", "nome"=>"Player", "numero"=>"8", "posicao"=>"LAt"),
                                         "player9"=>array("imagem"=>"player.jpg", "nome"=>"Player", "numero"=>"9", "posicao"=>"VOL"), 
                                         "player10"=>array("imagem"=>"player.jpg", "nome"=>"Player", "numero"=>"10", "posicao"=>"ATA"),
                                         "player11"=>array("imagem"=>"player.jpg", "nome"=>"Player", "numero"=>"11", "posicao"=>"ATA"),
                                         "player12"=>array("imagem"=>"player.jpg", "nome"=>"Player", "posicao"=>"TEC")
                              ),
                              "footer" => array("direitos"=>"M1l G4AU", "color"=>"#FFFFFF", 
                                      "contatos" => array("facebook"=>"", "twitter"=>"#","instagram"=>"", "linkedin"=>"", "rss"=>"")
                              ), 
                            );

                            $collection->insert($document);
                        }
                                                       
                        mysqli_close($db);
                    ?> 
                                             
                </div><!-- /.col-md-12-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--/.main-content-->

</body>
</html>
















                       
