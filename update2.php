<?php session_start(); ?>
<meta http-equiv="Content-Type" charset=utf-8" />
<?php
include("mysql_connect.inc.php");

if($_SESSION['username'] != null)
{

     	$username = $_SESSION['username'];
	$sql = "SELECT * FROM member_table where username = '$username' ";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);
	
        echo "<form style='width:980px;margin: auto;' name=\"form\" method=\"post\" action=\"update_finish.php\">";
		echo "<div style='margin-left:390px;margin-top:100px;	font-size:30px;letter-spacing: normal;font-weight:900;'>個人資料修改 </div>";
        echo "<p style='position:absolute;margin-left:240px;margin-top:80px;'>密碼</p><input style='margin-left:290px;margin-top:80px; width:380px; height:30px;border: 2px solid rgba(204, 218, 224, 1);font: normal normal normal 16px/1.4em overlock, sans-serif;' type=\"password\" name=\"pw\" value=\"$row[2]\" /> <br>";
        echo "<p style='position:absolute;margin-left:220px;margin-top:15px;'>確認密碼</p><input style='margin-left:290px;margin-top:10px; width:380px; height:30px;border: 2px solid rgba(204, 218, 224, 1);font: normal normal normal 16px/1.4em overlock, sans-serif;' type=\"password\" name=\"pw2\" value=\"$row[2]\" /> <br>";
        echo "<p style='position:absolute;margin-left:240px;margin-top:15px;'>暱稱</p><input style='margin-left:290px;margin-top:10px; width:380px; height:30px;border: 2px solid rgba(204, 218, 224, 1);font: normal normal normal 16px/1.4em overlock, sans-serif;' type=\"text\" name=\"nickname\" value=\"$row[4]\" />  <br>";
        echo "<p style='position:absolute;margin-left:240px;margin-top:15px;'>手機</p><input style='margin-left:290px;margin-top:10px; width:380px; height:30px;border: 2px solid rgba(204, 218, 224, 1);font: normal normal normal 16px/1.4em overlock, sans-serif;' type=\"text\" name=\"phone\" value=\"$row[7]\" /> <br>";
		echo "<p style='position:absolute;margin-left:240px;margin-top:15px;'>信箱</p><input style='margin-left:290px;margin-top:10px; width:380px; height:30px;border: 2px solid rgba(204, 218, 224, 1);font: normal normal normal 16px/1.4em overlock, sans-serif;' type=\"text\" name=\"mail\"  value=\"$row[8]\" />  <br>";
		echo "<p style='position:absolute;margin-left:240px;margin-top:15px;'>身高</p>
			<select style='margin-left:290px;margin-top:10px; width:380px; height:30px;border: 2px solid rgba(204, 218, 224, 1);font: normal normal normal 16px/1.4em overlock, sans-serif;' name='height'>
				<option name='career' value='146~150cm'>146~150cm</option>
				<option name='career' value='151~155cm'>151~155cm</option>
				<option name='career' value='156~160cm'>156~160cm</option>
				<option name='career' value='161~165cm'>161~165cm</option>
				<option name='career' value='166~170cm'>166~170cm</option>
				<option name='career' value='171~175cm'>171~175cm</option>
				<option name='career' value='176~180cm'>176~180cm</option>
				<option name='career' value='181~185cm'>181~185cm</option>
				<option name='career' value='186~190cm'>186~190cm</option>
				<option name='career' value='191cm以上'>191cm以上</option>
			</select> <br>";	
		echo "<p style='position:absolute;margin-left:240px;margin-top:15px;'>體重</p>
			<select style='margin-left:290px;margin-top:10px; width:380px; height:30px;border: 2px solid rgba(204, 218, 224, 1);font: normal normal normal 16px/1.4em overlock, sans-serif;' name='weight'>
				<option name='weight' value='41~45kg'>41~45kg</option>
				<option name='weight' value='46~50kg'>46~50kg</option>
				<option name='weight' value='51~55kg'>51~55kg</option>
				<option name='weight' value='56~60kg'>56~60kg</option>
				<option name='weight' value='61~65kg'>61~65kg</option>
				<option name='weight' value='66~70kg'>66~70kg</option>
				<option name='weight' value='71~75kg'>71~75kg</option>
				<option name='weight' value='76~80kg'>76~80kg</option>
				<option name='weight' value='80以上'>80以上</option>
			</select> <br>";	
		echo "<p style='position:absolute;margin-left:240px;margin-top:15px;'>職稱</p>
			<select style='margin-left:290px;margin-top:10px; width:380px; height:30px;border: 2px solid rgba(204, 218, 224, 1);font: normal normal normal 16px/1.4em overlock, sans-serif;' name='career'>
				<option name='career' value='工業'>工業</option>
				<option name='career' value='商業'>商業</option>
				<option name='career' value='軍公教'>軍公教</option>
				<option name='career' value='保險業'>保險業</option>
				<option name='career' value='科技業'>科技業</option>
				<option name='career' value='待業中'>待業中</option>
				<option name='career' value='醫護人員'>醫護人員</option>
				<option name='career' value='已退休'>已退休</option>
			</select> <br>";
		echo "<p style='position:absolute;margin-left:240px;margin-top:15px;'>薪水</p>
			<select style='margin-left:290px;margin-top:10px; width:380px; height:30px;border: 2px solid rgba(204, 218, 224, 1);font: normal normal normal 16px/1.4em overlock, sans-serif;' name='salary'>
              <option name='salary' value='25000以下'>TWD25000以下</option>
              <option name='salary' value='25000~35000'>TWD25000~35000</option>
              <option name='salary' value='35001~50000'>TWD35001~50000</option>
              <option name='salary' value='50001~75000'>TWD50001~75000</option>
              <option name='salary' value='75001~100000'>TWD75001~100000</option>
              <option name='salary' value='100001~150000'>TWD100001~150000</option>
              <option name='salary' value='&gt;150001以上'>&gt;TWD150001以上</option>
            </select> <br>";
		
		
		
		
		
		
		echo "<p style='position:absolute;margin-left:240px;margin-top:15px;'>嗜好</p><textarea style='margin-left:290px;margin-top:10px; width:380px; height:80px;border: 2px solid rgba(204, 218, 224, 1);font: normal normal normal 16px/1.4em overlock, sans-serif;' name=\"other\" cols=\"45\" rows=\"5\"> $row[15] </textarea><br> ";

								
								
								
        echo "<input style='margin-left:610px' type=\"submit\" name=\"button\" value=\"Reivse\" />";
        echo "</form>";
			
}
else
{
        echo '�z�L�v���[�ݦ�����!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=Self.php>';
}
?>