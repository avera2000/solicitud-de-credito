$(document).ready(function() {

  //Imprimir
  $('#print').on('click',function(){
    print();
  });

  //PDF
  $('#pdf').on('click',function(){
    $(".perfil").show();
    doc = new jsPDF('p','mm', 'letter');    
    doc.addHTML(document.getElementById('contenedor'),function() {   
      doc.save('Solicitud_FF.pdf');
    });
  });

  //Campo de fecha de nacimiento
  $("input[type='radio']").ionCheckRadio();
  $('#fecha-nacimiento').datepicker({
      format: "dd/MM/yyyy",
      weekStart: 0,
      endDate: "today",
      startView: 2,
      language: "es"
  });

  //Pone la nacionalidad
  $("#pais-nacimiento").change(function(event) {
    event.preventDefault();
    $("#nacionalidad").val($("#pais-nacimiento").val());
    $("#dom-pais").val($("#pais-nacimiento option:selected").val());
  });

  //Cambia el color del input
  $('input').focusin(function(event) {
    $(this).css("color","#026db2");
    $(this).parent().siblings().css("color","#026db2");
  });

  //Regresa el color al input
  $('input').focusout(function(event) {
    $(this).css("color","#666666");
    $(this).parent().siblings().css("color","#666666");
  });

  //Entrevista
  $('input[name="entrevista"]').change(function(event) {
    $(".entr").toggle('slow');
  });

  //Puesto gobierno 1
  $('input[name="puesto"]').change(function(event) {
    $(".puesto1").toggle('slow');
  });

  //Puesto gobierno 2
  $('input[name="puesto2"]').change(function(event) {
    $(".puesto2").toggle('slow');
  });

  //Prepagos
  $('input[name="prepagos"]').change(function(event) {
    $(".prepagos").toggle('slow');
  });

  //Requisitos para desbloquear empleo
  $("#email-laboral").change(function(event) {
    var test = validarMail($("#email-laboral").val());
    var test2 = validarMail($("#email").val());
    if($('input[name="vivienda"]').is(':checked') && $('input[name="genero"]').is(':checked') && $("#dom-pais option:selected").val()!='' && $("#dom-estado option:selected").val()!='' && $("#estado-nacimiento option:selected").val()!='' && $("#pais-nacimiento option:selected").val()!='' && $("#estado-civil option:selected").val()!='' && $("#dep-eco").val()!='' && $("#dom-cel").val()!='' && $("#dom-tel").val()!='' && $("#dom-cp").val()!='' && $("#dom-delomun").val()!='' && $("#dom-colonia").val()!='' && $("#dom-ciudad").val()!='' && $("#dom-noext").val()!='' && $("#dom-calle").val()!='' && $("#fecha-nacimiento").val()!='' && $("#rfc").val()!='' && $("#curp").val()!='' && $("#primer-nombre").val()!='' && $("#apellido-materno").val()!='' && $("#apellido-paterno").val()!='' && $("#dom-anios").val()!='' && $("#email").val()!='' && $("#email-laboral").val()!=''){
      $("#solicitante :input").css('border-bottom','1px solid #ddd');
      $("#solicitante :input:disabled").css('border-bottom','1px solid #ddd');
      $("#response").hide();
    }else{
      $("#response").html("Falta información.");
      $("#solicitante :input").css('border-bottom','1px solid #f13b3b');
      $("#solicitante :input:disabled").css('border-bottom','1px solid #ddd');
      if(!test){
        $("#response").append("<br>Introduzca un correo electrónico laboral válido.");
      }
      if(!test2){
        $("#response").append("<br>Introduzca un correo electrónico personal válido.");
      }
      $("#response").show();
    }
  });

  //Requisitos para desbloquear referencias
  $("#emp-tel").change(function(event) {
    if($("#emp-tel").val()!='' && $("#emp-ciudad").val()!='' && $("#ingreso").val()!='' && $("#emp-delomun").val()!='' && $("#emp-colonia").val()!='' && $("#emp-cp").val()!='' && $("#emp-noext").val()!='' && $("#emp-calle").val()!='' && $("#emp-puesto").val()!='' && $("#emp-dep").val()!='' && $("#emp-meses").val()!='' && $("#emp-anios").val()!='' && $("#emp").val()!=''){
      $("#ref-ingreso").val($("#ingreso").val());
      $("#ref-origen").val($("#emp").val());
      $("#empleo :input").css('border-bottom','1px solid #ddd');
      $("#empleo :input:disabled").css('border-bottom','1px solid #ddd');
      $("#response-empleo").hide();
    }else{
      $("#response-empleo").html("Falta información.");
      $("#empleo :input").css('border-bottom','1px solid #f13b3b');
      $("#empleo :input:disabled").css('border-bottom','1px solid #ddd');
      $("#response-empleo").show();
    }
  });

  //Requisitos para desbloquear información crediticia
  $("#ref-cel-2").change(function(event) {
    if($("#ref-cel-2").val()!='' && $("#ref-cel-1").val()!='' && $("#ref-nom-2").val()!='' && $("#ref-nom-1").val()!=''){
      $(".nombre").text($("#apellido-paterno").val() + " " + $("#apellido-materno").val() + " " + $("#primer-nombre").val() + " " + $("#segundo-nombre").val());
      $(".rfc-curp").text($("#rfc").val());
      $("#referencias :input").css('border-bottom','1px solid #ddd');
      $("#referencias :input:disabled").css('border-bottom','1px solid #ddd');
      $("#response-referencias").hide();
    }else{
      $("#response-referencias").html("Falta información.");
      $("#referencias :input").css('border-bottom','1px solid #f13b3b');
      $("#referencias :input:disabled").css('border-bottom','1px solid #ddd');
      $("#response-referencias").show();
    }
  });

});

function validarMail(mail){
  var re = /\S+@\S+\.\S+/;
  return re.test(mail);
}