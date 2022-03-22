<?php
include "config.php";


$sql = "INSERT INTO user_info_db (ac_num, name, phone, email, address, pan, balance)
VALUES ('80001', 'Akash Yadav', '9756732876', 'akashyadava23@email.com', 'Lilua ,Howrah', 'BAJPC4350N', '9400.00');";

$sql .= "INSERT INTO user_info_db (ac_num, name, phone, email, address, pan, balance)
VALUES ('', 'Laxmi Sharma', '9656268521', 'laxmisharmaa12@email.com', 'Belur,Howrah', 'DAJPC4150H', '9501.00');";

$sql .= "INSERT INTO user_info_db (ac_num, name, phone, email, address, pan, balance)
VALUES ('','Susmita Yadav', '9677568371', 'susmitayadava12@email.com', 'Dankuni,Hooghly', 'XGZFE7225L', '9900.00');";

$sql .= "INSERT INTO user_info_db (ac_num, name, phone, email, address, pan, balance)
VALUES ('', 'Aditya Yadav', '9964369187', 'adityayadave124@email.com', 'Gobra,Hooghli', 'CTBGP1606l', '40000.0');";

$sql .= "INSERT INTO user_info_db (ac_num, name, phone, email, address, pan, balance)
VALUES ('',  'Subhas Yadav', '9642487175', 'subhasyadava234@email.com', '133 Ganguly Street ', 'PEVFV4506Z', '3500.00');";

$sql .= "INSERT INTO user_info_db (ac_num, name, phone, email, address, pan, balance)
VALUES ('', 'Sangeeta Yadav', '9564543574', 'sangeetayadava657@email.com', 'Sapuipara,Howrah', 'UXPCL6880T', '3980.00');";

$sql .= "INSERT INTO user_info_db (ac_num, name, phone, email, address, pan, balance)
VALUES ('', 'Payal Singh', '9236263773', 'payalsingh@email.com', 'Alipur,Howrah', 'BAAPC4350A', '4000.00');";

$sql .= "INSERT INTO user_info_db (ac_num, name, phone, email, address, pan, balance)
VALUES ('', 'Kakali Mukherjee', '9752324357', 'kakalimukherjeea123@email.com', 'Rajarachendrapur, Hooghli', 'LQDTD5444M', '4050.00');";

$sql .= "INSERT INTO user_info_db (ac_num, name, phone, email, address, pan, balance)
VALUES ('', 'Renu Yadav', '9242235236', 'renuyadava239@email.com', 'Uttarpara,Howrah', 'YUGHJ2046V', '4100.00');";

$sql .= "INSERT INTO user_info_db (ac_num, name, phone, email, address, pan, balance)
VALUES ('', 'Laddu Rana', '9668423622', 'ladduranana@email.com', 'Belgoria,Hooghli', 'NLXBC1905Y', '4500.00');";


if ($conn->multi_query($sql) === TRUE) {
	echo "New record created successfully<br>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
