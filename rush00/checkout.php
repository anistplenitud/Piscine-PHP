<?php
session_start();

$add_item = $_GET["id"];
$isvalid = 1;


if ($add_item)
{
    foreach ($_SESSION['cart'] as $candi)
    {
        if ($candi == $add_item)
        {
            $isvalid = 0;
        }
    } 
    if ($isvalid != 0)
    {
        array_push($_SESSION['cart'], $add_item);
    }
    
}

print_r($_SESSION['cart']);

$servername = "localhost";
$username = "root";
$password = "bitnami";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_select_db( $conn,'rush_store' );

$sql = "SELECT * FROM product";
$result = $conn->query($sql);

$total = 0;
?>

<html>
    <head>
        
        <title>
            Checkout
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
                            <li><a href="register.php">Log In / Sign Up</a></li>
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
                <div class=MFlexboxcontainer style="width: 65%; flex-direction: row;">
                        <div class=checkoutinfoFlexboxcontainer style="justify-content:center">
                                <div class="header">Cart items</div>
                        </div>
                    <div class="CheckoutFlexboxcontainer" style="height: 500px; border: grey solid 5px">
                        <!--- ---->
                        <?php  
                        if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc())
                        {
                        $id =  $row["ID"];
                        $name =  $row["Name"];
                        $price = $row["Price"];
                        $qtty =  $row["Quantity"];
                        $im = $row["Image"];

                         $product = "<div class=itemFlexbox>
                        <IFL>
                            <img src ='".$im."' width = '120vw' height = '120vw' >
                        </IFL>
                        <IFLP style='background-color; height: 30px;'>".$name."<br/> R".$price."
                        <br />
                        <a href='checkout.php?id=$id'>addtocart</a>
                        </IFLP>     
                    </div> ";
                        if ($id === $add_item)
                        {
                        echo $product;
                        $total = $total + $price;    
                        }
                        

                        }          
                    }   
                    else {
                    echo "0 results";
                    }   
                
                    ?>
                        <!-- ----->
                    </div>
                    <div class="CheckoutFlexboxcontainer" style="height: 450px; flex-direction: column">
                        <div class="CheckoutinfoFlexboxcontainer">
                            <div class="header">Check out items total cost = <<?php echo "R".$total ?></div>
                        </div>
                        <div class="CheckoutinfoFlexboxcontainer" style="background-color: #25323b;">
                            <ul>
                                    <li><a href="thankyou.php">Paypal</a></li>
                                    <li><a href="thankyou.php">Debit/Credit</a></li>
                                    <li><a href="thankyou.php">Voucher</a></li>
                                    <li><a href="thankyou.php">Storebucks</a></li>
                            </ul>
                        </div>
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
<?php
$conn->close();
?>