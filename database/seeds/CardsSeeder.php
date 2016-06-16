<?php

use Illuminate\Database\Seeder;

class CardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->delete();

        DB::table('cards')->insert(array(
            array('name'=>'10 of clubs','img_url'=>'10_of_clubs.png'),
            array('name'=>'10 of diamonds', 'img_url'=>'10_of_diamonds.png'),
            array('name'=>'10 of hearts', 'img_url'=>'10_of_hearts.png'),
            array('name'=>'10 of spades', 'img_url'=>'10_of_spades.png'),
            array('name'=>'2 of clubs', 'img_url'=>'2_of_clubs.png'),
            array('name'=>'2 of diamonds', 'img_url'=>'2_of_diamonds.png'),
            array('name'=>'2 of hearts', 'img_url'=>'2_of_hearts.png'),
            array('name'=>'2 of spades', 'img_url'=>'2_of_spades.png'),
            array('name'=>'3 of clubs', 'img_url'=>'3_of_clubs.png'),
            array('name'=>'3 of diamonds', 'img_url'=>'3_of_diamonds.png'),
            array('name'=>'3 of hearts', 'img_url'=>'3_of_hearts.png'),
            array('name'=>'3 of spades', 'img_url'=>'3_of_spades.png'),
            array('name'=>'4 of clubs', 'img_url'=>'4_of_clubs.png'),
            array('name'=>'4 of diamonds', 'img_url'=>'4_of_diamonds.png'),
            array('name'=>'4 of hearts', 'img_url'=>'4_of_hearts.png'),
            array('name'=>'4 of spades', 'img_url'=>'4_of_spades.png'),
            array('name'=>'5 of clubs', 'img_url'=>'5_of_clubs.png'),
            array('name'=>'5 of diamonds', 'img_url'=>'5_of_diamonds.png'),
            array('name'=>'5 of hearts', 'img_url'=>'5_of_hearts.png'),
            array('name'=>'5 of spades', 'img_url'=>'5_of_spades.png'),
            array('name'=>'6 of clubs', 'img_url'=>'6_of_clubs.png'),
            array('name'=>'6 of diamonds', 'img_url'=>'6_of_diamonds.png'),
            array('name'=>'6 of hearts', 'img_url'=>'6_of_hearts.png'),
            array('name'=>'6 of spades', 'img_url'=>'6_of_spades.png'),
            array('name'=>'7 of clubs', 'img_url'=>'7_of_clubs.png'),
            array('name'=>'7 of diamonds', 'img_url'=>'7_of_diamonds.png'),
            array('name'=>'7 of hearts', 'img_url'=>'7_of_hearts.png'),
            array('name'=>'7 of spades', 'img_url'=>'7_of_spades.png'),
            array('name'=>'8 of clubs', 'img_url'=>'8_of_clubs.png'),
            array('name'=>'8 of diamonds', 'img_url'=>'8_of_diamonds.png'),
            array('name'=>'8 of hearts', 'img_url'=>'8_of_hearts.png'),
            array('name'=>'8 of spades', 'img_url'=>'8_of_spades.png'),
            array('name'=>'9 of clubs', 'img_url'=>'9_of_clubs.png'),
            array('name'=>'9 of diamonds', 'img_url'=>'9_of_diamonds.png'),
            array('name'=>'9 of hearts', 'img_url'=>'9_of_hearts.png'),
            array('name'=>'9 of spades', 'img_url'=>'9_of_spades.png'),
            array('name'=>'ace of clubs', 'img_url'=>'ace_of_clubs.png'),
            array('name'=>'ace of hearts', 'img_url'=>'ace_of_hearts.png'),
            array('name'=>'ace of diamonds', 'img_url'=>'ace_of_diamonds.png'),
            array('name'=>'ace of spades', 'img_url'=>'ace_of_spades.png'),
            array('name'=>'jack of clubs', 'img_url'=>'jack_of_clubs.png'),
            array('name'=>'jack of hearts', 'img_url'=>'jack_of_hearts.png'),
            array('name'=>'jack of diamonds', 'img_url'=>'jack_of_diamonds.png'),
            array('name'=>'jack of spades', 'img_url'=>'jack_of_spades.png'),
            array('name'=>'king of clubs', 'img_url'=>'king_of_clubs.png'),
            array('name'=>'king of hearts', 'img_url'=>'king_of_hearts.png'),
            array('name'=>'king of diamonds', 'img_url'=>'king_of_diamonds.png'),
            array('name'=>'king of spades', 'img_url'=>'king_of_spades.png'),
            array('name'=>'queen of clubs', 'img_url'=>'queen_of_clubs.png'),
            array('name'=>'queen of hearts', 'img_url'=>'queen_of_hearts.png'),
            array('name'=>'queen of diamonds', 'img_url'=>'queen_of_diamonds.png'),
            array('name'=>'queen of spades', 'img_url'=>'queen_of_spades.png')

            ));
    }
}
