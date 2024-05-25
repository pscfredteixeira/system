/* <?php
require 'vendor/autoload.php';

use Google\Client;
use Google\Service\Sheets;

// Configurar o cliente
$client = new Client();
$client->setApplicationName('Google Sheets API PHP');
$client->setScopes([Sheets::SPREADSHEETS, Sheets::DRIVE]);
$client->setAuthConfig('credentials.json');
$client->setAccessType('offline');

// Inicializar a API do Google Sheets
$service = new Sheets($client);

// ID da planilha e intervalo da célula que você deseja acessar/modificar
$spreadsheetId = 'SUA_PLANILHA_ID';
$range = 'Sheet1!A1';

// Ler os dados da célula
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();

if (empty($values)) {
    echo "Nenhum dado encontrado.";
} else {
    foreach ($values as $row) {
        echo "Valor da célula A1: " . $row[0] . "<br>";
    }
}

// Modificar o valor da célula
$newValues = [
    ["Novo Valor"]
];
$body = new Google_Service_Sheets_ValueRange([
    'values' => $newValues
]);
$params = [
    'valueInputOption' => 'RAW'
];
$updateResponse = $service->spreadsheets_values->update($spreadsheetId, $range, $body, $params);

echo "Arquivo atualizado com sucesso!<br>";
?>
*/
Hello
