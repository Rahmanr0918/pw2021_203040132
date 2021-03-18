<?php 
$arrays = [
    [
        "nama"=>"Cristiano Ronaldo",
        "club"=>"Juventus",
        "main"=>"100",
        "gol"=>"76",
        "assist"=>"30"
    ],
    [
        "nama"=>"Lionel Messi",
        "club"=>"Barcelona",
        "main"=>"120",
        "gol"=>"80",
        "assist"=>"12"
    ],
    [
        "nama"=>"Luca Modric",
        "club"=>"Real Madrid",
        "main"=>"87",
        "gol"=>"12",
        "assist"=>"48"
    ],
    [
        "nama"=>"Mohammad Salah",
        "club"=>"Liverpool",
        "main"=>"90",
        "gol"=>"103",
        "assist"=>"8"
    ],
    [
        "nama"=>"Neymar Jr",
        "club"=>"Paris Saint German",
        "main"=>"109",
        "gol"=>"56",
        "assist"=>"15"
    ],
    [
        "nama"=>"Sadio Mane",
        "club"=>"Liverpool",
        "main"=>"63",
        "gol"=>"30",
        "assist"=>"70"
    ],
    [
        "nama"=>"Zlatan Ibrahimovic",
        "club"=>"Ac Milan",
        "main"=>"100",
        "gol"=>"10",
        "assist"=>"12"
    ]
    
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 3d</title>
</head>
<body>
    
    <table border="1" cellspacing="0" cellpadding="3">
    <tr>
    <td>NO</td><td>NAMA</td><td>CLUB</td><td>MAIN</td><td>GOL</td><td>ASSIST</td>
    </tr>

    <?php $nomor = 1; ?>
    <?php foreach($arrays as $menu) :?>  
    <tr>
    <td><?= $nomor; ?></td>
    <td width="150px"><?= $menu["nama"]; ?></td>
    <td width="150px"><?= $menu["club"]; ?></td>
    <td width="50px"><?= $menu["main"]; ?></td>
    <td width="50px"><?= $menu["gol"]; ?></td>
    <td width="50px"><?= $menu["assist"]; ?></td>
    </tr>
    <?php $nomor++; ?>
    <?php endforeach; ?>
    
    <?php 
    $ttlmain = 0;
    $ttlgol = 0;
    $ttlassist = 0;
    foreach($arrays as $menu=>$point) {
        $ttlmain += $point["main"];
        $ttlgol += $point["gol"];
        $ttlassist += $point["assist"];
    }
    ?>

    <tr>
    <th>#</th><th colspan="2">Jumlah</th>
    <td><?= $ttlmain; ?></td>
    <td><?= $ttlgol; ?></td>
    <td><?= $ttlassist; ?></td>
    </tr>
    
    </table>


</body>
</html>