<html>

<head>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <h1>container app2</h1>
    <table>
        <?php
        foreach (['SCRIPT_URI', 'HTTP_HOST', 'SERVER_NAME', 'SERVER_ADDR'] as $item) {
            printf('<tr>
            <td>%s</td><td>%s</td>
            </tr>', $item, $_SERVER[$item]);
        }
        ?>
    </table>
    <pre>
    <?php print_r($_SERVER); ?>
    </pre>
</body>

</html>