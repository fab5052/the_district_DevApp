<?php


/* `truc`.`categorie` */
$categorie = array(
  array('libelle' => 'Pizza','image' => 'image/category/pizza_cat.png','active' => 'Yes'),
  array('libelle' => 'Burger','image' => 'image/category/burger_cat.png','active' => 'No'),
  array('libelle' => 'Wrap','image' => 'image/category/wrap_cat.png','active' => 'Yes'),
  array('libelle' => 'Pasta','image' => 'image/category/pasta_cat.jpg','active' => 'Yes'),
  array('libelle' => 'Salade','image' => 'image/category/salade_cat.jpg','active' => 'Yes'),
  array('libelle' => 'Asian Food','image' =>'image/category/asian_food_cat.jpg','active' => 'No'),
  array('libelle' => 'Sandwich','image' => 'image/category/sandwich_cat.jpg','active' => 'Yes'),
  array('libelle' => 'Veggie','image' => 'image/category/veggie_cat.jpg','active' => 'Yes'),
  array('libelle' => 'Partage','image' => 'image/category/cat_partage.jpg','active' => 'No')
);


/* `truc`.`plat` */
$plat = array(
  array('libelle' => 'Classic burger','description' => 'Dégustez le délice intemporel de notre Burger Classique, où chaque bouchée est une symphonie de saveurs parfaitement élaborée. Niché entre deux pains briochés moelleux et toastés se trouve une généreuse portion de steak de bœuf juteux, grillé à la perfection selon votre préférence, offrant un contraste alléchant entre la saveur fumée et la tendreté de la viande.','prix' => '12.00','image' => 'image/food/plat_burger_classic.jpg','id_categorie' => 2, 'id_detail' => 1, 'active' => 'Yes'),
  array('libelle' => 'burger traditionelle','description' => 'Plongez dans une expérience gustative inoubliable avec notre Burger Traditionnel, un véritable hymne à la simplicité et au plaisir culinaire. Ce chef-d\'œuvre de saveurs réconfortantes commence par un généreux steak de bœuf grillé à la perfection, dégageant des arômes alléchants et une tendreté incomparable à chaque bouchée.','prix' => '11.00','image' => 'image/food/plat_burger.jpg','id_categorie' => 2, 'id_detail' => 2, 'active' => 'Yes'),
  array('libelle' => 'Giga burger','description' => 'Préparez-vous à une aventure culinaire hors du commun avec notre Giga Burger Épique, une création monumentale conçue pour satisfaire les appétits les plus voraces et éblouir les amateurs de sensations fortes gastronomiques. Ce chef-d\'œuvre culinaire commence par une montagne de tendres steaks de bœuf grillés à la perfection, empilés les uns sur les autres pour former une tour de saveurs inégalée.','prix' => '14.00','image' => 'image/food/plat_burger_giga.jpg','id_categorie' => 2 ,'id_detail' => 3,'active' => 'Yes'),
  array('libelle' => 'Pizza 4 fromage','description' => 'Plongez dans un tourbillon de fromages exquis avec notre Pizza Quatre Fromages, une création délectable qui séduira les amateurs de fromage les plus exigeants. Sur une base de pâte à pizza artisanale, légère et croustillante, se déploie un festin de fromages fins soigneusement sélectionnés.','prix' => '13.00','image' => 'image/food/plat_pizza_fromage.jpg','id_categorie' => 1, 'id_detail' => 4, 'active' => 'Yes'),
  array('libelle' => 'Pizza pepperoni','description' => 'Plongez dans l\'essence de l\'Italie avec notre Pizza Pepperoni, une explosion de saveurs audacieuses et épicées qui ravira vos papilles à chaque bouchée. Sur une base de pâte à pizza fraîchement préparée, légère et croustillante, se déploie un festin de saveurs inégalées.','prix' => '12.00','image' => 'image/food/plat_pizza_peperoni.jpg','id_categorie' => 1, 'id_detail' => 5, 'active' => 'Yes')
  // array('libelle' => 'Pizza hawaienne','description' => 'Laissez-vous transporter vers des rivages ensoleillés avec notre Pizza Hawaïenne, une fusion exotique de saveurs tropicales qui éveillera vos sens à chaque bouchée. Sur une base de pâte à pizza fraîchement préparée, légère et dorée, se marient des ingrédients soigneusement sélectionnés pour créer une expérience culinaire inoubliable.','prix' => '14.00','image' => 'image/food/plat_pizza_hawai.jpg','id_categorie' => 1 ,'active' => 'Yes'),
  // array('libelle' => 'Epaule d\'Agneau braisée aux Herbes','description' => 'Plongez dans un festin de saveurs méditerranéennes avec notre épaule d\'agneau braisée aux herbes, un plat réconfortant qui éveillera vos sens et éblouira vos convives. Préparée avec soin et amour, cette pièce d\'agneau tendre et juteuse est imprégnée d\'un mélange d\'herbes fraîches et d\'épices parfumées, offrant une explosion de saveurs à chaque bouchée.','prix' => '12.00','image' => 'image/food/plat_carnivore_agneau.jpg','id_categorie' => '1','active' => 'Yes'),
  // array('libelle' => 'Roti de boeuf aux Herbes','description' => 'Découvrez l\'exquisité de notre Rôti de Bœuf aux Herbes, un plat qui incarne l\'élégance et la simplicité de la cuisine traditionnelle. Ce rôti de bœuf est soigneusement sélectionné, assaisonné avec un mélange d\'herbes fraîches et rôti lentement pour révéler toute sa tendreté et son arôme délicieux.','prix' => '14.00','image' => 'image/food/plat_carnivore_roti.jpg','id_categorie' => 3,'active' => 'Yes'),
  // array('libelle' => 'Steak Frites','description' => 'Dégustez notre savoureux steak accompagné de frites croustillantes. Un classique réconfortant qui ravira vos papilles à chaque bouchée.','prix' => '15.00','image' => 'image/food/plat_carnivore_steak.jpg','id_categorie' => 3,'active' => 'Yes'),
  // array('libelle' => 'Pennes aux Poulet','description' => 'Savourez nos délicieuses pennes accompagnées de tendres morceaux de poulet grillé, le tout enrobé d une sauce tomate maison et saupoudré de parmesan frais. Un plat réconfortant qui saura satisfaire toutes les papilles.','prix' => '14.50','image' => 'image/food/plat_pasta_pennepoulet.jpg','id_categorie' => 4,'active' => 'Yes'),
  // array('libelle' => 'Tagliatelles à la Sauce Tomate','description' => 'Dégustez nos tagliatelles fraîches nappées d une délicieuse sauce tomate maison, relevée d herbes fraîches et d ail. Un plat italien classique qui vous transportera directement en Méditerranée.','prix' => '13.50','image' => 'image/food/plat_pasta_tagliatelle.jpg','id_categorie' => 4,'active' => 'Yes'),
  // array('libelle' => 'Spaghetti à la Sauce Tomate','description' => 'Savourez nos spaghettis al dente enrobés d une sauce tomate maison, préparée avec des tomates mûries au soleil, de l ail, de l huile d olive et des herbes fraîches. Un plat simple mais délicieusement réconfortant.','prix' => '12.00','image' => 'image/food/plat_pasta_spaghetti.jpg','id_categorie' => 4,'active' => 'Yes'),
  // array('libelle' => 'classic Salade','description' => 'Dégustez notre salade fraîche et croquante composée de laitue iceberg, de tomates juteuses, de concombres frais, de carottes râpées et de tranches d\'oignon rouge. Accompagnée d\'une vinaigrette maison légère et parfumée, cette salade est le choix parfait pour une entrée rafraîchissante ou un plat léger.','prix' => '11.00','image' => 'image/food/plat_salade_classic.jpg','id_categorie' => 5,'active' => 'Yes'),
  // array('libelle' => 'Salade au Saumon','description' => 'Savourez notre délicieuse salade au saumon, un mélange équilibré de laitue croquante, d\'épinards frais, de concombres tranchés, d\'oignons rouges et de tomates cerises, accompagné de morceaux de saumon grillé ou fumé. Garnie de câpres et de quartiers de citron pour une touche de fraîcheur, cette salade est sublimée par une vinaigrette à l\'aneth maison.','prix' => '13.00','image' => 'image/food/plat_salade_saumon.jpg','id_categorie' => 5 ,'active' => 'Yes'),
  // array('libelle' => 'Salade au Poulet','description' => 'Dégustez notre savoureuse salade au poulet, composée de laitue croquante, de tomates juteuses, de concombres frais, d\'avocat crémeux, de maïs doux, et de tranches d\'oignon rouge, le tout agrémenté de morceaux de poulet grillé et assaisonné. Accompagnée d\'une vinaigrette maison légère et parfumée, cette salade est un choix délicieux et équilibré pour un repas satisfaisant.','prix' => '14.00','image' => 'image/food/plat_salade_poulet.jpg','id_categorie' => 5 ,'active' => 'Yes'),
  // array('libelle' => 'Sushis saumon','description' => 'Savourez nos délicieux sushis au saumon, préparés avec du riz vinaigré et des tranches de saumon frais, roulés dans de l\'algue nori. Chaque bouchée offre un équilibre parfait entre le riz tendre et le saumon fondant, accompagné de wasabi et de sauce soja pour une expérience gustative authentique.','prix' => '12.00','image' => 'image/food/plat_sushi_saumon.jpg','id_categorie' => 6 ,'active' => 'Yes'),
  // array('libelle' => 'Sushis Assortis','description' => 'Découvrez notre sélection d\'exquis sushis assortis, préparés avec du riz vinaigré et une variété de garnitures savoureuses telles que le saumon, le thon, l\'avocat, le concombre, et bien plus encore. Chaque bouchée offre une explosion de saveurs et une expérience culinaire authentique.','prix' => '15.00','image' => 'image/food/plat_sushi_sushi.jpg','id_categorie' => 6 ,'active' => 'Yes'),
  // array('libelle' => 'Ramen','description' => 'Dégustez nos délicieux ramen, un plat japonais réconfortant composé de nouilles fraîches, d\'un bouillon savoureux et d\'une variété d\'ingrédients tels que des tranches de porc, des œufs mollets, des légumes frais et des algues nori. Chaque bol est une explosion de saveurs et une expérience culinaire inoubliable.','prix' => '14.00','image' => 'image/food/plat_sushi_ramen.jpg','id_categorie' => 6 ,'active' => 'Yes'),
  // array('libelle' => 'Sandwich au Poulet','description' => 'Dégustez notre délicieux sandwich au poulet, composé de blancs de poulet grillés, de laitue croquante, de tomates juteuses et de mayonnaise, le tout enveloppé dans du pain moelleux et doré. Un classique réconfortant qui saura satisfaire vos papilles.','prix' => '10.00','image' => 'image/food/plat_sandwich_poulet.jpg','id_categorie' => 7 ,'active' => 'Yes'),
  // array('libelle' => 'Tartine avocat','description' => 'Dégustez notre savoureuse tartine à l\'avocat, garnie de tranches d\'avocat mûr, de tomates cerises, de jeunes pousses d\'épinards, et d\'une touche de sel et de poivre. Servie sur du pain grillé, cette tartine est un choix délicieusement léger pour une pause déjeuner ou une collation.','prix' => '9.00','image' => 'image/food/plat_sandwich_tartine.jpg','id_categorie' => 7 ,'active' => 'Yes'),
  // array('libelle' => 'Wrap','description' => 'Dégustez notre délicieux wrap au poulet, garni de blancs de poulet grillés, de laitue croquante, de tomates fraîches, de fromage râpé et de sauce ranch, le tout enveloppé dans une tortilla de blé moelleuse. Un repas rapide et savoureux pour combler vos envies.','prix' => '11.00','image' => 'image/food/plat_sandwich_wrap.jpg','id_categorie' => 7 ,'active' => 'Yes'),
  // array('libelle' => 'Pavé de saumon grillé','description' => 'Savourez notre délicieux pavé de saumon grillé, servi avec un accompagnement de votre choix. Le saumon est grillé à la perfection, offrant une texture tendre et savoureuse, avec une légère caramélisation à l\'extérieur. Un choix parfait pour les amateurs de fruits de mer.','prix' => '18.00','image' => 'image/food/plat_poisson_saumon.jpg','id_categorie' => 8 ,'active' => 'Yes'),
  // array('libelle' => 'Filet de merlu Grillé','description' => 'Dégustez notre succulent filet de merlu grillé, accompagné d\'une garniture de saison. Le merlu est grillé à la perfection, offrant une chair tendre et délicate, avec des arômes subtils de la mer. Un choix parfait pour les amateurs de poisson.','prix' => '16.00','image' => 'image/food/plat_poisson_merlu.jpg','id_categorie' => 8 ,'active' => 'Yes'),
  // array('libelle' => 'Fish & Chips','description' => 'Dégustez notre délicieux fish & chips, composé de filets de poisson frais, enrobés d\'une pâte croustillante et dorée, accompagnés de frites fraîchement préparées. Servi avec une sauce tartare maison et une tranche de citron, ce plat emblématique de la cuisine britannique est un régal pour les amateurs de fruits de mer.','prix' => '14.00','image' => 'image/food/plat_poisson_fish&chips.jpg','id_categorie' => 8 ,'active' => 'Yes'),
  // array('libelle' => 'Plateau d\'assortiment Partager','description' => 'Découvrez notre plateau de charcuterie à partager, garni d\'une sélection de délices salés tels que du jambon cru, du saucisson, des terrines, des cornichons, des olives et du fromage. Accompagné de pain frais et de condiments, ce plateau est parfait pour partager un moment convivial entre amis ou en famille.','prix' => '18.00','image' => 'image/food/plat_partage_assortiment.jpg','id_categorie' => 9 ,'active' => 'Yes'),
  // array('libelle' => 'Assiette de Charcuterie','description' => 'Savourez notre délicieuse assiette de charcuterie, garnie d\'une sélection variée de spécialités charcutières telles que du jambon cru, du saucisson, du pâté, des rillettes et des cornichons. Un assortiment généreux de saveurs salées, parfait pour les amateurs de charcuterie.','prix' => '16.00','image' => 'image/food/plat_partage_charcuterie.jpg','id_categorie' => 9 ,'active' => 'Yes')
);

/*'detail'*/
$detail = array(
  // array('quantite' => 3),
  array('quantite' => 2, 'id_commande' => 2, 'id_plat' => 2),
  array('quantite' => 1, 'id_commande' => 3, 'id_plat' => 4),
  array('quantite' => 3, 'id_commande' => 1, 'id_plat' => 5),
  array('quantite' => 2, 'id_commande' => 4, 'id_plat' => 1),
  array('quantite' => 4, 'id_commande' => 5, 'id_plat' => 6)
);


$commande = array(
  array('date_commande' => '2024-03-04 08:30:00','total' => '36.00','etat' => 0,'id_detail'=> 1, 'id_utilisateur' => 1), 
  array('date_commande' => '2024-03-04 09:15:00','total' => '26.00','etat' => 2,'id_detail'=> 2, 'id_utilisateur' => 2),
  array('date_commande' => '2024-03-04 10:00:00','total' => '15.00','etat' => 3,'id_detail'=> 3, 'id_utilisateur' => 3),
  array('date_commande' => '2024-03-04 11:45:00','total' => '42.00','etat' => 0,'id_detail'=> 4, 'id_utilisateur' => 4),
  array('date_commande' => '2024-03-04 13:20:00','total' => '29.00','etat' => 1,'id_detail'=> 5, 'id_utilisateur' => 5)
  // array('date_commande' => '2024-03-04 14:10:00','total' => '56.00','etat' => 1,'username' => 'Michael Johnson','telephone_client' => '7894569630','email_client' => 'michael@example.com','adresse_client' => '753 Maple Street')
  // array('date_commande' => '2024-03-04 15:05:00','total' => '12.00','etat' => 'En cours de livraison','username' => 'Jessica Miller','telephone_client' => '7458963210','email_client' => 'jessica@example.com','adresse_client' => '852 Walnut Street')
  // array('date_commande' => '2024-03-04 16:30:00','total' => '14.00','etat' => 'Livrée','username' => 'Daniel Davis','telephone_client' => '7485963210','email_client' => 'daniel@example.com','adresse_client' => '369 Pine Street'),,'id_utilisateur' => 
  // array('date_commande' => '2024-03-04 17:20:00','total' => '40.50','etat' => 'En attente de confirmation','username' => 'Olivia Wilson','telephone_client' => '7412589630','email_client' => 'olivia@example.com','adresse_client' => '963 Cedar Street'),'id_utilisateur' => 9
  // array('date_commande' => '2024-03-04 18:45:00','total' => '24.00','etat' => 'En cours de préparation','username' => 'James Taylor','telephone_client' => '7894569630','email_client' => 'james@example.com','adresse_client' => '753 Maple Street'),,'id_utilisateur' => 
  // array('date_commande' => '2024-03-04 19:30:00','total' => '24.00','etat' => 'Annulée','username' => 'Emma Garcia','telephone_client' => '7412589630','email_client' => 'emma@example.com','adresse_client' => '963 Oak Street'),,'id_utilisateur' => 
  // array('date_commande' => '2024-03-04 20:15:00','total' => '14.00','etat' => 'Annulée','username' => 'William Clark','telephone_client' => '7894569630','email_client' => 'william@example.com','adresse_client' => '753 Pine Street'),'id_utilisateur' => 

// array('date_commande' => '2024-03-04 08:30:00','total' => '36.00','etat' => 'En attente de traitement','username' => 'Alice Johnson','telephone_client' => '7894561230','email_client' => 'alice@example.com','adresse_client' => '123 Main Street', ),  'id_utilisateur' => 1
// array('date_commande' => '2024-03-04 09:15:00','total' => '26.00','etat' => 'En cours de livraison','username' => 'Bob Smith','telephone_client' => '7418529630','email_client' => 'bob@example.com','adresse_client' => '456 Elm Street'),'id_utilisateur' => 2
// array('date_commande' => '2024-03-04 10:00:00','total' => '15.00','etat' => 'Livrée','username' => 'Emily Brown','telephone_client' => '7458963210','email_client' => 'emily@example.com','adresse_client' => '789 Oak Avenue'),'id_utilisateur' => 3
// array('date_commande' => '2024-03-04 11:45:00','total' => '42.00','etat' => 'En attente de confirmation','username' => 'David Wilson','telephone_client' => '7485963210','email_client' => 'david@example.com','adresse_client' => '963 Pine Street'),'id_utilisateur' => 4
// array('date_commande' => '2024-03-04 13:20:00','total' => '29.00','etat' => 'En cours de préparation','username' => 'Sophia Martinez','telephone_client' => '7412589630','email_client' => 'sophia@example.com','adresse_client' => '258 Cedar Street'),'id_utilisateur' => 5
// array('date_commande' => '2024-03-04 14:10:00','total' => '56.00','etat' => 'En attente de traitement','username' => 'Michael Johnson','telephone_client' => '7894569630','email_client' => 'michael@example.com','adresse_client' => '753 Maple Street')'id_utilisateur' => 6,

);

/* `truc`.`utilisateur` */
$utilisateur = array(
  array('email' => 'alice@example.com','password' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq','nom' => 'Johnson', 'prenom' => 'Alice', 'telephone' => '7894561230', 'adresse' => '123 Main Street', 'cp' => '80850', 'ville' => 'Amiens'),
  array('email' => 'bob@example.com','password' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq',  'nom' => 'Smith', 'prenom' => 'Bob','telephone' => '7418529630', 'adresse' => '456 Elm Street', 'cp' => '80610', 'ville' => 'Amiens'),
  array('email' => 'emily@example.com','password' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq','nom' => 'Brown','prenom' => 'Emil','telephone' => '7458963210', 'adresse' => '789 Oak Avenue', 'cp' => '80000', 'ville' => 'Berto'),
  array('email' => 'david@example.com','password' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq', 'nom' => 'Wilson', 'prenom' => 'David ', 'telephone' => '7485963210', 'adresse' => '963 Pine Street', 'cp' => '80610', 'ville' => 'Longueau' ),
  array('email' => 'sophia@example.com','password' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq','nom'=> 'Martini', 'prenom' => 'Sophia', 'telephone' => '7412589630', 'adresse' => '258 Cedar Street', 'cp' => '80100', 'ville' => 'St Leger')
//   array('username' => 'Michael Johnson','password' => 'michael@example.com','email' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq'),
//   array('username' => 'Jessica Miller','password' => 'jessica@example.com','email' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq'),
//   array('username' => 'Daniel Davis','password' => 'daniel@example.com','email' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq'),
//   array('username' => 'Olivia Wilson','password' => 'olivia@example.com','email' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq'),
//   array('username' => 'James Taylor','password' => 'james@example.com','email' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq'),
//   array('username' => 'Emma Garcia','password' => 'emma@example.com','email' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq'),
//   array('username' => 'Willian Clark','password' => 'willian@example.com','email' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq')
  // array('username' => 'fab','password' => '$2y$10$siBIeJsn1l8d8zczgAXHOOtRiOJ.etO2AInzZZDrMYqBOHh0oLORq','email' => 'f.beaujois@gmail.com'),
  // array('username' => 'fab2','password' => '$2y$10$PQWqt47k1.e9RwxsJu1izOQScVw/slbAbHUWcON0kfnerNxTOAt8W','email' => 'fbezafilfeza@gmail.com'),
  // array('username' => 'fab25','password' => '$2y$10$OvFkkmOpCq.ThkOjqlpwquK3fbrBUNjNDLtKyR08Yx005q1Yipw1S','email' => 'fbezafilfeza@gmail.com'),
  // array('username' => 'fab2505','password' => '$2y$10$Hm54IIqHT.m3ijJkSzyr5eum5kBK5KKBAyFGAV706tXAg6k7m47UC','email' => 'dvdsvdsa@gmail.com'),
  // array('username' => 'gtherh','password' => '$2y$10$8.aHAuqZ2vLjKYbNDHBpeeHxLSIwVP2lP4m2pVAzAqRMfdRsUJduG','email' => 'jju@gmza.com'),
  // array('username' => 'gbz','password' => '$2y$10$Gz7EgB.uGR.Y0pXCxRntC.fA8MKJmbcwxYFjGnICJCAoP0FwXF3Qq','email' => 'cc@gmail.com'),
  // array('username' => 'cdbvdsvsv','password' => '$2y$10$3pnHd/fdseTzj7NZr8DP/uRWWT8OHSIw3PHO/.osGmTkUgYjhKN2G','email' => 'fdbfdbfdb@gmail.com'),
  // array('username' => 'vdvsv','password' => '$2y$10$0sn/JZ4kHd1ss52pzmrIZuRuE18LRa/B.82AuN2mKFCWAu/YPmRWC','email' => 'vdsvdsvsd@gmail.com'),
  // array('username' => 'ddsqcdsqcsqc','password' => '$2y$10$8UiiBGd8TBi87YnKWQNQJuXc9z9Tq7uo8ImN4GfPSbjrPpPVj/m.y','email' => 'efefaezfa@gmail.com'),
  // array('username' => 'sqcqcsqc','password' => '$2y$10$x7x4284fq..jxwQ5DU0c0urEJA2uxslGvNv2byliefAa1AaxZqV7K','email' => 'csqcsqccs@gmail.com'),
  // array('username' => 'sqcqcsqcvdv','password' => '$2y$10$OIeu7CyzUzmo8spPvyvOPOijx.ZN00MAOkOhX.6yONgGmE.YSmd7i','email' => 'csqcsqcdsvdsvcs@gmail.com')
);


