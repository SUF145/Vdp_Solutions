<!DOCTYPE html>
<html>
<head>
	<title>Display Records</title>
	<link rel="stylesheet" type="text/css" href="./css/display.css">
</head>
<body>
	<div class="displayRecords">
		<h1>VDP Solutions Client Database</h1>
		<div>
			<strong>Search: </strong><input type="text" id="myInput" onkeyup='tableSearch()'  placeholder="Tye Here..." />
		</div>
		<table border="2px" id="tableContents">
			<tr>
				<th>Name</th>
				<th>Phone No</th>
				<th>Email</th>
				<th>Message</th>
				<th>Operation</th>
			</tr>
				<?php
				include("connection.php");
				error_reporting(0);
				$query = "SELECT * FROM CONTACT_US";
				$data = mysqli_query($conn, $query);
				$total = mysqli_num_rows($data);

				if($total!= 0) {
					$result = mysqli_fetch_assoc($data);
					while($result = mysqli_fetch_assoc($data)) {
						echo "
								<tr>
									<td>".$result['name']."</td>
									<td>".$result['phone_no']."</td>
									<td>".$result['email']."</td>
									<td>".$result['message']."</td>
									<td><a href='delete.php?ph=$result[phone_no]'>Delete</td>
								</tr>
							";
					}
				}
				else {
					echo "No records found";
				}
				?>
		</table>
</div>

<script type="text/javascript">
	function tableSearch() {
		let input, filter, table, tr, td, txtValue;

		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		table = document.getElementById("tableContents");
		tr = table.getElementsByTagName("tr");


		for(let i=0; i< tr.length; i++) {
			 td = tr[i].getElementsByTagName("td")[3];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
		}
	}
</script>
</body>
</html>