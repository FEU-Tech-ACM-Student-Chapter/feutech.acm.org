# feutech.acm.org

## tl;dr

This repository contains the laravel source of the FEU Tech ACM website. This uses Laravel 9.x, so PHP is required on your local machine. Make sure that node and npm is installed on your local machine as well, then run both `npm run watch` and `php artisan serve` on the terminal of your choice.

## Development

After cloning the repository on your local machine, run two commands simultaneously (different terminal windows) to develop and test this web application:

```sh
# This listens to TailwindCSS changes and applies CSS changes accordingly.
npm run watch 

# This serves the website to your local machine so you can access it at localhost:8000.
php artisan serve
```

## Deployment (_to be implemented soon with Github Actions_)

Make sure that you do NOT deploy directly to the main branch. Instead, fork this repository, create a separate branch, then initiate a pull request on [FEU-Tech-ACM-Student-Chapter/feutech.acm.org](https://github.com/FEU-Tech-ACM-Student-Chapter/feutech.acm.org) so that we don't queue a lot of changes with Github Actions.