// votre-fichier.js
let users = [];

function registerUser(regUsername, regPassword) {
    // Valider les données (ajoutez des vérifications supplémentaires selon vos besoins)
    
    // Ajouter l'utilisateur au tableau
    users.push({ username: regUsername, password: regPassword });
}

function loginUser(loginUsername, loginPassword) {
    // Vérifier les informations de connexion
    return users.some(user => user.username === loginUsername && user.password === loginPassword);
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

module.exports = { registerUser, loginUser, displayUsers };
