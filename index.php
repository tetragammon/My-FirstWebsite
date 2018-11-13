<?php

include_once('config.php');

if(isset($_GET['id'])){
	
	$id = $_GET['id'];

}else{

	$id = 1;
}

include('header.php');
include('sidebar.php');

?>

<div id="content">
      
	  <?php

		$sql_content	= 'select titlu_pagina,content from pages where id='.$id;
		$result_content = $conn->query($sql_content);

			if($result_content->num_rows){
			
				while($content = $result_content->fetch_assoc()){
				
					echo '<h1>'.$content['titlu_pagina'].'</h1>';
					echo $content['content'];
				}
			}
	  ?>
        
      </div>
    </div>
<?php

include('footer.php');

?>