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
                            // session_start inicia a sessão
                            //session_start();
                            include("conexao.php"); 
                                                  
                                        $email = $_POST['email'];
                                        $senha = $_POST['senha'];

                                        echo $email;

                                            $result = mysqli_query($db, "SELECT * FROM usuarios where email='$email' and senha='$senha'");

                                            if(mysqli_affected_rows($db) == 1){ 

                                                //Conexão 
                                                try{
                                                    $redis = new Redis(); 
                                                    $redis->connect('127.0.0.1', 6379);
                                                }catch(Exception $e) {
                                                        echo $e->getMessage();
                                                }
                                                                                            
                                                //inserindo
                                                try{
                                                    $redis->set("email", $email);
                                                    $redis->set("senha", $senha);
                                                }catch(Exception $e) {
                                                echo $e->getMessage();
                                                }
                                                
                                                header("location:../gerenciador.php");                                                              
                                            }

                                            else{
                                                 echo '<div class="alert alert-danger">
                                                                <strong>Error!</strong> Não foi possivel efetuar o login.
                                                                <a href="../login.php"><button type="button" class="btn btn-danger">ok</button>
                                                        </div>';

                                                                              
                                            }
                                        
                            mysqli_close($db);
                        ?>  

                    </div><!-- /.col-md-12-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--/.main-content-->

</body>
</html>









