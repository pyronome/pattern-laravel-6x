**Laravel** is a web application framework with expressive, elegant syntax. For further information about **Laravel** Framework, please visit https://laravel.com/.

This repository contains Pyronome **Laravel 6.x** pattern basic information, pattern files, pattern templates, documentation and issue tracker. For further information about this pattern, please visit https://pyronome.com/pyronome/laravel-6x.

**Please note that you cannot directly use this repository.** To generate source code using this pattern, please visit [Pyronome Sign Up Page](https://platform.pyronome.com/builder/signup), and create an account.

Please refer to the [Getting Started](https://github.com/pyronome/pattern-laravel-6x#getting-started) section for step by step instructions.

## Status: Experimental

Not available for production environments. The stable version is coming soon.

## Getting Started

Please follow the steps below to generate source code using **Laravel 6.x** pattern:

1. Visit Pyronome platform website: https://pyronome.com
2. Sign up / log in to Pyronome. For detailed information and step by step instructions, please visit: https://help.pyronome.com/latest/en/docs/getting-started-signup-and-login/
3. Create a new Pyronome project. For detailed information and step by step instructions, please visit: https://help.pyronome.com/latest/en/docs/getting-started-your-first-project/
4. Please choose **Laravel 6.x** pattern on Install Pattern(s) dialog.
5. Generate source code. For detailed information and step by step instructions, please visit: https://help.pyronome.com/latest/en/docs/getting-started-source-code-generation/

## Installation

After generating and downloading source code from the Pyronome platform, you can follow the steps below to install dependencies and run the local webserver.

Firstly, go to the `source` folder, install the project, and load dependencies.

```console
composer install
```

```console
npm install --save-dev
```

After loading dependencies, create `.env` file. For further information about Laravel `.env` files, please visit: https://laravel.com/docs/6.x/configuration

Then, run application key generation and migration commands.

```console
php artisan key:generate 
```

```console
php artisan migrate
```

Then, start the webserver.

```console
php artisan serve --port=8000
```

## Contributing

Please use the [issue tracker](https://github.com/pyronome/pattern-laravel-6x/issues) to report any bugs/typos or requests.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see releases section of the [pattern overview page](https://pyronome.com/pyronome/laravel-6x#Overview). 

## Authors

* **Aykut Aydınlı** - [@aykutaydinli](https://github.com/aykutaydinli)
* **Hakan Erdal** - [@hakanerdal](https://github.com/hakanerdal)

## License

This project is licensed under the MIT License - see the [LICENSE](https://github.com/pyronome/pattern-laravel-6x/blob/master/LICENSE) file for details
