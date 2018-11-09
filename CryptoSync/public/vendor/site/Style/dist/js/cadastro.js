////////////////////////////////////////////
//Processos
	$(function(){
		$('#section_2').hide();
		$('#section_3').hide();
		$('#section_4').hide();
		$('#btnVoltar_1').hide();
		$('#btnVoltar_2').hide();
		$('#btnVoltar_3').hide();
		$('#btnVoltar_4').hide();
		$('.input_email').attr('autocomplete','off');
	});


	//botão voltar
	$(function(){
		$(".btnvoltar1").click(function(){
			$('#section_1').show();
			$('#section_2').hide();
			$('#btnVoltar_1').hide();
		});
	});

	$(function(){
		$(".btnvoltar2").click(function(){
			$('#section_2').show();
			$('#section_3').hide();
			$('#btnVoltar_2').hide();
			$('#btnVoltar_1').show();
		});
	});

	$(function(){
		$(".btnvoltar3").click(function(){
			$('#section_3').show();
			$('#section_4').hide();
			$('#btnVoltar_3').hide();
			$('#btnVoltar_2').show();
		});
	});


	//Inputs / Botão avançar
	
	

	$(function(){
		$(".cadastro1").click(function(){
			if($('.input_nome').val() == ""){

			}else if($('.input_email').val() == ""){

			}else if($('.input_senha').val() == ""){

			}else if($('.input_rsenha').val() == ""){

			}else{
				$('#section_1').hide();
				$('#section_2').show();
				$('#btnVoltar_1').show();
			}
			
		});
	});




	$(function(){
		$(".cadastro2").click(function(){
			if($('.input_rg').val() == ""){
				$( ".input_rg" ).focus();
			}else if($('.input_cpf').val() == ""){
				$( ".input_cpf" ).focus();
			}else if($('.input_dtNasc').val() == ""){
				$( ".input_dtNasc" ).focus();
			}else{
				$('#section_1').hide();
				$('#section_2').hide();
				$('#section_3').show();
				$('#btnVoltar_1').hide();
				$('#btnVoltar_2').show();
			}
		});
	});

	$(function(){
		$(".cadastro3").click(function(){
			if($('.input_cep').val() == ""){
				$( ".input_cep" ).focus();
			}else if($('.input_num').val() == ""){
				$( ".input_num" ).focus();
			}else if($('.input_rua').val() == ""){

			}else if($('.input_bairro').val() == ""){

			}else if($('.input_cidade').val() == ""){

			}else if($('.input_uf').val() == ""){

			}else{
				$('#section_1').hide();
				$('#section_2').hide();
				$('#section_3').hide();
				$('#section_4').show();
				$('#btnVoltar_1').hide();
				$('#btnVoltar_2').hide();
				$('#btnVoltar_3').show();
			}
		});
	});

	$(function(){
		$(".cadastro4").click(function(){
			if($('.input_tel').val() == ""){
				$( ".input_tel" ).focus();
			}else{
				$('#teste').hide();
			}
		});
	});




////////////////////////////////////////////
//Alerts

	$(function(){
		$(".disabledbutton").click(function(){
			$.toast({
			  text : "Por favor, preencha o CEP e os campos irão se preencher automaticamente",
			  showHideTransition : 'slide',  // It can be plain, fade or slide
			  bgColor : '#3AF072',              // Background color for toast
			  textColor : '#0C0716',            // text color
			  allowToastClose : true,       // Show the close button or not
			  hideAfter : 5000,              // `false` to make it sticky or time in miliseconds to hide after
			  stack : 1,                     // `fakse` to show one stack at a time count showing the number of toasts that can be shown at once
			  textAlign : 'left',            // Alignment of text i.e. left, right, center
			  position : 'bottom-left',       // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values to position the toast on page
			 loaderBg: '#fff'
			})
		});
	});


////////////////////////////////////////////
//MASCARAS
$(document).ready(function(){
	(function($){
		$('#data').inputmask("datetime",{
			mask: "99/99/9999",
			placeholder: "DD-MM-AAAA",
			leapday: "-02-29",
			separator: "/",
			alias: "dd/mm/yyyy"
		});
		$("input[id*='cpfcnpj']").inputmask({ mask: ['999.999.999-99', '99.999.999/9999-99'], keepStatic: true });
		$("input[id*='ierg']").inputmask({ mask: ['99.999.999-9', '999999999-0'], keepStatic: true });
		$("input[id*='cep']").inputmask({ mask: ['99999-999'], keepStatic: true });
		$("input[id*='tel']").inputmask({ mask: ['(99)9999-9999', '(99)99999-9999'], keepStatic: true });

		$("input:radio").change(function(){
			var valor = $("input[name='gender']:checked").val();

			if(valor == 'fisica'){
				$("#c").html('* CPF');
				$("#r").html('* RG');
			}else{
				$("#c").html('* CNPJ');
				$("#r").html('* Inscrição Estadual');
			}
		});

	})(jQuery)
});


////////////////////////////////////////////
$('input').focus(function(){
	$(this).parents('.form-group').addClass('focused');
});

$('input').blur(function(){
	var inputValue = $(this).val();
	if ( inputValue == "" ) {
		$(this).removeClass('filled');
		$(this).parents('.form-group').removeClass('focused');

	} else {
		$(this).addClass('filled');
	}
})
