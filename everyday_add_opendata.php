<?php
	header("Content-Type:text/html; charset=utf-8");
	require_once('loader.php');

	switch ($_GET['action']) {
		//live = 演唱會
		//999找到相同陣列不要新增
		//998沒有找到相同陣列繼續新增
		case 'live':
			$url = json_decode(file_get_contents( "http://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeJ&category=17" ),true);
			$sql_s = "SELECT title FROM data";
			$dt = sql_q($sql_s,array());
			$sql = "INSERT INTO data (d_no,title,content,lng,lat,type,stime,etime,note,category,address) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
			for ($i=0; $i < count($url); $i++) {
				for ($x=0; $x < count($dt) ; $x++) { 
					$pro = '998';
					if($url[$i]['title']===$dt[$x]['title']){
						$pro = '999';
						break;
					}
				}
				if($pro!='999'){
					if(count($url[$i]['showInfo'])!='1'){
						for ($y=0; $y < count($url[$i]['showInfo']); $y++) {
							$sql_arr = array();
							array_push( $sql_arr,'null' );
							array_push( $sql_arr,$url[$i]['title'] );
							array_push( $sql_arr,$url[$i]['webSales'] );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['longitude'] );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['latitude'] );
							array_push( $sql_arr,'opendata' );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['time'] );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['endTime'] );
							array_push( $sql_arr,$url[$i]['sourceWebName'] );
							array_push( $sql_arr,'live' );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['location'].$url[$i]['showInfo'][$y]['locationName'] );
							sql_i($sql,$sql_arr);
							echo 'Success !! ';
						}
					}
					else{
						$sql_arr = array();
						array_push( $sql_arr,'null' );
						array_push( $sql_arr,$url[$i]['title'] );
						array_push( $sql_arr,$url[$i]['webSales'] );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['longitude'] );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['latitude'] );
						array_push( $sql_arr,'opendata' );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['time'] );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['endTime'] );
						array_push( $sql_arr,$url[$i]['sourceWebName'] );
						array_push( $sql_arr,'live' );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['location'].$url[$i]['showInfo'][0]['locationName'] );
						sql_i($sql,$sql_arr);
						echo 'Success !! ';
					}
				}else{
					echo 'Error !! ';
				}
			}
			break;
		//art = 藝文活動
		//999找到相同陣列不要新增
		//998沒有找到相同陣列繼續新增
		case 'art':
			$url = json_decode(file_get_contents( "http://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeJ&category=1" ),true);
			$sql_s = "SELECT title FROM data";
			$dt = sql_q($sql_s,array());
			$sql = "INSERT INTO data (d_no,title,content,lng,lat,type,stime,etime,note,category,address) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
			for ($i=0; $i < count($url); $i++) {
				for ($x=0; $x < count($dt) ; $x++) { 
					$pro = '998';
					if($url[$i]['title']===$dt[$x]['title']){
						$pro = '999';
						break;
					}
				}
				if($pro!='999'){
					if(count($url[$i]['showInfo'])!='1'){
						for ($y=0; $y < count($url[$i]['showInfo']); $y++) {
							$sql_arr = array();
							array_push( $sql_arr,'null' );
							array_push( $sql_arr,$url[$i]['title'] );
							array_push( $sql_arr,$url[$i]['descriptionFilterHtml'] );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['longitude'] );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['latitude'] );
							array_push( $sql_arr,'opendata' );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['time'] );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['endTime'] );
							array_push( $sql_arr,$url[$i]['sourceWebName'] );
							array_push( $sql_arr,'art' );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['location'].$url[$i]['showInfo'][$y]['locationName'] );
							sql_i($sql,$sql_arr);
							echo 'Success !! ';
						}
					}
					else{
						$sql_arr = array();
						array_push( $sql_arr,'null' );
						array_push( $sql_arr,$url[$i]['title'] );
						array_push( $sql_arr,$url[$i]['descriptionFilterHtml'] );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['longitude'] );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['latitude'] );
						array_push( $sql_arr,'opendata' );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['time'] );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['endTime'] );
						array_push( $sql_arr,$url[$i]['sourceWebName'] );
						array_push( $sql_arr,'art' );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['location'].$url[$i]['showInfo'][0]['locationName'] );
						sql_i($sql,$sql_arr);
						echo 'Success !! ';
					}
				}else{
					echo 'Error !! ';
				}
			}
			break;
		//select = 徵選活動
		//999找到相同陣列不要新增
		//998沒有找到相同陣列繼續新增
		case 'select':
			$url = json_decode(file_get_contents( "http://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeJ&category=14" ),true);
			$sql_s = "SELECT title FROM data";
			$dt = sql_q($sql_s,array());
			$sql = "INSERT INTO data (d_no,title,content,lng,lat,type,stime,etime,note,category,address) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
			for ($i=0; $i < count($url); $i++) {
				for ($x=0; $x < count($dt) ; $x++) { 
					$pro = '998';
					if($url[$i]['title']===$dt[$x]['title']){
						$pro = '999';
						break;
					}
				}
				if($pro!='999'){
					if(count($url[$i]['showInfo'])!='1'){
						for ($y=0; $y < count($url[$i]['showInfo']); $y++) {
							$sql_arr = array();
							array_push( $sql_arr,'null' );
							array_push( $sql_arr,$url[$i]['title'] );
							array_push( $sql_arr,$url[$i]['descriptionFilterHtml'] );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['longitude'] );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['latitude'] );
							array_push( $sql_arr,'opendata' );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['time'] );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['endTime'] );
							array_push( $sql_arr,$url[$i]['sourceWebName'] );
							array_push( $sql_arr,'select' );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['location'].$url[$i]['showInfo'][$y]['locationName'] );
							sql_i($sql,$sql_arr);
							echo 'Success !! ';
						}
					}
					else{
						$sql_arr = array();
						array_push( $sql_arr,'null' );
						array_push( $sql_arr,$url[$i]['title'] );
						array_push( $sql_arr,$url[$i]['descriptionFilterHtml'] );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['longitude'] );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['latitude'] );
						array_push( $sql_arr,'opendata' );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['time'] );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['endTime'] );
						array_push( $sql_arr,$url[$i]['sourceWebName'] );
						array_push( $sql_arr,'select' );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['location'].$url[$i]['showInfo'][0]['locationName'] );
						sql_i($sql,$sql_arr);
						echo 'Success !! ';
					}
				}else{
					echo 'Error !! ';
				}
			}
			break;
		//game = 競賽活動
		//999找到相同陣列不要新增
		//998沒有找到相同陣列繼續新增
		case 'game':
			$url = json_decode(file_get_contents( "http://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeJ&category=13" ),true);
			$sql_s = "SELECT title FROM data";
			$dt = sql_q($sql_s,array());
			$sql = "INSERT INTO data (d_no,title,content,lng,lat,type,stime,etime,note,category,address) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
			for ($i=0; $i < count($url); $i++) {
				for ($x=0; $x < count($dt) ; $x++) { 
					$pro = '998';
					if($url[$i]['title']===$dt[$x]['title']){
						$pro = '999';
						break;
					}
				}
				if($pro!='999'){
					if(count($url[$i]['showInfo'])!='1'){
						for ($y=0; $y < count($url[$i]['showInfo']); $y++) {
							$sql_arr = array();
							array_push( $sql_arr,'null' );
							array_push( $sql_arr,$url[$i]['title'] );
							array_push( $sql_arr,$url[$i]['descriptionFilterHtml'] );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['longitude'] );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['latitude'] );
							array_push( $sql_arr,'opendata' );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['time'] );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['endTime'] );
							array_push( $sql_arr,$url[$i]['sourceWebName'] );
							array_push( $sql_arr,'game' );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['location'].$url[$i]['showInfo'][$y]['locationName'] );
							sql_i($sql,$sql_arr);
							echo 'Success !! ';
						}
					}
					else{
						$sql_arr = array();
						array_push( $sql_arr,'null' );
						array_push( $sql_arr,$url[$i]['title'] );
						array_push( $sql_arr,$url[$i]['descriptionFilterHtml'] );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['longitude'] );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['latitude'] );
						array_push( $sql_arr,'opendata' );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['time'] );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['endTime'] );
						array_push( $sql_arr,$url[$i]['sourceWebName'] );
						array_push( $sql_arr,'game' );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['location'].$url[$i]['showInfo'][0]['locationName'] );
						sql_i($sql,$sql_arr);
						echo 'Success !! ';
					}
				}else{
					echo 'Error !! ';
				}
			}
			break;
		// parent= 親子活動
		//999找到相同陣列不要新增
		//998沒有找到相同陣列繼續新增
		case 'parent':
			$url = json_decode(file_get_contents( "http://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeJ&category=4" ),true);
			$sql_s = "SELECT title FROM data";
			$dt = sql_q($sql_s,array());
			$sql = "INSERT INTO data (d_no,title,content,lng,lat,type,stime,etime,note,category,address) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
			for ($i=0; $i < count($url); $i++) {
				for ($x=0; $x < count($dt) ; $x++) { 
					$pro = '998';
					if($url[$i]['title']===$dt[$x]['title']){
						$pro = '999';
						break;
					}
				}
				if($pro!='999'){
					if(count($url[$i]['showInfo'])!='1'){
						for ($y=0; $y < count($url[$i]['showInfo']); $y++) {
							$sql_arr = array();
							array_push( $sql_arr,'null' );
							array_push( $sql_arr,$url[$i]['title'] );
							array_push( $sql_arr,$url[$i]['descriptionFilterHtml'] );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['longitude'] );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['latitude'] );
							array_push( $sql_arr,'opendata' );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['time'] );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['endTime'] );
							array_push( $sql_arr,$url[$i]['sourceWebName'] );
							array_push( $sql_arr,'parent' );
							array_push( $sql_arr,$url[$i]['showInfo'][$y]['location'].$url[$i]['showInfo'][$y]['locationName'] );
							sql_i($sql,$sql_arr);
							echo 'Success !! ';
						}
					}
					else{
						$sql_arr = array();
						array_push( $sql_arr,'null' );
						array_push( $sql_arr,$url[$i]['title'] );
						array_push( $sql_arr,$url[$i]['descriptionFilterHtml'] );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['longitude'] );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['latitude'] );
						array_push( $sql_arr,'opendata' );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['time'] );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['endTime'] );
						array_push( $sql_arr,$url[$i]['sourceWebName'] );
						array_push( $sql_arr,'parent' );
						array_push( $sql_arr,$url[$i]['showInfo'][0]['location'].$url[$i]['showInfo'][0]['locationName'] );
						sql_i($sql,$sql_arr);
						echo 'Success !! ';
					}
				}else{
					echo 'Error !! ';
				}
			}
			break;
		default:
			echo 'Action error!';
			break;
	}
	
	
