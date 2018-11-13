<?php

include_once('config.php');
include('header.php');
include('sidebar.php');

if(isset($_GET['id'])){
	
	$id = $_GET['id'];

}else{

	$id = 1;
}
?>

<div id="content">

<?php
$news_sql = 'select titlu_news,content_news from news where id='.$id;
$result_news = $conn->query($news_sql);


if($result_news->num_rows){

	while($news_content = $result_news->fetch_assoc()){
	
		echo '<h1>'.$news_content['titlu_news'].'</h1>';
		
		echo $news_content['content_news'];
	}
}

include ('footer.php');
	
?>
</div>