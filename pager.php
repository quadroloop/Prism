<?php
// pager.php by Bryce Mercines
// a plain PHP pagination tool

@$requested_page = $_GET['page'];
$max_pages = 5; 
$pages = array();

$page_collector = array();

 $fileList = glob('./anims/examples/*.html');
 $i = 0;
foreach($fileList as $filename){
     
    if(count($page_collector) == $max_pages){
         array_push($pages, $page_collector);
         unset($page_collector);
         $page_collector = array();
    }else{
    		array_push($page_collector, $filename);
    }
}

	if(isset($requested_page)){
		$fetch_page = $pages[$requested_page];
		if($fetch_page == null){
		   echo 'Page not found';
		}else{
		echo json_encode($fetch_page);
	}
	}else{
		echo json_encode($pages[0]);
	}


