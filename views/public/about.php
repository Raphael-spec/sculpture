<?php ob_start(); ?>

<section class="abo_section_bg" style="background-image: url(./assets/media/Weekly.jpg); background-position: center; background-size: cover;">
    <div class="abo_box">
            <img src="./assets/media/artiste.JPG" alt="" class="abo_box_img">
            <h1>Darkcode</h1>
            <h2>Artiste - Sculptor</h2>
            <p> Diplomée de l'ecole des Beaux-Arts de Yokosawa, kohai du Shinji Koi, célèbre ébéniste du Japon, j'ai suivi la doctrine et les préceptes de mon maître tout en façonnant ma technique depuis des années. Je sais que la culture de mon pays s'exporte de plus en plus dans le monde. En tant que japonais j'en suis très fière Et de ma petite contribution, j'essaye d'apporter du plaisir aussi a tout grand fan de mon travail. Moi c'est à travers la culture de manga que j'essaye du bonheur     
            <br>
            Je créé mes oeuvres uniquement dans des chutes de bois qu'une scierie met de côté. Ne vous inquétez pas, je ne coupe pas des arbres, pour mes oeuvres ça serait contraire à mes idées
            <br>
            Je ne peux cacher, ma passion, je suis un grand fan de manga. Je m'inspire des  exclusivement des mangas actuelles. Parmi ceux dont je suis fan où pour lesquelles j'ai eu un coup de coeur. Je sculpte quand l'envie me prend. Soit de scènes existantes dans les magas ou dans les animés. Pour moi c'est un réel plaisir de pourvoir sculpté, non pas pour vivre mais pour le plaisir. J'ai la chance de sculpter sous aucune pression, ce n'est que du plaisir. Je ne travaille pas sous commande, je ne laisse place qu'a mon inspiration. Pour tous les fans de manga, si vous acquérez une des mes oeuvres. Sachez que vous serez les seules à les avoir. Parce que mes oeuvres sont uniques. il n'y aucune reproduction. Vous serez les seules à les avoir dans le monde. D'où le prix.
            Et l'argent est reversé à une oeuvre de charité, la "Jane Goodall Institute" est une organisation mondiale de protection de la vie sauvage et de l'environnement. Alors n'hésitez pas à vous faire plaisir et préservez la nature  </p>
            <ul>
                <li><a href=""><i class="fa fa-youtube-play"></i></a></li>
                <li><a href=""><i class="fa fa-twitch"></i></a></li>  
                <li><a href=""><i class="fa fa-vimeo"></i></a></li>              
            </ul>
    </div>

</section >  


<?php $contenu = ob_get_clean();
    require_once("./views/public/templatePublic.php");
?>