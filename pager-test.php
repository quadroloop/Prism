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
    	$panel = '
    	   <li class="w3-bar w3-hover-pale-blue" style="cursor:pointer" title="'.$filename.'" onclick="view(this.title)">
    <i  class="w3-bar-item fa fa-circle w3-text-light-green w3-margin w3-white w3-xlarge w3-right"></i>
     <i class="w3-bar-item fa fa-bars w3-margin w3-text-purple w3-white w3-xlarge w3-right"></i>
      <iframe src="'.$filename.'" class="w3-bar-item w3-hide-small w3-card-2" style="width:450px;height:250px;border-radius:10px;"></iframe>
      <div class="w3-bar-item">
        <span class="w3-large w3-text-indigo">'.$filename.'</span><br>
        <span class="w3-text-grey">Three.js Animation File</span>
      </div>
    </li>
    	';
    		array_push($page_collector,htmlspecialchars($panel));
    }
}

	if(isset($requested_page)){
		$fetch_page = $pages[$requested_page];
		if($fetch_page == null){
		   echo 'Page not found';
		}else{
		print_r($fetch_page);
	}
	}else{
		$i = 0;
		while (i <= count($pages[0])) {
			echo $pages[0];
		}
	}


