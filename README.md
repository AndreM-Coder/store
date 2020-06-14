# Engenharia-de-Sistemas
<b><h2>Projeto: Website Meme Generator</h2></b>

<b>Descrição do Projeto:</b>
<br>
Este projeto tem como principal objetivo permitir a um certo utilizador criar um meme, adicionando texto por cima de uma imagem. O utilizador quando entra no website, tem um conjunto de opções no menu principal para poder aceder ás diversas áreas que o site disponibiliza.

- Home
- Create now!
- FAQ
- Recently Created
- Login
- Register

<b><h3>Etapas para aceder ao projeto numa máquina local por qualquer um dos membros:</h3></b>

Instalar Script do Projeto:

- Fazer download dos ficheiros do repositório Github.
- Renomear o ficheiro .env.example para .env
- Alterar os dados da base de dados:

<pre>
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=root
DB_PASSWORD=
</pre>

- Instalar o composer a partir do website: https://getcomposer.org/

- Instalar as dependências do projeto , abrir linha de comandos na pasta script e correr o comando:

<pre>
composer install
</pre>

- Criar as tabelas e popular com os dados necessários:
Criar chave encriptação 
<pre>
php artisan key:generate
</pre>
criar tabelas na BD
<pre>
php artisan migrate
</pre>
popular tabelas com dados default 
<pre>
php artisan db:seed
</pre>

- Executar este código para iniciar o servidor embutido da Laravel e aceder com http://localhost:8000:

<pre>
php artisan serve
</pre>

- Login
user@user.com
passwd:123456789

admin@admin.com
passwd:admin

