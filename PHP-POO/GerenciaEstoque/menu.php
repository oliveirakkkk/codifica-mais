<?php 

require_once 'autoload.php';

function exibirMenu()
{
    echo "\n";
    echo "Escolha uma das opções abaixo:\n";
    echo "1. Adicionar um produto 1\n";
    echo "2. Vender um produto 2\n";
    echo "3. Verificar Estoque 3\n";
    echo "4. Listar o Estoque 4\n";
    echo "5. Sair\n";
    $opcao = readline("Digite a sua escolha: ");
    return $opcao;
}
while (true) {

    $opcao = exibirMenu();

    switch ($opcao) {
        case 1:
            echo "Adicionar um produto\n";
            $sku = readline("Digite o Código do produto: ");
            $nome = readline("Digite o Nome do produto: ");
            $unidadeMedida = readline("Digite o Tamanho: ");
            $cor = readline("Digite a Cor: ");
            $quantidade = readline("Digite a Quantidade: ");
            $preco = readline("Digite o preço do produto: ");
            $estoque = readline("Digite o estoque: ");
            $produto = new Produto($preco, $estoque, $sku, $nome, $unidadaMedida, $cor, $quantidade);
            echo $produto;
            //adicionarProduto($preco, $estoque, $sku, $nome, $unidadaMedida, $cor, $quantidade);
            break;
        case 2:
            echo "Vender um produto\n";
            $codigo = readline("Digite o Código do produto: ");
            $quantidade = readline("Digite a Quantidade: ");
            venderProduto ($estoque, $codigo, $quantidade);
            break;
        case 3:
            echo "Verificar Estoque\n";
            
            $codigo = readline("Digite o Código do produto: ");
            verificarEstoque ($estoque, $codigo);
            break;
        case 4:
            echo "Listar o Estoque\n";
            listarEstoque($estoque);
            break;
        case 5:
            echo "Saindo...\n";
            exit;
        default:
            echo "Opção inválida, por favor tente novamente.\n";
            break;
    }
}
