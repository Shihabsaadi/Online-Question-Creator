
$(document).ready(function(){
	

	$('#option_type').click(function(){
		console.log($('#option_type').val());
		if ($('#option_type').val() == 'TF') {
			var tf = "<select name = 'correct_ans' id = 'correct'>"+
					"<option value = 'true'> True</option>"+
					"<option value = 'false'>False</option>"+ 
					"</select>";	
			$('#add_option').hide('slow');
			$('#option').hide('slow');
			$('#correct').replaceWith(tf);
		}else{
			$('#add_option').show('show');
			$('#option').show('show');
			var mc = "<input type='text' name = 'correct_ans' id = 'correct' /> ";
			$('#correct').replaceWith(mc);
		}
	});
	
	var html_element = "<p id = 'new_option'> Option <input type='text' name = 'opt[]' id = 'opt' /> "+
						"<a href = '#' id ='remove'> X </a> "+
						"</p>";
	$('#add_option').click(function(e){
		$('#option').append(html_element);
	});

	/*var correct_answer_html = "<p > <input type='text' name = 'correct_ans[]' id = 'correct' />"+
								"</p>";
	$('#correct_answer').click(function(e){
		$('#correct_div').append(correct_answer_html);
	});*/

	$('#option').on('click','#remove',function(e){
		$(this).parent('p#new_option').remove();
	});
});

