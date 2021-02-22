<?php
class Employee{
// dbection
private $db;
// Table
private $db_table = "employee";
// Columns
public $id;
public $name;
public $last_name;
public $height;
public $weight;
public $batch;
public $description;
public $address;
public $city;
public $province;
public $country;
public $phone;
public $email;
public $website;
public $MAD100;
public $MAD105;
public $MAD110;
public $MAD120;
public $MAD125;
public $MAD200;
public $MAD225;
public $status;




public $result;


// Db dbection
public function __construct($db){
$this->db = $db;
}

// GET ALL
public function getEmployees(){
$sqlQuery = "SELECT * FROM " . $this->db_table . "";
$this->result = $this->db->query($sqlQuery);
return $this->result;
}



// UPDATE
public function getSingleEmployee(){
$sqlQuery = "SELECT * FROM
". $this->db_table ." WHERE id =".$this->id;
$record = $this->db->query($sqlQuery);
$dataRow=$record->fetch_assoc();
$this->name = $dataRow['name'];
$this->last_name = $dataRow['last_name'];
$this->height = $dataRow['height'];
$this->weight = $dataRow['weight'];
$this->batch = $dataRow['batch'];
$this->description = $dataRow['description'];
$this->address = $dataRow['address'];
$this->city = $dataRow['city'];
$this->province = $dataRow['province'];
$this->country = $dataRow['country'];
$this->phone = $dataRow['phone'];
$this->email = $dataRow['email'];
$this->website = $dataRow['website'];
$this->MAD100 = $dataRow['MAD100'];
$this->MAD105 = $dataRow['MAD105'];
$this->MAD110 = $dataRow['MAD110'];
$this->MAD120 = $dataRow['MAD120'];
$this->MAD125 = $dataRow['MAD125'];
$this->MAD200 = $dataRow['MAD200'];
$this->MAD225 = $dataRow['MAD225'];
$this->status = $dataRow['status'];




}

// UPDATE
public function updateEmployee(){
$this->name=htmlspecialchars(strip_tags($this->name));
$this->last_name=htmlspecialchars(strip_tags($this->last_name));
$this->height=htmlspecialchars(strip_tags($this->height));
$this->weight=htmlspecialchars(strip_tags($this->weight));
$this->id=htmlspecialchars(strip_tags($this->id));

$sqlQuery = "UPDATE ". $this->db_table ." SET name = '".$this->name."',
last_name = '".$this->last_name."',
height = '".$this->height."',weight = '".$this->weight."'
WHERE id = ".$this->id;

$this->db->query($sqlQuery);
if($this->db->affected_rows > 0){
return true;
}
return false;
}


}
?>