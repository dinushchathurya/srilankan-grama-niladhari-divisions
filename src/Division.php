<?php 

namespace Dinushchathurya\Division;

class Division {

    public static function getProvince(){
        return array_keys(self::$Division);
    }

    public static function getDistricts($province){
        return array_keys(self::$Division[$province]);
    }

    public static function getDivisions($division){
        foreach(self::$Division as $province => $curDivision){
            if(in_array($division,array_keys($curDivision))){
                return $curDivision[$division];
            }
        }
    }

    public static $Division = array(

        'Western' => array(
            'Colombo' =>
                array(
                    'Sammanthranapura-(සම්මන්ත්‍රණපුර)',
                    'Mattakkuliya-(මට්ටක්කුලිය)',
                    'Modara-(මෝදර)',
                    'Madampitiya-(මාදම්පිටිය)',
                    'Mahawatta-(මහවත්ත)',
                    'Aluthmawatha-(අළුත්මාවත)',
                    'Lunupokuna-(ලුණුපොකුණ)',
                    'Bloemendhal-(බ්ලුමැන්ඩල්)',
                    'Kotahena East-(කොටහේන නැගෙනහිර)',
                    'Kotahena West-(කොටහේන බටහිර)',
                    'Kochchikade North-(කොච්චිකඩේ උතුර)',
                    'Jinthupitiya-(ජින්තුපිටිය)',
                    'Massangar Street-(මසංගස් විදිය)',
                    'New Bazaar-(නිව් බසාර්)',
                    'Grandpass South-(ග්‍රෑන්ඩ්පාස් දකුණ)',
                    'Grandpass North-(ග්‍රෑන්ඩ්පාස් උතුර)',
                    'Nawagampura-(නවගම්පුර)',
                    'Maligawatta East-(මාලිගාවත්ත නැගෙනහිර)',
                    'Kettarama-(ඛෙත්තාරාම)',
                    'Aluthkade East-(අළුත්කඩේ නැගෙනහිර)',
                    'Aluthkade West-(අළුත්කඩේ බටහිර)',
                    'Kochchikade South-(කොච්චිකඩේ දකුණ)',
                    'Pettah-(පිටකොටුව)',
                    'Fort-(කොටුව)',
                    'Galle Face-(ගාලුමුවදොර)',
                    'Slave Island-(කොම්පඤ්ඤ වීදිය)',
                    'Hunupitiya-(හුණුපිටිය)',
                    'Suduwella-(සුදුවැල්ල)',
                    'Keselwatta-(කෙසෙල්වත්ත)',
                    'Panchikawatta-(පංචිකාවත්ත)',
                    'Maligawatta West-(මාලිගාවත්ත බටහිර)',
                    'Maligakanda-(මාලිගාකන්ද)',
                    'Maradana-(මරදාන)',
                    'Ibbanwala-(ඉබ්බන්වල)',
                    'Wekanda-(වෑකන්ද)',
                    'Wathulla-(වදුල්ල)',
                    'Sedawatta-(සේදවත්ත)',
                    'Halmulla-(හල්මුල්ල)',
                    'Kotuvila-(කොටුවිල)',
                    'Veheragoda-(වෙහෙරගොඩ)',
                    'Orugodawatta-(ඔරුගොඩවත්ත)',
                    'Meethotamulla-(මිතොටමුල්ල)',
                    'Welewaththa-(වෙලේවත්ත)',
                    'Kiththampahuwa-(කිත්තම්පහුව)',
                    'Wennawatta-(වෙන්නවත්ත)',
                    'Maha Buthgamuwa B-(මහබුත්ගමුව B)',
                    'Kuda Buthgamuwa-(කුඩා බුත්ගමුව)',
                    'Kelanimulla-(කැලණිමුල්ල)',
                    'Ambathale-(අඔත‍ලේ)',
                    'Mulleriyawa North-(මුල්ලේරියාව උතුර)',
                    'Belagama-(බැලගම)',
                    'Kotikawatta East-(කොටිකාවත්ත නැගෙනහිර)',
                    'Maha Buthgamuwa A-(මහ බුත්ගමුව A)',
                    'Maha Buthgamuwa C-(මහ බුත්ගමුව C)',
                    'Wellampitiya-(වැල්ලමිපිටිය)',
                    'Kuriniyawatta-(කුරුණියාවත්ත)',
                    'Kolonnawa-(කොළොන්නාව)',
                    'Dahampura-(දහම්පුර)',
                    'Singhapura-(සිංහපුර)',
                    'Megoda Kolonnawa-(මෙගොඩ කොලොන්නාව)',
                    'Bopeththa-(බෝපැත්ත)',
                    'Batalandahena-(බටලන්ද‍හේන)',
                    'Kotikawatta West-(කොටිකාවත්ත බටහිර	)',
                    'Mulleriyawa South-(මුල්ලේරියාව දකුණ)',
                    'Malgama-(මල්ගම)',
                    'Udumulla North-(උඩුමුල්ල උතුර)',
                    'Maligagodella-(මාළිගාගොඩැල්ල)',
                    'Rajasinghagama-(රාජසිංහගම)',
                    'Udumulla South-(උඩුමුල්ල දකුණ)',
                    'Himbutana East-(හිඹුටාන නැගෙනහිර)',
                    'Himbutana West-(හිඹුටාන බටහිර)',
                    'Malpura-(මල්පුර)',
                    'Gothatuwa New Town-(ගොතටුව නව නගරය)',
                    'Kajugahawatta-(කජුගහවත්ත)',
                    'Gothatuwa-(ගොතටුව)',
                    'Salamulla-(සාලමුල්ල)',
                    'Wijayapura-(විජයපුර)',
                    'Gajabapura-(ගජබාපුර)',
                    'Madinnagoda-(මාදින්නාගොඩ)',
                    'Elhena-(ඇල්හේන)',
                    'Dodamgahahena-(දොඩමිගහහේන)',
                    'Welivita-(වැලිවිට)',
                    'Raggahawatta-(රග්ගහවත්ත)',
                    'Hewagama-(හේවාගම)',
                    'Kaduwela-(කඩුවෙල)',
                    'Pahala Bomiriya-(පහළ බෝමිරිය)',
                    'Ihala Bomiriya-(ඉහළ බෝමිරිය)',
                    'Wekewatta-(වැකේවත්ත)',
                    'Nawagamuwa-(නවගමුව)',
                    'Pahala Bomiriya B-(පහළ බෝමිරිය බි)',
                    'Welihinda-(වැලිහිඳ)',
                    'Kothalawala-(කොතලාවල)',
                    'Mahadeniya-(මහදෙනිය)',
                    'Thalahena North-(තලාහේන උතුර)',
                    'Malabe North-(මාළ‍‍ෙඔ උතුර)',
                    'Thunadahena-(තුන්අදහේන)',
                    'Korathota-(කොරතොට)',
                    'Nawagamuwa South-(නවගමුව දකුණ)',
                    'Batewela-(බටේ‍වෙල)',
                    'Ranala-(රණාල)',
                    'Dedigamuwa-(දැඩිගමුව)',
                    'Embilladeniya-(ඇඔල්ලදෙණිය)',
                    'Welipillewa-(වැළිපිල්ලැව)',
                    'Shanthalokagama-(ශාන්තාලෝකගම)',
                    'Pore-(පෝරේ)',
                    'Malabe East-(මාළ‍බේ නැගනහිර)',
                    'Malabe West-(මාල‍බේ බටහිර)',
                    'Thalangama North B-(තලංගම උතුර B)',
                    'Thalahena South-(තලාහේන දකුණ)',
                )
        ),
    )

}