<?php
	include_once("connectMatch.php"); 
	$action = $_GET['action'];
	$id = $_GET['id'];
	$cri = $_GET['cri'];
	if($action=='init'){ 
		//SORT
		for($i=0;$i<=5;$i++){
			$n = findMAX($cri,$i);
			$temp = $cri[$i];
			$cri[$i] = $cri[$n];
			$cri[$n] = $temp;
		}
		$criteria = getCriteria($id,$linkT);
		$uTable = getUserTable($linkT);	
		$gender = getUserSex($uTable,$id);
		$sqlT = getCriteriaTable($cri,$criteria);
		echo getUserList($sqlT,$gender,$linkT);
		//echo getData($cri,$link,$action);
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
	function getCriteriaTable($proportion,$criteria){ //main algo
		$ary;
		for($i=0;$i<=6;$i++){
			$j = $proportion[$i][0];
			switch($j){
				case 0: //hobby
					$ary[$i][0] = -1;
					break;
				case 1: //h/w
					$strS1 = substr( $criteria['height'],0, 3 );
					$strE1 = substr( $criteria['height'],4 ,3 );
					$heightStart = (int)$strS1;
					$heightEnd = (int)$strE1;
					$newHeightStart = $heightStart - $proportion[$i][1]*5;
					$newHeightEnd = $heightEnd + $proportion[$i][1]*5;
					$ary[$i][0] = "SELECT * FROM `member_table` WHERE `height` BETWEEN $newHeightStart and $newHeightEnd";
					if($proportion[$i][1] == 1){
						$ary[$i][0] = 0;
					}
					break;
				case 2: //vote
					$ary[$i][0] = -1;
					break;
				case 3: //eeg
					$ary[$i][0] = -1;
					break;
				case 4: //age
					$strS4 = substr( $criteria['age'],0, 2 );
					$strE4 = substr( $criteria['age'], -2 );
					$ageStart = (int)$strS4;
					$ageEnd = (int)$strE4;
					$newAgeStart = $ageStart - $proportion[$i][1]*5;
					$newAgeEnd = $ageEnd + $proportion[$i][1]*5;
					$ary[$i][0] = "SELECT * FROM 'member_table' WHERE 'age' BETWEEN $newAgeStart and $newAgeEnd";
					if($proportion[$i][1] == 1){
						$ary[$i][0] = 0;
					}
					break;
				case 5: //salary
					$strS5 = substr( $criteria['salary'],0, 5 );
					$salaryStart = (int)$strS5;
					$weight = 1-$proportion[$i][1];
					$newSalaryStart = $salaryStart - $weight*20000;
					$ary[$i][0] = "SELECT * FROM 'member_table' WHERE 'salary' >= $newSalaryStart";
					if($proportion[$i][1] == 1){
						$ary[$i][0] = 0;
					}
					break;	
				case 6: //edu
					$strS6 = mb_substr( $criteria['edu'],0, 2 ,"UTF-8");
					switch($strS6){
						case '高中':
							if($proportion[$i][1]>0.5){
								$strS6 = "SELECT * FROM 'member_table'" ;
							}
							else{
								$strS6 = "SELECT * FROM 'member_table'" ;
							}
							break;
						case '大學':
							if($proportion[$i][1]>0.5){
								$strS6 = "SELECT * FROM 'member_table'";
							}
							else{
								$strS6 = "SELECT * FROM 'member_table' WHERE 'education' != '高中'" ;
								
							}
							break;
						case '碩士':
							if($proportion[$i][1]>0.5){
								$strS6 = "SELECT * FROM 'member_table' WHERE 'education' != '高中'";
							}
							else{
								$strS6 = "SELECT * FROM 'member_table' WHERE 'education' == '碩士' or '博士'" ;
							}
							break;
						case '博士':
							if($proportion[$i][1]>0.5){
								$strS6 = "SELECT * FROM 'member_table' WHERE 'education' == '碩士' or '博士'";
							}
							else{
								$strS6 = "SELECT * FROM 'member_table' WHERE 'education' == '博士'";
							}
							break;
					}
					$ary[$i][0] = $strS6;
					if($proportion[$i][1] == 1){
						$ary[$i][0] = 0;
					}
					break;
			}
		}
		return $ary;
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
	function getUserList($sqlTable,$uSex,$link){	
		$query = mysqli_query($link,$sqlTable[0][0]);
		if($query == false){
			$arr['success']=3;	
			$arr['flag']='search fail';	
			return json_encode($arr); 
		}
		$i=0;		
		while($row = mysqli_fetch_array($query)){
			$name = $row['username'];
			$photo = $row['other'];
			$arr['name'][$i] = $name;
			$arr['photo'][$i] = $photo;						
			$i = $i+1;
		}
		//$arr['data']=$sqlTable[0][0];	
		$arr['success']=3;	
		return json_encode($arr); 
	}	
	function getUserTable($linkT){
		$i=0;
		$query = mysqli_query($linkT,"select * from member_table");	
		while($row = mysqli_fetch_array($query)){
			$uid = $row['NO'];
			$name = $row['username'];
			$height = $row['height'];
			$weight = $row['weight'];
			$edu = $row['education'];
			$salary = $row['salary'];
			$sex = $row['sexuality'];
			$arr['uid'][$i] = $uid;
			$arr['name'][$i] = $name;
			$arr['height'][$i] = $height;
			$arr['weight'][$i] = $weight;
			$arr['edu'][$i] = $edu;
			$arr['salary'][$i] = $salary;
			$arr['sex'][$i] = $sex;
			$i = $i+1;
		}
		return $arr;
	}
	function findMAX($ary,$p){
		$min=2;
		$n=$p;
		for($i=$p;$i<=6;$i++){
			if($ary[$i][1] <= $min){
				$min=$ary[$i][1];
				$n = $i;
			}
		}
		return $n;
	}
	function getCriteria($id,$linkT){
		$query = mysqli_query($linkT,"select * from member_table where username='$id' ");	
		while($row = mysqli_fetch_array($query)){
			$uid = $row['NO'];
			$name = $row['username'];
			$height = $row['idol_height'];
			$weight = $row['idol_weight'];
			$edu = $row['idol_education'];
			$age = $row['idol_age'];
			$salary = $row['idol_salary'];
			$arr['uid'] = $uid;
			$arr['name'] = $name;
			$arr['height'] = $height;
			$arr['weight'] = $weight;
			$arr['edu'] = $edu;
			$arr['age'] = $age;
			$arr['salary']= $salary;
		}
		return $arr;
	}
?>	