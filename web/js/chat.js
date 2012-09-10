$(document).ready(function(){
	
	$("#nouveauMsgEnvoi").click(function(){
		alert('en');
		//$("#messages").load("{{ path('chat_chat_ajax')}}");
		var msg = $('#nouveauMsg').val();
		$('#nouveauMsg').val('');
		var donnee="req=2&msg="+msg;
		$.ajax({
            type: "POST",
            data: donnee,
            cache: false,
            success: function(reponse){
               $('#messages').append(reponse);
            }
        });    

		return false;
	});
});
