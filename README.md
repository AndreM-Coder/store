# Projeto Web Store
<b>Descrição do Projeto:</b>
<br>
Este projeto tem como principal objetivo permitir a um certo utilizador comprar produtos da Liquor Store, uma loja que vende todo e qualquer tipo de Bebidas Licorosas.

-> Do lado do administrador(back-end):
Criar produtos, 
Editar produtos, 
Gerir Utilizadores,
Gerir Carrinhos de compras, (incompleto)
Gerir categorias de produtos com percentagens de desconto,
Gerir pagamentos com varias plataformas, por exemplo PayPal, (não concluido)
Log-in, 
 
-> Sendo que do lado do utilizador(front-end):

Log-in; 
Registo de cliente;
Produtos disponiveis;
Carrinho de compras;(incompleto)
Edição dos campos do perfil de utilizador;(nao concluido)
                
De uma forma global fazer com que a aplicação:
Tenha um layout responsivo;
A usabilidade do sistema, ser intuitivo e pratico;
Um numero reduzido de etapas para a conclusão das compras;(não conlcuido)
Ser seguro, irei tentar implementar um sistema de autenticação de 2 fatores para compras a partir de um determinado valor;(nao concluido)
 

Estes produtos podem ser adicionados pelo administrador da loja, desde que tem de cumpra todos os requistos obrigatorios do produto.
Ao administrador cabe ainda tambem a gestão de utilizadores


!!Para visitar a area de administrador, fazer login com o admin e ir a dashboard, no canto superior direito da pagina home.!!


<b><h3>Etapas para aceder ao projeto numa máquina local:</h3></b>

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
<pre>
user@user.com
passwd:123456789
</pre>

<pre>
admin@admin.com
passwd:admin
</pre>
