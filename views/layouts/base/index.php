<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'BRB Project'; ?></title>

    <script src="/views/layouts/assets/j.js"></script>
    <script src="/views/layouts/assets/f.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.3/semantic.min.css" integrity="sha512-3quBdRGJyLy79hzhDDcBzANW+mVqPctrGCfIPosHQtMKb3rKsCxfyslzwlz2wj1dT8A7UX+sEvDjaUv+WExQrA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Geologica:wght@100..900&display=swap');

        * {
            font-family: 'Geologica', sans-serif !important;
        }

        body {
            height: 100vh;
        }

        .wrapper {
            position: relative;
            display: flex;
            height: 100%;
        }

        #navbar {
            display: none;
            border: none;
            border-radius: 0px;
        }

        #navbar > .item {
            border-radius: 0px;
        }

        #sidebar {
            border: none;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            min-width: 250px;
            z-index: 1;
            overflow-y: auto;
        }

        #sidebar .item {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        #sidebar .item i {
            font-size: 22px;
        }

        #content {
            width: 100%;
            margin: 0px;
            margin-left: 250px;
            padding: 0px;
        }

        .ui.cards::after {
            display: none;
            content: "";
        }

        @media screen and (max-width: 1000px) {
            #navbar {
                display: flex;
            }

            #content {
                margin: 0px;
            }
        }

        body {
            background-color: #f5f5f5 !important;
        }

        .sidebar-item {
            font-weight: 500 !important;
        }

        .header-segment {
            height: 82px !important;
            margin: 0px !important;
        }

        .full-height {
            height: 100vh !important;
        }

        .content-column {
            padding: 32px !important;
            padding-left: 60px !important;
        }

        .user-info-segment {
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            height: 100% !important;
            text-align: center !important;
        }

        .user-image {
            margin-bottom: 8px !important;
            border-radius: 50% !important;
        }

        .user-name {
            font-weight: 500 !important;
        }

    </style>
    <style>
      .steps {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        /* Flex start to align items from the top */
        padding: 20px;
        border-radius: 10px;
        font-family: Arial, sans-serif;
        position: relative;
        margin: 20px;
      }

      .step {
        text-align: center;
        max-width: 150px;
        position: relative;
        z-index: 1;
      }

      .circle {
        width: 50px;
        height: 50px;
        background-color: #fff;
        border: 3px solid #d20000;
        color: #d20000;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        font-size: 20px;
        font-weight: bold;
      }

      .circle.full {
        background-color: #d20000;
        color: #fff;
      }

      .description {
        font-size: 12px;
        color: #333;
        margin-top: 10px;
      }

      .line {
        position: absolute;
        top: 44px;
        left: 92px;
        right: 96px;
        height: 2px;
        background-color: #d20000;
        z-index: 0;
      }
    </style>
</head>
<body style="background-color: #f5f5f5;">
    <div class="ui top attached borderless inverted menu" id="navbar">
        <a class="icon item" id="toggleSidebar"><i class="bx bx-menu"></i></a>
        <div class="item"><?php echo isset($title) ? $title : 'BRB Project'; ?></div>
    </div>
    <div class="wrapper">
        <div class="ui left attached borderless vertical menu" id="sidebar">
            <div class="item">
                <img class="ui small image" src="/views/layouts/assets/img/logo.svg" />
            </div>
            <div class="ui divider"></div>
            <a href="/coming_soon" class="item sidebar-item"><i class="bx bx-home"></i> Кабинет</a>
            <a href="/coming_soon" class="item sidebar-item"><i class="bx bx-wallet"></i> Депозиты</a>
            <a href="/credits" class="item sidebar-item"><i class='bx bx-money'></i> Кредиты</a>
            <a href="/coming_soon" class="item sidebar-item"><i class='bx bx-credit-card-front'></i> Smart Visa</a>
            <a href="/coming_soon" class="item sidebar-item"><i class='bx bx-credit-card-front'></i> Humo</a>
            <a href="/coming_soon" class="item sidebar-item"><i class='bx bx-credit-card'></i> Visa</a>
            <a href="/coming_soon" class="item sidebar-item"><i class='bx bx-math'></i> Расчетный лист</a>
            <a href="/coming_soon" class="item sidebar-item"><i class='bx bx-search'></i> Поиск кредита</a>
            <a href="/coming_soon" class="item sidebar-item"><i class='bx bx-history'></i> Кредитная история</a>
            <a href="/coming_soon" class="item sidebar-item"><i class='bx bx-globe'></i> Международный денежный перевод</a>
            <a href="/coming_soon" class="item sidebar-item"><i class='bx bx-refresh'></i> Обмен валюты</a>
            <div class="ui divider"></div>
            <?php if (isset($_SESSION['user'])): ?>
                <a class="item sidebar-item" href="/account/settings"><i class='bx bx-cog'></i> Настройки</a>
                <a class="item sidebar-item" href="/account/logout"><i class='bx bx-log-out'></i> Выйти</a>
            <?php else: ?>
                <a class="item sidebar-item" href="/account/login"><i class='bx bx-log-in'></i> Войти</a>
            <?php endif; ?>
        </div>
        <div class="ui basic segment" id="content">
            <div class="ui segment header-segment"></div>
            <div class="ui stackable grid full-height">
                <div class="thirteen wide column content-column">
                    <?php echo $content; ?>
                </div>
                <div class="three wide column">
                    <div class="ui fluid segment user-info-segment">
                        <img class="ui small image user-image" src="/views/layouts/assets/img/user.jpg" alt="" />
                        <b class="user-name">Axmatov Ma'ruf Muzzafar ug'li</b>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            if (window.matchMedia('(max-width: 1000px)').matches) {
                $('#sidebar').addClass('sidebar').sidebar('hide');
                $('#toggleSidebar').off('click').on('click', function() {
                    $('#sidebar').sidebar('toggle');
                });
                $('#content').css('margin-left', '0');
            } else {
                $('#sidebar').removeClass('sidebar').show();
                $('#toggleSidebar').off('click');
                $('#content').css('margin-left', '250px');
            }
        }

        $(document).ready(function() {
            toggleSidebar();
            $(window).resize(toggleSidebar);
        });
    </script>
</body>
</html>
