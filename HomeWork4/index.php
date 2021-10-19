<!----------------Task1------------------->
<!--создать форму оставить отзыв-->
<!--поле имя-->
<!--поле комментарий-->

<label for="reviewForm">The form of review, please enter your name and review</label>
<form name = "reviewForm" action="serv.php" method="post">
    <label for="review">Review: >
        <textarea name="review"></textarea>
    </label>
    <br>
    <label for="name">Name:>
        <input type="text" name="name">
    </label>
    <br>
    <button type="submit">OK this form</button>
    <button type="reset">RESET this form</button>

</form>

<!----------------Task2------------------->
<!--создать форму добавить товар в корзину-->
<!--id товара-->
<!--количество-->
<br>
<label for="cartID">The cart. Please add ID and quantity</label>
<form name = "cartID" action="serv.php" method="post">
    <label for="goodID">ID number: >
        <input type="number" name="goodID"  >
    </label>
    <br>
    <label for="quantityGood">Quantity: >
        <input type="number" name="quantityGood" min="0" max="9999">
    </label>
    <br>
    <button type="submit">OK this form</button>
    <button type="reset">RESET this form</button>

</form>

<!----------------Task3------------------->
<!--обратная связь перезвонить клиенту-->
<!--имя-->
<!--телефон-->

<br>
<label for="callbackForm">Callback form</label>
<form name = "callbackForm" action="serv.php" method="post">
    <label for="nameCallback">Name: >
        <input type="text" name="nameCallback"  >
    </label>
    <br>
    <label for="phoneCallback">Phone: >
        <input type="tel" name="phoneCallback" pattern="[+]{1}[0-9]{12}"><br>
        <small>Format: +380997168362</small>
    </label>
    <br>
    <button type="submit">OK this form</button>
    <button type="reset">RESET this form</button>

</form>

