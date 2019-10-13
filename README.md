# MelhorPreco

Encontra os melhores preços utilizando expressões regulares.


## Especificações

### Requisitos

- [PHP >= 7.0](https://www.php.net/releases/7_0_0.php) ou superior.
- [Composer](https://getcomposer.org/).

### Dependências

 - [PHPUnit 6](https://phpunit.de/getting-started/phpunit-6.html) (para execução dos testes).

### Execução

1. Faça o clone do projeto com `git clone https://github.com/lucascruz96/melhorpreco.git`.
2. Acesse a pasta do projeto e execute o comando `composer install` para instalar as dependências.

### Testes

Para execução dos testes, acesse a raiz do projeto e execute um dos comandos:

- Modo simplificado: `./vendor/bin/phpunit tests `
- Modo detalhado: `./vendor/bin/phpunit tests --color --stop-on-failure --debug -v`

## Modulos

### MelhorPreco

Modulo responsável pela busca do melhor preço.

#### public static function buscarMelhorPrecoComEscalas(string $texto)

Função encontrar o melhor preço com escalas em determinado texto.
Recebe o texto onde o preço deve ser buscado e retorna o valor encontrado no formato `float` ou `null`caso não encontre.

#### public static function buscarMelhorPrecoSemEscalas(string $texto)

Função encontrar o melhor preço sem escalas em determinado texto.
Recebe o texto onde o preço deve ser buscado e retorna o valor encontrado no formato `float` ou `null`caso não encontre.
