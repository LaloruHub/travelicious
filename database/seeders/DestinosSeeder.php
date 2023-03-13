<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destino;

class DestinosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $maria_manuela = new Destino();
        $maria_manuela->NOM = 'Maria Manuela';
        $maria_manuela->LOC = 'Asturias';
        $maria_manuela->WEB = 'https://www.booking.com/hotel/es/maria-manuela.es.html?aid=352054&label=msn-y1qe0IBUQAeFrfXgOdKfiQ-80195731774144%3Atikwd-138158448091%3Aloc-170%3Aneo%3Amte%3Alp162263%3Adec%3Aqsbooking%2BHotel%2B&sid=e612261fc7579230dcc1cb4ef3034f42&all_sr_blocks=1477502_351496303_0_1_0;checkin=2023-04-09;checkout=2023-04-10;dest_id=-394558;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;highlighted_blocks=1477502_351496303_0_1_0;hpos=1;matching_block_id=1477502_351496303_0_1_0;no_rooms=1;req_adults=2;req_children=0;room1=A%2CA;sb_price_type=total;sr_order=popularity;sr_pri_blocks=1477502_351496303_0_1_0__11640;srepoch=1678618498;srpvid=fb164cc0734f045e;type=total;ucfs=1&#hotelTmpl';
        $maria_manuela->HOT_APAR = 'h';
        $maria_manuela->PRE = '300';
        $maria_manuela->DIAS_PREV = '2';
        $maria_manuela->FEC_PREV = '2023-06-24';
        $maria_manuela->IMG = 'maria_manuela.jpg';
        $maria_manuela->NOTES = 'El Hotel & Spa María Manuela se encuentra a 27 km de Llanes y a 66 km de Potes. El aeropuerto de Asturias está situado a 123 km.';
        $maria_manuela->save();

        $playa_del_canal = new Destino();
        $playa_del_canal->NOM = 'Playa del Canal';
        $playa_del_canal->LOC = 'Asturias';
        $playa_del_canal->WEB = 'https://www.booking.com/hotel/es/apartamentos-rurales-playa-del-canal.es.html?aid=318615&label=New_Spanish_ES_ES_21463009585-ZZSNFkfmbUP2wxDVlqRDKASM640819080138%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg&sid=e612261fc7579230dcc1cb4ef3034f42&all_sr_blocks=63995102_326815327_2_0_0;checkin=2023-04-06;checkout=2023-04-10;dest_id=-407959;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;highlighted_blocks=63995102_326815327_2_0_0;hpos=1;matching_block_id=63995102_326815327_2_0_0;no_rooms=1;req_adults=2;req_children=0;room1=A%2CA;sb_price_type=total;sr_order=popularity;sr_pri_blocks=63995102_326815327_2_0_0__37400;srepoch=1678623294;srpvid=12f1561e962b0061;type=total;ucfs=1&#map_closed';
        $playa_del_canal->HOT_APAR = 'a';
        $playa_del_canal->PRE = '400';
        $playa_del_canal->DIAS_PREV = '4';
        $playa_del_canal->FEC_PREV = '2023-12-28';
        $playa_del_canal->IMG = 'playa_del_canal.jpg';
        $playa_del_canal->NOTES = 'Los Apartamentos Rurales Playa del Canal se encuentran en Villanueva de Pría, a solo 5 minutos en coche de la costa asturiana. Ocupan una hermosa casa rural y ofrecen un jardín con barbacoa.';
        $playa_del_canal->save();

        $disney_paris = new Destino();
        $disney_paris->NOM = 'Disneyland Paris';
        $disney_paris->LOC = 'París';
        $disney_paris->WEB = 'https://www.booking.com/hotel/fr/pvvaldeurope.es.html?label=msn-z0SEWcN3cuQqZNE70nXH7Q-16820913531%3Atikwd-16569648805%3Aloc-170%3Aneo%3Amte%3Alp162263%3Adec%3Aqshotel%2Bdisney%2Bparis%2B%2B%2Bentradas&sid=e612261fc7579230dcc1cb4ef3034f42&aid=352055&ucfs=1&arphpl=1&checkin=2023-08-21&checkout=2023-08-24&dest_id=51666&dest_type=hotel&group_adults=2&req_adults=2&no_rooms=1&group_children=0&req_children=0&hpos=1&hapos=1&sr_order=popularity&srpvid=8c49724fb92201e0&srepoch=1678637728&all_sr_blocks=5166626_94272404_2_2_0&highlighted_blocks=5166626_94272404_2_2_0&matching_block_id=5166626_94272404_2_2_0&sr_pri_blocks=5166626_94272404_2_2_0__49776&from_sustainable_property_sr=1&map_fdco=1&from=searchresults#hotelTmpl';
        $disney_paris->HOT_APAR = 'h';
        $disney_paris->PRE = '1000';
        $disney_paris->DIAS_PREV = '3';
        $disney_paris->FEC_PREV = '2023-08-18';
        $disney_paris->IMG = 'disney_paris.jpg';
        $disney_paris->NOTES = 'Disneyland Paris es uno de los destinos turísticos más populares en Europa. El parque temático cuenta con atracciones y entretenimiento para todas las edades.';
        $disney_paris->save();
    }
}
