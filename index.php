<?php

/*
 * Copyright (c) 2017 Barchampas Gerasimos <makindosx@gmail.com>
 * Phpddos is a program for ddos attack (ip, url).
 *
 * Phpddos is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 *
 * Phpddos is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */



   $allow = array("::1", "127.0.0.1");

   if (!in_array ($_SERVER['REMOTE_ADDR'], $allow)) 
    {
    exit();
      }


?>



<html>
<head>

<title> phpddos </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/png" href="img/ddos.png"/>

<style>


#body
{
background-image:url('');
background-repeat:no-repeat;
background-size:100%;
background-color: ;
}




#button_automatic
{
height:5em;
width:20em;
background: #1C4451;
border: 2px solid grey;
color:white;
font-size: 14px;
position: absolute;
top:-200;
bottom: 0;
left: 0;
right: 0;
margin: auto;
}



#button_automatic:hover
{
height:5em;
width:20em;
background: #20363E;
border: 2px solid grey;
color:white;
}



#button_manual
{
height:5em;
width:20em;
background: #1C4451;
border: 2px solid grey;
color:white;
font-size: 14px;
position: absolute;
top:80;
bottom: 0;
left: 0;
right: 0;
margin: auto;
}



#button_manual:hover
{
height:5em;
width:20em;
background: #20363E;
border: 2px solid grey;
color:white;
}





.shell-wrap 
{
background-image:url('img/ddos.png'), url('img/ddos.png');
background-repeat:no-repeat, no-repeat;
background-size:25%, 25%;
background-attachment: fixed, fixed;
background-position: 5% 30%, 95% 60%; 


background-color: #173340;
height: 100%;
width: 100%;
margin: 1px auto 0 auto;
box-shadow: 0 0 30px rgba(0,0,0,0.4);
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;

/*
position: absolute;
top:-50;
bottom: 0;
left: 0;
right: 0;
margin: auto;
*/

}

 
.shell-top-bar {
text-align: center;
color: #525252;
padding: 10px;
margin: 0;
text-shadow: 1px 1px 0 rgba(255,255,255,0.5);
font-size: 1.5em;
border: 1px solid #CCCCCC;
border-bottom: none;
 
-webkit-border-top-left-radius: 3px;
-webkit-border-top-right-radius: 3px;
-moz-border-radius-topleft: 3px;
-moz-border-radius-topright: 3px;
border-top-left-radius: 3px;
border-top-right-radius: 3px;
 
background-color: #E9E9EA;


}





.mycss
{
text-shadow:1px 1px 1px rgba(NaN,NaN,NaN,1);
font-weight:bold;
text-decoration:underline overline;
font-style:oblique;
color:#FFFFFF;
letter-spacing:0pt;
word-spacing:2pt;
font-size:65px;
text-align:center;
font-family:verdana, sans-serif;
line-height:2;
}




.valid
{
  color: #00ff00;
}

.invalid
{
  color: #ff0000;
}


</style>



</head>




<body id="body">



<div class="shell-wrap">

  <p class="shell-top-bar"> phpddos program methods </p>
  
     <br><br>

  <div align="center">
  
   <form acrion="" method="post">
     <button type="submit" name="submit_automatic" id="button_automatic"> 
       AUTOMATIC METHOD &nbsp; <i class="fa fa-connectdevelop fa-lg"></i>
     </button>
   </form>

  <form acrion="" method="post">
    <button type="submit" name="submit_manual" id="button_manual"> 
     MANUAL METHOD &nbsp; <i class="fa fa-plug fa-lg"></i>
    </button>
   </form>

    </div>

  </div>



</body>
</html>




<?php


 if (isset($_POST['submit_automatic'])) 
    {
     $automatic = "__CORE__/automatic.php";
     echo ("<script>location.href='$automatic'</script>"); 
     } // end if of submit automatic method
  


 else if (isset($_POST['submit_manual'])) 
      {
      $manual = "__CORE__/manual.php";
      echo ("<script>location.href='$manual'</script>"); 
       } // end if of submit manual method

  
?>
