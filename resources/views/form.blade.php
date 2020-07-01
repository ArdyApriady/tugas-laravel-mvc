<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign Up</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <form action="welcome" method="POST">
        @csrf
        <h3>Sign Up Form</h3>
        <label for="firstname"> First name: </label> <br>
        <input type="text" id="firstname" name="firstname" required /> <br>
        <label for="lastname"> Last name: </label> <br>
        <input type="text" id="lastname" name="lastname" /><br>

        <p><label for="gender">Gender</label></p>
        <input name="gender" id="male" type="radio" value="Male">Male</input> <br>
        <input name="gender" id="female" type="radio" value="Female">Female</input> <br>
        <input name="gender" id="other" type="radio" value="Other">Other</input> <br>

        <p>Nationality</p>
        <select name="nation" id="nation">
            <option value="Indonesian">Indonesian</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Australian">Australian</option>
        </select>
        <p>Language Spoken</p>
        <input type="checkbox" name="indonesia" id="language">
        <label for="indonesia">Bahasa Indonesia</label> <br>
        <input type="checkbox" name="english" id="language">
        <label for="english">English</label><br>
        <input type="checkbox" name="other" id="language">
        <label for="other">Other</label><br>

        <p>Bio</p>
        <textarea id="bio" rows="5" cols="50"></textarea><br>
        <button type="submit">Sign Up</button>
    </form>
</body>

</html>