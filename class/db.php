<?php
/**
 * DB class
 */
class DB
{
	private $conn;
	
	public function __construct($servername, $username, $password, $dbname)
	{
		// Create connection
		$this->conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($this->conn->connect_error) {
		    return die("Connection failed: " . $this->conn->connect_error);
		} else {
			//return print "Connected!!";
		}
		//return print "Connected!!";
	}

	public function selrowquery($query){
		$result = $this->conn->query($query);
		return $result->fetch_assoc();
	}

	public function selrowsquery($query){
		$result = $this->conn->query($query);
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	$rows[] = $row;
		    };
		    return $rows;
		} else {
		   return print "0 results";
		}
	}

	public function singleinsert($query){
		if ($this->conn->query($query) === TRUE) {
		 	return print "New record created successfully";
		} else {
		    return print "Error: " . $query . "<br>" . $this->conn->error;
		}
	}

	public function insert($query){
		if ($this->conn->multi_query($query) === TRUE) {
		 	return print "New records created successfully";
		} else {
		    return print "Error: " . $query . "<br>" . $this->conn->error;
		}
	}

	public function __destruct(){
		$this->conn->close();
		return print "Database Closed successfully";
	}
}
?>