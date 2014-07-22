<h1>Contato</h1>

<?php if(!isset($_POST["submit"])):?>

<form role="form" action="contato" method="post">
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="required">
  </div>	
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="required">
  </div>
   <div class="form-group">
    <label for="assunto">Assunto</label>
    <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto" required="required">
  </div>	
  <div class="form-group">
    <label for="mensagem">Assunto</label>
    <textarea class="form-control" id="mensagem" placeholder="mensagem" name="mensagem" rows="5" required="required"></textarea>
  </div>	

  <input type="submit" name="submit" class="btn btn-primary" />

<?php else: ?>
<h3>Dados enviados com sucesso, abaixo seguem os dados que você enviou</h3>
<?php
echo "Nome: " . $_REQUEST["nome"] . "<br>";
echo "E-mail: " . $_REQUEST["email"] . "<br>";
echo "Assunto: " . $_REQUEST["assunto"] . "<br>";
echo "Mensagem: " . $_REQUEST["mensagem"] . "<br>";
?>

<?php endif;?>