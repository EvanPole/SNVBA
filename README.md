# README - Projet Laravel

## 1. Configuration de la base de données

Assurez-vous d'avoir les informations de votre base de données prêtes. Vous devez les ajouter dans le fichier `.env` situé à la racine du projet. Copiez le fichier `.env.example` et renommez-le en `.env`, puis modifiez les variables suivantes selon vos paramètres de base de données :

```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=votre_base_de_donnees
DB_USERNAME=votre_utilisateur
DB_PASSWORD=votre_mot_de_passe
```

## 2. Migration de la base de données

Utilisez Artisan, l'outil de ligne de commande de Laravel, pour exécuter les migrations. Les migrations vous permettent de définir et de gérer la structure de votre base de données. Pour exécuter les migrations, ouvrez un terminal à la racine du projet et exécutez la commande suivante :

```bash
php artisan migrate
```

Cela créera automatiquement les tables de base de données nécessaires pour votre application.

## 3. Exécution du projet

Une fois la base de données configurée et les migrations exécutées, vous pouvez lancer votre projet. Assurez-vous d'avoir configuré un serveur web tel qu'Apache ou Nginx, ou utilisez le serveur de développement intégré de PHP en exécutant la commande suivante dans votre terminal :

```bash
php artisan serve
```

Cela démarrera un serveur de développement sur `http://localhost:8000` par défaut. Vous pouvez accéder à votre application en ouvrant un navigateur Web et en visitant cette URL.

## 4. gére les permissions

dans la bdd avec un editeur comme heidisql vous pouvez changer les permission dans la table user

- null = utilisateur lambda
- 1 = membre du bureau
- 10 = administrateur
