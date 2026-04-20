# TP4 / TP5 Symfony 7

Ce projet suit les consignes des deux PDFs :

- `TP4`: Doctrine ORM et operations CRUD
- `TP5`: formulaires et validation

## Contenu

- Entite `Article`
- Repository `ArticleRepository`
- Controller CRUD avec routes par attributs
- Formulaire `ArticleType`
- Validation Symfony sur `nom` et `prix`
- Templates Twig Bootstrap 5

## Demarrage avec Docker

1. Construire et demarrer les conteneurs :

```powershell
docker compose up -d --build
```

2. Installer les dependances Composer dans le conteneur `app` :

```powershell
docker compose exec app composer install
```

3. Creer la base et lancer les migrations :

```powershell
docker compose exec app php bin/console doctrine:database:create
docker compose exec app php bin/console make:migration
docker compose exec app php bin/console doctrine:migrations:migrate
```

4. Ouvrir l'application :

```text
http://127.0.0.1:8000
```

## Base de donnees Docker

Le projet utilise par defaut la connexion suivante dans [`.env`](C:/Users/nadin/Desktop/cs/.env) :

```env
DATABASE_URL="mysql://app:app@database:3306/symfony_db?serverVersion=8.0"
```

Le nom d'hote `database` correspond au service MySQL dans `docker-compose.yml`.

## Commandes utiles

Installer les dependances :

```powershell
docker compose exec app composer install
```

Creer la base :

```powershell
docker compose exec app php bin/console doctrine:database:create
```

Creer une migration :

```powershell
docker compose exec app php bin/console make:migration
```

Appliquer les migrations :

```powershell
docker compose exec app php bin/console doctrine:migrations:migrate
```

Voir les logs :

```powershell
docker compose logs -f
```

Arreter les conteneurs :

```powershell
docker compose down
```

## Routes prevues

- `/`
- `/article/save`
- `/article/new`
- `/article/{id}`
- `/article/edit/{id}`
- `/article/delete/{id}`
