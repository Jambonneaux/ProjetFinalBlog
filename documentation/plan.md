#   Projet Bloated Blog

## Jonathan Bonenfant

Collège de Maisonneuve
Environnement de développement Web 2
Enseignant : Keven Presseau-St-Laurent

---
## Date : 2021/10/10

### Description du projet
Mon projet sera un blog culinaire qui regroupe quelque bonne adresse ou j'aime bien manger, le site consistera d'une page d'accueil, de quelques articles avec un espace pour mettre des commentaires, une page d'inscription et de connexion (pour laisser un commentaire l'utilisateur devra être enregistré et connecter, mais il pourra lire les articles sans se connecter).

Il sera accesssible avec mon nom de domaine (www.bloatedbongos.com) et il devrait contenir un minimum de 3 pages plus une page par article (je ne sais pas encore combien d'article je vais publier).

---
# Ressources et Serveur d'hébergement

### Système d'exploitation - Windows 10
J'ai choisi de rester sur windows, car c'est le système ou je suis le plus à l'aise et ou j'ai le plus d'expérience.

### IDE - Atom
Mon IDE pour le projet sera Atom, car c'est l'IDE avec lequel j'ai le plus d'expérience et il contient une implémentation direct de GitHub qui sera mon programme de gestion de version.

### Gestion de version - GitHub
Je choisie comme logiciel de gestion de version GitHub, car c'est celui que je connais et qu'il est très facile d'utilisation, de plus il est déja intégré dans mon IDE.

### Création de base de données - MySQL Workbench
J'utiliserais l'hors de la construction de ma base de données le logiciel Workbench, car il est celui avec lequel je suis le plus à l'aise et je trouve qu'il est mieux que phpMyAdmin.

### Testing et serveur locale - XAMPP
J'ai choisie XAMPP pour ce projet, car il est déja installer et configurer sur mon ordinateur.

### Hébergeur - DigitalOcean
Mon projet sera héberger sur DigitalOcean, car c'est la que j'ai acheter mon serveur l'hors d'un travail plus tôt dans la session et qu'il est simple à utiliser.

---

# Plan de sécurisation
- Utilisation des RegEx du côté serveur et client pour valider les courriels et mots de passe pour qu'ils respecte mes demandes en matière de sécurité.
- Une blacklist de mot de passe commun pour éviter les mot de passe facile à deviner.
- Des mots de passe d'une longueur minimal de 12 caractère dont un chiffre et une lettre suivant  les recommendation du gouvernement du Canada en matière de sécurité des mots de passe.
- Pour contrer les injections SQL j'utiliserais PHP et la fonction "mysqli_real_escape_string" qui s'assurera que les inputs ne soit lu qu'en string et non en commande.
- Pour sécuriser mes mots de passe j'utiliserais la fonction PHP "password_hash" et son option BCRYPT par défault qui me donnera un salage aléatoire.
- Utilisation de SESSION avec un fingerprint pour éviter la navigation par URL.

---

# Médiagraphie

- **PHP**(2021) *Documentation php password_hash et salade BCRYPT* . Consulté le 10 octobre 2021, de https://www.php.net/manual/en/function.password-hash.php.
- **PHP**(2021) *Documentation php mysqli_real_escape_string* . Consulté le 10 octobre 2021, de https://www.php.net/manual/en/mysqli.real-escape-string.php.
- **Gouvernement du Canada** (28 juillet 2020) *Orientation sur les mots de passe* . Consulté le 10 octobre 2021 , de https://www.canada.ca/fr/gouvernement/systeme/gouvernement-numerique/securite-confidentialite-ligne/orientation-sur-mots-passe.html.
