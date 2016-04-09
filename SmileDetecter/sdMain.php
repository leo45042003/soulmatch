<?php
	error_reporting(0);
	include_once("connectSD.php"); 
	$action = $_GET['action'];
	$id = $_GET['id'];
	if($action=='init'){ //initiate SD graph
		echo getData($id,$link,$action);
	}
	else if($action=='simi'){  //similar users
		$uTable = getUserTable($linkT);	
		$gender = getUserSex($uTable,$id);		
		$utlength = count($uTable['name']);
		//gender filtering
		$h=0;
		for($i=0;$i<$utlength;$i++){
			if($uTable['sex'][$i] != $gender && preComparePrepare($id,$uTable['name'][$i],$link,$action)>0){
				$ary['data'][$h] = preComparePrepare($id,$uTable['name'][$i],$link,$action);
				$ary['name'][$h] = $uTable['name'][$i];
				$ary['photo'][$h] = $uTable['photo'][$i];
				$h++;
			}				
		}
		$arylength = count($ary['name']);
		//remove identical file
		for($j=0;$j<$arylength;$j++){
			if($id == $ary['name'][$j]){
				for($k=$j;$k<$arylength-$j;$k++){
					$ary['data'][$k] = $ary['data'][$k+1];
					$ary['name'][$k] = $ary['name'][$k+1];
					$ary['photo'][$k] = $ary['photo'][$k+1];
				}
				//release unused array
				unset($ary['data'][count($ary['name'])-1]);
				unset($ary['name'][count($ary['name'])-1]);
				unset($ary['photo'][count($ary['photo'])-1]);
			}
		}
		$ary['success'] =2;
		echo json_encode($ary); 
	}
	function getUserSex($ary,$id){
		$k=0;
		for($i=0;$i<count($ary['name']);$i++){
			if($ary['name'][$i] == $id){
				$k = $i;
			}
		}
		return $ary['sex'][$k];
	}
	
	function preComparePrepare($id,$id2,$link,$action){
		$rawdata1 = getData($id,$link,$action);
		$rawdata2 = getData($id2,$link,$action);
		$data1=$rawdata1['time'];
		$data2=$rawdata2['time'];
		return matchScore($data1,$data2);
	}
	
	function getData($id,$link,$action){	//Get SD raw data 
		$i=0;
		if($action=='init'){
			
			$query = mysqli_query($link,"select * from $id where Data > 0");				
			while($row = mysqli_fetch_array($query)){
			$ts = $row['TimeStamp'];
			$dt = $row['Data'];
			$arrPre['time'][$i] = $ts/1000;
			$arrPre['data'][$i] = $dt;			
			$arr['success']=1;	
			$i = $i+1;
			}
			//fetch top 10 sorted data
			$c = count($arrPre['time'])-11;
			for($j=0;$j<10;$j++){
				$arr['time'][$j] = $arrPre['time'][$c+$j];
				$arr['data'][$j] = $arrPre['data'][$c+$j];
			}
			return json_encode($arr); 
		}else{ //similar user data, aka $action=='simi'			
			$query = mysqli_query($link,"select * from $id where Data > 0");	
			while($row = mysqli_fetch_array($query)){
				$ts = $row['TimeStamp'];
				$dt = $row['Data'];
				$arr['time'][$i] = $ts/1000;
				$arr['data'][$i] = $dt;
				$i = $i+1;
			}
			return $arr;
		}	
	
	}
	
	function matchScore($data1,$data2){	//Main match algorithm
		$count=0;
		//decide compared length
		if(count($data1) >= count($data2)){
			$datalength=count($data2);
		}else{$datalength=count($data1);}
		
		for($i=0;$i<$datalength;$i++){
			$comparedScore[$i] = abs($data1[$i]-$data2[$i]);
			if($comparedScore[$i] <3.5){
				$count++;
			}
		}
		if($count>10){
			$count=10;
		}
		return $count;
		
	}
	
	function getUserTable($linkT){
		$i=0;
		$query = mysqli_query($linkT,"select * from member_table");	
		while($row = mysqli_fetch_array($query)){
			$uid = $row['NO'];
			$name = $row['username'];
			$photo = $row['other'];
			$sex = $row['sexuality'];
			$arr['uid'][$i] = $uid;
			$arr['name'][$i] = $name;
			$arr['photo'][$i] = $photo;
			$arr['sex'][$i] = $sex;
			$i = $i+1;
		}
		return $arr;
	}
?>	