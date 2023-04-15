
<?php
session_start();

$apiUrl = "https://api.openai.com/v1/chat/completions";
$apiToken = "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";
$apiModel = "gpt-3.5-turbo";


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
