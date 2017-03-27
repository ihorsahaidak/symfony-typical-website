<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title></title>
</head>
<body>



    <?php





    $client_id = '5946229'; // ID приложения
    $client_secret = 'fK9CJ8ugScLqf4STVoWN'; // Защищённый ключ
    $redirect_uri = 'http://comments.local/'; // Адрес сайта

    $url = 'http://oauth.vk.com/authorize';

    $params = array(
        'client_id'     => $client_id,
        'redirect_uri'  => $redirect_uri,
        'response_type' => 'code',
        'scope' => 'wall',
        'display'=>'page'
    );

    echo $link = '<p><a href="https://oauth.vk.com/authorize?client_id=5946229&display=page&redirect_uri=https://oauth.vk.com/blank.html&display=page&scope=messages,offline&response_type=code&v=5.37">ВКонтакте</a></p>';





if (isset($_GET['code'])) {
    $result = false;
    $params = array(
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'code' => $_GET['code'],
        'redirect_uri' => $redirect_uri
    );

    $token = json_decode(file_get_contents('https://oauth.vk.com/access_token?client_id='.$params['client_id'].'&client_secret='.$params['client_secret'].'&redirect_uri=https://oauth.vk.com/blank.html&code='.$params['code']), true);

    
echo "string";
}
?>
</body>
</html>