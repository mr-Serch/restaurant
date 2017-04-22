$.post(baseurl+"cchef/getMenu",
	function(data){
		//alert(data);
		var obj = JSON.parse(data);
		var estilo = "background: transparent;border:0px;outline: none;text-align:center;width: 100%";
		$.each(obj, function(i, item){
			$('#tblMenu tbody').append(
				//class=filaNotas para guardar en la BD
				//class=alum
				'<tr class="filaMenu">'+
					'<td><input disabled  				value="'+item.idMenu+'" 		style="'+estilo+'"  class="id"></td>'+
					'<td><input type="text"				value="'+item.nombre+'" 		style="'+estilo+'" maxlength="60" class="nombreM"></td>'+
					'<td><input type="text"				value="'+item.ingredientes+'" 	style="'+estilo+'" maxlength="60" class="ingredientesM"></td>'+
					'<td><input disabled type="text" 	value="'+item.calificacion+'" 	style="'+estilo+'" maxlength="1"  class="calificacionM"></td>'+
					'<td><input type="text" 			value="'+item.precio+'" 		style="'+estilo+'" maxlength="4"  class="precioM"></td>'+					
				'</tr>'
				);
		});
	
		
		//cuando se hace click se selecciona
		$('input[type=text]').focus(function(){
			$(this).select();
		});
		
	});

$('#btnGuardarMenu').click(function(){
	
	var i = 0;
	$('#tblMenu .filaMenu').each(function(){
		var identifcador 		= $('.id:eq('+i+')').val();
		var nombreMenu 			= $('.nombreM:eq('+i+')').val();
		var ingredientesMenu 	= $('.ingredientesM:eq('+i+')').val();
		var calificacionMenu 	= $('.calificacionM:eq('+i+')').val();
		var precioMenu 			= $('.precioM:eq('+i+')').val();

		$.post(baseurl+"cchef/saveMenu",
			{
				identifcador	:identifcador,
				nombreMenu		:nombreMenu,
				ingredientesMenu:ingredientesMenu,
				calificacionMenu:calificacionMenu,
				precioMenu		:precioMenu
			},
			function(data){
				//alert(data);
			});
		i++;

	});
	alert('Los Datos Se guardaron satisfactoriamente');
});