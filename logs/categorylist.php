<?php

		echo '<datalist id="catlst">';
				include 'connect.php';
					$itemlist = $conn->query("SELECT * FROM category order by cat_name");
							while ($list = $itemlist->fetch_assoc()) {
								$lists = $list['cat_name'];
								echo"
									<option value='$lists'>";
							}
						echo"</datalist>";
?>
