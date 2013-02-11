$(document).ready(function(){
	var pet = $('#cleber form').attr('action');
	var met = $('#cleber form').attr('method');
    $('#cleber form').submit(function(e){
          e.preventDefault();
          $.ajax({
              beforeSend: function(){

              },
              url: pet,
              type: met,
              data: $('#cleber form').serialize(),
              success: function(resp){
                       console.log(resp);
                       if(resp == "Correcto"){
                             alert("Gacias por su Voto...");
                       }else{

                       }
              },
              error: function(jqXHR,estado,error){
                   console.log(estado);
                   console.log(error);
              },
              complete: function(jqXHR,estado){
                  console.log(estado);
              },
              timeout: 10000//10 segundos.
          });
    });

    var pet = $('#cesarC form').attr('action');
	  var met = $('#cesarC form').attr('method');

    $('#cesarC form').submit(function(e){
          e.preventDefault();
          $.ajax({
              beforeSend: function(){

              },
              url: pet,
              type: met,
              data: $('#cesarC form').serialize(),
              success: function(resp){
                       console.log(resp);
                       if(resp == "Correcto"){
                              alert("Gacias por su Voto...");
                       }else{

                       }
              },
              error: function(jqXHR,estado,error){
                   console.log(estado);
                   console.log(error);
              },
              complete: function(jqXHR,estado){
                  console.log(estado);
              },
              timeout: 10000//10 segundos.
          });
    });

    var pet = $('#richar form').attr('action');
	  var met = $('#richar form').attr('method');
	
    $('#richar form').submit(function(e){
          e.preventDefault();
          $.ajax({
              beforeSend: function(){

              },
              url: pet,
              type: met,
              data: $('#richar form').serialize(),
              success: function(resp){
                       console.log(resp);
                       if(resp == "Correcto"){
                              alert("Gacias por su Voto...");
                       }else{

                       }
              },
              error: function(jqXHR,estado,error){
                   console.log(estado);
                   console.log(error);
              },
              complete: function(jqXHR,estado){
                  console.log(estado);
              },
              timeout: 10000//10 segundos.
          });
    });


    var pet = $('#nelson form').attr('action');
	  var met = $('#nelson form').attr('method');
	
    $('#nelson form').submit(function(e){
          e.preventDefault();
          $.ajax({
              beforeSend: function(){

              },
              url: pet,
              type: met,
              data: $('#nelson form').serialize(),
              success: function(resp){
                       console.log(resp);
                       if(resp == "Correcto"){
                              alert("Gacias por su Voto...");
                       }else{

                       }
              },
              error: function(jqXHR,estado,error){
                   console.log(estado);
                   console.log(error);
              },
              complete: function(jqXHR,estado){
                  console.log(estado);
              },
              timeout: 10000//10 segundos.
          });
    });

    var pet = $('#cesarL form').attr('action');
	  var met = $('#cesarL form').attr('method');
	
    $('#cesarL form').submit(function(e){
          e.preventDefault();
          $.ajax({
              beforeSend: function(){

              },
              url: pet,
              type: met,
              data: $('#cesarL form').serialize(),
              success: function(resp){
                       console.log(resp);
                       if(resp == "Correcto"){
                              alert("Gacias por su Voto...");
                       }else{

                       }
              },
              error: function(jqXHR,estado,error){
                   console.log(estado);
                   console.log(error);
              },
              complete: function(jqXHR,estado){
                  console.log(estado);
              },
              timeout: 10000//10 segundos.
          });
    });

    var pet = $('#fabio form').attr('action');
	  var met = $('#fabio form').attr('method');
	
    $('#fabio form').submit(function(e){
          e.preventDefault();
          $.ajax({
              beforeSend: function(){

              },
              url: pet,
              type: met,
              data: $('#fabio form').serialize(),
              success: function(resp){
                       console.log(resp);
                       if(resp == "Correcto"){
                              alert("Gracias por su Voto...");
                       }else{

                       }
              },
              error: function(jqXHR,estado,error){
                   console.log(estado);
                   console.log(error);
              },
              complete: function(jqXHR,estado){
                  console.log(estado);
              },
              timeout: 10000//10 segundos.
          });
    });


    var pet = $('#jesus form').attr('action');
    var met = $('#jesus form').attr('method');
  
    $('#jesus form').submit(function(e){
          e.preventDefault();
          $.ajax({
              beforeSend: function(){

              },
              url: pet,
              type: met,
              data: $('#jesus form').serialize(),
              success: function(resp){
                       console.log(resp);
                       if(resp == "Correcto"){
                              alert("Gracias por su Voto...");
                       }else{

                       }
              },
              error: function(jqXHR,estado,error){
                   console.log(estado);
                   console.log(error);
              },
              complete: function(jqXHR,estado){
                  console.log(estado);
              },
              timeout: 10000//10 segundos.
          });
    });
});///cierre del document