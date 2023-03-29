<h1 align="center">
  <br>
  <a href="#"><img src="https://narmament.com/src/imagem/logo.png" alt="Nascimento" width="200"></a>
  <br>
  ClothingCatalog
  <br>
</h1>

<h4 align="center">Site de catalogo de roupas para os alunos do Senai.</h4>



## Algumas Dicas
* Utilize o nosso discord para estudos <a href="https://discord.gg/x4XyBtgF"><img src="https://cloud.githubusercontent.com/assets/6291467/26705903/96c2d66e-477c-11e7-9f4e-f3c0efe96c9a.png" width="20px" heigth="20px"></a>
* Veja nossos videos no nosso canal no youtube <a href="https://www.youtube.com/channel/UC2UniIDdpqHH6tUFedkMfJQ"><img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" style="width:30px; heigth:30px; border-radius: 10px;" alt="Watch the video"  border="10" /></a>
* Verificou algo que possa ser melhorado, contribua com o projeto... Realize uma pull request ou uma Issues para tirar suas dúvidas.


## Como Usar

Esse site foi desenvolvido utilizando as seguintes técnologias:
<ul>
  <li>FrameWork Laravel 10x</li>
  <li>Linguagem PHP 8.2</li>
  <li>FrameWork Bootstrap 5.3</li>
  <li>FrameWork Tailwind 3.3.0</li>
  <li>Biblioteca JQuery 3.3.1</li>
  <li>Layout HTML5 e CSS3</li>
</ul>

```bash
# Clone o repositório
$ git clone https://github.com/IMNascimento/ClothingCatalog.git
# agora configure seu arquivo .env
```
<p>No seu arquivo <strong>.env</strong> configure as variaveis de banco de dados como veremos um exemplo na imagem a seguir:e dos servidores <strong>SMTP</strong> para envio de email </p>
<img src="https://fullcycle.com.br/wp-content/uploads/2019/08/image-13-1024x614.png" alt="configuração de banco de dados">
<p>No seu arquivo <strong>.env</strong> configure as variaveis dos servidores <strong>SMTP</strong> para envio de email como veremos um exemplo na imagem a seguir:</p>
<img src="https://blog.kakaocdn.net/dn/5kfUT/btqI1KNY8ce/zUBqyVgOXggdgV8CA8hOk1/img.png" alt="configuração de servidores SMTP">
<p>Após essas configurações remova o atalho da pasta <b>storage</b> dentro da pasta <b>public</b> do seu projeto. Feito esses procedimentos vamos testar nossa aplicação. Abra o terminal e digite os seguintes comandos: </p>

```php
# cria um novo atalho para a pasta de armazenamento de arquivos.
$php artisan storage:link
#cria a estrutura de banco de dados e já sobe um usuario padrão igor com senha 1 a 8 e alguns itens cadastrados.
$php artisan migrate --seed
# agora execute o servidor virtual do laravel
$php artisan serve
#pronto sua aplicação está pronta só testar!
```

## License

MIT

---
