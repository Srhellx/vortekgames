<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameImagesSeeder extends Seeder
{
    public function run()
    {
        $images = [
            // RPG
            'The Witcher 3: Wild Hunt' => 'The Withcher 3 Wild Hunt.jpg',
            'The Elder Scrolls V: Skyrim' => 'The Elder Scrolls V Skyrim.jpg',
            'Baldur\'s Gate 3' => 'Baldur’s Gate 3.jpg',
            'Divinity: Original Sin 2' => 'Divinity Original Sin 2.jpg',
            'Dragon Age: Inquisition' => 'Dragon Age Inquisition.jpg',
            'Fallout: New Vegas' => 'Fallout New Vegas.jpg',
            'Kingdoms of Amalur: Re-Reckoning' => 'Kingdoms Of Amalur Re-Reckoning.jpg',
            'Pillars of Eternity' => 'Pillars Of Eternity.jpg',
            'Disco Elysium' => 'Disco Elysium.jpg',
            'Pathfinder: Kingmaker' => 'Pathfinder Kingmaker.jpg',
            'Tyranny' => 'Tyranny.jpg',
            'Wasteland 3' => 'Wasteland 3.jpg',
            'Banner Saga' => 'Banner Saga.jpg',
            'Divinity: Original Sin' => 'Divinity Original Sin.jpg',
            'Slay the Spire' => 'Slay the Spire.jpg',

            // Estrategia
            'Civilization VI' => 'Civilization VI.jpg',
            'Total War: Warhammer II' => 'Total War Warhammer II.jpg',
            'Stardew Valley' => 'Stardew Valley.jpg',
            'Crusader Kings III' => 'Crusader Kings III.jpg',
            'Europa Universalis IV' => 'Europa Universalis IV.jpg',
            'Hearts of Iron IV' => 'Hearts Of Iron IV.jpg',
            'Age of Empires II: Definitive Edition' => 'Age Of Empires II Definitive Edition.jpg',
            'RimWorld' => 'RimWorld.jpg',
            'Factorio' => 'Factorio.jpg',
            'Dwarf Fortress' => 'Dwarf Fortress.jpg',
            'XCOM 2' => 'XCOM 2.jpg',
            'Heroes of Might and Magic III' => 'Heroes of Might and Magic III.jpg',
            'Frostpunk' => 'Frostpunk.jpg',
            'Kingdom: New Lands' => 'Kingdom New Lands.jpg',
            'Into the Breach' => 'Into the Breach.jpg',
            'Cities: Skylines' => 'Cities Skylines.jpg',

            // Híbrido
            'Dishonored' => 'IMG_4181.WEBP',
            'GTA 5' => 'IMG_4177.JPG',
            'Celeste' => 'IMG_4179.JPG',
            'Sekiro Shadows Die Twice' => 'IMG_4176.JPG',
            'Inside' => 'IMG_4175.JPG',
            'Batman Arkham City' => 'IMG_4174.WEBP',
            'Assasin’s Creed II' => 'IMG_4173.JPG',
            'Neon White' => 'IMG_4172.JPG',
            'Metal Gear Solid 5' => 'IMG_4171.JPG',
            'Red Dead Redemption 2' => 'IMG_4170.JPG',
            'Hollow Knight Silksong' => 'IMG_4168.WEBP',
            'The Witness' => 'IMG_4183.WEBP',
            'Monkey Island 2' => 'IMG_4185.WEBP',
            'Endling' => 'IMG_4186.JPG',
            'Immortality' => 'IMG_4187.JPG',
            'Syberia the world before' => 'IMG_4188.JPG',
            'The Beginner’s Guide' => 'IMG_4189.JPG',
            'What Remains of Edith Finch' => 'IMG_4190.JPG',
            'A Memoir Blue' => 'IMG_4191.JPG',
            'Gone Home' => 'IMG_4192.WEBP',
            'SILT' => 'IMG_4193.JPG',
            'SOMA' => 'IMG_4194.JPG',
            'Detroit Become Human' => 'IMG_4195.JPG',
            'Subnautica' => 'Subnautica.jpg',
            'Inazuma Eleven: Victory Road' => 'Inazuma Eleven.jpg',
            'Rayman Legends' => 'Rayman Legends.jpg',
            'Ori and the Will of the Wisps' => 'Ori and the Will of the Wisps.jpg',
            'Shovel Knight' => 'Shovel Knight.jpg',
            'Cuphead' => 'Cuphead.jpg',
            'The Sims 4' => 'The Sims 4.jpg',
            'Kerbal Space Program' => 'Kerbal Space Program.jpg',
            'Portal 2' => 'Portal 2.jpg',
            'The Talos Principle' => 'The Talos Principle.jpg',
            'Limbo' => 'Limbo.jpg',
            'Beat Saber' => 'Beat Saber.jpg',
            'Guitar Hero III: Legends of Rock' => 'Guitar Hero III.jpg',
            'Sayonara Wild Hearts' => 'Sayonara Wild Hearts.jpg',
            'Crypt of the NecroDancer' => 'Crypt of the NecroDancer.jpg',
            'The Last of Us Part II' => 'The Last of Us Part II.jpg',
            'God of War (2018)' => 'God of War.jpg',
            'Marvel\'s Spider-Man' => 'Marvels Spider-Man.jpg',

            // Horror
            'Silent Hill 2 Remake (2025)' => 'Silent Hill 2 Remake (2025).jpg',
            'Tormented Souls 2' => 'Tormented Souls 2.jpg',
            'Into the Dead: Our Darkest Days' => 'Into The Dead-Our Darkest Days.jpg',
            'Directive 8020' => 'Directive 8020.jpg',
            'Silent Hill F' => 'Silent Hill F.jpg',
            'Echoes of the Living' => 'Echoes Of The Living.jpg',
            'Look Outside' => 'Look Outside.jpg',
            'Dark Fracture' => 'Dark Fracture.jpg',
            'Deathground' => 'Deathground.jpg',
            'CloverPit' => 'CloverPit.jpg',
            'Go Home Annie' => 'Go Home Annie.jpg',
            'Cronos: The New Dawn' => 'Cronos- The New Dawn.jpg',
            'Zoochosis' => 'Zoochosis.jpg',
            'Five Nights at Freddy’s: Secret of the Mimic (2025)' => 'Five Nights at Freddy’s Secret Of The Mimic (2025).jpg',
            'I Hate This Place' => 'I Hate This Place.jpg',
            'Heartworm' => 'Heartworm.jpg',
            'Tenebris Somnia' => 'Tenebris Somnia.jpg',
            'Dreamcore (2025)' => 'Dreamcore (2025).jpg',
            'The Sinking City 2' => 'The Sinking City 2.jpg',
            'Fatal Frame 2: Crimson Butterfly Remake' => 'Fatal Frame 2 Crimson Butterfly Remake.jpg',
            'Alien: Isolation' => 'Alien Isolation.jpg',
            'Outlast' => 'Outlast.jpg',
        ];

        foreach ($images as $title => $filename) {
            DB::table('games')
                ->where('title', $title)
                ->update(['image' => $filename]);
        }
    }
}
