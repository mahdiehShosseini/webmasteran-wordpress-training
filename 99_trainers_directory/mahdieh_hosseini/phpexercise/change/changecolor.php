<?php
$style_files_array = [
    'red' => 'red.css',
    'blue' => 'blue.css',
    'green' => 'green.css',
];
$is_query_param_set = false;
if (isset($_GET['color']) && !empty($_GET['color']) && array_key_exists($_GET['color'], $style_files_array)) {
    $is_query_param_set = true;
    $style_file = '';
    switch ($_GET['color']) {
        case  'red':
            $style_file = $style_files_array['red'];
            break;
        case 'blue':
            $style_file = $style_files_array['blue'];
            break;
        case 'green':
            $style_file = $style_files_array['green'];
            break;
    }
}
?>
<html>
<head>
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./<?php echo $is_query_param_set ? $style_file : 'main.css'; ?>">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>heart</title>
</head>
<body>
<div id="heart"></div>
<div id="buttons"><a href="?color=blue">
        <button id="blue-btn">Blue</button>
    </a>
    <a href="?color=red"><button id="red-btn">Red</button></a>
    <a href="?color=green"><button id="green-btn">Green</button></a>
    <a href="?"><button id="default">Default</button></a></div>

</body>
</html>