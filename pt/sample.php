<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select2</title>
	<link rel="stylesheet" type="text/css" href="bower_components/select2/dist/css/select2.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
</head>
<body>
	<form action="save.php" method="post">
		<select style="width:700px" name="selections[]" class="selections" multiple="multiple">
		  <option value="AL">Alabama</option>
		  <option value="WY">Wyoming</option>
		  <option value="CA">California</option>
		  <option value="TX">Texas</option>
		  <option value="AZ">AZ</option>
		  <option value="NV">Nevada</option>
		</select>
		<button type="submit">Save</button>
	</form>

	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/select2/dist/js/select2.min.js"></script>

		<script type="text/javascript">
			$(".selections").select2();
		</script>
</body>
</html>
