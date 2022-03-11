<?php
    include_once("./conn.php");
    $APIkey = json_decode(file_get_contents('https://apikey.net/?ip='.$_SERVER["REMOTE_ADDR"]));
    $cIP_Address = $APIkey ->ip;$cIP_Number = $APIkey ->iplong;$cIP_Attribution = $APIkey ->address;$cIPproxy = $APIkey ->ipproxy;$VisitingURL = $_SERVER["REMOTE_ADDR"];
    $APIkeyText = '<font color="#000000"><b><img src="./images/ipoot.png" alt="公网IP地址" title="｡◕‿◕｡ 此图标是由“IPoot”字符设计而成，象征IP查询像箭靶一样精准。" width="44" height="44" border="0" align="center">您的公网IP地址是：'.$cIP_Address.'&nbsp;数字IP地址是：'.$cIP_Number.'&nbsp;代理IP地址是：'.$cIPproxy.'<br /><img src="./images/ipoot.png" alt="[ 世界互联网IP地址数据库 ] V2.1" title="｡◕‿◕｡ 此图标是由“IPoot”字符设计而成，象征IP查询像箭靶一样精准。" width="44" height="44" border="0" align="center">公网IP物理地址是：'.$cIP_Attribution.'</b></font><script>document.title="'.$cIP_Attribution.'APIkey.Net接口";</script>';
?>
<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
		<meta name="keywords" content="ip地址库,ip数据库,[ 世界互联网IP地址数据库 ] V2.1"/>
		<meta name="description" content="[ 世界互联网IP地址数据库 ] V2.1"/>
		<title><?php echo $cIP_Attribution; ?>APIkey.Net接口</title>
		<link type="text/css" href="./images/ipoot.css" rel="stylesheet" media="screen">
		<script src="https://APIkey.Net/?type=Hublink" charset="utf-8"></script>
	</head>
	<body>
		<div style="margin-left: auto;margin-right: auto;margin-top: 50px;">
			[ <a href="https://www.ipoot.com" title="[ 世界互联网IP地址数据库 ] V2.1">世界互联网IP地址数据库</a> ] V2.1
		</div>
		<div style="margin-left: auto;margin-right: auto;margin-top: 20px;">
			<form method="get" ACTION="" name="ipform" onsubmit="return checkIP();">
				<input name="ip" class="input" id="ip" style="width:400px;padding:6px 10px 6px 10px;line-height: 38px;font: 22px/normal arial;text-align:center;border: 1px solid #ffffff;background-color: #ffffff;" onblur="saveurl();" type="text" autplete="off" url="true" maxlength="77">
				<input id="sub" style="font: 22px/normal arial; width: 140px;height:39px;border: 1px solid #ffffff;background-color: #ffffff;" type="submit" value="   查  询   "> <font size="4"><a href="https://APIkey.Net/?type=URL" title="｡◕‿◕｡ 点击查看：超级APIkey.Net讲述页！" target="_blank">API接口：</a></font> <font size="1"><a href="https://apikey.net/?type=json&ip=<?php echo $cIP_Address; ?>" title="｡◕‿◕｡ 点击调用JSON接口地址！" target="_blank">JSON</a> <a href="https://APIkey.Net/?type=script" title="｡◕‿◕｡ 点击调用SCRIPT接口地址！" target="_blank">SCRIPT</a> <a href="https://APIkey.Net/?type=jsonp" title="｡◕‿◕｡ 点击调用JSONP接口地址！" target="_blank">JSONP</a> <a href="https://APIkey.Net/?type=xml" title="｡◕‿◕｡ 点击调用XML接口地址！" target="_blank">XML</a></font>
			</form>
		</div>
		<div style="margin-left: auto;margin-right: auto;margin-top: 20px;margin-bottom: 20px;" onmouseover="this.className='ipoot_on'" onmouseout="this.className='ipoot'">
			<?php
				if($_GET["ip"]){
				    if (filter_var($_GET["ip"], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE)) {
				        $APIkey = json_decode(file_get_contents('https://apikey.net/?ip='.trim($_GET["ip"])));
						$IP_Address = $APIkey ->ip;$IP_Number = $APIkey ->iplong;$IP_Attribution = $APIkey ->address;$IPproxy = $APIkey ->ipproxy;$VisitingURL = trim($_GET["ip"]);
						echo '<font color="#000000"><b><img src="./images/ipoot.png" alt="查询IP地址" title="｡◕‿◕｡ 此图标是由“IPoot”字符设计而成，象征IP查询像箭靶一样精准。" width="44" height="44" border="0" align="center">您查询的IP地址：'.$IP_Address.'&emsp;数字IP地址是：'.$IP_Number.'<br /><img src="./images/ipoot.png" alt="[ 世界互联网IP地址数据库 ] V2.1" title="｡◕‿◕｡ 此图标是由“IPoot”字符设计而成，象征IP查询像箭靶一样精准。" width="44" height="44" border="0" align="center">对应的IP物理地址是：'.$IP_Attribution.'</b></font><script>document.title="'.$IP_Attribution.'APIkey.Net接口";</script>';
						if($conn){$retval = mysqli_query($conn,"insert into ipoot_logs "."(IP_Address,IP_Number,IP_Attribution,IPproxy,VisitingURL) "."VALUES "."('$cIP_Address','$cIP_Number','$cIP_Attribution','$cIPproxy','$VisitingURL')");}
				    }
				    elseif (is_numeric($_GET["ip"]) && $_GET["ip"]>=16777217 && $_GET["ip"]<=4294967295) {
				        $APIkey = json_decode(file_get_contents('https://apikey.net/?ip='.trim($_GET["ip"])));
						$IP_Address = $APIkey ->ip;$IP_Number = $APIkey ->iplong;$IP_Attribution = $APIkey ->address;$IPproxy = $APIkey ->ipproxy;$VisitingURL = trim($_GET["ip"]);
						echo '<font color="#000000"><b><img src="./images/ipoot.png" alt="查询数字IP地址" title="｡◕‿◕｡ 此图标是由“IPoot”字符设计而成，象征IP查询像箭靶一样精准。" width="44" height="44" border="0" align="center">您查询的数字IP地址：'.$IP_Number.'&emsp;对应的IP地址是：'.$IP_Address.'<br /><img src="./images/ipoot.png" alt="[ 世界互联网IP地址数据库 ] V2.1" title="｡◕‿◕｡ 此图标是由“IPoot”字符设计而成，象征IP查询像箭靶一样精准。" width="44" height="44" border="0" align="center">对应的IP物理地址是：'.$IP_Attribution.'</b></font><script>document.title="'.$IP_Attribution.'APIkey.Net接口";</script>';
						if($conn){$retval = mysqli_query($conn,"insert into ipoot_logs "."(IP_Address,IP_Number,IP_Attribution,IPproxy,VisitingURL) "."VALUES "."('$cIP_Address','$cIP_Number','$cIP_Attribution','$cIPproxy','$VisitingURL')");}
				    }
				    elseif (gethostbyname($_GET["ip"]) && !is_numeric($_GET["ip"]) && !strstr($_GET["ip"], '/')) {
				        $APIkey = json_decode(file_get_contents('https://apikey.net/?ip='.trim($_GET["ip"])));
			            $IP_Address = $APIkey ->ip;$IP_Number = $APIkey ->iplong;$IP_Attribution = $APIkey ->address;$IPproxy = $APIkey ->ipproxy;$VisitingURL = trim($_GET["ip"]);
			            echo '<font color="#000000"><b><img src="./images/ipoot.png" alt="查询域名解析" title="｡◕‿◕｡ 此图标是由“IPoot”字符设计而成，象征IP查询像箭靶一样精准。" width="44" height="44" border="0" align="center">您查询的域名：'.$VisitingURL.'&emsp;当前解析的IP地址是：'.$IP_Address.'<br /><img src="./images/ipoot.png" alt="[ 世界互联网IP地址数据库 ] V2.1" title="｡◕‿◕｡ 此图标是由“IPoot”字符设计而成，象征IP查询像箭靶一样精准。" width="44" height="44" border="0" align="center">对应的数字IP地址是：'.$IP_Number.'&emsp;IP地址对应的服务器位于：'.$IP_Attribution.'</b></font><script>document.title="'.$IP_Attribution.'APIkey.Net接口";</script>';
			            if($conn){$retval = mysqli_query($conn,"insert into ipoot_logs "."(IP_Address,IP_Number,IP_Attribution,IPproxy,VisitingURL) "."VALUES "."('$cIP_Address','$cIP_Number','$cIP_Attribution','$cIPproxy','$VisitingURL')");}
				    }
				    elseif (filter_var($_GET["ip"],FILTER_VALIDATE_URL)) {
			            $APIkey = json_decode(file_get_contents('https://apikey.net/?ip='.parse_url(trim($_GET["ip"]),PHP_URL_HOST)));
			            $IP_Address = $APIkey ->ip;$IP_Number = $APIkey ->iplong;$IP_Attribution = $APIkey ->address;$IPproxy = $APIkey ->ipproxy;$VisitingURL = parse_url(trim($_GET["ip"]),PHP_URL_HOST);
			            echo '<font color="#000000"><b><img src="./images/ipoot.png" alt="查询域名解析" title="｡◕‿◕｡ 此图标是由“IPoot”字符设计而成，象征IP查询像箭靶一样精准。" width="44" height="44" border="0" align="center">您查询的域名：'.$VisitingURL.'&nbsp;&nbsp;当前解析的IP地址为：'.$IP_Address.'<br /><img src="./images/ipoot.png" alt="[ 世界互联网IP地址数据库 ] V2.1" title="｡◕‿◕｡ 此图标是由“IPoot”字符设计而成，象征IP查询像箭靶一样精准。" width="44" height="44" border="0" align="center">对应的数字IP地址是：'.$IP_Number.'&nbsp;&nbsp;IP地址对应的服务器位于：'.$IP_Attribution.'</b></font><script>document.title="'.$IP_Attribution.'APIkey.Net接口";</script>';
			            if($conn){$retval = mysqli_query($conn,"insert into ipoot_logs "."(IP_Address,IP_Number,IP_Attribution,IPproxy,VisitingURL) "."VALUES "."('$cIP_Address','$cIP_Number','$cIP_Attribution','$cIPproxy','$VisitingURL')");}
				    } else {echo $APIkeyText;if($conn){$retval = mysqli_query($conn,"insert into ipoot_logs "."(IP_Address,IP_Number,IP_Attribution,IPproxy,VisitingURL) "."VALUES "."('$cIP_Address','$cIP_Number','$cIP_Attribution','$cIPproxy','$VisitingURL')");}}
				} else {echo $APIkeyText;if($conn){$retval = mysqli_query($conn,"insert into ipoot_logs "."(IP_Address,IP_Number,IP_Attribution,IPproxy,VisitingURL) "."VALUES "."('$cIP_Address','$cIP_Number','$cIP_Attribution','$cIPproxy','$VisitingURL')");}}
			?>
		</div>
		<div style="margin-left: auto;margin-right: auto;max-width: 1140px; font-size:14px;border: 4px dashed rgba(255, 255, 255, 0.5);" onmouseover="this.className='ipoot_on'" onmouseout="this.className='ipoot'">
			<marquee direction="down" behavior="alternate" scrollamount="1" style="margin-bottom: -15px;text-align:center;height:555px;">
				<?php
					$sql = "SELECT DISTINCT VisitingURL FROM ipoot_logs ORDER BY id DESC LIMIT 1000";
					if($conn){
						$retval = mysqli_query($conn,$sql,MYSQLI_USE_RESULT);
						while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
							echo '<a href="./?ip='.$row["VisitingURL"].'">'.$row["VisitingURL"].'</a>&emsp;';
						}
						mysqli_free_result($retval);mysqli_close($conn);
					}
				?>
			</marquee>
		</div>
		<div style="margin-left: auto;margin-right: auto;margin-top: 10px;font-size:14px;" onmouseover="this.className='ipoot_on'" onmouseout="this.className='ipoot'">
			<marquee direction="left" scrollamount="4" behavior="alternate" style="margin-bottom: -15px;text-align:center;width:95%;">
				&copy;CopyRight <script type="text/javascript">document.write(APIkey["Current_Date"] + "，" + APIkey["Goodtime"]);</script><a href="https://www.ipoot.com" target="_blank" title="[ 世界互联网IP地址数据库 ] V2.1"><font color="#ffffff">[ 世界互联网IP地址数据库 ] V2.1</font></a> All Rights Reserved 工信部ICP备案/许可证号：<a href="http://www.beian.miit.gov.cn" target="_blank"><font color="#ffffff">京ICP备2022XXXX号</font></a>
			</marquee>
		</div>
		<audio id="music" autoplay="autoplay" src="https://APIkey.Net/?type=Audio"></audio>
		<script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.6.0.js" charset="utf-8"></script>
		<script src="./images/ipoot.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>