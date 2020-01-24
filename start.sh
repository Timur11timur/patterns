
#!/bin/bash

cd creational/abstract-factory/
composer install

cd ../factory-method
composer install

cd ../static-factory
composer install

cd ../simple-factory
composer install

cd ../singleton
composer install

cd ../multiton
composer install

cd ../builder
composer install

cd ../lazy-initialization
composer install

cd ../../fundamental/delegation/
composer install

cd ../event-channel
composer install

cd ../interface
composer install

cd ../property-container
composer install

cd ../../behavioral/strategy/
composer install

echo "Done"