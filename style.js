var total=0.0;
var line_total=0.0;
var test='test'
$(document).ready(function(){
	$("table tr").change(function(){
		total = 0;
		line_total = $(this).find('input[name="quantity[]"]').val() * $(this).find('input[name="price[]"]').val();
		if (!isNaN(line_total) && line_total != 0) {

			console.log('line total ' + line_total);
		}
		
		$('table tr').each(function(){

			line_total = $(this).find('input[name="quantity[]"]').val() * $(this).find('input[name="price[]"]').val();
			if (!isNaN(line_total) && line_total != 0) {
				total = total + line_total ;
			}
			
		})
		if (!isNaN(total))
		{
			console.log('total ' + total);
		}

	});
	
	$("table input").change(function(){
		var tmp = $(this).val();
		if (isNaN( tmp ) )
		{
			$(this).css("background-color", "#FF7070");
		};
		if (!isNaN( tmp ) )
		{
			$(this).css("background-color", "#FFFFFF");
		};	
	})
	

});