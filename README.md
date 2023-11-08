<p align="left"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
<p align="left"><a href="https://livewire.laravel.com" target="_blank"><img src="https://github.com/livewire/livewire/blob/main/art/readme_logo.png" width="400" alt="Livewire Logo"></a></p>
<p align="left"><a href="https://livewire.laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/sail/7150fe03a94e7cd77b8042ddbb55c7ed20c4bca0/art/logo.svg" width="400" alt="Livewire Logo"></a></p>


## Install

I am using [laravel sail](https://github.com/laravel/sail) for local development in WSL. 
In Windows start Docker Desktop before and make sure that docker is running inside of Ubuntu in WSL

    1. clone this repo
    2. cd in folder and composer install
    3. ./vendor/bin/sail up (or [configuring a shell alias](https://laravel.com/docs/10.x/sail#configuring-a-shell-alias) for sail)
    4. optional but useful start VS Code with code .
    5. open shell in vscode and create new .env file by copying the .env.example in a new file .env
    6. generate new api key with sail php artisan key:generate

## Content

    Based on the [Livewire Screencasts](https://livewire.laravel.com/screencasts/) I try to transcribe here the parts of the screencasts.
    

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Livewire is open-sourced software licensed under the [MIT license](LICENSE.md).

Laravel Sail is open-sourced software licensed under the [MIT license](LICENSE.md).