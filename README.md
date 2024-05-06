
# Teste Logcomex - Vue Laravel

Um teste com PHP e Vue usando os frameworks que quiser, onde ambos possam se comunicar e trocar informações. É um BI.

# Requerimentos

> Docker<br>
> Docker-Compose<br>
> Node/npm<br>
> clonar o projeto
```bash
git clone https://github.com/rafaelcarval/projeto-logcomex
cd projeto-logcomex
```

# Rodar o projeto 

>Roda o comando 
```bash
docker compose up -d
```
>acessar o container my-laravel-app 
```bash
docker exec -it --user=root my-laravel-app bash
``` 
>e rodar os comandos:<br> 
```bash
php artisan migrate
php artisan db:seed
``` 
# Acessar o projeto

>backend rodando http://localhost:8000/<br>
>frontend rodando http://localhost:3000/<br>
>Gráficos http://localhost:8000/chart<br>
>Data http://localhost:8000/data

# Testes

>acessar o container my-laravel-app 
```bash
docker exec -it --user=root my-laravel-app bash
``` 
>e rodar o comando:<br>
```bash
php artisan test
``` 
