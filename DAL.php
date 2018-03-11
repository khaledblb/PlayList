<?php
function connect(){ //Connect function make a connect to db with the username and password
    $conection = mysqli_connect("localhost", "root", "", "playList_project");
    if(mysqli_errno($conection)){
                die("Failed to connect to the database. Error: " . mysqli_connect_error());
    }
    mysqli_set_charset($conection, "utf-8");
    return $conection;
}
function insert($sql){  // insert function applying sql queries into the DB
    $connection = connect();
    mysqli_query($connection, $sql);
    
    $id = mysqli_insert_id($connection);
    
    mysqli_close($connection);
    
    return $id;
}
function update($sql){  //update function making an update into the DB tables
    $connection = connect();
    mysqli_query($connection, $sql);
    $affectedRows = mysqli_affected_rows($connection);
    if($affectedRows ===  0)
        echo 'no effected Rows';
    mysqli_close($connection);
    return $affectedRows;
}

function delete($sql){  //delete function making a delete query on the DB
    $connection = connect();
    $affectedRows = mysqli_affected_rows($connection);
    if($affectedRows ===  0)
        echo 'no effected Rows';
    
    mysqli_close($connection);
}

function getObject($sql){ // function to get an object from the db by sql query

    $connection = connect();
    $result = mysqli_query($connection, $sql);
    $object = mysqli_fetch_object($result);
    mysqli_close($connection);
    return $object;
}


function getCollection($sql){ //get collection from the db (array)
    // Connect to the database: 
    $connection = connect();
    
    // Get data from the database: 
    $result = mysqli_query($connection, $sql);
    
    // Convert the data to a collection: 
    $collection = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Close the database: 
    mysqli_close($connection);
    
    // Return the object:
    return $collection;
    
}

function dologin($sql){ //making a login into the website
    $connection = connect();
    $result = mysqli_query($connection, $sql);
    $num_rows = mysqli_num_rows($result);
    
    mysqli_close($connection);
    if ($num_rows > 0) {
        return TRUE;
    } else {
        return FALSE;
    }
    
}
function getUserId($sql){ //function to get User Id from the DB by userName
    $conn = connect();
    $result = mysqli_query($conn,$sql) or die('Error connecting to database');
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['id'];
    mysqli_close($conn);
    return $user_id;
}

/*function getFirstName($sql){ 
    $conn = connect();
    $result = mysqli_query($conn,$sql) or die('Error connecting to database');
    $row = mysqli_fetch_assoc($result);
    $firstName = $row['firstName'];
    mysqli_close($conn);
    return $firstName;
}*/