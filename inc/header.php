<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP language</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
<style>
  *{
    box-sizing:border-box;
  }
body {
    margin:0px;
    padding:0px;
    font-size: 18px;
    line-height: 18px;
}
.php_block{
    width:850px;
    margin:0px auto;
}
.headeroption, .footeroption{
    background: rgb(56, 143, 117);
    color:white;
    font-size:30px;
    padding: 1px;
    text-align:center;
    text-shadow: 1px 1px 1px #000;
    margin:0px;
}
.content {
  border:1px solid #d2d3da;
  background:#ddd;
  min-height:500px;
  padding:12px;
  overflow: hidden;
  font-size:20px;
  line-height:20px;
}
input[type="text"],[type="email"],input[type="number"] {
    height: 25px;
    width: 253px;
    margin:5px;
}
input[type="reset"], input[type="submit"]{
    height: 30px;
    width: 70px;
}
textarea{width:257px;}
select{
  width: 212px;
  height: 30px;
  font-size:18px;
}
#myform{
  width:400px;
  border:1px solid #ffffff;
  padding:10px;
  margin-top:6px;
}
.myform{
  width:400px;
  border:1px solid #ffffff;
  padding:10px;
  margin-top:6px;
}
.tblone{
  width:420px;
  border:1px solid #fff;
  margin:20px 0;
}
.tblone td{
  padding:5px 10px;
}
table.tblone tr:nth-child(2n+1){
  background:#fff;
  height:30px;
}
table.tblone tr:nth-child(2n){
  background:#f1f1f1;
  height:30px;
}
.time{
  float:right;
}
</style>
</head>
<body>
    <div class="php_block">
        <div class="headeroption">
            <h2>Object-Oriented PHP</h2>
        </div>
        <div class="content">
<hr/>
    Time:
    <span class="time">
      <?php
          date_default_timezone_set('Asia/Dhaka');
          echo date("h:i:s A")."<br/>";
      ?>
    </span>
<hr/>