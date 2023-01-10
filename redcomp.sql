-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2022 at 02:51 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redcomp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'andika', 'qwerty', 'andika saputra');

-- --------------------------------------------------------

--
-- Table structure for table `mouse`
--

CREATE TABLE `mouse` (
  `id_mouse` int(11) NOT NULL,
  `nama_mouse` varchar(100) NOT NULL,
  `harga_mouse` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `foto_mouse` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `stok_mouse` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mouse`
--

INSERT INTO `mouse` (`id_mouse`, `nama_mouse`, `harga_mouse`, `berat`, `foto_mouse`, `deskripsi`, `stok_mouse`) VALUES
(3, 'Logitech G502 Gaming Mouse Proteus Spectrum', 200000, 200, 'm12.jpg', '									logitech						', 8);

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nama_kota`, `tarif`) VALUES
(1, 'Semarang', 10000),
(2, 'Jakarta', 20000),
(3, 'Demak', 25000),
(4, 'Jepara', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `email_pelanggan` varchar(50) NOT NULL,
  `password_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `telepon_pelanggan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`) VALUES
(1, 'riska@gmail.com', 'qwerty', 'Riska', '081287735520'),
(2, 'handika@gmail.com', 'qwerty', 'Handika', '081287736670'),
(3, 'saputra@gmail.com', 'qwerty', 'Saputra', '089778885993');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pembelian`, `nama`, `bank`, `jumlah`, `tanggal`, `bukti`) VALUES
(1, 73, 'Andika Saputra', 'BRI', 2147483647, '2018-07-23', '201807231815098d3cb3a5-085c-40ff-8775-346dc22f6f3f.jpg'),
(2, 73, 'Andika Saputra', 'BRI', 2147483647, '2018-07-23', '201807231815208d3cb3a5-085c-40ff-8775-346dc22f6f3f.jpg'),
(3, 73, 'Andika Saputrassssssss', 'sss', 222, '2018-07-23', '20180723181746bg2.jpg'),
(4, 73, 'Andika Saputra', 'BRI', 2147483647, '2018-07-23', '20180723182508cropped-3840-2160-913060.jpg'),
(5, 73, 'Andika Saputra', 'BRI', 2147483647, '2018-07-23', '20180723182608cropped-3840-2160-913060.jpg'),
(6, 1, 'Andika Saputra', 'BRI', 7210000, '2018-07-24', '20180724132346banner-03.jpg'),
(7, 7, 'Andika Saputra', 'BRI', 2769000, '2018-07-24', '20180724132701banner-05.jpg'),
(8, 7, '', '', 0, '2018-07-24', '20180724132808'),
(9, 12, 'Andika Saputra', 'BRI', 3600000, '2018-07-25', '201807250347521 taqin.png'),
(10, 15, '', '', 222, '2018-07-25', '20180725041822'),
(11, 15, 'Andika Saputra', 'BRI', 1780000, '2018-07-25', '20180725042150analytics.png'),
(12, 16, 'Andika Saputra', 'BRI', 2759000, '2018-07-25', '20180725072120analytics.png'),
(13, 17, 'Andika Saputra', 'BRI', 2400000, '2018-07-29', '20180729070401file.png'),
(14, 18, 'Andika Saputra', 'BRI', 2759000, '2018-07-30', '20180730100434banner-03.jpg'),
(15, 19, 'Andika Saputra', 'BRI', 3610000, '2018-07-31', '20180731084311ph1.png'),
(16, 20, 'Riska Handika Saputra', 'BRI', 23451234, '2022-07-30', '20220730040942yunjin.png');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `status_pembelian` varchar(100) NOT NULL DEFAULT 'pending',
  `resi_pengiriman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `id_ongkir`, `tanggal_pembelian`, `total_pembelian`, `nama_kota`, `tarif`, `alamat_pengiriman`, `status_pembelian`, `resi_pengiriman`) VALUES
(17, 3, 2, '2018-07-29', 2400000, 'Jakarta', 20000, 'semarang selatan bulustalan barat 1 no.17a jawa tengah', 'barang dikirm', 'REG87354671203'),
(18, 3, 1, '2018-07-30', 2759000, 'Semarang', 10000, 'semarang', 'barang dikirm', '3463'),
(19, 3, 1, '2018-07-31', 3610000, 'Semarang', 10000, 'Jl. Kauman 4', 'barang dikirm', 'REG87354671203'),
(20, 2, 1, '2022-07-30', 3610000, 'Semarang', 10000, 'asdfasdf', 'lunas', '23423r4wfa');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `subberat` int(11) NOT NULL,
  `subharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`, `nama`, `harga`, `berat`, `subberat`, `subharga`) VALUES
(1, 1, 3, 2, 'ASUS GTX- STRIX 960 DC2 OC 128Bit 4GB DDR5', 3600000, 2000, 4000, 7200000),
(2, 2, 3, 1, 'ASUS GTX- STRIX 960 DC2 OC 128Bit 4GB DDR5', 3600000, 2000, 2000, 3600000),
(3, 3, 3, 1, 'ASUS GTX- STRIX 960 DC2 OC 128Bit 4GB DDR5', 3600000, 2000, 2000, 3600000),
(4, 4, 3, 1, 'ASUS GTX- STRIX 960 DC2 OC 128Bit 4GB DDR5', 3600000, 2000, 2000, 3600000),
(5, 5, 3, 2, 'ASUS GTX- STRIX 960 DC2 OC 128Bit 4GB DDR5', 3600000, 2000, 4000, 7200000),
(6, 6, 4, 1, 'MSI X370 Krait Gaming', 2749000, 800, 800, 2749000),
(7, 7, 4, 1, 'MSI X370 Krait Gaming', 2749000, 800, 800, 2749000),
(8, 8, 4, 1, 'MSI X370 Krait Gaming', 2749000, 800, 800, 2749000),
(9, 8, 5, 1, 'HEADSET STEELSERIES ARCTIS 5 DOTA2 LIMITED EDITION', 1760000, 600, 600, 1760000),
(10, 9, 5, 1, 'HEADSET STEELSERIES ARCTIS 5 DOTA2 LIMITED EDITION', 1760000, 600, 600, 1760000),
(11, 10, 3, 1, 'ASUS GTX- STRIX 960 DC2 OC 128Bit 4GB DDR5', 3600000, 2000, 2000, 3600000),
(12, 11, 3, 1, 'ASUS GTX- STRIX 960 DC2 OC 128Bit 4GB DDR5', 3600000, 2000, 2000, 3600000),
(13, 12, 3, 1, 'ASUS GTX- STRIX 960 DC2 OC 128Bit 4GB DDR5', 3600000, 2000, 2000, 3600000),
(14, 13, 4, 1, 'MSI X370 Krait Gaming', 2749000, 800, 800, 2749000),
(15, 15, 5, 1, 'HEADSET STEELSERIES ARCTIS 5 DOTA2 LIMITED EDITION', 1760000, 600, 600, 1760000),
(16, 16, 4, 1, 'MSI X370 Krait Gaming', 2749000, 800, 800, 2749000),
(17, 17, 8, 2, 'Logitech G502 Gaming Mouse Proteus Spectrum', 805000, 300, 600, 1610000),
(18, 17, 9, 1, 'Headphone Cloud ll', 770000, 500, 500, 770000),
(19, 18, 4, 1, 'MSI X370 Krait Gaming', 2749000, 800, 800, 2749000),
(20, 19, 3, 1, 'ASUS GTX- STRIX 960 DC2 OC 128Bit 4GB DDR5', 3600000, 2000, 2000, 3600000),
(21, 20, 3, 1, 'ASUS GTX- STRIX 960 DC2 OC 128Bit 4GB DDR5', 3600000, 2000, 2000, 3600000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `stok_produk` int(5) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `kecepatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `berat`, `foto_produk`, `deskripsi`, `stok_produk`, `brand`, `model`, `jenis`, `kecepatan`) VALUES
(3, 'ASUS GTX- STRIX 960 DC2 OC 128Bit 4GB DDR5', 3600000, 2000, 'item-05.jpg', 'ASUS Strix GeForce GTX 960 dengan core teroverclock bawaan pabrik mengantarkan pengalaman gaming yang sejuk dan hening.\r\n291MHzfactory-overclocked GPU\r\n1317MHzGPU boost clock in OC mode\r\nDirectCU with 0dB fan technologylets you enjoy light games in complete silence, and hardcore gaming 30% cooler with 3X-quieter performance!\r\nPremium alloys in powerdelivery components defeat heat for cards that run 15% faster and last 2.5 times longer than reference.\r\nGPU Tweakhelps you modify clock speeds, voltages, fan performance and more, all via an intuitive interface.\r\nGPU Tweak with XSplit Gamecaster:Real-time and intuitive GPU clock boost, and live-stream your gameplay instantly', 5, 'ASUS', 'VGA', 'ASUS GTX- STRIX 960 DC2 OC 128Bit DDR5', '4GB'),
(4, 'MSI X370 Krait Gaming', 2749000, 800, 'item-0066.png', 'Supports AMD® Ryzen™ 1st and 2nd Generation / Ryzen™ with Radeon™ Vega Graphics Processors and AMD® A-series / Athlon™ Processors for Socket AM4\r\nSupports DDR4-3200+(OC) Memory\r\nDDR4 Boost: Give your DDR4 memory a performance boost\r\nVR Ready and VR Boost: Best virtual reality game experience without latency, reduces motion sickness\r\nLightning Fast Game experience: Turbo M.2, Steel Armor, Lightning USB 3.1 Gen2\r\nAudio Boost with Nahimic 2: Reward your ears with studio grade sound quality for the most immersive gaming experience\r\nGAMING LAN with LAN Protect: The best online gaming experience with lowest latency and bandwidth management\r\nMilitary Class 4, Guard-Pro: Latest evolution in high quality components for best protection and efficiency\r\nMULTI-GPU: With Steel Armor PCI-E slots. Supports NVIDIA SLI™ & AMD Crossfire™\r\nMystic Light Sync: Synchronize other RGB solutions with your gaming rig and control all LEDs in one click\r\nIn-Game Weapons: Game Boost, GAMING Hotkey, X-Boost,\r\nEZ Debug LED: Easiest way to troubleshoot\r\nClick BIOS 5: Award-winning BIOS with high resolution scalable font, favorites and search function\r\nGAMING CERTIFIED: 24-hour on- and offline game and motherboard testing by eSports players\r\nWHQL certified for Windows 10', 4, 'MSI', 'VGA', 'MSI X370 Krait Gaming', '-'),
(5, 'HEADSET STEELSERIES ARCTIS 5 DOTA2 LIMITED EDITION', 1760000, 600, 'h8.png', 'Headset gaming Dota 2 berlisensi resmi\r\nKarya seni oleh seniman komunitas Dota 2: Chroneco\r\nClearCast, mic terbaik di game\r\nHeadphone DTS: X 7.1 surround sound\r\nBantal telinga Exclusive AirWeave\r\n\r\nDirancang untuk Dota 2\r\n\r\nHeadset Dota 2 yang memiliki lisensi resmi menggabungkan suara, kenyamanan dan mikrofon pemenang penghargaan dari Arctis 5 dengan karya seni ikonik seniman Dota 2, Chroneco.\r\n\r\nCompatibility\r\nPC\r\nMac\r\nPlayStation\r\nXbox\r\nVR\r\nMobile', 5, 'SteelSeries', 'Headphone', 'STEELSERIES ARCTIS 5 DOTA2 LIMITED EDITION', '-'),
(7, 'AMD Ryzen 5 1600 3.2Ghz-3.6Ghz Cache 19mb - Socket AM4', 2585000, 700, 'item-03.jpg', 'The AMD Ryzen 5familyis divided into two main lines the lower-end quad-core processors and the higher-end hexa-core processors. TheAMD Ryzen 5 1500Xis thetop-of-the-line quad-core Ryzen 5model. It has4 coresand8 threads, with a3.6 GHz baseclockand a4.0 GHz boost clock.	\r\nHow does it compare against the other Ryzen 5processors? Find out in this specification comparison of the current AMD Ryzen 5 processors.	\r\nSpecifications	AMD Ryzen 5 1600\r\n\r\nTDP	65 W\r\nSocket	AM4\r\nProcess Technology	14 nm FinFET\r\nProcessor Cores	6\r\nNumber of Simultaneous Threads	12\r\nL2 Cache Size	3 MB\r\nL3 Cache Size	16 MB\r\nBase Clock Speed	3.2 GHz\r\nBoost Clock Speed	3.6 GHz\r\nBundled CPU Cooler	AMD Wraith Spire', 7, '', '', '', ''),
(8, 'Logitech G502 Gaming Mouse Proteus Spectrum', 805000, 300, 'blog-03.jpg', 'Dapatkan keakuratan tracking maksimum dari sensor optik kami yang paling responsif (PMW3366). Teknologi sensor optik Logitech G Delta Zero™ eksklusif meminimalkan akselerasi mouse dan meningkatkan pembidikan yang andal. Ganti mode DPI selama permainan berlangsung dengan lima pilihan pengaturan dari 200 hingga 12.000 DPI*.', 13, '', '', '', ''),
(9, 'Headphone Cloud ll', 770000, 500, 'banner-10.jpg', 'Transducer Type: dynamic Ø 53mm\r\nFrequency Response: 15Hz–25,000 Hz\r\nNominal SPL: 98±3dB\r\nOperating principle: closed\r\nNominal impedance: 60 ? per system\r\nT.H.D.: < 2%\r\nPower handling capacity: 150mW\r\nSound coupling to the ear: circumaural\r\nAmbient noise attenuation: approx. 20 dBa\r\nTekanan Headband: 5N\r\nBerat Mikrofon dengan Kabel: 320g\r\nPanjang dan Tipe Kabel: 1m + 2m extension\r\nKoneksi: single mini stereo jack plug (3.5 mm)\r\nMikrofon:\r\n\r\nTransducer Type: condenser (back electret)\r\nPolar Pattern: cardioid\r\nFrequency Response: 50-18,000 Hz\r\nOperating principle: pressure gradient\r\nPower supply: AB powering\r\nSupply voltage: 2V\r\nCurrent consumption: max 0.5 mA\r\nNominal impedance: ?2.2 k?\r\nOpen circuit voltage: at f = 1 kHz: 20 mV / Pa\r\nTHD: 2% at f = 1 kHz\r\nMax. SPL: 105dB SPL (THD?1.0% at 1 KHz)\r\nMicrophone output: -39±3dB\r\nLength mic boom: 150mm (include gooseneck)\r\nCapsule diameter: Ø6*5 mm\r\nConnection: single mini stereo jack plug (3.5mm)', 15, '', '', '', ''),
(10, 'CORSAIR VENGEANCE PRO SERIES RAM DDR3 16GB 1600MHz', 2425000, 200, 'item-014.jpg', '2 modul memori x 8GB\r\nIntel® 3 dan Generasi 4 Inti Prosesor\r\nKepadatan: 16GB (2x8GB)\r\nKecepatan: 1600MHz\r\nLatency diuji: 9-9-9-24\r\nTegangan: 1.5V\r\nFormat: DIMM\r\nPin Out: 240 Pin\r\nIntel XMP 1.3\r\nHeatspreader: Anodized Aluminium', 7, '', '', '', ''),
(11, 'GAMDIAS - HEADSET HEBE E1 RGB', 445000, 2000, 'h9.jpg', '				Desain ergonomis\r\nOmnidirectional Flexible Microphone\r\nNyaman saat digunakan dalam waktu lama\r\nUnit penggerak HD 40mm\r\nSmart Remote Controller	', 10, '', '', '', ''),
(12, 'CLEARANCE SALE GAMDIAS - KEYBOARD HERMES LITE GKB1050', 450000, 3000, 'k1.jpg', 'GAMDIAS Certified Mechanical Switches\r\nPlay Macro via FN+G1/G2\r\n32bit ARM CortexTM-M3 microprocessor\r\nRGB Backlighting\r\nN key rollover\r\nHERA Software\r\n\r\n\r\nKey Switch : GAMDIAS certified mechanical switches\r\nKey Swtich Type : Blue\r\nSwitch Lifecycle : 50 Million\r\n', 5, '', '', '', ''),
(13, 'MOUSE SSTEELSERIES RIVAL 110 MATTE BLACK', 600000, 500, 'm6.jpg', '			Jenis sensor : Optik, TrueMove1\r\nCPI : 200-7200\r\nIPS: 240 maksimum\r\nAkselerasi : 30G\r\nUmur switch : 30 juta klik\r\nLampu backlit: Ya (LED RGB/16,8juta pilihan warna disesuaikan)\r\nKoneksi : Kabel-USB, rubber 2m\r\nSoftware pendukung : Steelseries engine3\r\nKompatibilitas : Windows, Mac / Linux\r\nUkuran dimensi : 120.6mm(height) x 38.12mm(depth), width 58mm (front), 57mm (middle), 68mm (back)\r\nUkuran berat : 87 g		', 6, '', '', '', ''),
(14, 'SteelSeries Rival 300', 560, 1000, 'm8.jpg', 'Compatibility Mac\r\nEngine 3 support 1\r\nBatteries Included No\r\nCable Length 2\r\nCable Length 6.5\r\nWireless No\r\nConnector Type USB\r\nDocumentation Type Quick Start Guide\r\nNumber of Programmable Buttons 6\r\nScroll Wheel Yes\r\nNumber of Buttons 6\r\nFrames per Second 6500\r\nInches per Second 200\r\nG (acceleration) 50\r\nCounts per Inch 5000\r\nLift Distance 2\r\nLift Distance 0.08\r\nAmbidextrous No\r\nDCPI 6500\r\nIllumination Yes\r\nProfiles Available Yes\r\nMacros Available Yes\r\nStatistics Available Yes\r\nFirmware Upgradable Yes\r\nOnboard Memory for Profile Saving Yes\r\nCover Material Plastic\r\nGold Plated Connector No\r\nSwitch Life-Cycle (Clicks) 30 million for left/right clicks, >1 million for others\r\nCable Material Rubber\r\nNumber of Illumination Colors RGB (16.8 million)\r\nNumber of Illumination Zones (zones per earcup for headsets) 2\r\nSensor Type Optical\r\nFeet Material PTFE\r\nExtended Cable Included No\r\nIllumination Modes Steady, Pulse, ColorShift, Gamesense, off', 8, '', '', '', ''),
(15, 'Razer Abyssus 2000 Gaming Mouse + Goliathus Speed Terra', 550000, 500, 'm11.jpg', 'Features:\r\nAmbidextrous form factor\r\nTrue 2,000 DPI optical sensor\r\n2 programmable Hyperesponse buttons\r\n1,000 Hz Ultrapolling\r\n60 IPS / 20 g\r\nProduct dimensions:\r\nLength: 117 mm / 4.6 in\r\nWidth: 64 mm / 2.5 in\r\nHeight: 38 mm / 1.5 in\r\nProduct weight: 80 g / 0.175 lbs without cable, 111 g / 0.24 lbs with cable', 6, '', '', '', ''),
(16, 'A4tech x7 f7 mouse Gaming mouse MAcro 3000 dpi optical', 230000, 600, 'm10.jpg', '5 modes selection\r\nSet up custom macros for your games in each mode.\r\n160K onboard memory\r\nStores custom macros and perform them at any time.\r\nHigh sensitivity up to 3000 CPI\r\nYou can shift from pixel-precise targeting (100 CPI) to lightning-fast maneuvers (up to 3000 CPI) in each mode.\r\nResponse time 1 ms\r\nDesigned with extreme fast report rate up to 1000 Hz.', 5, '', '', '', ''),
(17, 'HEADSET STEELSERIES ARCTIS 3 BLUETOOTH', 1865000, 2000, 'h17.png', 'Arctis 3 Bluetooth\r\nWired for Gaming. Bluetooth for Life.\r\nSimultaneous wired and Bluetooth audio\r\nPerfect for Nintendo Switch Chat and Discord\r\nClearCast, the best mic in gaming\r\nUltra-low distortion S1 speaker drivers\r\n\r\nWired for gaming. Bluetooth for life. Simultaneously.\r\nArctis 3 Bluetooth is the perfect headset for everywhere you game. Connect to all of your game systems including Switch, PS4, Xbox, and PC via the 3.5mm cable while simultaneously mixing in VoIP chat, phone calls, and music wirelessly over Bluetooth.\r\n\r\n\r\nNintendo Switch\r\nPS4\r\nXbox One\r\nPC and Mac\r\nVR\r\nVirtual Reality\r\nNintendo Switch\r\nMobile Device', 5, '', '', '', ''),
(18, 'Galax GTX 950 EXOC 2GB DDR5', 2200000, 1000, 'item-14.jpg', '', 7, '', '', '', ''),
(19, 'ASUS STRIX GeForce GTX 950', 2800000, 1200, 'item-12.jpg', '', 8, '', '', '', ''),
(20, 'MSI GeForce GTX 970 GAMING 4G 4 Go', 3000000, 1400000, 'item-07.jpg', '', 5, '', '', '', ''),
(21, 'Patriot Viper 8GB ddr4', 1550000, 200, 'item-008.jpg', '', 5, '', '', '', ''),
(22, 'Kingston Hyper ddr 3 8GB', 775000, 200, 'item-0101.jpg', '', 7, '', '', '', ''),
(23, 'HyperX 8GB ddr4', 1800000, 200, 'item-01.jpg', '', 9, '', '', '', ''),
(24, 'MSI Z270 Gaming M5', 3950000, 1000, 'item-007.jpg', '', 7, '', '', '', ''),
(25, 'MSI X299 Gaming Pro Carbon Ac', 6450000, 2000, 'item-11.jpg', '', 5, '', '', '', ''),
(26, 'Asus RoG Maximus IX Hero', 4480000, 2000, 'item-15.jpg', '', 4, '', '', '', ''),
(27, 'HEADSET STEELSERIES SIBERIA 200 GAIA GOLD', 960000, 1000, 'h15.jpg', 'Compatibility Mac\r\nEngine 3 support 1\r\nAssembly Required No\r\nBatteries Included No\r\nCable Length 1.5\r\nCable Length 5\r\nWireless No\r\nConnector Type USB\r\nDocumentation Type Quick Start Guide\r\nSample of Documentation Attached\r\nColor Gray\r\nType of Ear Cushion Cloth/Leather Interchangeable\r\nDismantle for Travel No\r\nHeadphone Style Over-ear (circumaural)\r\nHeadphone Frequency Response (Hz) 10-28,000\r\nMagnet Type Neodymium\r\nHeadphone Sensitivity 80\r\nHeadphone Total Harmonic Distortion 1\r\nMicrophone Frequency Response (Hz) 50-16,000\r\nMicrophone Pickup Pattern Unidirectional (directional)\r\nMicrophone Sensitivity -42\r\nMicrophone Impedance 2200\r\nHeadphone Impedance 35\r\nIllumination Yes\r\nProfiles Available Yes\r\nFinish Glossy / Matte\r\nDriver Size 50\r\nMicrophone Location Retractable\r\nMicrophone Noise Cancellation Yes\r\nFoldable No\r\nBatteries Required No\r\nFirmware Upgradable Yes\r\nOnboard Memory for Profile Saving No\r\nCover Material Plastic\r\nGold Plated Connector Yes\r\nCable Material Rubber\r\nNumber of Illumination Colors 16.8 million\r\nNumber of Illumination Zones (zones per earcup for headsets) 1\r\nCarrying Case No\r\nExtended Cable Included No\r\nControls Mute only\r\nAudio Channels Stereo\r\nInterchangeable Ear Cups No\r\nHeadband Type Suspension\r\nMultiple Colors No', 8, '', '', '', ''),
(28, 'HEADSET STEELSERIES SIBERIA V3 PRISM GREY', 1280000, 2000, 'h7.jpg', 'Compatibility Mac\r\nEngine 3 support 1\r\nAssembly Required No\r\nBatteries Included No\r\nCable Length 1.5\r\nCable Length 5\r\nWireless No\r\nConnector Type USB\r\nDocumentation Type Quick Start Guide\r\nSample of Documentation Attached\r\nColor Gray\r\nType of Ear Cushion Cloth/Leather Interchangeable\r\nDismantle for Travel No\r\nHeadphone Style Over-ear (circumaural)\r\nHeadphone Frequency Response (Hz) 10-28,000\r\nMagnet Type Neodymium\r\nHeadphone Sensitivity 80\r\nHeadphone Total Harmonic Distortion 1\r\nMicrophone Frequency Response (Hz) 50-16,000\r\nMicrophone Pickup Pattern Unidirectional (directional)\r\nMicrophone Sensitivity -42\r\nMicrophone Impedance 2200\r\nHeadphone Impedance 35\r\nIllumination Yes\r\nProfiles Available Yes\r\nFinish Glossy / Matte\r\nDriver Size 50\r\nMicrophone Location Retractable\r\nMicrophone Noise Cancellation Yes\r\nFoldable No\r\nBatteries Required No\r\nFirmware Upgradable Yes\r\nOnboard Memory for Profile Saving No\r\nCover Material Plastic\r\nGold Plated Connector Yes\r\nCable Material Rubber\r\nNumber of Illumination Colors 16.8 million\r\nNumber of Illumination Zones (zones per earcup for headsets) 1\r\nCarrying Case No\r\nExtended Cable Included No\r\nControls Mute only\r\nAudio Channels Stereo\r\nInterchangeable Ear Cups No\r\nHeadband Type Suspension\r\nMultiple Colors No', 10, '', '', '', ''),
(29, 'KEYBOARD STEELSERIES M500', 1490000, 2000, 'k3.png', 'Compatibility	Mac\r\nEngine 3 support	1\r\nSwitch type	Cherry MX Red\r\nConnector Type	USB\r\nAnti Ghosting	Yes\r\nMechanical Switches	Yes\r\nIllumination	Yes\r\nProfiles Available	Yes\r\nNumber of Illumination Colors	1 - Blue.\r\nNumber of Illumination Zones (zones per earcup for headsets)	1\r\n', 7, '', '', '', ''),
(30, 'KEYBOARD STEELSERIES APEX M750 TKL', 1765000, 2000, 'k12.png', 'Compact Mechanical Esports Keyboard\r\n\r\nEsports-focused tenkeyless design\r\nQX2 linear mechanical gaming switches\r\nDurable 5000 Series Aluminum Frame\r\nBrilliant and dynamic per-key RGB lighting\r\nReal-time Discord lighting notifications\r\n\r\nCompatibility Mac\r\nCable Length 2\r\nSwitch type SteelSeries QX2\r\nWireless No\r\nConnector Type USB\r\nDocumentation Type Quick Start Guide\r\nSample of Documentation N/A\r\nColor Black\r\nNumber of Multimedia Keys 6\r\nWrist Rest No\r\nAnti Ghosting Yes\r\nMechanical Switches Yes\r\nNumber of Programmable Keys All Keys\r\nProgrammable Keys Yes\r\nIllumination Yes\r\nProfiles Available Yes\r\nMacros Available Yes\r\nStatistics Available No\r\nBatteries Required No\r\nOnboard Memory for Profile Saving Yes\r\nCover Material Metal\r\nGold Plated Connector No\r\nSwitch Life-Cycle (Clicks) 50 Million\r\nCable Material Rubber\r\nNumber of Illumination Colors 104\r\nNumber of Illumination Zones (zones per earcup for headsets) 104\r\nRechargeable No', 6, '', '', '', ''),
(31, 'Intel Core i3 8100 3.6Ghz Chace 6mb - LGA 1151', 1685000, 1000, 'item-0007.jpg', '', 8, '', '', '', ''),
(32, 'AMD Kaveri A8-7650K (Radeon R7 series) 3.3Ghz Cache 2x2MB 95W', 772000, 1000, 'item-0050.jpg', '', 8, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `mouse`
--
ALTER TABLE `mouse`
  ADD PRIMARY KEY (`id_mouse`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mouse`
--
ALTER TABLE `mouse`
  MODIFY `id_mouse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
