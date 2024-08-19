===============================================================================
# this package to handle product extra details related to features

===============================================================================
# to use it you can follow this steps
    1- make sure first that you install composer require magdasaif/products
    2- then install package through this command
        composer require magdasaif/products-features:dev-dev

    3- add provider to config/app.php providers array
        Magdasaif\ProductFeatures\app\providers\ProductFeatureServiceProvider::class,

then you can 
    - access any route in this package
    - migrate any files in package
    - publish migration files to able to edit on them  
===============================================================================
you can publish package files through this command
    php artisan vendor:publish 
    
===============================================================================