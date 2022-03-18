<?php 

class Results
{
	private $connection;
	private $session;

	public function __construct()
	{
		$this->connection = new DatabaseShell;
		$this->session = new SessionShell;
	}

	public function getAllPromo() {
		$result = $this->connection->select("SELECT id, name, phone, promocode, date_format(date + interval 0 hour,'%d.%m.%Y %H:%i:%s') AS date  FROM promobase");
		return $result;
	} 

	public function insertPromo($promoCode, $name, $phone)
	{
		if ($this->countAllPromo($promoCode) > 0) {
			echo 'Данный промокод был добавлен ранее';
		} else {
			$name = htmlspecialchars($name);
			$phone = htmlspecialchars($phone);

			$result = $this->connection->insert("INSERT INTO promobase SET name = ?, phone = ?, promocode = ?", [$name, $phone, $promoCode]);
			if ($result) {
				echo 'Ваш промокод был успешно добавлен. Ждите результата розыгрыша!';
			}	
		}
	}

	private function countAllPromo($promoCode)
	{
		$result = $this->connection->selectCount("SELECT * FROM promobase WHERE promocode = ?", [$promoCode]);
		return $result;	
	}

}