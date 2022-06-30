# Trilha Sprint 9: Laravel MVC
Esse repositório contem o código fonte da sprint 9 do curso Devstart da Beacademy na trilha de Laravel MVC.

## Como iniciar o projeto com Laravel
Pressupondo que você já possui o docker em seu computador use o bash (MacOS, Linux ou WSL2):

### Local

- Instalando os pacotes localmente
```bash
composer install
```

- Após a instalação dos pacotes, para gerar os containers, execute:

```bash
./vendor/bin/sail up

```

- Entre no bash do container do php
```bash
docker exec -it (nomedocontainergerado) bash # Troque (nomedocontainergerado) pelo nome do container no php

```

- ### Quando estiver no bash do container do php

- Executando as migrations
```bash
php artisan migrate
```

- Executando os seeders para popular o db
```bash
php artisan db:seed
```

Após a execução do comando, você poderá acessar o projeto no navegador no endereço:
http://localhost/

## Verbos HTTP
Foram criados os verbos HTTP 

- GET, 
- POST, 
- HEAD,
- PUT, 
- DELETE, 
- CONNECT,
- OPTIONS,
- TRACE,
- PATCH.

## ViaCep
Foi utilizada a API do via cep para criação de rotas para buscar endereços.

- Endpoint para acessar: http://localhost/viacep

- [Via Cep Controller](./app/Http/Controllers/ViaCepController.php)
