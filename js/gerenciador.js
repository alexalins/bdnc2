
$(document).ready(function(){
    $("#escudo").click(function(){
      $("#formEscudo").modal();
    });
    $("#planoFundo").click(function(){
      $("#formBackground").modal();
    });
    $("#site-footer").click(function(){
      $("#footer").modal();
    });
    $("#news1").click(function(){
      $("#modalNoticias").modal();
      $("#actionModalNoticias").val("news1");
    });
    $("#news2").click(function(){
      $("#modalNoticias").modal();
      $("#actionModalNoticias").val("news2");
    });
    $("#news3").click(function(){
      $("#modalNoticias").modal();
      $("#actionModalNoticias").val("news3");
    });
    $("#ultimoJogo").click(function(){
      $("#modalJogos").modal();
      $("#actionModalJogos").val("ultimoJogo");
    });
    $("#proximoJogo").click(function(){
      $("#modalJogos").modal();
      $("#actionModalJogos").val("proximoJogo");
    });
    $("#jogador").click(function(){
      $("#modalFotoJogador").modal();
    });
    $(".separadores").click(function(){
      $("#newTitle").modal();
    });
    $("#elenco").click(function(){
      $("#jogadorTitle").modal();
    });
        $("#jogador1").click(function(){
      $("#modalFotoJogador").modal();
      $("#actionModalJogador").val("player1");
    });
    $("#jogador2").click(function(){
      $("#modalFotoJogador").modal();
      $("#actionModalJogador").val("player2");
    });
    $("#jogador3").click(function(){
      $("#modalFotoJogador").modal();
      $("#actionModalJogador").val("player3");
    });
    $("#jogador4").click(function(){
      $("#modalFotoJogador").modal();
      $("#actionModalJogador").val("player4");
    });
    $("#jogador5").click(function(){
      $("#modalFotoJogador").modal();
      $("#actionModalJogador").val("player5");
    });
    $("#jogador6").click(function(){
      $("#modalFotoJogador").modal();
      $("#actionModalJogador").val("player6");
    });
    $("#jogador7").click(function(){
      $("#modalFotoJogador").modal();
      $("#actionModalJogador").val("player7");
    });
    $("#jogador8").click(function(){
      $("#modalFotoJogador").modal();
      $("#actionModalJogador").val("player8");
    });
    $("#jogador9").click(function(){
      $("#modalFotoJogador").modal();
      $("#actionModalJogador").val("player9");
    });
    $("#jogador10").click(function(){
      $("#modalFotoJogador").modal();
      $("#actionModalJogador").val("player10");
    });
    $("#jogador11").click(function(){
      $("#modalFotoJogador").modal();
      $("#actionModalJogador").val("player11");
    });
    $("#jogador12").click(function(){
      $("#modalFotoJogador").modal();
      $("#actionModalJogador").val("player12");
    });
});

$('.modal').on('hidden.bs.modal', function () {
  $("#myClube").show("slow");
})
