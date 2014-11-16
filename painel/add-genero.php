<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
  <head>
    <title>Música Brasil - Tudo sobre a música brasileira</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="content-language" content="pt-br" />
    <meta name="description" content="Gêneros músicas, estilos, bandas e artistas"/>
    <meta name="author" content="minor S.A"/>
    <meta name="keywords" content="músicas, tudo sobre bandas, características das músicas brasileiras"/>
    <link rel="stylesheet" type="text/css" href="../estilos/controle.css" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
  </head>
  <body id="add_gen">
    <div id="topo"> 
      <div id="top_conteudo">
        <p id="site_nome"><a href="../index.php" ><span>música</span>brasil</a></p>
        <a href="painel.php" class="painel"><img src="../imagens/painel.png" alt="engrenagens" title="Obs: Só será visivel ao ADMIN !"/></a>
        <div id="divisao"> </div>
        <ul id="nave">
          <li><a href="#">Home</a></li>
          <li><a href="#">Gêneros</a></li>
          <li><a href="#">Novidades</a></li>
          <li><a href="#">Minha Conta</a></li>
          <li><a href="#">Blablabla</a></li>
        </ul>
      </div > <!-- FIM DA DIV top_conteudo -->
    </div> <!-- FIM DA DIV topo -->
    <div id="conteudo">
      <h1><a href="painel.php">Painel de Controle</a> > <a href="gerenciar-gen.php">Gerênciar Gêneros</a> > Adicionar Gênero</h1>
      <div class="linha_conteudo"></div>
      <br/><br/>
      <div id="cadastro">
        <form method="POST" action="add-genero.php">
          <table id="login_table">
            <tr>
              <td class="textotd">Título: </td>
              <td><input class="txt" type="text" name="titulo" id="titulo" /></td>
            </tr>
            <tr>
              <td class="textotd">Imagem: </td>
              <td><input type="file" name="imagem" id="imagem" /></td>
            </tr>
            <tr>
              <td class="textotd">Descrição: </td>
              <td><textarea name="descricao" id="descricao"></textarea></td>
            </tr>
          </table>
          <input class="botao" type="submit" name="enviar" value="ADICIONAR" />
        </form>
      </div>
      <h1 style="position: absolute; font:30px; margin: 0 auto; left: 43%; top: 55%">EM MANUTENÇÃO !</h1>
      <br/><br/><br/><br/><br/><br/><br/><!-- BR's só para fins de visualição -->
    </div> <!-- FIM DA DIV conteudo -->
    <div id="rodape">
      <div id="conteudo_rodape">
        <p>Informações sobre o site e blablabla</p>
        <p>FAQ / Sobre / Bla bla bla / Política de Privacidade / Bla bla bla / Termos de serviço</p>
        <p>Copyright &copy;M.ino.R 2015 blablabla</p>
        <p>......Mais alguma coisa se tiver .........</p>
      </div > <!-- FIM DA DIV conteudo_rodape -->
    </div> <!-- FIM DA DIV rodape -->
  </body>
</html>