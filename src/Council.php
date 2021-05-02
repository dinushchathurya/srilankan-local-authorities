<?php

namespace Dinushchathurya\Council;

class Council{
	
	public static function getProvinces(){
        return array_keys(self::$Council);
    }

    public static function getDistricts($council){
        return array_keys(self::$Council[$council]);
    }

    public static function getAuthorities($authority){
        foreach(self::$Council as $council => $curAuthority){
            if(in_array($authority,array_keys($curAuthority))){
                return $curAuthority[$authority];
            }
        }
    }

    public static $Council = array(
        
        'Western' => array(
            'Colombo' =>
                array(
                    'Colombo Municipal council',
                    'Dehiwala-Mount Lavinia Municipal council',
                    'Sri Jayawardenepura Kotte Municipal council',
                    'Kaduwela Municipal council',
                    'Moratuwa Municipal council',
                    'Kolonnawa Urban council',
                    'Seethawakapura Urban council',
                    'Maharagama Urban council',
                    'Boralesgamuwa Urban council',
                    'Kesbewa Urban council',
                    'Homagama Pradeshiya Sabha',
                    'Kotikawatta Mulleriyawa Pradeshiya Sabha',
                    'Seethawaka Pradeshiya Sabha',
                ),

            'Gampaha' =>
                array(
                    'Negombo Municipal council',
                    'Gampaha Municipal council',
                    'Wattala-Mabola Urban council',
                    'Peliyagoda Urban council',
                    'Katunayake-Seeduwa Urban council',
                    'Minuwangoda Urban council',
                    'Ja-Ela Urban council',
                    'Attanagalla Pradeshiya Sabha',
                    'Biyagama Pradeshiya Sabha',
                    'Divulapitiya Pradeshiya Sabha',
                    'Dompe Pradeshiya Sabha',
                    'Gampaha Pradeshiya Sabha',
                    'Ja-ela Pradeshiya Sabha',
                    'Katana Pradeshiya Sabha',
                    'Kelaniya Pradeshiya Sabha',
                    'Mahara Pradeshiya Sabha',
                    'Meerigama Pradeshiya Sabha',
                    'Minuwangoda Pradeshiya Sabha',
                    'Wattala Pradeshiya Sabha',
                ),

            'Kalutara' =>
                array(
                    'Panadura Urban council',
                    'Horana Urban council',
                    'Kalutara Urban council',
                    'Beruwala Urban council',
                    'Agalawatta Pradeshiya Sabha',
                    'Bandaragama Pradeshiya Sabha',
                    'Beruwela Pradeshiya Sabha',
                    'Bulathsinhala Pradeshiya Sabha',
                    'Dodangoda Pradeshiya Sabha',
                    'Horana Pradeshiya Sabha',
                    'Kalutara Pradeshiya Sabha',
                    'Madurawela Pradeshiya Sabha',
                    'Matugama Pradeshiya Sabha',
                    'Palindanuwara Pradeshiya Sabha',
                    'Panadura Pradeshiya Sabha',
                    'Walallawita Pradeshiya Sabha',
                ),
        ),

        'North Western' => array(
            'Kurunegala' =>
                array(
                    'Kurunegala Municipal council',
                    'Kuliyapitiya Urban council',
                    'Alawwa Pradeshiya Sabha',
                    'Bingiriya Pradeshiya Sabha',
                    'Galgamuwa Pradeshiya Sabha',
                    'Giribawa Pradeshiya Sabha',
                    'Ibbagamuwa Pradeshiya Sabha',
                    'Kobeiagane Pradeshiya Sabha',
                    'Kuliyapitiya Pradeshiya Sabha',
                    'Kurunegala Pradeshiya Sabha',
                    'Mahawa Pradeshiya Sabha',
                    'Mawathagama Pradeshiya Sabha',
                    'Narammala Pradeshiya Sabha',
                    'Nikaweratiya Pradeshiya Sabha',
                    'Panduwasnuwara Pradeshiya Sabha',
                    'Pannala Pradeshiya Sabha',
                    'Polgahawela Pradeshiya Sabha',
                    'Polpithigama Pradeshiya Sabha',
                    'Ridigama Pradeshiya Sabha',
                    'Udubaddawa Pradeshiya Sabha',
                    'Wariyapola Pradeshiya Sabha',
                ),

            'Puttalam' =>
                array(
                    'Puttalam Urban council',
                    'Chilaw Urban council',
                    'Anamaduwa Pradeshiya Sabha',
                    'Arachchikattuwa Pradeshiya Sabha',
                    'Chilaw Pradeshiya Sabha',
                    'Kalpitiya Pradeshiya Sabha',
                    'Karuwalagaswewa Pradeshiya Sabha',
                    'Nattandiya Pradeshiya Sabha',
                    'Nawagattegama Pradeshiya Sabha',
                    'Puttalam Pradeshiya Sabha',
                    'Wanathawilluwa Pradeshiya Sabha',
                    'Wennappuwa Pradeshiya Sabha',
                ),
        ),

        'Central' => array(
            'Kandy' =>
                array(
                    'Kandy Municipal council',
                    'Wattegama Urban council',
                    'Kadugannawa Urban council',
                    'Gampola Urban council',
                    'Nawalapitiya Urban council',
                    'Akurana Pradeshiya Sabha',
                    'Ganga Ihala Pradeshiya Sabha',
                    'Harispattuwa Pradeshiya Sabha',
                    'Kandy Gravets & Gangawata Korale Pradeshiya Sabha',
                    'Kundasale Pradeshiya Sabha',
                    'Meda Dumbara Pradeshiya Sabha',
                    'Minipe Pradeshiya Sabha',
                    'Panwila Pradeshiya Sabha',
                    'Pasbage Korale Pradeshiya Sabha',
                    'Patadumbara Pradeshiya Sabha',
                    'Patahewaheta Pradeshiya Sabha',
                    'Pujapitiya Pradeshiya Sabha',
                    'Thumpane Pradeshiya Sabha',
                    'Uda Palatha Pradeshiya Sabha',
                    'Ududumbara Pradeshiya Sabha',
                    'Udunuwara Pradeshiya Sabha',
                    'Yatinuwara Pradeshiya Sabha',
                ),

            'Matale' =>
                array(
                    'Matale Municipal council',
                    'Dambulla Municipal council',
                    'Ambanganga Korale Pradeshiya Sabha',
                    'Dambulla Pradeshiya Sabha',
                    'Galewala Pradeshiya Sabha',
                    'Laggala-Pallegama Pradeshiya Sabha',
                    'Matale Pradeshiya Sabha',
                    'Naula Pradeshiya Sabha',
                    'Pallepola Pradeshiya Sabha',
                    'Rattota Pradeshiya Sabha',
                    'Ukuwela Pradeshiya Sabha',
                    'Wilgamuwa Pradeshiya Sabha',
                    'Yatawatta Pradeshiya Sabha',
                ),

            'Nuwara Eliya' =>
                array(
                    'Nuwara Eliya Municipal council',
                    'Hatton-Dickoya Urban council',
                    'Talawakele-Lindula Urban council',
                    'Ambagamuwa Pradeshiya Sabha',
                    'Hanguranketha Pradeshiya Sabha',
                    'Kothmale Pradeshiya Sabha',
                    'Nuwara Eliya Pradeshiya Sabha',
                    'Walapane Pradeshiya Sabha',
                ),
        ),

        'Uva' => array(
            'Badulla' =>
                array(
                    'Badulla Municipal council',
                    'Bandarawela Municipal council',
                    'Haputale Urban council',
                    'Badulla Pradeshiya Sabha',
                    'Bandarawela Pradeshiya Sabha',
                    'Ella Pradeshiya Sabha',
                    'Haldummulla Pradeshiya Sabha',
                    'Hali-Ela Pradeshiya Sabha',
                    'Haputale Pradeshiya Sabha',
                    'Kandeketiya Pradeshiya Sabha',
                    'Lunugala Pradeshiya Sabha',
                    'Mahiyanganaya Pradeshiya Sabha',
                    'Meegahakiula Pradeshiya Sabha',
                    'Passara Pradeshiya Sabha',
                    'Rideemaliyadda Pradeshiya Sabha',
                    'Soranatota Pradeshiya Sabha',
                    'Uva Paranagama Pradeshiya Sabha',
                    'Welimada Pradeshiya Sabha',
                ),

            'Monaragala' =>
                array(
                    'Badalkumbara Pradeshiya Sabha',
                    'Bibila Pradeshiya Sabha',
                    'Buttala Pradeshiya Sabha',
                    'Kataragama Pradeshiya Sabha',
                    'Madulla Pradeshiya Sabha',
                    'Medagama Pradeshiya Sabha',
                    'Moneragala Pradeshiya Sabha',
                    'Siyambalanduwa Pradeshiya Sabha',
                    'Thanamalwila Pradeshiya Sabha',
                    'Wellawaya Pradeshiya Sabha',
                ),
        ),

        'Southern' => array(
            'Galle' =>
                array(
                    'Galle Municipal council',
                    'Ambalangoda Urban council',
                    'Hikkaduwa Urban council',
                    'Akmeemana Pradeshiya Sabha',
                    'Ambalangoda Pradeshiya Sabha',
                    'Baddegama Pradeshiya Sabha',
                    'Balapitiya Pradeshiya Sabha',
                    'Bentota Pradeshiya Sabha',
                    'Bope-Poddala Pradeshiya Sabha',
                    'Elpitiya Pradeshiya Sabha',
                    'Habaraduwa Pradeshiya Sabha',
                    'Imaduwa Pradeshiya Sabha',
                    'Karandeniya Pradeshiya Sabha',
                    'Nagoda Pradeshiya Sabha',
                    'Neluwa Pradeshiya Sabha',
                    'Ambalangoda Pradeshiya Sabha',
                    'Niyagama Pradeshiya Sabha',
                    'Raggama Pradeshiya Sabha',
                    'Thawalama Pradeshiya Sabha',
                    'Welivitiya-Divithura Pradeshiya Sabha',
                    'Yakkalamulla Pradeshiya Sabha',
                ),

            'Matara' =>
                array(
                    'Matara Municipal council',
                    'Weligama Urban council',
                    'Akuressa Pradeshiya Sabha',
                    'Athuraliya Pradeshiya Sabha',
                    'Devinuwara Pradeshiya Sabha',
                    'Dickwella Pradeshiya Sabha',
                    'Hakmana Pradeshiya Sabha',
                    'Kamburupitiya Pradeshiya Sabha',
                    'Kirinda-Puhulwella Pradeshiya Sabha',
                    'Kotapola Pradeshiya Sabha',
                    'Malimbada Pradeshiya Sabha',
                    'Matara Pradeshiya Sabha',
                    'Mulatiyana Pradeshiya Sabha',
                    'Pasgoda Pradeshiya Sabha',
                    'Pitabeddara Pradeshiya Sabha',
                    'Thihagoda Pradeshiya Sabha',
                    'Weligama Pradeshiya Sabha',
                ),

            'Hambantota' =>
                array(
                    'Hambantota Municipal council',
                    'Tangalle Urban council',
                    'Ambalantota Pradeshiya Sabha',
                    'Angunakolapelassa Pradeshiya Sabha',
                    'Beliatta Pradeshiya Sabha',
                    'Hambantota Pradeshiya Sabha',
                    'Katuwana Pradeshiya Sabha',
                    'Lunugamvehera Pradeshiya Sabha',
                    'Sooriyawewa Pradeshiya Sabha',
                    'Tangalle Pradeshiya Sabha',
                    'Tissamaharama Pradeshiya Sabha',
                    'Weeraketiya Pradeshiya Sabha',
                ),
        ),

        'Sabaragamuwa' => array(
            'Ratnapura' =>
                array(
                    'Ratnapura Municipal council',
                    'Balangoda Urban council',
                    'Embilipitiya Urban council',
                    'Ayagama Pradeshiya Sabha',
                    'Balangoda Pradeshiya Sabha',
                    'Ehaliyagoda Pradeshiya Sabha',
                    'Embilipitiya Pradeshiya Sabha',
                    'Godakawela Pradeshiya Sabha',
                    'Imbulpe Pradeshiya Sabha',
                    'Kahawatta Pradeshiya Sabha',
                    'Kalawana Pradeshiya Sabha',
                    'Kolonna Pradeshiya Sabha',
                    'Kuruwita Pradeshiya Sabha',
                    'Nivithigala Pradeshiya Sabha',
                    'Pelmadulla Pradeshiya Sabha',
                    'Rathnapura Pradeshiya Sabha',
                    'Weligepola Pradeshiya Sabha',
                ),

            'Kegalle' =>
                array(
                    'Kegalle Municipal council',
                    'Aranayake Pradeshiya Sabha',
                    'Bulathkohupitiya Pradeshiya Sabha',
                    'Dehiowita Pradeshiya Sabha',
                    'Deraniyagala Pradeshiya Sabha',
                    'Galigamuwa Pradeshiya Sabha',
                    'Kegalle Pradeshiya Sabha',
                    'Mawanella Pradeshiya Sabha',
                    'Rambukkana Pradeshiya Sabha',
                    'Ruwanwella Pradeshiya Sabha',
                    'Warakapola Pradeshiya Sabha',
                    'Yatiyantota Pradeshiya Sabha',
                ),
        ),

        'North Central' => array(
            'Anuradhapura' =>
                array(
                    'Anuradhapura Municipal council',
                    'Galenbindunuwewa Pradeshiya Sabha',
                    'Galnewa Pradeshiya Sabha',
                    'Horowpathana Pradeshiya Sabha',
                    'Ipalogama Pradeshiya Sabha',
                    'Kahatagasdigiliya Pradeshiya Sabha',
                    'Kebathigollawa Pradeshiya Sabha',
                    'Kekirawa Pradeshiya Sabha',
                    'Medawachchiya Pradeshiya Sabha',
                    'Mihintale Pradeshiya Sabha',
                    'Nochchiyagama Pradeshiya Sabha',
                    'Nuwaragam Palatha (East) Pradeshiya Sabha',
                    'Nuwaragam Palatha (Central) Pradeshiya Sabha',
                    'Padaviya Pradeshiya Sabha',
                    'Palagala Pradeshiya Sabha',
                    'Rajanganaya Pradeshiya Sabha',
                    'Rambewa Pradeshiya Sabha',
                    'Thalawa Pradeshiya Sabha',
                    'Thirappane Pradeshiya Sabha',
                ),

            'Polonnaruwa' =>
                array(
                    'Polonnaruwa Municipal council',
                    'Dimbulagala Pradeshiya Sabha',
                    'Elahera Pradeshiya Sabha',
                    'Hingurakgoda Pradeshiya Sabha',
                    'Lankapura Pradeshiya Sabha',
                    'Medirigiriya Pradeshiya Sabha',
                    'Polonnaruwa Pradeshiya Sabha',
                    'Welikanda Pradeshiya Sabha',
                ),
        ),

        'Northern' => array(
            'Jaffna' =>
                array(
                    'Jaffna Municipal council',
                    'Point Pedro Urban council',
                    'Valvettithurai Urban council',
                    'Chavakachcheri Urban council',
                    'Chavakachcheri Pradeshiya Sabha',
                    'Delft Pradeshiya Sabha',
                    'Karainagar Pradeshiya Sabha',
                    'Kayts Pradeshiya Sabha',
                    'Nallur Pradeshiya Sabha',
                    'Point Pedro Pradeshiya Sabha',
                    'Vadamarachchi South West Pradeshiya Sabha',
                    'Valikamam East Pradeshiya Sabha',
                    'Valikamam North Pradeshiya Sabha',
                    'Valikamam West Pradeshiya Sabha',
                    'Valikamam South Pradeshiya Sabha',
                    'Valikamam South West Pradeshiya Sabha',
                    'Velanai Pradeshiya Sabha',
                ),

            'Kilinochchi' =>
                array(
                    'Karachchi Pradeshiya Sabha',
                    'Pachchilaipalli Pradeshiya Sabha',
                    'Poonakary Pradeshiya Sabha',
                ),
            'Mannar' =>
                array(
                    'Mannar Pradeshiya Sabha',
                    'Manthai West Pradeshiya Sabha',
                    'Musali Pradeshiya Sabha',
                    'Nanaddan Pradeshiya Sabha',
                ),

            'Vavuniya' =>
                array(
                    'Vavuniya Urban council',
                    'Vavuniya North Pradeshiya Sabha',
                    'Vavuniya South Sinhala Pradeshiya Sabha',
                    'Vavuniya South Tamil Pradeshiya Sabha',
                    'Vengalacheddikulam Pradeshiya Sabha',
                ),
            
            'Mullaitivu' =>
                array(
                    'Manthai East Pradeshiya Sabha',
                    'Maritimepattu Pradeshiya Sabha',
                    'Puthukudiyiruppu Pradeshiya Sabha',
                    'Thunukkai Pradeshiya Sabha',
                ),
        ),

        'Eastern' => array(
            'Batticaloa' =>
                array(
                    'Batticaloa Municipal council',
                    'Kattankudi Urban council',
                    'Eravur Urban council',
                    'Eravurpattu Pradeshiya Sabha',
                    'Koralaipattu Pradeshiya Sabha',
                    'Koralaipattu West Pradeshiya Sabha',
                    'Koralaipattu North Pradeshiya Sabha',
                    'Manmunai South Eruvilpattu Pradeshiya Sabha',
                    'Manmunai Pradeshiya Sabha',
                    'Manmunai West Pradeshiya Sabha',
                    'Manmunai South West Pradeshiya Sabha',
                    'Porativupattu Pradeshiya Sabha',
                ),

            'Ampara' =>
                array(
                    'Kalmunai Municipal council',
                    'Akkaraipattu Municipal council',
                    'Ampara Urban council',
                    'Dehiyattakandiya Pradeshiya Sabha',
                    'Damana Pradeshiya Sabha',
                    'Uhana Pradeshiya Sabha',
                    'Mahaoya Pradeshiya Sabha',
                    'Namaloya Pradeshiya Sabha',
                    'Padiyatalawa Pradeshiya Sabha',
                    'Sammanthurai Pradeshiya Sabha',
                    'Akkaraipattu Pradeshiya Sabha',
                    'Potuvil Pradeshiya Sabha',
                    'Addalachchnai Pradeshiya Sabha',
                    'Alayadivembu Pradeshiya Sabha',
                    'Lahugala Pradeshiya Sabha',
                    'Nindavur Pradeshiya Sabha',
                    'Thirukkovil Pradeshiya Sabha',
                    'Karaithivu Pradeshiya Sabha',
                    'Navithanveli Pradeshiya Sabha',
                    'Irrakkaram Pradeshiya Sabha',
                ),
            
            'Trincomalee' =>
                array(
                    'Trincomalee Urban council',
                    'Kinniya Urban council',
                    'Seruvila Pradeshiya Sabha',
                    'Kantalai Pradeshiya Sabha',
                    'Morawewa Pradeshiya Sabha',
                    'Gomarankadawala Pradeshiya Sabha',
                    'Padavisripura Pradeshiya Sabha',
                    'Trincomalee Town & Gravets Pradeshiya Sabha',
                    'Kuchchaveli Pradeshiya Sabha',
                    'Thampalakamam Pradeshiya Sabha',
                    'Muttur Pradeshiya Sabha',
                    'Kinniya Pradeshiya Sabha',
                    'Verugal Pradeshiya Sabha',
                ),
        ),
    );
}
