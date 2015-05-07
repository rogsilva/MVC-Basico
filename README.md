# PHP - Estrutura MVC Básica

Este é um modelo simples de como implementar uma estrutura MVC em PHP

  - Utilizar Versão PHP >= 5.4

### Version
1.0.0

### Dependências do sistema

Para que este sistema rode corretamente, é necessária a instalação das seguintes dependências:

* [Database] - Illuminate/Database

### Instalação

Siga os seguintes passos para a instalação correta.

Faça o clone do projeto
```sh
$ git clone git@github.com:rogsilva/MVC-Basico.git mvcbasico
$ cd mvcbasico
```
Caso não tenha o Composer instalado, faça a instalação
```sh
$ curl -sS https://getcomposer.org/installer | php
$ php composer.phar self-update
```
Instale as dependências do sistema
```sh
$ php composer.phar install
```
Para testar rode o servidor interno do PHP ou crie um Virtual Host apontando para a pasta public
```sh
$ cd public
$ php -S localhost:8000
```
Acesse a url "http://localhost:8000" para visualizar o projeto


License
----

MIT

[Database]:https://github.com/illuminate/database
