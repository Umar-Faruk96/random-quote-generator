<?php
require_once 'dataset.php';

$random_number = rand(0, (count(DATASETS) - 1));
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Pick Your Quote</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'
        crossorigin='anonymous' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;700&display=swap' rel='stylesheet'>
    <style>
        * {
            font-family: 'Hind Siliguri', sans-serif;
        }
    </style>
</head>

<body>
    <div class='container m-auto'>
        <div class="row justify-content-center vh-100 align-items-center">
            <div class="col-6 p-3 p-md-5 text-center text-bg-success rounded">
                <blockquote>
                    <strong>
                        <?php echo DATASETS[$random_number]['qoute'] ?>
                    </strong>
                    <cite class="d-block mt-md-2">
                        <?php echo DATASETS[$random_number]['source'] ?>
                    </cite>
                </blockquote>
                <button onclick="window.location.reload()" class="btn btn-outline-warning btn-md">রিফ্রেশ করুন</button>
            </div>
        </div>
    </div>
</body>

</html>