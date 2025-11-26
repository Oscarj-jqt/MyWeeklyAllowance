# Application de Gestion d’Argent de Poche (Méthode TDD)

## Fonctionnalités

- Création de compte ado
- Dépôt d’argent
- Enregistrement de dépenses
- Somme hebdomadaire automatique

## Organisation projet

- src/ : Code source 
- tests/ : Tests unitaires (PHPUnit)

## Installation

```sh
git clone https://github.com/Oscarj-jqt/MyWeeklyAllowance
composer install
```

## Lancer les tests

```sh
php vendor/phpunit/phpunit/phpunit tests
```

## Contribuer / Répartition des tâches

1. Création de compte ado — Membre 1
2. Dépôt d’argent — Membre 2
3. Dépenses — Membre 3
4. Sum hebdo — Membre 4

---

## Règles

- TDD : Écrire d’abord un test avant de coder la fonctionnalité
- Un test = une fonctionnalité
- À chaque modif du composer.json ou nouvelle classe, lance :

```sh
composer dump-autoload
```
