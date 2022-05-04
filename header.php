<?php
require_once('classes/tracer.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title><?php echo $title; ?></title>
</head>

<body>

    <header class="p-3 mb-3 border-bottom">
        <div class="container">
            <div class="d-flex bd-highlight">
                <div class="me-auto p-2 bd-highlight">
                    <h2 class="px-1"><?php echo $title; ?></h2>
                </div>
                <div class="p-2 bd-highlight">
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <?php
                        // Tracer::trace($buttons);
                        foreach ($buttons as $type => $button) {
                            $html = '<li><' . $button['tag'];

                            foreach ($button as $key => $value) {
                                if ($key == 'text') {
                                    continue;
                                }

                                $html .= " $key=\"$value\"";
                            }

                            $html .= '>' . $button['text'] . '</' . $button['tag'] . '></li>';

                            echo $html;
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>