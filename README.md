# Projet_Docker_4IW

Ce projet a été réalisé par:

- KHERRAZ Mohammed Achraf
- GHLIS Youri
- EVRARD Pierre
- Classe : 4IW3

## Lancement du projet

Pour lancer le projet, exécutez les commandes suivantes dans votre terminal :

```bash
docker network create symfony-network
docker-compose -f docker-compose-db.yml up --build
docker-compose -f docker-compose-symfony.yml up --build
````


Ces commandes permettent de créer un réseau Docker nécessaire pour que les conteneurs communiquent entre eux, puis de construire et de démarrer les services définis dans les fichiers docker-compose-db.yml et docker-compose-symfony.yml.

Images Docker sur Docker Hub
Les images Docker utilisées dans ce projet sont disponibles sur Docker Hub. Vous pouvez les télécharger en utilisant les commandes suivantes :

```bash
docker pull achraf97/astrosheesh-composer
docker pull achraf97/astrosheesh-adminer
docker pull achraf97/astrosheesh-symfony
````
Chaque image sert un but spécifique dans le projet :

achraf97/astrosheesh-composer : Cette image est utilisée pour gérer les dépendances PHP du projet.
achraf97/astrosheesh-adminer : Cette image offre une interface web pour la gestion de bases de données.
achraf97/astrosheesh-symfony : Cette image contient l'environnement Symfony pour exécuter l'application.
Assurez-vous de remplacer les commandes de pull par des commandes de run avec les bons paramètres si vous souhaitez exécuter directement les images.
