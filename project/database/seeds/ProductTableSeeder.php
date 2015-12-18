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
            'name'              =>'Vlambeer Logo” Mens & Ladies T-Shirt',
            'description'       =>'Are you a fan of simple, fun, and addictive classic games?
                Games like Super Crate Box, LUFTRAUSERS, Ridiculous Fishing, Nuclear Throne and GUN GODZ?
                Well the fine folks at Vlambeer are too, and they plan to keep bringing us some of the best titles in indie gaming for years to come!
                So if you’re a Vlambeer fan, why not proudly wear their iconic logo on your chest? Tell the world, you’re a fan of indie gaming!',
            'price'             =>'17.99',
            'sale'              =>'http://venuspatrol.com/subscribe/#subscriptionform',
            'sale_percentage'   =>'0',
            'stock'             =>'10',
            'img'               =>'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-vlambeerlogo-750.jpg',
        ]);

        DB::table('product')->insert([
            'name'              =>'The Vlambeer Original Soundtrack',
            'description'       =>'Few Indie Game Devs get their paws wet with as many composers and artists as Vlambeer does, and the logical conclusion is this, the Vlambeer Original Soundtrack. Comprised of compositions from a variety of artists across a multitude of games, it’s the perfect collection for any gaming, music, or Vlambeer fan.
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
                19. SCB Interlude	20. YH Day
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
                • 36 Tracks
                • Tracks featuring Phlogiston,
                   KOZILEK, Doseone, Alex
                   Mauer, and Brother Android
                • Limited Edition Art
                • Unique Die-Cut Design
                   featuring the Vlambeer
                   Logo',
            'price'             =>'12.99',
            'sale'              =>'http://venuspatrol.com/subscribe/#subscriptionform',
            'sale_percentage'   =>'0',
            'stock'             =>'10',
            'img'               =>'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-vlambeerost-2-750.jpg',
        ]);

        DB::table('product')->insert([
            'name'              =>'The Super Crate Bundle',
            'description'       =>'Do you like video games? Do you like crates? Do you like video games about crates? Well I’m about to blow your mind.
                Enter: the Super Crate Bundle. 10 DRM Free Games, a cd full of music from a variety of Vlambeer Games, a T-Shirt, six awesome pins, and a key redeemable for a Steam game.
                Only 250 of these bad boys are in circulation, so get yours today.

                Features:
                • Vlambeer Original
                  Soundtrack
                • USB Drive with 10 games,
                  including the Venus Patrol
                  Kickstarter Exclusive
                  GUN GODZ
                • Vlambeer Logo T-Shirt
                • Six Pins
                • GUN GODZ Print
                • Steam Key for Serious
                  Sam: The Random Encounter
                • All in a Super Crate Box',
            'price'             =>'49.99',
            'sale'              =>'',
            'sale_percentage'   =>'0',
            'stock'             =>'5',
            'img'               =>'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-supercratebundle-photo-750.jpg',
        ]);


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
