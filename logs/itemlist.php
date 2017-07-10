<?php 

		echo '<datalist id="iteml">';
				include 'connect.php';
					$itemlist = $conn->query("SELECT * FROM items order by items_name");
							while ($list = $itemlist->fetch_assoc()) {
								$lists = $list['items_name'];
								echo"			
									<option value='$lists'>";
							}
						echo"</datalist>";
?>