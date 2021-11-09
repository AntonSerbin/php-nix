<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form_grid</title>
    <link rel="stylesheet" href="form.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>




<h1 id="title"> Adaptive registration form</h1>
<form action="" method="get">
    <div class="parrent">
        <div id="description" class="description"><p>Enter your details:</p>
        </div>

        <div class="name-label" for="name"><label>*Name</label></div>
        <div class="name"><input type="text" autofocus name="name" id="name" placeholder="Enter your name" value="Anton" required>
        </div>

        <div class="email-label" for="email"><label>*E-mail</label></div>
        <div class="emailA"><input type="email" autofocus name="email" id="email" value="antons@ukr.net" placeholder="Enter your email"
                                   required></div>

        <div class="number-label" for="number"><label>*Age</label></div>
        <div class="number"><input type="text" autofocus name="age" id="number" value="100500" placeholder="Enter your age"
                                   onkeypress='return (event.charCode >= 48 && event.charCode <= 57)' min="3" max="110"
                                   required></div>


        <div class="dropdown-label" for="dropdown"><label>*Your possition</label></div>
        <div class="dropdown">
            <select name="dropdown" size="1">
                <option disabled>Select your current possition</option>
                <option value="Student">Student</option>
                <option value="Juniur">Juniur</option>
                <option value="Middle">Middle</option>
                <option value="Senior">Senior</option>
            </select>
        </div>


        <div class="checkbox-label">
            <label>
                Where have you get information about us?<br> (You could select several options)
            </label>
        </div>
        <div class="checkbox">
            <input type="checkbox" name="checkboxMates" value="mates">Mates<br>
            <input type="checkbox" name="checkboxInternet" value="internet">Internet<br>
            <input type="checkbox" name="checkboxSpam" value="spam">Spam
        </div>
        <div class="submitbutton">
            <button type="Submit" name="totalForm" id="submit">Submit</button>
            <br>
        </div>
    </div>
</form>

<div class="getInfo">
    <?php
    if ($_GET) {
    echo "<p>You have passed folowing information:</p>";
    echo "<p>Name: ".$_GET['name']."</p>";
    echo "<p>E-mail: ".$_GET['email']."</p>";
    echo "<p>Age: ".$_GET['age']."</p>";
    echo "<p>Possition: ".$_GET['dropdown']."</p>";
    echo "<p>Source of information: </p>";
        echo "<p>Mates: ";
        echo ($_GET['checkboxMates'])?'true':'false'."</p>";
        echo "<p>Internet: ";
        echo ($_GET['checkboxInternet'])?'true':'false'."</p>";
        echo "<p>Spam: ";
        echo ($_GET['checkboxSpam'])?'true':'false'."</p>";
    };
    ?>
</div>



</body>