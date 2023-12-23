# Literie 3000 🛏️
Laravel CRUD. ECF back durant ma formation chez M2i puis amélioré pendant mon temps libre
Contexte : Monsieur Dodo travaille en magasin chez Literie3000 avec des catalogues papiers. Il aimerait avoir une solution dématérialisée afin d’administrer son catalogue. Il souhaiterait une solution interne qui lui permette :
- de lister l’ensemble des matelas,
- d’ajouter un matelas,
- de modifier un matelas,
- de supprimer un matelas.

## Langages utilisés
- Front-end : HTML, CSS (Tailwind)
- Back-end : PHP, mySql, Laravel

## Screenshot
![Screenshot page d'accueil](https://github.com/julie-vandenberghe/ecf_back/assets/120843391/b9b2ba97-1748-4ade-aefa-a658ddc0a859)

## Installation

Après avoir clôné le dépôt :

```bash
git clone ...
```

Vous installez Laravel avec Composer :

```bash
composer install
```

Vous créez un fichier `.env` :

```bash
php -r "file_exists('.env') || copy('.env.example', '.env');"
```

On génère une clé s'il n'y en a pas :

```bash
php artisan key:generate
```

Pour la base de données, on configure bien le `.env` et on peut lancer les migrations (et le seeder) :

```bash
php artisan migrate
php artisan migrate:fresh --seed
```

## Fonctionnalités implémentées
Une factory et un seeder ont été crée pour remplir facilement la base de données. 

## Routes
### Home ⇒ Affiche 4 matelas
On affiche les 4 matelas modifiés en dernier.

### Index ⇒  Listing des matelas 
On affiche l’ensemble des matelas de notre base de données. 
- Si aucune ressource n’est présente, on affichera un message “Il n’y a pas de ressources”.

### Show ⇒ Détail d’un matelas 
On affiche le détail du matelas, donc tous les champs. 

### Create ⇒ Affiche un formulaire permettant de créer un matelas 
- Si tout est ok, on redirige vers la liste avec un message de succès.
- Sinon on affiche les messages d’erreurs. 
