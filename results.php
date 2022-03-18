<?php
include 'config/config.php';
require_once 'config/Autorization.php';
require_once 'config/Results.php';

$autorization = new Autorization;
if($autorization->noEmptyAuth($session->get('auth'))) {

	$results = new Results;
	?>

	<!DOCTYPE html>
	<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Результаты</title>
		<link rel="stylesheet" href="<?=$site?>assets/css/bootstrap.min.css">
	</head>
	<body>
		<div class="content">
			<h4 class="text-center">Список участников акции</h4>
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Имя</th>
						<th scope="col">Телефон</th>
						<th scope="col">Промокод</th>
						<th scope="col">Дата</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$num = 1;
					$totalResults = $results->getAllPromo();
					if(isset($totalResults)) {
						foreach($totalResults as $result) { ?>
							<tr>
								<th><?=$num?></th>
								<td><?=$result['name']?></td>
								<td><?=$result['phone']?></td>
								<td><?=$result['promocode']?></td>
								<td><?=$result['date']?></td>
							</tr>
							<?php 
							++$num;
						}
					}
					?>
				</tbody>
			</table>
		</div>
	</body>
	</html>

	<?php 
} else {
	$autorization->toPage($site.'login.php');
}
?>