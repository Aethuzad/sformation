# FOAD Symfony

## Projet

Réaliser un site web qui liste des formations.

Une formation doit contenir :
- titre
- résumé
- texte explicatif de la formation
- durée en jour/mois
- niveau : débutant,intermediaire,expert
- lieu : présentiel,distanciel

Le site web consiste est une page qui liste les dernieres formations classé par durée de la formation , de la plus courte à la plus longue.

Réaliser ce site web avec une installation compléte de **Symfony**.

## Git

- Votre travail final se fera dans une branche nommée **developp**
- Vous devrez faire des commits fréquents (**atomiques**) 
- Travailler dans des branches , une branche par fonctionnalité

## Design

Utiliser le framework css **bosstrap** pour effectu afficher les formations sous formes de **cards**.

Bon travail.

---

- Installation d'un Symfony complet

```
symfony new sformation --webapp
```

- Connecter Symfony à votre base de donnée

```
# DATABASE_URL="mysql://app:!ChangeMe!@127.0.0.1:3306/app?serverVersion=10.11.2-MariaDB&charset=utf8mb4"
```
- Créer la base de donnée

```
symfony console doctrine:database:create
```

- Créer une entitée formation avec les champs :
    - titre string 255
    - description text
    - duree int
    - niveau string 20
    - lieu string 15

```
symfony console make:entity
```

- Créer un controller Home avec requete

```
symfony console make:controller
```

- Ajouter Bootstrap 
- Créer le template de la homepage