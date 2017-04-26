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
                              "clube" => array("nome"=>"myClub", "color"=>"white"),
                              "background" => "myClub.png",
                              "ultimoJogo" => array("header" => array("background"=>"green", "color"=>"white", "text-aling"=>"center"), "body" => array("background"=>"black", "color"=>"white", "man"=>"MAN", "placarMan"=>"", "vis"=>"VIS", "placarVis"=>"", "data"=>"01/01/2017", "hora"=>"12:00")),
                              "proximoJogo" => array("header" => array("background"=>"green", "color"=>"white", "text-aling"=>"center"), "body" => array("background"=>"black", "color"=>"white", "man"=>"MAN", "placarMan"=>"", "vis"=>"VIS", "placarVis"=>"", "data"=>"01/01/2017", "hora"=>"12:00")),
                              "news1" => array("background"=>"black", "title"=>array("color"=>"red", "text-aling"=>"center"), "color"=>"white"),
                              "news2" => array("background"=>"black", "title"=>array("color"=>"red", "text-aling"=>"center"), "color"=>"white"),
                              "news3" => array("background"=>"black", "title"=>array("color"=>"red", "text-aling"=>"center"), "color"=>"white"),
                              "footer" => array("direitos"=>"M1l G4AU", "color"=>"black", "contatos" => array("facebook"=>"#", "twitter"=>"#","instagram"=>"#", "linkedin"=>"#", "rss"=>"#")), 
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
















                       
