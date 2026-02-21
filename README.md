
# Contexte


# Structure

![Architecture](Structure.png "TRstrcuture").


# Mesures

## Mesures d'accessibilité

## Mesures de sécurité


&nbsp;

# Technologies et fonctionnement

Le jeu est écrit en JS et tourne entièrement dans le navigateur.
La partie back-end est codée en langage PHP, pour les fonctionnalités de gérer le score, vérifier le mot de passe, la connexion, détruire la session et garder en écrit les événements

&nbsp;
Installer PHP en local sur Linux (Ubuntu)
```
sudo apt update »
sudo apt install php
```
&nbsp;
Vérifie que ça marche : 
```
php -v.
```

Démarrer le serveur local depuis le dossier projet :
```cd game_app/public```

&nbsp;

Ouvrir dans le navigateur
```php -S localhost:8000```
```http://localhost:8000```
&nbsp;&nbsp;

Pour les logs, créer un fichier et autoriser PHP à écrire dedans ?? 
```mkdir logs```, ```touch logs/app.log```, ```chmod 664 logs/app.log```


# Améliorations

# sources

https://www.how2lab.com/programming/php/mvc-beginner-guide
