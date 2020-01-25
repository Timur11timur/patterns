
#!/bin/bash
DIR='vendor'

cd creational/abstract-factory/
if [ ! -d "$DIR" ]; then
    composer install
fi

cd ../factory-method
if [ ! -d "$DIR" ]; then
    composer install
fi

cd ../static-factory
if [ ! -d "$DIR" ]; then
    composer install
fi

cd ../simple-factory
if [ ! -d "$DIR" ]; then
    composer install
fi

cd ../singleton
if [ ! -d "$DIR" ]; then
    composer install
fi

cd ../multiton
if [ ! -d "$DIR" ]; then
    composer install
fi

cd ../builder
if [ ! -d "$DIR" ]; then
    composer install
fi

cd ../lazy-initialization
if [ ! -d "$DIR" ]; then
    composer install
fi

cd ../prototype
if [ ! -d "$DIR" ]; then
    composer install
fi

cd ../object-pool
if [ ! -d "$DIR" ]; then
    composer install
fi

cd ../../fundamental/delegation/
if [ ! -d "$DIR" ]; then
    composer install
fi

cd ../event-channel
if [ ! -d "$DIR" ]; then
    composer install
fi

cd ../interface
if [ ! -d "$DIR" ]; then
    composer install
fi

cd ../property-container
if [ ! -d "$DIR" ]; then
    composer install
fi

cd ../../behavioral/strategy/
if [ ! -d "$DIR" ]; then
    composer install
fi

echo "Done"