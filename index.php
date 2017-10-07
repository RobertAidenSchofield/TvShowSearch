


<!DOCTYPE html>
 <head>
        <title>Show Search</title>
		<link rel="stylesheet" href="styles.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript">
            jQuery(function($){
                $('#search-trigger').click(function(){
                    $('#search-input').toggleClass('search-input-open');
                });
 
                $(document).click(function(e){
                    if(!$(e.target).closest('.ngen-search-form').length){
                        $('#search-input').removeClass('search-input-open');
                    }
                })
            });
        </script>
</head>
    
    <body class="body">
			 <form action="login.php" method="post">
                <button class="login" type="button" onclick=window.parent.location.href='login.html' target='_parent'>Login</button>
			 </form>
                
             <form action="register.php" method="post">
                <button class="register" type="button" onclick=window.parent.location.href='register.html' target='_parent'>Register</button>
             </form>                  

			<p class="top">Welcome to the TV show tracker</p>
			<p class="subhead"> Use this web app to search for info on your favorite shows !</p>	
	<div>
        <div class="form">
            <form class="form-search ngen-search-form" action="search.php" method="get">
                <input type="text" name="q" id="search-input" class="form-search-input" placeholder="Search for Shows..." dir="ltr">
                <span id="search-trigger" class="form-search-submit">Search</span>
            </form>
		
        </div>
	    <footer class="bottom">Robert Schofield® 2017</footer>
    </body>
