<!-- @format -->

1 ,Install xammp then place this project inside htdocs
2, Go to phpmyadmin click 'New' > 'User accounts'
3, Click 'edit priviliges' then click 'Change password'
4, type "p@ssword" then click 'Go'
5, Now go to xammp panel click Config in apache find "config.inc.php"
6, find this code then add type your "p@ssword" as value
$cfg['Servers'][$i]['password'] = 'p@ssword';
7,Now create database named 'db_test'
8, export my database located in Database folder
9, run http://localhost/Exam%20Test/page/

note po
if mayroon na po kayong exisitng na database at may password na po sya para di po hassle change nalang po yung sa under controller folder po MysqlCon.php

function SetDb(){
$this->Servname = "localhost";
$this->usr = "root";
$this->pass = "p@ssword"; //ito po
$this->dbname = "db_test"; //ito po
}
