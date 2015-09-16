$().ready(function(){
	
	jQuery.validator.addMethod("expression", function(value, element, param) {
	    return value.match(new RegExp("^" + param + "$"));
	});
	
	$("#form").validate({
		rules:{
			name:{
				required: true,
				lettersonly: true
			},
			phone:{
				required: true,
				minlength: 10,
				maxlength: 10,
				digitsonly: true
			},
			email:{
				required: true,
				email: true
			},
			
		},

		messages:{
			name:{
				required: "Necesitas ingresar tu nombre y apellidos"
			},
			phone:{
				required: "Necesitas ingresar tu teléfono a 10 digitos",
				minlength: "Teléfono a 10 digitos mínimo"
			},
			email:{
			   required: "Por favor escribe tu correo electrónico",
			   email: "Ingresa un correo válido por favor"
			},

		}

	});
	
});