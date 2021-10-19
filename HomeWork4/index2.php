<?php
session_start();

if ($_POST['name']) echo "You entered Name: ".($_POST['name'])."<br>";
if ($_POST['phoneCart']) echo "Your telephone number: " .($_POST['phoneCart'])."<br>";
if ($_POST['deliveryCart']) echo "Type of delivery: " .($_POST['deliveryCart'])."<br>";
if ($_POST['addressCart']) echo "Address: " .($_POST['addressCart'])."<br>";

if (!$_SESSION["idGoods"]) $_SESSION["idGoods"]=[rand(11111,99999),rand(11111,99999),rand(11111,99999)];
$index=0;
echo "You have chosen following goods:";
foreach ($_SESSION["idGoods"] as $value) {
    echo "<br>"."ID".$index.": ".$value;
    $index++;
}
echo "<br>";
?>
<p>Please, enter following information:</p>
<form name = "cartForm" action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="post">
    <label for="name">Name:</label>
        <input type="text" name="name">
    <br>
    <label for="phoneCart">Phone: </label>
        <input type="tel" name="phoneCart" pattern="[+]{1}[0-9]{12}" value="+380997168362"> <br>
        <small style="color:grey">Format: +380997168362</small>
    <br>
    <label for="deliveryCart">Phone: </label>
        <select name="deliveryCart">
            <option value="ukrPoshta">UkrPoshta</option>
            <option value="newPoshta">NovayaPoshta</option>
            <option value="justin">Justin</option>
            <option value="meest">Meest Expres</option>
        </select>
    <br>
    <label for="addressCart">Address: </label>
    <input type="text" name="addressCart" value="Na derevnu dedushke"> <br>
    <br>
    <button type="submit">OK this form</button>
    <button type="reset">RESET this form</button>
</form>

<?php
$_SESSION["orderContacts"] = $_POST;
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>



