<?php 
				if(isset($_POST['search_query'])){

				echo "<a href=\"search_page?page_number=";
				echo $_GET['page_number'] - 1;
				echo "&q=";
				echo str_replace(' ','+',$_POST['search_query']);
				echo "&f=";
				echo $_POST['filter'];
				echo "&s=";
				echo $_POST['sort'];
				echo "&format=";
				
				$format = $_POST['format'];
				$N = count($format);
				for($i=0; $i < $N; $i++)
				{
					echo $format[$i]. "&";
				  		  
				}
				//echo $_POST['format'];
				echo "\">Previous</a>";

				echo "<a href=\"search_page?page_number=";
				echo $_GET['page_number'] + 1;
				echo "&q=";
				echo str_replace(' ','+',$_POST['search_query']);
				echo "&f=";
				echo $_POST['filter'];
				echo "&s=";
				echo $_POST['sort'];
				echo "&format=";
				
				$format = $_POST['format'];
				$N = count($format);
				for($i=0; $i < $N; $i++)
				{
					echo $format[$i]. "&";
				  		  
				}
				
				echo "\">Next</a>";
				}

				else{

				echo "<a href=\"search_page?page_number=";
				echo $_GET['page_number'] - 1;
				echo "&q=";
				echo str_replace(' ','+',$_GET['q']);
				echo "&f=";
				echo $_GET['f'];
				echo "&s=";
				echo $_GET['s'];
				echo "&format=";
				echo $_GET['format'];
				echo "\">Previous</a>";

				echo "<a href=\"search_page?page_number=";
				echo $_GET['page_number'] + 1;
				echo "&q=";
				echo str_replace(' ','+',$_GET['q']);
				echo "&f=";
				echo $_GET['f'];
				echo "&s=";
				echo $_GET['s'];
				echo "&format=";
				echo $_GET['format'];
				echo "\">Next</a>";

				}

			?>
