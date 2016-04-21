<?php
	include("connection.php");
	$slider = '';
	$sliderQ = mysql_query("select * from project"); 
	while($sliderData = mysql_fetch_array($sliderQ))
	{
		$name = explode(' ',$sliderData[2]);
		if(isset($name[1]))
			$name[0] = $name[0].' ...';
			
		$slider .= '<li class="col-xs-6" style="width:50%">
                        <a class="swipebox" href="#" title="'.$sliderData[2].'">
                        <img src="http://generic.webbyinfotech.in/Admin/images/project/'.$sliderData[1].'" alt="'.$sliderData[2].'" />	
                        <br>
                        '. ucwords( $name[0]).'
                        </a>
                    </li>';
	}
	echo $slider;
?>