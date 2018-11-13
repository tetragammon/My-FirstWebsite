    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Latest News</h3>
		<?php

		$sql_news = 'select id,titlu_news,data from news';
		$result = $conn->query($sql_news);

		if($result->num_rows){
		
			while($news_item = $result->fetch_assoc()){
			
				echo '<h4>'.$news_item['titlu_news'].'</h4>';
				echo '<br>';
				echo '<h5>'.$news_item['data'].'</h5>';
				echo '<a href="news_page.php?id='.$news_item['id'].'">Read more</a>';
				echo '<br>';
			}
		}

		?>

        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
