<?php
$connect = new PDO("mysql:host=localhost; dbname=itlog", "root", "");

if(isset($_POST['save_student']))
{
    $id = $_POST['id'];
    $firstname =  $_POST['firstname'];
    $lastname =  $_POST['lastname'];
   	$email =  $_POST['email'];
   	$password = $firstname . $lastname;
    $permission =  $_POST['permission'];
    $branch =  $_POST['branch'];


    if($id == NULL || $firstname == NULL || $lastname == NULL || $email == NULL || $permission == NULL || $branch == NULL ) {
    	$res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];

    } else {
    	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

    $query = "
	INSERT INTO tblusers (id, firstname, lastname,  email, password, permission, branchid, active) VALUES (:id, :firstname, :lastname, :email, :password,  :permission, :branchid, 1)
	";

	$statement  = $connect->prepare($query);
	$statement->execute([
		':id' => $id,
		':firstname' => $firstname,
		':lastname' => $lastname,
		':email' => $email,
		':password' => $password,
		':permission' => $permission,
		':branchid' => $branch
	]);

	

	$result = $statement->fetchAll();

	if (isset($result)) {
		$res = [
            'status' => 200,
            'message' => 'User Account Created Successfully'
        ];

	}

        } else {
        $res = [
            'status' => 69,
            'message' => 'Please enter a valid email'
        ];
        }
    }

    echo json_encode($res);
    return;



}


 ?>