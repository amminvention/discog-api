Laravel Discogs API Package
This package provides a simple way to interact with the Discogs API in Laravel.

Installation
You can install the package via Composer:

bash
Copy code
composer require yourusername/yourpackagename
Configuration
After installing the package, you will need to add your Discogs API credentials to your Laravel .env file:

bash
Copy code
DISCOGS_USER_AGENT=your-user-agent
DISCOGS_TOKEN=your-token
Alternatively, you can publish the package configuration file and edit it directly:

bash
Copy code
php artisan vendor:publish --provider="YourNamespace\DiscogsServiceProvider"
Usage
You can use the discogs() helper function to interact with the Discogs API:

php
Copy code
$searchResults = discogs()->search('release', 'Thriller');
$release = discogs()->getRelease(12345);
$master = discogs()->getMaster(67890);
$artist = discogs()->getArtist(23456);
$label = discogs()->getLabel(78901);
$marketplaceResults = discogs()->searchMarketplace('release', 'Thriller');
$listing = discogs()->getListing(23456);
$inventory = discogs()->getInventory();
And so on for the other endpoints.

Credits
This package was created by Your Name. It is based on the Discogs PHP Library by the Discogs team.

License
The MIT License (MIT). Please see License File for more information.

Support
If you experience any issues or have any questions, please open an issue on GitHub. We'll do our best to assist you as soon as possible.
