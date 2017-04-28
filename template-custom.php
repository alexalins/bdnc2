<!DOCTYPE html>
<html class="no-js" lang="pt-br"> 
<head>
    <title>ARENA M1L G4AU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="O ARENA M1L G4AU É UM SITE ESPORTIVO QUE TEM COMO OBJETIVO DIVULGAR OS PRINCIPAIS CAMPEONATOS/TORNEIOS LOCAIS. NA PAGINA INICIAL É POSSIVEL VISUALIZAR TODOS OS CAMPEONATOS/TORNEIOS QUE SERÃO REALIZADOS, O MESMO SUPORTA TODOS OS FORMATOS DE CAMPEONATO. ATRAVÉZ DE NOSSA PAGINA VOCÊ FICA POR DENTRO DAS PRINCIPAIS COMPETIÇÕES QUE ACONTECEM NA CIDADA.">
    <meta name="author" content="ARENAM1lG4AU">
    <meta name="keywords" content="arena, arenamilgrau, arenam1lg4au, local, torneios, campeonatos, futebol, divulgacao, mauriti, contato">
    <meta charset="UTF-8">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/logo_arena/arenam1lg4au_mobile.png">
    
    <!-- CSS -->
    <link href="bootstrap-3.7/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">    
    <link href="css/templatemo_style.css" rel="stylesheet" media="screen">
    <link href="css/template-custom.php" rel="stylesheet" type="text/css">
    
    <!-- JavaScripts -->
    <script src="js/jquery-1.10.2.min.js"></script>

    <?php
       include("conexaoMongo.php");
    ?> 
</head>

<body>

    <div id="loader"></div> 
    <div class="bg-image" id="bg-image"></div>
    <div class="overlay-bg"></div>
    
    <div class="main-content">
        <div class="container">
            <div class="row">
            
                <!-- Begin Content -->
                <div class="col-md-12">

                   <div id="escudo" class="row edit">
                      <div class="edit-content">
                          <div class="col-md-12">
                              <div class="templatemo_logo">
                                  <img src="#" id="logo" class="logo_arena" >
                                  <h1 class="nomeClube member-name" id="nomeClube"></h1>
                              </div> <!-- /.logo -->
                          </div> <!-- /.col-md-12 -->
                      </div>
                    </div> <!-- /.row -->

                    <div id="jogos" class="row services">
                        <div class="col-md-6 col-sm-6" id="ultimoJogo">

                            <div class="service edit">
                              <div class="edit-content">
                                <div class="header" id="headerUltimoJogo">
                                    <div class="service-header">
                                        <h3 class="service-title">
                                            ULTIMO JOGO
                                        </h3>
                                    </div>
                                </div>

                                <div class="body" id="bodyUltimoJogo">
                                    <div class="row">
                                        <div id="update_jogos">
                                          <div class="col-md-12">
                                              <div class="confrontos">
                                                  <div class="member-infos">
                                                      <h4 class="member-name"><spam class="glyphicon"><img src="images/times/escudo.png"></spam> <span class="clube">MAN</span> <spam class="placar"> 2 </spam></h4>
                                                      <h4 class="member-name"><spam class="glyphicon"><img src="images/times/escudo.png"></spam> <span class="clube">MAN</span> <spam class="placar"> 2</spam></h4>
                                                      <h5 class="member-name dataJogo"><span class="glyphicon glyphicon-calendar"></span>01/01/01 12:00</h5>
                                                  </div><!-- /.member-infos --> 
                                              </div><!-- /.confrontos -->  
                                          </div> <!-- /.col-md-12 -->

                                        </div>
                                    </div>      
                                </div><!-- /.body -->
                              </div><!-- /.edit-content --> 
                            </div> <!-- /.service --> 
                        </div> <!-- /.col-md-6 -->

                        <div class="col-md-6 col-sm-6" id="proximoJogo">

                            <div class="service edit">
                              <div class="edit-content">
                                <div class="header" id="headerProximoJogo">
                                    <div class="service-header">
                                        <h3 class="service-title">
                                          PROXIMO JOGO
                                        </h3>
                                    </div>
                                </div>

                                <div class="body" id="bodyProximoJogo">
                                    <div class="row">
                                        <div id="update_jogos">
                                          <div class="col-md-12">
                                              <div class="confrontos">
                                                  <div class="member-infos">
                                                      <h4 class="member-name"><spam class="glyphicon"><img src="images/times/escudo.png"></spam> <span class="clube">MAN</span> <spam class="placar"> 2 </spam></h4>
                                                      <h4 class="member-name"><spam class="glyphicon"><img src="images/times/escudo.png"></spam> <span class="clube">MAN</span> <spam class="placar"> 2</spam></h4>
                                                      <h5 class="member-name dataJogo"><span class="glyphicon glyphicon-calendar"></span>01/01/01 12:00</h5>
                                                  </div><!-- /.member-infos --> 
                                              </div><!-- /.confrontos -->  
                                          </div> <!-- /.col-md-12 -->

                                        </div>
                                    </div>      
                                </div><!-- /.body -->
                              </div>
                            </div> <!-- /.service --> 
                        </div> <!-- /.col-md-6 -->
     
                    </div> <!-- /.row services-->  
                    
                    <!--elencos-->
                    <div class="noticias row">
                    <div id="news" class="page-header edit">
                      <div class="edit-content">
                          <h2 class="page-title">Noticias</h2>
                      </div>
                    </div> <!-- /.page-header -->

                    <div id="news1" class="col-md-12 grid1 edit noticia">
                      <div class="edit-content">
                        <div class="icone-news">
                            <img src="images/c1.png" alt=""/>
                        </div>
                        <h3 class="member-name"></h3>
                        <p></p>
                      </div>
                    </div>
                                        
                    <div id="news2" class="col-md-12 grid1 edit noticia">
                        <div class="edit-content">
                           <div class="icone-news">
                                <img src="images/c2.png" alt=""/>
                            </div>
                            <h3 class="member-name"></h3>
                            <p></p>
                        </div>
                    </div>    

                    <div id="news3" class="col-md-12 grid1 edit noticia">
                      <div class="edit-content">
                        <div class="icone-news">
                          <img src="images/c3.png" alt=""/>
                        </div>
                        <h3 class="member-name"></h3>
                        <p></p>
                      </div>
                    </div>
                  </div>


                    <!--elenco-->
                    <div id="elenco" class="page-header edit">
                      <div class="edit-content">
                          <h2 class="page-title">Elenco</h2>
                      </div>
                    </div> <!-- /.page-header -->
                    
                    <div class="row">
                      <div class="col-md-2 col-sm-3 col-xs-4" id="jogador1">
                        <div class="polaroid edit">
                          <div class="edit-content">
                              <img id="player1" class="img-responsive" src="#">
                              <p id="p1Nome"><span id="p1Numero" class="numero glyphicon"></span></p>
                              <p id="posicaoP1"></p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-2 col-sm-3 col-xs-4" id="jogador2">
                        <div class="polaroid edit">
                          <div class="edit-content">
                              <img id="player2" class="img-responsive" src="#">
                              <p id="p2Nome"><span id="p2Numero" class="numero glyphicon"></span></p>
                              <p id="posicaoP2"></p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-2 col-sm-3 col-xs-4" id="jogador3">
                        <div class="polaroid edit">
                          <div class="edit-content">
                              <img id="player3" class="img-responsive" src="#">
                              <p id="p3Nome"><span id="p3Numero" class="numero glyphicon"></span></p>
                              <p id="posicaoP3"></p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-2 col-sm-3 col-xs-4" id="jogador4">
                        <div class="polaroid edit">
                          <div class="edit-content">
                              <img id="player4" class="img-responsive" src="#">
                              <p id="p4Nome"><span id="p4Numero" class="numero glyphicon"></span></p>
                              <p id="posicaoP4"></p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-2 col-sm-3 col-xs-4" id="jogador5">
                        <div class="polaroid edit">
                          <div class="edit-content">
                              <img id="player5" class="img-responsive" src="#">
                              <p id="p5Nome"><span id="p5Numero" class="numero glyphicon"></span></p>
                              <p id="posicaoP5"></p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-2 col-sm-3 col-xs-4" id="jogador6">
                        <div class="polaroid edit">
                          <div class="edit-content">
                              <img id="player6" class="img-responsive" src="#">
                              <p id="p6Nome"><span id="p6Numero" class="numero glyphicon"></span></p>
                              <p id="posicaoP6"></p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-2 col-sm-3 col-xs-4" id="jogador7">
                        <div class="polaroid edit">
                          <div class="edit-content">
                              <img id="player7" class="img-responsive" src="#">
                              <p id="p7Nome"><span id="p7Numero" class="numero glyphicon"></span></p>
                              <p id="posicaoP7"></p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-2 col-sm-3 col-xs-4"  id="jogador8">
                        <div class="polaroid edit">
                          <div class="edit-content">
                              <img id="player8" class="img-responsive" src="#">
                              <p id="p8Nome"><span id="p8Numero" class="numero glyphicon"></span></p>
                              <p id="posicaoP8"></p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-2 col-sm-3 col-xs-4"  id="jogador9">
                        <div class="polaroid edit">
                          <div class="edit-content">
                              <img id="player9" class="img-responsive" src="#">
                              <p id="p9Nome"><span id="p9Numero" class="numero glyphicon"></span></p>
                              <p id="posicaoP9"></p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-2 col-sm-3 col-xs-4"  id="jogador10">
                        <div class="polaroid edit">
                          <div class="edit-content">
                              <img id="player10" class="img-responsive" src="#">
                              <p id="p10Nome"><span id="p10Numero" class="numero glyphicon"></span></p>
                              <p id="posicaoP10"></p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-2 col-sm-3 col-xs-4" id="jogador11">
                        <div class="polaroid edit">
                          <div class="edit-content">
                              <img id="player11" class="img-responsive" src="#">
                              <p id="p11Nome"><span id="p11Numero" class="numero glyphicon"></span></p>
                              <p id="posicaoP11"></p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-2 col-sm-3 col-xs-4"  id="jogador12">
                        <div class="polaroid edit">
                          <div class="edit-content">
                              <img id="player12" class="img-responsive" src="#">
                              <p id="p12Nome"></p>
                              <p id="posicaoP12"></p>
                          </div>
                        </div>
                      </div>
                  </div>
               

                    <div id="site-footer" class="site-footer edit">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="copyright-text">Copyright &copy; <span id="copyright"></span>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="social-icons-footer">
                                    <ul>
                                        <li><a id="facebook" href="#" class="fa fa-facebook"></a></li>
                                        <li><a id="twitter" href="#" class="fa fa-twitter"></a></li>
                                        <li><a id="linkedin" href="#" class="fa fa-linkedin"></a></li>
                                        <li><a id="instagram" href="#" class="fa fa-instagram"></a></li>
                                        <li><a id="rss" href="#" class="fa fa-rss"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!--/.site-footer -->             
                
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.main-content -->

    
    <script src="bootstrap-3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.lightbox.js"></script>
    <script src="js/templatemo_custom.js"></script>

    <script type="text/javascript">
        function abrejanela(url){
            location.href=url;
        }
        $(window).load(function(){
          $("#loader").fadeOut("slow");
       });
    </script>    
<!--   -->
</body>

</html>
