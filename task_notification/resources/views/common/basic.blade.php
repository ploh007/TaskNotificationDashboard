<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title>Task Notification Dashboard</title>

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="./css/animate.css" rel="stylesheet">
    <link href="./css/dashboard.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

@yield('content')

<footer>
    <script src="./js/jquery-1.11.3.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>

    <!-- Custom Javascript -->
    <script src="./js/appJS.js"></script>
    <script>
		  if (!("Notification" in window)) {
		    console.log("This browser does not support desktop notification");
		  }

		  // Let's check whether notification permissions have alredy been granted
		  else if (Notification.permission === "granted") {
		    // If it's okay let's create a notification
		    var notification = new Notification("Hi there!");
		  }

		  // Otherwise, we need to ask the user for permission
		  else if (Notification.permission !== 'denied' || Notification.permission === "default") {
		    Notification.requestPermission(function (permission) {
		      // If the user accepts, let's create a notification
		      if (permission === "granted") {
		        var notification = new Notification("Hi there!");
		      }
		    });
		  }
    </script>

</footer>

</html>