<?php
    session_start();

    session_unset();

    session_destroy();
?>
<html>
    <head>
        
        <title>
            thankyou
        </title>
        <link rel="stylesheet" href="mystyles.css">
        <meta charset="UTF-8">
    </head>
    
    <body bgcolor=#DDDDDD style="font-family: Arial, Helvetica, sans-serif; font-size: 10px" align="middle">
    
    <div class="margin">
        <div class="BaseFlex">
            <div class="TEmptyFlex">
                <div class=TFlexboxcontainer>
                    <div class="TEmptyFlex" style="flex-grow: 1">
                        <ul>
                            <li><a href="">Logo</a></li>
                        </ul>
                    </div>
                    <div class="TEmptyFlex" style="align-items: flex-end"">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                        </ul>
                    </div>
                 </div>
            </div>
            <BR />
            <BR />
            <div class="TEmptyFlex">
                <div class=MFlexboxcontainer style="width: 15%; background-color: #7f828b;">
                </div>

                <div class=MFlexboxcontainer style="width: 65%; justify-content: space-around">
                    <div class="CheckoutFlexboxcontainer" style="background-color: #AAFFAA;">
                        <div class="header">THANK YOU, YOUR PURCHASE WAS SUCCESSFUL! <br /><a href="index.php"> return home</a></a></div>
                    </div>
                </div>
                
                <div class=MFlexboxcontainer style="width: 15%; background-color: #7f828b;">
                    
                </div>
            </div>
            <div class="TEmptyFlex">
                    <div class=TFlexboxcontainer style="justify-content:center">
                    </div>
        </div>
    </div>
    
    <!--
    <div class=Lmargin>
        <div class=container>
            <div class="flex-container">
                <div><img src="resources/arrow.png" class = imgsize></div>
                <div><img src="resources/main.png" class = imgsize></div>
                <div><img src="resources/oeil.png" class = imgsize></div>
                <div><img src="resources/outil.png" class = imgsize></div>
                <div><img src="resources/chat-icon.png" class = imgsize></div>
            </div>
        </div>
    </div>
    -->

    </body>
</html>