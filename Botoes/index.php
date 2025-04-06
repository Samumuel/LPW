<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Listas</title>
</head>

<body>

    <?php

    require_once("modelo/Link.php");

    function desenhaBotao($titulo, $lista)
    {
        echo '<div class="dropdown">';
            echo '<button class="dropbtn">' . $titulo . '</button>';
            echo '<div class="dropText">';

                foreach ($lista as $item) {
                    echo '<span><img src="' . $item->getLinkImg() . '" width="70" height="70"> ' . $item->getInfo() . '</span><br>';
                }

            echo '</div>';
        echo '</div>';
    }
    $pokemon = [];

    $link = new Link();
    $link->setLinkImg("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/004.png");
    $link->setInfo("Charmander");
    $pokemon [] = $link;

    $link = new Link();
    $link->setLinkImg("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/007.png");
    $link->setInfo("Squirtle");
    $pokemon [] = $link;

    $link = new Link();
    $link->setLinkImg("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/001.png");
    $link->setInfo("Bulbasaur");
    $pokemon [] = $link;

    desenhaBotao("Pokémons", $pokemon);

    $carros = [];

    $link = new Link();
    $link->setLinkImg("https://i.pinimg.com/736x/d3/5c/39/d35c3906c2f1e0a91689d2453d6ed572.jpg");
    $link->setInfo("Ferrari");
    $carros[] = $link;

    $link = new Link();
    $link->setLinkImg("https://logospng.org/download/bugatti/logo-bugatti-1024.png");
    $link->setInfo("Bugatti");
    $carros[] = $link;

    $link = new Link();
    $link->setLinkImg("https://i.pinimg.com/originals/e2/e4/66/e2e4662e541a44a55410f40315f9222d.jpg");
    $link->setInfo("Lamborghini");
    $carros[] = $link;

    desenhaBotao("Carros", $carros);

    $marcas = [];

    $link = new Link();
    $link->setLinkImg("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQelbr3XhZft96pYHqEDfcld41HG7VRHGtWow&s");
    $link->setInfo("Nike");
    $marcas[] = $link;

    $link = new Link();
    $link->setLinkImg("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHOrIRlHeI7rMxg3BbmGpwAXLji6YpYwzf-w&s");
    $link->setInfo("Adidas");
    $marcas[] = $link;

    $link = new Link();
    $link->setLinkImg("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2esBv6z2-NCu-e3HmICLJVYaRZR3fuwCtQQ&s");
    $link->setInfo("Puma");
    $marcas[] = $link;

    desenhaBotao("Marcas", $marcas);

    $jogos = [];

    $link = new Link();
    $link->setLinkImg("https://logos-download.com/wp-content/uploads/2021/01/Valorant_Logo.png");
    $link->setInfo("Valorant");
    $jogos[] = $link;

    $link = new Link();
    $link->setLinkImg("https://brand.riotgames.com/static/a91000434ed683358004b85c95d43ce0/8a20a/lol-logo.png");
    $link->setInfo("LoL");
    $jogos[] = $link;

    $link = new Link();
    $link->setLinkImg("https://play-lh.googleusercontent.com/4te8y2It_nyY4yX5jcSEFaTDro98302l9EnSbkJyCobGUo8GWxteV_8kJ8nlXyStxw");
    $link->setInfo("BloonsTD6");
    $jogos[] = $link;

    desenhaBotao("Jogos", $jogos);

    ?>

</body>
</html>
