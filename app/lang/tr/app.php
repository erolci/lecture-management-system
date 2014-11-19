<?php

/**
 * TürkTrust turkish localization
 */

return array(

    /*
    |--------------------------------------------------------------------------
    | Global defines
    |--------------------------------------------------------------------------
    */

    'site_name'   => 'TURKTRUST',
    'title'       => 'TURKTRUST | Online İşlemler',
    'description' => 'TürkTrust online işlemler sayfasında e-imza ve ssl ile ilgili işlemlerinizi gerçekleştirebilirsiniz.',
    'keywords'    => 'türktrust, online işlemler',
    'footer_text' => 'TÜRKTRUST Bilgi İletişim ve Bilişim Güvenliği Hizmetleri A.Ş.',


    /*
    |--------------------------------------------------------------------------
    | Defines
    |--------------------------------------------------------------------------
    */

    'defines' => array(

        // E-Sign
        'esign' => array(

            // Hour intervals
            'hour_intervals' => array(
                '0' => "09:00-10:00 arası",
                '1' => "10:00-12:00 arası",
                '2' => "13:00-15:00 arası",
                '3' => "15:00-17:00 arası",
                '4' => "17:00-18:00 arası",
            ),

            // Application statuses
            'application_statuses' => array(
                '0'  => 'Yeni Başvuru',
                '1'  => 'Çağrı Merkezi Görüşecek',
                '2'  => 'Çağrı Merkezi Ulaşamadı',
                '3'  => 'Çağrı Merkezi İle İşlem Tamamlandı',
                '4'  => 'Başvuru İptal Edildi',
                '5'  => 'Eksik Başvuru',
                '6'  => 'Online Yeni Başvuru',
                '7'  => 'Online Yenileme Başvuru',
                '8'  => 'Sertifika Üretildi',
                '9'  => 'Kimlik Doğrulanamadi',
                '10' => 'Toplu Başvuru',
                '11' => 'Yeni Başvuru Bayi'
            ),

            // Application years
            'application_years' => array(
                '0' => 'Girilmedi',
                '1' => 'Bir Yıl',
                '2' => 'İki Yıl',
                '3' => 'Üç Yıl',
            ),

            // Application types
            'application_types' => array(
                '0' => 'Bireysel',
                '1' => 'Kurumsal',
            ),

            // Application payment types
            'application_payment_types' => array(
                '0' => 'Kredi Kartı',
                '1' => 'Havale/EFT',
            ),

            // Application payment statuses
            'application_payment_statuses' => array(
                '0' => 'Ödendi',
                '1' => 'Ödenmedi',
            ),

            // Application smartcard statuses
            'application_smartcard_statuses' => array(
                '0' => 'Yok',
                '1' => 'Var',
            ),

            // Application smartcard reader statuses
            'application_smartcard_reader_statuses' => array(
                '0' => 'Yok',
                '1' => 'Var',
            ),

            // Application smartstick statuses
            'application_smartstick_statuses' => array(
                '0' => 'Yok',
                '1' => 'Var',
            ),

            // Application smartstick reader statuses
            'application_smartstick_reader_statuses' => array(
                '0' => 'Yok',
                '1' => 'Var',
            ),

            // Certificate statuses
            'certificate_statuses' => array(
                '0'   => 'Geçersiz',
                '200' => 'Geçerli',
                '201' => 'Askıda',
                '202' => 'İptal Edilmiş',
                '203' => 'Yenilenmiş',
                '204' => 'Geçerliliği Sona Ermiş',
                '205' => 'Geçerliliği Başlamamış',
                '206' => 'Aktivasyon Bekleniyor',
                '207' => 'Aktivasyon Yapılmış, CRL\'den Çıkacak',
                '208' => 'Askıda',
                '209' => 'Askıda',
                '500' => 'Geçerlilik Süresi Sona Ermiş'
            ),

            // Certificate suspension reasons
            'certificate_suspension_reasons' => array(
                '0' => "İstek Üzerine",
                '1' => "Geçici Kayıp",
                '2' => "Diğer"
            ),

            // Certificate cancel reasons
            'certificate_cancel_reasons' => array(
                '0'  => "Tanımsız",
                '1'  => "Anahtar Güvenlik Kaybı",
                '3'  => "Nitelik Değişikliği",
                '9'  => "Yetki İptali",
                '10' => "Yetkilendirme Güvenlik Kaybı",
            ),
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Messages
    |--------------------------------------------------------------------------
    */

    'messages' => array(

        //web service message codes
        'web_service' => array(

            // E-Sign
            'esign' => array(
                "01"  => "Bankadan provizyon aliniz.",
                "02"  => "Bankadan provizyon alinizi visa.",
                "03"  => "Uye isyeri kategori kodu hatali.",
                "04"  => "Karta el koyunuz.",
                "05"  => "Islem onaylanmadi.",
                "06"  => "Isteminiz kabul edilmedi.",
                "07"  => "Karta el koyunuz 2.",
                "8"   => "Kimligini kontrol ederek islem yapiniz.",
                "9"   => "Kart yenilenmis musteriden isteyin.",
                "11"  => "Islem gerceklestirildi.",
                "12"  => "Gecersiz islem.",
                "13"  => "Gecersiz tutar.",
                "14"  => "Kart numarasi hatali.",
                "15"  => "Banka bulunamadi iem routing problem.",
                "16"  => "Bakiye yetersiz.",
                "17"  => "Islem iptal edildi.",
                "18"  => "Kapali kart.",
                "19"  => "Bir kere daha provizyon talep ediniz.",
                "21"  => "Islem iptal edilemedi.",
                "25"  => "Boyle bir bilgi bulunamadi.",
                "28"  => "Orjinal reddedilmis.",
                "29"  => "Iptal yapilamadi.",
                "30"  => "Mesajin formati hatali.",
                "31"  => "Issuer sign olmamis.",
                "32"  => "Islem kismen gerceklestirilebildi.",
                "33"  => "Kartin suresi dolmus.",
                "34"  => "Muhtemelen calinti kart.",
                "36"  => "Sinirlandirilmis kart.",
                "37"  => "Banka guvenligini arayiniz.",
                "38"  => "Sifre giris limiti asildi el koyunuz.",
                "39"  => "Kredi hesabi tanimsiz.",
                "41"  => "Kayip kart.",
                "43"  => "Calinti kart.",
                "51"  => "Hesap musait degil.",
                "52"  => "Cek hesabi tanimsiz.",
                "53"  => "Hesap tanimsiz.",
                "54"  => "Vadesi dolmus kart.",
                "55"  => "Sifresi hatali.",
                "56"  => "Kart mevcut degil.",
                "57"  => "Kart sahibi bu islemi yapamaz.",
                "58"  => "Bu islemi yapmaniza musade edilmiyor.",
                "61"  => "Para cekme limiti asiliyor.",
                "62"  => "Kisitli kart.",
                "63"  => "Bu islemi yapmaya yetkili degilsiniz.",
                "65"  => "Gunluk islem adedi dolmus.",
                "68"  => "Cevap cok gec geldi islemi iptal ediniz.",
                "75"  => "Sifre giris limiti asildi.",
                "76"  => "Sifre hatali sifre giris limiti asildi.",
                "77"  => "Orjinal islemi ile uyumsuz bilgi alindi.",
                "78"  => "Account balance not available.",
                "80"  => "Hatali tarih network hatasi.",
                "81"  => "Sifreleme yabanci network hatasi.",
                "82"  => "Hatali cvv.",
                "83"  => "Sifre dogrulanamiyor iletisim hatasi.",
                "85"  => "Hesap dogrulandi.",
                "86"  => "Sifre dogrulanamiyor.",
                "88"  => "Sifreleme hatasi.",
                "89"  => "Authentication hatasi.",
                "90"  => "Gun sonu islemi yapiliyor.",
                "91"  => "Bankaya ulasilamiyor.",
                "92"  => "Islem gerekli yere yonledirilemedi.",
                "93"  => "Hukuki nedenlerle isleminiz reddedildi.",
                "94"  => "Duplicate transmission.",
                "95"  => "Gunluk toplamlar hatali iptal rededildi.",
                "96"  => "Sistem hatasi.",
                "98"  => "Duplicate reversal.",
                "100" => "Online Başvuru başarılı bir şekilde gerçekleştirilmiştir.",
                "101" => "Online Başvuru kaydetme işleminde hata oluştu.",
                "102" => "Başvuruları listeleme işlemi başarılı bir şekilde gerçekleştirilmiştir.",
                "103" => "Başvuru sahibinin başvurularını listeleme işleminde hata oluştu.",
                "104" => "Kullanıcı giriş işlemi başarılı.",
                "105" => "Kullanıcı giriş işleminde hata oluşmuştur.",
                "106" => "Başvuru Sahibi Parola bilgisi güncellendi.",
                "107" => "Başvuru Sahibi Parola bilgisi güncellenemedi.",
                "108" => "Başvuru sahibi iletişim bilgileri güncellendi.",
                "109" => "Başvuru Sahibi iletişim bilgileri güncellenemedi.",
                "110" => "Fatura güncelleme başarili bir şekilde gerçekleştirilmiştir.",
                "111" => "Fatura güncelleme işleminde hata oluşmuştur.",
                "112" => "Sertifika listeleme işlemi başarılı bir şekilde gerçekleştirilmiştir.",
                "113" => "Sertifika listeleme işleminde hata oluşmuştur.",
                "114" => "Sertifika askıya alma işlemi başarılı bir şekilde gerçekleştirilmiştir.",
                "115" => "Sertifika askıya alma işleminde hata oluşmuştur.",
                "116" => "Sertifika askıdan çıkartma işlemi başarılı bir şekilde gerçekleştirilmiştir.",
                "117" => "Sertifika askıdan çıkartma işleminde hata oluşmuştur.",
                "118" => "Sertifika iptal işlemi başarılı bir şekilde gerçekleştirilmiştir.",
                "119" => "Sertifika iptal işleminde hata oluşmuştur.",
                "120" => "Sertifika yenileme işlemi başarılı bir şekilde gerçekleştirilmiştir.",
                "121" => "Sertifika yenileme işleminde hata oluşmuştur.",
                "122" => "Yeni başvuru işlemi başarılı bir şekilde gerçekleştirilmiştir.",
                "123" => "Yeni başvuru işleminde hata oluşmuştur.",
                "124" => "Giriş işlemi başarılı bir şekilde gerçekleştirilmiştir.",
                "125" => "Giriş işleminde hata oluşmuştur.",
                "126" => "Ek ürünler tablosu boş olamaz.",
                "127" => "Listelelenecek ürünler mevcut değil.",
                "128" => "Ek Ürün listeleme işlemi başarılı bir şekilde gerçekleştirilmiştir.",
                "129" => "Ek ürün listeleme işleminde hata oluşmuştur.",
                "130" => "Kullanici adi yada parola bilgileri hatalıdır. Lütfen değerlerinizi kontrol ediniz.",
                "131" => "Başvuru Sahipleri bilgileri boş olamaz.",
                "132" => "Verilen bilgilere sahip basvuru sahibi kaydı bulunmamaktadır.",
                "133" => "Başvuru sahibinin mevcut başvuru kaydı bulunmamaktadır.",
                "134" => "Fatura listeleme işlemi başarılı bir şekilde gerçekleştirilmiştir.",
                "135" => "Güncel fiyat getirme işleminde bir sorun oluştu.",
                "136" => "Güncel fiyat başarıyla getirildi.",
                "137" => "Kurum adı bilgisi boş olamaz.",
                "138" => "SSL yeni kullanıcısı başarıyla eklenmiştir.",
                "139" => "SSL yeni kullanıcısı eklenirken hata oluşmuştur.",
                "140" => "İletişim bilgisi getirme işlemi başarılı bir şekilde gerçekleştirilmiştir.",
                "141" => "İletişim bilgisi getirme işleminde hata oluşmuştur.",
                "142" => "Fatura bilgisi getirme işlemi başarılı bir şekilde gerçekleştirilmiştir.",
                "143" => "Fatura bilgisi getirme işleminde hata oluşmuştur.",
                "144" => "Başvuru Sahibinin ismi boş olamaz.",
                "145" => "Başvuru Sahibinin soyismi boş olamaz.",
                "146" => "CSR bilgisi boş olamaz.",
                "147" => "Ödeme tutarı boş olamaz.",
                "148" => "Ödeme bilgileri boş olamaz.",
                "149" => "Ödeme bilgileri kayıt başarılı.",
                "150" => "Ödeme bilgileri kayıt başarısız.",
                "151" => "Ödeme işlemi başarıyla tamamlanmıştır.",
                "152" => "Ödeme yapma işleminde hata oluşmuştur.",
                "153" => "Yenileme fiyatı başarıyla getirilmiştir.",
                "154" => "Yenileme fiyat getirme işlemi başarısız.",
                "155" => "Ödeme şekli bilgisi boş olamaz",
                "501" => "Basvuru bilgileri boş olamaz",
                "502" => "TCKN bilgisi boş olamaz",
                "503" => "Cep Telefon bilgisi boş olamaz",
                "504" => "E-Posta bilgisi boş olamaz",
                "505" => "Il bilgisi boş olamaz",
                "506" => "Kullanici Adi bilgisi boş olamaz",
                "507" => "Parola bilgisi boş olamaz",
                "508" => "Kullanici adi hatali ya da parola hatali. Lutfen Degerlerinizi Kontrol Ediniz",
                "509" => "Basvuru sahipleri bilgileri boş olamaz",
                "510" => "Verilen bilgilere sahip basvuru sahibi kaydı bulunmamaktadır",
                "511" => "Basvuru sahibinin mevcut basvuru kaydı bulunmamaktadır",
                "512" => "Eski Parola bilgisi boş olamaz",
                "513" => "Yeni Parola Bilgisi boş olamaz",
                "514" => "Yeni Parola Tekrar bilgisi boş olamaz",
                "515" => "Ip bilgisi boş olamaz",
                "516" => "Yeni Parola ve Yeni Parola Tekrar bilgileri aynı girilmeli",
                "517" => "Bu Kullanıcı Adı ile kullanıcı bulunamadı",
                "518" => "Eski Parola yanlış girildi",
                "519" => "İletişim Adresi bilgisi boş olamaz",
                "520" => "Iletişim Ulke bilgisi boş olamaz",
                "521" => "Fatura bilgileri boş olamaz",
                "522" => "Fatura adres bilgisi boş olamaz",
                "523" => "Fatura Il bilgisi boş olamaz",
                "524" => "Fatura Ülke bilgisi boş olamaz",
                "525" => "Posta Kodu bilgisi boş olamaz",
                "526" => "Vergi Dairesi bilgisi boş olamaz",
                "527" => "Vergi Numarası bilgisi boş olamaz",
                "528" => "Durum bilgisi boş olamaz",
                "529" => "Id bilgisi boş olamaz",
                "530" => "Verilen bilgilere sahip sertifika sahibi kaydı bulunmamaktadır",
                "531" => "Sertifika seri numarası bilgisi boş olamaz",
                "532" => "Kök sertifika id bilgisi boş olamaz",
                "533" => "Askı nedeni bilgisi boş olamaz",
                "534" => "İptal nedeni bilgisi boş olamaz",
                "535" => "Girmiş olduğunuz E-Posta sistemde mevcuttur.",
                "536" => "Başvuru sahibine ait iletişim bilgisi bulunmamaktadır",
                "537" => "Sertifika bilgileri boş olamaz",
                "538" => "Listelenecek fiyat mevcut değil",
                "539" => "Sertifika tipi boş olamaz",
                "540" => "Saat aralığı boş olamaz",
                "541" => "Banka bilgisi boş olamaz",
                "542" => "Durum bilgisi boş olamaz",
                "543" => "Ödeme tarihi bilgisi boş olamaz",
                "544" => "Ödeme tipi bilgisi boş olamaz",
                "545" => "Tutar bilgisi boş olamaz",
                "546" => "SSL Başvuru bilgisi boş olamaz",
                "547" => "Sertifika başvuru numarası boş olamaz.",
                "548" => "Güvenlik kodu boş olamaz.",
                "549" => "Kart numarası boş olamaz.",
                "550" => "Son kullanma tarihi boş olamaz.",
                "551" => "Başvuru Id bilgisi boş olamaz",
                "552" => "İptal edilmiş durumdaki sertifika askıya alınamaz.",
                "553" => "Geçerliliği sona ermiş sertifika askıya alınamaz.",
                "554" => "Sertifikanın askı kaydı mevcut değildir.",
                "555" => "Sertifika önceden askıya alındığı için yeniden askıya alma işlemi yapılamaz.",
                "556" => "Sertifikanın durumu geçersiz.",
                "557" => "Sertifika aktivasyon beklediği için askıya alınamaz.",
                "558" => "Lütfen Doğum Yeri alanına bir değer giriniz.",
                "559" => "Güvenlik sorusu hatalı yanıtlanmıştır.",
                "560" => "İptal edilmiş durumdaki sertifika tekrar iptal edilemez.",
                "561" => "Geçerliliği sona ermiş sertifika iptal edilemez.",
                "562" => "Geçerliliği sona ermiş sertifikada yenileme işlemi yapılamaz.",
                "563" => "İptal edilmiş durumdaki sertifikada yenileme işlemi yapılamaz.",
                "564" => "Tanımlı NES Uygulama fiyatı mevcut değildir.",
                "565" => "Sertifika askıya alındığı için yenileme işlemi yapılamaz.",
                "566" => "Sertifika aktivasyon beklediği için yenileme işlemi yapılamaz.",
                "567" => "Sertifika geçerlilik süresi boş olamaz.",
            ),
        ),
    ),
);
