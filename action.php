
<?php
session_start();
// // // orientações para adicionar a KEY pois é um projeto com KEY TESTE 
// // $apiUrl = " "; adicione aqui a url do Create chat completion pode encontrar nesse link: https://platform.openai.com/docs/api-reference/chat
// // $apiToken = " "; adicione aqui a key API que pode encontrar nesse link: https://platform.openai.com/account/api-keys
// // $apiModel = "gpt-3.5-turbo";
// Logo apos ser adicionado as chaves descomentar toda essas linhas para rodar o projeto


$question = $_POST['question'];


if (empty($question)){
echo "Please enter";
exit();
}

$payload =  [
   'model' =>  $apiModel,
   'messages' => [['role' => 'user', 'content' => $question]]
];

$headers = [
   "Authorization: Bearer $apiToken", 
   "Content-type: application/json",
];



$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));

$response = curl_exec($ch);
$result = json_decode($response);

curl_close($ch);
$content = $result->choices[0]->message->content;
$_SESSION['content'] = $content;
header('location: index.php');
