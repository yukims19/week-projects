const main = function(){
    $("#submit").click(function(){
		    var clientmsg = $("#message").val();
        console.log(clientmsg);
		    $.post("post.php", {text: clientmsg***REMOVED***);
		    $("#message").val('');
		    return false;
	  ***REMOVED***);
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
					          $("#chatbox").animate({ scrollTop: newHeight ***REMOVED***, 'normal'); //Autoscroll to bottom of div
				        ***REMOVED***
		  	    ***REMOVED***,
		    ***REMOVED***);
	  ***REMOVED***



    setInterval (loadLog, 150);

***REMOVED***;
$(document).ready(main);