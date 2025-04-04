<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <?php

    require_once("modelo/Link.php");

    function gerar_botao()
    {
        echo '<div class="dropdown">';
        echo '<button class="dropbtn">Pokémon</button>';
        echo '<div class="dropText">';
        echo    '<span><img src=' . $l2->getLinkImg() . ' width="40" height="40">Charmander</span>';
        echo    '<br>';
        echo    '<span><img src="https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/007.png" width="40" height="40">Squirtle</span>';
        echo    '<br>';
        echo    '<span><img src="https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/001.png" width="40" height="40">Bulbasaur</span>';
        echo '</div>';
        echo '</div>';
    }



    $lista2 = array();

    $link2 = new Link();
    $link2->setLinkImg("https://i.pinimg.com/736x/d3/5c/39/d35c3906c2f1e0a91689d2453d6ed572.jpg");
    $link2->setInfo("Ferrari");

    array_push($lista2, $link2);

    $link2 = new Link();
    $link2->setLinkImg("https://logospng.org/download/bugatti/logo-bugatti-1024.png");
    $link2->setInfo("Bugatti");

    array_push($lista2, $link2);

    $link2 = new Link();
    $link2->setLinkImg("https://i.pinimg.com/originals/e2/e4/66/e2e4662e541a44a55410f40315f9222d.jpg");
    $link2->setInfo("Lamborghini");

    array_push($lista2, $link2);

    foreach ($lista2 as $l2) {
        $l2 = gerar_botao();
    }

    $lista3 = array();

    $link3 = new Link();
    $link3->setLinkImg("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQelbr3XhZft96pYHqEDfcld41HG7VRHGtWow&s");
    $link3->setInfo("Nike");

    array_push($lista3, $link3);

    $link3 = new Link();
    $link3->setLinkImg("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHOrIRlHeI7rMxg3BbmGpwAXLji6YpYwzf-w&s");
    $link3->setInfo("Adidas");

    array_push($lista3, $link3);

    $link3 = new Link();
    $link3->setLinkImg("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2esBv6z2-NCu-e3HmICLJVYaRZR3fuwCtQQ&s");
    $link3->setInfo("Puma");

    array_push($lista3, $link3);

    $lista3 = gerar_botao();

    $lista4 = array();

    $link4 = new Link();
    $link4->setLinkImg("https://logos-download.com/wp-content/uploads/2021/01/Valorant_Logo.png");
    $link4->setInfo("Valorant");

    array_push($lista4, $link4);

    $link4 = new Link();
    $link4->setLinkImg("https://brand.riotgames.com/static/a91000434ed683358004b85c95d43ce0/8a20a/lol-logo.png");
    $link4->setInfo("LoL");

    array_push($lista4, $link4);

    $link4 = new Link();
    $link4->setLinkImg("https://play-lh.googleusercontent.com/4te8y2It_nyY4yX5jcSEFaTDro98302l9EnSbkJyCobGUo8GWxteV_8kJ8nlXyStxw");
    $link4->setInfo("BloonsTD6");

    array_push($lista4, $link4);

    $lista4 = gerar_botao();


    ?>

</html>

</body>
