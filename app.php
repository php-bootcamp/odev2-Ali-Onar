<?php

$sex = "male"; // cinsiyet (male/female)
$weight = 55; // kilo (kg)
$height = 170; // boy (cm)
$age = 25; // yaş (sene)

/*
 * Bu ödevde günlük kalori hesaplaması yapacağız.
 * Yukarıdaki değişkenleri ve aşağıdaki formülü kullanarak
 * kişinin günlük kaç kalori alması gerektiğini hesaplayıp
 * bunu ekrana yazan PHP kodunu oluşturmamız gerekiyor.
 * 
 * Erkekler için; 10 x kilo + 6.25 x boy - 5 x yaş + 5
 * Kadınlar için; 10 x kilo + 6.25 x boy - 5 x yaş - 161
 * 
 * Örneğin;
 * 
 */
$sex2 = "female";
$weight2 = 60;
$height2 = 170;
$age2 = 30;
/*
 * 
 * Ekrana 1326.5 yazması gerekiyor.
 */

// Verilen Örneğin Kodu
$calMale = (10 * $weight) + (6.25 * $height) - (5 * $age) - 161;
echo "Verilen örnek sonucu <b>".$sex. "</b> için ".$calMale;

echo "<br>";

// İstenen Çıktı
$calFemale = (10 * $weight2) + (6.25 * $height2) - (5 * $age2) - 161;
echo "İstenen örnek sonucu <b>".$sex2."</b> için ".$calFemale;
