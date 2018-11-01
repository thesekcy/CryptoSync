<p align="center"><img src="https://raw.githubusercontent.com/thesekcy/CryptoSync/dcce1cc31db2e7337984c523998947d0dad200e4/CryptoSync/public/svg/logo.svg"></p>


## Para correção dos erro do projeto

Isso instalará o composer no diretório atual para que você possa usar
<pre class="prettyprint">
	<code class="lang-bsh"> php -r "readfile('https://getcomposer.org/installer');" | php</code>
</pre>
Isso resolverá todas as dependências do projeto e gravará as versões exatas no composer.lock
<pre class="prettyprint">
	<code class="lang-bsh">php composer.phar update</code>
</pre>
No diretorio do Projeto renomeie o arquivo .env.examplo pra .env
<pre class="prettyprint">
	<code class="lang-bsh"> ren .env.examplo .env</code>
</pre>