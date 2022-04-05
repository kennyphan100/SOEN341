<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 100);
            $table->text('description');
            $table->string('category');
            $table->decimal('price', 8, 2);
            $table->string('image');
        });

        DB::table('products')->insert(
            [
                ['name' => 'Game Of Thrones', 'category' => 'Books', 'price' => 9.99, 'image' => 'a_game_of_thrones.jpg', 'description' => 'A Game of Thrones is the first novel in A Song of Ice and Fire, a series of fantasy novels by the American author George R. R. Martin. It was first published on August 1, 1996. The novel won the 1997 Locus Award and was nominated for both the 1997 Nebula Award and the 1997 World Fantasy Award.'],
                ['name' => 'The Alchemist', 'category' => 'Books', 'price' => 12.99, 'image' => 'the_alchemist.jpg', 'description' => 'The Alchemist is a novel by Brazilian author Paulo Coelho which was first published in 1988. Originally written in Portuguese, it became a widely translated international bestseller.'],
                ['name' => 'The Da Vinci Code', 'category' => 'Books', 'price' => 10.99, 'image' => 'the_da_vinci_code.jpg', 'description' => 'The Da Vinci Code is a 2003 mystery thriller novel by Dan Brown. It is Brown\'s second novel to include the character Robert Langdon: the first was his 2000 novel Angels & Demons.'],
                ['name' => 'The Little Prince', 'category' => 'Books', 'price' => 11.99, 'image' => 'the_little_prince.jpg', 'description' => 'After being stranded in a desert after a crash, a pilot comes in contact with a captivating little prince who recounts his journey from planet to planet and his search for what is most important in life.  For over sixty-five years Antoine de Saint-Exupery\'s classic, The Little Prince, has captured readers\' hearts. The whimsical story with a fairy tale feel has sold over 3 million copies in all formats. This exciting pop-up edition includes the complete original text accompanied by Saint-Exupery\'s beautiful illustrations brought to life through paper engineering. Perfect for longtime fans and those meeting the little prince for the first time!'],
                ['name' => 'Think And Grow Rich', 'category' => 'Books', 'price' => 14.99, 'image' => 'think_and_grow_rich_book.jpg', 'description' => 'Here are money-making secets that can change your life. Inspired by Andrew Carnegie\'s magic formula for success, this book will teach you the secrets that will bring you a fortune. It will show you not only what to do but how to do it. Once you learn and apply the simple, basic techniques revealed here, you will have mastered the secret of true and lasting success. And you may have whatever you want in life.'],
                ['name' => 'Twilight', 'category' => 'Books', 'price' => 8.99, 'image' => 'twilight.jpg', 'description' => 'Fall in love with the addictive, suspenseful love story between a teenage girl and a vampire with the book that sparked a "literary phenomenon" and redefined romance for a generation (New York Times).'],
                ['name' => 'Airpods', 'category' => 'Electronics', 'price' => 259.99, 'image' => 'airpods.jpg', 'description' => 'AirPods are wireless Bluetooth earbuds designed by Apple Inc.'],
                ['name' => 'iPhone13', 'category' => 'Electronics', 'price' => 999.99, 'image' => 'iphone_13.jpg', 'description' => 'The iPhone 13 and iPhone 13 Mini (stylized as iPhone 13 mini) are smartphones designed, developed, marketed, and sold by Apple Inc. They are the fifteenth generation of iPhones.'],
                ['name' => 'Google Home', 'category' => 'Electronics', 'price' => 99.99, 'image' => 'google_home.jpg', 'description' => 'Google Home, is a line of smart speakers developed by Google under the Google Nest brand. The devices enable users to speak voice commands to interact with services through Google Assistant, the company\'s virtual assistant.'],
                ['name' => 'Levono Laptop', 'category' => 'Electronics', 'price' => 99.99, 'image' => 'levono_laptop.png', 'description' => 'Intel Pentium Silver N5030 (1.1 GHz base frequency, up to 3.1 GHz burst frequency, 4 MB L2 cache, 4 cores) - 8 GB LPDDR4-2400 SDRAM (onboard) - 14" diagonal HD, BrightView, micro-edge, WLED-backlit, touch screen, 220 nits, 45% NTSC (1366 x 768)'],
                ['name' => 'White Swatch', 'category' => 'Jewellery & Watches', 'price' => 12.99, 'image' => 'swatch1_white.jpg', 'description' => 'COLLECTION: Gent Standard - WATCH FACE SIZE: 34 mm Round case with push/pull crown - Water Resistance: Up to 30 Meters - FREE BATTERY EXHANGE: Need a new battery for your Swatch Watch? Visit any of our Swatch retail locations for a new batter - PRODUCT WARRANTY: 2 Year International Warranty'],
                ['name' => 'Tiger Swatch', 'category' => 'Jewellery & Watches', 'price' => 13.99, 'image' => 'swatch2_tiger.jpg', 'description' => 'COLLECTION: Gent Standard - WATCH FACE SIZE: 34 mm Round case with push/pull crown - Water Resistance: Up to 30 Meters - FREE BATTERY EXHANGE: Need a new battery for your Swatch Watch? Visit any of our Swatch retail locations for a new batter - PRODUCT WARRANTY: 2 Year International Warranty'],
                ['name' => 'Pink Swatch', 'category' => 'Jewellery & Watches', 'price' => 14.99, 'image' => 'swatch3_pink.jpg', 'description' => 'COLLECTION: Gent Standard - WATCH FACE SIZE: 34 mm Round case with push/pull crown - Water Resistance: Up to 30 Meters - FREE BATTERY EXHANGE: Need a new battery for your Swatch Watch? Visit any of our Swatch retail locations for a new batter - PRODUCT WARRANTY: 2 Year International Warranty'],
                ['name' => 'Electric Toothbrush', 'category' => 'Health & Beauty', 'price' => 6.99, 'image' => 'electric_toothbrush.jpg', 'description' => 'Tired of brushing with a manual toothbrush? Find out how you can make the switch to an Oral-B electric toothbrush for a faster, more thorough clean.'],
                ['name' => 'Cotton Swabs', 'category' => 'Health & Beauty', 'price' => 4.99, 'image' => 'cotton_swabs.jpg', 'description' => 'Contains: 1 Pack of 1170 Organic Cotton Swabs / Cotton Buds / Q-tips by Sky Organics. Amazing Value!'],
                ['name' => 'Makeup Remover', 'category' => 'Health & Beauty', 'price' => 10.99, 'image' => 'makeup_remover.jpg', 'description' => 'Oil-free, ultrasoft pre-moistened wipes lift off stubborn makeup, even waterproof mascara - Made with Aloe Vera, Chamomile and Green Tea, leaving skin feeling soft and refreshed - Dermatologist & Ophthalmologist Tested - Suitable for Sensitive Skin, Non-comedogenic, and Hypoallergenic.'],
                ['name' => 'Basketball ball', 'category' => 'Sporting Goods', 'price' => 19.99, 'image' => 'basketball.jpg', 'description' => 'HIGH QUALITY: Rubber basketball. Rubber cover developed to withstand both indoor and outdoor play - OFFICIAL SIZE: Size 7, 29.5 inches. Size 7 Basketball is the most commonly used size in basketball matches worldwide'],
                ['name' => 'Football ball', 'category' => 'Sporting Goods', 'price' => 16.99, 'image' => 'nfl_football.jpg', 'description' => 'DURABLE KIDS FOOTBALL: These junior footballs are constructed from a durable, high-grip, deep-pebbled rubber that stands up to wear and tear on grass, concrete, or any other surface'],
                ['name' => 'Hockey Jersey', 'category' => 'Sporting Goods', 'price' => 100.00, 'image' => 'hockey_jersey.jpg', 'description' => '100% Polyester, 135gsm High-Performance QLT Knit Construction - Re-engineered fit, now consistent through all styles (see fit guidelines) - Improved color-fastness and snag resistance - A little heavier than the 10200 model'],
                ['name' => 'Adidas Bag', 'category' => 'Clothing', 'price' => 59.99, 'image' => 'adidas_bag.jpg', 'description' => 'Dimensions: 18.5" x 10" x 11" - Detachable adjustable padded shoulder strap - 100% polyester - Wipeable material for spot cleaning with soap and water - Top-loading with zip closure'],
                ['name' => 'Adidas Shoes', 'category' => 'Clothing', 'price' => 49.99, 'image' => 'adidas_shoes.jpg', 'description' => 'Ethylene Vinyl Acetate sole - Low-profile boot with minimalist mesh upper construction keeps you cool into the last round. - Die-cut EVA midsole for lightweight comfort Inlay EVA insole for comfort.'],
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
