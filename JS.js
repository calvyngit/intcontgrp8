// votre-fichier.js
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
        document.location.href="index.html"; 
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
