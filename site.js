//jQuery Functions        
$(function () { //jQuery func to get the categories from the db into droplist
    $.ajax({
        type: "POST",
        url: "http://localhost/playList_project/API.php?command=allCategories",// url to get all the categories
        success: function (data)
        {//                      1.catagories          2.HTML Element   3.emptyMessge
            HTMLbuilder.dropdown(jQuery.parseJSON(data), $('#dropdown'), 'Select an category');
        }
    });
});
$(document).ready(function () {//jQuery to search a text
    $("#search-box").keyup(function () {
        var userId = document.getElementById("userId").value;
            $.ajax({
            type: "POST",
            url: "http://localhost/playList_project/API.php?command=search&userId=" + userId + "&txt=" + $(this).val(),
            success: function (data){
                HTMLbuilder.serarchResaults(data);
            }
        });
    });
});

var HTMLbuilder = {// HTML Builder an object that contain our function to build the json into the HTML Element
    dropdown: function (result, dropdown, emptyMessage){
        // Remove current options
        dropdown.html('');
        // Add the empty option with the empty message
        dropdown.append('<option value="">' + emptyMessage + '</option>');
        // Check result isnt empty
        if (result !== '')
        {
            // Loop through each of the results and append the option to the dropdown
            $.each(result, function (k, v) {
                dropdown.append('<option value="' + v.id + '">' + v.category + '</option>');
            });
        }
    }
    ,serarchResaults: function (json){
        HTMLbuilder.playListTable(json);
        
    }
    ,editDIV:function(){
        var div = document.getElementById('editDiv');
        var htmlElment = '<form action="API.php" method="post">\n\
                          <input type="text" name="title" placeholder="title..."/> <br><br>\n\
                          <input type="url" name ="link" placeholder="link..."/><br><br>\n\
                          <textarea rows="4" cols="50" name="discription" placeholder="enter a movie discription..."></textarea><br><br> \n\
                          <input type="submit" name="command" class="btn-sm-blue" value="Edit">\n\
                          </form>';
        div.innerHTML = "";
        div.innerHTML += htmlElment;
    }
    ,playListTable: function (json){
        var movies = JSON.parse(json);
        var title = '<tr><th>title</th><th>discription</th><th>url</th></tr>';
        moviesTable.innerHTML = "";
            if (movies.length !== undefined && movies.length !== 0) {
                for (var i = 0; i < movies.length; i++) {
                    var id = movies[i].id;
                    var movieName = `<td>${movies[i].title}</td>`;
                    var movieDisc = `<td>${movies[i].description}</td>`;
                    var movieURL = `<td>${movies[i].link}</td>`;
                    var link = `${movies[i].link}`;
                    var playBtn = `<td><input type="button" class="btn-blue" value="Play" onclick="play('${link}')"/>`;
                    var editBtn = `<td><input type="button" class="btn-blue" value="Edit" onclick="edit('${id}')">`;
                    var deleteBtn = `<td><button name="command" class="btn-blue" value="Delete" onclick="deleteMovie('${id}')">Delete</button>`;
                    title += `<tr>${movieName}${movieDisc}${movieURL}${playBtn}${editBtn}${deleteBtn}</tr>`;
                }
                moviesTable.innerHTML += title;
            }
    }
};

function getDataWithAjax() {// Ajax Call to get Data from the URL below
    // XMLHttpRequest can make AJAX calls:
    var ajax = new XMLHttpRequest();
    // Configure: 
    // First parameter = The Method. // Second parameter = The Address. // Third parameter = true = async, false = sync    
    var userId = document.getElementById('userId').value;
    ajax.open("GET", "http://localhost/playList_project/API.php?command=userMovies&userId=" + userId, true);
    // Set a function which will be called in the AJAX process (several times):
    ajax.onreadystatechange = function () {
        // If we've got a response back from the server: 
        if (ajax.readyState === 4) {

            // If all is ok: 
            if (ajax.status >= 200 && ajax.status <= 299) {
                // Show the data:
                //  console.log(ajax.respon)
//                helpers.buildPlayListTable(ajax.responseText);
                HTMLbuilder.playListTable(ajax.responseText)
                //showData(ajax.responseText);// view
            } else { // There was some error:

                alert("Error Status: " + ajax.status + ", Error Message: " + ajax.statusText);
            }
        }
    };
    // Make the ajax call: 
    ajax.send();

}

function edit(id) {//function to edit specfic video from the playlist by ID
    document.cookie = "id =" + id;
    HTMLbuilder.editDIV();
}
function checkUser() {//function to check if user is exist //user is loggin
    var id = sessionStorage.getItem("userId");
    var id = document.getElementById('userId').value;
    if (id !== null)
        getDataWithAjax();//Ajax Call To Get Data
}
function setCookie(target) {//function to navigate to next page
    document.cookie = "";
    document.cookie = "nextPage =" + target;
}
function play(url) {    //function to play specific video from the playlist
    document.cookie = "url =" + url;
    window.location = "http://localhost/playList_project/play.php";
}
function deleteMovie(value) { //delete specfic video from the table by ID
    var txt;
    var res = confirm("Are you agree to delete this movie?");
    if (res == true) {
        txt = "You pressed OK!";
        document.cookie = "id =" + value;
    } else {
        txt = "You pressed Cancel!";
        location.reload();
    }
}