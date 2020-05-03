-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2020 pada 16.33
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jafar_obatku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `interaksi`
--

CREATE TABLE `interaksi` (
  `kode_interaksi` int(11) NOT NULL,
  `nama_interaksi` text NOT NULL,
  `interaksi` text NOT NULL,
  `kode_obat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `kode_obat` int(11) NOT NULL,
  `nama_obat` varchar(20) NOT NULL,
  `gol_obat` varchar(25) NOT NULL,
  `indikasi` text NOT NULL,
  `dosis` text NOT NULL,
  `pemberian` text NOT NULL,
  `kontraindikasi` text NOT NULL,
  `efeksamping` text NOT NULL,
  `hamilbusui` text NOT NULL,
  `interaksi_obat` text NOT NULL,
  `mekanisme_obat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`kode_obat`, `nama_obat`, `gol_obat`, `indikasi`, `dosis`, `pemberian`, `kontraindikasi`, `efeksamping`, `hamilbusui`, `interaksi_obat`, `mekanisme_obat`) VALUES
(1, 'Acarbose', 'Anti Diabetic', 'Diabetes Melitus tipe 2', 'Dewasa : Per Oral Awal 50mg/ hari. Dapat dinaikan sampai 50mg 3x sehari , jika diperlukan 6-8 minggu sampai 100mg 3x sehari. Dosis Max : 3x sehari 200mg.', 'Harus bersamaan dengan makan. Saat suapan pertama makan.', 'Pasien dg penyakit radang usus, ketoasidosis atau sirosis diabetik, ulserasi kolon, obstruksi usus parsial atau kecenderungan pada kondisi ini, penyakit usus kronis terkait dg gangguan pencernaan atau absorpsi dan keadaan yang mungkin memburuk akibat peningkatan pembentukan gas di usus (misalnya hernia yang lebih besar). Ggn hati dan ginjal berat (CrCl <25 mL / mnt).', 'Perut kembung, sering buang angin, nyeri lambung, diare, gangguan fungsi hati, mual & muntah. Hentikan pemakaian obat dan segera temui dokter bila timbul memar pada tubuh, mimisan, gusi berdarah, sakit kuning, ruam atau gatal di seluruh tubuh, pembengkakan di wajah, bibir, dan lidah, serta kesulitan bernapas.', 'Kategori B: Studi pada binatang percobaan tidak memperlihatkan adanya risiko terhadap janin, namun belum ada studi terkontrol pada wanita hamil. \r\nBelum diketahui apakah acarbose bisa diserap ke dalam ASI atau tidak. Namun, ibu hamil disarankan untuk tidak mengonsumsi obat ini.', 'Meningkatkan risiko efek samping acarbose, jika digunakan dengan cholestyramine dan neomycin.\r\nMeningkatkan risiko hipoglikemia jika digunakan bersama dengan obat antidiabetes lain, seperti glibenklamid.\r\nMengurangi efektivitas acarbose jika digunakan bersama dengan obat adsorben saluran pencernaan, seperti karbon aktif (charcoal) atau obat digestan (amilase dan pancreatin).\r\nMenghambat penyerapan digoxin.', 'Acarbose secara kompetitif dan reversibel menghambat α-amilase pankreas dan batas sikat usus α-glukosidase, menghasilkan hidrolisis tertunda karbohidrat kompleks dan disakarida, dan penyerapan glukosa; pengurangan dosis tergantung pada insulin serum postprandial dan puncak glukosa; menghambat metabolisme sukrosa menjadi glukosa dan fruktosa.'),
(2, 'Metformin', 'Anti Diabetic', 'Diabetes Melitus tipe 2', 'Dewasa: Pengobatan: tablet konvensional: Awalnya, 500 atau 850 mg 2x sehari atau 3x sehari, secara bertahap meningkat pada interval setidaknya 1 minggu sesuai dengan respons. Maks: 3.000 mg setiap hari dalam 3 dosis terbagi. tablet lepas lambat: Awalnya, 500 mg setiap hari dengan makan malam, naikkan dosis dengan peningkatan 500 mg hingga Maks 2.000 mg setiap hari sesuai dengan respons. Profilaksis: tablet lepas lambat: Awalnya, 500 mg setiap hari dengan makan malam, secara bertahap meningkatkan dosis dengan interval 10-15 hari, menurut tanggapan. Maks: 2.000 mg setiap hari dengan makan malam.\r\nAnak: ≥10 tahun tablet konvensional: Awalnya, 500 atau 850 mg sekali sehari, secara bertahap tingkatkan dosis dengan interval minimal 1 minggu menurut tanggapan. Maks: 2.000 mg setiap hari dalam 2 atau 3 dosis terbagi.\r\nLansia: Sesuaikan dosis berdasarkan fungsi ginjal.', 'Harus dengan makan atau setelah makan.', 'Asidosis metabolik akut atau kronis dengan atau tanpa koma, kondisi akut yang dapat mengubah fungsi ginjal (misalnya dehidrasi, infeksi parah, syok), hipoksia akut atau kronis yang menyebabkan penyakit (misalnya gagal jantung atau gagal napas, MI baru-baru ini, syok), alkohol akut keracunan atau alkoholisme. Ggn ginjal berat (eGFR <30 mL / mnt). Pemberian agen kontras beryodium secara intravaskular.', 'Signifikan: Kekurangan vitamin B12, Ketidaknyamanan dada, jantung berdebar, dyspnoea, Mual, muntah, diare, sakit perut, perut kembung, mulas / pencernaan yg terganggu, perut kembung, tinja abnormal, sembelit, asthenia, gejala seperti flu, malaise, Cedera hati hepatoselular kolestatik, hepatoseluler, dan campuran, Mialgia, kedinginan, Gangguan rasa, sakit kepal, peningkatan mengantuk, infeksi saluran pernapasan atas, Penyakit kuku, ruam, Berpotensi fatal: asidosis laktat.', 'Kategori B: Studi reproduksi hewan tidak menunjukkan risiko janin tetapi tidak ada studi terkontrol pada wanita hamil atau studi reproduksi hewan menunjukkan efek buruk (selain penurunan kesuburan) yang tidak dikonfirmasi dalam studi terkontrol pada wanita pada trimester pertama (dan tidak ada bukti risiko pada trimester berikutnya).', 'Peningkatan risiko hipoglikemia dengan insulin dan insulin secretagogues (mis. Sulfonylurea). Peningkatan risiko asidosis laktat dengan inhibitor karbonat anhidrase (mis. Acetazolamide, dichlorphenamide), NSAID, dan agen antihipertensi (mis. ACE inhibitor). Peningkatan konsentrasi plasma dan pengurangan clearance dengan inhibitor OCT2 (mis. Simetidin, dolutegravir, ranolazin, trimetoprim, vandetanib, isavuconazole).\r\nBerpotensi Fatal: Nefropati yang diinduksi kontras dan peningkatan risiko asidosis laktat dengan agen kontras beryodium.', 'Metformin adalah agen antihyperglycaemic biguanide yang meningkatkan toleransi glukosa dengan menurunkan baik glukosa plasma basal dan postprandial. Ini mengurangi produksi glukosa hati dengan menghambat glukoneogenesis dan glikogenolisis, menunda penyerapan glukosa usus, dan meningkatkan sensitivitas insulin dengan meningkatkan penyerapan dan pemanfaatan glukosa perifer.'),
(3, 'Glipizide', 'Anti Diabetic', 'Diabetes Melitus tipe 2', 'Per oral tablet lepas segera: Awal: 2,5-5 mg / hari sebagai dosis tunggal. Sesuaikan dosis pada interval beberapa hari dengan peningkatan 2,5-5 mg / hari sesuai dengan respons. Dosis> 15 mg dapat diberikan dalam 2 dosis terbagi. Maks: 20 mg / hari. tablet lepas lambat: Awalnya, 2,5-5 mg sekali sehari, sesuaikan dosis sesuai dengan tanggapan dengan peningkatan 5-10 mg sekali seminggu. Maks: 20 mg. Lansia: Awalnya, 2,5 mg sekali sehari, titrasi dosis 2,5-5 mg setiap hari dengan interval 1-2 minggu. Dosis pemeliharaan harus konservatif.', 'Tablet lepas segera: Harus diambil dengan perut kosong. Minum 30 menit sebelum makan. Tablet lepas lambat: Harus diambil dengan makanan. Telan utuh, jangan mengunyah / menghancurkan / membagi.', 'Hipersensitif terhadap glipizid, sulfonilurea atau sulfonamid lainnya. Diabetes mellitus tipe 1, ketoasidosis diabetik dengan atau tanpa koma atau riwayat koma ketoasidotik, gangguan tiroid berat. Ggn ginjal atau hati berat. Penyempitan gastrointestinal berat patologis atau iatrogenik yang sudah ada sebelumnya (lepas lambat). Penggunaan bersamaan dengan miconazole.', 'Signifikan: Hipoglikemia, reaksi hipersensitif, anemia hemolitik yang diinduksi sulfonilurea (defisiensi G6PD), Leukopenia, agranulositosis, trombositopenia, anemia aplastik, pansitopenia, Penglihatan kabur, Nyeri perut, diare, mual, muntah, gastralgia, penyakit kuning kolestatik, porfiria hepatik, Reaksi seperti disulfiram, Pusing, kantuk, mengantuk, gemetar, sakit kepala, Eksim, eritema morbiliformis, erupsi makulopapular, urtikaria, pruritus.', 'Kategori C: Salah satu studi pada hewan telah mengungkapkan efek buruk pada janin (teratogenik atau embriosidal atau lainnya) dan tidak ada studi terkontrol pada wanita atau studi pada wanita dan hewan tidak tersedia. Obat harus diberikan hanya jika manfaat potensial membenarkan potensi risiko pada janin.', 'Peningkatan konsentrasi plasma dengan flukonazol dan vorikonazol. Peningkatan efek hipoglikemik dengan NSAID (mis. Fenilbutazon), inhibitor ACE, MAOI, simetidin, kloramfenikol, probenidid, kumarin, dan fibrat. Berpotensi Fatal: Hipoglikemia berat yang menyebabkan koma dengan mikonazol.', 'Glipizide menstimulasi pelepasan insulin dari sel-sel β pankreas dan mengurangi output glukosa dari hati. Ini juga meningkatkan sensitivitas insulin di situs target perifer.'),
(4, 'Dapagliflozin', 'Anti Diabetic', 'Diabetes Melitus tipe 2', 'Dewasa : Per oral, awalnya 5 mg sehari sekali. Dosis dapat ditingkatkan menjadi 10 mg bagi pasien yang membutuhkan kontrol glikemik tambahan. Dosis harian maksimal yang dianjurkan: 10 mg.', 'Dapat dikonsumsi dengan atau tanpa makanan.', 'Kanker kandung kemih aktif. Ggn ginjal sedang sampai berat (eGFR <60 mL / mnt), ESRD, atau pasien hemodialisis. Laktasi.', 'Signifikan: Infeksi mikotik genital (termasuk vulvovaginitis, balanitis), hipotensi, patah tulang, ISK, peningkatan tingkat hematokrit, dislipidemia, hipoglikemia (bila digunakan dengan insulin atau sulfonilurea), mual, sembelit, haus, mulut kering, nyeri punggung, nyeri ekstremitas, pusing. disuria, poliuria, nokturia. Gangren Fournier (necrotising fasciitis perineum), nasofaringitis, urtikaria, angioedema, hiperhidrosis, ruam. Berpotensi fatal: Ketoasidosis diabetikum, cedera ginjal akut.', 'Kategori C: Salah satu studi pada hewan telah mengungkapkan efek buruk pada janin (teratogenik atau embriosidal atau lainnya) dan tidak ada studi terkontrol pada wanita atau studi pada wanita dan hewan tidak tersedia. Obat harus diberikan hanya jika manfaat potensial membenarkan potensi risiko pada janin.', 'Risiko dehidrasi dan hipotensi meningkat ketika digunakan dengan diuretik.', 'Dapagliflozin adalah inhibitor reversibel natrium-glukosa co-transporter 2 (SGLT2), situs utama reabsorpsi glukosa yang disaring dalam tubulus proksimal berbelit-belit ginjal. Ini mengurangi reabsorpsi glukosa yang difilter dan menurunkan ambang batas ginjal untuk glukosa, menghasilkan peningkatan ekskresi glukosa urin.'),
(5, 'Glimepiride', 'Anti Diabatic', 'Diabetes Melitus tipe 2', 'Dewasa: Dosis bersifat individual berdasarkan kadar glukosa darah pasien. Awalnya, 1 mg setiap hari, dapat meningkat dalam peningkatan 1 mg pada interval 1-2 minggu menurut tanggapan. Pemeliharaan: 4 mg setiap hari. Maks: 6 mg setiap hari. Lansia: Awalnya, 1 mg sekali sehari.', 'Harus dengan makanan. Minum segera sebelum atau saat sarapan, atau saat makan pertama pada hari itu. Jangan melewatkan waktu makan.', 'Penderita yang hipersensitif terhadap glimepiride, sulfonilurea atau sulfonamid lainnya. Diabetes tipe 1 atau diabetes yang tergantung insulin, dan ketoasidosis diabetik (dengan atau tanpa koma). Ggn ginjal atau hati berat.', 'Signifikan: Hipoglikemia, anemia hemolitik (defisiensi G6PD), reaksi hipersensitivitas (mis. Anafilaksis, angioedema, sindrom Stevens-Johnson), penambahan berat badan, leukopenia, agranulositosis, anemia aplastik, pansitopenia, trombositopenia, sekresi hormon antidiuretik yang tidak pantas (SIADH), gangguan visual, nyeri perut, diare, mual, muntah, dysgeusia, asthenia, kolestasis, ikterus, hepatitis, gagal hati, porfiria hati, reaksi seperti disulfiram, hiponatremia, sakit kepala, pusing ,fotosensitifitas, alopesia.', ' Kategori C: Salah satu studi pada hewan telah mengungkapkan efek buruk pada janin (teratogenik atau embriosidal atau lainnya) dan tidak ada studi terkontrol pada wanita atau studi pada wanita dan hewan tidak tersedia. Obat harus diberikan hanya jika manfaat potensial membenarkan potensi risiko pada janin.', 'Peningkatan efek hipoglikemik dengan NSAID (misalnya fenilbutazon), insulin, antidiabetik oral (misalnya metformin), salisilat, fluoxetine, steroid anabolik dan androgen, antibiotik (mis. Kloramfenikol, sulfonamid, tetrasiklin, quinolon, klaritromikarbon, antimikarbonid) inhibitor, MAOI, allopurinol, probenecid, sulfinpyrazone, cyclophosphamide, fluconazole dan pentoxifylline. Penurunan efek hipoglikemik dengan estrogen, kontrasepsi oral, diuretik thiazide, glukokortikoid, turunan fenotiazin (misalnya klorpromazin), simpatomimetik (misalnya epinefrin, albuterol, terbutalin), asam nikotinat (dosis tinggi) dan penggunaan asam nikotinat jangka panjang). , diazoksida, glukagon, barbiturat, rifampisin, dan isoniazid. Tanda-tanda hipoglikemia dapat berkurang atau tidak ada pada pasien yang menggunakan obat simpatolitik (mis. Ss-blocker, clonidine, guanethidine, reserpin). Dapat menyebabkan hipoglikemia berat dengan mikonazol.', 'Glimepiride, sebuah sulphonylurea antidiabetik, mengurangi glukosa darah dengan menstimulasi pelepasan insulin dari sel-sel β pankreas dan menurunkan output glukosa dari hati. Ini juga meningkatkan sensitivitas insulin di situs target perifer.'),
(6, 'Linagliptin', 'Anti Diabetic', 'Diabetes Melitus tipe 2', 'Per oral 5mg sekali sehari.', 'Dapat dikonsumsi dengan atau tanpa makanan.', 'Pasien dg riwayat pankreatitis; angioedema ke penghambat DPP-4 lainnya. Tidak ditujukan pada pasien dg IDDM atau untuk perawatan ketoasidosis diabetikum. Kehamilan dan menyusui.', 'Hipoglikemia, artralgia parah dan melumpuhkan, nasofaringitis, ruam, sariawan, stomatitis, diare, batuk. reaksi hipersensitivitas. Berpotensi Fatal: Pankreatitis akut.', 'Kategori B: Studi reproduksi hewan tidak menunjukkan risiko janin tetapi tidak ada studi terkontrol pada wanita hamil atau studi reproduksi hewan menunjukkan efek buruk (selain penurunan kesuburan) yang tidak dikonfirmasi dalam studi terkontrol pada wanita pada trimester pertama (dan tidak ada bukti risiko pada trimester berikutnya).', 'Peningkatan risiko hipoglikemia ketika digunakan bersama insulin secretagogue (mis. Sulfonylurea) atau insulin. Konsentrasi plasma linagliptin dapat dikurangi dengan penginduksi kuat P-glikoprotein (mis. Rifampisin) dan dapat ditingkatkan dengan inhibitor P-glikoprotein yang kuat (mis. Ritonavir).', 'Linagliptin menghambat dipeptidyl peptidase-4 (DPP-4), suatu enzim yang terlibat dalam inaktivasi hormon incretin GLP-1 (glucagon-like peptide-1) dan GIP (glukosa-dependent insulinotropic polypeptide). Kedua hormon incretin terlibat dalam regulasi fisiologis homeostasis glukosa. Penghambatan DPP-4 menyebabkan peningkatan level incretin aktif dan berkepanjangan.'),
(7, 'Pioglitazone', 'Anti Diabetic', 'Diabetes Melitus tipe 2', 'Per oral 15 atau 30mg sehari sekali. meningkat secara bertahap jika perlu. Maks: 45 mg / hari.', 'Dapat dikonsumsi dengan atau tanpa makanan.', 'DM tipe 1 atau ketoasidosis diabetikum. Gagal jantung berat (NYHA kelas III atau IV). Aktif atau riwayat kanker kandung kemih. Ggn hati sedang sampai berat. Pasien dengan hematuria makroskopik yang tidak diselidiki.', 'Edema, peningkatan berat badan, sinusitis, infeksi saluran pernapasan atas, disfungsi hati (mis. Muntah, mual yang tidak dapat dijelaskan, anoreksia, urin gelap, sakit perut, kelelahan), keropos dan patah tulang, mialgia, gangguan penglihatan; penurunan jumlah hemoglobin dan hematokrit (terkait dosis); penurunan trigliserida serum, peningkatan kolesterol HDL; LFT abnormal. Berpotensi fatal: Kerusakan hati hepatoselular-kolestatik campuran dan gagal hati; hepatitis.', 'Kategori C: Salah satu studi pada hewan telah mengungkapkan efek buruk pada janin (teratogenik atau embriosidal atau lainnya) dan tidak ada studi terkontrol pada wanita atau studi pada wanita dan hewan tidak tersedia. Obat harus diberikan hanya jika manfaat potensial membenarkan potensi risiko pada janin.', 'Peningkatan risiko edema dg insulin, metformin, dan sulfonilurea. Peningkatan kadar plasma dg gemfibrozil dan ketoconazole. Tingkat plasma menurun dg rifampisin.', 'Pioglitazone adalah sebagai agonis ampuh dan sangat selektif untuk peroksisom proliferator diaktifkan reseptor-γ (PPAR-γ). Aktivasi reseptor ini mendorong produksi produk gen yang terlibat dalam metabolisme lipid dan glukosa. Ini juga meningkatkan respons insulin terhadap sel target tanpa meningkatkan sekresi insulin pankreas.'),
(8, 'Repaglinide', 'Anti Diabetic', 'Diabetes Melitus tipe 2', 'Sebagai monoterapi atau dalam kombinasi dengan metformin: Awalnya, 0,5 mg. Pasien yang pindah dari agen hipoglikemik lain: Awalnya, 1mg. Semua dosis diminum 30 menit sebelum makan utama. Dapat menyesuaikan dosis dengan interval 1-2 minggu, hingga maksimal 4 mg per dosis. Maks: 16 mg setiap hari.', 'Harus diminum dengan makanan. Biasanya diminum dalam 15 menit waktu makan tetapi waktu dapat bervariasi dari segera sebelum hingga 30 menit sebelum makan.', 'Ketoasidosis diabetikum dengan atau tanpa koma, diabetes mellitus tipe 1. Penggunaan bersamaan dengan gemfibrozil.', 'Hipoglikemia berat, sindrom koroner akut (mis. MI), Nyeri perut, diare, Arthralgia, nyeri punggung, Sakit kepala, Infeksi saluran pernapasan atas, sinusitis, bronkitis.', 'Kategori C: Salah satu studi pada hewan telah mengungkapkan efek buruk pada janin (teratogenik atau embriosidal atau lainnya) dan tidak ada studi terkontrol pada wanita atau studi pada wanita dan hewan tidak tersedia. Obat harus diberikan hanya jika manfaat potensial membenarkan potensi risiko pada janin.', 'Peningkatan metabolisme dengan induser CYP3A4 (mis. Rifampisin, barbiturat, karbamazepin). Efek yang ditingkatkan dengan NSAID dan obat terikat protein lainnya (mis. Salisilat, sulfonamid, fenilbutazon, antikoagulan oral, dan hidantoin). Peningkatan konsentrasi plasma dengan ketokonazol, flukonazol, itrakonazol, dan eritromisin. Berpotensi Fatal: Efek ditingkatkan dan berkepanjangan dengan gemfibrozil.', 'Repaglinide adalah analog meglitinide kerja pendek yang menurunkan glukosa darah dengan menghalangi saluran K yang bergantung pada ATP dalam membran sel β yang menghasilkan depolarisasi. Ini mengarah pada pembukaan saluran Ca. Aliran masuk Ca yang dihasilkan merangsang pelepasan insulin dari sel-sel β pankreas.'),
(9, 'Saxagliptin', 'Anti Diabetic', 'Diabetes Melitus tipe 2', '2,5 atau 5 mg sekali sehari. Kombinasi dg inhibitor CYP3A4 / 5 yang kuat: 2,5 mg sekali sehari.', 'Dapat dikonsumsi dengan atau tanpa makanan.', 'Diabetes tipe 1, ketoasidosis diabetikum.', 'Sakit kepala, kelelahan, pusing; gastritis, dispepsia, muntah; ISK, sinusitis, nasofaringitis, infeksi saluran pernapasan atas, gastroenteritis; edema perifer; mialgia, hipoglikemia; hipertrigliseridemia, disfungsi ereksi, artralgia, pankreatitis, dislipidemia; ruam. Berpotensi Fatal: Reaksi hipersensitivitas serius (mis. Reaksi anafilaksis, angiooedema). Peningkatan risiko pankreatitis.', 'Kategori B: Studi reproduksi hewan tidak menunjukkan risiko janin tetapi tidak ada studi terkontrol pada wanita hamil atau studi reproduksi hewan menunjukkan efek buruk (selain penurunan kesuburan) yang tidak dikonfirmasi dalam studi terkontrol pada wanita pada trimester pertama (dan tidak ada bukti risiko pada trimester berikutnya).', 'Peningkatan risiko hipoglikemia dg sulfonilurea bersamaan, pengurangan dosis mungkin diperlukan. Peningkatan kadar serum dengan penghambat CYP3A4 / 5 (mis. Atazanavir, ketoconazole, nefazodone, ritonavir). Induksi CYP3A4 bersamaan (mis. Karbamazepin, fenobarbital) dapat mengurangi efek penurun glikemik saxagliptin.', 'Saxagliptin menghambat enzim dipeptidyl peptidase IV (DPP-IV) yang menghasilkan tingkat incretin aktif yang berkepanjangan. Ini meningkatkan tingkat sirkulasi insulinotropic polypeptide (GIP) yang bergantung pada glukosa dan peptide-1 seperti glukagon (GLP-1) yang merangsang sekresi insulin dalam sel-sel β pankreas dengan cara yang bergantung pada glukosa. Ini meningkatkan kontrol glikemik dengan mengurangi konsentrasi glukosa plasma puasa dan postprandial pada pasien dengan DM tipe 2.'),
(10, 'Sitagliptin', 'Anti Diabetic', 'Diabetes Melitus tipe 2', '100 mg sehari sekali', 'Dapat dikonsumsi dengan atau tanpa makanan.', 'ketoasidosis, gangguan fungsi ginjal (hindari, jika GFR kurang dari 50 mL/menti/1,73 m2), kehamilan, menyusui.', 'Sakit kepala, pusing, gangguan GI (mis. Sembelit, muntah), edema perifer, infeksi saluran pernapasan atas, nasofaringitis, peningkatan nilai enzim hati, gagal ginjal akut, hipoglikemia, artralgia, mialgia, nyeri pada ekstremitas, nyeri punggung. Berpotensi Fatal: Pankreatitis akut (mis. Pankreatitis hemoragik atau nekrosis); reaksi hipersensitivitas serius (mis. anafilaksis, angioedema, dan kondisi kulit eksfoliatif termasuk sindrom Stevens-Johnson).', 'Kategori B: Studi reproduksi hewan tidak menunjukkan risiko janin tetapi tidak ada studi terkontrol pada wanita hamil atau studi reproduksi hewan menunjukkan efek buruk (selain penurunan kesuburan) yang tidak dikonfirmasi dalam studi terkontrol pada wanita pada trimester pertama (dan tidak ada bukti risiko pada trimester berikutnya).', 'Peningkatan risiko hipoglikemia bila digunakan bersama dg sulfonilurea atau insulin.', 'Sitagliptin menghambat enzim dipeptidyl peptidase IV (DPP-IV) yang menghasilkan tingkat incretin aktif yang berkepanjangan. Hormon incretin, termasuk glukagon-like peptide 1 (GLP-1) dan insulinotropic polypeptide (GIP) yang bergantung pada glukosa, mengatur homeostasis glukosa dengan meningkatkan sintesis insulin dan melepaskan dari sel β pankreas dan mengurangi sekresi glukagon dari sel α pankreas. Mengurangi sekresi glukagon menyebabkan penurunan produksi glukosa hati. Dalam keadaan fisiologis normal, hormon incretin dilepaskan oleh usus sepanjang hari dan kadar meningkat sebagai respons terhadap makanan; hormon incretin secara cepat dinonaktifkan oleh enzim DPP-IV.'),
(11, 'Vildagliptin', 'Anti Diabetic', 'qwdqw', 'qwgq', 'asgqw', 'qwgqwg', 'qwgqw', 'qwgqwg', 'qwgqwgq', 'qwgqw'),
(12, 'Glibenclamide', 'Anti Diabetic', 'qwdq', 'qwfq', '', 'qwf', 'qwf', 'qwf', 'qwg', 'qwgq'),
(13, 'Gliclazide', 'Anti Diabetic', 'Diabetes tipe 2 pada orang dewasa ketika langkah-langkah diet, latihan fisik dan penurunan berat badan saja tidak cukup untuk mengontrol glukosa darah', 'Dosis rekomendasi awal adalah 30mg perhari. Jika gula darah terkontrol dengan efektif, maka dosis ini dapat digunakan sebagai pengobatan pemeliharaan.\r\nJika gula darah tidak cukup terkontrol, dosis dapat dinaikan menjadi 60, 90 atau 120mg perhari, secara bertahap. Jarak diantara penaikan dosis harus kurang lebih 1 bulan kecuali pasien yang gula darahnya tidak menurun setelah 2 minggu pengobatan, pada kasus tersebut dosis dapat dinaikan setelah 2 minggu pengobatan.\r\nDosis maksimum yang direkomendasi adalah 120mg', 'Diminum bersamaan dengan sarapan', 'Hipersensitif terhadap gliklazid, sulfonilurea, atau sulfonamid. Diabetes tipe 1, diabetes pra-koma dan koma, keto-asidosis diabetes. Ggn ginjal dan hati berat. Penggunaan bersamaan dengan miconazole Kehamilan dan laktasi.', 'Signifikan: Hipoglikemia. anemia, leukopenia, trombositopenia, agranulositosis, pansitopenia, anemia hemolitik, eritrositopenia, hiperglikemia, gangguan penglihatan, nyeri perut, mual, muntah, pencernaan yg terganggu, diare, sembelit, pendarahan saluran cerna, kolestasis, ikterus, hepatitis, infeksi virus, peningkatan kadar enzim hati, peningkatan kreatinin serum dan BUN, arthralgia, arthritis, nyeri punggung, sakit kepala, pusing, tanda-tanda pengaturan adrenergik termasuk hiperhidrosis, kulit lembab, gelisah, takikardia, jantung berdebar, angina pektoris, aritmia jantung, dan hipertensi, ISK, bronkitis, rinitis, faringitis, infeksi saluran pernapasan atas, batuk, ruam, pruritus, urtikaria, angioedema, eritema, ruam makulopapular, reaksi bulosa termasuk sindrom Stevens-Johnson dan nekrolisis epidermal toksik, ruam obat dengan eosinofilia dan gejala sistemik.', 'Kategori N: Tidak ada penelitian yang memadai mengenai risiko penggunaan obat ini pada ibu hamil atau menyusui. Selalu konsultasikan kepada dokter Anda untuk mempertimbangkan potensi manfaat dan risiko sebelum menggunakan obat ini.', 'Peningkatan efek hipoglikemik dengan fenilbutazon. Dapat menurunkan metabolisme dengan kloramfenikol. Dapat meningkatkan efek agen antikoagulan (mis. Warfarin). Dapat meningkatkan efek hipoglikemik dengan agen antidiabetik lain (mis. Insulin, metformin, agonis reseptor peptida-1 seperti glukagon, acarbose, thiazolidinediones, inhibitor dipeptidyl peptidase-4), β-blocker, flukonazol, salisilat, penghambat ACE (mis. Kapril, enkram) , H2-receptor blocker, MAOIs, sulfonamides, antibiotik quinolone, clarithromycin, dan NSAID lainnya. Peningkatan kadar glukosa darah dengan klorpromazin (pada dosis tinggi), β-agonis (mis. Salbutamol, ritodrine), tetracosactrin, glukokortikoid (dengan kemungkinan ketosis), dan danazol. Berpotensi Fatal: Peningkatan efek hipoglikemik dan kemungkinan timbulnya hipoglikemia, atau koma dengan mikonazol.', 'Gliclazide adalah sulfonilurea antidiabetes. Ini meningkatkan sensitivitas insulin di situs target perifer dengan merangsang pelepasan insulin dari sel β pankreas dan mengurangi penyerapan insulin dan output glukosa dari hati. Ini memiliki sifat hemovaskular di mana ia menurunkan mikrotrombosis dengan mengembalikan fibrinolisis dengan peningkatan aktivitas aktivator plasminogen jaringan (t-PA), dan dengan penghambatan parsial agregasi dan adhesi trombosit. Durasi: 24 jam (dimodifikasi-rilis).');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `interaksi`
--
ALTER TABLE `interaksi`
  ADD PRIMARY KEY (`kode_interaksi`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `interaksi`
--
ALTER TABLE `interaksi`
  MODIFY `kode_interaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `kode_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
