# Projeto Store
<b><h2>Projeto: Website Store</h2></b>

<b>Descrição do Projeto:</b>
<br>
Este projeto tem como principal objetivo permitir a um certo utilizador comprar produtos da Website Store, uma loja que vende todo e qualquer tipo de produtos.
Estes produtos podem ser adicionados pelo administrador da loja, desde que tem de cumpra todos os requistos obrigatorios do produto.
Ao administrador cabe ainda tambem a gestão de utilizadores


<b><h3>Etapas para aceder ao projeto numa máquina local por pessoa:</h3></b>

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

