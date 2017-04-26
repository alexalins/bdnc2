
$(document).ready(function(){
    $("#escudo").click(function(){
      $("#formEscudo").modal();
    });
    $("#planoFundo").click(function(){
      $("#formBackground").modal();
    });
    $("#planoFundo").click(function(){
      $("#footer").modal();
    });
    $("#new1").click(function(){
      $("#news1").modal();
    });
    $("#new2").click(function(){
      $("#news2").modal();
    });
    $("#new3").click(function(){
      $("#news3").modal();
    });
    $("#ultimoJogo").click(function(){
      $("#modalUltimoJogo").modal();
    });
});

$('.modal').on('hidden.bs.modal', function () {
  $("#myClube").show("slow");
})
