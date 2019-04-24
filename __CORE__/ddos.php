<?php


/*
 * Copyright (c) 2017-2019 Barchampas Gerasimos <makindosx@gmail.com>
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


   define('ENOTSOCK',      88);    /* Socket operation on non-socket */ 

   define('EDESTADDRREQ',  89);    /* Destination address required */ 

   define('EMSGSIZE',      90);    /* Message too long */ 

   define('EPROTOTYPE',    91);    /* Protocol wrong type for socket */ 

   define('ENOPROTOOPT',   92);    /* Protocol not available */ 

   define('EPROTONOSUPPORT', 93);  /* Protocol not supported */ 

   define('ESOCKTNOSUPPORT', 94);  /* Socket type not supported */ 

   define('EOPNOTSUPP',    95);    /* Operation not supported on transport endpoint */ 

   define('EPFNOSUPPORT',  96);    /* Protocol family not supported */ 

   define('EAFNOSUPPORT',  97);    /* Address family not supported by protocol */ 

   define('EADDRINUSE',    98);    /* Address already in use */ 

   define('EADDRNOTAVAIL', 99);    /* Cannot assign requested address */ 

   define('ENETDOWN',      100);   /* Network is down */ 

   define('ENETUNREACH',   101);   /* Network is unreachable */ 

   define('ENETRESET',     102);   /* Network dropped connection because of reset */ 

   define('ECONNABORTED',  103);   /* Software caused connection abort */ 

   define('ECONNRESET',    104);   /* Connection reset by peer */ 

   define('ENOBUFS',       105);   /* No buffer space available */ 

   define('EISCONN',       106);   /* Transport endpoint is already connected */ 

   define('ENOTCONN',      107);   /* Transport endpoint is not connected */ 

   define('ESHUTDOWN',     108);   /* Cannot send after transport endpoint shutdown */ 

   define('ETOOMANYREFS',  109);   /* Too many references: cannot splice */ 

   define('ETIMEDOUT',     110);   /* Connection timed out */ 

   define('ECONNREFUSED',  111);   /* Connection refused */ 

   define('EHOSTDOWN',     112);   /* Host is down */ 

   define('EHOSTUNREACH',  113);   /* No route to host */ 

   define('EALREADY',      114);   /* Operation already in progress */ 

   define('EINPROGRESS',   115);   /* Operation now in progress */ 

   define('EREMOTEIO',     121);   /* Remote I/O error */ 

   define('ECANCELED',     125);   /* Operation Canceled */



 class DDOS_ATTACK
     {  




   /* for flag counter */
    var $error_flag  = '0';


    /* for socket create */


    /*
     * An indentifier
     * IPv4 Internet based protocols 
     * TCP and UDP are common protocols of this protocol family.
     */ 

     public $param1 = "AF_INET";
      


    /*
     * Supports datagrams (connectionless, unreliable messages of a fixed maximum length).
     * The UDP protocol is based on this socket type.
     */ 

     public $param2 = "SOCK_DGRAM";



    /*
    * The User Datagram Protocol is a connectionless, unreliable, protocol with fixed record lengths. 
    * Due to these aspects, UDP requires a minimum amount of protocol overhead.
    */ 

    public $param3 = "SOL_UDP";
 


    /*
     * An indentifier
     * error message
     */

   private  $error_unexpected;



    /*
     * An indentifier
     * parameter definition
     */


    public $parameter = array(); 



      public function CONNECT($domain, $type, $protocol)
          {

          $this->param1 = $domain; 
          $this->param2 = $type; 
          $this->param3 = $protocol; 


           } /* end of function for socket params */




      public function SOCKET_DOMAIN()
        {

        $this->parameter[1] = $this->param1;

           if ($this->parameter[1] == true)
              {
              return $this->parameter[1];
               }
      
          else
             {
           $trace = debug_backtrace();
        trigger_error(
            'Undefined property via SOCKET_DOMAIN(): ' . $this->parameter[1] .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return (!$this->parameter[1]) .$error_unexpected .$error_flag;
 
            }



         } /* end of function for SOCKET_DOMAIN */ 






     public function SOCKET_TYPE()
      {

        $this->parameter[2] = $this->param2;

         if ($this->parameter[2] == true)
              {
              return $this->parameter[2];
               }
        


           else
             {
           $trace = debug_backtrace();
        trigger_error(
            'Undefined property via SOCKET_TYPE(): ' . $this->parameter[2] .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return (!$this->parameter[2]) .$error_unexpected .$error_flag;
 
            }


         } /* end of function for SOCKET_TYPE */ 





    public function SOCKET_PROTOCOL()
       {

        $this->parameter[3] = $this->param3;

         if ($this->parameter[3] == true)
              {
              return $this->parameter[3];
               }
       

           else
             {
           $trace = debug_backtrace();
        trigger_error(
            'Undefined property via SOCKET_PROTOCOL(): ' . $this->parameter[3] .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return (!$this->parameter[3]) .$error_unexpected .$error_flag;
 
            }


         } /* end of function for SOCKET_PROTOCOL */ 





      /* for destroyed CONNECT function */

       public function DISCONNECT()
          { 
           unset ($this->parameter[1]);
           unset ($this->parameter[2]);
           unset ($this->parameter[3]);
            }
           

   







   /* for socket send_to */




   /* for bufer */
   public  $buf  =  array(8     =>  '00001000'          ,  16    =>  '00010000'         ,
                          32    =>  '00100000'          ,  256   =>  '0000000100000000' ,
                          64    =>  '01000000'          ,  128   =>  '10000000'         ,  
                          512   =>  '0000001000000000'  ,  1024  =>  '0000010000000000' ,
                          2048  =>  '0000100000000000'  ,  4096  =>  '0001000000000000');



 


    /* for bytes send */

    /*
     * An indentifier
     * msg string 
     */


      public $BYTES = array();
      


    /*
     * An indentifier
     * error message
     */

      private $error_expected = "Bytes error";

  

      public function  __construct()
         {
  

          $hex  = substr(md5(mt_rand()), 0, 9);

          $this->BYTES[0] = unpack('H*', "$hex");
          $this->BYTES[1] = base_convert($this->BYTES[0][1], 16, 2);
     
           if ($this->BYTES[1] == true)
             {
              return ($this->BYTES[1][0]);
               }


          else
            {

      $trace = debug_backtrace();
        trigger_error(
            'Undefined property via __construct(): ' . $BYTES .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return (!$this->BYTES[1][0]) .$error_expected .$error_flag;
 
             }



          } /* end of function for bytes */








       /* for destroyed bytes function */

        public function __destruct() 
           {
         unset($this->BYTES);
           }











    /* for length bytes */

    /*
     * An indentifier
     * length bytes 
     */

      public $length;
      

      public function LENGTH_BYTES($length)
        {
         $length = strlen($length);

      if ($length == true)
           {
          return ($length);
            }          


          else
            {
            $trace = debug_backtrace();
        trigger_error(
            'Undefined property via LENGTH_BYTES): ' . $length .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return (!$length) .$error_expected .$error_flag;
             }


         } /* end of function for length bytes */







       /* for destroyed LENGTH_BYTES function */

        public function DIS_LENGTH_BYTES() 
           {
         unset($length);
           }










     /* for limit time to send bytes */

     /*
     * An indentifier
     * limit time bytes
     */

  const CONSTANT = 0;

    function showConstant() 
       {
        echo  self::CONSTANT;
         }







    /* for safe IP input */

   

    /*
     * An indentifier
     * error message
     */

     
    private $error_ip = 'trigger_error("IP data was not be sent safe", E_USER_NOTICE)'; 



    public function SAFE_INPUT_IP($ip)
        {
        $ip = htmlspecialchars($ip);
        $ip = htmlentities($ip);
        $ip = trim($ip);
        $ip = stripslashes($ip);  
        $ip = stripcslashes ($ip);

          if ($ip == true)
           {
          return ($ip);
            }          

          else
            {
            $trace = debug_backtrace();
            return (!$ip) .$error_ip;
             }


          } /* end of function for safe IP input */











    /* for port to send bytes */

   

    /*
     *                       An indentifier port number (List of TCP and UDP port numbers)
     *
     *
     *
     *   Port	 TCP	         UDP	            Description	                                 IANA status
     *
     *    0    Reserved	      Reserved	             Reserved	                                   Official
     *
     *   21    TCP/SCTP        Assigned	    File Transfer Protocol (FTP) control (command)	   Official
     *
     *   22    TCP/SCTP         UDP	   Secure Shell (SSH),secure logins, file transfers 
     *                                         (scp, sftp)  and port forwarding	                   Official
     *
     *   23	TCP	     Assigned	   Telnet protocol—unencrypted text communications	   Official
     *
     *   25	TCP	     Assigned	    Simple Mail Transfer Protocol (SMTP), used for 
     *                                         email routing between mail servers	           Official
     *
     *   53      TCP	      UDP	        Domain Name System (DNS)	                   Official
     * 
     *   80     TCP/SCTP      UDP	    Hypertext Transfer Protocol (HTTP)	                   Official
     *
     *  110	TCP	    Assigned	  Post Office Protocol, version 3 (POP3)	           Official
     *
     *  143	TCP	   Assigned	Internet Message Access Protocol (IMAP), management  
     *                                      of electronic mail messages on a server	           Official
     *
     *  443   TCP/SCTP     Assigned	Hypertext Transfer Protocol over TLS/SSL (HTTPS)	   Official
     *
     *  465	TCP		          Authenticated SMTP over TLS/SSL (SMTPS)	           Unofficial
     *
     *  587	TCP	  Assigned	   email message submission (SMTP)	                   Official
     *
     *  993	TCP	  Assigned	Internet Message Access Protocol over TLS/SSL (IMAPS)	   Official
     *
     *  995	TCP	   UDP	          Post Office Protocol 3 over TLS/SSL (POP3S)	           Official
     *
     * 1433	TCP	   UDP	  Microsoft SQL Server database management system (MSSQL) server   Official
     *
     * 3306	TCP	Assigned	          MySQL database system	                           Official
     *
     * 3389	TCP	  UDP	    Microsoft Terminal Server (RDP) officially registered 
     *                                       as Windows Based Terminal (WBT)	                   Official
     *
     * 5631	TCP	       pcANYWHEREdata, Symantec pcAnywhere (version 7.52 and later) data   Official
     *
     */

   

     public $port_list =  array  ('reserved' =>  '0'    ,  'ftp'     =>  '21'   ,  'ssh'        =>  '22'  ,
                                  'telnet'   =>  '23'   ,  'smtp'    =>  '25'   ,  'dns'        =>  '53'  , 
                                  'http'     =>  '80'   ,  'pop3'    =>  '110'  ,  'imap'       =>  '143' ,  
                                  'https'    =>  '443'  ,  'smtp/s'  =>  '465'  ,  'smtp/n'     =>  '587' ,
                                  'imap4'    =>  '993'  ,  'pop3/s'  =>  '995'  ,  'sql'        =>  '1433',
                                  'mysql'    =>  '3306' ,  'rdp'     =>  '3389' ,  'pc/anyware' =>  '5631');
                                 



    protected function DEFAULT_PORT($port) 
     {

       $port = $this->port_list['reserved'];
        echo $port;

      }/* end of function for port number */





       /* for destroyed PORT function */

        public function DIS_DEFAULT_PORT() 
           {
         unset($port);
         unset($port_list);
           }






   } /* end of class DDOS_ATTACK */









  class DDOS_ATTACK_SEND extends DDOS_ATTACK 
       {

     function __construct() 
       {
       parent::__construct();
        }


     }




    class DDOS_ATTACK_SEND_TO extends DDOS_ATTACK
        {

    public function DEFAULT_PORT($port)
         {
         parent::DEFAULT_PORT();
          }
       


        public function DIS_DEFAULT_PORT() 
           {
          parent::DEFAULT_PORT();
         unset($port);
         unset($port_list);
           }


         }






?>

