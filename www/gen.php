<?php
	function gen_table(){
		$connection = mysqli_connect("mysql","linar","333");
		if(!$connection) {
			echo "DB connection error!";
			return;
		}
		$response = $connection->query("SELECT * from db.news;");
		$str = "<table>";
		foreach ($response as $item) {
			$str .= "<tr>";
			$str .= "<td>";
			$str .= $item["name"];
			$str .= "</td>";
			$str .= "<td>";
			$str .= $item["description"];
			$str .= "</td>";
			$str .= "</tr>";
		
		}
		$str .= "</table>";
		echo $str;
	}	
?>
