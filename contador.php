<?php
function incrementarContador() {
    // Define o nome do arquivo
    $arquivo = 'contador.txt';

    // Verifica se o arquivo existe, senão cria e inicia com 0
    if (!file_exists($arquivo)) {
        file_put_contents($arquivo, '0');
    }

    // Lê o valor atual do contador e incrementa em 1
    $contador = (int) file_get_contents($arquivo);
    $contador++;

    // Salva o novo valor no arquivo
    file_put_contents($arquivo, $contador);

    // Retorna o valor atualizado
    return $contador;
}
?>