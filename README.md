# Zerops x Laravel Minimal

A basic [Laravel](https://www.laravel.com) 11 installation running on Zerops, utilizing PostgreSQL for database. Perfect starting point for your Laravel projects.


![laravel](https://github.com/zeropsio/recipe-shared-assets/blob/main/covers/svg/cover-laravel.svg)

<br/>

## Deploy on Zerops
You can either click the deploy button to deploy directly on Zerops, or manually copy the [import yaml](https://github.com/zeropsio/recipe-laravel-jetstream/blob/main/zerops-project-import.yml) to the import dialog in the Zerops app.

[![Deploy on Zerops](https://github.com/zeropsio/recipe-shared-assets/blob/main/deploy-button/green/deploy-button.svg)](https://app.zerops.io/recipe/laravel)

<br/>

## Recipe features

- Laravel running on a load balanced **Zerops PHP + Nginx** service
- Zerops **PostgreSQL 16** service as database
- Proper setup for Laravel **cache**, **optimization**, and **database migrations**
- Logs set up to use **syslog** and accessible through Zerops GUI
- Utilization of Zerops built-in **environment variables** system

<br/>

## Production vs. development

Base of the recipe is ready for production, the difference comes down to:

- Use highly available version of the PostgreSQL database (change `mode` from `NON_HA` to `HA` in recipe YAML, `db` service section)
- Use at least two containers for Jetstream service to achieve high reliability and resilience (add `minContainers: 2` in recipe YAML, `app` service section)
- Use production-ready third-party SMTP server instead of Mailpit (change `MAIL_` secret variables in recipe YAML `app` service)
- Disable public access to Adminer or remove it altogether (remove service `adminer` from recipe YAML)

<br/>

## Changes made over the default installation

If you want to modify your existing Laravel/Jetstream app to efficiently run on Zerops, these are the general steps we took:

- Add [zerops.yml](https://github.com/zeropsio/recipe-laravel-minimal/blob/main/zerops.yml) to your repository, our example includes database migrations
- Utilize Zerops [environment variables](https://github.com/zeropsio/recipe-laravel-minimal/blob/main/zerops.yml#L22-L59) and [secrets](https://github.com/zeropsio/recipe-laravel-minimal/blob/main/zerops-project-import.yml#L13-L16) to setup PostgreSQL database connection
- And trustedproxy config to work with reverse proxy load balancer

<br/>
<br/>

Need help setting your project up? Join [Zerops Discord community](https://discord.com/invite/WDvCZ54).
