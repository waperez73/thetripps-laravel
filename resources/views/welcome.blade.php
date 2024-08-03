<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<style type="text/css" media="screen">
  .logoimg{
  	margin: auto;
  	width:450px;
  	border: 0px solid black;
  	margin-top:20%;
  }
  h3{
  	font-style: normal;
  	font-family: Arial, Helvetica, sans-serif;;
  	font-size: 1.3em;
  	margin-top: 0px;
  }
  
  a{
  	font-style: normal;
  	font-family: Arial, Helvetica, sans-serif;;
  	font-size: 1.1em;
  }
  
    #footer {
      margin: auto;
      width: 100%;
      height: 50px; /* the footer's total height */
    }

 #footer-content {
      background-color: #f3f5f5;
      border: 1px solid #f3f5f5;
      height: 20px; 
      padding: 8px;
      bottom : 0;
      margin-top : 40px;
      margin: auto;
      width: 100%;
      text-align: center;
    }  
    body {
       background-image: url('{{ asset('img/TheTripps-poster.png') }}');
       background-position: center center;
       background-repeat: no-repeat;
    };    
</style>

<title>The Tripps</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <meta name="robots" content="index, nofollow">
  <link rel="stylesheet" href="include/big-style.css">
  </head>
  <body  bgcolor="#000000" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <container>
    <div id="main-container"> 
    </div>
   </container>
   <footer id="footer">
   </footer>  
  </body>
 </html>