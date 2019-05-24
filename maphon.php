<?php
  $con = mysqli_connect("localhost", "root", "", "map");
	mysqli_set_charset($con, "utf8");
  $strSQL = "SELECT * FROM 'marker' WHERE 'mark_id' ";
  $objQuery = mysqli_query($con,$strSQL);
?>


<html lang="th"><head>
	<meta charset="UTF-8">
	<title>แผนที่</title>
	<meta name="description" content="A.P. Honda ผู้นำด้านจักรยานยนต์อันดับ 1 พร้อมให้คุณค้นหาประสบการณ์ใหม่ ได้แล้ววันนี้ ที่ศูนย์ฮอนด้าทั่วประเทศไทย">
	<meta name="keywords" content="A.P. Honda,AP Honda,Honda Motorcycle Thailand,Honda,Big bike,Bigwing,Motorcycle,Freedom,Automatic,PGM-Fi,รถจักรยายนต์,มอไซต์,มอเตอร์ไซต์,mocyc,MocycThailand,รถ มอเตอร์ไซค์ ใหม่,มอเตอร์ไซค์รุ่นใหม่,สมัครงาน,สมัครงาน Honda,สมัครงาน A.P. Honda,สมัครงาน เอพี ฮอนด้า,สมัครงาน เอ.พี. ฮอนด้า,APHonda">
	<meta property="og:title" content="มอเตอร์ไซค์ Honda หลากหลายรุ่น หน้าหลัก | A.P. Honda">
	<meta property="og:description" content="A.P. Honda ผู้นำด้านจักรยานยนต์อันดับ 1 พร้อมให้คุณค้นหาประสบการณ์ใหม่ ได้แล้ววันนี้ ที่ศูนย์ฮอนด้าทั่วประเทศไทย">
    <meta property="og:image" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1.0, user-scalable=no">
	<meta name="csrf-token" content="PhE8OHElXW9DVqFwavOf1yRIdxZuIjjsh1WbNPNU">
	<link rel="shortcut icon" href="https://www.aphonda.co.th/honda2017/asset/frontend/images/logo.png" type="image/x-icon">
		<link rel="canonical" href="https://www.aphonda.co.th/honda2017"> 
		
	<link rel="stylesheet" type="text/css" href="https://www.aphonda.co.th/honda2017/asset/frontend/style/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="https://www.aphonda.co.th/honda2017/asset/frontend/style/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://www.aphonda.co.th/honda2017/asset/frontend/style/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="https://www.aphonda.co.th/honda2017/asset/frontend/style/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="https://www.aphonda.co.th/honda2017/asset/frontend/style/css/jquery.jscrollpane.css">
	<link rel="stylesheet" type="text/css" href="https://www.aphonda.co.th/honda2017/asset/frontend/style/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="https://www.aphonda.co.th/honda2017/asset/frontend/style/css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script type="text/javascript" id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflTZdOF2/www-widgetapi.js" async=""></script><script src="https://www.youtube.com/iframe_api"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-30210512-3"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	//   gtag('config', 'UA-30210512-3');
	  	gtag('config', 'UA-30210512-3', {
			'custom_map': {'dimension1': 'line_id'}
		});
	</script>
	<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html {
        height: 100%;
        margin: 0;
        padding: 0;
		text-align: center;
      }

      #map {
        height: 500px;
        width: 600px;
      }
    </style>
</head>
<body style="" class="page_home">
		
		<div class="background-gradient-grey">
			
				<!--findshop-->
                <div class="findshop">
				<div class="container padding-top-10">
					<div class="title">
						<img src="https://www.aphonda.co.th/honda2017/asset/frontend/images/head_title.png" alt="ค้นหาร้านค้าผู้แทนจำหน่าย" class="head">
						<img src="https://www.aphonda.co.th/honda2017/asset/frontend/images/icon_findshop.png" alt="ค้นหาร้านค้าผู้แทนจำหน่าย" class="icon_title">
						<h4>หจก.ปรีชาพานิชย์ร้อยเอ็ด ทั้ง 19 สาขา</h4>
					</div>
					<div class="mapandfind">
						<div class="left">
							<div class="location-map">
							<div id="map"></div>
    <script>
      function initMap() {
			var mapOptions = {
			  center: {lat: 16.060283, lng: 103.653983},
			  zoom: 22,
			}
				
			var maps = new google.maps.Map(document.getElementById("map"),mapOptions);
			
			var marker1 = new google.maps.Marker({
			   position: new google.maps.LatLng(16.060283, 103.653983),
			   map: maps,
			   title: 'ปรีชาพานิชย์ร้อยเอ็ด สาขาสุริเดชบำรุง',
			   icon: 'https://www.aphonda.co.th/honda2017/asset/frontend/images/logo.png',
			});
			// var info = new google.maps.InfoWindow({
			// 	content : '<div style="font-size: 25px;color: red">สาขา สุริเดชบำรุง <br> โทร : 043-513974</div>'
			// });

				var marker2 = new google.maps.Marker({
	   		position: new google.maps.LatLng(16.053653, 103.649488),
	   		map: maps,
	   		title: 'ปรีชาพานิชย์ร้อยเอ็ด สาขาเทวาภิบาล',
	   		icon: 'https://www.aphonda.co.th/honda2017/asset/frontend/images/logo.png',
			});
			// var info = new google.maps.InfoWindow({
			// 	content : '<div style="font-size: 25px;color: red">สาขาเทวาภิบาล <br> โทร : 043-515728</div>'
			// });

			var marker3 = new google.maps.Marker({
	   		position: new google.maps.LatLng(16.059625, 103.656923),
	   		map: maps,
	   		title: 'ปรีชาพานิชย์ร้อยเอ็ด สาขาเพลินจิต',
	   		icon: 'https://www.aphonda.co.th/honda2017/asset/frontend/images/logo.png',
			});
			// var info = new google.maps.InfoWindow({
			// 	content : '<div style="font-size: 25px;color: red">สาขาเพลินจิต <br> โทร : 043-515769</div>'
			// });

			var marker4 = new google.maps.Marker({
	   		position: new google.maps.LatLng(16.068061, 103.649852),
	   		map: maps,
	   		title: 'ปรีชาพานิชย์ร้อยเอ็ดสำนักงานใหญ่',
	   		icon: 'https://www.aphonda.co.th/honda2017/asset/frontend/images/logo.png',
			});
			// var info = new google.maps.InfoWindow({
			// 	content : '<div style="font-size: 25px;color: red">สำนักงานใหญ่ <br> โทร : 043-511313</div>'
			// });

			var marker5 = new google.maps.Marker({
	   		position: new google.maps.LatLng(16.297192, 103.977882),
	   		map: maps,
	   		title: 'ปรีชาพานิชย์ร้อยเอ็ด สาขาโพนทอง',
	   		icon: 'https://www.aphonda.co.th/honda2017/asset/frontend/images/logo.png',
			});

			var marker6 = new google.maps.Marker({
	   		position: new google.maps.LatLng(15.839222, 103.556345),
	   		map: maps,
	   		title: 'ปรีชาพานิชย์ร้อยเอ็ด สาขาจตุรพักตรพิมาน',
	   		icon: 'https://www.aphonda.co.th/honda2017/asset/frontend/images/logo.png',
			});

			var marker7 = new google.maps.Marker({
	   		position: new google.maps.LatLng(15.664920, 103.578863),
	   		map: maps,
	   		title: 'ปรีชาพานิชย์ร้อยเอ็ด สาขาเกษตรวิสัย',
	   		icon: 'https://www.aphonda.co.th/honda2017/asset/frontend/images/logo.png',
			});

			var marker8 = new google.maps.Marker({
	   		position: new google.maps.LatLng(16.136977, 103.624996),
	   		map: maps,
	   		title: 'ปรีชาพานิชย์ร้อยเอ็ด สาขาจังหาร',
	   		icon: 'https://www.aphonda.co.th/honda2017/asset/frontend/images/logo.png',
			});

			var marker9 = new google.maps.Marker({
	   		position: new google.maps.LatLng(15.681202, 104.111181),
	   		map: maps,
	   		title: 'ปรีชาพานิชย์ร้อยเอ็ด สาขาพนมไพร',
	   		icon: 'https://www.aphonda.co.th/honda2017/asset/frontend/images/logo.png',
			});

			var marker10 = new google.maps.Marker({
	   		position: new google.maps.LatLng(15.636128, 103.345899),
	   		map: maps,
	   		title: 'ปรีชาพานิชย์ร้อยเอ็ด สาขาปทุมรัตต์',
	   		icon: 'https://www.aphonda.co.th/honda2017/asset/frontend/images/logo.png',
			});

			var marker11 = new google.maps.Marker({
	   		position: new google.maps.LatLng(16.329338, 103.770163),
	   		map: maps,
	   		title: 'ปรีชาพานิชย์ร้อยเอ็ด สาขาโพธิ์ชัย',
	   		icon: 'https://www.aphonda.co.th/honda2017/asset/frontend/images/logo.png',
			});

			var marker12 = new google.maps.Marker({
	   		position: new google.maps.LatLng(15.845071, 103.878270),
	   		map: maps,
	   		title: 'ปรีชาพานิชย์ร้อยเอ็ด สาขาอาจสามารถ',
	   		icon: 'https://www.aphonda.co.th/honda2017/asset/frontend/images/logo.png',
			});

			var marker13 = new google.maps.Marker({
	   		position: new google.maps.LatLng(15.823215, 103.719597),
	   		map: maps,
	   		title: 'ปรีชาพานิชย์ร้อยเอ็ด สาขาเมืองสรวง',
	   		icon: 'https://www.aphonda.co.th/honda2017/asset/frontend/images/logo.png',
			});

			var marker14 = new google.maps.Marker({
	   		position: new google.maps.LatLng(15.476621, 103.987473),
	   		map: maps,
	   		title: 'ปรีชาพานิชย์ร้อยเอ็ด สาขาโพนทราย',
	   		icon: 'https://www.aphonda.co.th/honda2017/asset/frontend/images/logo.png',
			});

			var marker15 = new google.maps.Marker({
	   		position: new google.maps.LatLng(15.603353, 103.799739),
	   		map: maps,
	   		title: 'ปรีชาพานิชย์ร้อยเอ็ด สาขาสุวรรณภูมิ',
	   		icon: 'https://www.aphonda.co.th/honda2017/asset/frontend/images/logo.png',
			});

			var marker16 = new google.maps.Marker({
	   		position: new google.maps.LatLng(16.039621, 103.751177),
	   		map: maps,
	   		title: 'ปรีชาพานิชย์ร้อยเอ็ด สาขาธวัชบุรี',
	   		icon: 'https://www.aphonda.co.th/honda2017/asset/frontend/images/logo.png',
			});

			var marker17 = new google.maps.Marker({
	   		position: new google.maps.LatLng(15.610387, 103.992694),
	   		map: maps,
	   		title: 'ปรีชาพานิชย์ร้อยเอ็ด สาขาหนองฮี',
	   		icon: 'https://www.aphonda.co.th/honda2017/asset/frontend/images/logo.png',
			});

			var marker18 = new google.maps.Marker({
	   		position: new google.maps.LatLng(15.989888, 103.490901),
	   		map: maps,
	   		title: 'ปรีชาพานิชย์ร้อยเอ็ด สาขาศรีสมเด็จ',
	   		icon: 'https://www.aphonda.co.th/honda2017/asset/frontend/images/logo.png',
			});



			var info = new google.maps.InfoWindow({
				content : '<div style="font-size: 25px;color: red">หจก.ปรีชาพานิชย์ร้อยเอ็ด <br> โทร : 043-513974</div>'
			});

			google.maps.event.addListener(marker1, 'click', function() {
				info.open(maps, marker1);
			});
			google.maps.event.addListener(marker2, 'click', function() {
				info.open(maps, marker2);
			});
			google.maps.event.addListener(marker3, 'click', function() {
				info.open(maps, marker3);
			});
			google.maps.event.addListener(marker4, 'click', function() {
				info.open(maps, marker4);
			});
			google.maps.event.addListener(marker5, 'click', function() {
				info.open(maps, marker5);
			});
			google.maps.event.addListener(marker6, 'click', function() {
				info.open(maps, marker6);
			});
			google.maps.event.addListener(marker7, 'click', function() {
				info.open(maps, marker7);
			});
			google.maps.event.addListener(marker8, 'click', function() {
				info.open(maps, marker8);
			});
			google.maps.event.addListener(marker9, 'click', function() {
				info.open(maps, marker9);
			});
			google.maps.event.addListener(marker10, 'click', function() {
				info.open(maps, marker10);
			});
			google.maps.event.addListener(marker11, 'click', function() {
				info.open(maps, marker11);
			});
			google.maps.event.addListener(marker12, 'click', function() {
				info.open(maps, marker12);
			});
			google.maps.event.addListener(marker13, 'click', function() {
				info.open(maps, marker13);
			});
			google.maps.event.addListener(marker14, 'click', function() {
				info.open(maps, marker14);
			});
			google.maps.event.addListener(marker15, 'click', function() {
				info.open(maps, marker15);
			});
			google.maps.event.addListener(marker16, 'click', function() {
				info.open(maps, marker16);
			});
			google.maps.event.addListener(marker17, 'click', function() {
				info.open(maps, marker17);
			});
			google.maps.event.addListener(marker18, 'click', function() {
				info.open(maps, marker18);
			});


		}
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAK3RgqSLy1toc4lkh2JVFQ5ipuRB106vU&callback=initMap" async defer></script>
							</div>
							
						</div>
					    <!-- <div class="right"> -->
							<!-- <form action="https://www.aphonda.co.th/honda2017/distributors" method="get" accept-charset="utf-8"> -->
								<!-- <label class="select select-default grey margin-bottom-15">	 -->
									<!-- คิวรี่สาขา  -->
									<!-- <select name="lmName1"> -->
									<!-- <option value="">***กรุณาเลือกสาขาที่ท่านต้องการ***</option> -->
										<!-- <?php
											// $con = mysqli_connect("localhost", "root", "", "map");
											// mysqli_set_charset($con, "utf8");

											// $str = "SELECT * FROM marker WHERE mark_id ";
											// $objQuery = mysqli_query($con,$str);
											// while($objResuut = mysqli_fetch_array($objQuery))
											// {
										?> -->
											<!-- <option value="<?$objResuut['mark_id']?>"><?=$objResuut['mark_id']." . ".$objResuut['sections'];?> </option>  -->
										 <!-- <?php //}	?> -->
		  						<!-- </select> -->
								<!-- /คิวรี่สาขา -->

								 <!-- <select id="province" name="province">
									<option value="0">***เลือกสาขาที่ท่านต้องการ***</option>
									<option value="01">***สาขาสุริยเดชบำรุง***</option>
									<option value="02">***สาขาเทวาภิบาล***</option>
									<option value="03">***สาขาโพนทอง***</option>
									<option value="04">***สาขาจตุรพักตรพิมาน***</option>
									<option value="05">***สาขาเกษตรวิสัย***</option>
									<option value="07">***สาขาเพลินจิต***</option>
									<option value="08">***สาขาจังหาร***</option>
									<option value="09">***สาขาพนมไพร***</option>
									<option value="10">***สาขาปทุมรัตต์***</option>
									<option value="11">***สาขาโพธิ์ชัย***</option>
									<option value="12">***สาขาอาจสามารถ***</option>
									<option value="13">***สาขาเมืองสรวง***</option>
									<option value="14">***สาขาโพนทราย***</option>
									<option value="15">***สาขาสุวรรณภูมิ***</option>
									<option value="16">***สาขาธวัชบุรี***</option>
									<option value="17">***สาขาหนองฮี***</option>
									<option value="18">***สาขาศรีสมเด็จ***</option>
									<option value="19">***สำนักงานใหญ่***</option>																												
								</select> -->
								<!-- </label> -->
								
								
								<!-- <button type="submit">
										<img src="https://www.aphonda.co.th/honda2017/asset/frontend/images/find-now-button.png" class="find-now-button" alt="ค้นหาเลย" value="<?$objResuut['mark_id']?>">
								</button> -->
							<!-- </form> -->
							
<!-- 							
							<div class="or">
								<hr class="boder-white"><p>หรือ</p><hr class="boder-white">
							</div> -->
							<!-- <a href="#" class="findfromlocation1 get_geo">
								<h4 class="left">ค้นหาจาก <br> ตำแหน่งของฉัน</h4>
								<img src="https://www.aphonda.co.th/honda2017/asset/frontend/images/findlocation.png" alt="ค้นหาจาก <br> ตำแหน่งของฉัน">
							</a> -->
						<!-- </div> -->
					</div>
				</div>
			</div>
	<!-- FOOTER -->
	<div class="wrap section">
		<!-- <footer class="footer">
			
			<div style="display:none;">
				<a href="#" onclick="gtag('event','test', {'line_id':'1593570'});">Google Dimension</a><br>
				<a href="#" onclick="gtag('event', 'aphonda', {'line_id': '9568745'});">TEST Google 2</a>
			</div>
		</footer> -->
	</div>
	
	  
  <script src="https://www.aphonda.co.th/honda2017/asset/backend/admin-lte/plugins/jQuery/jquery-2.2.3.min.js"></script>
  
  <script src="https://www.aphonda.co.th/honda2017/asset/backend/admin-lte/plugins/jQuery-TubePlayer-Plugin/jquery.tubeplayer.min.js"></script>

  
	<script src="https://www.aphonda.co.th/honda2017/asset/frontend/js/owl.carousel.min.js"></script>
	<script src="https://www.aphonda.co.th/honda2017/asset/frontend/js/main.js"></script>
	
	<script type="text/javascript">
		$(function() {
			$('#province').on('change', function() {
				$.ajax({
	          method: "POST",
	          url: "https://www.aphonda.co.th/honda2017/distributors/ajax-get-distributorsubcate",
	          data: {'cate_slug':this.value},
	          dataType: "JSON"
	      }).done(function(data){
	        if(data.length > 0){
	          $("#district option").remove();
	          $('#district').append($('<option>').text('เลือกอำเภอ/เขต').attr('value', 0));
	          for (var i = 0; i < data.length; i++) {
	            $('#district').append($('<option>').text(data[i]['title']).attr('value', data[i]['slug']));
	          }
	        }else{
	          $("#district option").remove();
	          $('#district').append($('<option>').text('เลือกอำเภอ/เขต').attr('value', 0));
	        }
	      });
			});
		});
	</script>

	<script type="text/javascript">
		$(function() {
			$('.get_geo').click(function(){
				getGeoLocation();
			});
		});

    var beaches = [
    	       	[
	  
      	    	[
	      	'หจก.ปรีชาพานิชย์ร้อยเอ็ด',
	      	16.05959619054399,
	      	103.65692149689144,
	      	544,
	      	           	'https://www.aphonda.co.th/honda2017/uploads/product_image/asset/image_default/thum_small.jpg'
	      	      	],
      	      	[
	      	'หจก.ปรีชาพานิชย์ร้อยเอ็ด',
	      	16.32940507699385,
	      	103.77015288042388,
	      	545,
	      	           	'https://www.aphonda.co.th/honda2017/uploads/product_image/asset/image_default/thum_small.jpg'
	      	      	],
      	     	[
	      	'หจก.ปรีชาพานิชย์ร้อยเอ็ด',
	      	13.7056607,
	      	100.4793997,
	      	546,
	      	           	'https://www.aphonda.co.th/honda2017/uploads/product_image/asset/image_default/thum_small.jpg'
	      	      	],
      	       	[
	      	'หจก.ปรีชาพานิชย์ร้อยเอ็ด',
	      	15.839195872189023,
	      	103.5563442071905,
	      	547,
	      	           	'https://www.aphonda.co.th/honda2017/uploads/product_image/asset/image_default/thum_small.jpg'
	      	      	],
      	    	[
	      	'หจก.ปรีชาพานิชย์ร้อยเอ็ด',
	      	16.137045928878674,
	      	103.62499439022852,
	      	548,
	      	           	'https://www.aphonda.co.th/honda2017/uploads/product_image/asset/image_default/thum_small.jpg'
	      	      	],
      	    	[
	      	'หจก.ปรีชาพานิชย์ร้อยเอ็ด',
	      	16.060278454214653,
	      	103.65397996063176,
	      	549,
	      	           	'https://www.aphonda.co.th/honda2017/uploads/product_image/asset/image_default/thum_small.jpg'
	      	      	],
      	      	[
	      	'หจก.ปรีชาพานิชย์ร้อยเอ็ด',
	      	15.681199082886081,
	      	104.11123389538102,
	      	550,
	      	           	'https://www.aphonda.co.th/honda2017/uploads/product_image/asset/image_default/thum_small.jpg'
	      	      	],
      	     	[
	      	'หจก.ปรีชาพานิชย์ร้อยเอ็ด',
	      	15.601924874465796,
	      	103.395546,
	      	551,
	      	           	'https://www.aphonda.co.th/honda2017/uploads/product_image/asset/image_default/thum_small.jpg'
	      	      	],
      	        	[
	      	'หจก.ปรีชาพานิชย์ร้อยเอ็ด',
	      	13.7056607,
	      	100.4793997,
	      	552,
	      	           	'https://www.aphonda.co.th/honda2017/uploads/product_image/asset/image_default/thum_small.jpg'
	      	      	] ];

    var map, infowindow;
    var circles = [];
    var markerArray = [];

    function initMap() {
    	map = new google.maps.Map(document.getElementById('map'), {
	      zoom: 10,
	      scrollwheel: false,
	      center: new google.maps.LatLng(16.058293, 103.650957),
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    });

      infowindow = new google.maps.InfoWindow();
      var bounds = new google.maps.LatLngBounds();
      var image = 'https://www.aphonda.co.th/honda2017/pin.png';
      var marker, i;

      for (i = 0; i < beaches.length; i++) {  
	      marker = new google.maps.Marker({
	        position: new google.maps.LatLng(beaches[i][1], beaches[i][2]),
	        map: map,
	        title: beaches[i][0],
	        zIndex: beaches[i][3],
	        // icon: image
	      });

	      google.maps.event.addListener(marker, 'click', (function(marker, i) {
	        return function() {
	          infowindow.setContent('<div class="content-location"><div class="img"><img src="'+beaches[i][4]+'" alt=""></div><div class="name-location"><p>'+beaches[i][0]+'</p></div><div class="lacation-map"><p>ขอเส้นทาง</p></div></div>');
	          infowindow.open(map, marker);
	        }
	      })(marker, i));

	      bounds.extend(marker.position);

	      markerArray.push(marker);
	    }

      if(beaches.length > 0){
	      map.fitBounds(bounds);
      }
    }

    function getGeoLocation(){
    	if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };

          removeAllcircles();
          createRadius(10000, pos);

          infowindow.setPosition(pos);
          infowindow.setContent('this Location.');
          infowindow.open(map);
          map.setCenter(pos);
        }, function() {
          handleLocationError(true, infowindow, map.getCenter());
        });
      } else {
        handleLocationError(false, infowindow, map.getCenter());
      }
    }

    function createRadius(dist, location) {
	    var myCircle = new google.maps.Circle({
        center: location,
        map: map,
        radius: dist,
        strokeColor: "#FF0000",
        strokeOpacity: 0.4,
        strokeWeight: 2,
        fillColor: "#FF0000",
        fillOpacity: 0.15
	    });
	    circles.push(myCircle);
	    var myBounds = myCircle.getBounds();
	    
	    // for(var i=markerArray.length;i--;){
     //   	if(!myBounds.contains(markerArray[i].getPosition()))
     //   	markerArray[i].setMap(null);
	    // }
	    map.setCenter(markerArray[markerArray.length - 1].getPosition());
	    map.setZoom(map.getZoom()-1);
		}

		function removeAllcircles() {
		  for(var i in circles) {
		    circles[i].setMap(null);
		  }
		  circles = []; // this is if you really want to remove them, so you reset the variable.
		}

  </script>
	
  <script type="text/javascript">
  $(function() {
    $( ".tube_vdo" ).each(function() {
      $(this).tubeplayer({
        initialVideo: $(this).data('vdo'),
        width: '100%',
        height: '100%',
        allowFullScreen: "false",
        preferredQuality: "medium",
      });
    });
  });
  </script>
	
</body>
</html>
<?
	mysqli_close($con);
?>