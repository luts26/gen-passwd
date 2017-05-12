$(document).ready(function(){
	$(":button").click(function(){
		var size = $("#x").val();
		var passCan = "";
		$("input:checkbox:checked").each(function(){
			passCan += $(this).attr("name") + ",";
		});
		$.ajax({
			url: "script/generator.php",
			type: "POST",
			dataType: "text",
			data: ("size="+size+"&passCan="+passCan),
			success: function(data){
				$("#pass").val(data);
			}
		});
	});
	
		//скопировать б буфер, работает во всех браузерах, но заново отправляет запсос
	new Clipboard('.btn-clipboard');

		/* скопировать в буфер, работает хреново, и только в chrome */
	/*	
	var copybtn = document.querySelector('.copybtn');
	copybtn.addEventListener('click', function(event){  
			// Выборка копируемого объекта
		var copytext = document.querySelector('#pass'); 
		var range = document.createRange();  
		range.selectNode(copytext); 
		window.getSelection().addRange(range);
		
		try {  
			// Теперь, когда мы выбрали текст, выполним команду копирования
			var successful = document.execCommand('copy');  
			var msg = successful ? 'successful' : 'unsuccessful';  
			alert('Copy command was success!');  
		} catch(err){
			alert('Oops, unable to copy'); 
		}  
		
		// Снятие выделения
		window.getSelection().removeRange(range);  
	});
	*/
});