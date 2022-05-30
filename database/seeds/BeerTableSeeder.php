<?php

use Illuminate\Database\Seeder;
use App\Models\Beer;

class BeerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beers = [
            [
                'nome' => 'Guinness',
                'descrizione' => 'Birra tipica irlandese',
                'paese_di_provenienza' => 'Irlanda',
                'prezzo' => 3.50,
                'gradazione_alcolica' => 4.2,
                'tipo' => 'stout',
                'quantità' => 'Confezione da 6',
                'volume' => '33cl',
                'url' => 'https://www.beermania.it/wp-content/uploads/2017/01/guinness-600x476.jpg',
            ],
            [
                'nome' => 'Peroni',
                'descrizione' => 'Birra tipica italiana andata ai giapponesi',
                'paese_di_provenienza' => 'Italia',
                'prezzo' => 3,
                'gradazione_alcolica' => 4.7,
                'tipo' => 'lager',
                'quantità' => 'confezione da 3',
                'volume' => '66cl',
                'url' => 'https://www.cantinadellabirra.it/media/catalog/product/cache/1/image/460x750/9df78eab33525d08d6e5fb8d27136e95/b/o/bootle-peroni-cruda.png)',
            ],
            [
                'nome' => 'IPA',
                'descrizione' => 'Birra tipica indiana',
                'paese_di_provenienza' => 'India',
                'prezzo' => 5.50,
                'gradazione_alcolica' => 6,
                'tipo' => 'pale ale',
                'quantità' => 'confezione da 3',
                'volume' => '33cl',
                'url' => 'https://www.birraaltaquota.it/wp-content/uploads/2020/03/Birra-Ginevra-IPA-033-L.jpg',
            ],
            [
                'nome' => 'Tennet\'s',
                'descrizione' => 'Birra artigianale scozzese',
                'paese_di_provenienza' => 'Scozzia',
                'prezzo' => 4,
                'gradazione_alcolica' => 10,
                'tipo' => 'strong lager',
                'quantità' => 'confezione da 6',
                'volume' => '33cl',
                'url' => 'https://www.gruppolazialebevande.it/wp-content/uploads/2016/04/0641_tenn.png',
            ],
            [
                'nome' => 'Moretti',
                'descrizione' => 'Birra tipica italiana a bassa fermentazione',
                'paese_di_provenienza' => 'Italia',
                'prezzo' => 3,
                'gradazione_alcolica' => 4.7,
                'tipo' => 'pale ale',
                'quantità' => 'confezione da 3',
                'volume' => '66cl',
                'url' => 'https://www.cantinadellabirra.it/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/m/o/moretti.png',
            ]
            ];

        foreach($beers as $item){
            $beer = new Beer();

            $beer->nome = $item['nome'];
            $beer->descrizione = $item['descrizione'];
            $beer->paese_di_provenienza = $item['paese_di_provenienza'];
            $beer->prezzo = $item['prezzo'];
            $beer->gradazione_alcolica = $item['gradazione_alcolica'];
            $beer->tipo = $item['tipo'];
            $beer->quantità = $item['quantità'];
            $beer->volume = $item['volume'];
            $beer->url = $item['url'];

            $beer->save();
        }
    }
}
