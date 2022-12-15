<h3>Instalando o sistema</h3>
<p>1 - clone o projeto <code>git clone https://github.com/jeferls1982/api-green</code></p>
<p>2 - abra o terminal na pasta raiz do projeto</p>
<p>3 - <code>cd laradock</code></p>
<p>4 - rode o comando <code>docker-compose up -d nginx mysql rabbitmq</code></p>
<p>5 - volte para a pasta raiz do projeto <code>cd ..</code></p>
<p>6 - <code>php artisan:key generate</code></p>
<p>7 - <code>php artisan migrate</code></p>
<p>8 - <code>php artisan serve --port 9000</code></p>


<h3>Ativando o worker</h3>
<p>1 - Abra outro terminal na raiz do projeto</p>
<p>2 - rode o comando <code>php artisan rabbitmq:consume</code></p>


<h3>Visualisando os e-mails no mailtrap.io utilizando as configurações do <code>.env</code></h3>
<p><a h-ref="https://mailtrap.io/">mailtrap.io</a></p>

<p>user - rode o comando <code>testecreativepg@gmail.com</code></p>
<p>senha - rode o comando <code>Hilbert2022</code></p>
