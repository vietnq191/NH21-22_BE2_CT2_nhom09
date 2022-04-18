<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Fresh Meat number1
        DB::table('products')->insert([
            'name' => 'USDA Choice Beef Rib Eye Steak Bone In, 2 pack, 1"',
            'type_id' => 1,
            'price' => 50,
            'image1' => '410A1aeA1dL._PIbundle-2,TopRight,0,0_SX500SY334SH20_.jpg',
            'image2' => '51OPCfsYcQL.jpg',
            'image3' => "tải xuống.jpg",
            'image4' => 'BeefPorterhouse4-Pat-Dunford_1080x.jpg',
            'description' => 'Choice grade beef has less marbling than Prime, but is still of very high quality. This is the most popular grade of beef because it contains sufficient marbling for taste and tenderness, while costing less than Prime, with Choice cuts being juicy enough to make that dinner of yours still delicious and amazing.The rib-eye is a beef steak from beef rib. When cut into steaks, the rib eye is one of the most popular, juiciest and expensive steaks on the market. The extra fat makes rib-eye steaks and roasts especially tender and flavorsome. The rib-eye can be cut boneless or bone-in. Sometimes people leave the bone in for extra moisture and the fat alongside the bone will enhance the meats flavor. Wrapped in trays with film and wax paper',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 0.4,
            'created_at' => '2022-09-04',
            'exp' => '2022-10-06'
        ]);
        //Fresh Meat number2
        DB::table('products')->insert([
            'name' => 'Black Angus Bone-In Prime Rib Roast',
            'type_id' => 1,
            'price' => 298.98,
            'image1' => '81L4SICjNtL._SL1500_.jpg',
            'image2' => '81IRJ4B5ygL._SL1500_.jpg',
            'image3' => '81Rifvcd2rL._SL1500_.jpg',
            'image4' => 'BeefStandingRibRoastBoneIn2-PatDunford_1_1080x.jpg',
            'description' => 'Nebraska Star Roast Aged Premium Angus Ribeye Steaks - All Natural Hand Cut and Trimmed with Signature Seasoning - Gourmet Steak Delivery Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition. 5 packages, each package contains 1 steak. Actual weight may vary, the approximate weight of each package is 24 oz. Perfectly fresh, frozen, packed, and portioned for your needs. Crescent Foods Grass Fed Skirt Steak. All our cattle are Hand Processed Halal, raised humanely, and meet strict standard requirements for quality and transparency.',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 0.8,
            'created_at' => '2022-09-04',
            'exp' => '2022-10-06',
        ]);
        //Fresh Meat number3
        DB::table('products')->insert([
            'name' => 'Ribeye Steaks + Seasoning from the Texas Roadhouse Butcher Shop',
            'type_id' => 1,
            'price' => '159.99',
            'image1' => '61ZHFVSuEZL._SX679_.jpg',
            'image2' => '71LWCmKhZ9L._SX679_.jpg',
            'image3' => '61Am74bFdKL._SX679_.jpg',
            'image4' => '61xb8u4DXPL._SX679_.jpg',
            'description' => 'Heavier marbling Ribeye Steaks Aged Premium Angus Seasoning from the Texas Roadhouse results in a juicy, more flavor packed steak; best cut for novice grillers. Our steaks are hand cut and trimmed by old fashion butcherss Gourmet Steak Delivery Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition. 5 packages, each package contains 1 steak. Actual weight may vary, the approximate weight of each package is 24 oz. Perfectly fresh, frozen, packed, and portioned for your needs. Crescent Foods Grass Fed Skirt Steak. All our cattle are Hand Processed Halal, raised humanely, and meet strict standard requirements for quality and transparency.',
            'infomation' => 'Prices do not include applicable taxes which will be applied at checkout. Advertised weights are based on pre-cooked weight. Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 1.2,
            'created_at' => '2022-09-04',
            'exp' => '2022-09-10',
        ]);
        //Fresh Meat number4
        DB::table('products')->insert([
            'name' => 'Nebraska Star Beef Aged Premium Angus Ribeye Steaks - All Natural Hand Cut and Trimmed with Signature Seasoning - Gourmet Steak Delivery to Your Home, 11 Piece Set, Beef',
            'type_id' => 1,
            'price' => 389.99,
            'image1' => '71jsr3ov4PL._SX679_PIbundle-10,TopRight,0,0_AA679SH20_.jpg',
            'image2' => '81diCcJnFTL._SX679_.jpg',
            'image3' => '81Oae59B0UL._SX679_.jpg',
            'image4' => '71IVeyXLvnL._SX679_.jpg',
            'description' => 'Hand Cut and Trimmed Our steaks are hand cut and trimmed by old fashion butchers in small-town Nebraska. Aged 35 days minimum to make sure every steak is tender and full of flavor. Signature Seasoning We round the package out with a 5 oz bottle of our Signature Seasoning. The seasoning that started it all for Nebraska Star Beef. This is a classic steak house flavor that is bright and vibrant. It adds a new dimension to all meats but is particularly good on steak. 5 packages, each package contains 1 steak. Actual weight may vary, the approximate weight of each package is 24 oz. Perfectly fresh, frozen, packed, and portioned for your needs. Crescent Foods Grass Fed Skirt Steak. All our cattle are Hand Processed Halal, raised humanely, and meet strict standard requirements for quality and transparency.',
            'infomation' => 'This product is labelled to United States standards and may differ from similar products sold elsewhere in its ingredients, labeling and allergen warnings',
            'weight' => 1.8,
            'created_at' => '2022-09-04',
            'exp' => '2022-09-10',
        ]);
        //Fresh Meat number5
        DB::table('products')->insert([
            'name' => '1/3 lb Prestige Angus Ground Beef Patties by Nebraska Star Beef - The Ultra Premium Package for Family Grilling Events',
            'type_id' => 1,
            'price' => 49.99,
            'image1' => '615u6QGTjvS._SX679_PIbundle-8,TopRight,0,0_AA679SH20_.jpg',
            'image2' => '91eyFIh-dkS._SX679_.jpg',
            'image3' => '61Wo6pa-X6S._SX679_.jpg',
            'image4' => '816oxTV6frS._SX679_.jpg',
            'description' => 'Prestige Angus Burger Packages Let us know if this is all too familiar You\'ve had some "good" burgers, but it\'s been hit or miss and you just haven\'t found the "perfect" burger That\'s where our family comes in We are a small, single source, family run, premium beef producer located north of Holdrege, Nebraska Our beef is raised, aged, and butchered the traditional way, each steak is hand cut and trimmed – one at a time Our focus is simple and narrow: Produce the absolute highest quality humanely raised beef possible. Nebraska Star Beef\'s Burger package offers ultra prestige Angus ground beef patties that make this package a great choice for family grilling events or the annual block party. Our Burger Package Includes: 2 pack of 4 for a total of 8 1/3 lb Prestige Angus Ground Beef Patties Taste the difference',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 0.8,
            'created_at' => '2022-09-04',
            'exp' => '2022-09-10',
        ]);
        //Fresh Meat number6
        DB::table('products')->insert([
            'name' => 'Aged Angus New York Strip and Premium Ground Beef by Nebraska Star Beef - All Natural Hand Cut and Trimmed and Includes Seasoning - Gourmet Package Delivery to Your Door',
            'type_id' => 1,
            'price' => 166.73,
            'image1' => '71vFjo+-9+L._SX679_.jpg',
            'image2' => '712cXOFRcZL._SX679_.jpg',
            'image3' => '71D4g3qx0GL._SX679_.jpg',
            'image4' => '8172+gXy52L._SX679_.jpg',
            'description' => 'Signature Seasoning We round the package out with a 5 oz bottle of our Signature Seasoning. The seasoning that started it all for Nebraska Star Beef. This is a classic steak house flavor that is bright and vibrant. It adds a new dimension to all meats but is particularly good on steak. 5 packages, each package contains 1 steak. Actual weight may vary, the approximate weight of each package is 24 oz. Perfectly fresh, frozen, packed, and portioned for your needs. Crescent Foods Grass Fed Skirt Steak. All our cattle are Hand Processed Halal, raised humanely, and meet strict standard requirements for quality and transparency.',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 0.5,
            'created_at' => '2022-09-04',
            'exp' => '2022-09-10',
        ]);
        //Fresh Meat number7
        DB::table('products')->insert([
            'name' => 'TenderBison Burgers & Steaks Combo Pack: 100% All-Natural, Grass-Fed and Grain Finished North American Bison Meat with no Growth Hormones or Antibiotics - USDA Tested - 14 Piece',
            'type_id' => 1,
            'price' => 179.95,
            'image1' => '410vulzWTCL._PIbundle-14,TopRight,0,0_AA500SH20_.jpg',
            'image2' => '91nTw0B8lzL._SX679_.jpg',
            'image3' => '91P29nsz2lL._SX679_.jpg',
            'image4' => '91cX+Kr26vL._SX679_.jpg',
            'description' => 'Bison meat is an excellent lean alternative to other red meats and actually has 1/3 of the calories of a skinless breast of chicken. Bison meat is also high in iron and protein making it an extremely healthy alternative to other meats. In fact, many bodybuilders and health food aficionados have started incorporating bison meat into their diets. 5 packages, each package contains 1 steak. Actual weight may vary, the approximate weight of each package is 24 oz. Perfectly fresh, frozen, packed, and portioned for your needs. Crescent Foods Grass Fed Skirt Steak. All our cattle are Hand Processed Halal, raised humanely, and meet strict standard requirements for quality and transparency.',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 3,
            'created_at' => '2022-09-04',
            'exp' => '2022-09-16',
        ]);
        //Fresh Meat number8
        DB::table('products')->insert([
            'name' => 'Boneless Thinly Sliced Pork Loin Chops 1 lbs.',
            'type_id' => 1,
            'price' => 74.99,
            'image1' => '81KjNyf0dHL._SX679_.jpg',
            'image2' => '81K8WxocOyL.jpg',
            'image3' => '91fsqC1DzvL.jpg',
            'image4' => '91KRLOoIKKL.jpg',
            'description' => 'Our Thinly-Sliced Pork Loin Chops are boneless and cut from Midwestern grained pork. meat is an excellent lean alternative to other red meats and actually has 1/3 of the calories of a skinless breast of chicken. Bison meat is also high in iron and protein making it an extremely healthy alternative to other meats. In fact, many bodybuilders and health food aficionados have started incorporating bison meat into their diets. 5 packages, each package contains 1 steak. Actual weight may vary, the approximate weight of each package is 24 oz. Perfectly fresh, frozen, packed, and portioned for your needs. Crescent Foods Grass Fed Skirt Steak. All our cattle are Hand Processed Halal, raised humanely, and meet strict standard requirements for quality and transparency.',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 0.4,
            'created_at' => '2022-09-04',
            'exp' => '2022-09-16',
        ]);
        //Fresh Meat number9
        DB::table('products')->insert([
            'name' => 'Elk Steak - 4 [8 oz.] Elk Ranch Steaks, Individually Sealed - Good Life Premium Meats',
            'type_id' => 1,
            'price' => 99.00,
            'image1' => '41Gaazcn5DL.jpg',
            'image2' => '91lBDmPg+GL._SX679_.jpg',
            'image3' => '910Mh+2K+vL._SX679_.jpg',
            'image4' => 'ELK-STEAK-1_d0c5c835-a813-47aa-8235-aac351dd9bc3.jpg',
            'description' => 'All items are shipped FedEx ground service in a styrofoam cooler with dry ice and will arrive within 1-3 days after shipping based on your location. You will receive a shipping confirmation email with your tracking number so that you know when to expect your package. 5 packages, each package contains 1 steak. Actual weight may vary, the approximate weight of each package is 24 oz. Perfectly fresh, frozen, packed, and portioned for your needs. Crescent Foods Grass Fed Skirt Steak. All our cattle are Hand Processed Halal, raised humanely, and meet strict standard requirements for quality and transparency. 5 packages, each package contains 1 steak. Actual weight may vary, the approximate weight of each package is 24 oz. Perfectly fresh, frozen, packed, and portioned for your needs. Crescent Foods Grass Fed Skirt Steak. All our cattle are Hand Processed Halal, raised humanely, and meet strict standard requirements for quality and transparency.',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 0.5,
            'created_at' => '2022-09-04',
            'exp' => '2022-09-16',
        ]);
        //Fresh Meat number10
        DB::table('products')->insert([
            'name' => 'Gift Boxed Super Trimmed American Style Kobe Filet Mignon',
            'type_id' => 1,
            'price' => 269.95,
            'image1' => '611bDklLxLS.jpg',
            'image2' => '6197Ptva7KL.jpg',
            'image3' => 'asasa.jpg',
            'image4' => 'images.jpg',
            'description' => 'Buttery tender, like all our Filet Mignon selections, but Wagyu American Style Kobe is undoubtedly a cut above. With intense marbling for ultimate flavor, this Filet Mignon is aged to perfection. Truly a work of art. 5 packages, each package contains 1 steak. Actual weight may vary, the approximate weight of each package is 24 oz. Perfectly fresh, frozen, packed, and portioned for your needs. Crescent Foods Grass Fed Skirt Steak. All our cattle are Hand Processed Halal, raised humanely, and meet strict standard requirements for quality and transparency. 5 packages, each package contains 1 steak. Actual weight may vary, the approximate weight of each package is 24 oz. Perfectly fresh, frozen, packed, and portioned for your needs. Crescent Foods Grass Fed Skirt Steak. All our cattle are Hand Processed Halal, raised humanely, and meet strict standard requirements for quality and transparency.',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 0.15,
            'created_at' => '2022-09-04',
            'exp' => '2022-09-10',
        ]);
        //Fresh Meat number11
        DB::table('products')->insert([
            'name' => 'Glatt Kosher Beef Meat Bones - 5 lb Pack',
            'type_id' => 1,
            'price' => 47.99,
            'image1' => '51-mFp6nFGL.jpg',
            'image2' => 'dssds.jpg',
            'image3' => 'sss.jpg',
            'image4' => 'aaa.jpg',
            'description' => '5 packages, each package contains 1 steak. Actual weight may vary, the approximate weight of each package is 24 oz. Perfectly fresh, frozen, packed, and portioned for your needs. Crescent Foods Grass Fed Skirt Steak. All our cattle are Hand Processed Halal, raised humanely, and meet strict standard requirements for quality and transparency. Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 0.2,
            'created_at' => '2022-09-04',
            'exp' => '2022-09-12',
        ]);
        //Fresh Meat number12
        DB::table('products')->insert([
            'name' => 'Skirt Steak',
            'type_id' => 1,
            'price' => 90,
            'image1' => '91MBWsPYi4L._SX679_.jpg',
            'image2' => '9136EyC6W8L._SX679_.jpg',
            'image3' => '51b8IBS8ICL.jpg',
            'image4' => 'zzzz.jpg',
            'description' => '5 packages, each package contains 1 steak. Actual weight may vary, the approximate weight of each package is 24 oz. Perfectly fresh, frozen, packed, and portioned for your needs. Crescent Foods Grass Fed Skirt Steak. All our cattle are Hand Processed Halal, raised humanely, and meet strict standard requirements for quality and transparency. A styrofoam cooler with dry ice and will arrive within 1-3 days after shipping based on your location. You will receive a shipping confirmation email with your tracking number so that you know when to expect',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 0.4,
            'created_at' => '2022-05-22',
            'exp' => '2022-05-29',
        ]);
        //Vegetables number1
        DB::table('products')->insert([
            'name' => 'Fresh Roma Tomato Fruit Vegetables',
            'type_id' => 2,
            'price' => 38.98,
            'image1' => '417Yw0GxG3L.jpg',
            'image2' => 'xxx.jpg',
            'image3' => 'cccc.jpg',
            'image4' => 'vvv.jpg',
            'description' => 'This tomato is great for salads. Tomatoes!! Fantastic flavor! warmth, meaning a good feeling',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 0.5,
            'created_at' => '2022-05-04',
            'exp' => '2022-05-16',
        ]);
        //Vegetables number2
        DB::table('products')->insert([
            'name' => 'Iceberg Lettuce Fresh Produce Fruit Vegetables 1 Each',
            'type_id' => 2,
            'price' => 14.99,
            'image1' => '41CGtIyWgML._AC_.jpg',
            'image2' => 'fresh-iceberg-lettucek.jpg',
            'image3' => 'iceberg.jpg', 
            'image4' => 'bbb.jpg',
            'description' => 'Iceberg Lettuce',
            'infomation' => 'For warranty information about this product',
            'weight' => 0.5,
            'created_at' => '2022-05-04',
            'exp' => '2022-05-14',
        ]);
        //Vegetables number3
        DB::table('products')->insert([
            'name' => 'Celery Fresh Produce Large Fruit Vegetables',
            'type_id' => 2,
            'price' => 19.95,
            'image1' => '41MGuSdpEIL.jpg',
            'image2' => 'nnn.jpg',
            'image3' => 'mmm.jpg',
            'image4' => 'lll.jpg',
            'description' => 'Celery Fresh Produce Large Fruit Vegetables',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition',
            'weight' => 0.5,
            'created_at' => '2022-05-14',
            'exp' => '2022-05-26',
        ]);
        //Vegetables number4
        DB::table('products')->insert([
            'name' => 'Garneck 3Pcs Artificial Cucumber Simulation Fake Vegetable Model Plastic Cabinet Food',
            'type_id' => 2,
            'price' => 17.99,
            'image1' => '51l6dYaEqVL._AC_SX679_.jpg',
            'image2' => 'kkk.jpg',
            'image3' => 'jjj.jpg',
            'image4' => 'hhh.jpg',
            'description' => 'This is a great photo prop with realistic design. It is a perfect photo prop which can replace the true item when taking pictures. It is beautiful and lifelike. It can also be used as shop decoration or home decoration. It\'s a good choice to replace real food for decoration.',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition',
            'weight' => 0.5,
            'created_at' => '2022-04-09',
            'exp' => '2022-04-16',
        ]);
        //Vegetables number5
        DB::table('products')->insert([
            'name' => '5 Pcs Simulated Food Broccoli Slice Fake Artificial Vegetable Broccoli Decoration Model Educational Props for Home Restaurant Decor',
            'type_id' => 2,
            'price' => 12.99,
            'image1' => '81cgVCEz5JS._AC_SX679_.jpg',
            'image2' => 'ggg.jpg',
            'image3' => 'fff.jpg',
            'image4' => 'ddd.jpg',
            'description' => 'This is a simulation food prop that is made of PVC material ,and it is really realistic. The Broccolis can be teaching mold, facsimile item for drawing, window display and so on. It is a perfect photo prop which can replace the true item when taking pictures.You will be satisfied with the good effect when you use it.',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition. For warranty information about this product',
            'weight' => 0.5,
            'created_at' => '2022-05-09',
            'exp' => '2022-05-16',
        ]);
        //Vegetables number6
        DB::table('products')->insert([
            'name' => 'Lorigun Artificial Bell Peppers Fake Veggie Colorful Bell Peppers for Decoration, Decorative Vegetables, Red Green Yellow Bell Peppers 6Pcs',
            'type_id' => 2,
            'price' => 13.99,
            'image1' => '610GNbky8HL._AC_SX679_.jpg',
            'image2' => '51Fu-goLsAL._AC_SX679_.jpg',
            'image3' => '5166qSphhEL._AC_SX679_.jpg',
            'image4' => '61bd7Z7hSEL._AC_SX679_.jpg',
            'description' => 'It applies to the display cabinet, furniture exhibition layout, home kitchen decoration, home fruit plate accessories,festival use,decoration shopping malls,teaching, games, and other early childhood elementary education,photography props etc. Also can be a great gift for your family or friends.',
            'infomation' => 'Using :For decoration, Teaching tool, Performing props, Photography props and the like',
            'weight' => 0.5,
            'created_at' => '2022-05-04',
            'exp' => '2022-05-16',
        ]);
        //Vegetables number7
        DB::table('products')->insert([
            'name' => 'Artificial Eggplants Simulation Fake Vegetable Photo Props Home Decoration',
            'type_id' => 2,
            'price' => 16.99,
            'image1' => '513luuAAMuL._AC_SX679_.jpg',
            'image2' => '51PPniH1p9L._AC_SX679_.jpg',
            'image3' => '51+cUcEEIuL._AC_SX679_.jpg',
            'image4' => '61deaiQWUxL._AC_SX679_.jpg',
            'description' => 'Materials: Styrofoam
            Color : As picture show
            Size: Length is about 20cm(1CM=0.39inch)
            Modelling :Purple medium-sized eggplant
            Notice:
            1.The colors may have difference as the different display,pls understand.
            Package: eggplants X 5',
            'infomation' => 'For warranty information about this product',
            'weight' => 0.5,
            'created_at' => '2022-05-09',
            'exp' => '2022-05-16',
        ]);
        //Vegetables number8
        DB::table('products')->insert([
            'name' => 'Simulation Carrots Artificial Vegetables Home&Kitchen Decorations',
            'type_id' => 2,
            'price' => 10.87,
            'image1' => '41XW56vYO1L._AC_SX466_.jpg',
            'image2' => '51e1www8wJL._AC_SX466_.jpg',
            'image3' => '61V9F63UfzL._AC_SX466_.jpg',
            'image4' => '61wmbUdFrBL._AC_SX466_.jpg',
            'description' => 'Materials:Styrofoam
            Color : As picture show
            Size: About 15 * 4.5 cm(1CM=0.39inch)',
            'infomation' => 'For warranty information about this product',
            'weight' => 0.5,
            'created_at' => '2022-05-09',
            'exp' => '2022-05-18',
        ]);
        //Vegetables number9
        DB::table('products')->insert([
            'name' => 'SNAP BEANS GREEN FRESH PRODUCE FRUIT VEGETABLES',
            'type_id' => 2,
            'price' => 16.93,
            'image1' => '51qMIU1cQbL.jpg',
            'image2' => 'ppp.jpg',
            'image3' => 'ooo.jpg',
            'image4' => 'iii.jpg',
            'description' => 'A FRESH & DELICIOUS SIDE DISH. A FRESH GREEN BEAN SALAD WITH HAZELNUTS AND LEMON ZEST IS THE PERFECT ACCOMPANIMENT FOR YOUR MEAL!',
            'infomation' => 'Is Discontinued By Manufacturer',
            'weight' => 0.5,
            'created_at' => '2022-05-09',
            'exp' => '2022-05-16',
        ]);
        //Vegetables number10
        DB::table('products')->insert([
            'name' => 'Hagao Fake Lettuce Leaves Artificial Vegetables Lettuces Simulation Plastic Lifelike for House Kitchen Party Pub Decoration Cabinet Ornament',
            'type_id' => 2,
            'price' => 9.69,
            'image1' => '61KOVWeDojL._AC_SX679_.jpg',
            'image2' => '51D7ygs+EvL._AC_SX679_.jpg',
            'image3' => '61lxvqYWMtL._AC_SX679_.jpg',
            'image4' => '61UgbQl6IqL._AC_SX679_.jpg',
            'description' => 'Hagao\'s products are specially designed for home decoration and mini orchards or gardens where children can enjoy the fun of artificial fruits or artificial vegetables, and adults can bring them to learn new things, so happy scenes. There are many kinds of fruits and vegetables in our shop that can dress up at home or in the yard. We are happy to help!',
            'infomation' => 'Product Dimensions 6 x 5 x 0.5 inches
            Item Weight 1.13 ounces
            Manufacturer Hagao
            ASIN B07DZZS49R
            Item model number 8541836872',
            'weight' => 0.2,
            'created_at' => '2022-05-09',
            'exp' => '2022-05-16',
        ]);
        //Vegetables number11
        DB::table('products')->insert([
            'name' => 'Designer One Artificial Faux Fake Large Cucumber Vegetable',
            'type_id' => 2,
            'price' => 7.9,
            'image1' => '714b-iSWZ1L._AC_SX679_.jpg',
            'image2' => 'uuu.jpg',
            'image3' => 'yyy.jpg',
            'image4' => 'ttt.jpg',
            'description' => 'Hagao\'s products are specially designed for home decoration and mini orchards or gardens where children can enjoy the fun of artificial fruits or artificial vegetables, and adults can bring them to learn new things, so happy scenes. There are many kinds of fruits and vegetables in our shop that can dress up at home or in the yard. We are happy to help!', 'infomation' => 'Product Dimensions 6 x 5 x 0.5 inches
            Item Weight 1.13 ounces
            Manufacturer Hagao
            ASIN B07DZZS49R
            Item model number 8541836872',
            'weight' => 0.5,
            'created_at' => '2022-05-09',
            'exp' => '2022-05-16',
        ]);
        //Vegetables number12
        DB::table('products')->insert([
            'name' => 'TURNIP GREENS FRESH PRODUCE FRUIT VEGETABLES',
            'type_id' => 2,
            'price' => 21.55,
            'image1' => '515xyhvn8iL.jpg',
            'image2' => 'rrr.jpg',
            'image3' => 'eee.jpg',
            'image4' => 'www.jpg',
            'description' => 'TURNIP GREENS FRESH PRODUCE FRUIT VEGETABLES a very robust heavy flavor. It applies to the display cabinet, furniture exhibition layout, home kitchen decoration, home fruit plate accessories,festival use,decoration shopping malls,teaching, games, and other early childhood elementary education,photography props etc. Also can be a great gift for your family or friends.',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 0.2,
            'created_at' => '2022-05-09',
            'exp' => '2022-05-16',
        ]);
        //Ocean foods number1
        DB::table('products')->insert([
            'name' => 'Salmon Atlantic Farm Raised Portion',
            'type_id' => 3,
            'price' => 58,
            'image1' => '51PWxO8UZrL._SX679_.jpg',
            'image2' => 'qqq.jpg',
            'image3' => 'zz.jpg',
            'image4' => 'xx.jpg',
            'description' => 'Your wild salmon fillets have been quick-frozen to lock in their flavor and nutrients, and shipped to you on dry ice. Upon arrival, please freeze or refrigerate. Fillets will keep in the freezer for approximately 3-4 months; once thawed they should be cooked and used within 1-2 days.
            Once a frozen fillet is completely thawed, it can be re-frozen though we do not recommend it, as taste and quality may begin to suffer. No fillet should be re-frozen if it has been thawed 2 days or longer.       
            The best way to thaw your wild salmon fillet is to leave it in the refrigerator overnight (in its pouch), allowing at least 8-10 hours. Trying to rush the process by thawing at room temperature or placing the frozen pouch in warm water is definitely NOT recommended, as it can cause the salmon to lose flavor and texture. If you must thaw your salmon quickly, place the frozen pouch in a bowl of cool water for 30-45 minutes, and then continue thawing in refrigerator.       
            TO BAKE: Pre-heat oven to 275°F. Place salmon fillet skin side down on a cookie sheet brushed with olive oil, and bake for approximately 20 minutes. Do not flip salmon fillet.
            TO GRILL: Brush grill with olive oil PRIOR to heating. Once the grill is medium-hot (you should be able to hold your hand 6 inches above the grill for 5 seconds), brush the top of each salmon fillet with olive oil, and place on grill skin side up. Grill fillet until sides begin to turn opaque. Flip once, and continue grilling until fully cooked.
            TO BROIL: Place salmon fillet skin side down on a broiler pan brushed with olive oil, and place on oven’s middle rack. Generally broil about 10 minutes or so, though keep watching to avoid overcooking. Do not flip salmon fillet.',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition. Place salmon fillet skin side down on a cookie sheet brushed with olive oil, and bake for approximately 20 minutes. Do not flip salmon fillet. TO GRILL: Brush grill with olive oil PRIOR to heating. Once the grill is medium-hot (you should be able to hold your hand 6 inches above the grill for 5 seconds), brush the top of each salmon fillet with olive oil, and place on grill skin side up. Grill fillet until sides begin to turn opaque. Flip once, and continue grilling until fully cooked.',
            'weight' => 0.5,
            'created_at' => '2022-05-09',
            'exp' => '2022-05-13',
        ]);
        //Ocean foods number2
        DB::table('products')->insert([
            'name' => 'SillyCute Seafood: Live Lobsters from Maine, Alive and Kicking, 1.0~1.2 lb each, Pack of 6',
            'type_id' => 3,
            'price' => 167.99,
            'image1' => '81co5UXktdL._SX679_.jpg',
            'image2' => '81OYgKgGNsL._SX679_.jpg',
            'image3' => '81Z0jTWRQRL._SX679_.jpg',
            'image4' => '71APA2tOBIL._SX679_.jpg',
            'description' => 'Anyone who’s ever spent time in Maine knows that nothing beats the fresh, delicious lobsters you can find in nearly any local seafood restaurant. Not all lobsters taste the same. If you have experienced the deliciousness of a fresh Maine lobster, this is something you may agree on. It is an experience that can’t be replicated outside of Maine--especially not with a tanked lobster from the supermarket. But do not worry: our overnight lobster shipping, from our fishermen’s trap to your doorstep, will let anyone, anywhere to be able to experience the joy of the fresh live Maine lobsters!
            The best way to thaw your wild SillyCute fillet is to leave it in the refrigerator overnight (in its pouch), allowing at least 8-10 hours. Trying to rush the process by thawing at room temperature or placing the frozen pouch in warm water is definitely NOT recommended, as it can cause the salmon to lose flavor and texture. If you must thaw your salmon quickly, place the frozen pouch in a bowl of cool water for 30-45 minutes, and then continue thawing in refrigerator.       
            TO BAKE: Pre-heat oven to 275°F. Place SillyCute fillet skin side down on a cookie sheet brushed with olive oil, and bake for approximately 20 minutes. Do not flip salmon fillet.
            TO GRILL: Brush grill with olive oil PRIOR to heating. Once the grill is medium-hot (you should be able to hold your hand 6 inches above the grill for 5 seconds), brush the top of each salmon fillet with olive oil, and place on grill skin side up. Grill fillet until sides begin to turn opaque. Flip once, and continue grilling until fully cooked.
            TO BROIL: Place SillyCute fillet skin side down on a broiler pan brushed with olive oil, and place on oven’s middle rack. Generally broil about 10 minutes or so, though keep watching to avoid overcooking. Do not flip salmon fillet.',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 0.5,
            'created_at' => '2022-05-04',
            'exp' => '2022-05-18',
        ]);
        //Ocean foods number3
        DB::table('products')->insert([
            'name' => 'Alaskan Red King Crab',
            'type_id' => 3,
            'price' => 389.99,
            'image1' => '51n4zGbrfdL.jpg',
            'image2' => '81HFXh8To3L._SX679_.jpg',
            'image3' => 'cc.jpg',
            'image4' => 'vv.jpg',
            'description' => 'Most whole Alaskan Red King Crabs get broken down into legs, claws, and lump meat. We offer all of these options as well in our online shop, but there is nothing like getting the whole crab at once. The whole crab can make for an eye-catching centerpiece or give you more variety when making your favorite recipes. We stocked up on as many as possible, but right after harvesting season these whole crabs tend to go fast, so don’t miss out. Get yours today.
            Your wild Alaskan have been quick-frozen to lock in their flavor and nutrients, and shipped to you on dry ice. Upon arrival, please freeze or refrigerate. Alaskan will keep in the freezer for approximately 3-4 months; once thawed they should be cooked and used within 1-2 days',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 1.5,
            'created_at' => '2022-05-14',
            'exp' => '2022-05-25',
        ]);
        //Ocean foods number4
        DB::table('products')->insert([
            'name' => 'Cooked Octopus Legs/Tentacles',
            'type_id' => 3,
            'price' => 128.88,
            'image1' => '81t7qZ+UQDS._SY679_PIbundle-4,TopRight,0,0_SX485SY679SH20_.jpg',
            'image2' => '81sG6JLCN6L._SX679_.jpg',
            'image3' => '81ZbTPClF+L._SX679_.jpg',
            'image4' => '81ae1khgsrL._SX679_.jpg',
            'description' => 'Tenderization: Tenderizing makes the difference. Tenderization is a method using a tumbler, sea salt, and cold water. It’s a natural process where no additives or chemicals are ever used. This process breaks down the muscles of the octopus and gives us what is called “flower octopus”. Flower octopus is a beautifully round curled up octopus in the shape of a flower. Our octopus can be stored at 0 degrees and will last up to two years. Furthermore, it can be thawed and re-frozen without losing any of its succulent flavors. Freezing further tenderizes the octopus. Our products are flash-frozen on-vessel. This process provides a high-yield, significantly higher than non-tenderized products. Non-tenderized octopus and sepia yield around 50% once cooked, whereas the Gullo octopus and sepia yield between 70%-90%, depending on the size.',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 4,
            'created_at' => '2022-05-09',
            'exp' => '2022-05-18',

        ]);
        //Ocean foods number5
        DB::table('products')->insert([
            'name' => 'Cameron\'s Seafood Jumbo Maryland Blue Crabs - Extra Large Jimmys Steamed',
            'type_id' => 3,
            'price' => 131.99,
            'image1' => '71HKk3a0DqL._SX679_PIbundle-6,TopRight,0,0_AA679SH20_.jpg',
            'image2' => '51o99e57HUL.jpg',
            'image3' => '51IxCytSoxL.jpg',
            'image4' => 'bb.jpg',
            'description' => 'Jumbo Maryland Steamed Blue Crabs are very large crabs. Our crabs are 100% authentic Maryland Blue Crabs caught daily and delivered the same day from the Chesapeake Bay in Maryland. Largest crabs: 6 ¼+ inches from tip to tip of the shell Recommended serving: 6 crabs/person Seasoned crabs: you can specify your preference in the order notes Maryland colossal jumbo blue crabs from the Chesapeake Bay are the best crabs in the world Fresh & delicious: caught, steamed and shipped the same day it ships Ready to eat: simple reheating included',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 1,
            'created_at' => '2022-05-09',
            'exp' => '2022-05-25',
        ]);
        //Ocean foods number6
        DB::table('products')->insert([
            'name' => 'East Coast Fresh Whole Shelled Oysters',
            'type_id' => 3,
            'price' => 119.99,
            'image1' => '51JRtcmyWqL.jpg',
            'image2' => '51cS8xcGqbL.jpg',
            'image3' => '517+8R06Q3L.jpg',
            'image4' => '71dG7cFFQmL._SX679_.jpg',
            'description' => 'This listing is for 25 whole shelled live oysters. They are primarily caught in the Chesapeake Bay or local tributaries in Virginia, Maryland or Delaware. “If you don’t love life, you can’t enjoy an Oyster. Our fresh, hearty, full-flavored oysters range in flavor from buttery sweet and slightly salty to rich, briny and slightly metallic.',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 2,
            'created_at' => '2022-05-09',
            'exp' => '2022-05-20',
        ]);
        //Ocean foods number7
        DB::table('products')->insert([
            'name' => 'Raw Domestic Soft Shell Crab Frozen',
            'type_id' => 3,
            'price' => 149,
            'image1' => '81Ek9G+P5ZL._SX679_.jpg',
            'image2' => '514TjDmCeVL.jpg',
            'image3' => '815mSLsFfCL._SX679_.jpg',
            'image4' => '51P7k0aqAuL.jpg',
            'description' => 'Soft shell crabs are blue crabs (Callinectus sapidus) that have shed their hard outer shell. More than 100 years ago, the water-men of historic Crisfield, Maryland introduced these crabs to the seafood industry. Handy Seafood, the nation’s oldest and largest soft shell crab processor, offers this unique delicacy fresh April through October and frozen year round.',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 1.5,
            'created_at' => '2022-05-08',
            'exp' => '2022-05-18',
        ]);
        //Ocean foods number8
        DB::table('products')->insert([
            'name' => 'Live Dungeness Crab',
            'type_id' => 3,
            'price' => 272,
            'image1' => '616iMuqplfL._SX679_.jpg',
            'image2' => '51YZO7TidzL._SX679_.jpg',
            'image3' => '6135E96AowL._SX679_.jpg',
            'image4' => '81-aM3DDNeL._SL1500_.jpg',
            'description' => 'Dungeness crab is hailed as one of the finest tasting crab in the world. Our Dungeness Crab come from the waters of the Pacific Northwest. We are proud to carry this local Northwest specialty. These crabs make a great meal with plenty of meat in the body and legs. The flavor is sweet and buttery with a slight firmness. Orders are shipped live, enclosed in a styrofoam box with frozen gel packs. Crab will be weak upon delivery and should be cooked within 24 hours maximum.',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 5,
            'created_at' => '2022-05-08',
            'exp' => '2022-05-25',
        ]);
        //Ocean foods number9
        DB::table('products')->insert([
            'name' => 'Louisiana Boiled Crawfish',
            'type_id' => 3,
            'price' => 104.99,
            'image1' => '61EBrrJL6+L._SX679_.jpg',
            'image2' => 'nn.jpg',
            'image3' => 'mm.jpg',
            'image4' => 'll.jpg',
            'description' => '10 lbs of mouth watering Lousiana crawfish boiled to perfection',
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 4.5,
            'created_at' => '2022-05-01',
            'exp' => '2022-05-10',
        ]);
        //Ocean foods number10
        DB::table('products')->insert([
            'name' => 'Small Dried Fresh Scallops / Qingdao Scallops Dried Seafood Free Worldwide Airmail',
            'type_id' => 3,
            'price' => 19.80,
            'image1' => '41zN5eh9QaL.jpg',
            'image2' => '91IaKNu+oYL._SX679_.jpg',
            'image3' => '71dG7cFFQmL._SX679_.jpg',
            'image4' => '712dh+DZrmL._SX679_.jpg',
            'description' => 'Description: Dried Qingdao Scallop (青島貝)
            Origin: China
            Net Weight: 0.5lb / 226.8 grams',
            'infomation' => 'All the information and photos provided in our pages are for your reference only. Our products are not intended to diagnose, treat, cure or prevent any diseases. We try every effort to make sure the information we provided is complete and accurate. However, neither the publisher nor the author is engaged in rendering any professional advice or services to the individual reader. The ideas, procedures, and suggestions contained in our pages are not intended as a substitute for consulting with your physician/ doctors. Please seek your medical advice if you have any enquiry about your health. Neither the author nor the publisher shall be liable for any loss, injury, or damage allegedly arising from any information or suggestion on our pages.',
            'weight' => 4,
            'created_at' => '2022-04-14',
            'exp' => '2022-10-14'
        ]);
        //Egg number1
        DB::table('products')->insert([
            'name' => 'Augason Farms Dried Whole Egg Product 2 lbs 1 oz No. 10 Can (5-90161)',
            'type_id' => 4,
            'price' => 42.87,
            'image1' => '181oMSfJ2uXL._SL1500_.jpg',
            'image2' => '191-Zcd8qiEL._SL1500_.jpg',
            'image3' => '18191IsHRBWL._SL1500_.jpg',
            'image4' => '181YOj6h92+L._SL1500_.jpg',
            'description' => 'This Dried Whole Egg Powder is a certified gluten free, real egg powder that goes well beyond breakfast and provides endless versatility. Whether used in desserts, casseroles or quiches, the nutritious value and versatility of eggs is always at your fingertips. It’s a powerhouse pantry staple. Unopened shelf life up to 10 years, recipes on can label. Dried whole eggs, less than 2% sodium silicoaluminate (as an anticaking agent).',
            'infomation' => 'Dried whole eggs, less than 2% sodium silicoaluminate (as an anticaking agent). Unopened shelf life up to 10 years, recipes on can label.',
            'weight' => 0.4,
            'created_at' => '2022-04-07',
            'exp' => '2023-04-07',
        ]);
        //Egg number2
        DB::table('products')->insert([
            'name' => "Judee's Egg Yolk Powder 5 lb",
            'type_id' => 4,
            'price' => 94.99,
            'image1' => 'a61vwyXjui6L._SL1500_.jpg',
            'image2' => 'a71f2u1D5GDL._SL1500_.jpg',
            'image3' => 'a715L0pfqNHL._SL1500_.jpg',
            'image4' => 'a712tsB0pt3L._SL1500_.jpg',
            'description' => 'Package contains the equivalent of 283 egg yolks. Mix 1.5 tablespoons egg yolk dried with 1 tablespoon of water to have an equivalent of 1 fresh egg yolk.
            An excellent source of vitamins. Dried egg yolk can be substituted for nearly any baking or cooking needs requiring egg yolks.',
            'infomation' => 'Dried Egg Yolks, Sodium Silicoaluminate',
            'weight' => 1.4,
            'created_at' => '2022-05-08',
            'exp' => '2024-04-08',
        ]);
        //Egg number3
        DB::table('products')->insert([
            'name' => 'Fresh Quail Eggs(24)',
            'type_id' => 4,
            'price' => 42.87,
            'image1' => 'b51EAeuPP7tL.jpg',
            'image2' => 'b51PGbYFljgL.jpg',
            'image3' => 'b515EDs78ecL.jpg',
            'image4' => 'b51+4+E9k6HL.jpg',
            'description' => "You are in for a treat! Quail eggs are as delicious as they are nutritious. These eggs were laid by lovingly tended quail from Sweet Reasons Farm in North Carolina. They can be used in place of regular eggs in any recipe, but add a unique depth of flavor that can't be matched.. Consider making tiny delectable deviled eggs that will be a hit at your next event. Quail eggs have the highest protein content and the lowest cholesterol of any poultry. These super-food powerhouses have immunity stimulating properties that help keep you well. They are also loaded with vitamins and minerals that help feed your health and your tastebuds!",
            'infomation' => 'Quail Eggs, Sodium Silicoaluminate, egg yolk can be substituted for nearly any baking or cooking needs requiring egg yolks.',
            'weight' => 0.5,
            'created_at' => '2022-04-08',
            'exp' => '2022-05-23',
        ]);
        //Egg number4
        DB::table('products')->insert([
            'name' => 'Roland Foods Quail Eggs, Specialty Imported Food, 15-Ounce Can (Pack of 6)',
            'type_id' => 4,
            'price' => 23.87,
            'image1' => 'cA18HIOXkBbL._SL1500_.jpg',
            'image2' => 'c91jceMqxdkL._SL1500_.jpg',
            'image3' => 'c81BdtNHbc-L._SL1500_.jpg',
            'image4' => 'c31V3nfBnifL.jpg',
            'description' => 'Save prep time in the kitchen while creating unique and delicious dishes with Roland Foods Quail Eggs. Small and consistently sized, these canned quail eggs are already cooked and conveniently pre-shelled so they can be enjoyed directly from the can after a quick rinse. They are a great choice for recipes that call for precooked eggs, such as deviled eggs or scotch eggs, and can be quickly sliced and added to salads or used as a garnish',
            'infomation' => 'Quail Eggs, Water',
            'weight' => 0.8,
            'created_at' => '2022-04-05',
            'exp' => '2023-04-05',
        ]);
        //Egg number5
        DB::table('products')->insert([
            'name' => 'Organic Valley, Organic Free-Range Extra Large Brown Eggs - 1 Dozen (12 ct)',
            'type_id' => 4,
            'price' => 5.99,
            'image1' => 'd61mZ2CG24lL._SL1000_.jpg',
            'image2' => 'd81oqCbKmO0L._SL1500_.jpg',
            'image3' => 'd91bxantYc1L._SL1500_.jpg',
            'image4' => 'd91gI6a54icL._SL1500_.jpg',
            'description' => 'These extra large eggs are the perfect ingredient in your favorite recipe or as a main dish. Because of their diverse and nutritious diets, our organic free range eggs from hens on our local, family farms have deep-yellow yolks and an even better taste. Add organic protein to your plate with these organic eggs, sitting at around 70 calories inside every shell.',
            'infomation' => 'Egg',
            'weight' => 0.9,
            'created_at' => '2022-05-04',
            'exp' => '2022-05-15',
        ]);
        //Egg number6
        DB::table('products')->insert([
            'name' => 'Fresh Duck Eggs(6)',
            'type_id' => 4,
            'price' => 24.9,
            'image1' => 'e31v17mFOb5L.jpg',
            'image2' => 'e315Nbn4achL.jpg',
            'image3' => 'e41fIX6dbDZL.jpg',
            'image4' => 'e41UuSrc7twL.jpg',
            'description' => 'Fresh duck eggs from my small farm. Ducks have a huge field and spend their days foraging, swimming and eating.',
            'infomation' => 'Duck Eggs',
            'weight' => 0.5,
            'created_at' => '2022-05-04',
            'exp' => '2022-05-18',
        ]);
        //Egg number7
        DB::table('products')->insert([
            'name' => 'Jalapeno Pickled Qual Eggs 16 oz Glass Jars',
            'type_id' => 4,
            'price' => 16.99,
            'image1' => 'f6152THom1ZL._SL1500_.jpg',
            'image2' => 'f61j2ZWWDrZL._SL1500_.jpg',
            'image3' => 'f41Ji7c8jOyL.jpg',
            'image4' => 'f61CJD7+UGfL._SL1500_.jpg',
            'description' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'infomation' => 'Quail Eggs, vinegar, water, pikled, jalapenos, salt, garilic and spices',
            'weight' => 0.8,
            'created_at' => '2022-05-12',
            'exp' => '2022-05-20',
        ]);
        //Egg number8
        DB::table('products')->insert([
            'name' => 'Eggylicious Egg Yolk Powder',
            'type_id' => 4,
            'price' => 25.59,
            'image1' => 'g51ls4Gf9hWL._SL1000_.jpg',
            'image2' => 'g71aQEzcgSyL._SL1000_.jpg',
            'image3' => 'g615b2b6x4DL._SL1000_.jpg',
            'image4' => 'g61S1zt4c3sL._SL1000_.jpg',
            'description' => 'Our Dried Standard Egg Yolk Powder is made from fresh, clean, domestic chicken eggs after being properly washed, sanitized and inspected. The egg yolks are separated and inspected again before being filtered, pasteurized and dried under continuous examination. It is prepared under strict inspection and complying with all the regulations and standards, containing its original authentic taste.',
            'infomation' => 'Egg yold power,. Water',
            'weight' => 0.4,
            'created_at' => '2022-04-02',
            'exp' => '2023-04-02',
        ]);
        //Egg number9
        DB::table('products')->insert([
            'name' => 'Vital Farms 1 Dozen Pasture-Raised Eggs, Large, Brown, Grade A Certified Humane, 12 Ct',
            'type_id' => 4,
            'price' => 12.25,
            'image1' => 'h81AnEgw+12L._SL1500_.jpg',
            'image2' => 'h91GUuvcAX8L._SL1500_.jpg',
            'image3' => 'h813R9W-JrtL._SL1500_.jpg',
            'image4' => 'h81PuE-Lo8SL._SL1500_.jpg',
            'description' => 'Our mission is to bring ethical food to the table. We do everything we can to improve the lives of people, animals, and planet through food. Whether it’s giving the girls year-round outdoor access, supporting family farmers, enabling you to trace your eggs back to the farm, or debunking misleading animal welfare claims, you can always trust Vital Farms to be Where Honest Food is Raised.',
            'infomation' => 'Egg',
            'weight' => 0.3,
            'created_at' => '2022-05-01',
            'exp' => '2022-05-05',
        ]);
        //Egg number10
        DB::table('products')->insert([
            'name' => 'Organic Valley Smart Eggs Extra Large Free Range Organic Eggs',
            'type_id' => 4,
            'price' => 11.99,
            'image1' => 'i71-+Pi0TwzL._SL1500_.jpg',
            'image2' => 'i81izaRVDYcL._SL1500_.jpg',
            'image3' => 'i81M1iENeUEL._SL1500_.jpg',
            'image4' => 'i91mZ6Gw04qL._SL1500_.jpg',
            'description' => 'Because of their diverse and nutritious diets, eggs from our happy chickens have deep-yellow yolks and an even better taste. Every Organic Valley egg offers 6 grams of protein, around 60 calories, and a great taste.',
            'infomation' => 'Egg',
            'weight' => 0.3,
            'created_at' => '2022-05-05',
            'exp' => '2022-05-08',
        ]);
        //Egg number11
        DB::table('products')->insert([
            'name' => 'Cooked Salted Duck Eggs (8 Pieces)',
            'type_id' => 4,
            'price' => 22.45,
            'image1' => 'k81wKbhcFXZL._SL1500_.jpg',
            'image2' => 'k81qh5IvPxOL._SL1500_.jpg',
            'image3' => 'ktrung-muoi-kho-thumbnail.jpg',
            'image4' => 'ktrung-muoi.jpg',
            'description' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'infomation' => 'Salted Duck Eggs ',
            'weight' => 0.4,
            'created_at' => '2022-09-04',
            'exp' => '2022-09-09',
        ]);
        //Egg number12
        DB::table('products')->insert([
            'name' => 'Future Essential Canned Powdered Eggs, 18 Serving per Container',
            'type_id' => 4,
            'price' => 25.19,
            'image1' => 'l71FTnHLYJaL._AC_SL1500_.jpg',
            'image2' => 'l81j3N84oIkL._AC_SL1500_.jpg',
            'image3' => 'l81h7GZKfqXL._AC_SL1500_.jpg',
            'image4' => 'l71JxTmvltVL._AC_SL1500_.jpg',
            'description' => 'QUALITY AND SAFETY: The eggs are spray dried and pasteurized in the USA for optimal quality and safety. Powdered Whole Eggs are produced though a special process designed to provide a free flowing powder that has been pasteurized for your safety.',
            'infomation' => 'Eggs',
            'weight' => 0.4,
            'created_at' => '2022-09-09',
            'exp' => '2023-09-10',
        ]);

        //Milk number1
        DB::table('products')->insert([
            'name' => 'Horizon Organic Shelf-Stable 1% Low Fat Milk Boxes, Chocolate, 18 Pack',
            'type_id' => 5,
            'price' => 30.73,
            'image1' => 'a81Cc2-VwwlS._SL1500_.jpg',
            'image2' => 'a81j4ccwHjuS._SL1500_.jpg',
            'image3' => 'a81knuahmh3L._SL1500_.jpg',
            'image4' => 'a819kApmeuUS._SL1500_.jpg',
            'description' => 'Take the organic goodness of Horizon milk on-the-go with Horizon Organic UHT 1% Low-Fat Chocolate Milk Boxes. Great as a lunchbox stuffer or snack, these single-serve 1% milk boxes offer a wholesome alternative to juice boxes. Each organic milk box provides many nutrients, including vitamin A, vitamin D, and 8 grams of protein. And thanks to their special packaging, these shelf-stable milk boxes lock in delicious taste without refrigeration. *No significant difference has been shown between milk from rbST-treated & non rbST-treated cows.',
            'infomation' => 'Grade A Lowfat Organic Milk, Organic Cane Sugar, Organic Cocoa, Organic Natural Flavor, Salt, Vitamin A Palmitate, Vitamin D3, Gellan Gum',
            'weight' => 1.6,
            'created_at' => '2022-04-08',
            'exp' => '2023-04-10',
        ]);
        //Milk number2
        DB::table('products')->insert([
            'name' => 'Organic Valley, Milk Boxes, Shelf Stable 1% Milk, Healthy Snacks, 8 Fl Oz (Pack of 24)',
            'type_id' => 5,
            'price' => 36.86,
            'image1' => 'b71TRklMzPBL._SL1500_.jpg',
            'image2' => 'b41jhVqhmQjL.jpg',
            'image3' => 'b51TxOHjvPhL.jpg',
            'image4' => 'b1cAvAPWSnL.jpg',
            'description' => "All the taste and nutrition of a tall glass of milk, without the glass. Organic Valley's milk is the only organic milk-box available! Whether your kids are enjoying a mid-morning snack and washing down a peanut butter sandwich at lunch, Organic Valley milk boxes make it easy to enjoy a delicious organic treat. Each milk box is packed with vitamins, 7 grams of protein and nothing but organic goodness on the inside!",
            'infomation' => 'Organic Grade A lowfat milk, Vitamin A Palmitate, Vitamin D3',
            'weight' => 0.8,
            'created_at' => '2022-10-11',
            'exp' => '2023-10-15',
        ]);
        //Milk number3
        DB::table('products')->insert([
            'name' => 'NesQuik Protein Chocolate & Strawberry',
            'type_id' => 5,
            'price' => 33,
            'image1' => 'c81PKAaZIhdL._SL1500_.jpg',
            'image2' => 'c81H185pMAOL._SL1500_.jpg',
            'image3' => 'c81Y9EgNWoLL._SL1500_.jpg',
            'image4' => 'c912Ndo1Nb8L._SL1500_.jpg',
            'description' => "All the taste and nutrition of a tall glass of milk, without the glass. Organic Valley's milk is the only organic milk-box available! Whether your kids are enjoying a mid-morning snack and washing down a peanut butter sandwich at lunch, NesQuik milk boxes make it easy to enjoy a delicious organic treat. Each milk box is packed with vitamins, 7 grams of protein and nothing but organic goodness on the inside!",
            'infomation' => 'Lowfat Milk, Sugar, and less than 2% of cocoa processed with alkali, calcium carbonate, cellulose gel, natural and artificial flavor, carrageenan, salt, gellan gum, cellulose gum, vitamin A palmitate, vitamin D3',
            'weight' => 1.2,
            'created_at' => '2022-10-11',
            'exp' => '2023-10-15',
        ]);
        //Milk number4
        DB::table('products')->insert([
            'name' => 'Organic Fresh Frozen Camel Milk - Fresh Flavor with Health Benefits - Raw & Natural Grade A - Gently Pasteurized from Healthy Camels in Midwest - Made In The USA [6 Pack]',
            'type_id' => 5,
            'price' => 119,
            'image1' => 'd71XNNWHVeUL._SL1500_.jpg',
            'image2' => 'd81wGXFffH-L._SL1500_.jpg',
            'image3' => 'd81t8XKSc3cL._SL1500_.jpg',
            'image4' => 'd81UFGI770pL._SL1500_.jpg',
            'description' => 'The nutritional benefits of camel milk provide the foundation for its health benefits. Studies on the health benefits of camel milk are on-going and show promising results. One of the major findings of camel milk is the presence of lactoferrin.',
            'infomation' => 'Pure Milk',
            'weight' => 2.5,
            'created_at' => '2022-04-12',
            'exp' => '2022-10-12',
        ]);
        //Milk number5
        DB::table('products')->insert([
            'name' => 'Yoo-hoo Chocolate Drink, 6.5 fl oz boxes (Pack of 32)',
            'type_id' => 5,
            'price' => 328,
            'image1' => 'e81WrvWauVmS._SL1500_.jpg',
            'image2' => 'e81XP3VFvhgS._SL1500_.jpg',
            'image3' => 'e719EzOXtheS._SL1500_.jpg',
            'image4' => 'e91LWZbhb1DS._SL1500_.jpg',
            'description' => 'Shake up some delicious fun with the classic chocolate taste of Yoo-hoo. With a chocolaty goodness that goes down smooth, Yoo-hoo delivers the refreshing fun flavor you won’t find anywhere else. Summer just isn’t the same without sipping on an ice-cold Yoo-hoo at the beach, by the pool, on a long family road trip or just chilling in your backyard. For almost 100 years, Yoo-hoo Chocolate Drink has been delivering refreshing flavor that chocolate lovers want',
            'infomation' => "WATER, HIGH FRUCTOSE CORN SYRUP, WHEY (FROM MILK), CONTAINS LESS THAN 2% OF COCOA (ALKALI PROCESS), NONFAT DRY MILK, NATURAL AND ARTIFICIAL FLAVORS, SODIUM CASEINATE (FROM MILK), CORN SYRUP SOLIDS, CALCIUM PHOSPHATE, DIPOTASSIUM PHOSPHATE, PALM OIL, GUAR GUM, XANTHAN GUM, MONO AND DIGLYCERIDES, SALT, SPICE, SOY LECITHIN, NIANCINAMIDE (VITAMIN B3), SUCRALOSE, VITAMIN A PALMITATE,RIBOFLAVIN (VITAMIN B2), VITAMIN D3.",
            'weight' => 2.5,
            'created_at' => '2022-04-12',
            'exp' => '2023-04-12',
        ]);
        //Milk number6
        DB::table('products')->insert([
            'name' => 'Goat Milk Soap Handmade Made From Local Farm Fresh Milk !',
            'type_id' => 5,
            'price' => 152.5,
            'image1' => 'f51rz-mH9fuL._SL1000_.jpg',
            'image2' => 'f71-4QjfAkqL._SL1000_.jpg',
            'image3' => 'f71DlBUucm0L._SL1000_.jpg',
            'image4' => 'f716t+WoKOQL._SL1000_.jpg',
            'description' => "When using our products/goat's milk soap bars, rinse to remove excess lather and place it on a soap dish with a drainer to avoid contact with excess water. This helps extend the life of your soap.",
            'infomation' => 'Olive Oil , farm fresh goat milk. , organic coconut oil',
            'weight' => 2.2,
            'created_at' => '2022-04-12',
            'exp' => '2022-06-12',
        ]);
        //Milk number7
        DB::table('products')->insert([
            'name' => 'Horizon Organic Shelf-Stable Whole Milk Boxes, 8 oz., 12 Pack',
            'type_id' => 5,
            'price' => 99.87,
            'image1' => 'g81DMEc7hH+L._SL1500_.jpg',
            'image2' => 'g81JKfZRCihL._SL1500_.jpg',
            'image3' => 'g817zDfrIszL._SL1500_.jpg',
            'image4' => 'g81QWXsF8I-L._SL1500_.jpg',
            'description' => 'Take the organic goodness of Horizon milk on-the-go with Horizon Organic Whole Milk Boxes. Great as a lunchbox stuffer or snack, these single-serve milk boxes offer a wholesome alternative to juice boxes. Each organic milk box provides many nutrients, including vitamin A, vitamin D, and 8 grams of protein. And thanks to their special packaging, these shelf-stable milk boxes lock in delicious taste without refrigeration. *No significant difference has been shown between milk from rbST-treated & non rbST-treated cows.',
            'infomation' => 'Lowfat Milk, Sugar, and less than 2% of cocoa processed with alkali, calcium carbonate, cellulose gel',
            'weight' => 1.8,
            'created_at' => '2022-03-02',
            'exp' => '2022-09-02',
        ]);
        //Milk number8
        DB::table('products')->insert([
            'name' => 'Airlife YUP! Low Fat, Ultra-Filtered Milk, Rich Chocolate Flavor, All Natural Flavors (Packaging May Vary), 14 fl oz, 12 count',
            'type_id' => 5,
            'price' => 33.4,
            'image1' => 'h81uBsG8DLiL._SL1500_.jpg',
            'image2' => 'h813g0wklOGL._SL1500_.jpg',
            'image3' => 'h71oplvwhCWL._SL1500_.jpg',
            'image4' => 'h71IgA9Cvp9L._SL1500_.jpg',
            'description' => 'YUP Rich Chocolate is a ridiculously delicious ultra filtered milk Packaged in single serve shelf stable bottles that you can grab whenever and wherever you want even on the go Our unique ultra filtration concentrates nutrients such as  protein and calcium and filters out lactose And while the flavor is totally where it’s at YUP also gives you nutritional benefit',
            'infomation' => 'filtered milk, drenched in flavor you can grab whenever and wherever you want-even on the go! Enjoy a variety of all-natural flavors, including Rich Chocolate, Smooth Vanilla, Very Strawberry and Dairy ‘Licious. And while the flavor is totally where it’s at, YUP!® also gives you the nutritional goods: it’s low-fat with 16g of protein and 25% less sugar*, and it’s jam-packed with Vitamins A and D',
            'weight' => 2.4,
            'created_at' => '2022-02-07',
            'exp' => '2023-02-07',
        ]);
        //Milk number9
        DB::table('products')->insert([
            'name' => 'Nestle Nesquik Protein Plus Milk Plastic Bottles - (Chocolate), 14 Fl Oz (Pack of 12)',
            'type_id' => 5,
            'price' => 27.94,
            'image1' => 'i81W2OshErrL._SL1500_.jpg',
            'image2' => 'i81GYy-w7tBL._SL1500_.jpg',
            'image3' => 'i91f8aMwiHtL._SL1500_.jpg',
            'image4' => 'i815eqIflR3L._SL1500_.jpg',
            'description' => "Nesquik Protein Plus Chocolate Nestlé Nesquik Protein Plus is made with 100% real milk and has 23g of protein in every 14 fluid ounce serving. It contains no artificial sweeteners and has 28% less sugar than the leading protein enhanced flavored milk*. Our signature chocolate taste comes from quality, cocoa beans, and because Nesquik is specially packaged you can store it in your pantry. So feel free to stock up but don't forget to refrigerate after opening",
            'infomation' => "LOWFAT MILK WITH VITAMIN A PALMITATE AND VITAMIN D3 ADDED, SUGAR, AND LESS THAN 2% OF NATURAL AND ARTIFICIAL FLAVORS, CALCIUM CARBONATE, CELLULOSE GEL, POTASSIUM CITRATE, CARRAGEENAN, CELLULOSE GUM, CARAMEL COLOR, SALT, RIBOFLAVIN FOR COLOR.",
            'weight' => 0.5,
            'created_at' => '2022-09-02',
            'exp' => '2023-09-02',
        ]);
        //Milk number10
        DB::table('products')->insert([
            'name' => 'Fairlife YUP! Low Fat Ultra-Filtered Milk, Classic White (Packaging May Vary), 14 Fl Oz, 12 Count',
            'type_id' => 5,
            'price' => 33.4,
            'image1' => 'l813Bw81L8lL._SL1500_.jpg',
            'image2' => 'l81b2w3J77fL._SL1500_.jpg',
            'image3' => 'l81wS9J37FtL._SL1500_.jpg',
            'image4' => 'l71OAN8xy8SL._SL1500_.jpg',
            'description' => 'Yup Classic White is a ridiculously delicious ultra filtered milk Packaged in single serve shelf stable bottles that you can grab whenever and wherever you want even on the go Our unique ultra filtration concentrates nutrients such as protein and calcium and filters out lactose And while the flavor is totally where it’s at Yup also gives you nutritional benefits',
            'infomation' => 'Filtered Reduced Fat Grade A Milk, Sugar, Contains Less Than 1% of: Natural Flavors, Modified Food Starch, Cellulose Gel, Cellulose Gum, Lactase Enzyme, Acesulfame Potassium, Carrageenan, Sea Salt, Red Tomato-Lycopene (Color), Sucralose, Vitamin A Palmitate, Vitamin D3.',
            'weight' => 1.2,
            'created_at' => '2022-02-09',
            'exp' => '2023-02-09',
        ]);
        //Milk number11
        DB::table('products')->insert([
            'name' => 'fairlife YUP! Low Fat, Ultra-Filtered Milk, Very Strawberry Flavor, All Natural Flavors (Packaging May Vary), 14 Fl Oz, 12 count',
            'type_id' => 5,
            'price' => 33.4,
            'image1' => 'k71kAMQhBq+L._SL1500_.jpg',
            'image2' => 'k81jJQLoWFSL._SL1500_.jpg',
            'image3' => 'k71x7nBi6ZEL._SL1500_.jpg',
            'image4' => 'k71YFdw6CHNL._SL1500_.jpg',
            'description' => 'Yup very strawberry is a ridiculously delicious ultra filtered milk Packaged in single serve shelf stable bottles that you can grab whenever and wherever you want even on the go our unique ultra filtration concentrates nutrients such as protein and calcium and filters out lactose',
            'infomation' => 'Filtered Reduced Fat Grade A Milk, Sugar, Contains Less Than 1% of: Natural Flavors, Modified Food Starch, Cellulose Gel, Cellulose Gum, Lactase Enzyme, Acesulfame Potassium, Carrageenan, Sea Salt, Red Tomato-Lycopene (Color), Sucralose, Vitamin A Palmitate, Vitamin D3.',
            'weight' => 1.2,
            'created_at' => '2022-02-09',
            'exp' => '2023-02-09',
        ]);
        //Milk number12
        DB::table('products')->insert([
            'name' => 'fairlife YUP! Low Fat, Ultra-Filtered Milk, Smooth Vanilla Flavor, All Natural Flavors (Packaging May Vary), 14 fl oz, 12 count',
            'type_id' => 5,
            'price' => 33.4,
            'image1' => 'm81KB1QdilCL._SL1500_.jpg',
            'image2' => 'm717-Z0aACRL._SL1500_.jpg',
            'image3' => 'm81YtADtbqeL._SL1500_.jpg',
            'image4' => 'm719oMtQ0WuL._SL1500_.jpg',
            'description' => "While the flavor is totally where it’s at YUP also gives you nutritional benefits: it’s reduced fat *43% less fat than whole ultra filtered milk with 16g of protein and it’s jam packed with Vitamins A and D Enjoy YUP ready to drink reduced fat milk in a variety of all natural flavors including Cookies N' Creaminest Classic White Rich Chocolate and Very Strawberry.",
            'infomation' => 'Filtered Reduced Fat Grade A Milk, Sugar, Contains Less Than 1% of Natural Flavors, Modified Food Starch, Cellulose Gel, Cellulose Gum, Lactase Enzyme, Acesulfame Potassium, Carrageenan, Sea Salt, Sucralose, Vitamin A Palmitate, Vitamin D3.',
            'weight' => 1.2,
            'created_at' => '2022-02-09',
            'exp' => '2023-02-09',
        ]);
        //Drinks number1
        DB::table('products')->insert([
            'name' => 'Coca-Cola with Coffee - Dark Blend ZERO Sugar',
            'type_id' => 6,
            'price' => 35,
            'image1' => 'coca-dark-1.jpg',
            'image2' => 'coca-dark-2.jpg',
            'image3' => 'coca-dark-3.jpg',
            'image4' => 'coca-dark-4.jpg',
            'description' => '12 Pack | Dark Blend Coffee Zero Sugar | 12 fl oz. Slim Cans - 69 mg of caffeine in each 12 oz serving. Coca-Cola with Coffee, Infused with Brazilian Coffee. Sparking beverage that offers that great Coca-Cola taste infused with rich, luxurious coffee flavor, and provides a unique way to enjoy the everyday coffee experience. 
            Coke With Coffee | Sips like a Coke, finishes like a Coffee. | Grab Coca-Cola with Coffee and refresh your coffee break. Delicious: Whether you’re on-the-go, or looking for that afternoon pick-me-up, Coca-Cola with Coffee is the perfect soft drink for anyone who loves the refreshing Coca-Cola taste and the familiar taste of coffee.
            Variety: Coke with Coffee comes in three flavor varieties: Dark Blend, Vanilla, Caramel - plus Dark Blend Zero Sugar and Vanilla Zero Sugar. Every sip provides that “ahhh” Coca-Cola moment, with that smooth finish of a delicious coffee.',
            'infomation' => 'Item Form: Liquid
            Brand: Coca-Cola
            Flavor: Dark Blend ZERO
            Caffeine Content: Caffeinated
            Package Information: 12 Slim Cans of 12 ounces',
            'weight' => 4.2,
            'created_at' => '2022-11-16',
            'exp' => '2023-11-16',
        ]);
        //Drinks number2
        DB::table('products')->insert([
            'name' => 'Coca-Cola, 12 Fl Oz (pack of 24)',
            'type_id' => 6,
            'price' => 32,
            'image1' => '71fZ5L5lXaL._SL1500_.jpg',
            'image2' => '71MM7BgSrwL.jpg',
            'image3' => '712EUENnIZL.jpg',
            'image4' => '81sfgS.jpg',
            'description' => "The great taste of Coca-Cola has stood the test of time. And whatever you call it, nothing compares to the refreshing, crisp taste of Coca-Cola Original Taste, the delicious soda you know and love. The cool, bubbly taste of Coca-Cola Classic is the perfect partner for sunny days and lunch with friends. Grab a classic Coke to brighten your day at work, at home or out on an adventure with the people who matter most. There\'s never a bad time for a classic Coke. Stock your home pantry or office breakroom. 12-oz Coca-Cola cans come in a case of 24. Best enjoyed ice-cold for maximum refreshment. Grab a Coca-Cola Original Taste, a Diet Coke, or a Coke Zero Sugar, take a sip and find your “ahhh” moment. Enjoy Coca-Cola.', '12 FL OZ in each can 24 cans of Coca-Cola Original Taste—the refreshing, crisp taste you know and love Great taste since 1886.
            This sparkling beverage is best enjoyed ice-cold for maximum refreshment 34 mg of caffeine in each 12 oz serving. There's never a bad time for a classic Coke. Stock your home pantry or office breakroom. 12-oz Coca-Cola cans come in a case of 24.",
            'infomation' => "Sips like a Coke, finishes like a Coffee. | Grab Coca-Cola with Coffee and refresh your coffee break. Delicious: Whether you're on-the-go, or looking for that afternoon pick-me-up, Coca-Cola with Coffee is the perfect soft drink for anyone who loves the refreshing Coca-Cola taste and the familiar taste of coffee. Variety: Coke with Coffee comes in three flavor varieties: Dark Blend, Vanilla. Item Form: Liquid Brand: Coca-Cola. Flavor: Dark Blend ZERO. Caffeine Content: Caffeinated. Package Information: 12 Slim Cans of 12 ounces",
            'weight' => 9.5,
            'created_at' => '2022-12-09',
            'exp' => '2023-12-09',
        ]);
        //Drinks number3
        DB::table('products')->insert([
            'name' => 'Pepsi Soda, 12 Fl Oz (pack of 24)',
            'type_id' => 6,
            'price' => 26,
            'image1' => '81TNaRVGnmLSX679.jpg',
            'image2' => '71mhLJXPkOLSX679.jpg',
            'image3' => '815ReFpdKqLSX679.jpg',
            'image4' => '818gjOf5f1LSX679.jpg',
            'description' => 'Pepsi was born in New Bern, NC in 1898 and still bottled in the USA.
            Be it paired with your favorite meal, with friends at a sporting event, or just to celebrate an awesome day, we create moments of enjoyment that have inspired generations.
            Pepsi. Diet Pepsi. Pepsi Zero Sugar. The gang’s all here.
            Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'infomation' => 'Pack of 24, 12 oz. cans Carbonated Water, High Fructose Corn Syrup, Caramel Color, Sugar, Phosphoric Acid, Caffeine, Citric Acid, Natural Flavor.
            Only 150 calories per can Pepsi-the bold, refreshing, robust cola Perfect for parties, meals and celebrations big and small
            No fat, No cholesterol, Low sodium',
            'weight' => 8.5,
            'created_at' => '2022-12-09',
            'exp' => '2023-12-09',
        ]);
        //Drinks number4
        DB::table('products')->insert([
            'name' => 'Mountain Dew Soda, 7.5 Ounce Mini Cans, 10 Pack',
            'type_id' => 6,
            'price' => 12,
            'image1' => '81CNx7uyt9LSX679.jpg',
            'image2' => '81EXN3AYaeLSX679.jpg',
            'image3' => '81frPfA1DRLSL1500.jpg',
            'image4' => '91w4TOG4oGLSL1500.jpg',
            'description' => 'Mountain Dew, the original, the one that started it all. Mtn Dew exhilarates and quenches with its one of a kind taste. Enjoy the many varieties of Mtn Dew - Original, Diet, Code, Red, Voltage, Zero Sugar, and others! Carbonated Water, High Fructose, Corn Syrup, Concentrated Orange Juice, Citric Acid, Natural Flavor, Sodium Benzote,Caffiene, Sodium Citrate, Erythorbic Acid, Gum Arabic, Calcium Disodium Vegetable Oil Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.
            Great for celebrations, big and small.',
            'infomation' => '10 count of Mountain Dew 7.5 ounce sleek, mini cans—little cans, epic satisfaction
            The original, the one that started it al Mountain Dew Carbonated Water, High Fructose, Corn Syrup, Concentrated Orange Juice, Citric Acid, Natural Flavor, Sodium Benzote,Caffiene, Sodium Citrate, Erythorbic Acid, Gum Arabic, Calcium Disodium Vegetable Oil\r\nPerfect for parties, meals, and celebrations big and small Great for portion control - each can have only 110 calories\r\nBeverage container material- Metal',
            'weight' => 3.2,
            'created_at' => '2020-12-09',
            'exp' => '2022-06-09',
        ]);
        //Drinks number5
        DB::table('products')->insert([
            'name' => 'Diet Pepsi, 12 ounce Cans (pack of 24)',
            'type_id' => 6,
            'price' => 27.99,
            'image1' => '81LEuQazv9LSL1500.jpg',
            'image2' => '610no2LASdLSL1500.jpg',
            'image3' => '61ruTHDqcLLSL1500.jpg',
            'image4' => '714uC7qKtULSL1500.jpg',
            'description' => 'Pepsi was born in New Bern, NC in 1898 and still bottled in the USA. Be it paired with your favorite meal, with friends at a sporting event, or just to celebrate an awesome day, we create moments of enjoyment that have inspired generations Pepsi. Diet Pepsi. Pepsi Zero Sugar. The gang’s all here.
            With its light, crisp taste, Diet Pepsi gives you all the refreshment you need - with zero sugar, zero calories and zero carbs. Light. Crisp. Refreshing. Nothing refreshes like a Diet Pepsi.\r\nStatements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'infomation' => 'Flavor: Diet Pepsi
            Brand: Pepsi
            Weight: 0.75 Pounds
            Caffeine Content: 35 Milligrams
            Specialty: Sugar Free
            0 calories per can
            Light, crisp and refreshing
            Nothing refreshes like a Diet Pepsi.Does Not Contain Any of the 8 Major Allergens
            Includes (24) 12 oz cans
            Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 8,
            'created_at' => '2022-12-09',
            'exp' => '2023-12-09',
        ]);
        //Drinks number6
        DB::table('products')->insert([
            'name' => 'Diet 7UP Lemon Lime Soda, Zero Calories and Caffeine Free, 12 Fl Oz Cans (pack of 12)',
            'type_id' => 6,
            'price' => 18,
            'image1' => '81vQo5x0n6LSL1500.jpg',
            'image2' => '81rsFQJcWLSL1500.jpg',
            'image3' => '71l6npdEGpLSL1500.jpg',
            'image4' => '81ayvkhzjuLSL1500.jpg',
            'description' => 'Diet 7UP is now 7UP Zero Sugar! Feel refreshed by the balanced taste of 7UP Zero Sugar, made with the same crisp, iconic Lemon Lime flavors as Diet. 7UP is a fantastic drink on its own and is also a perfect addition to meals and recipes for any occasion. Whether you\'re looking to enjoy a refreshing lemon-lime soda or add a crisp, balanced flavor to a favorite recipe, 7UP is the perfect ingredient. 7UP is a low sodium carbonated soda option; from cocktails to mocktails to cooking and baking, do more at your next get-together with the refreshing taste of 7UP. Try one of our favorite food or drink recipes like Pineapple 7UP Side-Down Cupcakes. Combine 7UP with your favorite box cake mix and Maraschino cherries for a delicious twist on everyday baking. Top with crushed pineapples and whipped topping for an even better dessert or special occasion treat. Try a new drink recipe like this sweet pineapple-infused cocktail we call the 7UP Side-Down Cake. Combine your favorite cake flavored vodka, fresh orange juice, fresh pineapple juice and your favorite 7UP flavor. Then pour over ice and enjoy! Over 21, please drink responsibly.\r\nIngredients: FILTERED CARBONATED WATER, CITRIC ACID, POTASSIUM CITRATE, POTASSIUM BENZOATE (PRESERVATIVE), NATURAL FLAVORS, ASPARTAME, ACESULFAME POTASSIUM, CALCIUM DISODIUM EDTA (TO PROTECT FLAVOR)\r\nSome states impose a bottle deposit fee on certain beverages shipped to those states, and Amazon may not be able to ship these beverages to all locations.
            Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'infomation' => 'Flavor: Lemon Lime
            Brand: 7UP
            Weight: 0.78 Pounds
            Caffeine Content: Decaffeinated
            Volume	12 Fluid Ounces
            ZERO SUGAR: Formally, Diet 7UP, enjoy the crisp, clean, guilt-free taste of 7UP Zero Sugar any time of day
            CARBONATED SODA: Carbonated soda delivers the satisfying taste of lemon lime flavor every time
            CAFFEINE FREE: The great taste of 7UP Zero Sugar is caffeine-free, low in sodium and has zero sugar
            PERFECT PAIRING: 7UP Zero Sugar is a delight on its own or as the perfect ingredient in everything from cocktails and mocktails to grilling marinades and tasty desserts
            TRUSTED BRAND: Iconic and unique lemon lime flavor from the brand that brought you original 7UP, Bib-Label Lithiated Lemon-Lime Soda in October 1929',
            'weight' => 3.6,
            'created_at' => '2022-02-09',
            'exp' => '2023-02-09',
        ]);
        //Drinks number7
        DB::table('products')->insert([
            'name' => 'Sprite Lemon-Lime Natural-Flavored Soda Mini Cans Soft Drink - 30 Pack Cans (7.5 Oz)',
            'type_id' => 6,
            'price' => 35,
            'image1' => '61oAcl57w2LSL1500.jpg',
            'image2' => '712DvA42A5L._SL1500_.jpg',
            'image3' => '71RANlSW34L._SL1500_.jpg',
            'image4' => '716joF766RL._SL1500_.jpg',
            'description' => 'The OG, the flavor that started it all. Introduced in 1961, Sprite is the world\'s leading lemon-lime flavored soft drink. Made with 100% natural flavors, Sprite is a sparkling lemon-lime soda with a clean, crisp taste that really quenches your thirst. These Sprite Minis are the ideal complement to a variety of settings. Open up a case and share them with your friends and family for a refreshing break everyone will enjoy.\r\nSprite, 30 PK, 12 Fl oz Cans
            Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.
            Nothing quenches a demanding summer thirst like the lemon-lime freshness of Sprite soda. Next time you need a refreshing, crisp beverage, reach for a Sprite can to satisfy that craving with a cool, clean taste.',
            'infomation' => 'Flavor: Lemon
            Brand: FCV
            Caffeine Content: Decaffeinated
            Volume: 7.5 Fluid Ounces
            Package Information: Can
            Lemon-Lime Soda 100% Natural Flavors
            No Caffei e 30 Pack of Mini Cans (7.5 fl oz ea)
            Great for stocking up, parties, on-the-road, and more!',
            'weight' => 9.5,
            'created_at' => '2022-09-09',
            'exp' => '2023-09-09',
        ]);
        //Drinks number8
        DB::table('products')->insert([
            'name' => '7UP Cherry Zero (Diet) Soda Soft Drink, 12 oz 24 pack cans (Total of 288 FL OZ)',
            'type_id' => 6,
            'price' => 29.84,
            'image1' => '815ygbGLXjL._SL1500_.jpg',
            'image2' => '81Cs2OQmfJL._SL1500_.jpg',
            'image3' => '71zBdSas+qL._SL1200_.jpg',
            'image4' => '51w94w8pEHL.jpg',
            'description' => '7 UP Cherry Zero (Diet) Soda Soft Drink, 12 oz 24 pack cans (Total of 288 FL OZ)\r\nStatements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition. Carbonated soda delivers the satisfying taste of lemon lime flavor every time.\r\nCombine 7UP with your favorite box cake mix and Maraschino cherries for a delicious twist on everyday baking. Top with crushed pineapples and whipped topping for an even better dessert or special occasion treat. Try a new drink recipe like this sweet pineapple-infused cocktail we call the 7UP Side-Down Cake. Combine your favorite cake flavored vodka, fresh orange juice, fresh pineapple juice and your favorite 7UP flavor. Then pour over ice and enjoy! Over 21, please drink responsibly.',
            'infomation' => 'Zero (Diet) 7up Cherry
            12oz 24pk cans
            Great refreshing taste
            Deliciously unique flavor
            Package Dimensions: 12 x 12 x 6 inches; 
            11 Pounds
            UPC: 654690549747
            Manufacturer: variety pack
            ASIN: B08LPG61G5',
            'weight' => 5.6,
            'created_at' => '2022-08-26',
            'exp' => '2023-08-26',
        ]);
        //Drinks number9
        DB::table('products')->insert([
            'name' => 'Zevia Zero Calorie Soda, Black Cherry, 12 Ounce Cans (Pack of 24)',
            'type_id' => 6,
            'price' => 28,
            'image1' => '71v7an1OxhL._SL1500_.jpg',
            'image2' => '71McV1Gi-lL._SL1500_.jpg',
            'image3' => '71iP1DLx6wL._SL1500_.jpg',
            'image4' => '51A6YPuCIIL.jpg',
            'description' => 'Zevia Zero Calorie Beverages Clean, delicious, and refreshing sugar-free beverages. Zevia beverages offer bold flavors that you will love, without the harmful stuff found in traditional sodas and typical sugary carbonated beverages. All Zevia beverages are zero calorie and zero sugar, without sacrificing fun or flavor. Sweetened with the miracle that is stevia leaf, Zevia sodas, energy drinks, sparkling waters, and mixers offer delight the clean way.\r\nZero sugar, zero calories Simple, plant-based ingredients. Zevia Zero Calorie Soda, Black Cherry, Naturally Sweetened Soda, (24) 12 Ounce Cans; Black Cherry-flavored Carbonated Soda; Refreshing, Full of Flavor and Delicious with No Sugar (packaging may vary)
            Zero Sugar, Zero Calorie: Zevia offers a platform of naturally sweetened products that include a variety of flavors across Soda, Energy Drinks, Organic Tea, Mixers, Kidz drinks, and Sparkling Water Zevia\'s Mission: We feel strongly about the global health challenges from excess sugar intake and address it with a broad portfolio of delicious zero sugar, zero calorie, naturally sweetened beverages',
            'infomation' => 'Zevia Soda: Bursting with the taste of juicy ripe black cherries Zevia Black Cherry has won the hearts of cherry soda lovers everywhere; This stevia sweetened diet soda is cherrylicious and full of flavor\r\nBetter For You Alternative: Sweetened with plant-derived stevia leaf extract and available in 15 delicious flavors, Zevia sodas are naturally sweetened for you and your entire family to enjoy\r\nReal Ingredients: We use only real, plant-based ingredients, so all of our beverages are Non-GMO Project Verified, gluten-free, Kosher, vegan, and free of added color, artificial sweeteners and sodium.',
            'weight' => 5.8,
            'created_at' => '2022-06-07',
            'exp' => '2023-06-07',
        ]);
        //Drinks number10
        DB::table('products')->insert([
            'name' => 'Crush Orange Soda, 12 Fl Oz (pack of 12)',
            'type_id' => 6,
            'price' => 19.86,
            'image1' => '81hU6d3muTL._SL1500_.jpg',
            'image2' => '81n3aDyNOwL._SL1500_.jpg',
            'image3' => '81tZotljU+L._SL1500_.jpg',
            'image4' => '81MjIkaowxL._SL1500_.jpg',
            'description' => 'When it comes to creating playful memories with bold and exciting fruit flavor, no soft drink satisfies quite like a Crush. The leader of the Crush family, Crush Orange shocks your senses with a sweet and tangy citrus flavor that is 100 percent caffeine free. Crush has been a classic beverage loved by every generation since 1916. With the delicious taste of Crush Orange, this is where fun meets flavor.
            Ingredients: CARBONATED WATER, HIGH FRUCTOSE CORN SYRUP, CITRIC ACID, SODIUM BENZOATE (PRESERVATIVE), NATURAL FLAVORS, MODIFIED CORN STARCH, ESTER GUM, YELLOW 6, SALT, RED 40\r\nStatements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'infomation' => 'Flavor: Orange
            Brand: Crush
            Caffeine Content: Caffeine Free
            Package Information: Bottle
            Package Weight	14.22 Kilograms
            One 12 pack of 12 fluid ounce cans
            Orange soda
            Caffeine free
            Where Fun Meets Flavor',
            'weight' => 3.4,
            'created_at' => '2022-08-07',
            'exp' => '2023-08-07',
        ]);

        //Beers number1
        DB::table('products')->insert([
            'name' => 'Bundaberg Ginger Beer, 6.8 fl oz Cans, (24 Pack)',
            'type_id' => 7,
            'price' => 42.50,
            'image1' => '91wGUDjZvOL._SX390SY679SH20_.jpg',
            'image2' => 'A1e86+wEPNL._SX679_.jpg',
            'image3' => '81mcLKDRnSL._SX679_.jpg',
            'image4' => '81D-4nVLISL._SX679_.jpg',
            'description' => "Most drinks on the market are quick, factory mixes that take less than one hour to make. We carefully craft-brew our drinks for as long as it takes to achieve an exceptional taste. If that means taking seven days, we’ll take seven days.
            Our family-owned brewery now has a number of different beverages, but we'll always be known for one - our ginger beer. Bundaberg Ginger Beer is market leader in both Australia and New Zealand. So what makes us so popular? Maybe it's the unrivalled, naturally-brewed flavour. It could be our rich heritage or refreshing advertising. Whatever the reason, we're just happy to brew drinks that people know and love.
            Our Master Brewers craft brew over 3 days to our traditional family recipe; the same we've used for 4 generations.
            Real Australian Ginger - Brewed over 3 days - Australian family owned - Best enjoyed chilled",
            'infomation' => 'Carbonated Water, Ginger Root, Cane Sugar, Flavor, Citric Acid, Malic Acid, Preservatives (Potassium Sorbate, Sodium Benzoate), Antioxidant (Ascorbic Acid), Yeast, Aspartame, Stabilizer (Guar Gum), Acesulfame Potassium, Sucralose.
            Brand :	Bundaberg
            Weight : 0.11 Pounds
            Liquid Volume : 163.2
            Total Eaches : 24
            Package Weight : 5.76 Kilograms
            Package Dimensions : 14.65 x 11.22 x 5.79 inches; 1.76 Ounces
            UPC : 079373000795
            Manufacturer : Bundaberg Brewed Drinks
            ASIN : B08DBF7XP6',
            'weight' => 5.76,
            'created_at' => '2021-08-07',
            'exp' => '2022-08-07',
        ]);
        //Beers number2
        DB::table('products')->insert([
            'name' => 'Suntory ALL-FREE, Beer-Alternative, Non Alcohol, 6-pack, Ultra-Light, Ultra-Crisp, Ultra-Refreshing, 0.00% Alc. and 0 Calories (11.8 Fl Oz) from Japan',
            'type_id' => 7,
            'price' => 22.80,
            'image1' => '71bIcWoFC9L._SL1500_.jpg',
            'image2' => '71YraQxeS8L._SL1500_.jpg',
            'image3' => '61g6ZVkBn2L._SL1080_.jpg',
            'image4' => '614uWRF6zyL._SL1080_.jpg',
            'description' => 'In 2010, Suntory launched ALL-FREE in Japan. Made at the Tokyo-Musashino Brewery, this innovative new beverage boasts 0.00% alcohol, 0 calories, and no sugar—captivating Japanese beer lovers and leading Japan’s beer-like beverage market.Tokyo-Musashino Brewery is the heart of Suntory’s brewing legacy, and has been since opening in 1963. The company began as a wine maker in 1899 and since has grown into a world-class distiller and brewer. Innovative technology comes together with expertise and craftsmanship at Tokyo-Musashino Brewery to deliver a variety of popular beers. It began with a vision to free people from the idea that a beer-like beverage isn’t compatible with an active lifestyle. Suntory tested over 400 recipes before landing on the right one that offered satisfying beer flavor that was crisp and refreshing. Even today the company continues experimenting and tweaking the process for the ultimate drinking experience.Suntory is committed to quality and customer satisfaction, and when producing ALL-FREE, the company uses innovative production methods and carefully selected ingredients to provide ultimate enjoyment.
            Under the Federal Alcohol Administration Act, enforced by the Alcohol and Tobacco Tax and Trade Bureau (TTB), an “alcoholic beverage” contains not less than 0.5% alcohol by volume. ALL-FREE contains 0.00% alcohol by volume and is alcohol-free. Suntory is the alcoholic and non-alcoholic beverages manufacture, established in 1899, the maker of Yamazaki and Hibiki whiskies',
            'infomation' => 'It is made from carefully selected ingredients. Only two-row barley malt: Two-row barley contributes to the crisp beer flavor of ALL-FREE. Only Aroma Hops: Select aroma hops give ALL-FREE its bitterness and sophisticated bouquet. Only Tennensui Water: Quality natural mineral water (“Tennensui”) from renowned water resources in Japan
            Flavor : Beer like
            Brand : ALL-FREE
            Item Form : Carbonated beverage
            Weight : 0.04 Pounds
            Package Information : Aluminum Can',
            'weight' => 2.2,
            'created_at' => '2021-05-18',
            'exp' => '2022-05-18',
        ]);
        //Beers number3
        DB::table('products')->insert([
            'name' => 'Heineken 0.0% Non-Alcohol, Alcohol Free Beer, Great Taste, Zero Alcohol, 11.2 Fl Oz | Case of 24 Cans',
            'type_id' => 7,
            'price' => 42.87,
            'image1' => '81UITv4OpWL._SL1500_.jpg',
            'image2' => '61TtpmBlGJL._SL1500_.jpg',
            'image3' => '81Ilx1piPtL._SL1500_.jpg',
            'image4' => '71Iq8btTgEL._SL1500_.jpg',
            'description' => "Brewing a great tasting 0.0% alcohol lager beer, is it even possible? The master brewers at Heineken started from zero and spent years exploring, brewing, and tasting before they finally created a recipe defined by its refreshing fruity notes and soft malty body - prefectly balanced. One that deserves the Heineken mark. Of course with the Uncompromising Heineken characteristics since 1873: natural ingredients and Heineken's unique A-Yeast. It wasn't easy, but not impossible. Visit Heineken for more information.
            Brewing a great tasting 0.0% alcohol lager beer, is it even possible? Our master brewers started from zero and spent years exploring, brewing, and tasting before they finally created a recipe defined by its refreshing fruity notes and soft malty body - perfectly balanced.
            Of course with the uncompromising Heineken characteristics since 1873: made with natural ingredients and Heineken's unique A-Yeast. It wasn't easy, but not impossible.",
            'infomation' => 'Non-Alcoholic brewers started from zero and spent years exploring, brewing, and tasting One that deserves the Heineken mark.
            Brand : Heineken
            Liquid Volume : 11.2 Fluid Ounces
            Region of Origin : United States
            Total Eaches : 24
            Package Weight : 8.99 Kilograms',
            'weight' => 8.99,
            'created_at' => '2022-05-18',
            'exp' => '2023-05-18',
        ]);
        //Beers number4
        DB::table('products')->insert([
            'name' => 'Bud Light, 12 pk, 12 oz cans, 4.2% ABV',
            'type_id' => 7,
            'price' => 42.87,
            'image1' => '71Rrc5udrKL._AC_SL1500_.jpg',
            'image2' => '81efVAseW1L._AC_SL1500_.jpg',
            'image3' => '71Yc-7WwBPL._AC_SL1500_.jpg',
            'image4' => '71LqZ-5KO0L._AC_SL1500_.jpg',
            'description' => "Bud Light is a premium beer with incredible drinkability that has made it a top selling American beer that everybody knows and loves. This light beer is brewed using a combination of barley malts, rice and a blend of premium aroma hop varieties. Featuring a fresh, clean taste with subtle hop aromas, this light lager delivers ultimate refreshment with its delicate malt sweetness and crisp finish. Bud Light is made with no preservatives or artificial flavors. Grab this pack of beer cans when you're in charge of providing cold beer or simply want to keep a pack in your fridge.
            We recommend that you do not solely rely on the information presented and that you always read labels, warnings, and directions before using or consuming a product. For additional information about a product, please contact the manufacturer. Content on this site is for reference purposes and is not intended to substitute for advice given by a physician, pharmacist, or other licensed health-care professional. You should not use this information as self-diagnosis or for treating a health problem or disease. Contact your health-care provider immediately if you suspect that you have a medical problem. Information and statements regarding dietary supplements have not been evaluated by the Food and Drug Administration and are not intended to diagnose, treat, cure, or prevent any disease or health condition. Amazon.com assumes no liability for inaccuracies or misstatements about products.",
            'infomation' => 'Ingredients Water; Barley; Rice; Hops. While we work to ensure that product information is correct, on occasion manufacturers may alter their ingredient lists. Actual product packaging and materials may contain more and/or different information than that shown on our Web site.
            12 pack of 12 fl oz cans of Bud Light Beer
            Premium light lager brewed in the USA
            American beer with a fresh, clean taste and a refreshing, crisp finish
            Made with a blend of premium aroma hop varieties, barley malts, rice and water
            Brewed with hand selected hops that add the right amount of floral notes and bitterness',
            'weight' => 4.08,
            'created_at' => '2022-02-18',
            'exp' => '2023-02-18',
        ]);
        //Beers number5
        DB::table('products')->insert([
            'name' => 'Buckler Non-alcoholic Beer Brewed in Holland By Heineken 6 Bottles',
            'type_id' => 7,
            'price' => 21.49,
            'image1' => '7167zms28CL._SL1276_.jpg',
            'image2' => '51H-elyn3nL.jpg',
            'image3' => '51XkHWhYfEL.jpg',
            'image4' => '41fUlXa0T8L.jpg',
            'description' => 'Produced by Heineken great taste. Buckler Non-alcoholic Beer is a premium beer with incredible drinkability. 0.0% alcohol lager beer, is it even possible? Our master brewers started from zero and spent years exploring, brewing, and tasting before they finally created a recipe defined by its refreshing fruity notes and soft malty body - perfectly balanced. We recommend that you do not solely rely on the information presented and that you always read labels, warnings, and directions before using or consuming a product. For additional information about a product, please contact the manufacturer. Content on this site is for reference purposes and is not intended to substitute for advice given by a physician, pharmacist, or other licensed health-care professional. You should not use this information as self-diagnosis or for treating a health problem or disease. Contact your health-care provider immediately if you suspect that you have a medical problem. Information and statements regarding dietary supplements have not been evaluated by the Food and Drug Administration and are not intended to diagnose, treat, cure, or prevent any disease or health condition. Amazon.com assumes no liability for inaccuracies or misstatements about products.',
            'infomation' => 'Ingredients Water; Barley; Rice; Hops. While we work to ensure that product information is correct, on occasion manufacturers may alter their ingredient lists. Actual product packaging and materials may contain more and/or different information than that shown on our Web site.
            6 Bottles of Buckler Non-alcoholic Beer Brewed
            Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 4.5,
            'created_at' => '2021-12-20',
            'exp' => '2022-12-18',
        ]);
        //Beers number6
        DB::table('products')->insert([
            'name' => 'Fever-Tree Premium Ginger Ale, No Artificial Sweeteners, Flavorings or Preservatives, 5.07 Fl Oz (Pack of 8)',
            'type_id' => 7,
            'price' => 35,
            'image1' => '816P417ew2L._SL1500_.jpg',
            'image2' => '71+wgcAhpVL._SL1500_.jpg',
            'image3' => '71ATodDHB4L._SL1500_.jpg',
            'image4' => '81H0dQFRwOL._SL1500_.jpg',
            'description' => 'By using a unique blend of three of the world’s finest naturally sourced gingers, subtle botanical flavors and English spring water, We have created a delicious ginger Ale with an authentic and refreshing taste and aroma. Perfectly balanced to enhance the flavor notes of the finest whiskies, bourbons and rums. Gluten free. Non-GMO certified. Naturally sourced ingredients, no artificial sweeteners.
            FLAVOR: A distinctive ginger flavor created by blending the world’s finest gingers. Added complexity comes from supportive citrus notes, resulting in an overwhelmingly clean finish – making this the perfect mixer for dark Spirits
            NATURALLY SOURCED: From Cochin in India, we source a type of ginger that lends the drink a rich and earthy, almost chocolatey flavor, from the Ivory Coast
            PREMIUM MIXER: Perfectly balanced to enhance the flavor notes of the finest whiskies, bourbons and rums',
            'infomation' => "Carbonated Spring Water, Sugar, Acid: Citric Acid, Natural Ginger Flavouring with other Natural Flavourings, Caramel. TEXTURE: High carbonation delivers the aromas and taste in a classic, refreshing style; TOTAL CARB: 16.8 g per 200ml serving
            GINGER ALE: By using a unique blend of three of the world's finest naturally sourced gingers, subtle botanical flavors and spring water, we have created a delicious ginger ale with an authentic and refreshing taste and aroma. Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.",
            'weight' => 2.2,
            'created_at' => '2022-01-01',
            'exp' => '2023-01-18',
        ]);
        //Beers number7
        DB::table('products')->insert([
            'name' => 'W&P Craft Cocktail Syrup Set, Old Fashioned, Moscow Mule, Spicy Margarita | Variety Pack, 8 Ounce Each, 3 Bottles | Cocktail Mixer, Handcrafted in Small Batches, Craft Cocktail, Bar Collection',
            'type_id' => 7,
            'price' => 22.8,
            'image1' => '817r-VO6zjL._AC_SL1500_.jpg',
            'image2' => '819rVevKiBL._AC_SL1500_.jpg',
            'image3' => '71irEGIlvpL._AC_SL1500_.jpg',
            'image4' => '715j0g0bmQL._AC_SL1500_.jpg',
            'description' => 'Enjoying a top, shelf cocktail shouldn’t require regular trips to the store. Made with cane sugar, real fruit, and premium spices, these custom syrups (+ a shot of the hard stuff ) are all you need to craft a delicious cocktail. Makes 48 cocktails. Made in the USA. This product is labelled to United States standards and may differ from similar products sold elsewhere in its ingredients, labeling and allergen warnings. ELEVATE YOUR COCKTAILS: The original Old Fashioned, Moscow Mule and Spicy Margarita Craft Cocktail Syrups are hand-crafted and designed to make delicious cocktails. Each 8 ounce bottle (3 included) makes up to 16 drinks! PREMIUM INGREDIENTS: Carefully crafted from cane sugar, real fruit and premium spices, these custom syrups are all you need to craft great cocktails -- just add your favorite spirits! Made in the USA.',
            'infomation' => 'This product is labelled to United States standards and may differ from similar products sold elsewhere in its ingredients, labeling and allergen warnings. Old Fashioned: Water, Demerara Cane Sugar, Bitters (Bitters (Extracts of Cinnamon, Clove, Jamaican Allspice, Black Peppercorns, Caraway and Other Spices), Natural Flavor, Ascorbic Acid (vitamin C). Moscow Mule: Sugar, water, ginger juice, lime juice concentrate, natural flavors, and ascorbic acid (vitamin C). Spicy Margarita: Sugar, water, lime juice concentrate, citric acid, natural flavors, chili pepper extract, ascorbic acid (vitamin C). THE PERFECT GIFT: A perfect gift for bachelor/bachelorette parties, weekend getaways, stocking stuffers, or for anyone who wants to upgrade their bar cart with delicious, top-notch ingredients.',
            'weight' => 1.2,
            'created_at' => '2021-12-01',
            'exp' => '2022-12-01',
        ]);
        //Beers number8
        DB::table('products')->insert([
            'name' => 'Q Mixers Elderflower Tonic Water, Premium Cocktail Mixer, 7.5 oz (12 Cans)',
            'type_id' => 7,
            'price' => 29.99,
            'image1' => '61ZppoB8-MS._SL1500_.jpg',
            'image2' => '71Sp8506ZZS._SL1500_.jpg',
            'image3' => '71PC1T6sNQS._SL1500_.jpg',
            'image4' => '81Be6f+CXiS._SL1500_.jpg',
            'description' => "Q Elderflower Tonic Water is fragrant, crisp, and clean with high carbonation, so it adds an unmistakable floral edge to your favorite cocktail. Made with real Quinine from Peru, Q Tonic Water is less sweet so the subtleties of a great spirit shine through. Make your drink spectacular. It was a warm summer night in Brooklyn and some good friends were in my backyard for gin & tonics. A few drinks in, my teeth felt sticky. I picked up the bottle of tonic water. 32 grams of high fructose corn syrup! Artificial flavors. And artificial preservatives. Sara was drinking a Sprite. I asked to see the can.
            'Do you know that tonic water is virtually the same thing as Sprite?' 'Really?'   
            Maybe it was the gin, but the idea lingered. Justin brought this great bottle of Tanqueray over. And we were mixing it drink after drink with something lousy. The moon was shining down on the table. The light caught the gin, transforming it into a glowing orb of green goodness. Next to it, the plastic tonic water bottle with its label peeling off and its contents going flat looked particularly decrepit.
            I realized I should make a superior tonic water. One good enough to mix with my favorite gins - less sweet and made from real ingredients.     
            I spent four years on it. I tracked down fantastic ingredients. Made the recipe in my Brooklyn kitchen. And spent late nights agonizing with a designer to make a bottle as beautiful as the liquid it holds.            
            I came up with a spectacular tonic water. Immediately some of the world's finest bars, restaurants, and retailers started buying it from me. In New York City my Dad and I delivered it ourselves. Then we got a bunch of press coverage and some larger chains joined them. And soon I was being asked for other carbonated mixers as tasty and as high a quality as Q Tonic Water.",
            'infomation' => "I came up with a spectacular tonic water. Immediately some of the world's finest bars, restaurants, and retailers started buying it from me. In New York City my Dad and I delivered it ourselves. Then we got a bunch of press coverage and some larger chains joined them. And soon I was being asked for other carbonated mixers as tasty and as high a quality as Q Tonic Water. carbonated water, organic agave, citric acid, ginger extract, extracts of chili pepper, coriander, caradamom
            For each Q drink I agonize like I did with Q Tonic Water. I source the absolute best ingredients I can find and then tinker and tinker with the recipe until I come up with something I love. Something spectacular.",
            'weight' => 2.8,
            'created_at' => '2022-02-01',
            'exp' => '2023-02-01',
        ]);
        //Beers number9
        DB::table('products')->insert([
            'name' => 'Twang Flavored Beer Salt, Lime, 1.4 Ounce Mini Bottles (24 Count Display Pack)',
            'type_id' => 7,
            'price' => 36.99,
            'image1' => '81ApuNGPb0L._SL1500_.jpg',
            'image2' => '71glwOqChSL._SL1500_.jpg',
            'image3' => '91amRzTek0L._SL1500_.jpg',
            'image4' => '91rnz9bZIiL._SL1500_.jpg',
            'description' => 'Lime Flavored Beer Salt: This bold lime flavor is a perfect partner to any Mexican import, domestic lager, beer-rita, or tequila. Add flavor & fun to special events & everyday activities! Portable Flavor & Fun: Inspired by the Latino tradition of adding citrus & salt to beer. Sprinkle our beer salt onto your bottle, can or mug & take the pocket-sized mini beer bottle with you anywhere!
            Beer Salt is a delicious, citrus-flavored salt inspired by the Latino tradition of adding citrus and salt to beer. Sprinkle our salt combination onto your bottle, can or mug, and take the convenient pocket-sized mini beer bottle with you wherever you go to add flavor and fun to special events and everyday activities.
            Lime- This bold lime flavor is a perfect and convenient partner to any Mexican import.
            Lemon-Lime- A tangy combination of natural lemon and lime with salt adds a tasty twist to the drinking experience.
            Hot Lime- Its flavor has just enough heat to make your beer beg for more. It’s a great fit with tequila, a domestic lager, Mexican import, michelada, or Bloody Mary   
            Michelada-This tasty mix of tomato, lime, and chili combines the zesty flavors of a michelada to create a perfect salt blend for topping off any drink.   
            For a well-dressed bottle, can or mug, follow these simple steps:
            1. Add a dash of Beer Salt to the top of your beer
            2. Lick, drink and repeat!',
            'infomation' => "Add Excitement to Any Beer: It's especially great on Domestic Lagers, Mexican Imports & Belgian-style wheat beers. Simply add a dash of Beer Salt to the top of your beer, then lick, drink & repeat!
            One-of-a-Kind Blends: We make a variety of unique flavors to enhance your food & drinks from beer salts, michelada mix & margarita rim salts to seasonings like chile lime, tamarind, sriracha & more!
            Everything Goes with Twang: We are dedicated to adding fun, flavor & excitement to your favorite food & drink through the creation of high quality, one-of-a-kind salt, sugar, & spice blends.",
            'weight' => 5.4,
            'created_at' => '2022-01-12',
            'exp' => '2023-01-12',
        ]);
        //Beers number10
        DB::table('products')->insert([
            'name' => 'Corona, Lager Light, 12pk, 12 Fl Oz',
            'type_id' => 7,
            'price' => 42.87,
            'image1' => '81fwV-hH+bL._AC_SL1500_.jpg',
            'image2' => '81Edre5TVyL._AC_SL1500_.jpg',
            'image3' => '91I2fuMoQrL._AC_SL1500_.jpg',
            'image4' => '91mk9A0OGCL._AC_SL1500_.jpg',
            'description' => 'Corona, Lager Light bold lime flavor is a perfect partner to any Mexican import, domestic lager, beer-rita, or tequila. Add flavor & fun to special events & everyday activities! Portable Flavor & Fun: Inspired by the Latino tradition of adding citrus & salt to beer. Sprinkle our beer salt onto your bottle, can or mug & take the pocket-sized mini beer bottle with you anywhere!
            Beer Salt is a delicious, citrus-flavored salt inspired by the Latino tradition of adding citrus and salt to beer. Sprinkle our salt combination onto your bottle, can or mug, and take the convenient pocket-sized mini beer bottle with you wherever you go to add flavor and fun to special events and everyday activities.
            Lime- This bold lime flavor is a perfect and convenient partner to any Mexican import.
            Lemon-Lime- A tangy combination of natural lemon and lime with salt adds a tasty twist to the drinking experience.
            Hot Lime- Its flavor has just enough heat to make your beer beg for more. It’s a great fit with tequila, a domestic lager, Mexican import, michelada, or Bloody Mary   
            Michelada-This tasty mix of tomato, lime, and chili combines the zesty flavors of a michelada to create a perfect salt blend for topping off any drink.',
            'infomation' => 'product information is correct, on occasion manufacturers may alter their ingredient lists. Actual product packaging and materials may contain more and/or different information than that shown on our Web site. We recommend that you do not solely rely on the information presented and that you always read labels, warnings, and directions before using or consuming a product. For additional information about a product, please contact the manufacturer. Content on this site is for reference purposes and is not intended to substitute for advice given by a physician, pharmacist, or other licensed health-care professional. You should not use this information as self-diagnosis or for treating a health problem or disease. Contact your health-care provider immediately if you suspect that you have a medical problem. Information and statements regarding dietary supplements have not been evaluated by the Food and Drug Administration and are not intended to diagnose, treat, cure, or prevent any disease or health condition. Amazon.com assumes no liability for inaccuracies or misstatements about products.',
            'weight' => 5.4,
            'created_at' => '2022-03-12',
            'exp' => '2023-03-12',
        ]);
        //Fresh Fruit number1
        DB::table('products')->insert([
            'name' => "Fresh Organic Bananas Bundle",
            'type_id' => 8,
            'price' => 33.24,
            'image1' => '61fZ+YAYGaL._SL1500_.jpg',
            'image2' => '06-Nov-20-ogp.jpg',
            'image3' => '202ebeef-6657-44ec-8fff-28352e1f5999.jpg',
            'image4' => 'Banana.jpg',
            'description' => "Bananas, the convenient superfood you can carry around with you in your pocket. These yellow-skinned fruits have an all-around pleasing taste and can be eaten alone or blended into smoothies or baked into breads. Bananas provide an abounding amount of energy as they have two times as many carbohydrates as an apple, five times as much Vitamin A and iron and three times as much phosphorus. In addition, bananas are also rich in potassium and natural sugars. Toss out the caffeine and eat a banana as a midday snack when you're feeling tired and sluggish. Organic bananas meet the strict requirements of the U.S. Department of Agriculture (USDA) National Organic Program. And they’re independently certified as 100% organic by world-leading agencies recognized by the USDA.",
            'infomation' => 'Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition. High source of potassium and fiber. 100% organically grown. Great for snacking',
            'weight' => 1.5,
            'created_at' => '2022-05-01',
            'exp' => '2022-05-10',
        ]);
        //Fresh Fruit number2
        DB::table('products')->insert([
            'name' => "Fresh Organic Fuji Apples",
            'type_id' => 8,
            'price' => 32.94,
            'image1' => 'depositphotos_10806368fresh-apples.jpg',
            'image2' => 'Baked-Apple21.jpg',
            'image3' => 'apples-cover.jpg',
            'image4' => 'apple-fresh-water-drop-of-water.jpg',
            'description' => "Fuji apples are pinkish-red with a light-green tint. They are large and packed with a super sweet flavor. Add these to your pizza for a hint of sweetness. These juicy and crisp apples are also great to use in baking and homemade applesauce. Fuji apples are super sweet through and through with a delightfully crisp texture. Fujis are a cross between Red Delicious and Ralls Janet, an heirloom apple dating back to Thomas Jefferson. They contain between 9–11% sugars by weight and have a dense flesh that is sweeter and crisper than many other apple cultivars, making them popular with consumers around the world. Fuji apples also have a very long shelf life compared to other apples, even without refrigeration.",
            'infomation' => 'We guarantee that you will be satisfied with the freshness and quality of this product, and that it will be delivered to your home within any applicable use by, sell by, best by or expiration dates. Statements regarding dietary supplements have not been evaluated by the FDA and are not intended to diagnose, treat, cure, or prevent any disease or health condition.',
            'weight' => 2,
            'created_at' => '2022-05-11',
            'exp' => '2022-05-20',
        ]);
        //Fresh Fruit number3
        DB::table('products')->insert([
            'name' => "NAVEL ORANGES GROWN LARGE FRESH FRUIT",
            'type_id' => 8,
            'price' => 28.8,
            'image1' => 'Orange-Fruit-Pieces.jpg',
            'image2' => 'Ambersweet_oranges.jpg',
            'image3' => 'oranges-in-a-box.jpg',
            'image4' => 'whole-halved-oranges.jpg',
            'description' => "The orange is a usually round or oval citrus; its rind and flesh are generally orange, except the varieties of red pulp. The edible part of the orange is the flesh, consumed in fresh or in juice. The orange is also used to make stewed fruit, jams, for consumption as dehydrated fruit. Oranges are round orange-coloured fruit that grow on a tree which can reach 10 metres (33 ft) high. Orange trees have dark green shiny leaves and small white flowers with five petals. The flowers smell very sweet which attracts many bees. An orange has a tough shiny orange skin that holds acid in outside layer. The orange has a sweet-tart taste and is commonly peeled and eaten fresh, or squeezed for its juice. It has a thick, bitter rind that is usually discarded, but can be used in cooking. The outermost layer of the rind can be scraped off to make zest, having a similar flavor to the flesh.",
            'infomation' => "Orange is the colour between yellow and red on the spectrum of visible light. Human eyes perceive orange when observing light with a dominant wavelength between roughly 585 and 620 nanometres. In traditional colour theory, it is a secondary colour of pigments, produced by mixing yellow and red. Oranges contain D- limonene, a compound that is touted to prevent cancers like lung cancer, skin cancer and even breast cancer. Vitamin C and antioxidants present in oranges are both important to build body's immunity – they help in fighting cancer. The fibrous nature of the fruit also makes it cancer protective",
            'weight' => 4,
            'created_at' => '2022-05-01',
            'exp' => '2022-05-15',
        ]);
        //Fresh Fruit number4
        DB::table('products')->insert([
            'name' => "Fresh Tropical Gold Hawaiian Pineapples",
            'type_id' => 8,
            'price' => 13.99,
            'image1' => 'tac_dung_cua_dua_2_YPBZ.jpg',
            'image2' => 'duathom_nb2_jgdp.jpg',
            'image3' => 'VNO_Pineapples1.jpg',
            'image4' => 'pineapple-5108775_1280.jpg',
            'description' => "Fresh Tropical Gold Hawaiian Pineapples are grown in rich volcanic soil with warm tropical rainfall, and sealed with a kiss of Hawaiian sunshine for the best Hawaii has to offer. The pineapples are grown on the island and will ship it to you freshly harvested, juicy and delicious. A pineapple is a sweet tropical fruit with a tough leathery skin and spiky leaves on top. Pineapple is excellent, whether eaten as a snack, in a sweet dessert, in savory dishes like fried rice, or even on pizza. Ananas comosus, that develops from a spike or head of flowers and is surmounted by a crown of leaves. the plant itself, having a short stem and rigid, spiny-margined, recurved leaves. Military Slang.To pine for someone is to deeply long for them. When we deeply desire someone or something, we often say we're “pining for” them.",
            'infomation' => "To desire or grieve over someone or something so intensely that one becomes depressed or melancholy. You can't just sitting here pining over your ex-boyfriend. It's over—you need to get out there and live your life! If you have a pine tree in your neighborhood, you can harvest your own needles. All pine needles are edible, though you may find that you like the flavor of some pines over others.",
            'weight' => 1.5,
            'created_at' => '2022-05-09',
            'exp' => '2022-05-20',
        ]);
        //Fresh Fruit number5
        DB::table('products')->insert([
            'name' => "BLACK SEEDLESS GRAPES FRESH PRODUCE FRUIT PER POUND",
            'type_id' => 8,
            'price' => 33.24,
            'image1' => 'black-seedlees-grapes-560x560.jpg',
            'image2' => 'black-jumbo-seedless-1578646586-5248222.jpeg',
            'image3' => '558c2964bac7f8d265e9b6b1.jpeg',
            'image4' => '1222.png',
            'description' => "Black grapes are the ones with dark and velvety skin colour. They have a sweet taste that makes it famous among customers. Their dark skin colour is since they have higher levels of flavonoids than any other kinds of grapes. A beautiful deep velvety color, black grapes have a sweet and juicy flavor. They can be enjoyed raw or cooked in a variety of ways to make desserts, compotes, jams, sauces and many more. Some may call red grapes purple grapes (and others may refer to them as black grapes), but they are actually all under a broad category of red grapes, just depends on where you're from and what you're used to. The same for white or green, white grapes are green grapes",
            'infomation' => 'From a grape perspective, the white wine grapes that usually have the lowest acid content are chardonnay, viognier, and gewurztraminer. Because black, green, and red grapes contain high levels of naturally occurring antioxidants, the fruits may reduce hypertension that can lead to heart failure, shows the study, published in the October issue of the Journal of Gerontology: Biological Sciences. Black grapes are rich in a number of nutrients, including natural antioxidants known as polyphenols, and can be part of a healthy calorie-reduction diet, which can help you to lose weight.',
            'weight' => 0.5,
            'created_at' => '2022-05-09',
            'exp' => '2022-05-19',
        ]);
        //Fresh Fruit number6
        DB::table('products')->insert([
            'name' => "Fresh Kiwis 7 pack",
            'type_id' => 8,
            'price' => 33.24,
            'image1' => 'kiwi-fruit_625x350_81445871711.jpg',
            'image2' => 'chopped-kiwi-in-a-bowl-on-a-table.jpg',
            'image3' => 'istockphoto-520294937-612x612.jpg',
            'image4' => 'kiwi-aedbdbf.jpg',
            'description' => "Kiwi vines are dioecious, meaning that male and female flowers are borne on separate individuals. Generally, one male plant can facilitate the pollination of three to eight female plants. The ellipsoidal kiwi fruit is a true berry and has furry brownish green skin. The firm translucent green flesh has numerous edible purple-black seeds embedded around a white centre. The deciduous leaves are borne alternately on long petioles (leaf stems), and young leaves are covered with reddish hairs. kiwifruit or Chinese gooseberry, woody vine and edible fruit of the family Actinidiaceae. The plant is native to mainland China and Taiwan and is also grown commercially in New Zealand and California. The fruit has a slightly acid taste and can be eaten raw or cooked. The juice is sometimes used as a meat tenderizer. Raw kiwis are high in vitamins C and K. Kiwi has a slightly acidic flavor that can be described as tangy or tart. The berry has a unique flavor that cannot be compared with any other fruit. In comparison with other fruits, Kiwi tastes like a combination of strawberry, banana, pineapple, and citrus for the tartness.",
            'infomation' => "Kiwi has that tart-sour taste that happens to be sweet at the same time. But sometimes, it's hard to eat. It's so juicy and there really is no where to hold your fruit. It's one of the few fruits I think is actually easier to eat with a fork. These are the size of a grape, with a fuzzless, smooth skin and the same bright green interior. Golden kiwi: These have a golden flesh that's sweet and a bit tropical tasting.",
            'weight' => 0.4,
            'created_at' => '2022-05-09',
            'exp' => '2022-05-19',
        ]);
        //Fresh Fruit number7
        DB::table('products')->insert([
            'name' => "Pears Premium Bartleft Fresh Produce Fruit",
            'type_id' => 8,
            'price' => 3.5,
            'image1' => '285430_2200-732x549.jpg',
            'image2' => 'pears_Anjou_123rf_21559743_480x480.jpg',
            'image3' => 'preserved-pear-slices-in-plate.jpg',
            'image4' => 'Baked-Brie_edited_banner.jpg',
            'description' => "Pear fruits are generally sweeter and of softer texture than apples and are distinguished by the presence of hard cells in the flesh, the so-called grit, or stone cells. In general, pear fruits are elongate, being narrow at the stem end and broader at the opposite end. Pears have a flavor that ranges from tangy to sweet to spicy, and a texture that can be crisp, buttery, or in between. Many varieties exist, with intriguing differences in shape and color. Anjou pears have a rounded shape and yellow-green skin. There's also a red variety. Although pears mature on the tree, they ripen best off the tree. Every United States pears are picked by hand. Pears are one of the few fruits that have an extensive history, reaching back to about 1000 B.C. Pears used to be called “butter fruit” for its soft, butter-like texture. Much like you can buy apples that are sweet or sour, pears can also vary in flavor. They do tend to be generally sweeter than sour, but their sweetness will be partially determined by how ripe they are.",
            'infomation' => 'Pears are the best example of the soft, crunchy texture that pears are typically associated with. Both Bartlett and Bosc pears are cultivated varieties of Pyrus communis. A pear is a type of fruit called a pome, which forms from the reproductive organs of a flower and the receptacle of a flower (the bowl-like green structure at the end of a stem from which a flower blooms). What is this? Apples, cherries, and olives are other examples of pomes.',
            'weight' => 1.2,
            'created_at' => '2022-05-09',
            'exp' => '2022-05-20',
        ]);
        //Fresh Fruit number8
        DB::table('products')->insert([
            'name' => "Fresh Dragon Fruit (Set of 6)",
            'type_id' => 8,
            'price' => 59.99,
            'image1' => 'dragon-fruit-1296x728-feature.jpg',
            'image2' => 'istockphoto-503045095-170667a.jpg',
            'image3' => 'yasaka.png',
            'image4' => '1565624868552.jpeg',
            'description' => "Dragon fruit may look exotic, but its flavors are similar to other fruits. Its taste has been described as a slightly sweet cross between a kiwi and a pear. Dragon fruit is a tropical fruit native to Mexico and Central America. Its taste is like a combination of a kiwi and a pear. When ripe, dragon fruit has a mildly sweet flavor often described as a blend of pear and kiwi, and a soft texture similar to a ripe kiwi. Under-ripe dragon fruit, on the other hand, is basically flavorless. Native to Mexico, Central and South America, the dragon fruit plant is a cactus. Make sure the dragon fruit does not pucker or have wrinkles, or have blemishes or brown spots. Use a large spoon to scoop the flesh out of each half.",
            'infomation' => "The name 'dragon fruit' is derived from its unique appearance, where the spikes resemble fire and the scales resemble that of a dragon, as depicted in Chinese mythology. It comes packed with antioxidants, vitamins and nutrients, which can be beneficial for overall health and skin-related problems, including signs of ageing, acne and sunburn. It is said that dragon fruit is amazing for acne-prone skin, and when applied topically, it works wonders for your inflamed skin.",
            'weight' => 2.5,
            'created_at' => '2022-05-08',
            'exp' => '2022-05-20',
        ]);
        //Fresh Fruit number9
        DB::table('products')->insert([
            'name' => "Fresh Coconuts (Set Of 3)",
            'type_id' => 8,
            'price' => 24.54,
            'image1' => 'fruits_1521964178.jpg',
            'image2' => 'Coconut-wrath.jpg',
            'image3' => 'skynews-coconut-oil-health_4397186.jpg',
            'image4' => 'organic-coconut-oil-500x500.jpg',
            'description' => "Coconut is a round and elongate fruit of white, fibrous and oily meat covered by a thick, brown and hairy shell. Coconuts are surrounded by a fibrous kernel, inside which is a white meat called copra. When the fruit is still tender it yields a milky fluid that is commonly used as basic food in some zones. Mature coconuts are ovoid or ellipsoid in shape, 30–45 cm (12–18 inches) in length and 15–20 cm (6–8 inches) in diameter. They have a thick fibrous husk surrounding the single-seeded nut. A hard shell encloses the embryo with its abundant endosperm, composed of both meat and liquid. Coconut - The Tree of Life. The Coconut tree (scientific name: Cocos Nucifera) is called the “Tree of Life” because all the parts of the entire tree–from top to bottom–are used to sustain human life. It must be the most useful tree in the world, bar none.
            The coconut scent begins with sweet top notes of peach, banana, and coconut. Then, the aroma continues with notes of coconut tree leaves. Finally, this aroma finishes with the scent of sweet vanilla that is nearly impossible to resist.",
            'infomation' => 'The coconut palm is a long-lived plant; it has a single trunk, 20-30 metre tall, its bark is smooth and gray, marked by ringed scars left by fallen leaf bases. The tree can live as long as 100 years producing an annual yield of 50 to 100 coconuts. It has a hard shell, edible white flesh and clear liquid, sometimes referred to as “water,” which is often used as a beverage. Coconut flesh or “meat” is aromatic, chewy in texture and rich in taste. Odour profile: intensely tropical notes, lush, sweet, milky, vanillic, with a suntan lotion association due to the inclusion of coconut scent in Coppertone sun oil.',
            'weight' => 1.74,
            'created_at' => '2022-05-01',
            'exp' => '2022-05-20',
        ]);
        //Fresh Fruit number10
        DB::table('products')->insert([
            'name' => "Giant Strawberry Fresca Everbearing Berries Indoor Non GMO Fruits for Planting",
            'type_id' => 8,
            'price' => 33.24,
            'image1' => '5143TZ6QN5L._AC_.jpg',
            'image2' => '71KhH0sflcL._AC_SL1024_.jpg',
            'image3' => '71fyK8vUXWL._AC_SL1500_.jpg',
            'image4' => '71hBtZvaxAL._AC_SL1500_.jpg',
            'description' => "A large-fruited remontant variety. The height of the bush is 10-12 (25-30 cm) with a small number of creeping shoots. The berries are large, dense, fragrant, tasty, and juicy. They are bright red, 1 (2-3 cm) in diameter and have a sweet and sour taste. The average weight is between 0.35 and 0.7 oz (10 to 20 g). In the first year of sowing, you can harvest to 2 lbs (1 kg) per bush. This high yield variety is suitable for indoor and outdoor cultivation. Tuck your strawberry seed packet inside a sealed plastic bag or airtight container and place in your freezer for 3-4 weeks. Opening the package too quickly may result in water condensing on the cold seeds, and this will reduce your chances of success. Sow the seeds on the surface of pre-moistened, sterilized seed starting mix in trays or small containers. Place these on a piece of felt or other thick cloth that has its end sitting in water. The idea is to wick up water from below so that the seedling medium stays constantly and evenly damp until germination. Keep your seeded trays under bright fluorescent lights at a constant temperature of 18-24°C (65-75°F).",
            'infomation' => 'Germination may take anywhere from 7 days to 6 weeks. Be patient. Once germination occurs, increase ventilation around your plants to prevent damping off. Once your seedlings have their third true leaf, they can be transplanted into their own pots. Be sure to harden your seedlings off carefully and gradually before transplanting outside. Dig ¼ cup complete organic fertilizer into the soil beneath each transplant. Keep soil moist, but not soggy. A mulch of straw around plants. If the number of seeds does not match the indicated amount, please contact us, and we will solve this problem ASAP. On the back of each packaging you will find English instructions for planting and growing. Please follow the instructions for a good harvest',
            'weight' => 2,
            'created_at' => '2022-05-02',
            'exp' => '2022-05-26',
        ]);
        //Dried Fruit number1
        DB::table('products')->insert([
            'name' => "NATIERRA Nature's All Foods Organic Freeze-Dried Pineapples (Pack of 12)",
            'type_id' => 9,
            'price' => 75.43,
            'image1' => '71r2Si0ZMSL._SL1500_.jpg',
            'image2' => '71Xy6zskThL._SL1500_.jpg',
            'image3' => '71xuiKxzHOL._SL1024_.jpg',
            'image4' => '71rrXsA+8mL._SL1201_.jpg',
            'description' => "Inspired by an ancient Incan technique, NATIERRA’s Organic Freeze-Dried line offers some of the world’s most delicious organic fruits and vegetables, and preserves them using a sophisticated technique that removes 99% of their moisture, preserving flavor, texture, color, nutrients, and giving them a great crunch! USDA Organic, Kosher, Vegan, Non-GMO Verified and fat free with no preservatives or added sugar*. *Not a low-calorie food; see nutrition information for calorie and sugar content. We source Organic fruit from around the world to bring you farm to pantry crunchy snacks! Treat your family with a plant-based, wholesome and delicious snack that will awake your taste buds without guilt! No sugar added – Why add sugar when fruit is already delicious on its own? We never add any unnecessary sweeteners or colorants to our fruits.",
            'infomation' => 'Great snack – in today’s busy world, it’s important to be prepared with sensible snacks to help us get though the day. Perfect for your desk drawer, your kid’s lunch box and road trips. A great snack is just a crunch away!
            Excellent for snacking on its own, baking, adding color to frosting, topping recipes, adding crunch to salads, smoothies.',
            'weight' => 0.93,
            'created_at' => '2022-04-09',
            'exp' => '2022-10-09',
        ]);
        //Dried Fruit number2
        DB::table('products')->insert([
            'name' => "Natierra Nature's All Foods Organic Freeze-Dried Apples (Pack of 12)",
            'type_id' => 9,
            'price' => 63.67,
            'image1' => '618-ihAU5BL._SL1500_.jpg',
            'image2' => '712vt94vxhL._SL1500_.jpg',
            'image3' => '71hEk3UracL._SL1024_.jpg',
            'image4' => '71rrXsA+8mL._SL1201_.jpg',
            'description' => "USDA Organic, Kosher, Vegan, Non-GMO Verified and fat free with no preservatives or added sugar. Not a low-calorie food; see nutrition information for calorie and sugar content. We source Organic fruit from around the world to bring you farm to pantry crunchy snacks! Treat your family with a plant-based, wholesome and delicious snack that will awake your taste buds without guilt!
            No sugar added – Why add sugar when fruit is already delicious on its own? We never add any unnecessary sweeteners or colorants to our fruits. Inspired by an ancient Incan technique, NATIERRA’s Organic Freeze-Dried line offers some of the world’s most delicious organic fruits and vegetables, and preserves them using a sophisticated technique that removes 99% of their moisture, preserving flavor, texture, color, nutrients, and giving them a great crunch!",
            'infomation' => 'Great snack – in today’s busy world, it’s important to be prepared with sensible snacks to help us get though the day. Perfect for your desk drawer, your kid’s lunch box and road trips. A great snack is just a crunch away!
            Excellent for snacking on its own, baking, adding color to frosting, topping recipes, adding crunch to salads, smoothies.',
            'weight' => 0.89,
            'created_at' => '2022-03-09',
            'exp' => '2022-09-09',
        ]);
        //Dried Fruit number3
        DB::table('products')->insert([
            'name' => "Natierra Organic Freeze-Dried Tropical Fruits (Pack of 12)",
            'type_id' => 9,
            'price' => 64.52,
            'image1' => '71J547xKpnL._SL1500_.jpg',
            'image2' => '71N+OfL1hsL._SL1500_.jpg',
            'image3' => '71nGU8-TZfL._SL1024_.jpg',
            'image4' => '71rrXsA+8mL._SL1201_.jpg',
            'description' => "USDA Organic, Kosher, Vegan, Non-GMO Verified and fat free with no preservatives or added sugar. Not a low-calorie food; see nutrition information for calorie and sugar content.
            We source Organic fruit from around the world to bring you farm to pantry crunchy snacks! Treat your family with a plant-based, wholesome and delicious snack that will awake your taste buds without guilt!
            No sugar added – Why add sugar when fruit is already delicious on its own? We never add any unnecessary sweeteners or colorants to our fruits. Inspired by an ancient Incan technique, NATIERRA’s Organic Freeze-Dried line offers some of the world’s most delicious organic fruits and vegetables, and preserves them using a sophisticated technique that removes 99% of their moisture, preserving flavor, texture, color, nutrients, and giving them a great crunch!",
            'infomation' => 'Great snack – in today’s busy world, it’s important to be prepared with sensible snacks to help us get though the day. Perfect for your desk drawer, your kid’s lunch box and road trips. A great snack is just a crunch away!
            Excellent for snacking on its own, baking, adding color to frosting, topping recipes, adding crunch to salads, smoothies.',
            'weight' => 0.91,
            'created_at' => '2022-02-09',
            'exp' => '2022-08-09',
        ]);
        //Dried Fruit number4
        DB::table('products')->insert([
            'name' => "Natierra Organic Freeze-Dried Mangoes 1.5 oz (Pack of 12)",
            'type_id' => 9,
            'price' => 75.91,
            'image1' => '71f9aQE8K2L._SY679_.jpg',
            'image2' => '71L2Z8tE1XL._SL1500_.jpg',
            'image3' => '816ZuwGNo0L._SL1500_.jpg',
            'image4' => '71rrXsA+8mL._SL1201_.jpg',
            'description' => "USDA Organic, Kosher, Vegan, Non-GMO Verified and fat free with no preservatives or added sugar*. *Not a low-calorie food; see nutrition information for calorie and sugar content.
            We source Organic fruit from around the world to bring you farm to pantry crunchy snacks! Treat your family with a plant-based, wholesome and delicious snack that will awake your taste buds without guilt!
            No sugar added Why add sugar when fruit is already delicious on its own? We never add any unnecessary sweeteners or colorants to our fruits. Inspired by an ancient Incan technique, NATIERRA’s Organic Freeze-Dried line offers some of the world’s most delicious organic fruits and vegetables, and preserves them using a sophisticated technique that removes 99% of their moisture, preserving flavor, texture, color, nutrients, and giving them a great crunch!",
            'infomation' => 'Great snack in today’s busy world, it’s important to be prepared with sensible snacks to help us get though the day. Perfect for your desk drawer, your kid’s lunch box and road trips. A great snack is just a crunch away!
            Excellent for snacking on its own, baking, adding color to frosting, topping recipes, adding crunch to salads, smoothies.',
            'weight' => 0.9,
            'created_at' => '2022-01-19',
            'exp' => '2022-07-19',
        ]);
        //Dried Fruit number5
        DB::table('products')->insert([
            'name' => "Nature's All Foods Organic Freeze-Dried Bananas (Pack of 12)",
            'type_id' => 9,
            'price' => 75.54,
            'image1' => '61wzLJ2iZHL._SL1500_.jpg',
            'image2' => '71c4C73NUgL._SL1500_.jpg',
            'image3' => '8107SsYdLaL._SL1500_.jpg',
            'image4' => '71rrXsA+8mL._SL1201_.jpg',
            'description' => "USDA Organic, Kosher, Vegan, Non-GMO Verified and fat free with no preservatives or added sugar*. *Not a low-calorie food; see nutrition information for calorie and sugar content.
            We source Organic fruit from around the world to bring you farm to pantry crunchy snacks! Treat your family with a plant-based, wholesome and delicious snack that will awake your taste buds without guilt!
            No sugar added – Why add sugar when fruit is already delicious on its own? We never add any unnecessary sweeteners or colorants to our fruits. Inspired by an ancient Incan technique, NATIERRA’s Organic Freeze-Dried line offers some of the world’s most delicious organic fruits and vegetables, and preserves them using a sophisticated technique that removes 99% of their moisture, preserving flavor, texture, color, nutrients, and giving them a great crunch!",
            'infomation' => 'Great snack – in today’s busy world, it’s important to be prepared with sensible snacks to help us get though the day. Perfect for your desk drawer, your kid’s lunch box and road trips. A great snack is just a crunch away!
            Excellent for snacking on its own, baking, adding color to frosting, topping recipes, adding crunch to salads, smoothies.',
            'weight' => 1.25,
            'created_at' => '2022-02-21',
            'exp' => '2022-08-22',
        ]);
        //Dried Fruit number6
        DB::table('products')->insert([
            'name' => "NATIERRA Nature's All Foods Organic Freeze-Dried Beets (Pack of 12)",
            'type_id' => 9,
            'price' => 68.55,
            'image1' => '71x4f1EhH5L._SL1500_.jpg',
            'image2' => '71F4fpEoJsL._SL1500_.jpg',
            'image3' => '71-ILcZTbnL._SL1024_.jpg',
            'image4' => '71rrXsA+8mL._SL1201_.jpg',
            'description' => "USDA Organic, Kosher, Vegan, Non-GMO Verified and fat free with no preservatives or added sugar*. *Not a low-calorie food; see nutrition information for calorie and sugar content.
            We source Organic fruit from around the world to bring you farm to pantry crunchy snacks! Treat your family with a plant-based, wholesome and delicious snack that will awake your taste buds without guilt!
            No sugar added – Why add sugar when fruit is already delicious on its own? We never add any unnecessary sweeteners or colorants to our fruits. Inspired by an ancient Incan technique, NATIERRA’s Organic Freeze-Dried line offers some of the world’s most delicious organic fruits and vegetables, and preserves them using a sophisticated technique that removes 99% of their moisture, preserving flavor, texture, color, nutrients, and giving them a great crunch!",
            'infomation' => 'Great snack – in today’s busy world, it’s important to be prepared with sensible snacks to help us get though the day. Perfect for your desk drawer, your kid’s lunch box and road trips. A great snack is just a crunch away!
            Excellent for snacking on its own, baking, adding color to frosting, topping recipes, adding crunch to salads, smoothies.',
            'weight' => 0.8,
            'created_at' => '2022-01-10',
            'exp' => '2022-07-10',
        ]);
        //Dried Fruit number7
        DB::table('products')->insert([
            'name' => "Natierra Nature's All Foods Organic Freeze-Dried Non-GMO & Vegan, Blueberries (Pack of 12)",
            'type_id' => 9,
            'price' => 80.41,
            'image1' => '71Yiori8cbL._SL1500_.jpg',
            'image2' => '7174yRSosIL._SL1500_.jpg',
            'image3' => '81jZU1-PrTL._SL1500_.jpg',
            'image4' => '71rrXsA+8mL._SL1201_.jpg',
            'description' => "USDA Organic, Kosher, Vegan, Non-GMO Verified and fat free with no preservatives or added sugar . Not a low-calorie food; see nutrition information for calorie and sugar content.
            We source Organic fruit from around the world to bring you farm to pantry crunchy snacks! Treat your family with a plant-based, wholesome and delicious snack that will awake your taste buds without guilt!
            No sugar added – Why add sugar when fruit is already delicious on its own? We never add any unnecessary sweeteners or colorants to our fruits.  Inspired by an ancient Incan technique, NATIERRA’s Organic Freeze-Dried line offers some of the world’s most delicious organic fruits and vegetables, and preserves them using a sophisticated technique that removes 99% of their moisture, preserving flavor, texture, color, nutrients, and giving them a great crunch!",
            'infomation' => 'Great snack – in today’s busy world, it’s important to be prepared with sensible snacks to help us get though the day. Perfect for your desk drawer, your kid’s lunch box and road trips. A great snack is just a crunch away!
            Excellent for snacking on its own, baking, adding color to frosting, topping recipes, adding crunch to salads, smoothies.',
            'weight' => 0.48,
            'created_at' => '2022-01-09',
            'exp' => '2022-07-09',
        ]);
        //Dried Fruit number8
        DB::table('products')->insert([
            'name' => "Natierra Nature's All Foods Organic Freeze-Dried Peas | Non-GMO & Vegan (Pack of 12)",
            'type_id' => 9,
            'price' => 66.29,
            'image1' => '61wDzy9SMQL._SL1500_.jpg',
            'image2' => '71KIUWvQOoL._SL1500_.jpg',
            'image3' => '71fTCJoNfRL._SL1024_.jpg',
            'image4' => '71rrXsA+8mL._SL1201_.jpg',
            'description' => "USDA Organic, Kosher, Vegan, Non-GMO Verified and fat free with no preservatives or added sugar. Not a low-calorie food; see nutrition information for calorie and sugar content.
            We source Organic fruit from around the world to bring you farm to pantry crunchy snacks! Treat your family with a plant-based, wholesome and delicious snack that will awake your taste buds without guilt!
            No sugar added – Why add sugar when fruit is already delicious on its own? We never add any unnecessary sweeteners or colorants to our fruits.
            Great snack – in today’s busy world, it’s important to be prepared with sensible snacks to help us get though the day. Perfect for your desk drawer, your kid’s lunch box and road trips. A great snack is just a crunch away!",
            'infomation' => "Excellent for snacking on its own, baking, adding color to frosting, topping recipes, adding crunch to salads, smoothies.
            Allergen information: hazelnuts_free. Inspired by an ancient Incan technique, NATIERRA's Organic Freeze-Dried line offers some of the world’s most delicious organic fruits and vegetables, and preserves them using a sophisticated technique that removes 99% of their moisture, preserving flavor, texture, color, nutrients, and giving them a great crunch!",
            'weight' => 1.2,
            'created_at' => '2022-02-27',
            'exp' => '2022-08-27',
        ]);
        //Dried Fruit number9
        DB::table('products')->insert([
            'name' => "NATIERRA Nature's All Foods Organic Freeze-Dried Raspberries (Pack of 12)",
            'type_id' => 9,
            'price' => 69.48,
            'image1' => '71kMZv6NLpL._SL1500_.jpg',
            'image2' => '71JhYIalwTL._SL1500_.jpg',
            'image3' => '815GUSXHc0L._SL1500_.jpg',
            'image4' => '71rrXsA+8mL._SL1201_.jpg',
            'description' => "USDA Organic, Kosher, Vegan, Non-GMO Verified and fat free with no preservatives or added sugar. Not a low-calorie food; see nutrition information for calorie and sugar content.
            We source Organic fruit from around the world to bring you farm to pantry crunchy snacks! Treat your family with a plant-based, wholesome and delicious snack that will awake your taste buds without guilt!
            No sugar added – Why add sugar when fruit is already delicious on its own? We never add any unnecessary sweeteners or colorants to our fruits. Inspired by an ancient Incan technique, NATIERRA’s Organic Freeze-Dried line offers some of the world’s most delicious organic fruits and vegetables, and preserves them using a sophisticated technique that removes 99% of their moisture, preserving flavor, texture, color, nutrients, and giving them a great crunch!",
            'infomation' => 'Great snack – in today’s busy world, it’s important to be prepared with sensible snacks to help us get though the day. Perfect for your desk drawer, your kid’s lunch box and road trips. A great snack is just a crunch away!
            Excellent for snacking on its own, baking, adding color to frosting, topping recipes, adding crunch to salads, smoothies.',
            'weight' => 0.83,
            'created_at' => '2022-01-19',
            'exp' => '2022-07-19',
        ]);
        //Dried Fruit number10
        DB::table('products')->insert([
            'name' => "Natierra Nature's All Foods Organic Freeze-Dried Roasted Corn (Pack of 12)",
            'type_id' => 9,
            'price' => 68.28,
            'image1' => '81nBHL5faTL._SL1500_.jpg',
            'image2' => '81Gn4NxyToL._SL1500_.jpg',
            'image3' => '71PoIbp7TQL._SL1024_.jpg',
            'image4' => '71rrXsA+8mL._SL1201_.jpg',
            'description' => "USDA Organic, Kosher, Vegan, Non-GMO Verified and fat free with no preservatives or added sugar. Not a low-calorie food; see nutrition information for calorie and sugar content.
            We source Organic fruit from around the world to bring you farm to pantry crunchy snacks! Treat your family with a plant-based, wholesome and delicious snack that will awake your taste buds without guilt!
            No sugar added – Why add sugar when fruit is already delicious on its own? We never add any unnecessary sweeteners or colorants to our fruits. Inspired by an ancient Incan technique, NATIERRA’s Organic Freeze-Dried line offers some of the world’s most delicious organic fruits and vegetables, and preserves them using a sophisticated technique that removes 99% of their moisture, preserving flavor, texture, color, nutrients, and giving them a great crunch!",
            'infomation' => 'Great snack – in today’s busy world, it’s important to be prepared with sensible snacks to help us get though the day. Perfect for your desk drawer, your kid’s lunch box and road trips. A great snack is just a crunch away!
            Excellent for snacking on its own, baking, adding color to frosting, topping recipes, adding crunch to salads, smoothies.',
            'weight' => 1.4,
            'created_at' => '2022-01-19',
            'exp' => '2022-07-19',
        ]);
        //Canned Foods number1
        DB::table('products')->insert([
            'name' => "Campbell's Chunky Savory Chicken with White & Wild Rice Soup, 18.8 oz Can (Pack of 12)",
            'type_id' => 10,
            'price' => 33.24,
            'image1' => 'a91ZNuIU4+OS._SL1500_.jpg',
            'image2' => 'a91Zyrj1cC5S._SL1500_.jpg',
            'image3' => 'a81xNV6uaoPL._SL1500_.jpg',
            'image4' => 'a71CouPDDkXL._SL1500_.jpg',
            'description' => "Nothing screams comfort like our steaming bowl of Campbell's Chunky Savory Chicken with White & Wild Rice Soup. Bursting with satisfying spoonfuls of quality chicken meat with no antibiotics with big pieces of potatoes, carrots and celery and white and wild rice, you'll want to dive into this ready to eat soup and feed your soul.",
            'infomation' => 'Chicken Stock, Chicken Meat, Carrots, Potatoes, Rice, Diced Tomatoes In Tomato Juice, Celery, Water, Contains Less Than 2% Of: Sauterne Wine, Corn, Wild Rice, Modified Food Starch, Salt, Yeast Extract, Chicken Fat, Potato Starch, Monosodium Glutamate, Vegetable Oil, Corn Syrup Solids, Flavoring, Carrageenan, Spice, Beta Carotene For Color, Dehydrated Chicken Broth, Celery Extract, Onion Extract. May Contain Traces Of Wheat',
            'weight' => 1.2,
            'created_at' => '2022-02-09',
            'exp' => '2023-02-09',
        ]);
        //Canned Foods number2
        DB::table('products')->insert([
            'name' => 'Sweet Sue Chunk White Chicken in Water, 5 oz Can (Pack of 24)',
            'type_id' => 10,
            'price' => 49.98,
            'image1' => 'bA1xRLOh8ukL._SL1500_.jpg',
            'image2' => 'b71uqLCMQXWL._SL1500_.jpg',
            'image3' => 'b71zZIPTvCCL._SL1500_.jpg',
            'image4' => 'b818I3gFzh1L._SL1500_.jpg',
            'description' => 'Don’t knock it till you’ve fried it! SPAM Classic is the original and timeless spiced meat that’s brought a delicious taste of variety for generations. There’s a reason that 12.8 cans of SPAM products are eaten every second. You can enjoy this fully cooked spiced meat hot or cold, making it perfect for home cooked meals, family get-togethers, or even camping food. Get creative with the SPAM brand and experience the flavor today! SIZZLE PORK AND MMM. SPAM is a trademark of Hormel Foods, LLC.',
            'infomation' => 'Ingredients:Pork with Ham, Salt, Water, Modified Potato Starch, Sugar, Sodium Nitrite.',
            'weight' => 1.5,
            'created_at' => '2022-04-12',
            'exp' => '2022-10-12',
        ]);
        //Canned Foods number3
        DB::table('products')->insert([
            'name' => 'Armour Star Classic Homestyle Beef Stew, 20 oz. (Pack of 12)',
            'type_id' => 10,
            'price' => 25.23,
            'image1' => 'c81Ly-xqYVKL._SL1500_.jpg',
            'image2' => 'c81UKUGHvEjL._SL1500_.jpg',
            'image3' => 'c91+ywvBowML._SL1500_.jpg',
            'image4' => 'c91sbduyHhfL._SL1500_.jpg',
            'description' => 'Armour Star Classic Homestyle Beef Stew delivers a quick and easy canned food meal with great flavor. The canned stew offers a delicious recipe of beef, potatoes and carrots in a rich, hearty gravy. This gluten free beef stew can be eaten right out of the can, so you can enjoy this canned stew as a ready to eat meal or snack.',
            'infomation' => "WATER, BEEF, REHYDRATED POTATOES (WITH SODIUM ACID PYROPHOSPHATE TO MAINTAIN COLOR), CARROTS, TOMATO PUREE (WATER, TOMATO PASTE), MODIFIED FOOD STARCH. CONTAINS 2% OR LESS OF: SALT, SEASONING BLEND (ONION POWDER, SALT, HYDROLYZED CORN PROTEIN, DEXTROSE, MALTODEXTRIN, SPICE EXTRACTIVES, NATURAL FLAVOR, OIL OF PARSLEY, DISODIUM INOSINATE, DISODIUM GUANYLATE), CARAMEL COLOR, SUGAR.",
            'weight' => 1.4,
            'created_at' => '2022-05-12',
            'exp' => '2024-05-12',
        ]);
        //Canned Foods number4
        DB::table('products')->insert([
            'name' => "Campbell's Chunky Healthy Request Soup, Roasted Chicken with Country Vegetables, 223.2 Oz, Pack of 12",
            'type_id' => 10,
            'price' => 29.89,
            'image1' => 'e71sfce2PZJS._SL1500_.jpg',
            'image2' => 'e81+9ccp8hRS._SL1500_.jpg',
            'image3' => 'e81OV4fyMThS._SL1500_.jpg',
            'image4' => 'e91Parb2ZAoS._SL1500_.jpg',
            'description' => 'he Del Monte mandarin oranges, with their sweet flavor, complement all of your favorite recipes and different types of dishes, salads, drinks, and desserts. These slices are immersed in a naturally refreshing light syrup that elevates any dish you make to another level. The delicious fruit is a tasty topping for yogurt, cereal, salads, and can be combined with flavored gelatin for a fun treat.',
            'infomation' => 'PREPARED WHITE BEANS (WATER, WHITE BEANS), CHICKEN FRANKS (MECHANICALLY SEPARATED CHICKEN, WATER, SALT, CORN SYRUP, DEXTROSE, SODIUM PHOSPHATE, NATURAL FLAVORINGS, PAPRIKA, SODIUM ERYTHORBATE, SODIUM NITRITE, EXTRACTIVES OF PAPRIKA), TOMATO PUREE (WATER, TOMATO PASTE), WATER, SUGAR, LESS THAN 2% OF: HIGH FRUCTOSE CORN SYRUP, SALT, ONION POWDER, NATURAL AND ARTIFICIAL FLAVORS',
            'weight' => 0.8,
            'created_at' => '2022-04-10',
            'exp' => '2022-10-10',
        ]);
        //Canned Foods number5
        DB::table('products')->insert([
            'name' => "Van Camp's Weenee, 7.75 Ounce (Pack of 24)",
            'type_id' => 10,
            'price' => 29.95,
            'image1' => 'e71sfce2PZJS._SL1500_.jpg',
            'image2' => 'e81+9ccp8hRS._SL1500_.jpg',
            'image3' => 'e81OV4fyMThS._SL1500_.jpg',
            'image4' => 'e91Parb2ZAoS._SL1500_.jpg',
            'description' => 'The Del Monte mandarin oranges, with their sweet flavor, complement all of your favorite recipes and different types of dishes, salads, drinks, and desserts. These slices are immersed in a naturally refreshing light syrup that elevates any dish you make to another level. The delicious fruit is a tasty topping for yogurt, cereal, salads, and can be combined with flavored gelatin for a fun treat.',
            'infomation' => 'PREPARED WHITE BEANS (WATER, WHITE BEANS), CHICKEN FRANKS (MECHANICALLY SEPARATED CHICKEN, WATER, SALT, CORN SYRUP, DEXTROSE, SODIUM PHOSPHATE, NATURAL FLAVORINGS, PAPRIKA, SODIUM ERYTHORBATE, SODIUM NITRITE, EXTRACTIVES OF PAPRIKA), TOMATO PUREE (WATER, TOMATO PASTE), WATER, SUGAR, LESS THAN 2% OF: HIGH FRUCTOSE CORN SYRUP, SALT, ONION POWDER, NATURAL AND ARTIFICIAL FLAVORS',
            'weight' => 2.4,
            'created_at' => '2022-04-10',
            'exp' => '2023-04-10',
        ]);
        //Canned Foods number6
        DB::table('products')->insert([
            'name' => 'Del Monte Canned Sliced Peaches in Heavy Syrup, 15.25 Ounce (Pack of 12) Sliced, Cal. Freestone',
            'type_id' => 10,
            'price' => 71.34,
            'image1' => 'f91wMpKPwvuL._SL1500_.jpg',
            'image2' => 'f81p3uHdrGRL._SL1500_.jpg',
            'image3' => 'f71wBApZ7bwL._SL1500_.jpg',
            'image4' => 'f91vOP8axwjL._SL1500_.jpg',
            'description' => "The peach slices are the perfect snack to be eaten on-the-go and with whatever you desire. When you trust Del Monte, you can be sure what you're buying is the peak of quality and nutrition! The Del Monte name has been synonymous with premium foods since its debut in 1886. For generations, our company has proudly earned our reputation with a series of innovations and a singular dedication to quality.",
            'infomation' => 'PEACHES, WATER, HIGH FRUCTOSE CORN SYRUP, CORN SYRUP, SUGAR..',
            'weight' => 2.8,
            'created_at' => '2022-04-11',
            'exp' => '2023-04-11',
        ]);
        //Canned Foods number7
        DB::table('products')->insert([
            'name' => "Campbell's Condensed Healthy Request Homestyle Chicken Noodle Soup, 10.5 oz. Can (Pack of 12)",
            'type_id' => 10,
            'price' => 34.67,
            'image1' => 'g81PEsvbbpJL._SL1500_.jpg',
            'image2' => 'g818VwlsrtdL._SL1500_.jpg',
            'image3' => 'g81vnMzO4Q2L._SL1500_.jpg',
            'image4' => 'g81ygSwz9LdL._SL1500_.jpg',
            'description' => "The peach slices are the perfect snack to be eaten on-the-go and with whatever you desire. When you trust Del Monte, you can be sure what you're buying is the peak of quality and nutrition! The Del Monte name has been synonymous with premium foods since its debut in 1886. For generations, our company has proudly earned our reputation with a series of innovations and a singular dedication to quality.",
            'infomation' => 'Ingredients: Chicken Stock, Enriched Egg Noodles (Wheat Flour, Egg Whites, Eggs, Niacin, Ferrous Sulfate, Thiamine Mononitrate, Riboflavin, Folic Acid), Carrots, Chicken Meat, Contains Less Than 2% Of: Chicken Fat, Salt, Celery, Modified Food Starch, Water, Potassium Chloride, Flavoring, Dehydrated Onions, Yeast Extract, Chicken Flavor, Vegetable Oil, Spices, Disodium Inosinate, Disodium Guanylate, Beta Carotene For Color, Sodium Phosphate, Soy Protein Isolate, Dehydrated Garlic, Lactic Acid, Dehydrated Chicken.',
            'weight' => 2.2,
            'created_at' => '2022-02-08',
            'exp' => '2023-02-08',
        ]);
        //Canned Foods number8
        DB::table('products')->insert([
            'name' => "BUSH'S BEST Canned Maple Cured Bacon Baked Beans (Pack of 12)",
            'type_id' => 10,
            'price' => 33.86,
            'image1' => 'h712RYw2gWhL._SL1500_.jpg',
            'image2' => 'h81e7ZSFzPFL._SL1500_.jpg',
            'image3' => 'h51BX5toMUNL._SL1000_.jpg',
            'image4' => 'h91rEkVIt5CL._SL1500_.jpg',
            'description' => "When you catch a craving for delicious, we've got your cure. Bush's Best best best maple cured bacon baked beans are sweetened to perfection. We start with navy beans, then add a touch—and not a drop more!—of maple syrup. The result? A hint of sweetness that people have been loving for good reason since 2000.",
            'infomation' => 'Prepared Navy Beans, Water, Sugar, White Mustard (Vinegar, Water, Mustard Seed, Salt, Natural Flavor). Contains 2% or less of: Maple Syrup, Cured Bacon, Salt, Modified Corn Starch, Onion Powder, Caramel Color, Bacon Fat, Autolyzed Yeast Extract, Natural Flavor.',
            'weight' => 2.2,
            'created_at' => '2022-03-01',
            'exp' => '2023-03-01',
        ]);
        //Canned Foods number9
        DB::table('products')->insert([
            'name' => "BUSH'S BEST Canned Dark Red Kidney Beans, Source of Plant Based Protein and Fiber, Low Fat, Gluten Free, 16 oz (Pack of 12)",
            'type_id' => 10,
            'price' => 29.89,
            'image1' => 'i71Q3Ua+EIqL._SL1500_.jpg',
            'image2' => 'i81GbNufJovL._SL1500_.jpg',
            'image3' => 'i51BX5toMUNL._SL1000_.jpg',
            'image4' => 'i81ffQAKd2jL._SL1500_.jpg',
            'description' => "BUSH’S is all about family, friends that feel like family, and a certain Secret Family Recipe. Since we got our start over 100 years ago in Chestnut Hill, Tennessee, BUSH’S has always maintained that quality is the best policy. We pursue excellence and exceptional taste in our beans, sauces and everything we do. That's why you’re cooking up the best with BUSH’S BEST.",
            'infomation' => 'Prepared Red Kidney Beans, Water, Sugar, Salt, Dextrose, Calcium Chloride (Firming Agent), and Disodium EDTA (To Promote Color Retention).',
            'weight' => 2.4,
            'created_at' => '2022-04-07',
            'exp' => '2024-04-07',
        ]);
        //Canned Foods number10
        DB::table('products')->insert([
            'name' => 'Mary Kitchen Corned Beef Hash 14 oz (8-Pack)',
            'type_id' => 10,
            'price' => 26.76,
            'image1' => 'k81R8wpC7xML._SL1500_.jpg',
            'image2' => 'k61cxr1b0e4L._SL1000_.jpg',
            'image3' => 'k61ojNRc6h9L._SL1000_.jpg',
            'image4' => 'k71nC+a+PdWL._SL1000_.jpg',
            'description' => "Mary Kitchen Corned Beef Hash is all about family, friends that feel like family, and a certain Secret Family Recipe. Since we got our start over 100 years ago in Chestnut Hill, Tennessee, BUSH’S has always maintained that quality is the best policy. We pursue excellence and exceptional taste in our beans, sauces and everything we do. That's why you’re cooking up the best with BUSH’S BEST",
            'infomation' => 'Beef, rehydrated potatoes, water, contains 2 percent or less of salt, sugar, flavoring, spice, sodium nitrate',
            'weight' => 2.4,
            'created_at' => '2022-04-02',
            'exp' => '2024-04-02',
        ]);
        //Canned Foods number11
        DB::table('products')->insert([
            'name' => 'StarKist Chunk Light Tuna in Water, 5 O, (Pack of 48)',
            'type_id' => 10,
            'price' => 68.93,
            'image1' => 'l81Tf4Uj1t9L._SL1500_.jpg',
            'image2' => 'l61LThfLdBFL._SL1200_.jpg',
            'image3' => 'l91i-BEIEg0L._SL1500_.jpg',
            'image4' => 'l6197678gGvL._SL1200_.jpg',
            'description' => 'Whether you’re squeezing in lunch between meetings during a busy workday or want a quick, protein-packed snack between soccer practice, school and other daily errands, StarKist Chunk Light Tuna in Water is the perfect choice! Each of our 5 oz. tuna cans features wild caught tuna with a naturally mild flavor people have come to expect from StarKist Plus',
            'infomation' => 'Light Tuna, Water, Vegetable Broth, Salt',
            'weight' => 3.5,
            'created_at' => '2022-04-11',
            'exp' => '2024-10-11',
        ]);
        //Canned Foods number12
        DB::table('products')->insert([
            'name' => 'Del Monte Canned Sliced Peaches in Heavy Syrup, 15.25 Ounce (Pack of 12) Sliced, Cal. Freestone',
            'type_id' => 10,
            'price' => 19.99,
            'image1' => 'm81wb3+2SLqL._SL1500_.jpg',
            'image2' => 'm81Ewu8B0F9L._SL1500_.jpg',
            'image3' => 'm919-CoMxwvL._SL1500_.jpg',
            'image4' => 'm81m83MnuMBL._SL1500_.jpg',
            'description' => 'Del Monte Canned Sliced Peaches hef Boyardee Beef Ravioli is a delicious and convenient meal that is ready to eat in minutes and has delighted families for generations. Made with enriched pasta, smothered in hearty, Italian-flavored tomato sauce, and stuffed with real beef, Chef Boyardee Beef Ravioli has the timeless flavor everyone loves. When you need a quick meal',
            'infomation' => 'Omatoes (Tomato Puree, Water), Water, Enriched Wheat Flour (Wheat Flour, Malted Barley Flour, Niacin, Iron, Thiamine Mononitrate [Vitamin B1], Riboflavin [Vitamin B2] And Folic Acid), Beef, Crackermeal (Bleached Wheat Flour, Niacin, Iron, Thiamine Mononitrate (Vitamin B1), Riboflavin (Vitamin B2) And Folic Acid), Less Than 2% Of: High Fructose Corn Syrup, Textured Vegetable Protein (Soy Flour, Soy Protein Concentrate, Caramel Color), Sea Salt, Salt, Modified Corn Starch, Soybean Oil, Carrots, Onions, Caramel Color,Potassium Chloride, Ammonium Chloride, Citric Acid, Flavorings, Enzyme Modified Cheese (Cheddar Cheese [Pasteurized Milk, Cultures, Salt, Enzymes], Cream, Water, Salt, Sodium Phosphate, Xanthan Gum, Carotenol [Color]), Yeast Extract, Lactic Acid.',
            'weight' => 1.2,
            'created_at' => '2022-02-11',
            'exp' => '2023-02-11',
        ]);
    }
}
