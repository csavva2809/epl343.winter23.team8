<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlowerShop - Product Details</title>
    <link rel="stylesheet" href="product.css">
</head>

<body>

    <section id="header">
        <a href="http://127.0.0.1:5500/website.php">
            <img src="images/transparent_logoanthemio2.png" class="logo" height="82" width="240">
            <div>
                <nav id="navbar">
                    <li><a class="active" href="website.php">Home</a></li>
                    <li><a href="about.php">About</a></li>

                    <li><a href="cart.php"><img
                                src="images/shopping-cart-icon-shopping-basket-on-transparent-background-free-png.webp"
                                height="20" width="35" class="cart">
                                <span id="cartCount">0</span> <!-- This will display the cart count -->

                            </a></li>


                    <li><a class="buttonlogin" href="login.php"><button class="btnLogin">Login</button></a></li>
                </nav>

            </div>
        </a>


    </section>

    <section id="product-detail">
        <div class="product-image">
            <img id="productImage" src="" alt="">
        </div>
        <div class="product-info">
            <h1 id="productName"></h1>
            <p id="productDescription" class="description"></p>
            <p id="productPrice" class="price"></p>
            <button class="btn-add-to-cart" onclick="addToCart()">Add to Cart</button>

        </div>
    </section>


    <script>
        // The product details object (could be retrieved from a server or local storage)
        const productDetails = {
            'little-something': {
                name: 'A Little Something',
                image: 'images/newborn/A little something.jpg',
                description: 'Show your affection with this mouth-watering mix of classical flowers delivered in a delightful gift bag or box.',
                price: '49.50'
            },
            'cerise-bouquet': {
                name: 'Colour Of Cerise Bouquet',
                image: 'images/newborn/Colour Of Cerise Bouquet.jpg',
                description: 'A vibrant, fresh bouquet of pink & cerise flowers expertly arranged and hand delivered on the day of your choice',
                price: '40.00'
            },
            'cut-flowers': {
                name: 'Cut Flowers',
                image: 'images/newborn/cut flowers.jpg',
                description: 'Ready for your vase, these are quality flowers wrapped in craft paper or cellophane.',
                price: '40.00'

            },
            'loveinpink': {
                name: 'Love In Pink',
                image: 'images/newborn/love in pink.jpg',
                description: 'An amazing arrangement perfect for celebrating a new arrival.',
                price: '45.00'

            },
            'welcome': {
                name: 'Welcome',
                image: 'images/newborn/welcome.jpg',
                description: 'Say Welcome in style with this fabulous hand tied. Why not take the opportunity to be spontaneous and surprise them today with a stunning flower delivery by their local florist.',
                price: '44.50'

            },
            'roses': {
                name: 'Roses',
                image: 'images/newborn/roses.jpg',
                description: 'Long stem quality roses and elegant foliage, maybe supplied in different colours to suit the occasion.',
                price: '45.00'

            },
            'sugar-rush': {
                name: 'Sugar Rush',
                image: 'images/newborn/Sugar rush.jpg',
                description: 'This gorgeous hand-tied bouquet of sweet pastel shades is sure to bring joy and delight. Crammed with beautiful flowers guaranteed to put a boost into any occasion.',
                price: '59.50'

            },

            'dreaming': {
                name: 'Dreaming',
                image: 'images/newborn/Dreaming.jpg',
                description: 'A beautiful hat box filled to the brim with a fabulous combination of selected pastel shaded flowers and foliage.',
                price: '49.50'

            },
            //formum
            'Bliss': {
                name: 'Bliss',
                image: 'images/formum/bliss.jpg',
                description: 'Show your love in the best possible way with this gorgeous hand-tied bouquet featuring a fabulous selection of flowers.',
                price: '59.50'
            },
            'Clouds-above': {
                name: 'Clouds-above',
                image: 'images/formum/clouds above.jpg',
                description: 'This exquisite collection of high quality soft shaded blooms make the perfect gift for any occasion. (please note Peonies only included when in season)',
                price: '85.00'
            },
            'Dozen': {
                name: 'Dozen',
                image: 'images/formum/dozen.jpg',
                description: 'A sensational array of roses hand-tied and beautifully presented. This star of the florist just demands adoration and is sure to wow the recipient.',
                price: '75.00'

            },
            'Jade': {
                name: 'Jade',
                image: 'images/formum/jade.jpg',
                description: 'A celebration Hand Tied of pink shades. Perfect for any occasion.',
                price: '48.50'

            },
            'Secret-Wispers': {
                name: 'Secret-Wispers',
                image: 'images/formum/secret-wispers.jpg',
                description: 'This luxury arrangement of flowers in a stylish Hat Box will be remembered for a long time!',
                price: '59.50'

            },
            'Strawberries': {
                name: 'Strawberries',
                image: 'images/formum/strawberries.jpg',
                description: 'A beautiful collection of roses and lilies hand-tied and delivered in a gift bag or box.',
                price: '64.50'

            },
            'Vintage': {
                name: 'Vintage',
                image: 'images/formum/vintage.jpg',
                description: 'Soft shades make this elegant glass Vase of luxury flowers the perfect gift.',
                price: '50.00'

            },

            'Candy': {
                name: 'Candy',
                image: 'images/formum/candy.jpg',
                description: 'This little pot of sweetness is a joy to behold. Filled with smiling flowers and a complement of variegated foliage.',
                price: '49.50'

            },

            //valentines

            'Sweetheart': {
                name: 'Sweetheart',
                image: 'images/valentines/sweetheart.jpg',
                description: '12 luxury red roses and fabulous foliage are all you need to make a grand romantic gesture to your sweetheart.',
                price: '80.00'
            },
            'Smooch': {
                name: 'Smooch',
                image: 'images/valentines/smooch.jpg',
                description: 'Roses and carnations make the perfect couple when combined in this timeless and romantic gift that’s sure to impress.',
                price: '60.00'
            },

            'Single_red_rose': {
                name: 'Single Red Rose',
                image: 'images/valentines/single_red_rose.jpg',
                description: 'Single Red Rose in oasis and cellophane.',
                price: '20.00'

            },
            'Rosesbox': {
                name: 'Roses In Box',
                image: 'images/valentines/roses_in_box.jpg',
                description: 'Elevate Your Day with a Box of Radiant Roses',
                price: '40.00'

            },
            'Perfect_match': {
                name: 'Perfect Match',
                image: 'images/valentines/perfect_match.jpg',
                description: 'You guessed it. Not 5, but 6 fabulous red roses beautifully presented and delivered by a local florist.',
                price: '50.00'

            },
            'Little_something': {
                name: 'A Little Treasure',
                image: 'images/valentines/little_something.jpg',
                description: 'Leave a lasting impression with this single red rose, presented in a glass vase. Handmade & hand-delivered to the one you treasure.',
                price: '35.00'

            },
            'Two_Forever_Roses': {
                name: 'Two Forever Roses',
                image: 'images/valentines/Two forever roses.jpg',
                description: 'Give someone special 2 real roses that last forever!!!',
                price: '60.00'

            },

            'Cheers': {
                name: 'Cheers',
                image: 'images/valentines/cheers to us.jpg',
                description: 'A Symphony of Roses, Wine, and Chocolate, Crafted for Your Delight!',
                price: '75.00'

            },

            'Luxury': {
                name: 'Luxury',
                image: 'images/valentines/luxury.jpg',
                description: 'Elevate Your Special Moments with our Luxurious Rose Box and Fine Wine Selection.',
                price: '80.00'

            },

            'Sweetest_surprise': {
                name: 'Sweetest Surprise',
                image: 'images/valentines/sweetest_surprise.jpg',
                description: ' A Perfect Gift of Elegantly Arranged Roses and Luxurious Chocolates.',
                price: '65.00'

            },

            'Bear': {
                name: 'Bear',
                image: 'images/valentines/bear.jpg',
                description: 'Our Rose Bear Collection is available in different colors (Black,White,Black/Red,White/Red,Black/White) and looks great in your loved ones home or office.',
                price: '45.00'

            },

            'Forever_Roses': {
                name: 'Forever Roses',
                image: 'images/valentines/forever roses.jpg',
                description: 'Give someone special a real rose that last forever!!!',
                price: '45.00'

            },

            //christmas

            'Carol': {
                name: 'A Christmas Carol',
                image: 'images/christmas/A Christmas carol.jpg',
                description: 'A selection of customer favourite flowers and foliage in a design that’s simply the perfect Christmas present.',
                price: '49.50'

            },

            'Basket': {
                name: 'Basket Of Joy',
                image: 'images/christmas/basket_of_joy.jpg',
                description: 'This collection of beautiful flowers and seasonal foliage are expertly arranged in a beautiful basket for the perfect Christmas gift.',
                price: '54.50'

            },

            'Candle': {
                name: 'Candle Arrangement',
                image: 'images/christmas/candle_arrangement.jpg',
                description: 'A Christmas candle arrangement, perfect for the festive table, handmade using favourite Christmas flowers and foliage.',
                price: '66.00'

            },

            'christmas_charm': {
                name: 'Christmas Charm',
                image: 'images/christmas/Christmas Charm.jpg',
                description: 'This simply wrapped collection of flowers is the perfect way to send your message of good wishes.',
                price: '49.50'

            },

            'holiday_splendour': {
                name: 'Holiday Splendour',
                image: 'images/christmas/Holiday_splendour.jpg',
                description: 'A classic Christmas bouquet delivered in a festive gift bag, Holiday Splendour is certain to be a hit. Put together by hand and delivered by a florist local to you. Delivery right up to Christmas Eve 2023.',
                price: '66.00'

            },

            'jingle_bells': {
                name: 'Jingle Bells',
                image: 'images/christmas/Jingle_Bells.jpg',
                description: 'A selection of customer favourite flowers and foliage in a design that’s simply the perfect Christmas present.',
                price: '49.50'

            },

            'joy': {
                name: 'Joy',
                image: 'images/christmas/Joy.jpg',
                description: 'This dreamy white and green hand-tied Christmas design evokes the spirit of the season in flowers. The perfect way to share joy this festive season.',
                price: '66.00'

            },

            'letter_to_santa': {
                name: 'Letter to Santa',
                image: 'images/christmas/Letter to santa.jpg',
                description: 'Flowers including Chocolates. This is the gift everybody will want this Christmas! The freshest flowers and finest foliage, arranged in a special envelope, delivered with a tasty box of chocolates.',
                price: '66.00'

            },
            'red_forest': {
                name: 'Red Forest',
                image: 'images/christmas/Red_forest.jpg',
                description: 'A joyful and exclusive collection of flowers and foliages make this holiday gift the ultimate in surprises for any friend or family.',
                price: '66.00'

            },
            'seasons_greetings': {
                name: 'Seasons Greetings',
                image: 'images/christmas/Seasons greetings.jpg',
                description: 'A unique Christmas gift bag, professionally arranged and delivered by a local florist. This beautiful baubled gift will include a festive range of florist fresh flowers. Including Santini, Holly, Eucalyptus Cinnerea and Ruskus. Flowers will be hand delivered by the local florist.',
                price: '49.50'

            },
            'star_of_christmas': {
                name: 'Star of Christmas',
                image: 'images/christmas/star of christmas.jpg',
                description: 'Looking for a magnificent gift to send to a loved one? The Star of Christmas bouquet really is one of the most luxurious flower gifts you could send this festive season.',
                price: '49.50'

            },
            'starlight': {
                name: 'Starlight',
                image: 'images/christmas/Starlight.jpg',
                description: 'Show your love this Christmas with this wonderful collection of wintry flowers arranged in a co ordinating pot.',
                price: '49.50'

            },
            //anniversary
            'bliss': {
                name: 'Bliss',
                image: 'images/anniversary/bliss.jpg',
                description: 'Show your love in the best possible way with this gorgeous hand-tied bouquet featuring a fabulous selection of flowers.',
                price: '59.50'

            },
            'match': {
                name: 'Perfect Match',
                image: 'images/anniversary/match.jpg',
                description: 'You guessed it. Not 5, but 6 fabulous red roses beautifully presented and delivered by a local florist.',
                price: '50.00'

            },
            'Evelyn': {
                name: 'Evelyn',
                image: 'images/anniversary/evelyn.jpg',
                description: 'A fabulous collection of white and cream flowers make this the perfect gift.',
                price: '55.00'

            },
            'Rosesbox': {
                name: 'Roses In Box',
                image: 'images/anniversary/roses_in_box.jpg',
                description: 'Elevate Your Day with a Box of Radiant Roses',
                price: '40.00'

            },
            'forever': {
                name: 'Forever Yours',
                image: 'images/anniversary/forever.jpg',
                description: 'Show your affection with this fabulous hand-tied featuring white oriental lilies and foliage.',
                price: '55.00'

            },
            'dreamland': {
                name: 'Dreamland',
                image: 'images/anniversary/dreamland.jpg',
                description: 'A beautiful hat box filled to the brim with a fabulous combination of selected pastel shaded flowers and foliage.',
                price: '49.50'

            },
            'Two_Forever_Roses': {
                name: 'Two Forever Roses',
                image: 'images/anniversary/Two forever roses.jpg',
                description: 'Give someone special 2 real roses that last forever!!!',
                price: '60.00'

            },
            'smooch': {
                name: 'smooch',
                image: 'images/anniversary/smooch.jpg',
                description: 'Roses and carnations make the perfect couple when combined in this timeless and romantic gift that’s sure to impress.',
                price: '60.00'

            },

            'Ashleigh': {
                name: 'Ashleigh',
                image: 'images/anniversary/Ashleigh.jpg',
                description: 'This pretty combination make this a perfect choice.',
                price: '48.50'

            },
            'SparklingChampagne': {
                name: 'Sparkling Champagne',
                image: 'images/anniversary/Sparkling_Champagne.jpg',
                description: 'Send luxury at its finest with this breathtaking composition made with the most desirable blooms. If youre looking for that extra special gift with that added WOW factor - You’ve found it!',
                price: '120.00'

            },
            'above': {
                name: 'Clouds Above',
                image: 'images/anniversary/above.jpg',
                description: 'This exquisite collection of high quality soft shaded blooms make the perfect gift for any occasion. (please note Peonies only included when in season)',
                price: '85.00'

            },
            'roses': {
                name: 'Roses',
                image: 'images/anniversary/roses.jpg',
                description: 'Long stem quality roses and elegant foliage, maybe supplied in different colours to suit the occasion.',
                price: '45.00'

            },
            //graduation
            'drops': {
                name: 'Pear Drops',
                image: 'images/graduation/Drops.jpg',
                description: 'A splash of sweet seasonal blooms arranged with style and beauty. This stunning hand tied arrangement will delight anyone lucky enough to receive it.',
                price: '54.50'
            },
            'scent': {
                name: 'Aquatic Scent',
                image: 'images/graduation/scent.jpg',
                description: 'A breathtaking spray of seasonal flowers interspersed with foliage. Natural, beautiful and just perfect.',
                price: '59.50'
            },
            'evelyn': {
                name: 'Evelyn',
                image: 'images/graduation/evelyn.jpg',
                description: 'A fabulous collection of white and cream flowers make this the perfect gift.',
                price: '55.00'

            },

            'secret': {
                name: 'Secret Wispers',
                image: 'images/graduation/secret.jpg',
                description: 'This luxury arrangement of flowers in a stylish Hat Box will be remembered for a long time!',
                price: '59.50'

            },
            'ruffles': {
                name: 'Roses & Ruffles',
                image: 'images/graduation/ruffles.jpg',
                description: 'Pink Roses and Carnations make this gift timeless and classic',
                price: '59.50'

            },
            'jade': {
                name: 'Jade',
                image: 'images/graduation/jade.jpg',
                description: 'A celebration Hand Tied of pink shades. Perfect for any occasion.',
                price: '48.50'

            },
            'bliss': {
                name: 'Nature Bliss',
                image: 'images/graduation/bliss.jpg',
                description: 'Show your love in the best possible way with this gorgeous hand-tied bouquet featuring a fabulous selection of flowers.',
                price: '59.50'

            },
            'smooch': {
                name: 'Smooch',
                image: 'images/graduation/smooch.jpg',
                description: 'Roses and carnations make the perfect couple when combined in this timeless and romantic gift that’s sure to impress.',
                price: '60.00'

            },
            'Ashleigh': {
                name: 'Ashleigh',
                image: 'images/graduation/Ashleigh.jpg',
                description: 'This pretty combination make this a perfect choice.',
                price: '48.50'

            },
            'cream': {
                name: 'Strawbery & Cream',
                image: 'images/graduation/cream.jpg',
                description: 'A beautiful collection of roses and lilies hand-tied and delivered in a gift bag or box.',
                price: '64.50'

            },
            'above': {
                name: 'Clouds Above',
                image: 'images/graduation/above.jpg',
                description: 'This exquisite collection of high quality soft shaded blooms make the perfect gift for any occasion. (please note Peonies only included when in season)',
                price: '85.00'

            },
            'dozen': {
                name: 'Dreamy Dozen',
                image: 'images/graduation/dozen.jpg',
                description: 'A sensational array of roses hand-tied and beautifully presented. This star of the florist just demands adoration and is sure to wow the recipient.',
                price: '75.00'

            },
            //thankyou

            'bon': {
                name: 'Bon Bon',
                image: 'images/thankyou/bonbon.jpg',
                description: 'Shower them with love with this cutesy collection of seasonal flowers in pretty pastels. Beautifully arranged and stylishly presented in a traditional basket.',
                price: '52.50'

            },

            'loving': {
                name: 'Loving Splendour In Pink',
                image: 'images/thankyou/loving.jpg',
                description: 'Expertly created and hand delivered on the day of your choice by a local florist expert',
                price: '45.00'

            },

            'orchid': {
                name: 'An Elegant Orchid',
                image: 'images/thankyou/orchid.jpg',
                description: 'A stylishly pretty gift - hand delivered to the address of your choice.',
                price: '40.00'

            },

            'candy': {
                name: 'Cotton Candy',
                image: 'images/thankyou/candy.jpg',
                description: 'This little pot of sweetness is a joy to behold. Filled with smiling flowers and a complement of variegated foliage.',
                price: '49.50'

            },
            'ruffles': {
                name: 'Roses & Ruffles',
                image: 'images/thankyou/ruffles.jpg',
                description: 'Pink Roses and Carnations make this gift timeless and classic',
                price: '59.50'

            },
            'colour': {
                name: 'Splash Of Colour',
                image: 'images/thankyou/colour.jpg',
                description: 'A vibrant gerbera posy hand-tied featuring a mix of colours carefully selected by the local florist. Hand-delivered in a gift bag or box.',
                price: '44.50'

            },
            'bliss': {
                name: 'Nature Bliss',
                image: 'images/thankyou/bliss.jpg',
                description: 'Show your love in the best possible way with this gorgeous hand-tied bouquet featuring a fabulous selection of flowers.',
                price: '59.50'

            },
            'twist': {
                name: 'Sherbet Twist',
                image: 'images/thankyou/twist.jpg',
                description: 'This delightful collection of seasonal blooms is a beautiful way to send your affections. A pretty arrangement in a classic basket simply fizzing with joy and character.',
                price: '52.50'

            },
            'Ashleigh': {
                name: 'Ashleigh',
                image: 'images/thankyou/Ashleigh.jpg',
                description: 'This pretty combination make this a perfect choice.',
                price: '48.50'

            },

            'crush': {
                name: 'Rasberry Crush',
                image: 'images/thankyou/crush.jpg',
                description: 'A beautiful collection of flowers simply wrapped and ready to arrange.',
                price: '44.50'

            },

            'cerise': {
                name: ' Colour Of Cerise Bouquet',
                image: 'images/thankyou/cerise.jpg',
                description: 'A vibrant, fresh bouquet of pink & cerise flowers expertly arranged and hand delivered on the day of your choice.',
                price: '40.00'

            },
            'lemon': {
                name: ' Lemon & Lime',
                image: 'images/thankyou/lemon.jpg',
                description: 'A beautiful collection of flowers simply wrapped and ready to arrange.',
                price: '46.50'

            },

            //plants
            'mov': {
                name: 'Violet Orchids',
                image: 'images/plants/mov.jpg',
                description: 'A Splash of Purple Passion to Enrich Your Surroundings. Discover Their Sublime Beauty Today!',
                price: '25.00'

            },

            'aspri': {
                name: 'Moonlind Orchid',
                image: 'images/plants/aspri.jpg',
                description: 'Discover the Enchanting World of Moonlind Orchids - Where Elegance Blooms under the Moonlight',
                price: '30.00'

            },
            'portokalia': {
                name: 'Moonlind Harvest Sunset Roses',
                image: 'images/plants/portokalia.jpg',
                description: 'Experience the Delicate Charm of Miniature Orange Roses - Perfect for Any Occasion!',
                price: '20.00'

            },
            'woodland': {
                name: 'Woodland',
                image: 'images/plants/woodland.jpg',
                description: 'Bring a touch of nature into your space with our charming small wooden planters.Perfect for adding a pop of greenery to any corner of your home or office.',
                price: '15.00'

            },

            'kaktos': {
                name: 'Cactus',
                image: 'images/plants/kaktos.jpg',
                description: 'Embrace the Beauty of Desert Elegance with Our Stunning Cactus Collection ',
                price: '10.00'

            },

            'pampakas': {
                name: 'Pampas',
                image: 'images/plants/pampakas.jpg',
                description: 'Elevate Your Space with the Elegance of Pampas Grass.',
                price: '20.00'

            },
            'iakinthos': {
                name: 'Hyacinth',
                image: 'images/plants/iakinthos.jpg',
                description: 'Indulge in the Fragrant Splendor of Hyacinths – Natures Gift to Brighten Your Day ',
                price: '25.00'

            },
            'ponsettia': {
                name: 'Festive Ponsettia',
                image: 'images/plants/ponsettia.jpg',
                description: 'Brighten Your Home with Festive Poinsettias from Our Flower Shop!',
                price: '25.00'

            },


            //funerals
            'loose': {
                name: 'Loose Wreath',
                image: 'images/funerals/loose.jpg',
                description: 'Mixed flowers suitable for a lady or a gentleman. Ring wreath for a funeral in creams.',
                price: '70.00'

            },
            'colourloose': {
                name: 'Mixed Loose Wreath',
                image: 'images/funerals/colourloose.jpg',
                description: 'Mixed flowers suitable for a lady or a gentleman in an open style. Colour combination may be requested. ',
                price: '70.00'

            },
            'tied': {
                name: 'White Tied Sheaf',
                image: 'images/funerals/tied.jpg',
                description: 'White flowers and foliage. An ideal presentation bouquet to be sent to a funeral. In whites this bouquet is suitable for a man or a lady.',
                price: '50.00'
            },

            //flower_buquets
            'bliss': {
                name: 'Bliss',
                image: 'images/flowerbuquet/bliss.jpg',
                description: 'Show your love in the best possible way with this gorgeous hand-tied bouquet featuring a fabulous selection of flowers.',
                price: '59.50'

            },
            'drops': {
                name: 'Pear Drops',
                image: 'images/flowerbuquet/drops.jpg',
                description: 'A splash of sweet seasonal blooms arranged with style and beauty. This stunning hand tied arrangement will delight anyone lucky enough to receive it.',
                price: '54.50'

            },
            'felicity': {
                name: 'Felicity',
                image: 'images/flowerbuquet/felicity.jpg',
                description: 'Let them know you’re thinking of them with a beautiful bouquet. Wrapped up in style and made to WOW!',
                price: '40.00'

            },
            'vintage': {
                name: 'Vintage Buquet',
                image: 'images/flowerbuquet/vintage.jpg',
                description: 'Soft shades make this elegant glass Vase of luxury flowers the perfect gift.',
                price: '50.00'

            },
            'jade': {
                name: 'Jade',
                image: 'images/flowerbuquet/jade.jpg',
                description: 'A celebration Hand Tied of pink shades. Perfect for any occasion.',
                price: '48.50'

            },

            'roses': {
                name: 'Roses',
                image: 'images/flowerbuquet/roses.jpg',
                description: 'Long stem quality roses and elegant foliage, maybe supplied in different colours to suit the occasion.',
                price: '45.00'

            },
            'forever': {
                name: 'Forever Yours',
                image: 'images/flowerbuquet/forever.jpg',
                description: 'Show your affection with this fabulous hand-tied featuring white oriental lilies and foliage.',
                price: '55.00'

            },
            'smooch': {
                name: 'Smooch',
                image: 'images/flowerbuquet/smooch.jpg',
                description: 'Roses and carnations make the perfect couple when combined in this timeless and romantic gift that’s sure to impress.',
                price: '60.00'

            },
            'Ashleigh': {
                name: 'Ashleigh',
                image: 'images/flowerbuquet/Ashleigh.jpg',
                description: 'This pretty combination make this a perfect choice.',
                price: '48.50'

            },
            'warm': {
                name: 'Warm Wishes',
                image: 'images/flowerbuquet/warm.jpg',
                description: 'Send this vibrant hand-tied featuring a mix of favourite flowers delivered in a delightful gift bag or box is the perfect way to send your thoughts..',
                price: '59.50'

            },
            'above': {
                name: 'Clouds Above',
                image: 'images/flowerbuquet/above.jpg',
                description: 'This exquisite collection of high quality soft shaded blooms make the perfect gift for any occasion. (please note Peonies only included when in season)',
                price: '85.00'

            },
            'dozen': {
                name: 'Dreamy Dozen',
                image: 'images/flowerbuquet/dozen.jpg',
                description: 'A sensational array of roses hand-tied and beautifully presented. This star of the florist just demands adoration and is sure to wow the recipient.',
                price: '75.00'

            },


            //birthdays
            'jelly': {
                name: 'Jelly Bean',
                image: 'images/birthday/jelly.jpg',
                description: 'This amazing profusion of colour is bound to brighten the dullest of days. A vibrant and joyful floral gift with character in abundance.',
                price: '54.50'

            },
            'little': {
                name: 'A Little Something',
                image: 'images/birthday/little.jpg',
                description: 'Show your affection with this mouth-watering mix of classical flowers delivered in a delightful gift bag or box.',
                price: '49.50'

            },
            'colour': {
                name: 'Splash Of Colour',
                image: 'images/birthday/colour.jpg',
                description: 'A vibrant gerbera posy hand-tied featuring a mix of colours carefully selected by the local florist. Hand-delivered in a gift bag or box.',
                price: '44.50'

            },
            'loving': {
                name: 'Loving Splendour In Pink',
                image: 'images/birthday/loving.jpg',
                description: 'Expertly created and hand delivered on the day of your choice by a local florist expert',
                price: '45.00'

            },
            'perfect': {
                name: 'Pretty Perfect',
                image: 'images/birthday/perfect.jpg',
                description: 'This warm, subtle coloured collection of beautiful flowers will make anyone’s day.',
                price: '59.50'

            },
            'pink': {
                name: 'Perfect In Pink',
                image: 'images/birthday/pink.jpg',
                description: 'Could you get a prettier collection of flowers?.',
                price: '54.50'

            },
            'plant': {
                name: 'Plant',
                image: 'images/birthday/plant.jpg',
                description: 'Plants - subject to availability. Please check with florist.',
                price: '40.00'

            },
            'strawberry': {
                name: 'Strawberry Twist',
                image: 'images/birthday/strawberry.jpg',
                description: 'This delightful collection of seasonal blooms is a beautiful way to send your affections. A pretty arrangement in a classic basket simply fizzing with joy and character..',
                price: '60.00'

            },
            'tutti': {
                name: 'Tutti Fruit',
                image: 'images/birthday/tutti.jpg',
                description: 'This charming hand-tied floral arrangement looks good enough to eat. A delicious array of blooms with heads held high supported with glorious greenery.',
                price: '59.50'

            },
            'twist': {
                name: 'Sherbet Twist',
                image: 'images/birthday/twist.jpg',
                description: 'This delightful collection of seasonal blooms is a beautiful way to send your affections. A pretty arrangement in a classic basket simply fizzing with joy and character.',
                price: '52.50'

            },

            'above': {
                name: 'Clouds Above',
                image: 'images/birthday/above.jpg',
                description: 'This exquisite collection of high quality soft shaded blooms make the perfect gift for any occasion. (please note Peonies only included when in season).',
                price: '85.00'

            },
            'dozen': {
                name: 'Dreamy Dozen',
                image: 'images/birthday/dozen.jpg',
                description: 'A sensational array of roses hand-tied and beautifully presented. This star of the florist just demands adoration and is sure to wow the recipient.',
                price: '75.00'

            },

            //wedding
            'ava': {
                name: 'Ava',
                image: 'images/wedding/ava.jpg',
                description: 'Stunning hand tied in whites and creams suitable for any occasion.',
                price: '54.50'

            },
            'bliss': {
                name: 'Bliss',
                image: 'images/wedding/bliss.jpg',
                description: 'Show your love in the best possible way with this gorgeous hand-tied bouquet featuring a fabulous selection of flowers.',
                price: '59.50'

            },
            'drops': {
                name: 'Pear Drops',
                image: 'images/wedding/drops.jpg',
                description: 'A splash of sweet seasonal blooms arranged with style and beauty. This stunning hand tied arrangement will delight anyone lucky enough to receive it.',
                price: '54.50'

            },
            'evelyn': {
                name: 'Evelyn',
                image: 'images/wedding/evelyn.jpg',
                description: 'A fabulous collection of white and cream flowers make this the perfect gift.',
                price: '55.00'

            },
            'forever': {
                name: 'Forever Yours',
                image: 'images/wedding/forever.jpg',
                description: 'Show your affection with this fabulous hand-tied featuring white oriental lilies and foliage.',
                price: '55.00'

            },
            'jade': {
                name: 'Jade',
                image: 'images/wedding/jade.jpg',
                description: 'A celebration Hand Tied of pink shades. Perfect for any occasion.',
                price: '48.50'

            },
            'spark': {
                name: 'Sparkling Champagne',
                image: 'images/wedding/spark.jpg',
                description: 'Send luxury at its finest with this breathtaking composition made with the most desirable blooms. If youre looking for that extra special gift with that added WOW factor - You’ve found it!',
                price: '120.00'

            },
            'white': {
                name: 'White Love',
                image: 'images/wedding/white.jpg',
                description: 'A customer favourite at Christmas. This bouquet of seasonal bright white flowers is perfect to bring some festive cheer at Christmas. The florist will include the best white blooms and seasonal foliage.',
                price: '50.00'

            },
        };

        // Function to extract query parameters from the URL
        function getQueryParams() {
            var params = {};
            var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
                params[key] = value;
            });
            return params;
        }

        // Function to update the product details on the page
        function updateProductDetails() {
            var params = getQueryParams();
            var productId = params['product']; // Corrected how to access the parameter
            if (productId && productDetails[productId]) {
                var product = productDetails[productId];
                document.getElementById('productImage').src = product.image;
                document.getElementById('productName').textContent = product.name;
                document.getElementById('productDescription').textContent = product.description;
                document.getElementById('productPrice').textContent = `$${product.price}`;
            } else {
                // Handle case where product is not found or no product is specified
                document.getElementById('productImage').src = 'path/to/default/image.jpg';
                document.getElementById('productName').textContent = 'Product Not Found';
                document.getElementById('productDescription').textContent = '';
                document.getElementById('productPrice').textContent = '';
            }
        }

        // Call the update function on page load
        document.addEventListener('DOMContentLoaded', updateProductDetails);

    </script>

    <script>
        function updateCartCount() {
            let cart = localStorage.getItem('cart');
            cart = cart ? JSON.parse(cart) : [];
            let count = cart.length;
            document.getElementById('cartCount').textContent = count;
        }

        function addToCart() {
            // Check if a cart array already exists in localStorage
            let cart = localStorage.getItem('cart');
            if (cart) {
                cart = JSON.parse(cart);
            } else {
                cart = [];
            }

            // Assuming you have product details in your productDetails object
            const params = new URLSearchParams(window.location.search);
            const productId = params.get('product');
            const product = productDetails[productId];

            if (product) {
                // Add the product to the cart array
                cart.push(product);
                // Save the updated cart back to localStorage
                localStorage.setItem('cart', JSON.stringify(cart));

                // Update cart count in the UI
                updateCartCount();
            } else {
                alert('Error: Product not found.');
            }
        }
        // Load product details on page load
        document.addEventListener('DOMContentLoaded', function () {
            updateProductDetails();
            updateCartCount(); // Initialize cart count on page load
        });

        // Function to update the product details on the page
        function updateProductDetails() {
            var params = getQueryParams();
            if (params.product && productDetails[params.product]) {
                var product = productDetails[params.product];
                document.getElementById('productImage').src = product.image;
                document.getElementById('productName').textContent = product.name;
                document.getElementById('productDescription').textContent = product.description;
                document.getElementById('productPrice').textContent = `$${product.price}`;
            } else {
                // Handle case where product is not found or no product is specified
                document.getElementById('productImage').src = 'path/to/default/image.jpg';
                document.getElementById('productName').textContent = 'Product Not Found';
                document.getElementById('productDescription').textContent = '';
                document.getElementById('productPrice').textContent = '';
            }
        }

        // Function to extract query parameters from the URL
        function getQueryParams() {
            var params = {};
            var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
                params[key] = value;
            });
            return params;
        }

    </script>


</body>

</html>