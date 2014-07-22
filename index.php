<?php
ob_start();
//Primeiro passo: pegar os dados da minha rota
//                     Protocolo, host                  requisição da url
$dadosUrl = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

// Segundo passo: remover a / da url
$rota = explode('/',$dadosUrl['path'],2);

// Terceiro passo: Criar uma função que valide a rota.

function rotas($param){
    $rotasValidas = ['contato', 'empresa','servicos','produtos'];

    //Verificação: se existe a rota, traz uma rota valida ou a home ou página não encontrada
    if(in_array($param[1],$rotasValidas)): //pega a 2 posição do array $rotas quando a função for chamada que contém a url e verifica se existe no array rotasValidas
        return require_once($param[1].'.php'); // retornar a url passada com .php sem o /
    elseif($param[1] == ''): //verifica se o user não digitou nenhuma url depois do host. E se ele não tiver digitado, ou seja, for vazia chama a home.
        return require_once('home.php');
    else: // Se a url for inválida retorna página de erro
        echo "<h1>Not found</h1>";
        return header("HTTP/1.0 404 Not Found");

    endif;
}
?>
<?php require_once('header.php');?>

<div class="container">

    <?php
    //Quarto passo: passar a rota para a função validar se ela existe ou não.
    rotas($rota);
    ?>
</div>

<?php require_once('footer.php');?>