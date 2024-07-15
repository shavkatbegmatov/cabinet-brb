<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Javohyr'; ?></title>

    <style>
        html, body {
            height: 100%;
            padding: 25px;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f1f1f1 !important;
        }

        #container {
            margin: auto;
            max-width: 500px;
        }

        .ui.top.fixed.text.menu {
            background: #fff;
            padding: 8px 0px;
        }
    </style>

    <script src="/views/layouts/assets/j.js"></script>
    <script src="/views/layouts/assets/f.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.7/components/icon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.3/semantic.min.css" integrity="sha512-3quBdRGJyLy79hzhDDcBzANW+mVqPctrGCfIPosHQtMKb3rKsCxfyslzwlz2wj1dT8A7UX+sEvDjaUv+WExQrA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="ui top fixed text menu">
        <div class="ui container">
            <div class="item">
                <img class="ui small image" src="/views/layouts/assets/img/logo.svg" />
            </div>
            <div class="right menu">
                <a href="#" class="item">Помощь</a>
                <a href="#" class="item">Сменить язык</a>
            </div>
        </div>
    </div>
    <div class="ui fluid container" id="container">
        <?php echo $content; ?>
    </div>
    <div class="ui bottom fixed text menu">
        <div class="ui container">
            <div class="item">2024 "Банк развития бизнеса". Все права защищены.</div>
        </div>
    </div>

    <script>
        function togglePassword() {
            let password = $('#password');

            if (password.attr('type') == 'password') {
                password.attr('type', 'text');
            } else if (password.attr('type') == 'text') {
                password.attr('type', 'password');
            }

            $('#togglePassword').toggleClass('slash');
        }
    </script>
</body>
</html>