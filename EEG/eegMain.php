<?php
	error_reporting(0);
	include_once("connectEEG.php"); 
	$action = $_GET['action'];
	$id = $_GET['id'];
	if($action=='init'){ //initiate EEG graph
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
		$data1=$rawdata1['data'];
		$data2=$rawdata2['data'];
		return matchScore($data1,$data2);
	}
	
	function getData($id,$link,$action){	//Get EEG raw data 
		$i=0;
		$orits=0;
		if($action=='init'){			
			$query = mysqli_query($link,"select * from $id");				
			while($row = mysqli_fetch_array($query)){	
				$ts = $row['ts'] - $orits;
				$la = $row['Low Alpha'];
				$ha = $row['High Alpha'];
				$lb = $row['Low Beta'];
				$hb = $row['High Beta'];
				$t = $row['Theta'];
				if($i == 0){
					$orits = $ts;
					$ts = 0;
				}
				$dt = $la+$ha-$lb-$hb-$t;
				$arr['time'][$i] = $ts;
				$arr['data'][$i] = $dt;			
				$arr['success']=1;	
				$i = $i+1;
			}
			return json_encode($arr); 
		}
		else{ //similar user data, aka $action=='simi'			
			$query = mysqli_query($link,"select * from $id");	
			while($row = mysqli_fetch_array($query)){
				$ts = $row['ts'] - $orits;
				$la = $row['Low Alpha'];
				$ha = $row['High Alpha'];
				$lb = $row['Low Beta'];
				$hb = $row['High Beta'];
				$t = $row['Theta'];
				if($i == 0){
					$orits = $ts;
					$ts = 0;
				}
				$dt = $la+$ha-$lb-$hb-$t;
				$arr['time'][$i] = $ts;
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
			if($comparedScore[$i] <25000){
				$count++;
			}
		}
		return ceil($count/4.1);		
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