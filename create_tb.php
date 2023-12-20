<?php 
require 'connect.php'; 


// creating usertable

$usertable="create table if not exists user_table(
id int(10) not null auto_increment primary key,
member_id varchar(100) not null,
fullname varchar(200) not null,
username varchar(200) not null,
email varchar(200) not null,
phone varchar(200) not null,
country varchar(200) not null,
password varchar(200) not null,
ref_id varchar(200) not null,
demo varchar(100) not null,
spot varchar(100) not null,
ref_wallet varchar(100) not null,
ref_paid varchar(100) not null,
reg_date varchar(100) not null,
verify_code varchar(100) not null,
email_status varchar(100) not null,
kyc_status varchar(100) not null,
withdrawal_status varchar(100) not null,
password_verify varchar(100) not null,
withdraw_mode varchar(100) not null,
message text not null,
access varchar(100) not null)ENGINE=InnoDB;";

$create_user=$conn->query($usertable);

//  CREATING ADMIN TABLE

$admin="create table if not exists admin_table(
id int(10) not null auto_increment primary key,
name varchar(200) not null,
date varchar(100) not null,
email varchar(200) not null,
password varchar(100) not null,
access varchar(100) not null,
reg_mode varchar(100) not null,
log_mode varchar(100) not null,
withdraw_mode varchar(100) not null,
deposit_mode varchar(100) not null,
update_mode varchar(100) not null,
level varchar(100) not null)ENGINE=InnoDB;";

$create_admin=$conn->query($admin);

if($create_admin){
	$pass1="1234567890";
	$pass2="1234567890";

	$password=hash('sha256',$pass1);
	$password2=hash('sha256',$pass2);
	$date=date("d-m-y, h:i:s");

	$insert_admin="insert into admin_table(name,date,email,password,access,reg_mode,log_mode,withdraw_mode,deposit_mode,update_mode,level)values(
	'fijero','$date','emmanueluzoma969@gmail.com','$password','granted','true','true','true','true','true','super_admin')";
$admin_done=$conn->query($insert_admin);

// 	$insert_admin2="insert into admin_table(name,date,email,password,access,reg_mode,log_mode,withdraw_mode,deposit_mode,update_mode,level)values(
// 	'Admin','$date','lennoxcapitalinvestmentcompany@gmail.com','$password2','granted','true','true','true','true','true','super_admin')";
// 	$admin_done2=$conn->query($insert_admin2);

 }


// CREATING DEPOSIT TABLE

$deposit="create table if not exists deposit_table(
id int(10) not null auto_increment primary key,
name varchar(200) not null,
email varchar(200) not null,
date varchar(100) not null,
amount varchar(100) not null,
coin varchar(100) not null,
tx_id varchar(100) not null,
ref_profit varchar(100) not null,
status varchar(100) not null,
depositor_id varchar(100) not null)ENGINE=InnoDB;";

$create_deposit=$conn->query($deposit);


// CREATING WITHDRAWAL TABLE

$withdraw="create table if not exists withdrawal_table(
id int(10) not null auto_increment primary key,
name varchar(200) not null,
email varchar(200) not null,
date varchar(100) not null,
type varchar(100) not null,
wallet varchar(200) not null,
amount varchar(100) not null,
coin varchar(100) not null,
status varchar(100) not null,
withdraw_id varchar(100) not null)ENGINE=InnoDB;";

$create_withdraw=$conn->query($withdraw);


// CREATING CONTACT TABLE

$contact="create table if not exists contact_table(
id int(10) not null auto_increment primary key,
name varchar(200) not null,
email varchar(200) not null,
date varchar(100) not null,
message varchar(100) not null)ENGINE=InnoDB;";

$create_contact=$conn->query($contact);


// CREATING TRADING TABLE

$invest="create table if not exists trading_table(
id int(10) not null auto_increment primary key,
name varchar(100) not null,
email varchar(100) not null,
date varchar(100) not null,
account_type varchar(100) not null,
amount varchar(100) not null,
trade_market varchar(100) not null,
trade_signal varchar(100) not null,
user_percent varchar(100) not null,
strike_rate varchar(100) not null,
plan varchar(100) not null,
buy_sell varchar(100) not null,
profit varchar(100) not null,
total_return varchar(100) not null,
accept_time varchar(100) not null,
completed_time varchar(100) not null,
duration varchar(100) not null,
percent_return varchar(100) not null,
status varchar(100) not null,
trader_id varchar(100) not null)ENGINE=InnoDB;";

$create_invest=$conn->query($invest);


// CREATING KYC VERIFICATION TABLE

$kyc="create table if not exists kyc_table(
	id int(10) not null auto_increment primary key,
	name varchar(200) not null,
	email varchar(200) not null,
	date varchar(200) not null,
	id_type varchar(100) not null,
	id_number varchar(100) not null,
	expiry_date varchar(100) not null,
	address varchar(300) not null,
	post_code varchar(100) not null,
	city varchar(200) not null,
	state varchar(100) not null,
	country varchar(100) not null,
	img_name varchar(200) not null,
	status varchar(200) not null,
	verify_id varchar(100) not null)ENGINE=InnoDB;";
	
	$create_kyc=$conn->query($kyc);

?>

