<?php

$dishes = array(
	array('dish_id' => 1, 'dish' => 'Dish 1 Dish 1 Dish 1 Dish 1 Dish 1 Dish 1 Dish 1', 'count' => 1),
	array('dish_id' => 2, 'dish' => 'Dish 2', 'count' => 1),
	array('dish_id' => 3, 'dish' => 'Dish 3', 'count' => 1),
	array('dish_id' => 4, 'dish' => 'Dish 4', 'count' => 2),
);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>eMagicOne Lunch</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no;" />


<!--	<link rel="stylesheet"  href="jqmob/jquery.mobile-1.4.5.min.css">-->
<!--	<link rel="stylesheet"  href="jqmob/jquery.mobile.external-png-1.4.5.min.css">-->
	<link rel="stylesheet"  href="jqmob/theme-classic.css">
	<link rel="stylesheet"  href="jqmob/jquery.mobile.icons-1.4.5.min.css">
<!--	<link rel="stylesheet"  href="jqmob/jquery.mobile.inline-png-1.4.5.min.css">-->
	<link rel="stylesheet"  href="jqmob/jquery.mobile.structure-1.4.5.min.css">
<!--	<link rel="stylesheet"  href="jqmob/jquery.mobile.theme-1.4.5.min.css">-->

	<script src="jqmob/jquery.js"></script>
	<script src="jqmob/jquery.mobile-1.4.5.min.js"></script>

	<style>
		.wrapper{
			position :relative;
			width: 100%;
			height: 50px;
			margin-top: -5px;
		}
		.inner_left {
			position : absolute;
			top:0;
			right: 50px;
			left:0;
		}
		.inner_right{
			position :absolute;
			top:0;
			right:0;
			width: 50px;
		}
		.ui-bar, .ui-body {
			padding: .4em .4em;
		}
	</style>


</head>
<body>
<div data-role="page" class="ui-page ui-page-footer-fixed ui-page-active ui-page-theme-c">
	<div data-role="header" style="padding-left: 20px; padding-right: 20px;">
		<select name="select-custom-1" id="select-custom-1" data-native-menu="false">
			<option value="1">Dude 1</option>
			<option value="1">Dude 2</option>
			<option value="1">Dude 3</option>
			<option value="1">Dude 4</option>
			<option value="1">Dude 5</option>
		</select>

		<a href="/admin.php" style="margin-top: 5px;" data-ajax="false" class="ui-btn ui-btn-right ui-icon-delete ui-btn-icon-left">Admin</a>
	</div>


	<div data-role="content" class="ui-body">
		<div class="ui-corner-all">

			<div class="ui-bar ui-bar-b">
				<p>Date: <input type="text" data-role="date" data-inline="true"></p>
			</div>
			<div class="ui-body ui-body-c">
				<?php foreach($dishes as $dish) { ?>

					<div class="wrapper">
						<div class="inner_left">
							<input type="test" data-mini="true" name="checkbox-<?php echo $dish['dish_id']; ?>" id="checkbox-<?php echo $dish['dish_id']; ?>">
							<label for="checkbox-<?php echo $dish['dish_id']; ?>"><?php echo $dish['dish']; ?></label>
						</div>

						<div class="inner_right">
							<input type="text" name="text-1" data-mini="true"  id="text-1" value="<?php echo $dish['count']; ?>">
						</div>
					</div>

				<?php } ?>

			</div>
		</div>
	</div>



	<div data-role="footer" data-position="fixed">
		<h4>&copy; 2016 - eMagicOne</h4>
	</div>
</div>
</body>
</html>

