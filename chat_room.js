const main = function(){
    loadLog();

    $("#submit").click(function(){
		    var clientmsg = $("#message").val();
        console.log(clientmsg);
        if (clientmsg != ''){
		        $.post("post.php", {text: clientmsg});
        };
        $("#message").val('');
        loadLog();// need to change: use javascript to display first, then do PHP data store. Otherwise loading is very slow!!!
		    return false;
	  });

    $("#exit").click(function(){
		    var exit = confirm("Are you sure you want to end the session?");
		    if(exit==true){window.location = 'chat_room.php?logout=true';}
	  });

    function loadLog(){
		    var oldHeight = $("#chatbox")[0].scrollHeight; //Scroll height before the request
        var a = 3;
        console.log(oldHeight);
		    $.ajax({
			      url: "log.html",
			      cache: false,
			      success: function(html){
				        $("#chatbox").html(html); //Insert chat log into the #chatbox div
                //Auto-scroll
				        var newHeight = $("#chatbox")[0].scrollHeight; //Scroll height after the request
				        if(newHeight > oldHeight){
					          $("#chatbox").animate({ scrollTop: newHeight }, 'normal'); //Autoscroll to bottom of div
				        }
		  	    },
		    });
	  }



//    setInterval (loadLog, 150);

};
$(document).ready(main);
