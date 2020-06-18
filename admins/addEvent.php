<?php
require_once 'Database.php';
require_once 'Event.php';

if(isset($_POST['addEvent'])) {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $personcount = $_POST['personcount'];
    $food = $_POST['food'];
    $decoration = $_POST['decoration'];

    $dbcon = Database::getDb();

    $s = new Event($dbcon);

    $count = $s->addEvent($name, $date, $personcount, $food, $decoration);


    if($count){
        header("Location: events1.php");
    } else {
        echo "problem adding an event";
    }
}

?>



<html lang="en">

<head>
    <title>Add Event - Paradise resort</title>
    <meta name="description" content="Paradise resort">
    <meta name="keywords" content="Events booking">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" type="text/css">
</head>

<body>

<div>
    <!--    Form to Add  event -->
    <form action="" method="post">

        <div class="form-group">
            <label for="name">Name :</label>
            <input type="text" class="form-control" name="name" id="name" value=""
                   placeholder="Enter name">
            <span style="color: red">

            </span>
        </div>
        <div class="form-group">
            <label for="date">Date :</label>
            <input type="text" class="form-control" id="date" name="date"
                   value="" placeholder="Enter date">
            <span style="color: red">

            </span>
        </div>
        <div class="form-group">
            <label for="personcount">Personcount :</label>
            <input type="text" name="personcount" value="" class="form-control"
                   id="personcount" placeholder="Enter personcount">
            <span style="color: red">

            </span>
        </div>
        <div class="form-group">
            <label for="food">Food :</label>
            <input type="text" class="form-control" id="food" name="food"
                   value="" placeholder="Enter food">
            <span style="color: red">

            </span>
        </div>
        <div class="form-group">
            <label for="decoration">Decoration :</label>
            <input type="text" class="form-control" id="decoration" name="decoration"
                   value="" placeholder="Enter decoration">
            <span style="color: red">

            </span>
        </div>
        <a href="events1.php" id="btn_back" class="btn btn-success float-left">Back</a>
        <button type="submit" name="addEvent"
                class="btn btn-primary float-right" id="btn-submit">
            Add Event
        </button>
    </form>
</div>


</body>
</html
