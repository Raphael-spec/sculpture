<?php ob_start(); ?>

<section class="abo_section_bg">
    <div class="abo_box">
            <img src="./assets/media/artiste.JPG" alt="" class="abo_box_img">
            <h1>Ryô SAEBA</h1>
            <h2>Artiste - Sculptor</h2>
            Je créé mes oeuvres uniquement dans des chutes de bois qu'une scierie met de côté. Ne vous inquétez pas, je ne coupe aucun arbres, pour mes oeuvres ça serait contraire à mes idées
            <br>
            Je ne peux cacher, ma passion, je suis un grand fan de manga. Je m'inspire des  exclusivement de tout l'univers manga. Parmi ceux dont je suis fan où pour lesquelles j'ai eu un coup de coeur. Je  ne sculpte que lorsque l'envie me prend. Soit de scènes existantes, tirés de  mangas ou bien dans les animes. Pour moi c'est un réel plaisir de pourvoir sculpté. J'ai la chance de sculpter sous aucune pression, ce n'est que du plaisir. Je ne travaille pas sous commande. Je ne laisse place qu'a mon inspiration. Pour tous les fans de manga, si vous acquérez une des mes oeuvres. Sachez que vous serez les seules à les avoir dans le monde. il n'y aucune reproduction.<br>
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