$('#btnGetMesas').click(function(){
	$('tblMesas tbody').html(
		'<tr>'+
            '<th style="width: 10px">ID</th>'+
            '<th>Nombre</th>'+
            '<th>Ingredientes</th>'+
			'<th>Calificacion</th>'+
			'<th>Precio</th>'+
        '</tr>'
	);
	$.post(baseurl+"ccliente/getMenu",
	function(data){
		var p = JSON.parse(data);
		$.each(p, function(i, item){
			$('#tblMenu').append(
				'<tr>'+
					'<td>'+item.idMenu+'</td>'+
					'<td>'+item.nombre+'</td>'+
					'<td>'+item.ingredientes+'</td>'+
					'<td>'+item.calificacion+'</td>'+
					'<td>'+item.precio+'</td>'+
				'<tr>'
			);
		});
	});
});