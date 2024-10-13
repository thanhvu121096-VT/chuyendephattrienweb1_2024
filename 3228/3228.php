<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . preg_quote($pattern_document_root, '/') . '(.*)$/';

// Lấy đường dẫn URL
preg_match_all($pattern_uri, __DIR__, $matches);

if (isset($matches[1][0])) {
    $url_path = $url_host . $matches[1][0];
} else {
    // Gán giá trị mặc định hoặc xử lý lỗi nếu không tìm thấy kết quả
    $url_path = $url_host; // Hoặc $url_host . '/path/to/default';
    echo "Warning: No match found for the directory path.";
}

$url_path = str_replace('\\', '/', $url_path);

// Kiểm tra và yêu cầu thư viện lessc
if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

// Biên dịch file LESS
$less = new lessc;
$less->compileFile('less/3228.less', 'css/3228.css'); // Chỉnh sửa đối số để phù hợp
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3228</title>
    <link rel="stylesheet" href="css/3228.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <div class="event">
            <div class="date">
                <span class="day">12.</span>
                <span class="month-year">sep 2024</span>
            </div>
            <div class="details">
                <h4>Business mastery meetup</h4>
                <p>Harvard Education, <img class="icon" src="./img/—Pngtree—positioning icon_4645029.png" alt=""> London, UK</p>
            </div>
            <a class="view-event" href="#">View Event <img class="arrow" src="./img/reshot-icon-right-arrow-UCA8NGYZDJ.svg" alt=""></a>
        </div>
        <div class="event">
            <div class="date">
                <span class="day">01.</span>
                <span class="month-year">apr 2024</span>
            </div>
            <div class="details">
                <h4>Unleash your power within</h4>
                <p>Harvard Education, <img class="icon" src="./img/—Pngtree—positioning icon_4645029.png" alt=""> London, UK</p>
            </div>
            <a class="view-event" href="#">View Event <span><img class="arrow" src="./img/reshot-icon-right-arrow-UCA8NGYZDJ.svg" alt=""></span></a>

        </div>
        <div class="event">
            <div class="date">
                <span class="day">05.</span>
                <span class="month-year">jun 2024</span>
            </div>
            <div class="details">
                <h4>Date with destiny leadership</h4>
                <p>Harvard Education, <img class="icon" src="./img/—Pngtree—positioning icon_4645029.png" alt=""> London, UK</p>
            </div>
            <a class="view-event" href="#">View Event <img class="arrow" src="./img/reshot-icon-right-arrow-UCA8NGYZDJ.svg" alt=""></a>
        </div>
    </div>
</body>

</html>