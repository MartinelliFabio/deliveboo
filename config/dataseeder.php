<?php
return [
    "shopkeepers" => [
        [
            "name" => "MC Donalds",
            "p_iva" => "84556075776",
            "address" => "Via Garibaldi 8, Torino",
            "image" => "https://rs-menus-api.roocdn.com/images/9c3c0ca6-f2d1-4445-be8e-6f846a49fd9e/image.jpeg?width=533&height=300&auto=webp&format=jpg&fit=crop",
            "hour" => "8:00am - 22:00pm",
        ],
        [
            "name" => "Pizzeria Reginella",
            "p_iva" => "91923650602",
            "address" => "Via Garibaldi 8, Torino",
            "image" => "https://rs-menus-api.roocdn.com/images/79519415-0a4c-47b6-9ee5-0235af7c9022/image.jpeg?width=533&height=300&auto=webp&format=jpg&fit=crop",
            "hour" => "8:00am - 22:00pm",
        ],
        [
            "name" => "Starbucks",
            "p_iva" => "36167741880",
            "address" => "Via Garibaldi 8, Torino",
            "image" => "https://rs-menus-api.roocdn.com/images/9c3c0ca6-f2d1-4445-be8e-6f846a49fd9e/image.jpeg?width=533&height=300&auto=webp&format=jpg&fit=crop",
            "hour" => "8:00am - 22:00pm",
        ],
        [
            "name" => "Sushi Club",
            "p_iva" => "23565654564",
            "address" => "Via Garibaldi 8, Torino",
            "image" => "https://www.mizusushi.it/wp-content/uploads/2020/10/026_1-scaled.jpg",
            "hour" => "8:00am - 22:00pm",
        ],
        [
            "name" => "Principe di Kebab Ali baba",
            "p_iva" => "80202431011",
            "address" => "Via Garibaldi 8, Torino",
            "image" => "https://media-cdn.tripadvisor.com/media/photo-s/0e/50/98/36/ali-baba-doner-kebab.jpg",
            "hour" => "8:00am - 22:00pm",
        ],
        [
            "name" => "Burger King",
            "p_iva" => "30433925456",
            "address" => "Via Garibaldi 8, Torino",
            "image" => "https://www.foodserviceweb.it/wp-content/uploads/sites/4/2021/01/burger-king-logo-rebrand-bk-jkr_dezeen_2364_social_0.jpg",
            "hour" => "8:00am - 22:00pm",
        ],
        [
            "name" => "Burrito's Way",
            "p_iva" => "41768111571",
            "address" => "Via Garibaldi 8, Torino",
            "image" => "https://www.foodserviceweb.it/wp-content/uploads/sites/4/2021/01/burger-king-logo-rebrand-bk-jkr_dezeen_2364_social_0.jpg",
            "hour" => "8:00am - 22:00pm",
        ],
        [
            "name" => "La Sangria",
            "p_iva" => "33614911947",
            "address" => "Via Garibaldi 8, Torino",
            "image" => "https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,f_auto,q_auto,w_450,h_450,d_it:cuisines:pizza-3.jpg/v1/it/restaurants/224023.jpg",
            "hour" => "8:00am - 22:00pm",
        ],
        [
            "name" => "Chuan Xiang Ju Gastronomia Cinese",
            "p_iva" => "93109930985",
            "address" => "Via Garibaldi 8, Torino",
            "image" => "https://tb-static.uber.com/prod/image-proc/processed_images/253b22d7c39d15c2bfb1ff546aea6451/820883a48567670acbd720bc76391291.jpeg",
            "hour" => "8:00am - 22:00pm",
        ],
        [
            "name" => "Mi prendi in Gyros",
            "p_iva" => "94136684332",
            "address" => "Via Garibaldi 8, Torino",
            "image" => "https://w7.pngwing.com/pngs/54/137/png-transparent-shawarma-gyro-doner-kebab-chicken-chicken-food-animals-recipe.png",
            "hour" => "8:00am - 22:00pm",
        ],
    ],
    "types" => [
        "italiano",
        "americano",
        "cinese",
        "giapponese",
        "messicano",
        "indiano",
        "greco",
        "turco",
        "spagnolo",
        "russo",
    ],
    "products" => [
        [
            "name" => "patatine",
            "price" => "2.90",
            "ingredient" => "patatine fritte",
            "image" => "https://rs-menus-api.roocdn.com/images/af746bd6-c814-4508-ae80-951ddecd4a8a/image.jpeg?width=543&height=305&auto=webp&format=jpg&fit=crop",
            "shopkeeper_id" => [7],
        ],
        [
            "name" => "grand crispy McBacon",
            "price" => "7.10",
            "ingredient" => "bacon, hamburger, cheddar, salsa crispy",
            "image" => "https://rs-menus-api.roocdn.com/images/a9618a3d-ea13-4f45-945c-936b67fd673d/image.jpeg?width=560&height=315&auto=webp&format=jpg&fit=crop",
            "shopkeeper_id" => [8, 9, 10, 11],
        ],
        [
            "name" => "coca-cola",
            "price" => "3.00",
            "ingredient" => "liquido gassoso zuccherato",
            "image" => "https://rs-menus-api.roocdn.com/images/660ad39f-d513-42fc-b27e-8f083d548fdf/image.jpeg?width=543&height=305&auto=webp&format=jpg&fit=crop",
            "shopkeeper_id" => [8]
        ],
        [
            "name" => "pizza margherita",
            "price" => "5.00",
            "ingredient" => "salsa di pomodoro, fiordilatte di agerola, basilico",
            "image" => "https://italianspizza.it/wp-content/uploads/2022/06/FAMILY-PIZZA-MARGHERITA-online-pizza-sconti-eventi-feste-delivery-consegna-a-domicilio-san-colombano-al-lambro-lambrinia-monteleone-lodi-milano-italia.png",
            "shopkeeper_id" => [10],
        ],
        [
            "name" => "pizza patatine e wurstel",
            "price" => "7.50",
            "ingredient" => "salsa di pomodoro, patatine fritte, wurstel",
            "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6EfKp4WEmv4ED2UzSFHg3Dq86reMHi97FBHMZG7cMJD0zArx7u_opsvoBkwkWo1w4UIs&usqp=CAU",
            "shopkeeper_id" => [7, 8, 9],
        ],
        [
            "name" => "pizza quattro stagioni",
            "price" => "8.00",
            "ingredient" => "salsa di pomodoro, funghi, carciofi, peperoni, prosciutto cotto",
            "image" => "https://upload.wikimedia.org/wikipedia/commons/4/42/Pizza_Quattro_Stagioni_transparent.png?width=858&height=542",
            "shopkeeper_id" => [12],
        ],
        [
            "name" => "sangria tradicional rossa",
            "price" => "13.00",
            "ingredient" => "vino rosso, brandy, cointreau, gin, frutta",
            "image" => "https://banner2.cleanpng.com/20180701/bzg/kisspng-sangria-red-wine-juice-cocktail-tragos-5b386f2fd2ac39.2934068115304251358629.jpg",
            "shopkeeper_id" => [14],
        ],
        [
            "name" => "paella di marisco",
            "price" => "18.00",
            "ingredient" => "frutti di mare",
            "image" => "https://www.saporedimare.it/wp-content/uploads/elementor/thumbs/Paella-carne-pesce-plbjf523mkqld4kaarqymwykuj7dw7dh0e688bjrf2.png",
            "shopkeeper_id" => [9, 10],
        ],
        [
            "name" => "gazpacho andaluz",
            "price" => "8.90",
            "ingredient" => "zuppa fredda di verdure crude e pomodoro",
            "image" => "https://yimages360.s3.amazonaws.com/products/2021/06/60b8e7a4bef2d/1x.jpg",
            "shopkeeper_id" => [10],
        ],
        [
            "name" => "Cappuccino",
            "price" => "2.60",
            "ingredient" => "Latte caldo ed espresso con una soffice e golosa crema di latte",
            "image" => "https://f.roocdn.com/images/menu_items/98014100/item-image.jpg?width=543&height=305&auto=webp&format=jpg&v=1674467059&fit=crop",
            "shopkeeper_id" => [7, 8],
        ],
        [
            "name" => "Caffe Americano",
            "price" => "2.50",
            "ingredient" => "Caffe espresso e acqua calda come la classica ricetta americana",
            "image" => "https://f.roocdn.com/images/menu_items/98014104/item-image.jpg?width=543&height=305&auto=webp&format=jpg&v=1674467059&fit=crop",
            "shopkeeper_id" => [9],
        ],
        [
            "name" => "Toast Classico",
            "price" => "6.90",
            "ingredient" => "Pane toast con farina integrale, prosciutto cotto alta qualita, edamer",
            "image" => "https://f.roocdn.com/images/menu_items/98014029/item-image.jpg?width=560&height=315&auto=webp&format=jpg&v=1674467059&fit=crop",
            "shopkeeper_id" => [7, 8],
        ],
        [
            "name" => "Riso alla cantonese",
            "price" => "4.00",
            "ingredient" => "Riso saltato con prosciutto, piselli ed uovo",
            "image" => "https://images.fidhouse.com/fidelitynews/wp-content/uploads/sites/6/2016/03/1456829520_d14699eab543f3b24be96d83a9fa22b34846fce0-321023390.jpg",
            "shopkeeper_id" => [8],
        ],
        [
            "name" => "Onigiri spicy",
            "price" => "5.00",
            "ingredient" => "Salmone crudo e salsa maionese piccante",
            "image" => "https://rs-menus-api.roocdn.com/images/ab985cb8-fb29-4cad-870d-18883a4d23eb/image.jpeg?width=560&height=315&auto=webp&format=jpg&fit=crop",
            "shopkeeper_id" => [7],
        ],
        [
            "name" => "Sashimi sake",
            "price" => "5.00",
            "ingredient" => "Fettine di salmone crudo",
            "image" => "https://rs-menus-api.roocdn.com/images/7824972b-dbf0-4924-936e-2054078680c8/image.jpeg?width=560&height=315&auto=webp&format=jpg&fit=crop",
            "shopkeeper_id" => [13],
        ],
        [
            "name" => "Panino Kebab",
            "price" => "6.00",
            "ingredient" => "Kebab, insalata, pomodoro, salsa piccante, cipolla , salsa yogurt",
            "image" => "https://d2j6dbq0eux0bg.cloudfront.net/images/62400814/2367230254.jpg",
            "shopkeeper_id" => [12],
        ],
        [
            "name" => "Arrotolato Kebab",
            "price" => "6.00",
            "ingredient" => "Kebab, insalata, pomodoro, salsa piccante, cipolla , salsa yogurt",
            "image" => "https://qualitifood.com/wp-content/uploads/brizy/imgs/piada-kebab-tagliato-545x545x0x68x545x409x1562337866.png",
            "shopkeeper_id" => [15],
        ],
        [
            "name" => "Focaccia bianca",
            "price" => "4.00",
            "ingredient" => "Focaccia bianca",
            "image" => "https://content.dambros.it/uploads/2016/04/19103803/0000121304.jpg",
            "shopkeeper_id" => [11],
        ],
        [
            "name" => "Bacon King",
            "price" => "8.10",
            "ingredient" => "Due hamburger di manzo alla griglia con 8 fette di bacon, cheddar, ketchup e maionese",
            "image" => "https://f.roocdn.com/images/menu_items/19526413/item-image.jpg?width=543&height=305&auto=webp&format=jpg&v=1675186254&fit=crop",
            "shopkeeper_id" => [12],
        ],
        [
            "name" => "Sprite",
            "price" => "3.80",
            "ingredient" => "Bibita Sprite",
            "image" => "https://f.roocdn.com/images/menu_items/19526353/item-image.jpg?width=560&height=315&auto=webp&format=jpg&v=1675186254&fit=crop",
            "shopkeeper_id" => [8, 9, 10],
        ],
        [
            "name" => "Bacon king fries con cheddar sauce e bacon bits",
            "price" => "4.40",
            "ingredient" => "patatine fritte con coriandoli di bacon e salsa cheddar",
            "image" => "https://f.roocdn.com/images/menu_items/182573093/item-image.jpg?width=560&height=315&auto=webp&format=jpg&v=1675186254&fit=crop",
            "shopkeeper_id" => [7, 8, 9, 10],
        ],
        [
            "name" => "El Pulled Burrito",
            "price" => "13.50",
            "ingredient" => "Riso basmati, pulled pork, fagioli rossi, pico de gallo, panna acida e guacamole",
            "image" => "https://rs-menus-api.roocdn.com/images/88b43cfe-184d-4316-a972-7c2353dddb20/image.jpeg?width=560&height=315&auto=webp&format=jpg&fit=crop",
            "shopkeeper_id" => [11],
        ],
        [
            "name" => "Taco de Chili",
            "price" => "12.00",
            "ingredient" => "Base di lattuga, chili con carne, pico de gallo e guacamole",
            "image" => "https://rs-menus-api.roocdn.com/images/b4b78fa1-8c5e-48b7-b277-13ff33082e52/image.jpeg?width=543&height=305&auto=webp&format=jpg&fit=crop",
            "shopkeeper_id" => [10],
        ],
        [
            "name" => "Nachos",
            "price" => "7.00",
            "ingredient" => "Tortillas di mais",
            "image" => "https://rs-menus-api.roocdn.com/images/a68d3915-2e11-4e0a-bdd9-210ec9afd991/image.jpeg?width=560&height=315&auto=webp&format=jpg&fit=crop",
            "shopkeeper_id" => [11],
        ],
        [
            "name" => "Manzo con cinque aromi in salsa piccante",
            "price" => "11.00",
            "ingredient" => "Manzo",
            "image" => "https://rs-menus-api.roocdn.com/images/a68d3915-2e11-4e0a-bdd9-210ec9afd991/image.jpeg?width=560&height=315&auto=webp&format=jpg&fit=crop",
            "shopkeeper_id" => [12],
        ],
        [
            "name" => "Ravioli",
            "price" => "6.00",
            "ingredient" => "Ravioli di maiale",
            "image" => "https://barcalcagno.it/sushi/wp-content/uploads/2019/07/RAVIOLI-R1-R2-.jpg",
            "shopkeeper_id" => [7, 8, 9, 10],
        ],
        [
            "name" => "Gamberi",
            "price" => "9.50",
            "ingredient" => "sale e pepe",
            "image" => "https://www.sushiroyal.it/utenti/sushiroyal/uploads/img_6656.jpg",
            "shopkeeper_id" => [14, 15],
        ],
        [
            "name" => "Falafel con salsa allo yogurt",
            "price" => "8.50",
            "ingredient" => "Falafel tradizionali con salsa allo yogurt",
            "image" => "https://rs-menus-api.roocdn.com/images/4ec0a438-09c0-4b2d-aff6-7e55e0921f0b/image.jpeg?width=560&height=315&auto=webp&format=jpg&fit=crop",
            "shopkeeper_id" => [15],
        ],
        [
            "name" => "Pita Gyros Falafel",
            "price" => "13.50",
            "ingredient" => "Pita con falafel, hummus, pico de gallo, lattuga e salsa",
            "image" => "https://rs-menus-api.roocdn.com/images/28401375-7661-4cdd-a7e5-dc3f2c3d586c/image.jpeg?width=560&height=315&auto=webp&format=jpg&fit=crop",
            "shopkeeper_id" => [11],
        ],
        [
            "name" => "Sprite Vetro",
            "price" => "5.00",
            "ingredient" => "Bibita Sprite",
            "image" => "https://rs-menus-api.roocdn.com/images/eed0caee-9113-4b7c-82ca-dca20d4ceec6/image.jpeg?width=560&height=315&auto=webp&format=jpg&fit=crop",
            "shopkeeper_id" => [8, 9, 12],
        ],
    ],
    "orders" => [
        [
            "nr_ord" => 100,
            "price_tot" => "15.00",
            "address" => "Via Roma 10, Torino",
            "status" => "In preparazione",
            "datetime" => "21:00pm",
        ],
        [
            "nr_ord" => 101,
            "price_tot" => "11.00",
            "address" => "Via Roma 10, Torino",
            "status" => "In preparazione",
            "datetime" => "21:00pm",
        ],
        [
            "nr_ord" => 102,
            "price_tot" => "25.00",
            "address" => "Via Roma 10, Torino",
            "status" => "In preparazione",
            "datetime" => "20:30pm",
        ],
        [
            "nr_ord" => 103,
            "price_tot" => "30.00",
            "address" => "Via Roma 10, Torino",
            "status" => "In preparazione",
            "datetime" => "21:00pm",
        ],
        [
            "nr_ord" => 104,
            "price_tot" => "27.00",
            "address" => "Via Roma 10, Torino",
            "status" => "In preparazione",
            "datetime" => "21:30pm",
        ],
        [
            "nr_ord" => 105,
            "price_tot" => "10.00",
            "address" => "Via Roma 10, Torino",
            "status" => "In preparazione",
            "datetime" => "20:00pm",
        ],
        [
            "nr_ord" => 106,
            "price_tot" => "5.00",
            "address" => "Via Roma 10, Torino",
            "status" => "In preparazione",
            "datetime" => "18:30pm",
        ],
        [
            "nr_ord" => 107,
            "price_tot" => "7.50",
            "address" => "Via Roma 10, Torino",
            "status" => "In preparazione",
            "datetime" => "22:00pm",
        ],
        [
            "nr_ord" => 108,
            "price_tot" => "8.00",
            "address" => "Via Roma 10, Torino",
            "status" => "In preparazione",
            "datetime" => "19:30pm",
        ],
        [
            "nr_ord" => 109,
            "price_tot" => "14.00",
            "address" => "Via Roma 10, Torino",
            "status" => "In preparazione",
            "datetime" => "19:00pm",
        ],
        [
            "nr_ord" => 110,
            "price_tot" => "21.00",
            "address" => "Via Roma 10, Torino",
            "status" => "In preparazione",
            "datetime" => "20:00pm",
        ],
        [
            "nr_ord" => 111,
            "price_tot" => "15.00",
            "address" => "Via Roma 10, Torino",
            "status" => "In preparazione",
            "datetime" => "18:00pm",
        ],
    ]
];
?>