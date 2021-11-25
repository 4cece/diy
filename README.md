DIY COSMETIC est un site sur lequel les personnes qui aime faire leur propre cosmétique (crème, lotion, savon ...) peuvent créer leur recettes, gèrer leur stock d'ingredient et lire des articles sur leur sujet préféré.


Pour récupérer ce projet :

Cliquer sur le bouton Fork en haut a droite de l'écran, cela vous permettra de récupérer ce projet dans votre propre github

Cloner ensuite votre projet forké dans votre ordinateur avec la commande :

git clone https://github.com/{votreuser}/cours-laravel.git

Une fois dans votre projet sur VS Code, ouvrir un terminal puis :

npm install

Installer les dépendances Composer / Vendor en lançant le script :

composer update

Copier le fichier .env.example puis le renommer en .env, y change le nom de votre database, ainsi que vos credentials

NB : Il faudra au préalable créer la database dans PhpMyAdmin

Puis entrer la commande suivante pour générer une clé Laravel :

php artisan key:generate
Lancer les migrations en tapant :

php artisan migrate --seed

Lancer dans un autre Terminal :

npm run watch

Terminer dans un autre Terminal (encore !) en lançant votre serveur de dev :

php artisan serve

Pour que les images: 

php artisan storage:link