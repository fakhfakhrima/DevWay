# DevWay

## Présentation Générale

**DevWay** est une application web dédiée à l'éducation en ligne, offrant une plateforme interactive pour les apprenants et les éducateurs.


## Aperçu de l'Interface

L'interface utilisateur est conçue pour être intuitive, facilitant la navigation entre les différentes sections de l'application, notamment les quiz, la galerie d'images, les projets open source, et les articles de blog.

![Interface d'Accueil](images/home1.png)

---

## Fonctionnalités Principales

- ✨ **Système de Connexion** :
  🔐 Permet aux utilisateurs de créer un compte et de se connecter pour accéder aux ressources éducatives.
- 🎯 **Quiz Interactifs** :
  📝 Propose des quiz pour évaluer les connaissances des utilisateurs dans divers domaines.
- 👥 **Gestion des Utilisateurs** :
  ⚙️ Permet l'ajout, la modification et la suppression des comptes utilisateurs.
- 🖼️ **Galerie d'Images** :
  🌄 Affiche des images éducatives pour enrichir l'apprentissage.
- 🌍 **Projets Open Source** :
  🚀 Accès et présentation de divers projets open source réalisés par la communauté ou les utilisateurs pour inspirer les apprenants.
- 📰 **Articles de Blog** :
  ✍️ Inclut des articles sur divers sujets éducatifs, technologiques, ou liés au développement personnel.

## Technologies Utilisées

- 🌐 **Frontend** : HTML5, CSS3, JavaScript
- 🛠️ **Backend** : PHP avec MySQL comme base de données
- 💽 **Serveur de Base de Données** : MySQL
- 🛠️ **Outils de Développement** : MySQL Workbench pour la création de tables, XAMPP pour le serveur virtuel, et un navigateur internet pour l'accès

## Structure du Projet

```bash
DevWay/
├── database/                   # Scripts SQL pour la configuration de la base de données
├── gallery_home/               # Fichiers liés à la galerie d'images de la page d'accueil
├── image_quiz/                 # Images utilisées dans les quiz
├── images/                     # Autres images utilisées dans l'application
├── introduction-quiz/          # Fichiers relatifs aux quiz d'introduction
├── it field/                   # Contenu spécifique au domaine des technologies de l'information
├── login_system/               # Système de gestion des connexions utilisateurs
├── quiz/                       # Fichiers des différents quiz
├── user_crud/                  # Gestion des opérations CRUD pour les utilisateurs
├── index.php                   # Page d'accueil principale
├── style.css                   # Feuilles de style pour l'application
└── README.md                   # Documentation du projet
```

## Instructions d'Installation

1. **Cloner le Répertoire** : Clonez le dépôt GitHub sur votre machine locale.  
2. **Configurer le Serveur** : Utilisez XAMPP pour configurer un serveur Apache et MySQL.  
3. **Importer la Base de Données** : Utilisez MySQL Workbench pour importer les scripts SQL situés dans le dossier `database/`.  
4. **Lancer l'Application** : Placez les fichiers du projet dans le répertoire `htdocs` de XAMPP et accédez à `http://localhost/DevWay/` via votre navigateur.


