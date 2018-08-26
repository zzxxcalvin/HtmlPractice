<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>CDPA全球資訊網-宿舍網路 IP查詢</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/ip.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<div class="topnav" id="myTopnav">
			  <a class="active" href="index.html">首頁</a>
			  <a href="course.html">例行課程</a>
			  <a href="lookUpIP.php">IP查詢</a>
			  <a href="http://dormnet119.cdpa.nsysu.edu.tw:1030/CDPA/CDPA_maintenance_system">宿網報修</a>
			  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			  </a>
		</div>


			<!-- Header -->
			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>IP 查詢</h2>
							<p>Look up IP</p>
						</header>
						<form  action="lookUpIP.php" method="GET">
						<select name="dorm">
						<option value="0">棟別</option>
						<option value="1">翠亨A棟 / Dorm A</option>
                                                <option value="2">翠亨B棟 / Dorm B</option>
                                                <option value="3">翠亨C棟 / Dorm C</option>
                                                <option value="4">翠亨D棟 / Dorm D</option>
                                                <option value="5">翠亨E棟 / Dorm E</option>
                                                <option value="6">翠亨F棟 / Dorm F</option>
                                                <option value="7">翠亨G棟 / Dorm G</option>
                                                <option value="8">翠亨H棟 / Dorm H</option>
                                                <option value="9">翠亨L棟 / Dorm L</option>
                                                <option value="10">武嶺一村 / Dorm 1</option>
                                                <option value="11">武嶺二村 / Dorm 2</option>
                                                <option value="12">武嶺三村 / Dorm 3</option>
                                                <option value="13">武嶺四村 / Dorm 4</option>
						</select>
						</br>
						<center><input type="submit" value="送出 / SUBMIT"></input></center>
						</form>
					</div>
				</div>

				<center>
				<pre>
<?php
					switch( $_GET['dorm']){
					case 1:
						$handle = fopen('dormIP/DormA_IP.txt', "r");
						$filename='dormIP/DormA_IP.txt';
						break;
					case 2:
						$handle = fopen('dormIP/DormB_IP.txt', "r");
                                                $filename='dormIP/DormB_IP.txt';
						break;
                                        case 3:
                                                $handle = fopen('dormIP/DormC_IP.txt', "r");
                                                $filename='dormIP/DormC_IP.txt';
						break;
                                        case 4:
                                                $handle = fopen('dormIP/DormD_IP.txt', "r");
                                                $filename='dormIP/DormD_IP.txt';
						break;
                                        case 5:
                                                $handle = fopen('dormIP/DormE_IP.txt', "r");
                                                $filename='dormIP/DormE_IP.txt';
						break;
                                        case 6:
                                                $handle = fopen('dormIP/DormF_IP.txt', "r");
                                                $filename='dormIP/DormF_IP.txt';
						break;
                                        case 7:
                                                $handle = fopen('dormIP/DormG_IP.txt', "r");
                                                $filename='dormIP/DormG_IP.txt';
						break;
                                        case 8:
                                                $handle = fopen('dormIP/DormH_IP.txt', "r");
                                                $filename='dormIP/DormH_IP.txt';
                                                break;
                                        case 9:
                                                $handle = fopen('dormIP/DormL_IP.txt', "r");
                                                $filename='dormIP/DormL_IP.txt';
                                                break;
                                        case 10:
                                                $handle = fopen('dormIP/Dorm1_IP.txt', "r");
                                                $filename='dormIP/Dorm1_IP.txt';
                                                break;
                                        case 11:
                                                $handle = fopen('dormIP/Dorm2_IP.txt', "r");
                                                $filename='dormIP/Dorm2_IP.txt';
                                                break;
                                        case 12:
                                                $handle = fopen('dormIP/Dorm3_IP.txt', "r");
                                                $filename='dormIP/Dorm3_IP.txt';
                                                break;
                                        case 13:
                                                $handle = fopen('dormIP/Dorm4_IP.txt', "r");
                                                $filename='dormIP/Dorm4_IP.txt';
                                                break;

					}
					$contents = '';
					if ($handle) {
//					      while (!feof($handle)) {
					       $contents .= fread($handle,filesize($filename)); //顯示100字
					        echo $contents;
//					          exit;
//					         }
				              fclose($handle);
			        	    }
				?>
				</pre></center>

			<!-- Footer -->



		<!-- Scripts -->
		<script>
		function myFunction() {
			var x = document.getElementById("myTopnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			 }
		}
		</script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
