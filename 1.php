<?php
		$str='http://www.lexun.cc/pgicms_api/api.php?key=free&appid=0&msg='.urlencode('你好');
		$json=json_decode(file_get_contents($str));
		//F('CAHT',$json);
		$str=$json->content;
		echo $str;
?>