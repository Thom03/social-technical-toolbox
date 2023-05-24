[//]: # (<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>)
# Social-Technical Inovation Bundling Toolbox

[//]: # (<p align="center">)

[//]: # (<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>)

[//]: # (<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>)

[//]: # (<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>)
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## STIB Toolbox Description
The Bundles Innovations for Women’s Empowerment work package (WP 2), co-led by the Alliance of Bioversity and CIAT (ABC), is meant to design and collect systematic evidence on whether and how STIBs (Socio-Technical Innovative Bundles) can enhance women’s empowerment and resilience to later design and implement context-specific and gender-responsive STIBs. 
We intend to build on available and relevant CGIAR and non-CGIAR innovations through learning labs to enhance their uptake and impacts via enhancing women’s access, resilience, and empowerment.

## Features

## Installation
This guide will walk you through the steps to deploy a STIB project using Laravel Sail. Laravel Sail is a lightweight command-line interface for interacting with Laravel's default Docker development environment.
### Prerequisites
Before starting the deployment process, make sure you have the following requirements:

- Docker installed on your deployment server.
- SSH access to the deployment server.

### Deployment Steps
1. Clone the Laravel project repository to your deployment server:
   ```bash
   git clone <repository_url>
   ```
2. Navigate to the project directory:
   ```bash
   cd <project_directory>
   ```
3. Copy the .env.example file to .env:
   ```bash
   cp .env.example .env
   ```
4. Update the .env file with your deployment configuration:
   ```bash
   vim .env
   ```
   Modify the necessary variables such as **APP_URL**, **DB_***, and any other relevant configurations.
5. Build and start the Docker containers using Laravel Sail:
   ```bash
   ./vendor/bin/sail up -d
   ```
   This command will start the Docker containers defined in the docker-compose.yml file.
6. Generate an application key:
   ```bash
   ./vendor/bin/sail artisan key:generate
   ```
7. Run database migrations:
   ```bash
   ./vendor/bin/sail artisan migrate
   ```
8. Install dependencies using Composer:
   ```bash
    ./vendor/bin/sail composer install --optimize-autoloader --no-dev
   ```
9. Your Laravel project is now deployed! Access it in your web browser using the URL you specified in the .env file.

## Code of Conduct

## Contributing


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Contact
