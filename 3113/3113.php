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



// Kiểm tra và yêu cầu thư viện lessc
if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

// Biên dịch file LESS
$less = new lessc;
$less->compileFile('less/3113.less', 'css/3113.css'); // Chỉnh sửa đối số để phù hợp
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3113</title>
    <link rel="stylesheet" href="css/3113.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3">
                    <div class="media list-features">
                        <img class="rocket-icon" src="./img/rocket-lunch.svg" alt="Free Delivery Icon">
                        <div class="media-body">
                            <h4 class="text-heading">Free Delivery</h4>
                            <p class="text-desc">For all orders over $99</p>
                        </div>
                        <div class="divider"></div>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="media list-features">
                        <img class="rocket-icon" src="./img/research-arrows-circle.svg" alt="90 Days Return Icon">
                        <div class="media-body">
                            <h4 class="text-heading">90 Days Return</h4>
                            <p class="text-desc">If goods have problems</p>
                        </div>
                        <div class="divider"></div>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="media list-features">
                        <img class="rocket-icon" src="./img/credit-card-card-svgrepo-com.svg" alt="Secure Payment Icon">
                        <div class="media-body">
                            <h4 class="text-heading">Secure Payment</h4>
                            <p class="text-desc">100% secure payment</p>
                        </div>
                        <div class="divider"></div>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="media list-features">
                        <img class="rocket-icon" src="./img/chat.png" alt="24/7 Support Icon">
                        <div class="media-body">
                            <h4 class="text-heading">24/7 Support</h4>
                            <p class="text-desc">Dedicated support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container my-4">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="img-container">
                        <img src="./img/03-bn (1).webp" alt="Image">
                        <div class="overlay">
                            <div>
                                <h4>Iphone 9</h4>
                                <h4>32Gb</h4>
                                <div class="text">
                                    Experience with <br>
                                    best smartphone <br>
                                    on the world
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="img-container">
                        <img src="./img/02-bn.webp" alt="Image">
                        <div class="overlay">
                            <div>
                                <h4>Unio</h4>
                                <h4>Leather</h4>
                                <h4>Bags</h4>
                                <div class="text">
                                    100% leather <br>
                                    handmade
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="img-container">
                        <img src="./img/03-bn (1).webp" alt="Image">
                        <div class="overlay">
                            <div>
                                <h4>Nutrillet</h4>
                                <h4>Blender</h4>
                                <h4>Combo</h4>
                                <div class="text">
                                    Includes blender, <br>
                                    cup, etc
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>