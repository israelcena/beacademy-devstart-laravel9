# Trilha Sprint 9: Laravel MVC
Esse repositório contem o código fonte da sprint 9 do curso Devstart da Beacademy na trilha de Laravel MVC.

## Como iniciar o projeto com Laravel
Pressupondo que você já possui o docker em seu computador, execute o comando no bash(MacOS, Linux ou WSL2):

```bash
composer install
```
Após a instalação dos pacotes, execute:

```bash
./vendor/bin/sail up
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

- Rota local para acessar: http://localhost/viacep

- [Via Cep Controller](./app/Http/Controllers/ViaCepController.php)
