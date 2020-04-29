<?php 
	require_once 'connect.php';	
	$sql = "select * from kk where id =1 ";
	$results = mysql_query($sql);
	$row = mysql_fetch_assoc($results);
	$a1 = $row['a1'];
	//echo($a1.",");
	$a2 = $row['a2'];
	//echo($a2.",");
	$a3 = $row['a3'];
	//echo($a3.",");
	$a4 = $row['a4'];
	//echo($a4.",");
	$a5 = $row['a5'];
	//echo($a5.",");
	$a6 = $row['a6'];  
	//echo($a6);

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>智能家居</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet"  href="css/m980.css" media="screen and (max-width: 980px)">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
	<style type="text/css">
		
		@media screen and (max-width: 980px) {
		    body {
		        font-family: sans-serif;
		        font-size: 18px;
		        background: #363636;
		    }
		   header{
		   		width: 100%;
				height: 100px;
				line-height: 100px;
				background: #363636;	
			}
		    h1{
		    	line-height: 100px;
		    	font-size: 40px;
		    }
		    .h_left{
				width: 30%;
				padding-left: 8%;
				line-height: 60px;
				float: left;
				margin-top: 3%
			}
			.h_right{
				width: 50%;
				float: left;
				line-height: 60px;
			}
		    ul{
				width: 100%;
				line-height: 100px;
			}
			.h_right ul li{
				display: inline-block;
				float: right;
			}
			.h_right ul li a{
				text-decoration: none;
				color: #fff;
				font-size: 1.5em
			}
			/**	-------------------------------------*/
			.content{
				height: 1200px;
				background: url('../img/1.png') no-repeat center bottom;
				background-size: cover; -moz-background-size: cover; 
			}
			.left{
				width: 35%;
				height: 100%;
				float: left;
			}
			.l1{
				width: 100%;
				height: 32%;
				background: url('../img/data.jpg');
			    background-size: cover;
			}
			#hour{
			    display: block;
				width: auto;
				font-size: 100px;
				font-weight: 700;
				color: #fff;
				cursor: default;
				padding-top: 25%;
				padding-left: 8%
			}
			#data{
			    display: block;
			    width: auto;
			    font-size: 30px;
			    font-weight: 700;
			    color:#fff;
			    cursor: default;
			    padding-left: 20%;
			    padding-top: 10%;
			}
			.l2{
				width: 100%;
				height: 25%;
				background: #76D06C;
			}
			.l2 .sun{
				display: block;
				padding-top: 25%;
				float: left;
				font-size: 8em
			}
			.l2 p{
				font-size: 5em;
				float: right;
				margin-right: 5%;
				margin-top: 30%;

			}
			.l3{
				width: 100%;
				height: 15%;
				background: #B134D8;
				font-size: 30px;
			}
			.l3 p:nth-child(1){
				float: left;
				margin-top: 20%;
				margin-left: 10%;
			}
			.l3 p:nth-child(2){
				float: left;
				margin-top: 17%;
				margin-left: 11%;
			}
			.l3 p:nth-child(3){
				float: left;
				margin-top: 20%;
				margin-left: 6%;
			}
			.l4{
				width: 100%;
				height: 15%;
				background: #0075FF;
				font-size: 30px;
			}
			.l4 p:nth-child(1){
				float: left;
				margin-top: 20%;
				margin-left: 10%;
			}
			.l4 p:nth-child(2){
				float: left;
				margin-top: 17%;
				margin-left: 17%;
			}
			.l4 p:nth-child(3){
				float: left;
				margin-top: 20%;
				margin-left: 10%;
			}
			.l5{
				width: 100%;
				height: 13%;
				background: #013692;
			}
			.l5 p:nth-child(1){
				float: left;
				font-size: 15px;
				margin-left: 5%;
				margin-top: 15%
			}
			.l5 p:nth-child(1) span{
				display: block;
				font-size: 30px;
				font-weight: 700;
				margin-left: 1%;
				margin-bottom: 5%;
			}
			.l5 p:nth-child(2){
				font-size: 30px;
				float: right;
				margin-right: 18%;
				margin-top: 20%;
			}
			.right{
				width: 65%
			}
			.wrap_right{
				width: 60%;
				height: 90%;
				margin-left: 21%;
				margin-top: 15%;
			}
			.r1{
				width: 100%;
				height: 16%;
				color: #1E9FFF;
			}
			.r1 span{
				color:#333;
				font-size: 40px;
				font-weight: 1000;
				font-family: "";
			}
			.r1 p{
				display: inline-block;
				margin-left: 30%;
				float: right;
			}
			.r1 p button{
				width: 140px;
				height: 70px;
				border-radius: 5px;
				background: #5FB878;
				color: #fff;
				font-size: 30px;
				line-height: 40px;
				position: relative;
				bottom: 55px
			}
			/*------------------------------------------*/
			footer{
				height: 75px;
				width: 100%;
				background: #363636;
				padding-top: 0.3%;
				color: #fff
			}
			footer p{
				letter-spacing: 2px;
				margin-left: 35%;
				line-height: 75px;
			}
		}
	</style>
</head>
<body>
	<div class="wrap">
		<header>
			<div class="h_left">
				<img src="img/logo.png" width="100%" height="100%">
			</div>
			<div class="h_right">
				<ul>
					<li><a href="#">主 页</a></li>
					<li><a href="#">管 理</a></li>
					<li><a href="#">关 于</a></li>			
				</ul>
			</div>
		</header>
		
		<div class="content">
			<div class="left">
				<div class="l1">
					<span id="hour"></span>
					<span id="data"></span>
				</div>
				<div class="l2">
					<i class="fa fa-sun-o fa-4x pull-left sun"></i>
					<p>6&#176;</p>
				</div>
				<div class="l3">
					<p>周五</p>
					<p><i class="fa fa-sun-o fa-2x pull-left sun"></i></p>
					<p>5/25&#176;</p>
				</div>
				<div class="l4">
					<p>湿度</p>
					<p><i class="fa fa-thermometer-1  fa-2x pull-left sun"></i></p>
					<p>80%</p>
				</div>
				<div class="l5">
					<p>
						<span>PM2.5</span>
						空气质量指数
					</p>
					<p>42</p>
				</div>
			</div>
			<div class="right">
				<div class="wrap_right">
					<div class="r1">
						<span id="span">厨 房 灯</span>
						<?php  

							if($a1==1){
								echo "已开启";
							}else{
								echo "已关闭";
							}

						?>
						<p>
							<button id="a1">
								<?php  
									if($a1==1){
										echo "关 闭";
									}else{
										echo "开 启";
									}
								?>
							</button>
						</p>
					</div>
					<div class="r1">
						<span>客 厅 灯</span>
						<?php  

							if($a2==1){
								echo "已开启";
							}else{
								echo "已关闭";
							}

						?>
						<p>
							<button id="a2">
								<?php  
									if($a2==1){
										echo "关 闭";
									}else{
										echo "开 启";
									}
								?>
							</button>
						</p>
					</div>
					<div class="r1">
						<span>卧 室 灯</span>
						<?php  

							if($a3==1){
								echo "已开启";
							}else{
								echo "已关闭";
							}

						?>
						<p>
							<button id="a3">
								<?php  
									if($a3==1){
										echo "关 闭";
									}else{
										echo "开 启";
									}
								?>
							</button>
						</p>
					</div>
					<div class="r1">
						<span>&nbsp;&nbsp;&nbsp; 门</span>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<?php  

							if($a4==1){
								echo "已开启";
							}else{
								echo "已关闭";
							}

						?>
						<p>
							<button id="a4">
								<?php  
									if($a4==1){
										echo "关 闭";
									}else{
										echo "开 启";
									}
								?>
							</button>
						</p>
					</div>
					<div class="r1">
						<span>加 湿 器</span>
						<?php  

							if($a5==1){
								echo "已开启";
							}else{
								echo "已关闭";
							}

						?>
						<p>
							<button id="a5">
								<?php  
									if($a5==1){
										echo "关 闭";
									}else{
										echo "开 启";
									}
								?>
							</button>
						</p>
					</div>
					<div class="r1">
						<span>摄 像 头</span>
						<?php  

							if($a1==6){
								echo "已开启";
							}else{
								echo "已关闭";
							}

						?>
						<p>
							<button id="a6">
								<?php  
									if($a6==1){
										echo "关 闭";
									}else{
										echo "开 启";
									}
								?>
							</button>
						</p>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<p>&copy; 2018 智能家居. All Rights Reserved. </p>
		</footer>
		<center>
			<div id="b1"><?php echo $a1; ?></div>
			<div id="b2"><?php echo $a2; ?></div>
			<div id="b3"><?php echo $a3; ?></div>
			<div id="b4"><?php echo $a4; ?></div>
			<div id="b5"><?php echo $a5; ?></div>
			<div id="b6"><?php echo $a6; ?></div>
		</center>
	</div>
</body>
</html>