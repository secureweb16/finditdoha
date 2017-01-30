kkkkkkkkkkkk

<?php 

echo"hii";

$kpp=$_POST['question-content'];

echo"$kpp";

require_once('flickr.php'); 
$Flickr = new Flickr('5638fa84198e5331fac5641dc6cfae0f'); 

$data = $Flickr->search($kpp);
$s=1;
$i = 0;
$count = 0;
foreach($data['photos']['photo'] as $photo) { 
	// the image URL becomes somthing like 
	// http://farm{farm-id}.static.flickr.com/{server-id}/{id}_{secret}.jpg 
        $i++; 
	echo '<a href="#"><img class="imagelink" id="findimg'.$count.'" src="' . 'http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg">'</a>;
        ++$count;
	$s++;
	if($s==6)
	{
		break;
	} 
}

?>