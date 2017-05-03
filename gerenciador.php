<!DOCTYPE html>
<html class="no-js" lang="pt-br"> 
<head>

    <?php  
      include("conexaoRedis.php");
      include("verificaSessao.php");
    ?>  
    
    <meta charset="UTF-8">
    <title>Editar Site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-3.7/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/gerenciador.css" rel="stylesheet" media="screen">
    <script src="js/jquery-1.10.2.min.js"></script>

    <style>
    .modal p{
      color: black;
      text-align: center;
      font-size: 20px;
      margin: 20px;
      border-bottom: 1px dashed;
    }
    </style>
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

    <?php
      include("../conexaoMongo.php");
      $cursor = $collection->find(array("_id"=>$logado));
      foreach ($cursor as $document) {  
    ?>
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
                          <input type="text" class="form-control" value='<?=$document["clube"]["nome"];?>' name="nomeClube" placeholder="Nome do Clube" required>
                          <input type="color" id="nomeClubeColor" class="form-control" name="nomeClubeColor">
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

            <!-- Modal ultimo jogo-->
            <div class="modal fade" id="modalJogos" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">

                  <div class="modal-header" style="padding:35px 50px;">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h1>Editar Jogo</h1>
                  </div>

                  <div class="modal-body" style="padding:40px 50px;">
                      <form method="post"  action="update/updateJogos.php">
                        <input type="hidden" id="actionModalJogos" name="action" value="">
                        <div class="form-group">
                          <p>CABEÇALHO</p>
                          <div>
                            <label for="header">Fundo</label>
                            <input type="color" id="backgroundHeader" name="backgroundHeader">
                          </div>
                          <div>
                            <label for="headerNome">Titulo</label>
                            <input type="color" id="headerColor"  name="headerColor">
                          </div>
                        </div>
                        <div class="form-group">
                          <p>Clubes</p>
                          <div>
                            <label for="background">FUNDO</label>
                            <input type="color" id="backgroundColor" name="backgroundColor">
                          </div>
                          <div>
                            <label for="textColor">Texto</label>
                            <input type="color" id="textColor" name="textColor">
                          </div>

                          <label for="man">Mandante</label>
                          <input type="text" class="form-control" id="man" name="man" placeholder="Nome do time" required>
                          <label for="placarMan">placar</label>
                          <input type="Number" class="form-control" id="placarMan" name="placarMan" placeholder="">
                          

                          <label for="vis">Visitante</label>
                          <input type="text" class="form-control" id="vis" name="vis" placeholder="Nome do time" required>
                          <label for="placarman">placar</label>
                          <input type="Number" class="form-control" id="placarVis" name="placarVis" placeholder="placar">

                          <label for="dataHora">Data e hora</label>
                          <input type="datetime-local" class="form-control" id="data" name="data" value="2014-11-16T15:25">

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

            <!-- Modal noticia titulo-->
            <div class="modal fade" id="newTitle" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">

                  <div class="modal-header" style="padding:35px 50px;">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4><span class="glyphicon"></span> Editar Titulo</h4>
                  </div>

                  <div class="modal-body" style="padding:40px 50px;">
                      <form method="post"  action="update/separadores.php">
                        <div class="form-group">
                          <label for="corNoticia">Cor do texto</label>
                          <input type="color" class="form-control" id="separadorColor" name="cor">

                          <label for="posicaoTitulo">Posição do titulo</label>
                          <select class="form-control" name="titleAlign" id="posicao" required>
                              <option value="">posição:</option>
                              <option value="center">Centro</option>
                              <option value="left">Esquerda</option>
                          </select>
                        </div>
                        <!--<div class="checkbox">
                          <label><input type="checkbox" value="" checked>Remember me</label>
                        </div>-->
                          <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-floppy-saved"></span>SALVAR</button>
                      </form>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal noticia1-->
            <div class="modal fade" id="modalNoticias" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">

                  <div class="modal-header" style="padding:35px 50px;">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4><span class="glyphicon"></span> Editar Noticia</h4>
                  </div>

                  <div class="modal-body" style="padding:40px 50px;">
                      <form method="post"  action="update/updateNews.php">
                        <input type="hidden" id="actionModalNoticias" name="action">
                        <div class="form-group">
                          <p>Fundo</p>
                          <input type="color" id="noticiaBackground" name="background">
                          <p>Titulo</p>
                          <input type="text" class="form-control" id="title" name="title" placeholder="Nome do titulo" value='' required>
                          <input type="color" id="titleColor" name="titleColor">                          
                          <p>Noticia</p>
                          <input type="color"  id="corNoticia" name="corNoticia">
                          <textarea class="form-control" rows="5" name="noticia" id="noticia"></textarea>
                        </div>
                        
                          <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-floppy-saved"></span>SALVAR</button>
                      </form>
                  </div>
                </div>
              </div>
            </div>
            
            
            
              <!-- Modal foto jogador-->
            <div class="modal fade" id="modalFotoJogador" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">

                  <div class="modal-header" style="padding:35px 50px;">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4><span class="glyphicon"></span> Editar Jogador</h4>
                  </div>

                  <div class="modal-body" style="padding:40px 50px;">
                      <form enctype="multipart/form-data" method="post"  action="update/updateJogador.php">
                        <input type="hidden" id="actionModalJogador" name="action">
                        <div class="form-group">
                          <label for="foto">Foto jogador</label>
                          <input type="file" class="form-control" name="imagem">
                        </div>
                        <div class="form-group">
                          <label for="nomeJogador">Nome do jogador</label>
                          <input type="text" class="form-control" id="nomeJogador" name="nomeJogador" placeholder="Nome do jogador" required>
                          <label for="posicaoJogador">Posicao do jogador</label>
                          <input type="text" class="form-control" id="posicaoJogador" name="posicaoJogador" placeholder="Posicao jogador" required>
                          <label for="numeroCamisa">Número da camisa</label>
                          <input type="number" class="form-control" id="numeroCamisa" name="numeroCamisa" placeholder="Número da camisa">
                          <input type="color" id="corNomeJogador" name="corNomeJogador">
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
                      <h4><span class="glyphicon"></span> Editar Footer</h4>
                  </div>

                  <div class="modal-body" style="padding:40px 50px;">
                      <form method="post"  action="update/updateFooter.php">
                        <div class="form-group">
                          <label for="copyright">Copyright</label>
                          <input type="text" class="form-control" value='<?=$document["footer"]["direitos"];?>' name="copyright" placeholder="Nome do Copyright" >
                          <label for="facebook">Facebook</label>
                          <input type="text" class="form-control" value='<?=$document["footer"]["contatos"]["facebook"];?>' name="facebook" placeholder="Nome do Facebook" >
                          <label for="twitter">Twitter</label>
                          <input type="text" class="form-control" value='<?=$document["footer"]["contatos"]["twitter"];?>' name="twitter" placeholder="Nome do Twitter" >
                          <label for="linkedin">Linkedin</label>
                          <input type="text" class="form-control" value='<?=$document["footer"]["contatos"]["linkedin"];?>' name="linkedin" placeholder="Nome do linkedin" >
                          <label for="instagram">Instagram</label>
                          <input type="text" class="form-control" value='<?=$document["footer"]["contatos"]["instagram"];?>' name="instagram" placeholder="Nome do instagram" >
                          <label for="rss">Rss</label>
                          <input type="text" class="form-control" value='<?=$document["footer"]["contatos"]["rss"];?>' name="rss" placeholder="Nome do rss" required>
                          <input type="color" class="form-control" name="nomeFooterColor">
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

      <script>
        //=====================================escudo e nome do clube==========================
        $("#escudo").click(function(){
          $("#nomeClubeColor").val("<?php echo $document["clube"]["color"]; ?>");
            //document.getElementById('nomeClubeColor').value = "#FFFFFF";
        })
        //======================================================================================

        $(".separadores").click(function(){
          $("#separadorColor").val("<?php echo $document["separadores"]["color"];?>")
        })

        $("#ultimoJogo").click(function(){
          $("#man").val("<?php echo $document["jogos"]["ultimoJogo"]["man"];?>");
          $("#placarMan").val("<?php echo $document["jogos"]["ultimoJogo"]["placarMan"];?>");
          $("#vis").val("<?php echo $document["jogos"]["ultimoJogo"]["vis"];?>");
          $("#placarVis").val("<?php echo $document["jogos"]["ultimoJogo"]["placarVis"];?>");
          $("#data").val("<?php echo $document["jogos"]["ultimoJogo"]["data"];?>");
          jogosDefault();
        })
        $("#proximoJogo").click(function(){
          $("#man").val("<?php echo $document["jogos"]["proximoJogo"]["man"];?>");
          $("#placarMan").val("<?php echo $document["jogos"]["proximoJogo"]["placarMan"];?>");
          $("#vis").val("<?php echo $document["jogos"]["proximoJogo"]["vis"];?>");
          $("#placarVis").val("<?php echo $document["jogos"]["proximoJogo"]["placarVis"];?>");
          $("#data").val("<?php echo $document["jogos"]["proximoJogo"]["data"];?>");
          jogosDefault();
        })

        function jogosDefault(){
          $("#backgroundHeader").val("<?php echo $document["jogos"]["header"]["background"];?>");
          $("#headerColor").val("<?php echo $document["jogos"]["header"]["color"];?>");
          $("#backgroundColor").val("<?php echo $document["jogos"]["body"]["background"];?>");
          $("#textColor").val("<?php echo $document["jogos"]["body"]["color"];?>");
          
        }



        //============================== noticias ==============================================
        $("#news1").click(function(){
          $("#title").val("<?php echo $document["news"]["news1"]["title"]["texto"]; ?>");
          $("#noticia").val("<?php echo $document["news"]["news1"]["noticia"]; ?>");
          newsDefault();
        })
        $("#news2").click(function(){
          $("#title").val("<?php echo $document["news"]["news2"]["title"]["texto"]; ?>");
          $("#noticia").val("<?php echo $document["news"]["news2"]["noticia"]; ?>");
          newsDefault();
        })
        $("#news3").click(function(){
          $("#title").val("<?php echo $document["news"]["news3"]["title"]["texto"]; ?>");
          $("#noticia").val("<?php echo $document["news"]["news3"]["noticia"]; ?>");
          newsDefault();
        })

        function newsDefault(){
          $("#titleColor").val("<?php echo $document["news"]["titleColor"]; ?>");   
          $("#noticiaBackground").val("<?php echo $document["news"]["background"]; ?>");  
          $("#corNoticia").val("<?php echo $document["news"]["color"]; ?>");     
        }
        //======================================================================================




        //======================================js jogadores ===================================
        $("#jogador1").click(function(){
            $("#nomeJogador").val("<?php echo $document["jogadores"]["player1"]["nome"];?>"); 
            $("#numeroCamisa").val("<?php echo $document["jogadores"]["player1"]["numero"];?>"); 
            $("#posicaoJogador").val("<?php echo $document["jogadores"]["player1"]["posicao"];?>"); 
            jogadoresDefault();
        }) 
        $("#jogador2").click(function(){
            $("#nomeJogador").val("<?php echo $document["jogadores"]["player2"]["nome"];?>"); 
            $("#numeroCamisa").val("<?php echo $document["jogadores"]["player2"]["numero"];?>");
            $("#posicaoJogador").val("<?php echo $document["jogadores"]["player2"]["posicao"];?>"); 
            jogadoresDefault(); 
        })
        $("#jogador3").click(function(){
            $("#nomeJogador").val("<?php echo $document["jogadores"]["player3"]["nome"];?>"); 
            $("#numeroCamisa").val("<?php echo $document["jogadores"]["player3"]["numero"];?>"); 
            $("#posicaoJogador").val("<?php echo $document["jogadores"]["player3"]["posicao"];?>"); 
            jogadoresDefault();
        }) 
        $("#jogador4").click(function(){
            $("#nomeJogador").val("<?php echo $document["jogadores"]["player4"]["nome"];?>"); 
            $("#numeroCamisa").val("<?php echo $document["jogadores"]["player4"]["numero"];?>"); 
            $("#posicaoJogador").val("<?php echo $document["jogadores"]["player4"]["posicao"];?>"); 
            jogadoresDefault();
        })
        $("#jogador5").click(function(){
            $("#nomeJogador").val("<?php echo $document["jogadores"]["player5"]["nome"];?>"); 
            $("#numeroCamisa").val("<?php echo $document["jogadores"]["player5"]["numero"];?>");
            $("#posicaoJogador").val("<?php echo $document["jogadores"]["player5"]["posicao"];?>"); 
            jogadoresDefault(); 
        }) 
        $("#jogador6").click(function(){
            $("#nomeJogador").val("<?php echo $document["jogadores"]["player6"]["nome"];?>"); 
            $("#numeroCamisa").val("<?php echo $document["jogadores"]["player6"]["numero"];?>");
            $("#posicaoJogador").val("<?php echo $document["jogadores"]["player6"]["posicao"];?>"); 
            jogadoresDefault(); 
        })
        $("#jogador7").click(function(){
            $("#nomeJogador").val("<?php echo $document["jogadores"]["player7"]["nome"];?>"); 
            $("#numeroCamisa").val("<?php echo $document["jogadores"]["player7"]["numero"];?>");
            $("#posicaoJogador").val("<?php echo $document["jogadores"]["player7"]["posicao"];?>");  
            jogadoresDefault();
        }) 
        $("#jogador8").click(function(){
            $("#nomeJogador").val("<?php echo $document["jogadores"]["player8"]["nome"];?>"); 
            $("#numeroCamisa").val("<?php echo $document["jogadores"]["player8"]["numero"];?>"); 
            $("#posicaoJogador").val("<?php echo $document["jogadores"]["player8"]["posicao"];?>"); 
            jogadoresDefault();
        })      
        $("#jogador9").click(function(){
            $("#nomeJogador").val("<?php echo $document["jogadores"]["player9"]["nome"];?>"); 
            $("#numeroCamisa").val("<?php echo $document["jogadores"]["player9"]["numero"];?>");
            $("#posicaoJogador").val("<?php echo $document["jogadores"]["player9"]["posicao"];?>");  
            jogadoresDefault();
        }) 
        $("#jogador10").click(function(){
            $("#nomeJogador").val("<?php echo $document["jogadores"]["player10"]["nome"];?>"); 
            $("#numeroCamisa").val("<?php echo $document["jogadores"]["player10"]["numero"];?>"); 
            $("#posicaoJogador").val("<?php echo $document["jogadores"]["player10"]["posicao"];?>"); 
            jogadoresDefault();
        }) 
        $("#jogador11").click(function(){
            $("#nomeJogador").val("<?php echo $document["jogadores"]["player11"]["nome"];?>"); 
            $("#numeroCamisa").val("<?php echo $document["jogadores"]["player11"]["numero"];?>"); 
            $("#posicaoJogador").val("<?php echo $document["jogadores"]["player11"]["posicao"];?>"); 
            jogadoresDefault();
        }) 
        $("#jogador12").click(function(){
            $("#nomeJogador").val("<?php echo $document["jogadores"]["player12"]["nome"];?>");
            $("#posicaoJogador").val("<?php echo $document["jogadores"]["player12"]["posicao"];?>"); 
            jogadoresDefault();
        }) 

        function jogadoresDefault(){
          $("#corNomeJogador").val("<?php echo $document["jogadores"]["textColor"] ?>");
        }
        //==============================================================================================================================

      </script>

    <?php
      }
    ?>
      
</body>
</html>
