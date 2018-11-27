 <?php
$servername = "localhost";
$username = "root";
$password = "bitnami";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE rush_store";

if ($conn->query($sql) === TRUE) {

    echo "Database created successfully";
    mysqli_select_db( $conn,'rush_store' );
    //start creating tables
    $sql = "CREATE TABLE `categories` (`Brand` text NOT NULL, `ID` int(11) NOT NULL, `Dev_type` text NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

		if ($conn->query($sql) === TRUE) {
			echo "categories created successfully";
		}
		else
		{
			echo "NO!". $conn->error;;
		}
 	$sql = "CREATE TABLE `product` (`ID` int(11) NOT NULL,`Name` text NOT NULL,`Price` int(8) NOT NULL,`Quantity` int(3) NOT NULL,`Categories` text NOT NULL,`Image` text NOT NULL,`Dev_type` text NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
 	if ($conn->query($sql) === TRUE) {
			echo "products created successfully";
		}
		else
		{
			echo "NO!". $conn->error;;
		}

	$sql = "CREATE TABLE `users` (`ID` int(11) NOT NULL COMMENT 'Users unique ID.',`Name` text NOT NULL,`Surname` text NOT NULL,`Username` text NOT NULL,`Email` text NOT NULL,`Phone_number` text NOT NULL,`Password` varchar(255) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

	if ($conn->query($sql) === TRUE) {
			echo "Users created successfully\n";
		}
		else
		{
			echo "NO!". $conn->error;;
		}

	$sql = "ALTER TABLE `categories` ADD UNIQUE KEY `ID` (`ID`);";

	if ($conn->query($sql) === TRUE) {
			echo "ID's made unique successfully\n";
		}
		else
		{
			echo "NO!". $conn->error;;
		}

	$sql = "ALTER TABLE `users` ADD UNIQUE KEY `ID` (`ID`);";

	if ($conn->query($sql) === TRUE) {
			echo "ID's made unique successfully\n";
		}
		else
		{
			echo "NO!". $conn->error;;
		}

	$sql = "ALTER TABLE `product` ADD UNIQUE KEY `ID` (`ID`);";

	if ($conn->query($sql) === TRUE) {
			echo "ID's made unique successfully\n";
		}
		else
		{
			echo "NO!". $conn->error;;
		}

	$sql = "ALTER TABLE `product` MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;";
	$conn->query($sql);
	$sql = "ALTER TABLE `categories` CHANGE `ID` `ID` INT(11) NOT NULL AUTO_INCREMENT;";
	$conn->query($sql);
	$sql = "ALTER TABLE `users` MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Users unique ID.', AUTO_INCREMENT=3;";
	$conn->query($sql);
	$sql = "
	INSERT INTO `users` (`ID`, `Name`, `Surname`, `Username`, `Email`, `Phone_number`, `Password`) VALUES
(1, 'Bamm', 'Wham', 'Bammwham', 'bamm@gg.com', '0123456789', 'bamm'),
(2, 'Bam', 'Wham', 'Bammwham', 'bamm@gg.com', '0123456789', 'bamm'),
(3, 'Tutu', 'lew', 'Tutu', 'Tutu@wegg.com', '0112314214', '12345Tutu');";
	$conn->query($sql);
	
	$sql = "
	INSERT INTO `categories` (`Brand`, `ID`, `Dev_type`) VALUES
('Iphone', 1, 'Smartphone'),
('Iphone', 2, 'Tablet'),
('Sasmsung', 3, 'Tablet'),
('Sasmsung', 4, 'Smartphone'),
('Sony', 5, 'Smartphone'),
('Sony', 6, 'Tablet'),
('Hauwei', 7, 'Smartphone'),
('Hauwei', 8, 'Smartphone'),
('LG', 9, 'Smartphone'),
('LG', 10, 'Tablet');";

	$conn->query($sql);

	$sql = "
	INSERT INTO `product` (`ID`, `Name`, `Price`, `Quantity`, `Categories`, `Image`, `Dev_type`) VALUES
(1, 'Samsung Galaxy Note 8 - Midnight Black', 16999, 10, 'Samsung', 'https://media.takealot.com/covers_tsins/49730729/8806088931333-1-zoom.jpg?1519717656', 'Smartphone'),
(2, 'Samsung Galaxy Grand Prime Pro 16GB - Gold', 1899, 21, 'Samsung', 'https://media.takealot.com/covers/covers_tsins/54786741/8801643082680-1-zoom.jpg?1526881747', 'Smartphone'),
(3, 'Apple iPhone 6 32GB - Space Grey', 5699, 12, 'Iphone', 'https://media.takealot.com/covers_tsins/47356744/190198429094-1-flist.jpg', 'Smartphone'),
(4, 'Apple iPad (6th gen) 9.7\" Wi-Fi 32GB - Space Grey ', 5499, 6, 'Iphone', 'https://media.takealot.com/covers_tsins/52737015/190198648884-1-flist.jpg', 'Tablet'),
(5, 'iPhone 6S 32GB - Space Grey CPO', 5399, 7, 'Iphone', 'https://media.takealot.com/covers_tsins/52737015/190198648884-1-flist.jpg', 'Smartphone'),
(6, 'Apple iPhone 8 64GB - Space Grey', 13215, 4, 'Iphone', 'https://media.takealot.com/covers_tsins/49962358/IPHONE%20RIGHT-flist.jpg', 'Smartphone'),
(7, 'Apple iPad Mini 4 7.9\" 128GB WiFi - Gold', 6699, 12, 'Iphone', 'https://media.takealot.com/covers_tsins/43746407/MK9Q2HCA-flist.jpg', 'Tablet'),
(8, 'Apple iPhone X 256GB - Space Grey', 21999, 23, 'Iphone', 'https://media.takealot.com/covers_tsins/50339241/190198458018-1-flist.jpg', 'Smartphone'),
(9, 'Huawei P Smart 32GB LTE - Black', 3499, 17, 'Huawei', 'https://media.takealot.com/covers_tsins/52218030/6901443212446-3-flist.jpg', 'Smartphone'),
(10, 'Huawei P20 Lite 64GB LTE- Blue', 5699, 8, 'Huawei', 'https://media.takealot.com/covers_tsins/54783164/6901443218141-1-flist.jpg', 'Smartphone'),
(11, 'Huawei Y7 (2018) 16GB LTE - Black', 2899, 5, 'Huawei', 'https://media.takealot.com/covers_tsins/53028364/6901443221011-1-flist.jpg', 'Smartphone'),
(12, 'Huawei Y5 Prime 16GB 4G - Blackv', 1999, 3, 'Huawei', 'https://media.takealot.com/covers_tsins/54908031/6901443226481-1-flist.jpg', 'Smartphone'),
(13, 'Huawei P20 Pro Smartphone - Twilight (Vodacom)', 15999, 6, 'Huawei', 'https://media.takealot.com/covers_tsins/54726310/6901443224944-1-flist.jpg', 'Smartphone'),
(14, 'Huawei Mediapad T1 10\" Tablet - White', 2800, 8, 'Huawei', 'https://media.takealot.com/covers_tsins/43526927/6901443064823-1-flist.jpg', 'Tablet'),
(15, 'Huawei Mediapad T310 9.6\" WiFi & LTE Tablet - Gold', 2800, 8, 'Huawei', 'https://media.takealot.com/covers_tsins/50015271/6901443190034-1-flist.jpg', 'Tablet'),
(16, 'Sony Xperia XA 1 Ultra Smartphone - Black', 3999, 5, 'Sony', 'https://media.takealot.com/covers_tsins/49872226/7311271589464-1-flist.jpg', 'Smartphone'),
(17, 'Sony Xperia L1 Dual Sim 16GB Smartphone', 2599, 7, 'Sony', 'https://media.takealot.com/covers_tsins/47983145/7311271589105-1-flist.jpg', 'Smartphone'),
(18, 'Sony Xperia XA1 DualSim 32GB LTE - Black', 2799, 8, 'Sony', 'https://media.takealot.com/covers_tsins/49757518/7311271599432-1-flist.jpg', 'Smartphone'),
(19, 'LG G7 ThinQ 64GB Smartphone (Vodacom) + Free Wireless Headset', 11499, 8, 'LG', 'https://media.takealot.com/covers_tsins/55278356/55278356-1-flist.jpeg', 'Smartphone'),
(20, 'LG Q7 LTE Smartphone with LG Tone Series Headset', 5199, 7, 'LG', 'https://media.takealot.com/covers_tsins/55277712/MPTAL00568809-1-flist.jpg', 'Smartphone'),
(21, 'LG G6 Smartphone - Platinum', 7999, 8, 'LG', 'https://www.takealot.com/lg-g6-smartphone-platinum/PLID46989091', 'Smartphone'),
(22, 'LG Q6 LTE Smartphone', 4999, 5, 'LG', 'https://media.takealot.com/covers_tsins/51013961/58762485585-1-flist.jpg', 'Smartphone'),
(23, 'Samsung Galaxy Tab A 10.1\" with S Pen WiFi Tablet - White', 4199, 23, 'Samsung', 'https://media.takealot.com/covers_tsins/46873903/46873903-1-flist.jpg', 'Tablet');";

	$conn->query($sql);
	if ($conn->query($sql) === TRUE) {
			echo "users inserted successfully\n";
		}
		else
		{
			echo "NO!". $conn->error;;
		}
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?> 
