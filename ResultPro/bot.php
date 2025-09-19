<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Chatbot ResultPro</title>
    <link rel="stylesheet" href="botstyle.css">
	 <link rel="icon" type="image/x-icon" href="assets/images/logo.png">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" href="styleofall.css">
    <style>
        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: purple;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .back-button i {
            margin-right: 5px;
        }
		
a:link {
  text-decoration: none;
  background-color: white;
}

a:visited {
  text-decoration: none;
  background-color: white;
}

a:hover {
  text-decoration: underline;
  background-color: white;
}

a:active {
  text-decoration: underline;
  background-color: white;
}
    </style>



</head>
<body>

<script>
	document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
        document.querySelector("#preloader").style.display = "none";
    }, 1500); 
});

window.addEventListener("load", function() {
    setTimeout(function() {
        document.querySelector("#preloader").style.display = "none";
    }, 1500); 
});
</script>
     
   
  <div id="preloader"></div>
   
    <button class="back-button">
	    <a href = "index.php">
			<i class="fas fa-arrow-left"></i> Back
		</a>
    </button>
    <div class="wrapper">
	  
        <div class="title"><img src="logo.png" width="100px"> &nbsp;&nbsp; ResultPro Chat BOT</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello there, how can I help you?</p>
                </div>
            </div>
        </div>  

        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
    
</body>
</html>