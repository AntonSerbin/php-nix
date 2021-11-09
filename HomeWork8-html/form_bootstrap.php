<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Adaptive Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<h2 class="text-center">Bootstrap Adaptive Form</h2>
<form action="" method="post">
    <div class="container">
        <div class="row">
            <div class=" form-group col-lg-6 col-sm-12">
                <label for="email">Email:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                    </div>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
            </div>
            <div class="form-group col-lg-6 col-sm-12">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>
            <div class="checkbox col-lg-12 col-sm-12">
                <label><input type="checkbox" name="remember"> Remember me</label>
            </div>
            <button type="submit" class="btn-success">Submit</button>
        </div>
    </div>
</form>
</div>
<?php
if ($_POST) {
    echo "<p style='margin-bottom: 2px'><br>You have passed folowing information:</p>";
    echo "<p style='margin-bottom: 2px'>E-mail: " . $_POST['email'] . "</p>";
    echo "<p style='margin-bottom: 2px'>Password: " . $_POST['pwd'] . "</p>";
    echo "<p style='margin-bottom: 2px'>Do remember info?  ";
    echo ($_POST['remember']) ? 'true' : 'false' . "</p>";
};
?>
</body>
</html>