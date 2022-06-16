$(function(){

    /* Funciones generales */
	function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
    }

    $('.SinLe').on('input', function () { 
        this.value = this.value.replace(/[^0-9]/g,'');
    });

    function removeItemFromArr ( arr, item ) {
        var i = arr.indexOf( item );
    
        if ( i !== -1 ) {
            arr.splice( i, 1 );
        }
    }

    var array_option=[];

    /*Fin de funciones generales*/

    $("#btnAddOption").click(function(){

        var opcion = $("#opcion").val();    
        var cadena ="";

        if(opcion!=""){
            array_option.push(opcion);        
            cadena +="<ul>";
            for(var i = 0; i < array_option.length; i++){
                cadena += "<li style='margin:10px 0px;'>"+(i+1)+".-"+array_option[i]+"</li>";
            }
            cadena +="</ul>";
            $("#etiquetasAdd").html(cadena);
        }else{
            alert("Debe escribir una opción");
        }
    });

    /*Agregar*/

	$("#addPreguntaForm").submit(function(e){

	    e.preventDefault(); // avoid to execute the actual submit of the form.
	    var form = $('#addPreguntaForm')[0]; // aqui mandamos todos los campos que hay en el dormulario y lo recuperamos con el nombre 
	    var form = new FormData(form);
	    form.append('_token',$("meta[name='csrf-token']").attr("content"));
        form.append('opciones',array_option);

	    var cadena = "";

	    var titulo = $("#titulo").val();

        var respuesta = $("#respuesta").val();

	    if (titulo !="" && respuesta!="" && array_option.length > 0) {

	        $("#btnAddQuestion").prop("disabled",true);

	        $.ajax({
	        method:'POST',
	        url: "addQuestion",

	        data:form,
	        contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+) estos dos campos son necesarios cuando hay un archivo
	        processData: false, // NEEDED, DON'T OMIT THIS
	        dataType:"json",

	        success: function(html){
	            console.log(html);
	            if (html.data=="ok") {

	                document.getElementById("addPreguntaForm").reset();
                    //arr.remove();
	                alert("La pregunta se agrego correctamente!");

	            }else{
	                alert("Error en enviar datos!");
	            }
	            $("#btnAddQuestion").prop("disabled",false);

	        }
	        });

	    }else{
	        var cadena = "";

	       
	        if (titulo =="") {
	            cadena +="-Título: ¡El campo es requerido!\n";
	        }

	        if (respuesta =="") {
	            cadena +="-Respuesta: ¡El campo es requerido!\n";
	        }

            if (array_option.length ==0) {
	            cadena +="-Opciones: ¡Debe agregar al menos una opción!\n";
	        }
            
	        alert(cadena);
	    }
	});


    /*Editar*/

    /*Actualizar*/

    /*Eliminar*/
});