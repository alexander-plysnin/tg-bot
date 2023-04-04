<?php

$apiKey = '600*****:AAGji******************************'; //апи ключ телеграм бота созданный в BotFather


$data = file_get_contents('php://input');
$data = json_decode($data, true);


   
$user_id=$data['chat_join_request']['user_chat_id'];

$chat_id=$data['chat_join_request']['chat']['id'];

  $arr=[
        'chat_id' => $chat_id,
        'user_id' => $user_id

      ];
      
       $ch = curl_init('https://api.telegram.org/bot' . $apiKey .'/approveChatJoinRequest');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_exec($ch); 
        curl_close($ch);

?>
