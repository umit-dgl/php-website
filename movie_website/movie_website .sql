-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 20 Oca 2024, 17:56:29
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `movie_website`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(100) NOT NULL,
  `isim` varchar(200) NOT NULL,
  `resim` varchar(255) NOT NULL,
  `aciklama` text NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `film`
--

INSERT INTO `film` (`id`, `url`, `isim`, `resim`, `aciklama`, `link`) VALUES
(2, 'joker', 'JOKER', '1704552034_98bfed517bb2945fb12f.jpg', 'Joker, başarısız bir komedyen olan Arthur Fleck\'in hayatına odaklanıyor. Toplum tarafından dışlanan bir adam olan Arthur, hayatta yapayalnızdır. Sürekli bir bağ kurma arayışında olan Arthur, yaşamını taktığı iki maske ile geçirir. Gündüzleri, geçimini sağlamak için palyaço maskesini yüzüne takan Arthur, geceleri ise asla üzerinden silip atamayacağı bir maske takar. Babasız büyüyen Arthur’u en yakın arkadaşı olan annesi Happy adıyla çağırır. Bu lakap, Arthur’un içindeki acıyı gizlemesine yardımcı olur. Ancak maruz kaldığı zorbalıklar, onun gitgide toluma aykırı bir adam haline gelmesine neden olur. Yavaş yavaş psikolojik olarak tekinsiz sulara yelken açılan Arthur, bir süre sonra kendisini Gotham Şehri’nde suç ve kaosun içinde bulur. Arthur, zamanla kendi kimliğinden uzaklaşıp Joker karakterine bürünür', ''),
(4, 'the_godfather', 'THE GODFATHER', '1704552105_faf38eb06170759bd78e.webp', 'The godfather, 40’lar ve 50’lerin Amerika’sında, bir İtalyan mafya ailesinin destansı öyküsünü konu alıyor. Don Corleone’nin kızı Connie’nin düğününde, ailenin en küçük oğlu ve bir savaş gazisi olan Michael babasıyla barışır. Bir suikast girişimi, Don’u artık işleri yönetemeyecek duruma düşürünce, ailenin başına Michael ve ağabeyi Sonny geçer. Danışmanları Tom Hagen’in de yardımlarıyla diğer ailelere savaş açan Corleone ailesi, eski moda yöntemleri de değiştirmeye başlar.\r\n\r\nMario Puzo’nun çok satan kitabından Puzo ve yönetmen Francis Ford Coppola tarafından sinemaya uyarlanan film o yıl En İyi Film, En İyi Erkek Oyuncu ve En İyi Uyarlama Senaryo dallarında Oscar kazanmıştır. Yapılan araştırmalar sonucu Türkiye\'de en fazla izlenen ve satılan film olma özelliği de taşır.', ''),
(5, 'ti̇tani̇k', 'TİTANİK', '1704629753_97dae98a5e789bf7e4bb.webp', 'Dünyanın hatırlamak istemediği türden felaketlerden olan \'Titanik faciası\', dev prodüksiyonların yönetmeni James Cameron tarafından çekilen görkemli bir film.\r\nTeknolojinin son sürat ilerlediği bir dönemde, insanlar üstesinden gelemeyecekleri hiç bir sorun olamayacağına inanmaya başlamışlardır. \'Titanic\' adlı dev transatlantik ise, insanlığın doğaya karşı gövde gösterisi gibidir. Bu \'Düşler Gemisi\' nin yolcuları arasında Avrupa`da birkaç yıl geçirdikten sonra Amerika\'ya dönmekte olan, Jack adlı genç bir ressam ile nişanlısı ve annesiyle Philadelphia`ya giden Rose adlı genç bir kız da vardır. İki genç, şans eseri tanışacak, aralarındaki sınıf farkına aldırmaksızın birbirlerine yakınlaşacaktır. Bu arada doğa insanoğlunun günden güne artan kibirine bir nokta koymayı planlamaktadır. Yola çıkılmasından dört buçuk gün sonra, 10 Nisan 1912\'de, Titanic iki saat kırk dakika süren ve sulara gömülmesiyle son bulan, hazin olayların başlamasına neden olacak buz dağına çarpacaktır.', ''),
(10, 'zübük', 'ZÜBÜK', '1704995814_1873a95b78eeafe55814.jpeg', 'Milletvekili İbrahim Zübükzade (Kemal Sunal) mesleğinden ihraç edilmiş bir siyasetçidir. Sözünde durmayan, ahlaksız bir adamdır. Gazeteci Yaşar (Metin Serezli) gazetede yayınlamak istediği yazı dizisi için Zübükzade’nin yaşam öyküsünü öğrenmek ister. Gittiği köyü Gülören’de karşılaştığı köylüleri Zübükzade’yi nefretle anarlar. Yaşar’ın köylüden aldığı bilgiye göre Zübük iş hayatına bir dairede kâtip olarak başlamış, kısa sürede aldığı rüşvetlerle zengin olup çıkmıştır. Foyası ortaya çıkınca kovulan Zübük, Destek Partisi’ne girip yağcılıkla ocak başkanlığına yükselir. Girdiği her yere de rüşveti bulaştırır. Muhalefet partisinden olan Kadir Ağa’nın (Kadir Savun) kızı Yektane’yi (Nevra Serezli) evlenme vaadiyle kandırıp birlikte olur. Ama çetin ceviz Yektane, silah zoruyla Zübük’ü nikâh masasına oturtur. Uyanık Zübük, partili partisiz herkesi öylesine birbirine düşürür ki, sonunda halk onun belediye reisi olması için neredeyse yalvarır. Aklı sürekli şeytanlığa çalıştığı için kendisine kurulan komploları da birer ikişer savuşturan Zübük, kendini milletvekili seçtirir. Tüm bu anlatılanlara çok şaşıran kurt gazeteci Yaşar, Zübük’le yüz yüze konuşmaya gider. Zübük, tüm yüzsüzlüğü ile, köylüyü, kasabalıyı, giderek tüm halkı kötüleyip, kendisinin ne denli dürüst ve vatansever bir politikacı olduğunu öyle bir anlatır ki; Yaşar Zübük’e neredeyse acımaya başlar. Ama giderayak Zübük’ün kendisine de oynadığı bir oyun aklını başına getirir. Çirkin politikacıların elinde çaresiz kalan halkın her zaman haklı olduğunu anlar.', ''),
(11, 'batman', 'BATMAN', '1705261260_3d45c8946e622baae31c.jpg', ' Halk için büyük bir tehdit oluşturan Joker’in ortaya çıkması ile kaosa dönen Gotham Sokakları’nın yeniden kurtarıcılığını üstlenen Batman’in hikayesini konu ediyor. Suç işleyenlerden arındırılan bir yer, bir zaman sonra yeniden tehdit altında kalabilir ve işte o zaman yeniden kolları sıvayacak olanların mücadelesi de daha keskin olarak hayata geçecektir. Batman, Teğmen Gordon ve Savcı Harvey Dent bir araya gelerek Gotham Sokakları’nda bu işi kotarmış olsalar da ansızın ortaya çıkan Joker, işleri fena halde bozar. Onun dehası ile baş etmek kolay olmayacaktır. Gotham eski karmaşa dolu günlerin eşiğindedir. Batman yeniden kurtarıcılığa soyunurken kendi varlığının bulduğu anlamı da sorgulamaya başlar. O aslında suçluların sayısını azaltıyor mudur yoksa çoğaltıyor mudur bunu gerçekten anlamak isteyecektir.', ''),
(12, 'yildizlararasi', 'YILDIZLARARASI', '1705261517_5c288af521c213400ea8.jpg', 'Teknik bilgisi ve becerisi yüksek olan Cooper, geniş mısır tarlalarında çiftçilik yaparak geçinmektedir; amacı iki çocuğuna güvenli bir hayat sunmaktır. Onlarla yaşayan Büyükbaba Donald çocuklara göz kulak olurken, henüz 10 yaşındaki kızı Murph şaşırtıcı bir zekaya sahiptir. Geçmişte bıraktığı biliminsanı kariyerini özleyen Cooper\'un karşısına bir gün beklenmedik bir teklif çıkar ve ailesinin, dahası insanlığın güvenliği için zorlu bir karar alması gerekir...\r\n\r\nChristopher Nolan\'ın, Jonathan Nolan ile kaleme aldığı ve yönetmenliğini sırtladığı filmin yıldız oyunculardan oluşan oyuncu kadrosunda Matthew McConaughey, Anne Hathaway, Jessica Chastain, Matt Damon, Bill Irwin, John Lithgow ve Michael Caine gibi isimler yer alıyor. Bilimkurgunun yanı sıra dramatik öğeler de içeren filmin senaryosu Fizikçi Kip S. Thorne\'nun evrendeki \'Solucan Delikleri\' teorisinden ilham alıyor.', ''),
(13, 'örümcek-adam_örümcek-evrenine_geçiş', 'Örümcek-Adam: Örümcek-Evrenine Geçiş', '1705264825_3cdc53a21b26945c9ec8.jpg', 'Spider-Man: Into the Spider-Verse, radyoaktif bir örümcek tarafından ısırılmasıyla bambaşka bir dünyaya adım atıp, özel yeteneklerle donanan Miles Morales\'in maceralarını konu ediyor. Gwen Stacy ile yeniden bir araya gelen Miles, Çoklu Evrenleri geçer. Miles bu sırada ne olursa olsun orayı korumakla yükümlü olan Örümcek - İnsanlarla karşılaşır. Büyük bir tehdit ile karşı karşıya olan kahramanlar, ne yapacaklarını bilemeyince Miles, kendisini diğer Örümcekler’in karşısında bulur. Miles, en sevdiği insanları büyük bir tehdite karşı koruyabilmek için yeteneklerini kullanmak zorundadır.', ''),
(14, 'yenilmezler_sonsuzluk_savaşı', 'Yenilmezler: Sonsuzluk Savaşı', '1705265041_30b13d6daf169abe8fcd.jpg', 'Avengers: Sonsuzluk Savaşı, dünyanın gördüğü en büyük tehdite karşı güçlerini birleştirmek zorunda olan kahramanların verdikleri mücadeleyi konu ediyor. Kaptan Amerika ve Iron Man\'in arasında yaşanan olayların ardından bölünen kahramanlarımız, birbirlerinden uzaklara savrulurlar. Hepsi kendi yandaşlarıyla dünyayı korumaya çalışmaktadır. Ancak dünyanın kaderi bir kez daha tehlikeye girer. Sınırsız bir güç kaynağı olan sonsuzluk taşlarının peşine düşen Thanos, dünyanın gördüğü en büyük tehdittir. İnsanlığın kaderi bir kez daha, insanlık için savaşmaya ant içmiş kahramanlarımız elindedir. Hiçbir süper kahramanın tek başına yenemeyeceği büyüklükteki bu tehdit için ekipler birleşmeli ve tehdide tüm güçleriyle karşı koymalıdır...', ''),
(15, 'esaretin_bedeli', 'Esaretin Bedeli', '1705266591_176986ffbfb143bca0ab.jpg', 'Esaretin Bedeli, Andy ve Red isimli iki mahkumun parmaklıklar ardında kurdukları dünyanın hikayesini anlatıyor. Andy Dufresne, genç ve başarılı bir bankerdir. Karısını ve karısının sevgilisini öldürmek suçundan yargılanır ve ömür boyu hapis cezası alır. Shawsank Hapishanesi\'nde dayak, işkence, tecavüz, her türlü durum yaşanmaktadır fakat Andy gene de hayata bağlı ve iyimserdir. Bu tutumu etrafındakileri de etkiler. Andy umutlu bakış açısıyla çevresindeki tüm mahkumları, parmaklıklar arkasında bile özgür bir yaşam olabileceğine inandırır. Andy\'nin bu çabalarına ortak olacak bir arkadaşı da olacaktır: Red.Bir Stephen King uyarlaması olan filmde Morgan Freeman ve Tim Robbins başrolde. Film, 1995\'te, aralarında en iyi film adaylığı da olmak üzere tam 7 dalda Oscar\'a aday gösterildi.', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kulad` varchar(10) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kulad`, `sifre`) VALUES
(50, 'yonetici', '$2y$10$Xr4xHct2/jcLVwaHjvHy4ubGRhQELYnG3tYF5lArsbISWXmwp22Uq'),
(52, 'beritan', '$2y$10$d6ppNZbbaz0DJTT1bPGbies83AdYp0ACQZBjEquI9oUbkllDIIiSO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
