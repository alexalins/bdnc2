<html>
<head>

      <?php
            session_start();
            if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
            {
              unset($_SESSION['email']);
              unset($_SESSION['senha']);
              header('location:../index.php');
            }
      ?>

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
                           if(session_destroy()){
                              echo '<div class="alert alert-success">
                                            <strong>Success!</strong> sessão encerrada com sucesso.
                                            <a href="../index.php"><button type="button" class="btn btn-primary">ok</button>
                                       </div>';
                           }

                           else{
                              echo '<div class="alert alert-success">
                                            <strong>Erro!</strong> a sessão nao foi finalizado corretamente.
                                            <a href="../gerenciador.php"><button type="button" class="btn btn-primary">ok</button>
                                       </div>';
                           }
                        ?> 
                         
                    </div><!-- /.col-md-12-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--/.main-content-->

</body>
</html>













