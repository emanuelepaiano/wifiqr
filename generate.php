 <?php
 
 include "functions.inc.php"; 
 include("qrcode.php");
 
 
        $html="
        <html>
                <head>
                        <title>Free Daily Wifi Access</title>
                        <style style=\"text/css\">
                        body{
                             /*background: #f5e3c2;*/   
                        }
                        
                        #content{
                                margin:auto;
                                text-align:center;
                        }
                        
                        #wifilogo{
                             padding-top:10%;   
                        }
                        
                        #logo img{
                             width:30%;
                        }
                        
                        #wifilogo img{
                             width:80px;  
                        }
                        
                        #qrcode img{
                             width: 200px;
                             padding-top: 30px;  
                        }
                        
                         #qrcode p{
                             font-size:12px;  
                        }
                        
                        #wpa{
                                padding-top:1%;
                        }
                        
                        #wpa p{
                                font-size:12px;
                        }
                        
                       
                                
                        </style>
                </head>
                <div id=\"content\">
                        <div id=\"logo\">
                              
                               <img src=\"" . dirname("img/wifilogo.png") . "/wifilogo.png\" border='0'>
                        </div>
                
                
                        <div id=\"qrcode\">";

                                        

                                        

                        $qr = new qrcode();
                        
                        $name=$_POST["name"];
                        $key=$_POST["key"];
                        $security=$_POST["security"];


                        //wifi network configuration works on Android devices
                        //First param - Authentication type WPA or WEP
                        //Second param - Network SSID
                        //Third param - password
                        $qr->wifi($security, $name, $key);
                        $html=$html . "                
                                        <p><img src='".$qr->get_link()."' border='0'/></p>
                                
                        </div>
               
                                <div id='wpa'>
                                        <p><b>WIFI: ".$name."</b></p>
                                        <p><b>KEY: ".$key." </b></p>
                                        <p><b>SECURITY: ".$security . "</b></p>
                                </div>
                                
                        
               
                        <div id=\"wifilogo\">
                                
                        </div>
                       
                </div>
            </html>";
    
    
       
    makeWeb("output.html", $html, $qr->get_link());
    
    saveConf($name, $security, $key);
    
    echo $html;
    
?>
        


