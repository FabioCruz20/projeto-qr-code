<?php

require './vendor/autoload.php';

use Endroid\QrCode\QrCode;

$nomeArquivo = './pessoas.txt';

$fp = fopen($nomeArquivo, 'r') or die("Não foi possível abrir o arquivo\n");

while (!feof($fp)) {
    $linha = fgets($fp);

    list($nome, $status) = explode(';', $linha);
    $nome = trim($nome, "\n");
    $status = trim($status, "\n");

    // coloque o endereço do seu servidor web que contém o projeto
    $qrCode = new QrCode("http://192.168.0.103/projeto-qr-code/index.php?nome=$nome&status=$status");
    $data = date("d-m-Y_H-i-s");
    $qrCode->writeFile("./qrcodes/qrcode-$nome-$status-$data.png");
}

fclose($fp);