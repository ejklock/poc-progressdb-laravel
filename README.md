# Projeto Laravel com Docker

```markdown
# Projeto Laravel com Docker

Este projeto é baseado no Laravel e utiliza o Docker para simplificar o ambiente de desenvolvimento.

## Pré-requisitos

- Docker e Docker Compose instalados em sua máquina.

## Inicialização

Siga as seguintes etapas para iniciar o projeto:

1. Copie o arquivo `.env.example` para um novo arquivo chamado `.env`:

```bash
cp .env.example .env
```

2. Suba os serviços Docker com o Docker Compose:

```bash
docker-compose up
```

3. Acesse o container da aplicação e instale as dependências do Laravel com o Composer:

```bash
docker-compose exec app composer install
```

## Estrutura do Docker Compose

O arquivo `docker-compose.yml` define os seguintes serviços:

- **app**: Este é o serviço que executa a aplicação Laravel. Ele usa a imagem `ejklock/php-fpm-pgdb:7.4`, define o diretório de trabalho para `/var/www/app` e mapeia a pasta do projeto local para a pasta de trabalho no container.

- **nginx**: Este serviço fornece o servidor web para a aplicação. Ele usa a imagem `nginx:alpine`, expõe a porta 80 e mapeia a pasta do projeto local para a pasta de trabalho no container.

Os dois serviços são conectados através da rede `schullzNetwork`.

## Renovação da licença do Driver Progress ODBC

Caso a licença do driver Progress ODBC expire, você pode executar o seguinte comando no shell do container para renová-la:

```bash
docker-compose exec -u root app /install.sh

```
