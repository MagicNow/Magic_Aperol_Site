**APEROL SPRITZ ENDLESS SUMMER**


Aerol é uma aplicação feita com Laravel 5.3.


* Clone o repositório para sua máquina local ou remota, siga os comandos:


* É necessário ter o gerenciador de dependência do PHP [Composer](https://getcomposer.org/) e [Nasty Popsicle Machine (NPM)](https://www.npmjs.com/) e o [Gulp](http://gulpjs.com/). Se ainda não tem instalado use a [Documentação do Composer](https://getcomposer.org/doc/00-intro.md), [Documentação do NPM](https://docs.npmjs.com/) e [Documentação do Gulp](https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md).

* Instalar as dependências do PHP.

```shell
$ composer install
```

* Instalar as dependências do JS.

```shell
$ npm install
```

* Automatizar as tarefas do front-end:

```shell
$ gulp admin-deploy && gulp
```

* Renomear o arquivo .env.exemple para .env

* criar um banco de dados local com os dados que estão no arquivo .env

* Importar a base de dados db_sump.sql para a database local

* Pronto! Para iniciar um novo servidor local, use o comando:

```shell
$ php artisan serve
```

