
// $(document).ready(function(){
//         $('#datatables').DataTable();
//         });

// $(document).ready(function(){
// 	var table = $('#datatables').DataTable();

// 	$('a.toggle-vis').on('click', function (e) {

// 		e.preventDefault();
// 		var column = table.column($(this).attr('data-column'));
// 		column.visible(!column.visible());
// 	})


// 	$('#datatables thead th').each(function(){
// 		var title = $('#datatables thead th').eq($(this).index()).text();
// 		$(this).html('<input type="text" placeholder=" ' +title+ '" />');

// 	});

// 	table.columns().eq(0).each(function(colIdx){
// 		$('input', table.column(colIdx).footer()).on('keyup change', function(){
// 			table
// 				.column(colIdx)
// 				.search(this.value)
// 				.draw();
// 		});
// 	});


