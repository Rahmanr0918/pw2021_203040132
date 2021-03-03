<!-- 
    Rahman Ramadan
    203040132
    Praktikum 13.00
 -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas1</title>
</head>

<body>
    <table border="2" cellpadding="30" cellspacing="4" align="center">
        <?php for ($b = 1; $b <= 6; $b++) : ?>
            <tr>
                <?php for ($k = 1; $k <= 6; $k++) : ?>
                    <?php if (($b + $k) % 2 == 1) { ?>
                        <td bgcolor="salmon"></td>
                    <?php } else { ?>
                        <td bgcolor="lightblue"></td>
                    <?php } ?>

                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>


</body>

</html>