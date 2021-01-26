<!doctype html>
<html lang="en">
  <head>
		<!-- Deze code zorgt voor het lezen van gegevens !-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>OOP CRUD Read</title>
		<style>
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333;
		}

		li {
			float: left;
			border-right:1px solid #bbb;
		}

		li:last-child {
			border-right: none;
		}

		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		li a:hover:not(.active) {
			background-color: #111;
		}

		.active {
			background-color: #4CAF50;
		}
	</style>
  </head>
  <body>
		<ul>
			<li><a href="info.php">CRUD OOP</a></li>
			<li><a href="records.php">Gegevens</a></li>
			<li><a href="index.php">Invoegen</a></li>
		</ul>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">Gegevens lezen</h1>
					<hr style="height: 1px;color: black;background-color: black;">
					<hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
          <?php

              include 'model.php';
              $model = new Model();
              $id = $_REQUEST['id'];
              $row = $model->fetch_single($id);
              if(!empty($row)){

          ?>
          <div class="card">
            <div class="card-header">
              Gegevens:
            </div>
            <div class="card-body">
              <p>Voornaam = <?php echo $row['name']; ?></p>
              <p>Email Adres = <?php echo $row['email']; ?></p>
              <p>Telefoon Nummer = <?php echo $row['mobile']; ?></p>
              <p>Adres = <?php echo $row['address']; ?></p>
            </div>
          </div>
          <?php
            }else{
            echo "Geen gegevens";
          }
          ?>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> !-->
  </body>
</html>
