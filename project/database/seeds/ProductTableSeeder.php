<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name'              =>'Vlambeer Logo? Mens T-Shirt',
            'description'       =>'Are you a fan of simple, fun, and addictive classic games?
Games like Super Crate Box, LUFTRAUSERS, Ridiculous Fishing, Nuclear Throne and GUN GODZ?
Well the fine folks at Vlambeer are too, and they plan to keep bringing us some of the best titles in indie gaming for years to come!
So if you?re a Vlambeer fan, why not proudly wear their iconic logo on your chest? Tell the world, you?re a fan of indie gaming!',
            'price'             =>'17.99',
            'category'          =>'clothes',
            'color'             =>'Flame Bear Black',
            'size'              =>'Small,Medium,Large,XL,2XL(+1$),3XL(+2$),4XL(+3$),5XL(+4$)',
            'sale'              =>'0',
            'sale_percentage'   =>'0',
            'sale_price'        =>'',
            'stock'             =>'10',
            'img'               =>'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-vlambeerlogo-750.jpg',
        ]);
    //klopt
        DB::table('product')->insert([
            'name'              =>'The Vlambeer Original Soundtrack',
            'description'       =>'Few Indie Game Devs get their paws wet with as many composers and artists as Vlambeer does, and the logical conclusion is this, the Vlambeer Original Soundtrack. Comprised of compositions from a variety of artists across a multitude of games, it?s the perfect collection for any gaming, music, or Vlambeer fan.
                1. GG Main Theme
                2. RF Theme
                3. DZK Calm Seas
                4. DZK Menu Theme
                5. DZK Week #1
                6. DZK Week #2
                7. DZK Week #3
                8. DZK Night Theme
                9. LR Theme
                10. SCB Theme
                11. SCB Tutorial
                12. SCB Construction Yar
                13. SCB Rocket Silo
                14. SCB Moon Temple
                15. SCB Elevator Music
                16. LRS Demo 1
                17. LRS Demo 2
                18. LRS Demo 3
                19. SCB Interlude
                20. YH Day
                21. YH Night
                22. SS:TRE Menu Theme
                23. SS:TRE Desert Theme
                24. SS:TRE Temple Theme
                25. SS:TRE Pyramid Theme
                26. SS:TRE Boss Theme
                27. RF Radical Fishing
                28. GG Venus Supermax
                29. GG Sewers
                30. GG Boss Battle #1
                31. GG Basement
                32. GG Hotel Lobby
                33. GG Boss Battle #2
                34. SCB Early Test
                35. SCB Construction Yard       (Kozilek Remix)
                36. GG Phonecall

                Features:
                ? 36 Tracks
                ? Tracks featuring Phlogiston,
                   KOZILEK, Doseone, Alex
                   Mauer, and Brother Android
                ? Limited Edition Art
                ? Unique Die-Cut Design
                   featuring the Vlambeer
                   Logo',
            'price'             =>'12.99',
            'category'          =>'music',
            'sale'              =>'0',
            'sale_percentage'   =>'0',
            'sale_price'        =>'',
            'stock'             =>'10',
            'img'               =>'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-vlambeerost-2-750.jpg',
        ]);
    //klopt
        DB::table('product')->insert([
            'name'              =>'The Super Crate Bundle',
            'description'       =>'Do you like video games? Do you like crates? Do you like video games about crates? Well I?m about to blow your mind.
Enter: the Super Crate Bundle. 10 DRM Free Games, a cd full of music from a variety of Vlambeer Games, a T-Shirt, six awesome pins, and a key redeemable for a Steam game.
Only 250 of these bad boys are in circulation, so get yours today.

Features:
? Vlambeer Original
Soundtrack
? USB Drive with 10 games,
including the Venus Patrol
Kickstarter Exclusive
GUN GODZ
? Vlambeer Logo T-Shirt
? Six Pins
? GUN GODZ Print
? Steam Key for Serious
Sam: The Random Encounter
? All in a Super Crate Box',
            'price'             =>'49.99',
            'category'          =>'bundle',
            'sale'              =>'0',
            'sale_percentage'   =>'0',
            'sale_price'        =>'',
            'stock'             =>'5',
            'img'               =>'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-supercratebundle-photo-750.jpg',
        ]);
    //klopt
        DB::table('product')->insert([
            'name'              =>'Vlambeer Logo? Ladies T-Shirt',
            'description'       =>'Are you a fan of simple, fun, and addictive classic games?
Games like Super Crate Box, LUFTRAUSERS, Ridiculous Fishing, Nuclear Throne and GUN GODZ?
Well the fine folks at Vlambeer are too, and they plan to keep bringing us some of the best titles in indie gaming for years to come!
So if you?re a Vlambeer fan, why not proudly wear their iconic logo on your chest? Tell the world, you?re a fan of indie gaming!',
            'price'             =>'19.99',
            'category'          =>'clothes',
            'color'             =>'Midnight Coal',
            'size'              =>'Small,Medium,Large,XL,2XL(+1$)',
            'sale'              =>'0',
            'sale_percentage'   =>'0',
            'sale_price'        =>'',
            'stock'             =>'10',
            'img'               =>'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-vlambeerlogo-750.jpg',
        ]);
    //klopt
        DB::table('product')->insert([
            'name'              =>'"Dancing Vlambeer" Mens T-Shirt',
            'description'       =>'Why is he dancing? I don�t know!
He is on fire. I�d imagine it hurts.
Maybe he�s dancing because he�s on a shirt that represents the hard work and dedication of Vlambeer, the developer that loves to make hard indie games.
Games so hard that sometimes you might feel like you�re on fire!',
            'price'             =>'18.00',
            'category'          =>'clothes',
            'color'             =>'Burnt Black',
            'size'              =>'Small,Medium,Large,2XL',
            'sale'              =>'1',
            'sale_percentage'   =>'33',
            'sale_price'        =>'11.99',
            'stock'             =>'10',
            'img'               =>'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-dancingvlambeer-750.jpg',
        ]);
    //klopt
        DB::table('product')->insert([
            'name'              =>'"GUN GODZ" Mens T-Shirt',
            'description'       =>'Hey, man. If you�re gonna travel all the way to Venus to battle hip-hop gangsters with a golden revolver, you may as well do it in style!
Why not try wearing this stylish
double-sided (and limited edition) Venusian apparel, and display your love for Y.V., the demigod of guns!
A limited run shirt design from the Vlambeer game GUN GODZ!',
            'price'             =>'14.99',
            'category'          =>'clothes',
            'color'             =>'Venusian White',
            'size'              =>'2XL',
            'sale'              =>'0',
            'sale_percentage'   =>'0',
            'sale_price'        =>'',
            'stock'             =>'10',
            'img'               =>'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-gungodz-750.jpg',
        ]);
    //klopt
        DB::table('product')->insert([
            'name'              =>'"LUFTRAUSERS" Mens T-Shirt',
            'description'       =>'Stylish. Deadly. Beautiful. Strong.
These are all words that not only describe the masterful airship that is a Luftrauser� but this shirt adorning the ships themselves!
What�s that rookie? You�ve never piloted a Luftrauser before? Pick up LUFTRAUSERS today on PC, Mac, PlayStation 3, PSVita or Linux!',
            'price'             =>'17.99',
            'category'          =>'clothes',
            'color'             =>'Battalion Beige',
            'size'              =>'Small,Medium,Large,XL,2XL(+1$),3XL(+2$),4XL(+3$),5XL(+4$)',
            'sale'              =>'0',
            'sale_percentage'   =>'0',
            'sale_price'        =>'',
            'stock'             =>'10',
            'img'               =>'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-luftrausers-750.jpg',
        ]);
    //klopt
        DB::table('product')->insert([
            'name'              =>'"LUFTRAUSERS" Ladies T-Shirt',
            'description'       =>'Stylish. Deadly. Beautiful. Strong.
                                    These are all words that not only describe the masterful airship that is a Luftrauser� but this shirt adorning the ships themselves!
                                    What�s that rookie? You�ve never piloted a Luftrauser before? Pick up LUFTRAUSERS today on PC, Mac, PlayStation 3, PSVita or Linux!',
            'price'             =>'19.99',
            'category'          =>'clothes',
            'color'             =>'Cloudy Skies Creme',
            'size'              =>'Small,Medium,Large,XL',
            'sale'              =>'0',
            'sale_percentage'   =>'0',
            'sale_price'        =>'',
            'stock'             =>'10',
            'img'               =>'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-luftrausers-ladies-750.jpg',
        ]);
    //klopt
        DB::table('product')->insert([
            'name'              =>'"Nuclear Throne" Mens T-Shirt',
            'description'       =>'A lonely fire surrounded by an unlikely group of travelers. Mutants spending their days fighting for the throne of a post-apocalyptic world.
Each tries to get ahead, using the radioactive waste to mutate new limbs and abilities on the fly.
Making use of powerful weaponry scattered across the land, each hopes to reach the Nuclear Throne and become the one and only Wasteland King.
Support both Vlambeer and these struggling mutants by sporting a Nuclear Throne t-shirt, which has mutated into four different colors!',
            'price'             =>'17.99',
            'category'          =>'clothes',
            'color'             =>'Gold,Black',
            'size'              =>'Small,Medium,Large,XL,2XL(+1$),3XL(+2$),4XL(+3$),5XL(+4$)',
            'sale'              =>'0',
            'sale_percentage'   =>'0',
            'sale_price'        =>'',
            'stock'             =>'10',
            'img'               =>'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-nuclearthrone-yellow-on-black-750.jpg',
        ]);
    //klopt
        DB::table('product')->insert([
            'name'              =>'"Nuclear Throne" Ladies T-Shirt',
            'description'       =>'A lonely fire surrounded by an unlikely group of travelers. Mutants spending their days fighting for the throne of a post-apocalyptic world.
Each tries to get ahead, using the radioactive waste to mutate new limbs and abilities on the fly.
Making use of powerful weaponry scattered across the land, each hopes to reach the Nuclear Throne and become the one and only Wasteland King.
Support both Vlambeer and these struggling mutants by sporting a Nuclear Throne t-shirt, which has mutated into four different colors!',
            'price'             =>'19.99',
            'category'          =>'clothes',
            'color'             =>'Yellow,Black',
            'size'              =>'Small,Medium,Large,XL,2XL',
            'sale'              =>'0',
            'sale_percentage'   =>'0',
            'sale_price'        =>'',
            'stock'             =>'10',
            'img'               =>'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-nuclearthrone-red-on-yellow-750.jpg',
        ]);
    //klopt
        DB::table('product')->insert([
            'name'              =>'"Nuclear Throne" Mens T-Shirt',
            'description'       =>'
A lonely fire surrounded by an unlikely group of travelers. Mutants spending their days fighting for the throne of a post-apocalyptic world.
Each tries to get ahead, using the radioactive waste to mutate new limbs and abilities on the fly.
Making use of powerful weaponry scattered across the land, each hopes to reach the Nuclear Throne and become the one and only Wasteland King.
Support both Vlambeer and these struggling mutants by sporting a Nuclear Throne t-shirt, which has mutated into four different colors!',
            'price'             =>'17.99',
            'category'          =>'clothes',
            'color'             =>'White/Blue,White/Red',
            'size'              =>'Small,Large,XL(+1$),2XL(+1$),3XL(+1$)',
            'sale'              =>'1',
            'sale_percentage'   =>'28',
            'sale_price'        =>'12.99',
            'stock'             =>'10',
            'img'               =>'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-nuclearthrone-red-on-white-750.jpg',
        ]);
    //klopt
        DB::table('product')->insert([
            'name'              =>'"Billys Hat" Fishing Cap',
            'description'       =>'Any angler worth his salt will tell you that fishing in the high seas is a dangerous sport.
From the torrential rains of the Stormy Seas to the icey winds of the Arctic Floes� there�s no shortage of hazards that Billy has faced in his quest for redemption.
How does he survive it all? With the help of proper headwear of course!
And now you too can protect your delicate head from the elements with this stylish replica of Billy�s fishing hat!
Also as an added bonus, every hat comes with a limited edition Ridiculous Fishing print!',
            'price'             =>'19.99',
            'category'          =>'clothes',
            'color'             =>'',
            'size'              =>'',
            'sale'              =>'0',
            'sale_percentage'   =>'0',
            'sale_price'        =>'',
            'stock'             =>'10',
            'img'               =>'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-billycapcombo-750.jpg',
        ]);
    //klopt
        DB::table('product')->insert([
            'name'              =>'"Clone Jelly" Mens T-Shirt',
            'description'       =>'Billy�s been fishing the high seas for a long time, and if there�s one piece of advice he could give to an amateur like yourself� it would be to NEVER catch a Clone Jelly.
And if for some reason you do catch one, DO NOT shoot it.
Seriously, don�t.
Then again, if you want your fishing trip to get truly ridiculous, just keep blasting one! They�ll infinitely multiply and ruin your day!
A new design from the Vlambeer mobile game Ridiculous Fishing!',
            'price'             =>'14.99',
            'category'          =>'clothes',
            'color'             =>'Tropical Ocean',
            'size'              =>'Small,Medium,Large,XL,2XL,3XL',
            'sale'              =>'0',
            'sale_percentage'   =>'0',
            'sale_price'        =>'',
            'stock'             =>'10',
            'img'               =>'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-clonejelly-mens-750.jpg',
        ]);
    //klopt
        DB::table('product')->insert([
            'name'              =>'"Clone Jelly" Ladies T-Shirt',
            'description'       =>'Billy�s been fishing the high seas for a long time, and if there�s one piece of advice he could give to an amateur like yourself� it would be to NEVER catch a Clone Jelly.
And if for some reason you do catch one, DO NOT shoot it.
Seriously, don�t.
Then again, if you want your fishing trip to get truly ridiculous, just keep blasting one! They�ll infinitely multiply and ruin your day!
A new design from the Vlambeer mobile game Ridiculous Fishing!',
            'price'             =>'14.99',
            'category'          =>'clothes',
            'color'             =>'Sky Full of Fish Blue',
            'size'              =>'Small,Medium,Large,XL,2XL',
            'sale'              =>'0',
            'sale_percentage'   =>'0',
            'sale_price'        =>'',
            'stock'             =>'10',
            'img'               =>'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-clonejelly-ladies-750.jpg',
        ]);
    //klopt
        DB::table('product')->insert([
            'name'              =>'Luftrausers Limited Edition',
            'description'       =>'Many years ago, the Luftrausers were an elite group of fighter pilots who couldn�t be brought down.
Now is your chance to not only own a copy of the game, but also a piece of history itself; a carriage bolt taken from a decommissioned Luftrauser. Only 100 of these were salvaged, so get yours quick!

Features:
� Includes a key to unlock
 Luftrausers in your Steam
 Library
� Includes a real life salvaged
 piece of a Luftrauser
� Each certificate is
 individually numbered, only
 100 in existence.',
            'price'             =>'29.99',
            'category'          =>'bundle',
            'color'             =>'',
            'size'              =>'',
            'sale'              =>'0',
            'sale_percentage'   =>'0',
            'sale_price'        =>'',
            'stock'             =>'10',
            'img'               =>'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-luftrausers-le-1-750.jpg',
        ]);
    //klopt
        DB::table('product')->insert([
            'name'              =>'"The Super Crate Network" Print',
            'description'       =>'There are a lot of crates out there, each filled with powerful weapons.
You want to make it to the top of the leaderboards? Well let me tell you something, you�re gonna have to fight your way there.
Pick up this The Social Network inspired Vlambeer print today, and let your friends know that when it comes to Super Crate Box, you mean business!',
            'price'             =>'5.99',
            'category'          =>'miscellaneous',
            'color'             =>'Heavyweight Print',
            'size'              =>'11"x17?',
            'sale'              =>'0',
            'sale_percentage'   =>'0',
            'stock'             =>'10',
            'img'               =>'http://www.levelupstudios.com/lvlup-products/levelupstudios-indieprints-vlambeer-750.jpg',
        ]);

        DB::table('product')->insert([
            'name'              =>'L. エル・ローライト, Eru Rōraito',
            'description'       =>'Character from Death Note. Be careful with your sweets! He eats much of them!',
            'price'             =>'1000',
            'category'          =>'miscellaneous',
            'color'             =>'',
            'size'              =>'',
            'sale'              =>'1',
            'sale_percentage'   =>'10',
            'sale_price'        =>'',
            'stock'             =>'10',
            'img'               =>'https://media.giphy.com/media/ztpMY1t5VYWlO/giphy-facebook_s.jpg',
        ]);


        //
    }
}

//DB::table('product')->insert([
//    'name'              =>'',
//    'description'       =>'',
//    'price'             =>'',
//    'sale'              =>'http://venuspatrol.com/subscribe/#subscriptionform',
//    'sale_percentage'   =>'',
//    'stock'             =>'',
//    'img'               =>'',
//]);
