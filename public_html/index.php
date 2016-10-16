<?php require_once("php/templates/head.php");?>

<body class="sfooter">
	<div class="sfooter-content">
		<div class="container">
			<main>
				<div id="scroll-box">

					<!-- do yer thang, angular -->
					<div ng-view></div>

				</div>
			</main>
		</div>

	</div><!-- sfooter content -->

<?php require_once("php/templates/footer.php");?>


</body>
</html>
