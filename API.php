<?php
// next PAGE GLOBAL VARIBALE
require_once 'Busniess_Logic.php';
session_start();
if (isset($_SESSION['userId'])) { //cheking if user is exist
    $userId = $_SESSION['userId'];
}
$command = $_REQUEST["command"]; //get the command from the post
switch ($command) {
    case "UPLOAD": //upload a movie to the db
        $title = $_POST['title'];
        $link = $_POST['link'];
        $discription = $_POST['discription'];
        $categoryId = $_POST['category'];
        $id = upload($userId, $categoryId, $title, $discription, $link);
        header('Location: showPlaylist.php');
        break;
    case "Edit": //edit a movie in the db by movieId
        $movieId = $_COOKIE['id'];
        $selectedMovie = getMovieById($movieId);
        echo $title . $link . $discription . "<br/>";
        $title = $_POST['title'];
        $link = $_POST['link'];
        $discription = $_POST['discription'];
        updateMovie($movieId, $title, $discription, $link);
        header('Location: showPlaylist.php');
        break;
    case "Delete": //deleting a movie from db by movieId
        $movieId = $_COOKIE['id'];
        deleteMovie($movieId);
        header('Location: showPlaylist.php');
        break;
    case "login": //login into the web by userName & Password
        echo $_POST['userName'];
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $hashedPass = hash('sha512', $password);
        $password = $hashedPass;
        $res = login($userName, $password);
        if ($res) {
            //save data about user in session...
            $id = getUserIdByName($userName); //after user login get the uuid
            session_start();
            echo $id;
            $_SESSION["userId"] = $id;
            $_SESSION["firstName"] = $userName;
            header('Location: showPlaylist.php');
        } else {
            header('Location: login.php');
        }
        break;
    case "register"://register a new user
        $userName = $_POST['userName'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $password = $_POST['password'];
        $hashedPass = hash('sha512', $password);
        $password = $hashedPass;

        register($userName, $firstName, $lastName, $password);
        $id = getUserIdByName($userName);
        session_start();
        $_SESSION["userId"] = $id;

        $page = $_COOKIE['nextPage'];
        header('Location:' . $page);
        break;
    case "getRegister":
        header('Location: registerPage.php');
        break;
    case "navigate": // navigate to the next page from the cookies
        $page = $_COOKIE['nextPage'];
        header('Location:' . $page);
        break;
    case "userMovies": //geting all the movies for user by userId
        if (isset($_GET['id']))
            $userId = $_GET['id'];
        $movies = getAllMovies($userId);
        echo $movies;
        break;
    case "allCategories":// geting all the catagories
        $categories = getAllCategories();
        echo $categories;
        break;
    case "logout": //logout
        session_start();
        session_destroy();
        $_SESSION['userId'] = '';
        header('Location: index.php');
        break;
    case "search": //searching in db by userId and text
        $text = $_GET['txt'];
        $userId = $_GET['userId'];
        $resault = getSearchedResault($userId, $text);
        echo $resault;
        break;
}