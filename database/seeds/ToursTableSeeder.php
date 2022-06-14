<?php

use App\Tour;
use Illuminate\Database\Seeder;

class ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tours = [
            [
                'duration' => '8 Day',
                'img' => 'https://giorgiaboitano.com/2013/05/norvegia-fiordi.jpg?w=820&h=452',
                'location' => 'Norway, Oslo, Fjords and Glaciers ',
                'number_travelers' => 2,
                'city_departure' => 'Milano, Roma, Napoli, Torino',
                'date_departure' => '2022-08-11',
                'date_return' => '2022-08-19',
                'is_available' => true,
                'price' => '1395',
                'description' => 'Scopri la Norvegia e i suoi fiordi, in questa avventura i paesaggi e le leggende ti accompagneranno per tutto il viaggio. Non perderlo.',
                'note' => '',
            ],

            [
                'duration' => '4 Day',
                'img' => 'image.png',
                'location' => 'Norway, Oslo',
                'number_travelers' => 2,
                'city_departure' => 'Milano, Roma, Napoli, Torino',
                'date_departure' => '2022-08-11',
                'date_return' => '2022-08-15',
                'is_available' => true,
                'price' => '1200',
                'description' => 'Scopri la Norvegia e i suoi fiordi, in questa avventura i paesaggi e le leggende ti accompagneranno per tutto il viaggio. Non perderlo.',
                'note' => '',
            ],

            [
                'duration' => '8 Day',
                'img' => 'https://cdn.logitravel.it/wsimgresize/resize/crop/990/350/cdn.logitravel.it/contenidos/fotos/CIUDADES_990_350/8857.jpg?jpegQuality=97',
                'location' => 'Iceland, Vik, Reynisfjara',
                'number_travelers' => 2,
                'city_departure' => 'Milano, Roma, Napoli, Torino',
                'date_departure' => '2022-08-11',
                'date_return' => '2022-08-19',
                'is_available' => true,
                'price' => '1100',
                'description' => "L'Islanda è la terra del fuoco e del ghiaccio. Vieni a scoprire la natura nella sua forma più pura, vivi l'avventura al massimo e lasciati andare.",
                'note' => '',
            ],

            [
                'duration' => '4 Day',
                'img' => 'https://img1.10bestmedia.com/Images/Photos/384645/Over-view_54_990x660.jpg',
                'location' => 'Iceland, Reykjavik',
                'number_travelers' => 2,
                'city_departure' => 'Milano, Roma, Napoli, Torino',
                'date_departure' => '2022-08-11',
                'date_return' => '2022-08-15',
                'is_available' => true,
                'price' => '800',
                'description' => 'Scopri la Norvegia e i suoi fiordi, in questa avventura i paesaggi e le leggende ti accompagneranno per tutto il viaggio. Non perderlo.',
                'note' => '',
            ],
        ];

        foreach ($tours as $tour){
            $new_tour = new Tour();
            $new_tour->duration = $tour['duration'];
            $new_tour->img = $tour['img'];
            $new_tour->location = $tour['location'];
            $new_tour->number_travelers = $tour['number_travelers'];
            $new_tour->city_departure = $tour['city_departure'];
            $new_tour->date_departure = $tour['date_departure'];
            $new_tour->date_return = $tour['date_return'];
            $new_tour->is_available = $tour['is_available'];
            $new_tour->price = $tour['price'];
            $new_tour->description = $tour['description'];
            $new_tour->note = $tour['note'];
            $new_tour->save();
        }
    }
};
