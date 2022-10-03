<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Balance les infos !</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <form action="./thanks.php" method="post">
        <div>
            <label for="name">First Name :</label>
            <input type="text" id="fname" name="fname" placeholder="Yoda">

            <label for="name">Last Name :</label>
            <input type="text" id="lname" name="lname" placeholder="Master">

            <label for="mail">e-mail&nbsp;:</label>
            <input type="email" id="mail" name="mail" placeholder="master-yoda@jedi-online.net">

            <label for="phone">Phone number :</label>
            <input type="tel" id="phone" name="phone" placeholder="0836656565">

            <label for="topic">Choose a topic:</label>

            <select name="topic" id="topic">
                <option value="life" selected>Meaning of life</option>
                <option value="universe" selected>Meaning of universe</option>
                <option value="eveything">Meaning of everything</option>
            </select>

            <label for="msg">Message :</label>
            <textarea id="msg" name="message" placeholder="May the force be with you"></textarea>

            <button type="submit">Envoie le paté !</button>
        </div>
    </form>

</body>

</html>