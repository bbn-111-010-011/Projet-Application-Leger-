<?php
// Tableau de films avec toutes les informations nécessaires
$plats = [
    [
        "plat" => "PAD THAÏ",
        "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1_pDi2mFOz83eX7YABOF810n73-aY1kDOOA&s",
        "ingredient" => "Nouilles de riz, sauce beure de cacahuète, poulet.",
        "prix" => " 10,40 €",
    ],
    [
        "plat" => "KHAO PAD KHANA",
        "img" => "https://images.slurrp.com/prod/recipe_images/transcribe/dinner/Khao-Pad.webp",
        "ingredient" => "Riz sauté caramélisé, brocolis chinois, oeuf au plat, crevettes, tomates.",
        "prix" => " 11,80 €",
    ],
    [
        "plat" => "PAD KRA PHAO",
        "img" => "https://images.services.kitchenstories.io/MRxcM_KNscGAJaphGq57qFKQWJ8=/3840x0/filters:quality(85)/images.kitchenstories.io/wagtailOriginalImages/R2592-final-photo.jpg",
        "ingredient" => "Basilics thaï, poivrons, oignons, oeuf au plat, riz blanc, poulet ou boeuf.",
        "prix" => " 10 €",
    ]
];
?>
<!DOCTYPE html> 
<html>
<head>
    <title>Menu Aromea</title>
</head>
<body>

<h1>&nbsp;&nbsp;&nbsp;&nbsp;Plats signatures</h1>
<br>

<?php foreach ($plats as $plat): ?>
    <ul>
        <li class="film">
            <h2><?php echo $plat['plat']; ?></h2>
            <img src="<?php echo $plat['img']; ?>" alt="Affiche <?php echo htmlspecialchars($plat['plat']); ?>" style="width:200px;height:200px;"><br>
            <p style="font-family: 'Verdana', sans-serif; font-size: 18px;">Ingrédients : <?php echo $plat['ingredient']; ?></p>
			<p style="font-family: 'Verdana', sans-serif; font-size: 18px;">Prix : <?php echo $plat['prix']; ?></p>
            
        </li>
    </ul>  
    <br>
<?php endforeach; ?>

</body>
</html>
