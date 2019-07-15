-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 06:25 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webzaky`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_cat` int(11) NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `preview` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `id_cat`, `judul`, `foto`, `isi`, `preview`, `kategori`, `view`, `deleted`, `created_at`, `updated_at`) VALUES
(3, 7, 'This The New Title Of Our Web', '1561731525LdxWi4AFY8YVCeb8pkhOMw.jpg', '<p>The format of containt must atleast have 151 length of character, so i am trying to input this character in order for it to work hehe</p>', 'The format of containt must atleast have 151 length of character, so i am trying to input this character in order for it to work hehe', 'News', 9, 1, '2019-06-28 07:18:45', '2019-07-13 03:41:46'),
(4, 7, 'Rahasia Onic Esport Memenangkan Lomba Mobalog', '1561762531EeZm3hBrUoBrNQ8qTSd5Im.jpg', '<p><span style=\"font-size:14px\"><img alt=\"yes\" src=\"https://cdn.ckeditor.com/4.11.4/full/plugins/smiley/images/thumbs_up.png\" style=\"height:23px; width:23px\" title=\"yes\" />Kemenangan berturut turut oleh onic Esport apasih rahasia nya?</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Onic Esport lagi lagi memenangkan pertanding mobile legend setelah berhasil merebut piala presiden dengan mudah,</span></p>\r\n\r\n<p><span style=\"font-size:14px\">pasti kalian penasaran kan gimana bisa onic esport&nbsp; memenangkan pertandingan berturut turut tanpa kehilangan turret.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><img alt=\"\" src=\"https://cdn2.tstatic.net/makassar/foto/bank/images/onic-esport.jpg\" style=\"border-style:solid; border-width:1px; height:393px; width:700px\" /></span></p>\r\n\r\n<ul>\r\n	<li>x<span style=\"font-size:14px\">Kerja sama Yang kompak</span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:14px\">tentu saja kerja sama menjadi kunci nya<br />\r\nsesuai kutipan dari usuf mantan pelatih evos</span></p>\r\n\r\n<blockquote>\r\n<p><br />\r\n<span style=\"font-size:14px\">kalo kalian gak bisa kerja sama saya berhenti jadi pelatih evos, by usuf</span></p>\r\n</blockquote>\r\n\r\n<p><img alt=\"yes\" src=\"https://cdn.ckeditor.com/4.11.4/full/plugins/smiley/images/thumbs_up.png\" style=\"height:23px; width:23px\" title=\"yes\" /></p>\r\n\r\n<p>&nbsp;</p>', 'Kemenangan berturut turut oleh onic Esport apasih rahasia nya?\r\n\r\nOnic Esport lagi lagi memenangkan pertanding mobile legend setelah berhasil merebut piala presiden dengan mudah,\r\n\r\npasti kalian penasaran kan gimana bisa onic esport  memenangkan pertandingan berturut turut tanpa kehilangan turret.', 'News', 26, 1, '2019-06-28 16:00:33', '2019-07-13 03:41:44'),
(6, 5, 'lorem ipsum', '1561893162MyRMJ1YjUhcLfQ497NMeV8.png', '<div>\r\n<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>', 'What is Lorem Ipsum?\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nWhy do we use it?\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'tips', 8, 1, '2019-06-30 04:12:42', '2019-07-13 03:41:41'),
(7, 4, 'jaksdkdsabjasd', '1562086870xG9RU0ICW26I8yPpUb5cyq.png', '<div style=\"background-color:#1e1e1e; color:#d4d4d4; font-family:Consolas,\'Courier New\',monospace; font-size:14px; font-weight:normal; line-height:19px; white-space:pre\">\r\n<div><span style=\"color:#4ec9b0\">DB</span><span style=\"color:#d4d4d4\">::</span><span style=\"color:#dcdcaa\">table</span><span style=\"color:#d4d4d4\">(</span><span style=\"color:#ce9178\">&#39;articles&#39;</span><span style=\"color:#d4d4d4\">)-&gt;</span><span style=\"color:#dcdcaa\">where</span><span style=\"color:#d4d4d4\">(</span><span style=\"color:#ce9178\">&#39;id&#39;</span><span style=\"color:#d4d4d4\">,</span><span style=\"color:#9cdcfe\">$id</span><span style=\"color:#d4d4d4\">)-&gt;</span><span style=\"color:#dcdcaa\">update</span><span style=\"color:#d4d4d4\">([</span><span style=\"color:#ce9178\">&#39;view&#39;</span><span style=\"color:#d4d4d4\">=&gt;</span><span style=\"color:#4ec9b0\">DB</span><span style=\"color:#d4d4d4\">::</span><span style=\"color:#dcdcaa\">raw</span><span style=\"color:#d4d4d4\">(</span><span style=\"color:#ce9178\">&#39;view+1&#39;</span><span style=\"color:#d4d4d4\">)]);</span></div>\r\n\r\n<div><span style=\"color:#9cdcfe\">$item</span><span style=\"color:#d4d4d4\"> = </span><span style=\"color:#4ec9b0\">article</span><span style=\"color:#d4d4d4\">::</span><span style=\"color:#dcdcaa\">find</span><span style=\"color:#d4d4d4\">(</span><span style=\"color:#9cdcfe\">$id</span><span style=\"color:#d4d4d4\">);</span></div>\r\n&nbsp;\r\n\r\n<div><span style=\"color:#9cdcfe\">$log</span><span style=\"color:#d4d4d4\"> = [</span></div>\r\n\r\n<div><span style=\"color:#ce9178\">&#39;isi&#39;</span><span style=\"color:#d4d4d4\"> =&gt; </span><span style=\"color:#ce9178\">&#39;Someone Just Viewed on &quot; &#39;</span><span style=\"color:#d4d4d4\">.</span><span style=\"color:#9cdcfe\">$item</span><span style=\"color:#d4d4d4\">-&gt;</span><span style=\"color:#9cdcfe\">judul</span><span style=\"color:#d4d4d4\">.</span><span style=\"color:#ce9178\">&#39;&quot;&#39;</span></div>\r\n\r\n<div><span style=\"color:#d4d4d4\">];</span></div>\r\n\r\n<div><span style=\"color:#9cdcfe\">$logs</span><span style=\"color:#d4d4d4\"> = </span><span style=\"color:#4ec9b0\">logs</span><span style=\"color:#d4d4d4\">::</span><span style=\"color:#dcdcaa\">create</span><span style=\"color:#d4d4d4\">(</span><span style=\"color:#9cdcfe\">$log</span><span style=\"color:#d4d4d4\">);</span></div>\r\n\r\n<div><span style=\"color:#6a9955\">//return article::find($id);</span></div>\r\n\r\n<div><span style=\"color:#9cdcfe\">$data</span><span style=\"color:#d4d4d4\"> = </span><span style=\"color:#4ec9b0\">article</span><span style=\"color:#d4d4d4\">::</span><span style=\"color:#dcdcaa\">where</span><span style=\"color:#d4d4d4\">(</span><span style=\"color:#ce9178\">&#39;deleted&#39;</span><span style=\"color:#d4d4d4\">,</span><span style=\"color:#ce9178\">&#39;=&#39;</span><span style=\"color:#d4d4d4\">,</span><span style=\"color:#b5cea8\">0</span><span style=\"color:#d4d4d4\">)-&gt;</span><span style=\"color:#dcdcaa\">orderBy</span><span style=\"color:#d4d4d4\">(</span><span style=\"color:#ce9178\">&#39;view&#39;</span><span style=\"color:#d4d4d4\">,</span><span style=\"color:#ce9178\">&#39;desc&#39;</span><span style=\"color:#d4d4d4\">)-&gt;</span><span style=\"color:#dcdcaa\">take</span><span style=\"color:#d4d4d4\">(</span><span style=\"color:#b5cea8\">4</span><span style=\"color:#d4d4d4\">)-&gt;</span><span style=\"color:#dcdcaa\">get</span><span style=\"color:#d4d4d4\">();</span></div>\r\n\r\n<div><span style=\"color:#c586c0\">return</span><span style=\"color:#d4d4d4\"> </span><span style=\"color:#dcdcaa\">view</span><span style=\"color:#d4d4d4\">(</span><span style=\"color:#ce9178\">&#39;frontend.post&#39;</span><span style=\"color:#d4d4d4\">,</span><span style=\"color:#dcdcaa\">compact</span><span style=\"color:#d4d4d4\">(</span><span style=\"color:#ce9178\">&#39;item&#39;</span><span style=\"color:#d4d4d4\">,</span><span style=\"color:#ce9178\">&#39;data&#39;</span><span style=\"color:#d4d4d4\">));</span></div>\r\n</div>', 'PS C:\\xampp\\htdocs\\uselesstv\\private> php artisan migrate:rollback\r\nRolling back: 2019_07_02_164556_logs\r\nRolled back:  2019_07_02_164556_logs\r\nPS C:\\xampp\\htdocs\\uselesstv\\private> php artisan migrate\r\nMigrating: 2019_07_02_164556_logs\r\nMigrated:  2019_07_02_164556_logs', 'info', 7, 1, '2019-07-02 10:01:10', '2019-07-03 08:22:46'),
(8, 15, 'BMW R Nine T Edisi 50 Tahun', '1563014999SXAKA1FBVyXw9zmPgJysfM.jpeg', '<p><img alt=\"\" src=\"https://akcdn.detik.net.id/community/media/visual/2019/07/13/f2d93147-7d97-4cbe-8b32-8a040089d891_169.jpeg?w=780&amp;q=90\" style=\"height:439px; width:780px\" /></p>\r\n\r\n<p><strong>Jakarta</strong> - Pencinta BMW Nine R T pasti bakal senang mendengar kabar yang satu ini. Karena salah satu motor terbaik BMW Motorrad ini memasuki usia emas alias genap berusia 50 tahun.<br />\r\n<br />\r\nSadar akan hal tersebut, BMW Motorrad bakal memberikan BMW R Nine T Spesial untuk para pencinta R Nine T. Seperti dikutip motorcyclenews, Sabtu (13/7/2019).</p>\r\n\r\n<p>BMW R Nine T ini akan disapa 5 Series, dan lahirnya versi hari jadi BMW R Nine T ke-50 ini sekaligus merayakan hari jadi pabrik BMW Motorrad yang berada di Berlin Spandau.</p>\r\n\r\n<p><img alt=\"\" src=\"https://akcdn.detik.net.id/community/media/visual/2019/07/13/6380dc70-afb2-4172-b5db-0504faa0db50.jpeg?a=1\" style=\"height:530px; width:900px\" /></p>\r\n\r\n<p>Edisi spesial BMW R Nine T 50 Year atau 5 Series ini memiliki desain yang tidak terlalu berbeda dari R Nine T biasa. Hal ini bukan tanpa alasan, karena memang BMW Motorrad tidak ingin kehilangan jati diri dari BMW R Nine T.<br />\r\n<br />\r\nNamun perbadaan terlihat pada bagian tangki motor, meski masih mengesankan kesan klasik tangki memiliki label 5 series. Selain itu sentuhan warna biru semakin membuat kece tampilan BMW R Nine T.<br />\r\n<br />\r\n<br />\r\nTidak lupa tampilan mesin boxer yang menonjol sangat terlihat jelas dan keren. Begitu juga dengan penggunaan sasis baru yang menopang mesin dan mesin, motor ini terlihat begitu berbeda.<br />\r\n<br />\r\nSayangnya BMW Motorrad belum mengumumkan berapa banderol untuk bisa membawa pulangnya. Serta seberapa banyak mereka akan memproduksi. Meski demikian, motor ini menyajikan sesuatu yang berbeda dan keren.<br />\r\n&nbsp;</p>', 'Edisi spesial BMW R Nine T 50 Year atau 5 Series ini memiliki desain yang tidak terlalu berbeda dari R Nine T biasa. Hal ini bukan tanpa alasan, karena memang BMW Motorrad tidak ingin kehilangan jati diri dari BMW R Nine T.', 'Motor', 3, 0, '2019-07-13 03:49:59', '2019-07-13 03:49:59'),
(9, 17, 'Sadis! \'Urat-urat\' Motor Listrik Ini Terlihat Jelas', '1563015149Fn0FoOKLHj3OiQyUqnAZI8.jpeg', '<p><img alt=\"\" src=\"https://akcdn.detik.net.id/community/media/visual/2019/07/10/3a191f75-88aa-4528-a7a6-20c6016765d0_169.jpeg?w=780&amp;q=90\" style=\"height:440px; width:780px\" /></p>\r\n\r\n<p><strong>Jakarta</strong> - Dijamin siapapun yang lihat motor listrik ini pasti setuju, motor listrik ini keren abis. Bahkan bisa dikatakan ini merupakan motor listrik tercantik yang pernah diperkenalkan.<br />\r\n<br />\r\nMotor listrik ini disapa Curtiss V8 Baterry Electric Bike Concept. Selain mengusung desain terbaik, motor ini juga memiliki performa terbaik yang mampu menyemburkan 217 hp dan torsi mencapai 147 lb-ft, berkat E-Twin Motor. Seperti dikutip motorcyclenews.</p>\r\n\r\n<p>Desain keren motor listrik ini didesain oleh Curtiss Hera yang terinspiasri dari Gleen Curtiss 1907 yang melahirkan V8 motorcycles.</p>\r\n\r\n<p><img alt=\"\" src=\"https://akcdn.detik.net.id/community/media/visual/2019/07/10/b2ef8e6a-4137-420c-9fcf-ca7d329426aa_169.jpeg?w=620\" style=\"height:350px; width:620px\" /></p>\r\n\r\n<p><br />\r\n&quot;Bersama Hera, kami melahirkan desain tercantik sebuah motor,&quot; ujar Curtiss CEO, Matt Chambers.<br />\r\n<br />\r\nSelain itu motor ini juga menawarkan sistem listrik terbaik.</p>\r\n\r\n<p>&quot;Ini menjadi motor pertama di dunia yang mengusung baterai bergaya V8, dengan ultra-powerful, E-Twin motor, bersama dengan pelek 66 inci. Hera melahirkan kelas-nya sendiri,&quot; ujar Matt.</p>', 'Motor listrik ini disapa Curtiss V8 Baterry Electric Bike Concept. Selain mengusung desain terbaik, motor ini juga memiliki performa terbaik yang mampu menyemburkan 217 hp dan torsi mencapai 147 lb-ft, berkat E-Twin Motor. Seperti dikutip motorcyclenews.', 'Modifikasi', 3, 0, '2019-07-13 03:52:30', '2019-07-13 03:52:30'),
(10, 16, 'Orang Indonesia Belum Percaya Produk India, Kenapa Renault Nekat Jual Triber?', '1563015338TNDunVjsGJFnDne03pVKH2.jpeg', '<p><img alt=\"\" src=\"https://akcdn.detik.net.id/community/media/visual/2019/07/12/ba8c51e0-0d83-4da9-85ab-2971480b3c4a.jpeg?w=780&amp;q=90\" style=\"height:624px; width:780px\" /></p>\r\n\r\n<p><strong>Tangerang</strong> - Maxindo Renault Indonesia (MRI) memastikan menjual <a href=\"https://oto.detik.com/mobil/d-4622721/intip-spesifikasi-renault-triber-yang-akan-dijual-di-indonesia?_ga=2.29399543.915841284.1562563079-1624399350.1557983862\" target=\"_blank\">Renault Triber</a> di Indonesia. Kendati Renault merupakan merek asal Perancis Triber diproduksi oleh aliansi Renault-Nissan di India. Dan unit Triber yang akan dipamerkan di GIIAS 2019 nanti, juga didatangkan dari sana secara utuh (CBU).<br />\r\n<br />\r\nHal ini pun menimbulkan pertanyaan, sebab sudah menjadi pengetahuan umum jika produk otomotif buatan India, jarang sukses bersaing di pasar mobil Indonesia. Terutama jika harus berhadapan dengan produk-produk Jepang yang sudah di zona nyaman industri otomotif Indonesia.</p>\r\n\r\n<p>Apakah Renault Indonesia, tidak membaca tren tersebut?<br />\r\n<br />\r\n&quot;Saya tahu betul kualitas mobil India. Dan jujur di awal-awal saya juga punya kekhawatiran sama dengan kualitas mobil produksi India,&quot; kata Chief Operation Officer Maxindo <a href=\"https://oto.detik.com/mobil/d-4622582/tantang-4-segmen-mobil-di-indonesia-renault-triber-punya-modal-apa?_ga=2.29399543.915841284.1562563079-1624399350.1557983862\" target=\"_blank\">Renault</a> Indonesia, Davy J Tuilan.</p>\r\n\r\n<p><img alt=\"\" src=\"https://akcdn.detik.net.id/community/media/visual/2019/07/12/28e59ece-bad6-4197-869f-10ceef1b2fbd.jpeg?a=1\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Meski awalnya sempat ragu, Davy yang langsung mengecek <a href=\"https://oto.detik.com/mobil/d-4622444/masuk-indonesia-renault-triber-klaim-hajar-4-segmen-sekaligus?_ga=2.52950496.915841284.1562563079-1624399350.1557983862\" target=\"_blank\">Triber</a> ke pabrik India mengaku cukup yakin dengan kualitas mobil ini, terutama untuk unit trial yang kedua.<br />\r\n<br />\r\n&quot;Begitu saya lihat Renault Triber (trial pertama) di India di April lalu, saya cek celah bodi antar panel itu (masih ada) dan jempol saya bisa masuk. Berarti kualitasnya memang harus dipertanyakan,&quot; terang Davy.</p>\r\n\r\n<p>&quot;Tapi coba lihat yang sekarang (dibawa ke Indonesia). Itu secara kualitas bagus, sehingga kami optimis mobil yang dibuat di India dengan supervisi Renault yang sudah 120 tahun berpengalaman, itu hasilnya mobil luar biasa,&quot; katanya lagi.<br />\r\n<br />\r\nDijelaskan Davy, pandangan masyarakat Indonesia tentang produk mobil buatan India perlahan akan berubah jika mobil ini sudah ramai di jalanan Indonesia.<br />\r\n<br />\r\n&quot;Menurut saya yang bisa mengubah pandangan itu adalah populasi. Jadi kami harus meramu semua kegiatan marketing kami. Kami juga siapkan jaringan penjualan, servis, produk keren, harga, semua kita ramu, sehingga sesegera mungkin mobil ini keluar di jalanan,&quot; pungkasnya.</p>', 'Tangerang - Maxindo Renault Indonesia (MRI) memastikan menjual Renault Triber di Indonesia. Kendati Renault merupakan merek asal Perancis Triber diproduksi oleh aliansi Renault-Nissan di India. Dan unit Triber yang akan dipamerkan di GIIAS 2019 nanti, juga didatangkan dari sana secara utuh (CBU)', 'Mobil', 3, 0, '2019-07-13 03:55:39', '2019-07-13 03:55:39'),
(11, 11, 'Jokowi dan Prabowo Bertemu, IHSG Diproyeksi Kembali \'Berotot\'', '1563017624Qv8Vkry0hwgZQJR5gwODBE.jpeg', '<p><img alt=\"\" src=\"https://akcdn.detik.net.id/community/media/visual/2019/07/13/a45ae0a5-896f-49eb-8ef5-704dc31177b4_169.jpeg?w=700&amp;q=80\" style=\"height:394px; width:700px\" /></p>\r\n\r\n<p><strong>Jakarta</strong> - Pertemuan Presiden Joko Widodo (<a href=\"https://www.detik.com/tag/jokowi\" target=\"_blank\">Jokowi</a>) dengan Ketum Gerindra <a href=\"https://www.detik.com/tag/prabowo-subianto\" target=\"_blank\">Prabowo Subianto</a> hari ini dinilai bisa menjadi sentimen positif bagi bursa saham. Nilai Indeks Harga Saham Gabungan (IHSG) dinilai bakal ikut terdongkrak dengan adanya moment tersebut.<br />\r\n<br />\r\nDirektur Investa Saran Mandiri Hans Kwee mengatakan pertemuan antara Jokowi dan Prabowo tersebut akan direspon positif oleh pasar. Sebab, kata dia, pertemuan itu mencerminkan kondisi demokrasi yang berjalan baik hingga membuat investor percaya dengan politik yang terjadi di Indonesia.<br />\r\n<br />\r\n&quot;Saya pikir akan positif untuk pasar. Indikasi politik yang akan damai,&quot; ujarnya kepada <strong>detikFinance</strong>, Jakarta, Sabtu (13/7/2019).</p>\r\n\r\n<p>IHSG pada pekan depan diperkirakan akan dibuka positif di level 6.434 sampai 6.465 setelah anjlok pada penutupan perdagangan Jumat pekan ini. Namun, IHSG diproyeksi masih belum bisa menembus level 6.500.<br />\r\n<br />\r\n&quot;IHSG melemah 43 poin membentuk candle dengan body turun dan shadow di atas dan bawah indikasi tekanan turun. IHSG berpeluang konsolidasi menguat dengan support di level 6.369 sampai 6.324 dan resistance di level 6.434 sampai 6.465,&quot; paparnya.<br />\r\n<br />\r\nMenurutnya, penguatan IHSG itu akan terjadi hingga diumumkannya nilai suku bunga hasil Rapat Dewan Gubernur (RDG) Bank Indonesia (BI) pada 18 Juli nanti.<br />\r\n<br />\r\n&quot;Perkiraan kami bunga tetap sehingga pasar bisa koreksi sesudah itu,&quot; tuturnya.</p>', 'Pertemuan Presiden Joko Widodo (Jokowi) dengan Ketum Gerindra Prabowo Subianto hari ini dinilai bisa menjadi sentimen positif bagi bursa saham. Nilai Indeks Harga Saham Gabungan (IHSG) dinilai bakal ikut terdongkrak dengan adanya moment tersebut.', 'Financial', 1, 0, '2019-07-13 04:33:44', '2019-07-13 04:33:44'),
(12, 12, 'Proyek Tol Cinere-Serpong Terganjal Pembebasan Lahan', '15630181247KIef6yM7MbZ6e014ycfLt.jpeg', '<p><img alt=\"\" src=\"https://akcdn.detik.net.id/community/media/visual/2018/04/11/4a2357bc-d146-45ca-b97e-d2aeed8db58e_169.jpeg?w=650&amp;q=90\" style=\"height:365px; width:650px\" /></p>\r\n\r\n<p><strong>Jakarta</strong> - Pengerjaan proyek tol Cinere-Serpong masih terganjal lahan. Proyek tol sepanjang 10,14 kilometer (km) ini masih belum menyelesaikan pembebasan lahan sampai 100%.<br />\r\n<br />\r\nDirektur Teknik PT Cinere Serpong Jaya Yayan mengatakan, pembebasan lahan Seksi I masih menyisakan 13% dan Seksi II menyisakan sekitar 24%.<br />\r\n<br />\r\n&quot;Jadi belum bisa maksimal memang lahannya,&quot; kata Yayan kepada <strong>detikFinance</strong>, Jakarta, Jumat (12/7/2019). Berikut ulasan lengkapnya: <strong>(hek/hns)</strong></p>', 'engerjaan proyek tol Cinere-Serpong masih terganjal lahan. Proyek tol sepanjang 10,14 kilometer (km) ini masih belum menyelesaikan pembebasan lahan sampai 100%.\r\n\r\nDirektur Teknik PT Cinere Serpong Jaya Yayan mengatakan, pembebasan lahan Seksi I masih menyisakan 13% dan Seksi II menyisakan sekitar 24%.', 'Infrastruktur', 0, 0, '2019-07-13 04:42:04', '2019-07-13 04:42:04'),
(13, 13, 'Kawasan Industri Teluk Bintuni Ditarget Serap Investasi US$ 800 Juta', '1563018589PprRYOOEOAGyqbCqJKoMyj.jpeg', '<p><img alt=\"\" src=\"https://akcdn.detik.net.id/community/media/visual/2018/09/08/441a3fbb-c01b-48c6-8161-30dbfcf6fd30_169.jpeg?w=700&amp;q=80\" style=\"height:394px; width:700px\" /></p>\r\n\r\n<p><strong>Jakarta</strong> - Kementerian Perindustrian (Kemenperin) mempercepat pengembangan kawasan industri di luar Jawa, salah satunya di Kawasan Industri Teluk Bintuni, Papua Barat. Langkah ini untuk mendorong pemerataan pembangunan dan ekonomi dalam upaya mewujudkan Indonesia sentris.<br />\r\n<br />\r\n&quot;Kawasan Industri Teluk Bintuni memiliki potensi sumber daya alam untuk mendukung industri Petrokimia. Terlebih lagi pengembangan industri methanol dan turunannya, kemudian amoniak dan turunannya merupakan salah satu industri strategis,&quot; kata Direktur Jenderal (Dirjen) Ketahanan, Perwilayahan dan Akses Industri Internasional (KPAII) Kemenperin Doddy Rahadi dalam keterangannya, Sabtu (13/7/2019).<br />\r\n<br />\r\nDoddy menuturkan, Kawasan Industri Teluk Bintuni merupakan salah satu dari Kawasan Industri Prioritas yang telah dicanangkan dalam Rencana Pembangunan Jangka Menengah Nasional (RPJMN) 2015-2019, serta masuk ke dalam Proyek Strategis Nasional (PSN).<br />\r\n&nbsp;</p>\r\n\r\n<div class=\"clearfix\">&nbsp;</div>\r\n\r\n<p>&quot;Karena itu, hal tersebut menjadi perhatian kita semua, baik itu pemerintah pusat maupun pemerintah daerah untuk mewujudkan<br />\r\npembangunan Kawasan Industri Teluk Bintuni,&quot; ujarnya.<br />\r\n<br />\r\nMenurut Doddy, pengembangan kawasan industri petrokimia di Kabupaten Teluk Bintuni diharapkan dapat menarik investasi sebesar Rp 1,76 trilliun untuk pembangunan kawasan industri, kemudian sekitar US$ 800 juta dari pembangunan pabrik methanol dengan kapasitas sebesar 800 Kilo Ton Per Anum (KTPA) selama 20 tahun, dengan memanfaatkan lahan seluas 20 Hektare.<br />\r\n<br />\r\n&quot;Mengingat pengembangan Kawasan Industri Teluk Bintuni telah berlangsung selama lima tahun, saat ini merupakan waktu yang tepat bagi Kawasan Industri Teluk Bintuni melangkah pada tahapan pembangunan kawasannya,&quot; terangnya.<br />\r\n<br />\r\nDoddy mengungkapkan, sebuah kawasan industri memiliki peran strategis untuk meningkatkan efisiensi, serta kemudahan penyediaan infrastruktur. Pembangunan kawasan industri Teluk Bintuni sendiri diharapkan memberikan multiplier effect dengan masuknya banyak investasi serta peningkatan lapangan pekerjaan, khususnya pada angkatan kerja di kabupaten maupun provinsi setempat. Kawasan ini ditargetkan menyerap 3.500 tenaga kerja.<br />\r\n<br />\r\n&quot;Dengan adanya Kawasan Industri Teluk Bintuni diharapkan pendapatan masyarakat akan meningkat dan akan berdampak pada peningkatan ekonomi wilayahnya. Tentunya akan meningkatkan produktivitas bagi perusahaan yang berlokasi di dalam kawasan industri sehingga mampu<br />\r\nmenciptakan nilai tambah yang lebih tinggi,&quot; ungkapnya.</p>\r\n\r\n<p>Doddy menyampaikan, Kemenperin telah menyusun master plan atau rencana induk pengembangan industri di Kawasan Indutri Teluk Bintuni, termasuk standar terhadap pengendalian dampak lingkungan, sehingga peningkatan jumlah industri tidak akan langsung mengurangi kualitas<br />\r\nlingkungan di sekitarnya.<br />\r\n<br />\r\n&quot;Semua peran strategis tersebut mengerucut pada tujuan akhir yaitu mewujudkan penyebaran dan pemerataan industri ke seluruh wilayah Negara Kesatuan Republik Indonesia,&quot; tegasnya.<br />\r\n<br />\r\nSementara it Direktur Perwilayahan Industri Ditjen KPAII Kemenperin, Ignatius Warsito menambahkan, dalam master plan Kawasan Industri Teluk Bintuni yang telah disusun, dibutuhkan lahan untuk kegiatan operasi seluas 200 hektare. Untuk itu, pemerintah daerah diharapkan dapat segera mengupayakan pembebasan lahan untuk mengawali pengembangan Industri ini.<br />\r\n<br />\r\n&quot;Setidaknya 50 hektare dulu, sehingga pengembangan tahap pertama bisa kita mulai secepatnya. Pemerintah Kabupaten Teluk Bintuni memiliki komitmen cukup kuat, sehingga dalam waktu dekat 50 hektare lahan yang dibutuhkan pada tahap pertama bisa segera dibebaskan,&quot; imbuhnya.<br />\r\n<br />\r\nBupati Teluk Bintuni, Petrus Kasihiw mengatakan, Pemerintah Kabupaten Teluk Bintuni telah melakukan perencanaan yang panjang dalam rangka menyiapkan diri untuk ikut berkontribusi dalam program percepatan Kawasan Industri Teluk Bintuni.<br />\r\n<br />\r\n&quot;Pemerintah daerah dan pusat sudah menandatangani kesepakatan pengalokasian 50 hektare lahan pertama yang dibutuhkan dari 200 lebih hektare yang akan menjadi zona inti kawasan industri. Dan, setelah ini masih ada pertemuan-pertemuan dengan masyarakat adat di sekitar kawasan yang harus dibicarakan dengan baik,&quot; terangnya.<br />\r\n<br />\r\nSebelumnya, Menteri Perindustrian (Menperin) Airlangga Hartarto menyebut, percepatan Kawasan Industri Teluk Bintuni merupakan bagian dari program strategis pemerintah untuk membangun kawasan industri di luar Pulau Jawa. Tujuannya agar dapat mendorong pemerataan infrastruktur dan ekonomi di seluruh Indonesia.<br />\r\n<br />\r\n&quot;Pengembangan kawasan industri menjadi perhatian utama pemerintah karena mampu mewujudkan perekonomian yang inklusif,&quot; ungkap Menperin.<br />\r\n<br />\r\nAirlangga menegaskan, pengembangan kawasan industri baru di luar Jawa diarahkan pada sektor manufaktur berbasis sumber daya alam. Upaya ini sebagai wujud konkret dari penerapan kebijakan hilirisasi untuk meningkatkan nilai tambah bahan baku di dalam negeri.<br />\r\n<br />\r\n&quot;Kami memproyeksi akan terjadi peningkatan kontribusi sektor industri pengolahan non migas di luar Jawa sebesar 60% dibanding di Jawa,&quot; tandasnya.</p>', 'Kementerian Perindustrian (Kemenperin) mempercepat pengembangan kawasan industri di luar Jawa, salah satunya di Kawasan Industri Teluk Bintuni, Papua Barat. Langkah ini untuk mendorong pemerataan pembangunan dan ekonomi dalam upaya mewujudkan Indonesia sentris.', 'Industri', 0, 0, '2019-07-13 04:49:49', '2019-07-13 04:49:49'),
(14, 14, 'Pengin Jadi Rektor UI? Begini Cara Daftarnya', '15630187302bFuzU1HFD9HpyiHE5OfRK.jpeg', '<p><img alt=\"\" src=\"https://akcdn.detik.net.id/community/media/visual/2019/02/12/43b5e043-b813-47c9-b0c1-3c8fa14bf6ae_169.jpeg?w=700&amp;q=80\" style=\"height:395px; width:700px\" /></p>\r\n\r\n<p><strong>akarta</strong> - Masa jabatan Muhammad Anis selaku Rektor Universitas Indonesia (UI) periode 2014-2019 akan berakhir pada 4 Desember 2019 mendatang. Untuk itu, UI membuka pendaftaran calon Rektor baru periode 2019-2024.<br />\r\n<br />\r\nMengutip laman resmi <a href=\"http://www.ui.ac.id,\">ui.ac.id,</a> proses pemilihan Rektor terdiri atas penjaringan, penyaringan, dan penetapan, serta pelantikan. Sejalan dengan tahapan tersebut, akan dilakukan klarifikasi, verifikasi, dan seleksi yang akan menghasilkan setidaknya 20 calon rektor terjaring dimana Pengumuman 20 Calon Rektor akan dilakukan pada 2 September 2019.<br />\r\n<br />\r\nBerikutnya akan dilakukan proses penyaringan oleh Pansus Pemilihan Rektor (Pilrek) pada 2-15 September dan akan tersaring 7 Calon Rektor yang diumumkan pada 16 September 2019. Proses penyaringan Calon Rektor UI juga melibatkan lembaga negara diantaranya Badan Nasional Penanggulangan Terorisme (BNPT) dan Pusat Pelaporan dan Analisis Transaksi Keuangan (PPATK).<br />\r\n&nbsp;</p>\r\n\r\n<div class=\"clearfix\">&nbsp;</div>\r\n\r\n<p>Tahapan selanjutnya, ke-tujuh Calon Rektor Tersaring akan melakukan presentasi di depan para pakar. Kemudian akan diumumkan 3 Besar Calon Rektor pada 20 September 2019. Tahapan akhir, ketiga Calon Rektor tersebut akan menjalankan Debat Publik pada 23 September 2019. Hasil akhir yaitu Penetapan Rektor Terpilih akan dilaksanakan pada 25 September 2019.<br />\r\n<br />\r\nUI mengajak seluruh anak bangsa untuk bersama-sama mengawal dan berpartisipasi dalam proses Pemilihan Rektor UI periode 2019-2024.</p>\r\n\r\n<p>Pendaftaran Bakal Calon Rektor UI telah dapat dilakukan secara online mulai 10 Juli-2 Agustus 2019. Pendaftaran dapat dilakukan melalui situs <a href=\"https://pemilihanrektor.ui.ac.id.\">pemilihanrektor.ui.ac.id.</a><br />\r\n<br />\r\nAdapun syarat dan kriteria menjadi Calon Rektor UI adalah:</p>\r\n\r\n<ol>\r\n	<li>Warga negara Indonesia</li>\r\n	<li>Belum berusia 60 (enam puluh) tahun pada saat dilantik menjadi Rektor sesuai dengan jadwal yang ditetapkan</li>\r\n	<li>Sehat jasmani dan jiwa berdasarkan surat keterangan dari Rumah Sakit Pemerintah yang ditentukan oleh Pansus Pilrek</li>\r\n	<li>Berpendidikan Doktor dari perguruan tinggi yang terakreditasi oleh Kementerian Riset, Teknologi dan Pendidikan Tinggi RI berdasarkan tanda lulus yang sah atau berpendidikan doktor dari perguruan tinggi luar negeri yang telah disetarakan oleh Kemenristekdikti</li>\r\n	<li>Menyerahkan Daftar Riwayat Hidup termasuk data tentang pekerjaan, pengalaman, pendidikan dan keluarga serta NPWP dan SPT terakhir</li>\r\n	<li>Membuat makalah maksimal 10 halaman yang berisi:</li>\r\n	<li>Motivasi calon untuk menjadi rektor, pemikiran mengenai Renstra UI dan program kerja yang mengacu kepada Kebijakan Umum Ul,</li>\r\n	<li>Gambaran diri atau uraian tentang diri sendiri</li>\r\n	<li>Menandatangani surat kesanggupan untuk menjadi Rektor, memberikan komitmen bekerja penuh waktu, dievaluasi secara berkala dalam jabatannya sebagai Rektor, mundur atau menerima diberhentikan jika dinilai oleh MWA tidak sanggup memenuhi tanggungjawabnya</li>\r\n	<li>Menyerahkan surat pernyataan bermaterai bahwa yang bersangkutan bukan anggota partai politik</li>\r\n	<li>Menyerahkan surat pernyataan bermaterai bahwa yang bersangkutan bebas dari kepentingan politik, ekonomi, maupun kepentingan pihak di luar UI lainnya yang bertentangan dengan kepentingan UI</li>\r\n	<li>Menyerahkan surat pernyataan bermaterai, bahwa yang bersangkutan tidak pernah ditetapkan menjadi terdakwa dengan ancaman pidana penjara paling singkat 5 (lima) tahun.</li>\r\n</ol>', 'Masa jabatan Muhammad Anis selaku Rektor Universitas Indonesia (UI) periode 2014-2019 akan berakhir pada 4 Desember 2019 mendatang. Untuk itu, UI membuka pendaftaran calon Rektor baru periode 2019-2024.', 'Loker', 0, 0, '2019-07-13 04:52:11', '2019-07-13 04:52:11'),
(15, 8, 'Wajah Bocah di Depok yang Diamankan Nge-prank Tuyul Dibalur Tepung', '15630189892IZOeETzkj5lo3vko4bicS.jpeg', '<p><img alt=\"\" src=\"https://akcdn.detik.net.id/community/media/visual/2019/07/13/0893c857-5f4b-4e4a-a200-3982fda5f143_169.jpeg?w=780&amp;q=90\" style=\"height:440px; width:780px\" /></p>\r\n\r\n<p><strong>Depok</strong> - Seorang bocah berinisial A (13) sempat diamankan Tim Jaguar karena menakut-nakuti warga dengan nge-<em>prank</em> sebagai tuyul. Dia didandani mirip tuyul dengan wajah <em>dibalur</em> tepung.<br />\r\n<br />\r\n&quot;Jadi wajahnya itu putih dibaluri tepung,&quot; kata Ketua Tim Jaguar Polresta Depok Iptu Winam Agus kepada <strong>detikcom</strong>, Sabtu (13/7/2019).<br />\r\n<br />\r\nA melakukan aksinya itu bersama tiga temannya. Cuma, ketiga temannya melarikan diri saat tahu A dikejar Tim Jaguar.<br />\r\n<br />\r\n&quot;Dia dipilih sama temannya yang jadi tuyul karena perawakannya yang paling sesuai, katanya,&quot; jelas Winam.</p>\r\n\r\n<p>Aksi A dkk itu dilakukan pada pukul 02.00 WIB dini hari tadi di Jalan Pertamina I, Tanah Baru, Beji, Depok. Berawal ketika Tim Jaguar sedang patroli, melihat sosok putih berdiri di pinggir jalan.<br />\r\n<br />\r\nTim Jaguar kemudian mendekati, namun bocah itu kabur dan bersembunyi di semak-semak. Namun wajahnya yang putih membuat niatnya bersembunyi gagal sehingga diamankan oleh Tim jaguar.<br />\r\n<br />\r\nBocah itu kemudian diinterogasi. Kepada polisi, dia mengaku melakukan aksinya bersama tiga orang temannya untuk menakut-nakuti warga.<br />\r\n<br />\r\n&quot;Katanya buat konten di <em>YouTube</em>, dipasang di IG juga katanya,&quot; lanjutnya.<br />\r\n<br />\r\nPolisi kemudian menasihati bocah A dan diminta untuk tidak mengulanginya. A kemudian dikembalikan kepada orang tuanya.</p>', 'Seorang bocah berinisial A (13) sempat diamankan Tim Jaguar karena menakut-nakuti warga dengan nge-prank sebagai tuyul. Dia didandani mirip tuyul dengan wajah dibalur tepung.', 'Berita', 0, 0, '2019-07-13 04:56:29', '2019-07-13 04:56:29'),
(16, 9, 'Jokowi-Prabowo Bertemu di MRT, Ganjar: Keren!', '1563019113s6UJacr4g83OsjnGYTPaDE.jpeg', '<p><img alt=\"\" src=\"https://akcdn.detik.net.id/community/media/visual/2019/07/13/a9bde3bc-fb31-4902-b448-e542f9a7a05f_169.jpeg?w=780&amp;q=90\" style=\"height:439px; width:780px\" /></p>\r\n\r\n<p><strong>Semarang</strong> - Gubernur Jawa Tengah, Ganjar Pranowo ikut senang dengan adanya pertemuan Joko Widodo dan Prabowo Subianto. Ganjar menganggap pertemuan itu keren karena bertemu di tempat terbuka.<br />\r\n<br />\r\nGanjar mengatakan pertemuan dua tokoh itu bisa dilihat langsung masyarakat sehingga banyak yang memuji. Keduanya juga memberikan narasi positif yang adem.<br />\r\n<br />\r\n&quot;Pertemuan di stasiun itu menurut saya bagus, ya, keren gitu di tempat yang masyarakat bisa melihat. Masyarakat mengelukan, Pak Jokowi, Pak Prabowo. Keduanya juga memberikan narasi positif,&quot; kata Ganjar usai melihat kualifikasi MXGP di Sirkuit Mijen Semarang, Sabtu (13/7/2019).</p>\r\n\r\n<p>Ganjar kemudian berpesan untuk para pendukung 01 dan 02 kembali bersatu dan tidak ada lagi saling nyinyir karena dua pemimpin sudah saling bertemu.<br />\r\n<br />\r\n&quot;Mulai titik ini dan seterusnnya kembali bersatu membangun bangsa. Kita pesan saja followers 01 dan 02 mari terima dengan lapang dada, jangan ada nyinyir. Dua pemimpin kita sudah bertemu. Tiba saatnya suatu yang ditunggu hadir. Saya ikuti di sosial media, keren, walau masia ada satu dua orang nyinyir. Mari semangat bangun bangsa,&quot; jelas Ganjar.</p>\r\n\r\n<p>&nbsp;</p>', 'Gubernur Jawa Tengah, Ganjar Pranowo ikut senang dengan adanya pertemuan Joko Widodo dan Prabowo Subianto. Ganjar menganggap pertemuan itu keren karena bertemu di tempat terbuka.', 'Daerah', 0, 0, '2019-07-13 04:58:34', '2019-07-13 04:58:34'),
(17, 10, 'Turis Belanda Tewas Akibat Banjir Bandang di Gua Populer Malaysia', '1563019295nbVA9979lpbfThH2Qso3HU.jpeg', '<p><img alt=\"\" src=\"https://akcdn.detik.net.id/community/media/visual/2019/07/13/df36a22c-38a5-4ff7-b571-79183e6d78ed_169.jpeg?w=780&amp;q=90\" style=\"height:439px; width:780px\" /></p>\r\n\r\n<p><strong>Kuala Lumpur</strong> - Seorang turis Belanda tewas akibat banjir bandang yang melanda sebuah gua populer di <a href=\"https://www.detik.com/tag/malaysia\">kawasan Taman Nasional Mulu di Malaysia</a>. Seorang pemandu wisata belum ditemukan.<br />\r\n<br />\r\nKepala pemadam kebakaran setempat, Law Poh Kiong mengidentifikasi turis yang tewas tersebut sebagai Peter Hans Hovenkamp (66) asal Utrecht,<a href=\"https://www.detik.com/tag/belanda\"> Belanda. </a><br />\r\n<br />\r\n&quot;Dia meninggal karena tenggelam setelah banjir bandang di gua. Jasadnya ditemukan di sebuah sungai di dalam gua dan dibawa ke rumah sakit umum Miri untuk post-mortem pada Sabtu,&quot; ujar Law seperti dikutip kantor berita <em>AFP,</em> Sabtu (13/7/2019).</p>\r\n\r\n<p>Law mengatakan, seorang pemandu wisata lokal, Roviezal Robin, belum ditemukan usai banjir bandang tersebut. Operasi pencarian untuk menemukan pria berumur 20 tahun itu masih dilakukan dengan melibatkan 16 petugas.<br />\r\n<br />\r\nLaw menambahkan, delapan turis lainnya yang berasal dari kelompok yang sama nyaris menjadi korban, namun mereka pergi ke tempat yang lebih tinggi sehingga tidak terseret banjir ke sungai.</p>\r\n\r\n<p>Sebelumnya, Hovenkamp dan Robin dilaporkan hilang pada Jumat (12/7) sore saat banjir bandang yang terjadi saat kelompok turis tersebut tengah melakukan tur ke gua populer &quot;Deer Cave&quot;, rumah bagi sekitar tiga juta kelelawar yang membentuk pola menakjubkan di langit ketika mereka pergi kala senja.<br />\r\n<br />\r\nTaman Nasional Mulu yang berlokasi di kawasan hutan terpencil di negeri bagian Sarawak, terkenal akan gua, tebing dan ngarainya. Taman nasional ini merupakan salah satu situs warisan dunia UNESCO.</p>', 'Seorang turis Belanda tewas akibat banjir bandang yang melanda sebuah gua populer di kawasan Taman Nasional Mulu di Malaysia. Seorang pemandu wisata belum ditemukan.', 'International', 1, 0, '2019-07-13 05:01:35', '2019-07-13 05:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama_kategori`, `sub_kategori`, `deleted`, `created_at`, `updated_at`) VALUES
(8, 'News', 'Berita', 0, '2019-07-13 03:37:45', '2019-07-13 03:37:45'),
(9, 'News', 'Daerah', 0, '2019-07-13 03:38:04', '2019-07-13 03:38:04'),
(10, 'News', 'International', 0, '2019-07-13 03:38:17', '2019-07-13 03:38:17'),
(11, 'Ekonomi', 'Financial', 0, '2019-07-13 03:38:53', '2019-07-13 03:38:53'),
(12, 'Ekonomi', 'Infrastruktur', 0, '2019-07-13 03:39:08', '2019-07-13 03:39:08'),
(13, 'Ekonomi', 'Industri', 0, '2019-07-13 03:39:27', '2019-07-13 03:39:27'),
(14, 'Ekonomi', 'Loker', 0, '2019-07-13 03:39:42', '2019-07-13 03:39:42'),
(15, 'Otomotif', 'Motor', 0, '2019-07-13 03:40:16', '2019-07-13 03:40:16'),
(16, 'Otomotif', 'Mobil', 0, '2019-07-13 03:40:26', '2019-07-13 03:40:26'),
(17, 'Otomotif', 'Modifikasi', 0, '2019-07-13 03:40:43', '2019-07-13 03:40:43');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `footer` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numbering` int(11) NOT NULL DEFAULT '5',
  `mostread` int(11) NOT NULL DEFAULT '3',
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `footer`, `numbering`, `mostread`, `logo`, `slider1`, `slider2`, `slider3`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'FrameWork progamming', 4, 3, 'logo.png', 'sliderberita.png', 'sliderotomotif2.png', 'sliderfinance.png', 0, NULL, '2019-07-13 20:03:39');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `isi`, `deleted`, `created_at`, `updated_at`) VALUES
(43, 'You just Created a new Category \" Daerah\"', 0, '2019-07-13 03:38:04', '2019-07-13 03:38:04'),
(44, 'You just Created a new Category \" International\"', 0, '2019-07-13 03:38:17', '2019-07-13 03:38:17'),
(45, 'You just Created a new Category \" Financial\"', 0, '2019-07-13 03:38:53', '2019-07-13 03:38:53'),
(46, 'You just Created a new Category \" Infrastruktur\"', 0, '2019-07-13 03:39:08', '2019-07-13 03:39:08'),
(47, 'You just Created a new Category \" Industri\"', 0, '2019-07-13 03:39:27', '2019-07-13 03:39:27'),
(48, 'You just Created a new Category \" Loker\"', 0, '2019-07-13 03:39:42', '2019-07-13 03:39:42'),
(49, 'You just Created a new Category \" Motor\"', 0, '2019-07-13 03:40:16', '2019-07-13 03:40:16'),
(50, 'You just Created a new Category \" Mobil\"', 0, '2019-07-13 03:40:26', '2019-07-13 03:40:26'),
(51, 'You just Created a new Category \" Modifikasi\"', 0, '2019-07-13 03:40:43', '2019-07-13 03:40:43'),
(52, 'Someone Just Deleted an article\" lorem ipsum\"', 0, '2019-07-13 03:41:41', '2019-07-13 03:41:41'),
(53, 'Someone Just Deleted an article\" Rahasia Onic Esport Memenangkan Lomba Mobalog\"', 0, '2019-07-13 03:41:44', '2019-07-13 03:41:44'),
(54, 'Someone Just Deleted an article\" This The New Title Of Our Web\"', 0, '2019-07-13 03:41:46', '2019-07-13 03:41:46'),
(55, 'You just Created an article with title = BMW R Nine T Edisi 50 Tahun', 0, '2019-07-13 03:49:59', '2019-07-13 03:49:59'),
(56, 'You just Created an article with title = Sadis! \'Urat-urat\' Motor Listrik Ini Terlihat Jelas', 0, '2019-07-13 03:52:29', '2019-07-13 03:52:29'),
(57, 'Someone Just Viewed on \" BMW R Nine T Edisi 50 Tahun\"', 0, '2019-07-13 03:52:48', '2019-07-13 03:52:48'),
(58, 'Someone Just Viewed on \" Sadis! \'Urat-urat\' Motor Listrik Ini Terlihat Jelas\"', 0, '2019-07-13 03:53:19', '2019-07-13 03:53:19'),
(59, 'You just Created an article with title = Orang Indonesia Belum Percaya Produk India, Kenapa Renault Nekat Jual Triber?', 0, '2019-07-13 03:55:39', '2019-07-13 03:55:39'),
(60, 'You just Created an article with title = Jokowi dan Prabowo Bertemu, IHSG Diproyeksi Kembali \'Berotot\'', 0, '2019-07-13 04:33:44', '2019-07-13 04:33:44'),
(61, 'Home view Updated ', 0, '2019-07-13 04:34:13', '2019-07-13 04:34:13'),
(62, 'Home view Updated ', 0, '2019-07-13 04:34:38', '2019-07-13 04:34:38'),
(63, 'Someone Just Viewed on \" Jokowi dan Prabowo Bertemu, IHSG Diproyeksi Kembali \'Berotot\'\"', 0, '2019-07-13 04:34:50', '2019-07-13 04:34:50'),
(64, 'You just Created an article with title = Proyek Tol Cinere-Serpong Terganjal Pembebasan Lahan', 0, '2019-07-13 04:42:04', '2019-07-13 04:42:04'),
(65, 'You just Created an article with title = Kawasan Industri Teluk Bintuni Ditarget Serap Investasi US$ 800 Juta', 0, '2019-07-13 04:46:17', '2019-07-13 04:46:17'),
(66, 'You just Created an article with title = Kawasan Industri Teluk Bintuni Ditarget Serap Investasi US$ 800 Juta', 0, '2019-07-13 04:49:49', '2019-07-13 04:49:49'),
(67, 'You just Created an article with title = Pengin Jadi Rektor UI? Begini Cara Daftarnya', 0, '2019-07-13 04:52:10', '2019-07-13 04:52:10'),
(68, 'You just Created an article with title = Wajah Bocah di Depok yang Diamankan Nge-prank Tuyul Dibalur Tepung', 0, '2019-07-13 04:56:29', '2019-07-13 04:56:29'),
(69, 'You just Created an article with title = Jokowi-Prabowo Bertemu di MRT, Ganjar: Keren!', 0, '2019-07-13 04:58:33', '2019-07-13 04:58:33'),
(70, 'You just Created an article with title = Turis Belanda Tewas Akibat Banjir Bandang di Gua Populer Malaysia', 0, '2019-07-13 05:01:35', '2019-07-13 05:01:35'),
(71, 'Someone Just Viewed on \" Sadis! \'Urat-urat\' Motor Listrik Ini Terlihat Jelas\"', 0, '2019-07-13 05:02:19', '2019-07-13 05:02:19'),
(72, 'Someone Just Viewed on \" BMW R Nine T Edisi 50 Tahun\"', 0, '2019-07-13 19:08:08', '2019-07-13 19:08:08'),
(73, 'Someone Just Viewed on \" BMW R Nine T Edisi 50 Tahun\"', 0, '2019-07-13 19:08:12', '2019-07-13 19:08:12'),
(74, 'Someone Just Viewed on \" Sadis! \'Urat-urat\' Motor Listrik Ini Terlihat Jelas\"', 0, '2019-07-13 19:08:17', '2019-07-13 19:08:17'),
(75, 'Someone Just Viewed on \" Orang Indonesia Belum Percaya Produk India, Kenapa Renault Nekat Jual Triber?\"', 0, '2019-07-13 19:08:30', '2019-07-13 19:08:30'),
(76, 'Someone Just Viewed on \" Orang Indonesia Belum Percaya Produk India, Kenapa Renault Nekat Jual Triber?\"', 0, '2019-07-13 19:08:35', '2019-07-13 19:08:35'),
(77, 'Someone Just Viewed on \" Orang Indonesia Belum Percaya Produk India, Kenapa Renault Nekat Jual Triber?\"', 0, '2019-07-13 19:08:42', '2019-07-13 19:08:42'),
(78, 'You just Created a new Category \" test\"', 0, '2019-07-13 19:17:15', '2019-07-13 19:17:15'),
(79, 'Home view Updated ', 0, '2019-07-13 19:40:24', '2019-07-13 19:40:24'),
(80, 'Home view Updated ', 0, '2019-07-13 19:40:55', '2019-07-13 19:40:55'),
(81, 'Home view Updated ', 0, '2019-07-13 20:03:01', '2019-07-13 20:03:01'),
(82, 'Home view Updated ', 0, '2019-07-13 20:03:11', '2019-07-13 20:03:11'),
(83, 'Home view Updated ', 0, '2019-07-13 20:03:39', '2019-07-13 20:03:39'),
(84, 'Someone Just Viewed on \" Turis Belanda Tewas Akibat Banjir Bandang di Gua Populer Malaysia\"', 0, '2019-07-13 20:28:04', '2019-07-13 20:28:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_06_27_143518_create_articles_table', 1),
(2, '2019_06_27_143626_create_categories_table', 1),
(3, '2019_07_02_025350_create_users_table', 2),
(4, '2019_07_02_030033_create_password_reset_table', 3),
(7, '2019_07_03_014226_home', 5),
(8, '2019_07_02_164556_logs', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('pungkiapriw@gmail.com', '$2y$10$5evx1yhQQRovFBd.1TK8qurB0dsBZ7/LvPfhLTyuDr5nJhiGqIkYu', '2019-07-02 06:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Muh Zaky Yulianto', 'bokapnyapay@gmail.com', NULL, '$2y$10$4fndRsU0DQy7iObbAuGCyOADihF7e2URriLror6qdsHayy87Gkj.y', NULL, '2019-07-13 19:47:31', '2019-07-13 19:47:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_id_unique` (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_id_unique` (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_reset_email_index` (`email`),
  ADD KEY `password_reset_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
