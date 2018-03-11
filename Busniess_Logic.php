<?php

require_once 'DAL.php';

function register($userName, $firstName, $lastName, $password) {
    $conn = connect();
    //check if user is exist - Already Registerd...
    $sql1 = "SELECT * FROM users WHERE username = '".$userName."' ";
    $user = getObject($sql1);
    if($user!== null){
    $sql = "INSERT INTO users(`userName`, `firstName`, `lastName`, `password`) VALUES ('$userName','$firstName','$lastName','$password')";
    insert($sql);
    echo 'user registered Sucessfully';
    }else 
        echo 'user is already registerd!';
}

function login($userName, $password) {
    $sql = "SELECT id, username FROM users where username = '" . $userName . "' and password = '" . $password . "'";
    $res = dologin($sql);
    return $res;
}

function upload($userId, $categoryId, $title, $discription, $link) {
    $sql = "INSERT INTO movies(userId, categoryId, title, description, link) VALUES ($userId,'$categoryId','$title','$discription','$link')";
    $id = insert($sql);

    return $id;
}

function getAllMovies($uId) {
    $sql = "select * from movies where userId=$uId";
    $movies = getCollection($sql);
    return json_encode($movies);
}

function getUserIdByName($userName) {
    $sql = 'SELECT id FROM users WHERE userName = "' . $userName . '"';
    $id = getUserId($sql);
    return $id;
}

function deleteMovie($movieId) {
    $sql = 'DELETE FROM `movies` WHERE id = "' . $movieId . '"';
    insert($sql);
}

function getMovieById($id) {
    $sql = 'SELECT * FROM movies WHERE id = "' . $id . '"';
    $movie = getObject($sql);
    return $movie;
}

function updateMovie($id, $title, $discription, $link) {
    $sql = 'UPDATE movies SET link = "' . $link . '" ,title="' . $title . '" ,description="' . $discription . '" WHERE id="' . $id . '"';
    $id = update($sql);

    return $id;
}

function getAllCategories() {
    $sql = "select * from categories";
    $categories = getCollection($sql);
    return json_encode($categories);
}

function getSearchedResault($uId, $txt) {
    $txt = '%' . $txt . '%';
    $sql = "SELECT * FROM `movies` WHERE movies.userId = " . $uId . " AND (movies.description LIKE '" . $txt . "' OR movies.title LIKE '" . $txt . "')";
    $resault = getCollection($sql);
    return json_encode($resault);
}
