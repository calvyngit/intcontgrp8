<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription et Connexion (Frontend Only)</title>
</head>
<body>

    <h2>Inscription</h2>
    <form id="registrationForm">
        <label for="regUsername">Nom d'utilisateur:</label>
        <input type="text" id="regUsername" required>
        <br>
        <label for="regPassword">Mot de passe:</label>
        <input type="password" id="regPassword" required>
        <br>
        <button type="button" onclick="registerUser()">S'inscrire</button>
    </form>

    <h2>Connexion</h2>
    <form id="loginForm">
        <label for="loginUsername">Nom d'utilisateur:</label>
        <input type="text" id="loginUsername" required>
        <br>
        <label for="loginPassword">Mot de passe:</label>
        <input type="password" id="loginPassword" required>
        <br>
        <button type="button" onclick="loginUser()">Se connecter</button>
    </form>

    <h2>Utilisateurs inscrits</h2>
    <ul id="userList"></ul>
    <script type="text/javascript" src="JS.js"></script>
</body>
</html>
