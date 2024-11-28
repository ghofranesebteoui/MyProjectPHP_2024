<?php
require_once "../../model/connexion.php";
//afin de pouvoir utiliser l'objet pdo
$connexion = new Connexion();
$pdo = $connexion->getConnexion();
//vider la tab sql
$pdo->exec("delete from produit");
$sql = "";
//remplir le tab produit avec plusieurs valeurs
//qui sont des fausses données
for ($i = 1; $i < 100; $i++) {
    $lib = "Produit num " . $i;
    $pu = random_int(2, 5000);
    $qte = random_int(1, 1000);
    //pour avoir des images différentes (?random=$i)
    $img = "https://picsum.photos/400?random=$i";
    $des = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quod sapiente, placeat obcaecati saepe commodi est animi ad minima, asperiores facilis magni tenetur consectetur, explicabo quibusdam fugiat deleniti laudantium. Cum.
            Velit reprehenderit nesciunt modi eveniet sit. Sed ducimus nobis laborum omnis cumque maxime dolore earum, eum expedita, voluptatibus, ex fuga animi recusandae veniam pariatur iste non libero odit ipsum laudantium.
            Placeat fuga commodi officia error voluptatum molestiae omnis, modi aut id pariatur esse, recusandae repellendus magni atque excepturi molestias sit doloremque dignissimos cum nisi expedita architecto? Culpa exercitationem iusto impedit.
            Architecto sequi corrupti quisquam quae quo aperiam culpa quas, beatae cupiditate! Voluptatum consectetur commodi vitae nemo eligendi ipsa, vel veritatis ab corporis expedita dolor asperiores, assumenda dignissimos sit unde atque!
            Aliquam provident harum sed dolores, aut tempora nostrum officia nisi facere repellat porro quisquam soluta cumque nobis assumenda exercitationem consequuntur distinctio. Ab, ipsum! Laudantium perspiciatis suscipit ut, perferendis praesentium consequuntur.
            Explicabo praesentium, dolorem quae excepturi assumenda dolorum maiores accusantium obcaecati necessitatibus a minus exercitationem facilis, laboriosam tempore iure nesciunt hic magnam aspernatur impedit nam soluta pariatur totam cum. Dolorum, praesentium!
            Quis fuga inventore mollitia eos quidem distinctio dignissimos qui quod magni asperiores necessitatibus natus, esse voluptate impedit eum quas nesciunt temporibus facere consequatur fugit voluptatibus amet deserunt dolor quia! Accusantium?
            Totam reprehenderit iste explicabo omnis cumque sapiente excepturi doloremque at iusto et delectus repudiandae minima ducimus, quisquam cum vero doloribus impedit, libero dolor distinctio, praesentium reiciendis nemo pariatur. Quae, at?
            Sed delectus esse ut voluptatibus laudantium a saepe at! Blanditiis, aliquam asperiores. Id dolore ratione, harum vitae obcaecati exercitationem reiciendis quas eligendi, error nobis maxime laudantium voluptatibus minima amet! Dolor.
            Illo possimus molestias omnis numquam, ipsam corporis, consequuntur non ad ducimus excepturi mollitia, dignissimos enim cupiditate voluptatum deserunt eius nobis et voluptas rem quod repellat eligendi necessitatibus vero. Similique, possimus!";
    $pro = random_int(0, 1);
    //envoyer une seule fois une requete sql avec une centeine de valeurs
    $sql .= "insert into produit values (NULL, '$lib', $pu, $qte, '$des', '$img', $pro) ;";
}
$pdo->exec($sql);
