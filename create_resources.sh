#!/bin/bash

# Usage: bash create_resources.sh ResourceName

if [ -z "$1" ]; then
    echo "Usage: bash create_resources.sh ResourceName"
    exit 1
fi

resource_name=$1

# Create Resources
php artisan make:model ${resource_name} -a