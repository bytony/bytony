<?php 
$site_url = $_SERVER["HTTP_HOST"];
$data=M('agent')->where(array('site_url'=>$site_url))->find();
return array (

  'site_name' => $data['site_name'],
  'site_title' => $data['site_title'],
  'site_url' => $data['site_url'],
  'site_my' => $data['site_my'],
  'ischeckuser' => $data['ischeckuser'] ,
  'ipc' => $data['ipc'],
  'site_qq' => $data['site_qq'],
  'baidu_map_api' => $data['baidu_map_api'],
  'site_email' => $data['site_email'],
  'keyword' => $data['keyword'],
  'content' => $data['content'],
  'counts' => $data['counts'],
  'copyright' => $data['copyright'],
);