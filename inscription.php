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

    <script>
        let users = [];

        function registerUser() {
            const regUsername = document.getElementById('regUsername').value;
            const regPassword = document.getElementById('regPassword').value;

            // Valider les données (ajoutez des vérifications supplémentaires selon vos besoins)

            // Ajouter l'utilisateur au tableau
            users.push({ username: regUsername, password: regPassword });

            // Afficher la liste des utilisateurs inscrits
            displayUsers();
            alert('Inscription réussie !');
        }

        function loginUser() {
            const loginUsername = document.getElementById('loginUsername').value;
            const loginPassword = document.getElementById('loginPassword').value;

            // Vérifier les informations de connexion
            const loggedIn = users.some(user => user.username === loginUsername && user.password === loginPassword);

            // Afficher le message de bienvenue ou d'échec de connexion
            if (loggedIn) {
                alert('Bienvenue, ' + loginUsername + ' !');
            } else {
                alert('Échec de la connexion. Veuillez vérifier vos identifiants.');
            }
        }

        function displayUsers() {
            const userListElement = document.getElementById('userList');
            userListElement.innerHTML = '';

            // Afficher la liste des utilisateurs inscrits
            users.forEach(user => {
                const listItem = document.createElement('li');
                listItem.textContent = user.username;
                userListElement.appendChild(listItem);
            });
        }
    </script>
</body>
</html>
