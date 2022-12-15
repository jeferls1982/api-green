<h3>Instalando o sistema</h3>
<p>1 - clone o projeto <code>git clone https://github.com/jeferls1982/api-green</code></p>
<p>2 - abra o terminal na pasta raiz do projeto</p>
<p>3 - <code>cd laradock</code></p>
<p>4 - rode o comando <code>docker-compose up -d nginx mysql rabbitmq</code></p>
<p>5 - volte para a pasta raiz do projeto <code>cd ..</code></p>
<p>6 - <code>php artisan:key generate</code></p>
<p>7 - <code>php artisan migrate</code></p>
<p>8 - <code>php artisan serve</code></p>


<h3>Ativando o worker</h3>
<p>1 - Abra outro terminal na raiz do projeto</p>
<p>2 - rode o comando <code>php artisan rabbitmq:consume</code></p>

