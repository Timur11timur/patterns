
#!/bin/bash
FILE='composer.lock'

cd creational/abstract-factory/
if [ ! -f "$FILE" ]; then
    composer install
fi

cd ../factory-method
if [ ! -f "$FILE" ]; then
    composer install
fi

cd ../static-factory
if [ ! -f "$FILE" ]; then
    composer install
fi

cd ../simple-factory
if [ ! -f "$FILE" ]; then
    composer install
fi

cd ../singleton
if [ ! -f "$FILE" ]; then
    composer install
fi

cd ../multiton
if [ ! -f "$FILE" ]; then
    composer install
fi

cd ../builder
if [ ! -f "$FILE" ]; then
    composer install
fi

cd ../lazy-initialization
if [ ! -f "$FILE" ]; then
    composer install
fi

cd ../prototype
if [ ! -f "$FILE" ]; then
    composer install
fi

cd ../../fundamental/delegation/
if [ ! -f "$FILE" ]; then
    composer install
fi

cd ../event-channel
if [ ! -f "$FILE" ]; then
    composer install
fi

cd ../interface
if [ ! -f "$FILE" ]; then
    composer install
fi

cd ../property-container
if [ ! -f "$FILE" ]; then
    composer install
fi

cd ../../behavioral/strategy/
if [ ! -f "$FILE" ]; then
    composer install
fi

echo "Done"