echo "------- Pulling latest changes -------"
git pull

echo "------- Installing composer dependencies -------"
composer install

echo "------- Moving assets to root directory -------"
if test -f public/*; then
    mv index.html index.html.bak
    mv .htaccess .htaccess.bak
    mv public/* .
    mv index.html.bak index.html
    mv .htaccess.bak .htaccess
fi

echo "------- Migrating database -------"
php artisan migrate
