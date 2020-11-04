<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require dirname(__FILE__) . '/_config.php';
    require $helperBase . '/main.php';

    $response = createLead($_REQUEST, $baseUrl);
    $pixelPurchaseId = $response->pixel_purchase_id;
    $pixelLeadId = $response->pixel_lead_id;
    $pixelPurchaseValue = $response->pixel_purchase_value;
    $pixelCurrency = $response->pixel_currency;

    $showMessage = true;
} else {
    $showMessage = false;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Thank you Money Amulet </title>
    <!-- Meta data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Body style -->
    <style type="text/css">
        html {
            font-size: 62.5%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            cursor: default;
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff;
            font-size: 16px;
            font-size: 1.6rem;
            text-align: center;
        }

        html,
        body {
            height: 100%;
        }

        .page-wrap {
            min-height: 100%;
            margin-bottom: -172px;
        }

        .page-wrap:after {
            content: "";
            display: block;
        }

        .page-wrap:after {
            height: 172px;
        }

        .user-noselect {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        header,
        footer {
            position: relative;
            z-index: 1;
            background-color: #fff;
        }

        header {
            box-shadow: 0 2px 0 rgba(0, 0, 0, .15);
        }

        footer {
            box-shadow: 0 -2px 0 rgba(0, 0, 0, .15);
        }

        figure {
            margin: 0;
            padding: 15px 0;
        }

        figure>.img-logo {
            vertical-align: middle;
            height: 142px;
        }

        .global__main {
            position: relative;
            background-color: #fff;
        }

        section {
            margin: 0 auto;
            position: relative;
            padding: 50px 15px;
            max-width: 480px;
            min-height: 45vh;
            min-height: calc(100vh - 444px);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        h1 {
            font-size: 26px;
            color: rgb(248, 131, 121);
            margin-top: 0;
            margin-bottom: 20px;
        }

        p {
            font-size: 20px;
            line-height: 1.5;
            color: #444;
            font-weight: 600;
            margin-top: 0;
            margin-bottom: 10px;
        }

        @media (min-width: 768px) {
            h1 {
                font-size: 32px;
            }

            p {
                font-size: 24px;
            }
        }
    </style>

    <?php if ($pixelPurchaseId) : ?>
        <!-- Facebook Pixel Code -->
        <script>
            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '<?php echo $pixelPurchaseId; ?>');
            fbq('track', 'PageView');
            fbq('track', 'Purchase', {
                value: <?php echo $pixelPurchaseValue; ?>,
                currency: '<?php echo $pixelCurrency; ?>',
            });
        </script>
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo $pixelPurchaseId; ?>&ev=PageView&noscript=1" /></noscript>
        <!-- End Facebook Pixel Code -->
    <?php endif ?>

    <?php if ($pixelLeadId) : ?>
        <!-- Facebook Pixel Code -->
        <script>
            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '<?php echo $pixelLeadId; ?>');
            fbq('track', 'PageView');
            fbq('track', 'Lead', {
                value: <?php echo $pixelPurchaseValue; ?>,
                currency: '<?php echo $pixelCurrency; ?>',
            });
        </script>
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo $pixelLeadId; ?>&ev=PageView&noscript=1" /></noscript>
        <!-- End Facebook Pixel Code -->
    <?php endif ?>


</head>

<body class="user-noselect">

    <div class="page-wrap">
        <header>

        </header>
        <main class="global__main">
            <section>
                <h1 class="rose-c">Hvala što ste poručili !</h1>
                <p>
                    <span>Uskoro će vas pozvati naš telefonski operater i potvrditi vašu porudžbinu.</span>
                    <span>Molimo vas da držite telefon uključenim i pored sebe!</span>
                </p>
                <p>
                    <p>
                        <h5>

                    </p>
            </section>
        </main>
    </div>

    <footer class="sticky-footer">

    </footer>


</body>

</html>