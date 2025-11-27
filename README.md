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

## Fonctionnalités

1. Création de compte
2. Dépôt d’argent
3. Dépenses
4. Sum hebdo 

---

## Règles

- À chaque modif du composer.json ou nouvelle classe, lance :

```sh
composer dump-autoload
```

## Lancer les tests

```sh
php vendor/phpunit/phpunit/phpunit tests
```
