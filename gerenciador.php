<!DOCTYPE html>
<html class="no-js" lang="pt-br"> 
<head>
    <?php  
          //esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php.
          session_start();
          if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
          {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('location:index.php');
          }

          $logado = $_SESSION['email'];
    ?>  
    <meta charset="UTF-8">
    <title>Editar Site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-3.7/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/gerenciador.css" rel="stylesheet" media="screen">
    <script src="js/jquery-1.10.2.min.js"></script>
</head>

<body>
  <div class="menu-edit">
    <button id="planoFundo" type="button" title="Plano de Fundo" class="btn btn-success"><span class="glyphicon glyphicon-picture"></span></button>
    <a href="template-custom.php" target="_blank"><button id="visualizar" type="button" title="Visualizar" class="btn btn-success"><span class="glyphicon glyphicon-eye-open"></span></button></a>
    <a href="usuario/encerrar_sessao.php"><button id="sair" type="button" title="Sair" class="btn btn-success"><span class="glyphicon glyphicon-log-out"></span></button></a>
    
  </div>

    <div id="myClube">       
      <?php
        include("template-custom.php");
      ?>
    </div>


    <div class="container">
      <div class="row">
        <div class="col-md-12 forms">

          <!-- Modal plano de fundo-->
          <div class="modal fade" id="formBackground" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">

                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-picture"></span>Plano de fundo</h4>
                </div>

                <div class="modal-body" style="padding:40px 50px;">
                    <form enctype="multipart/form-data" method="post"  action="update/updateBackground.php" name="formBackground">
                      <div class="form-group">
                        <label for="escudo">Image</label>
                        <input type="file" class="form-control" name="imagem" required>
                      </div>
                        <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-floppy-saved"></span>SALVAR</button>
                    </form>
                </div>

              </div><!--/modal-content-->
            </div><!--/modal-dialog-->
          </div> <!--/modal-->





          <!-- Modal escudo-->
          <div class="modal fade" id="formEscudo" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">

                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <img src="images/times/escudo.png">
                    <h4><span class="glyphicon"></span> Editar Escudo</h4>
                </div>

                <div class="modal-body" style="padding:40px 50px;">
                    <form enctype="multipart/form-data" method="post"  action="update/updateEscudo.php">
                      <div class="form-group">
                        <label for="escudo">Escudo</label>
                        <input type="file" class="form-control" name="escudo">
                      </div>
                      <div class="form-group">
                        <label for="psw">Nome</label>
                        <input type="text" class="form-control" name="nomeClube" placeholder="Nome do Clube" required>
                        <input type="color"  name="nomeClubeColor">
                      </div>
                      <!--<div class="checkbox">
                        <label><input type="checkbox" value="" checked>Remember me</label>
                      </div>-->
                        <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-floppy-saved"></span>SALVAR</button>
                    </form>
                </div>

              </div><!--/modal-content-->
            </div><!--/modal-dialog-->
          </div> <!--/modal-->
        
        <!-- Modal footer-->
          <div class="modal fade" id="footer" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">

                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <img src="images/times/escudo.png">
                    <h4><span class="glyphicon"></span> Editar Footer</h4>
                </div>

                <div class="modal-body" style="padding:40px 50px;">
                    <form enctype="multipart/form-data" method="post"  action="update/updateEscudo.php">
                      <div class="form-group">
                        <input type="color"  name="nomeFooterColor">
                        <label for="copyright">Copyright</label>
                        <input type="text" class="form-control" name="copyright" placeholder="Nome do Copyright" required>
                        <label for="twitter">Facebook</label>
                        <input type="text" class="form-control" name="facebook" placeholder="Nome do Facebook" required>
                        <label for="twitter">Twitter</label>
                        <input type="text" class="form-control" name="twitter" placeholder="Nome do Twitter" required>
                        <label for="linkedin">Linkedin</label>
                        <input type="text" class="form-control" name="linkedin" placeholder="Nome do linkedin" required>
                        <label for="instagram">Instagram</label>
                        <input type="text" class="form-control" name="instagram" placeholder="Nome do instagram" required>
                        <label for="rss">Rss</label>
                        <input type="text" class="form-control" name="rss" placeholder="Nome do rss" required>
                      </div>
                      <!--<div class="checkbox">
                        <label><input type="checkbox" value="" checked>Remember me</label>
                      </div>-->
                        <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-floppy-saved"></span>SALVAR</button>
                    </form>
                </div>

              </div><!--/modal-content-->
            </div><!--/modal-dialog-->
          </div> <!--/modal-->     
        </div><!--/col-->
      </div ><!--/row-->  
    </div><!--/container-->

      <script src="bootstrap-3.7/js/bootstrap.min.js"></script>
      <script src="js/gerenciador.js"></script>
      
</body>
</html>
