
//simula clique para forcar fullscreen
	// $(document).on('ready simularClique', function() {
 //        var idBody = $('#body"]');
 //        idBody.click();
 //    });
 //    // Chama a função de clique através do trigger
 //    $(document).trigger('simularClique');

	$(document).ready(function(){
	
	//troca o campo type password para type text (mostra senha)
	$("#showHide").click(function () {
		if ($(".password").attr("type")=="password") {
			$(".password").attr("type", "text");
		}
		else{
			$(".password").attr("type", "password");
		}
	}); 

	// //funcao troca icone em download de documento
	$(".ico").click(function () {
		if($(".ico").hasClass("ativo")){
			console.log("ativo");
		}else{
			console.log("inaativo");
		}
		
	}); 

//anima transicao menu usuario
 
     // click do botao
     $('.bx-img').click(function(e) {
          // cancela o ação do href
          e.preventDefault();
          // traz o menu para a parte visível da tela
          $('.menu-usuario').animate({ right: 0 });
          // exibe o overlay
          $('#overlay').show();
     });
 
     // click na overlay
     $('#overlay').click(function(e) {
          // esconde o menu
          $('.menu-usuario').animate({ right: '-200px' });
          // esconde o overlay
          $('#overlay').hide();
     });



 //anima transicao menu evento
 
     // click do botao
     $('.bx-menu-ico').click(function(e) {
          // cancela o ação do href
          e.preventDefault();
          // traz o menu para a parte visível da tela
          $('.menu-evento').animate({ left: 0 });
          // exibe o overlay
          $('#overlay-evento').show();
     });
 
     // click na overlay
     $('#overlay-evento').click(function(e) {
          // esconde o menu
          $('.menu-evento').animate({ left: '-200px' });
          // esconde o overlay
          $('#overlay-evento').hide();
     });

    

//swipe vertical evento


             
        
       
     
 
     // animacao de menu por classe
	// $(".bx-img").click(function(){
	// 	$(".bx-menu-usuario").toggle();
	// 	$(".bx-menu-usuario").removeClass("right-out");
	// 	$(".bx-menu-usuario").addClass("right-0");
	// });

	// $(".bx-menu-usuario").click(function(){
		
	// 	$(".bx-menu-usuario").removeClass("right-0");
	// 	$(".bx-menu-usuario").addClass("right-out");
	// 	$(".bx-menu-usuario").toggle();
	// });

	//anima transicao de tela ao clickar na classe lnk
// 	//$("#body").removeClass("right-out");
// 	$(".lnk").click(function () {
// 		// if($("#body").hasClass("in")){
// 		// 	$("#body").removeClass("in");
// 		// 	$("#body").removeClass("left-0");
// 		// 	$("#body").addClass("left-out");
// 		// 	$("#body").addClass("out");
// 		// }
// 		// else{
// 		// 	console.log("nao é in");
// 		// }
		
// 	});

// 		if($("#body").hasClass("out")){
// 			$("#body").removeClass("right-out");
// 			$("#body").addClass("left-0");
// 			$("#body").addClass("in");
// 			$("#body").removeClass("out");
// 		}
// 		else{
// 			console.log("nao é out");
// 		}


});	

  //   $(window).scroll(function(e){
  //   alert("teste");
  //  // $(".bx-perfil").css("opacity", 0 - $(window).scrollTop() / 30);
  //  // $(".red").css("height:", "500px" - $(window).scrollTop() / 50);
  //  // $(".red").css("height", 0 - $(window).scrollTop() / -50);
  // });



	