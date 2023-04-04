<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Visitado;

class VisitadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estudio_oviedo = new Visitado();
        $estudio_oviedo->NOM = 'Estudio en Oviedo';
        $estudio_oviedo->LOC = 'Asturias';
        $estudio_oviedo->WEB = 'https://www.airbnb.es/rooms/635163945756853127?source_impression_id=p3_1678997917_cuVTbVwHNmcCJizk';
        $estudio_oviedo->HOT_APAR = 'a';
        $estudio_oviedo->PRE = '300';
        $estudio_oviedo->DIN_GASTADO = '200';
        $estudio_oviedo->IMG = 'estudio_oviedo.jpg';
        $estudio_oviedo->NOTES = 'En un edificio con ascensor, la vivienda se encuentra en la planta 1. Es una vivienda interior, permite reducir el ruido aunque no permite tener mucha luz natural.';
        $estudio_oviedo->VAL = '5';
        $estudio_oviedo->save();

        $pension_basagoiti = new Visitado();
        $pension_basagoiti->NOM = 'Pension Basagoiti';
        $pension_basagoiti->LOC = 'Bilbao';
        $pension_basagoiti->WEB = 'https://www.booking.com/hotel/es/pension-basagoiti.es-mx.html?aid=1181029&label=msn-VPMTfA4460dKWeMSTxnoxg-80539326887552%3Atidat-2332339040747308%3Aloc-170%3Aneo%3Amtb%3Alp162263%3Adec%3Aqspension%2Bbasagoiti&sid=e612261fc7579230dcc1cb4ef3034f42&dest_id=900039995;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;hpos=1;no_rooms=1;req_adults=2;req_children=0;room1=A%2CA;sb_price_type=total;sr_order=popularity;srepoch=1678995146;srpvid=d189896470100247;type=total;ucfs=1&#hotelTmpl';
        $pension_basagoiti->HOT_APAR = 'h';
        $pension_basagoiti->PRE = '200';
        $pension_basagoiti->DIN_GASTADO = '150';
        $pension_basagoiti->IMG = 'pension_basagoiti.jpg';
        $pension_basagoiti->NOTES = 'La Pensión Basagoiti se encuentra en Getxo, a 700 metros de la playa de Ereaga, y ofrece vistas a la ciudad. El establecimiento está a unos 4,1 km del puente de Vizcaya.';
        $pension_basagoiti->VAL = '2';
        $pension_basagoiti->save();
    }
}
