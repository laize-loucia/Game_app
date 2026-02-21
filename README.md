
# Contexte


# Structure

<center>

![Architecture](Structure.png "TRstrcuture").

</center>




&nbsp;

# Technologies

Le jeu est entièrement écrit en **JS** et tourne dans le navigateur.&nbsp;
La partie back-end est codée en langage **PHP**, pour les fonctionnalités de gérer le score, vérifier le mot de passe, la connexion, détruire la session et garder en écrit les événements

# Implémentation

&nbsp;
Installer PHP en local sur Linux (Ubuntu)
```
sudo apt update
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

&nbsp;
Pour les logs, créer un fichier et autoriser PHP à écrire dedans ?? 

&nbsp;
```mkdir logs```, ```touch logs/app.log```, ```chmod 664 logs/app.log```


# Mesures

## Mesures d'accessibilité

## Mesures de sécurité

# Améliorations

# Sources

https://www.how2lab.com/programming/php/mvc-beginner-guide
