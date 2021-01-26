<?php
	// De kern van de CRUD OOP, houdt alle gegevens bij.

	Class Model{ // Class voor de database

		private $server = "localhost";
		private $username = "root";
		private $password;
		private $db = "oop_crud";
		private $conn;

		public function __construct(){
			try { // Verbinding maken met database

				$this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
			} catch (Exception $e) {
				echo "Verbinding mislukt" . $e->getMessage();
			}
		}

		public function insert(){

			if (isset($_POST['submit'])) { // De gegevens worden hier ontvangen
				if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address'])) {
					if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address']) ) {

						$name = $_POST['name'];
						$mobile = $_POST['mobile'];
						$email = $_POST['email'];
						$address = $_POST['address'];

						$query = "INSERT INTO records (name,email,mobile,address) VALUES ('$name','$email','$mobile','$address')"; // Zorgt voor UPDATE functie
						if ($sql = $this->conn->query($query)) {
							echo "<script>alert('Gegevens toegevoegd');</script>";
							echo "<script>window.location.href = 'index.php';</script>";
						}else{
							echo "<script>alert('Niet gelukt');</script>"; // Wanneer connectie mislukt is
							echo "<script>window.location.href = 'index.php';</script>"; // Breng jou naar de Create pagina
						}

					}else{
						echo "<script>alert('Niet alle gegevens zijn ingevuld');</script>"; // Error code voor als niet alle ingevuld zijn
						echo "<script>window.location.href = 'index.php';</script>"; // Zorgt ervoor dat je naar een andere pagina gaat
					}
				}
			}
		}

		public function fetch(){
			$data = null;

			$query = "SELECT * FROM records"; // Selecteerd gegevens vanuit de tabel
			if ($sql = $this->conn->query($query)) {
				while ($row = mysqli_fetch_assoc($sql)) {
					$data[] = $row;
				}
			}
			return $data;
		}

		public function delete($id){

			$query = "DELETE FROM records where id = '$id'";
			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}

		public function fetch_single($id){

			$data = null;

			$query = "SELECT * FROM records WHERE id = '$id'"; // Simpele select FROM statement
			if ($sql = $this->conn->query($query)) {
				while ($row = $sql->fetch_assoc()) {
					$data = $row;
				}
			}
			return $data;
		}

		public function edit($id){

			$data = null;

			$query = "SELECT * FROM records WHERE id = '$id'"; // Gegevens van records tabel worden geselecteerd
			if ($sql = $this->conn->query($query)) {
				while($row = $sql->fetch_assoc()){
					$data = $row;
				}
			}
			return $data;
		}

		public function update($data){

			$query = "UPDATE records SET name='$data[name]', email='$data[email]', mobile='$data[mobile]', address='$data[address]' WHERE id='$data[id] '";

			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}
	}

 ?>
