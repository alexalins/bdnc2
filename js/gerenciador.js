
$(document).ready(function(){
    $("#escudo").click(function(){
      $("#formEscudo").modal();
    });
    $("#planoFundo").click(function(){
      $("#formBackground").modal();
    });
});

$('.modal').on('hidden.bs.modal', function () {
  $("#myClube").show("slow");
})
