-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 09:24 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sachin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(21) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(21) NOT NULL,
  `password` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'sachin', 'varshapol33@gmail.com', 'sachin1');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(21) NOT NULL,
  `Name` varchar(125) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `movies_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `Name`, `comments`, `movies_id`, `rating`) VALUES
(4, 'sachin', 'good', 1, 5),
(5, 'sachin', 'very good', 2, 1),
(6, 'shobhit', 'good\r\n', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `ID` int(21) NOT NULL,
  `title` varchar(125) NOT NULL,
  `released_year` year(4) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `trailer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`ID`, `title`, `released_year`, `description`, `trailer`) VALUES
(1, 'Oppo A71', 2017, 'NETWORK	Technology	\r\nGSM / UMTS / LTE\r\n2G bands	GSM 850 / 900 / 1800 / 1900 - SIM 1 & SIM 2\r\n3G bands	UMTS 900 / 2100 / 850\r\n4G bands	LTE band 1(2100), 3(1800), 5(850), 7(2600), 8(900), 38(2600), 40(2300), 41(2500)\r\nSpeed	HSPA, LTE\r\nGPRS	Yes\r\nEDGE	Yes\r\nLAUNCH	Announced	2017, September\r\nStatus	Available. Released 2017, September\r\nBODY	Dimensions	148.1 x 73.8 x 7.6 mm (5.83 x 2.91 x 0.30 in)\r\nWeight	137 g (4.83 oz)\r\nBuild	Front glass, aluminum body\r\nSIM	Dual SIM (Nano-SIM, dual stand-by)\r\nDISPLAY	Type	IPS LCD capacitive touchscreen, 16M colors\r\nSize	5.2 inches, 74.5 cm2 (~68.2% screen-to-body ratio)\r\nResolution	720 x 1280 pixels, 16:9 ratio (~282 ppi density)\r\nMultitouch	Yes\r\n 	- Color OS 3.1\r\nPLATFORM	OS	Android 7.1 (Nougat)\r\nChipset	Mediatek MT6750\r\nCPU	Octa-core (4x1.5 GHz Cortex-A53 & 4x1.0 GHz Cortex-A53)\r\nGPU	Mali-T860MP2\r\nMEMORY	Card slot	microSD, up to 256 GB (dedicated slot)\r\nInternal	16 GB, 3 GB RAM\r\nMAIN CAMERA	Single	13 MP, PDAF, f/2.2\r\nFeatures	LED flash, HDR, panorama\r\nVideo	1080p@30fps\r\nSELFIE CAMERA	Single	5 MP, f/2.4\r\nVideo	\r\nSOUND	Alert types	Vibration; MP3, WAV ringtones\r\nLoudspeaker	Yes\r\n3.5mm jack	Yes\r\n 	- Active noise cancellation with dedicated mic\r\nCOMMS	WLAN	Wi-Fi 802.11 b/g/n, hotspot\r\nBluetooth	4.0, A2DP\r\nGPS	Yes, with A-GPS\r\nRadio	FM radio\r\nUSB	microUSB 2.0, USB On-The-Go\r\nFEATURES	Sensors	Accelerometer, proximity, compass\r\nMessaging	SMS(threaded view), MMS, Email, Push Email, IM\r\nBrowser	HTML5\r\n 	- MP4/H.264/FLAC player\r\n- MP3/eAAC+/WAV player\r\n- Document viewer\r\n- Photo viewer/editor\r\nBATTERY	 	Non-removable Li-Ion 3000 mAh battery\r\nMISC	Colors	Gold, Black\r\nPrice	About 180 EUR', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/43EpTTrTtbc\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(2, 'OPPO F9 Pro', 0000, 'Oppo F9 Pro price in Your Country. Featuring 16 MP Rear Camera. Non-removable Li-Ion 3,500 mAh battery Capacity  Oppo F9 Pro Smartphone 6.3  inch Dual IPS LED capacitive touchscreen Display. Oppo F9 Pro having 4 GB RAM. Oppo F9 Pro smartphone powered by Octa-core (4×2.0 GHz Cortex-A73 & 4×2.0 GHz Cortex-A53) Processor', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Ft3p8Frd3mo\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(3, 'OPPO A5', 0000, 'Oppo A5 price in India starts from Rs. 14,000.\r\n\r\nThe Oppo A5 is powered by 1.8GHz octa-core processor and it comes with 4GB of RAM. The phone packs 32GB of internal storage that can be expanded up to 256GB via a microSD card. As far as the cameras are concerned, the Oppo A5 packs a 13-megapixel (f/2.2) + 2-megapixel (f/2.4) primary camera on the rear and a 8-megapixel front shooter for selfies.\r\n\r\nThe Oppo A5 is powered by a 4230mAh. It measures 156.20 x 75.60 x 8.20 (height x width x thickness) and weighs 168.00 grams.\r\n\r\nThe Oppo A5 is a dual SIM (GSM and GSM) smartphone that accepts Nano-SIM and Nano-SIM. Connectivity options include Wi-Fi, GPS, Bluetooth, USB OTG, Micro-USB, FM, 3G and 4G (with support for Band 40 used by some LTE networks in India). Sensors on the phone include Compass/ Magnetometer, Proximity sensor, Accelerometer and Ambient light sensor.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/fjNETuFHwBU\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(8, 'Redmi Note 5', 2018, 'The Redmi Note 5 runs on Snapdragon 636 processor. It is a 64 bit architecture based chipset that has 8x Qualcomm® Kryo™ 260 CPUs with clock speed up to 1.8 GHz that supports Qualcomm® Adreno™ 509 GPU. This chipset is able to render FHD+ (18:9) display screen. It comes with 5.99\" full HD+ display, that has an 18:9 aspect ratio, the screen on the Redmi Note 5 has a screen-to-body ratio of 77%. The screen on the device comes with multi-touch support and uses a 2.5 curved glass screen for ultra clarity. The Redmi Note 5 has a ppt rating of 403 and a maximum resolution of 1080x2160, the LCD IPS screen allows for smooth & accurate scrolling.\r\nSOFTWARE=:\r\nRedmi Note 5 (China) runs on MIUI 10 based on Android Oreo 8.1.0. Redmi note 5 pro (India) and Redmi Note 5 (Global) runs on MIUI 10.0.1.0 stable based on Android Oreo [6]\r\nCOLORS=:\r\nRedmi Note 5 is available in 5 colors[8]:\r\n\r\nLake Blue\r\nRose Gold\r\nGold\r\nBlack\r\nRed\r\nThe most popular of the color being Lake Blue[9], which was an instant hit among the users. Red is the next best; it was introduced at a later date.\r\n\r\n', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RYv09gDcoho\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(9, 'Rademi note 5 pro', 2018, 'Xiaomi Redmi Note 5 Pro price in Your Country. Featuring Dual 20 MP Rear Camera. Non-removable Li-Ion 4000 mAh battery Capacity Xiaomi Redmi Note 5 Pro Smartphone 5.9 inch Dual IPS LED capacitive touchscreen Display. Xiaomi Redmi Note 5 Pro having 4 GB RAM. Xiaomi Redmi Note 5 Pro smartphone powered by Octa-core 1.8 GHz Kryo 260 Processor\r\n\r\nBangladesh: 20,239 Taka\r\nIndia 16,107 Rupee\r\nChina: 1,514 Yuan\r\nGermany 200 Euro\r\nJapan 26,173 Yen\r\nUnited States 239 Us Dollar\r\nUnited Kingdom 175 British Pound\r\nMain camera	Dual 20 MP\r\nFront camera	\r\n\r\nDual 12 MP\r\nRAM	\r\n4 GB\r\nProcessor	\r\nOcta-core 1.8 GHz Kryo 260\r\nBattery size	\r\n4,000 mAh Li-Po\r\nOperating system	\r\nAndroid 7.1\r\nDisplay size \r\n5.9 inch Full HD AMOLED screen looks great\r\nScreen size	\r\n5.9 inches, 93.7 cm2 (~80.0% screen-to-body ratio)\r\nScreen resolution	\r\n1080 x 2160 pixels\r\nStorage (free)	64 GB\r\nMemory card \r\n64 GB\r\nWeight: \r\n181g\r\nProtection	Corning Gorilla Glass 5\r\nFlash	\r\nLED\r\nFeatures	Sensors	Fingerprint proximity,accelerometer, gyro,\r\nGPS	\r\nYes\r\nCompass	\r\nYes\r\nCPU	Octa-core 1.8 GHz Kryo 260\r\nWi-Fi	802.11ac\r\nBluetooth	5.0\r\nNFC	\r\nWireless data	Yes\r\n4G', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/QMgMPazWacY\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(11, 'iphone x', 2017, 'Software\r\nSee also: iOS version history, iOS 11, and iOS 12\r\nDue to its different screen layout, iOS developers are required to update their apps to make full use of the additional screen real estate. Such changes include rounded corners, sensor \"notch\" at the top of the screen, and an indicator area at the bottom for accessing the home screen. Apple published a \"Human Interface Guidelines\" document to explain areas of focus, and discouraged developers from attempting to mask or call special attention to any of the new changes. Additionally, text within the app needs to be configured to properly reference Face ID rather than Touch ID where the authentication technology is used on iPhone X.[54] In anticipation of the release of the phone, most major apps were quickly updated to support the new changes brought by iPhone X,[55] though the required changes did cause delayed app updates for some major apps.[56][57][58]\r\n\r\nThe traditional home button, found on all previous devices in the iPhone lineup, has been removed entirely, replaced by touch-based gestures. To wake up the device, users can tap the display or use the side button; to access the home screen, users must swipe up from the bottom of the display; and to access the multitasking window, users must swipe up similarly to the method of accessing the home screen, but stop while the finger is in the middle of the screen, causing an app carousel to appear.\r\nHardware\r\nThe iPhone X has a 5.8-inch OLED color-accurate screen that supports DCI-P3 wide color gamut, sRGB, and high dynamic range,[26][27] and has a contrast ratio of 1,000,000:1.[28] The Super Retina display has the True Tone technology found on the iPad Pro, which uses ambient light sensors to adapt the display\'s white balance to the surrounding ambient light.[29][30] Although the iPhone X does not feature the same \"ProMotion\" technology used in the displays of the second-generation iPad Pro, where the display delivers a refresh rate of 120Hz, it does sample touch input at 120Hz.[31] OLED screen technology has a known negative trend of \"burn-in\" effects, in which particular elements consistently on the screen for long periods of time leave a faint trace even after new images appear. Apple acknowledged that its OLED screens were not excluded from this issue, writing in a support document that \"This is also expected behavior\".[32][33] Greg Joswiak, Apple\'s vice president of product marketing, told Tom\'s Guide that the OLED panels Apple used in the iPhone X had been engineered to avoid the \"oversaturation\" of colors that using OLED panels typically results in, having made color adjustments and \"subpixel\"-level refinements for crisp lines and round corners.[34][35] For out-of-warranty servicing for damages not relating to manufacturing defects, screen repairs of iPhone X cost US$279, while other damage repairs cost US$549.[36][37]\r\n\r\nThe iPhone X has two color options; silver and space gray.[29] The front and back of the phone are composed of surgical-grade stainless steel to improve durability, and the device has a glass casing. The design is intended to be IP67 water and dust resistant.[29][38]', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/PFDQmSKhYZs\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(12, 'redmi 5a', 2017, 'Codename	\r\nROSY (Redmi 5)\r\n\r\nVINCE (Redmi 5 Plus)\r\nManufacturer	Xiaomi\r\nSeries	Xiaomi Redmi\r\nFirst released	December 2017; 10 months ago\r\nType	Touchscreen smartphone\r\nForm factor	Slate\r\nDimensions	Redmi 5 Plus:\r\nH: 158.5 mm (6.24 in)\r\nW: 75.5 mm (2.97 in)\r\nD: 8.1 mm (0.32 in)\r\nWeight	\r\nRedmi 5 Plus: 180 g (6.3 oz)\r\nOperating system	MIUI 9 based on Android 7.1\r\nCPU	Redmi 5:\r\nSnapdragon 450, Octa-core 1.8 GHz Cortex-A53\r\nRedmi 5 Plus:\r\nSnapdragon 625, Octa-core 2.0 GHz Cortex-A53\r\nGPU	Adreno 506\r\nMemory	Redmi 5:\r\n2 or 3 GB\r\nRedmi 5 Plus:\r\n3 or 4 GB\r\nStorage	Redmi 5:\r\n16 or 32 GB\r\nRedmi 5 Plus:\r\n32 or 64 GB\r\nRemovable storage	microSDXC,microSDHC,microSD, up to 128 GB\r\nBattery	Non-removable Li-Po\r\nRedmi 5: 3300 mAh\r\nRedmi 5 Plus: 4000 mAh \r\nDisplay	Redmi 5:\r\n5.7\" 1440 × 720 pixels,18:9 ratio, IPS LCD capacitive touchscreen, 16M colors\r\nRedmi 5 Plus:\r\n5.99\", 1080 x 2160 pixels, 18:9 ratio (403 ppi), IPS LCD capacitive touchscreen, 16M colors\r\nRear camera	12 MP (f/2.2, 1.25 &#956;m), phase detection autofocus, dual-LED dual-tone flash(only Redmi 5 Plus), Geo-tagging, touch focus, face detection, panorama, HDR\r\nFront camera	5 MP, 2160p\r\nConnectivity	2G, 3G, 4G, 4G LTE, Wi-Fi 802.11a/b/g/n/ac (2.4 & 5GHz)(ac band only available on 5 Plus), dual-band, WiFi Direct, hotspot, Bluetooth v4.2', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/eAIlIni8PXI\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(13, 'OnePlus 6', 2018, 'Codename	enchilada\r\nBrand	OnePlus\r\nManufacturer	OnePlus\r\nSlogan	The Speed You Need[1]\r\nModel	A6000, A6003\r\nCompatible networks	2G, 3G, and 4G\r\nFirst released	May 22, 2018; 4 months ago\r\nPredecessor	OnePlus 5T\r\nSuccessor	OnePlus 6T\r\nType	Phablet\r\nForm factor	Slate\r\nDimensions	155.7 mm (6.13 in) H \r\n75.4 mm (2.97 in) W \r\n7.75 mm (0.305 in) D\r\nWeight	177 g (6.2 oz)\r\nOperating system	OxygenOS (based on Android)\r\nSystem on chip	Qualcomm Snapdragon 845[2]\r\nCPU	Octa-core (4×2.8 GHz + 4×1.8 GHz) Kryo\r\nGPU	Adreno 630\r\nMemory	6 or 8 GB LPDDR4X RAM\r\nStorage	64, 128, or 256 GB UFS 2.1\r\nBattery	3,300 mAh Li-Ion with Dash Charge technology\r\nData inputs	\r\nFingerprint scanner (rear-mounted),\r\nAccelerometer,\r\ngyroscope,\r\nproximity sensor,\r\nelectronic compass\r\nDisplay	6.28 in (160 mm) 1080p (2280 ×1080 pixels) Full-HD+ Optic AMOLED / DCI-P3 (401 ppi) with 19:9 aspect ratio\r\nRear camera	16 MP Sony Exmor IMX519 (f/1.7, OIS + EIS) + 20 MP Sony Exmor IMX376K (f/1.7), phase detection autofocus, dual-LED flash, Video 4K at 30 or 60fps, 1080p at 30, 60 or 240 fps, 720p at 30 or 480 fps\r\nFront camera	16 MP Sony Exmor IMX371 (f/2.0, EIS, HDR), Video 1080p at 30 fps, 720p at 30 fps\r\nConnectivity	3G, 4G VoLTE, Bluetooth 5.0 with aptX, NFC, 2x2 MIMO WiFi 802.11a/b/g/n/ac, GPS, GLONASS, BeiDou and Galileo, USB-C', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/GcXUi1Xj9i8\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(14, 'iPhone 6', 2014, 'Codename	N61\r\nBrand	Apple Inc.\r\nManufacturer	Foxconn, Pegatron (on contract)[1]\r\nSlogan	\r\n\"Bigger than bigger\"[2]\r\n\"The two and only\"\r\nGeneration	8th\r\nModel	6: A1549, A1586, A1589\r\n6 Plus: A1522, A1524, A1593\r\nCompatible networks	GSM, CDMA, 3G, EVDO, HSPA+, 4G, LTE\r\nFirst released	\r\nSeptember 19, 2014; 4 years ago (16, 64 and 128GB models)\r\n\r\nMarch 2017 (32GB model)[3]\r\nAvailability by Region	\r\nSeptember 19, 2014[4][show]\r\nSeptember 26, 2014[4][show]\r\nOctober 17, 2014[5][6][show]\r\nOctober 23, 2014[6][show]\r\nOctober 24, 2014[6][show]\r\nOctober 30, 2014[6][show]\r\nOctober 31, 2014[6][show]\r\nNovember 6, 2014[show]\r\nNovember 14, 2014[show]\r\nFebruary 6, 2015[show]\r\nDiscontinued	September 9, 2015 (128 GB models); September 7, 2016 (16 and 64 GB models); September 12, 2018 (32 GB models)\r\nUnits sold	Over 10 million in opening weekend; 220+ million total\r\nPredecessor	iPhone 5C\r\niPhone 5S\r\nSuccessor	iPhone 6S / iPhone 6S Plus\r\nType	6: Smartphone\r\n6 Plus: Phablet\r\nForm factor	Slate\r\nDimensions	6:\r\nH 138.1 mm (5.44 in)\r\nW 67.0 mm (2.64 in)\r\nD 6.9 mm (0.27 in) (inc. lens, 7.5 mm, 0.30 in)[7][8]\r\n\r\n6 Plus:\r\nH 158.1 mm (6.22 in)\r\nW 77.8 mm (3.06 in)\r\nD 7.1 mm (0.28 in) (inc. lens, 7.67 mm, 0.302 in[7][9]\r\nWeight	6: 129 g (4.6 oz)\r\n6 Plus: 172 g (6.1 oz)\r\nOperating system	\r\nOriginal: iOS 8.0 (16/64/128GB versions) \r\niOS 10.2.1 (32 GB version)\r\nCurrent: iOS 12.0.1, released October 8, 2018\r\nSystem on chip	Apple A8\r\nCPU	1.4 GHz dual-core 64-bit ARMv8-A \"Typhoon\"\r\nGPU	PowerVR Series 6 GX6450 (quad-core)[10]\r\nMemory	1 GB LPDDR3 RAM\r\nStorage	16, 32, 64, 128 GB\r\nBattery	6: 3.82 V 6.91 W·h (1,810 mA·h) Lithium polymer battery[11]\r\n6 Plus: 3.82 V 11.1 W·h (2,915 mA·h) Lithium polymer battery[12]\r\nData inputs	Multi-touch touchscreen display, triple microphone, Apple M8 motion coprocessor, 3-axis gyroscope, 3-axis accelerometer, digital compass, iBeacon, proximity sensor, ambient light sensor, Touch ID fingerprint reader, barometer\r\nDisplay	6: 4.7 in (120 mm) Retina HD: LED-backlit IPS LCD, 1334×750 px resolution (326 ppi) (128 px/cm) pixel density, 16:9 aspect ratio, 1400:1 typ. contrast ratio[13]\r\n6 Plus: 5.5 in (140 mm) Retina HD: LED-backlit IPS LCD 1920×1080 (401 ppi) (158 px/cm) pixel density, 16:9 aspect ratio, 1300:1 typ. contrast ratio[13]\r\nAll models: 500 cd/m² max. brightness (typical), with dual-ion exchange-strengthened glass\r\nRear camera	6: 8 MP with 1.5 focus pixels, True Tone Flash, autofocus, IR filter, burst mode, f/2.2 aperture, 1080p HD video recording (30 fps or 60 fps), slow-motion video (720p 120 fps or 240 fps), timelapse, panorama (up to 43 megapixels), facial recognition, stills from video, auto-HDR,\r\ndigital image stabilization\r\n6 Plus: In addition to above: optical image stabilization\r\nFront camera	1.2 MP (1280×960 px max.), 720p video recording (30 fps), burst mode, f/2.2 aperture, exposure control, face detection, auto-HDR\r\nSound	Mono speaker, 3.5 mm stereo audio jack\r\nConnectivity	\r\nAll models:[show]\r\nmodels A1549 & A1522:[show]\r\nmodels A1586 & A1524[show]\r\nSAR	\r\n6[15][show]\r\n6 Plus[16][show]\r\nHearing aid compatibility	M3, T4\r\nWebsite	Apple - iPhone 6 at the Wayback Machine (archived December 2, 2014)', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/bVXMXZY2Bas\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(15, 'Moto E4 plus', 2018, 'Series	Motorola E Family\r\nPredecessor	Moto E3\r\nType	Smartphone\r\nDimensions	144.7 mm (5.70 in) H\r\n72.3 mm (2.85 in) W\r\n9.3 mm (0.37 in) D\r\nWeight	198 g (6.98 oz)\r\nOperating system	Android 7.1.1 (Nougat)\r\nSystem on chip	Qualcomm Snapdragon 425 (USA)\r\nMediatek MT6737 (Europe)\r\nCPU	4x1.4 GHz or 4x1.3 GHz Cortex-A53\r\nGPU	Adreno 308 or Mali T720\r\nMemory	2 GB / 3 GB RAM\r\nStorage	16 GB / 32 GB[citation needed]\r\nBattery	2,800 mAh Li-Ion replaceable / 5,000 mAh Li-Ion non-replaceable\r\nDisplay	5.0 in (130 mm), 1280 x 720 pixel resolution (293 ppi) / 5.5 in (140 mm), 1280 x 720 pixel resolution (267 ppi)\r\nRear camera	\r\n8 MP, f/2.2 aperture, LED flash\r\n\r\n13 MP, f/2.0 aperture, LED flash\r\nFront camera	5 MP, f/2.2 aperture, 1.4 µm pixel size, LED flash\r\nOther	Proximity', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/aCF5WidMX-c\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(16, 'Samsung Galaxy s8', 2018, 'odename	Project Dream\r\nCruiser (Galaxy S8 Active)\r\nBrand	Samsung Galaxy\r\nManufacturer	Samsung Electronics\r\nSlogan	Unbox Your Phone\r\nSeries	Galaxy S\r\nModel	\r\nSM-G950x (S8)\r\nSM-G955x (S8+)\r\n(Last letter varies by carrier and international models)\r\nCompatible networks	\r\n2G\r\n3G\r\nLTE\r\nFirst released	21 April 2017; 17 months ago\r\nAvailability by Region	\r\n21 April 2017[show]\r\n28 April 2017[show]\r\n29 April 2017[show]\r\n5 May 2017[show]\r\n12 May 2017[show]\r\n18 May 2017[show]\r\n25 May 2017[show]\r\n8 June 2017[show]\r\nUnits sold	20+ million[1]\r\nPredecessor	Samsung Galaxy S7/S7 Edge\r\nSuccessor	Samsung Galaxy S9/S9+\r\nRelated	Samsung Galaxy Note 8\r\nSamsung Galaxy A8 (2018)\r\nType	Smartphone (S8) \r\nPhablet (S8+)\r\nForm factor	Slate\r\nDimensions	S8:\r\n148.9 mm × 68.1 mm × 8.0 mm (5.86 in × 2.68 in × 0.31 in)\r\nS8+:\r\n159.5 mm × 73.4 mm × 8.1 mm (6.28 in × 2.89 in × 0.32 in)\r\nWeight	\r\nS8: 155 g (5.5 oz)\r\nS8+: 173 g (6.1 oz)\r\nOperating system	\r\nOriginal: Android 7.0 \"Nougat\" with Samsung Experience 8.1\r\nCurrent : Android 8.0.0 \"Oreo\" with Samsung Experience 9.0 (without Treble)[2]\r\nSystem on chip	\r\nGlobal: Exynos 8895\r\nUSA/Canada/China/HK/Japan: Qualcomm Snapdragon 835\r\nCPU	\r\nExynos: Octa-core (4×2.3 GHz M2 Mongoose & 4×1.7 GHz) Cortex-A53 (GTS)\r\nSnapdragon: Octa-core (4×2.35 GHz Kryo & 4×1.9 GHz Kryo)\r\nGPU	\r\nExynos: Mali-G71 MP20\r\nSnapdragon: Adreno 540\r\nMemory	4 or 6 GB LPDDR4X RAM\r\nStorage	64 or 128 GB UFS 2.1 / UFS 2.0 in some devices\r\nRemovable storage	microSDXC, expandable up to 256 GB\r\nBattery	Non-removable\r\nS8: 3000 mAh\r\nS8+: 3500 mAh\r\nS8 Active: 4000 mAh\r\nData inputs	\r\nSensors:\r\nAccelerometer\r\nBarometer\r\nFingerprint scanner\r\nIris scanner\r\nGeomagnetic sensor\r\nGyroscope\r\nHall sensor\r\nProximity sensor\r\nOther:\r\nPhysical sound volume keys\r\nBixby key\r\nDisplay	\r\n2960×1440 1440p Super AMOLED capacitive touchscreen display,\r\nS8: 5.8 in (150 mm), 225 ppcm (572 ppi)\r\nS8+: 6.2 in (160 mm), 208 ppcm (529 ppi)\r\nRear camera	12 MP (1.4 &#956;m), f/1.7, OIS, 4K at 30 fps, 1080p at 60 fps, 720p at 30 fps, slow motion 720p at 240 fps\r\nFront camera	8 MP, autofocus', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Z76YvIQ_hig\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(17, 'Samsung Galaxy S9', 2018, 'Codename	Star\r\nBrand	Samsung Galaxy\r\nManufacturer	Samsung Electronics\r\nSlogan	The Camera. Reimagined.\r\nSeries	Galaxy S\r\nModel	\r\nSM-G960x (S9)\r\nSM-G965x (S9+)\r\n(Last letter varies by carrier and international models)\r\nFirst released	16 March 2018; 6 months ago\r\nAvailability by Region	\r\n11 March 2018[show]\r\n16 March 2018[show]\r\nPredecessor	Samsung Galaxy S8/S8+\r\nRelated	Samsung Galaxy Note 9\r\nType	Smartphone (S9) \r\nPhablet (S9+)\r\nForm factor	Slate\r\nDimensions	S9:\r\n147.7 mm × 68.7 mm × 8.5 mm (5.81 in × 2.70 in × 0.33 in)\r\nS9+:\r\n158.1 mm × 73.8 mm × 8.5 mm (6.22 in × 2.91 in × 0.33 in)\r\nWeight	\r\nS9: 163 g (5.7 oz)\r\nS9+: 189 g (6.7 oz)\r\nOperating system	Original: Samsung Experience on top of Android 8.0 \"Oreo\"\r\nSystem on chip	\r\nGlobal: Exynos 9810\r\nUSA/Canada/China/HK/Japan/Latin America: Qualcomm Snapdragon 845\r\nCPU	\r\nExynos: Octa-core (4×2.7 GHz & 4×1.8 GHz)\r\nSnapdragon: Octa-core (4×2.8 GHz & 4×1.7 GHz) Kryo 385\r\nGPU	\r\nExynos: Mali-G72 MP18\r\nSnapdragon: Adreno 630\r\nMemory	S9: 4 GB LPDDR4X RAM\r\nS9+: 6 GB LPDDR4X RAM\r\nStorage	64, 128 or 256 GB UFS 2.1\r\nRemovable storage	microSD, expandable up to 400 GB\r\nBattery	Non-removable\r\nS9: 3000 mAh\r\nS9+: 3500 mAh\r\nData inputs	\r\nSensors:\r\nAccelerometer\r\nBarometer\r\nFingerprint scanner (rear-mounted)\r\nIris scanner\r\nGeomagnetic sensor\r\nGyroscope\r\nHall sensor\r\nProximity sensor\r\nHeart Rate and Blood Pressure sensor\r\nOther:\r\nPhysical sound volume keys\r\nBixby key\r\nDisplay	\r\n2960×1440 1440p Super AMOLED capacitive touchscreen Infinity Display\r\nGorilla Glass 5\r\nS9: 5.8 in (150 mm), 570 ppi\r\nS9+: 6.2 in (160 mm), 529 ppi\r\nRear camera	S9: 12 MP (1.4 &#956;m, f/1.5/2.4), OIS, 4K at 30 or 60 fps (limited to 5 min),[1] QHD at 30 fps, 1080p at 30 or 60 fps, 720p at 30 and slow motion at 960 fps\r\nS9+: Dual 12 MP (1.4 &#956;m, f/1.5/2.4) + 12 MP ((1.0 &#956;m), f/2.4), Dual OIS, 4K at 30 or 60 fps (limited to 5 min),[1] QHD at 30 fps, 1080p at 30 or 60 fps, 720p at 30 fps and slow motion at 960 fps', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/tHPC_OQAqFM\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(18, 'Samsung Galaxy J7', 2017, 'Series	Galaxy J\r\nModel	SM-J730x \r\n(Last letter varies by country and carrier)\r\nCompatible networks	(GSM/HSPA/LTE) \r\n2G: GSM 850 / 900 / 1800 / 1900 - SIM 1 & SIM 2 (dual-SIM model only) \r\n3G UMTS: HSDPA 850 / 900 / 1900 / 2100 \r\n4G FDD LTE: LTE band 1(2100), 3(1800), 5(850), 7(2600), 8(900), 20(800)\r\nFirst released	June 2017\r\nPredecessor	Samsung Galaxy J7 (2016)\r\nSuccessor	Samsung Galaxy A6+\r\nRelated	Samsung Galaxy A6 / A6+\r\nType	Touchscreen smartphone\r\nForm factor	Slate\r\nDimensions	\r\n152.5 mm (6.00 in) H\r\n74.8 mm (2.94 in) W\r\n8 mm (0.31 in) D\r\nWeight	181 g (6.38 oz)\r\nOperating system	Android 7.0 Nougat with Samsung Experience\r\nCPU	Octa-core 1.6\r\nGPU	\r\nMali-T830 MP1\r\n\r\n3 GB LPDDR3 RAM\r\nStorage	16 GB\r\n32 GB\r\n64 GB (for Brazil)\r\nRemovable storage	microSD up to 256 GB\r\nBattery	Non Removable Li-Ion 3600 mAh battery\r\nDisplay	5.5 in (140 mm) 1080 × 1920 pixels (401 ppi) Super AMOLED\r\nRear camera	13 MP, 4128 × 3096 pixels, autofocus, LED flash\r\nFront camera	13 megapixels (1080p) FHD video recording @ 30 Hz Fro', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/jNmeRXxhGAw\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(19, 'Nokia 6', 2017, 'Developer	HMD Global\r\nManufacturer	Foxconn\r\nSlogan	Immersive entertainment[1]\r\nFirst released	20 January 2017; 20 months ago\r\nSuccessor	Nokia 6.1\r\nRelated	Nokia 2\r\nNokia 3\r\nNokia 5\r\nNokia 7\r\nNokia 8\r\nType	Smartphone\r\nDimensions	154 x 75.8 x 8.4 mm\r\nWeight	169 g (5.96 oz)\r\nOperating system	Android 8.1.0 \"Oreo\" with Android security patch level up to 1 August 2018\r\nSystem on chip	Qualcomm Snapdragon 430\r\nCPU	Octa core 1.4 GHz Cortex-A53\r\nGPU	Adreno 505\r\nMemory	3 or 4&#8201; GB RAM\r\nStorage	32 or 64&#8201; GB\r\nRemovable storage	microSD, up to 128&#8201; GB\r\nBattery	Non-removable, 3000 mAh Li-Po\r\nData inputs	Multi-touch screen\r\nDisplay	5.5\" 1080p Full HD 2.5D curved display with Gorilla Glass 3\r\nRear camera	Primary: 16 MP, AF, f/2.0, dual-tone LED flash for true and natural colour\r\nFront: 8 MP\r\nSound	Dual speakers, Dolby Atmos sound enhancement, active noise cancellation with dedicated microphone\r\nConnectivity	• 3.5 mm TRRS headphone jack\r\n• Bluetooth\r\n• USB 2.0 via Micro-USB port\r\nOther	Compass, fingerprint reader (front-mounted), NFC (Note: see Variants)', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/BhDUP5wOi8w\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(20, 'Samsung Galaxy A9', 2016, 'Model	SM-A900x (A9) \r\nSM-A910x (A9 Pro) \r\n(Last letter varies by carrier & international models)\r\nCompatible networks	2G, 3G (UMTS/HSPA), 4G (LTE)\r\nFirst released	December 2, 2015; 2 years ago\r\nAvailability by Region	December 15, 2015–present\r\nSuccessor	Samsung Galaxy A9 Pro (2016)\r\nRelated	Samsung Galaxy A3 (2016) \r\nSamsung Galaxy A5 (2016) \r\nSamsung Galaxy A7 (2016)\r\nType	Touchscreen smartphone\r\nForm factor	Slate\r\nDimensions	161.7 × 80.9 × 7.4 mm\r\nWeight	200g\r\nOperating system	\r\nOriginal: Android 5.1.1 \"Lollipop\"\r\n\r\nCurrent: Android 6.0.1 \"Marshmallow\"\r\nSystem on chip	64-bit Qualcomm Snapdragon 652\r\nCPU	Quad-Core 1.8 GHz ARM Cortex-A72 + Quad-Core 1.4 GHz ARM Cortex-A53\r\nGPU	Adreno 510\r\nMemory	3GB RAM\r\nStorage	32GB\r\nRemovable storage	up to 128GB\r\nBattery	4000mAh (non-removable) with fast-charging\r\nData inputs	\r\nList[show]\r\nDisplay	6.0\" Super AMOLED FHD display with Corning Gorilla Glass 4, 1080×1920px\r\nRear camera	13 MP\r\nFront camera	8 MP', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/EdkT-5RvxjI\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(21, 'Samsung Galaxy A8 / A8+', 2018, 'Series	Galaxy A series\r\nModel	\r\nSM-A530x (A8)\r\nSM-A730x (A8+)\r\n(Last letter varies by carrier and international models)\r\nFirst released	January 2018; 9 months ago\r\nPredecessor	Samsung Galaxy A3 (2017)\r\nSamsung Galaxy A5 (2017)\r\nRelated	Samsung Galaxy S8\r\nSamsung Galaxy Note 8\r\nSamsung Galaxy A6 / A6+\r\nType	smart phone\r\nForm factor	Slate\r\nDimensions	A8: H: 149.2 mm (5.87 in)\r\nW: 70.6 mm (2.78 in)\r\nD: 8.4 mm (0.33 in)\r\nA8+: H: 159.9 mm (6.30 in)\r\nW: 75.7 mm (2.98 in)\r\nD: 8.3 mm (0.33 in)\r\nWeight	A8: 172 g (6.1 oz)\r\nA8+: 191 g (6.7 oz)\r\nOperating system	Original: Android 7.1.1 \"Nougat\" with Samsung Experience 8.5 \r\nCurrent: Android 8.0 \"Oreo\" with Samsung Experience 9.0\r\nSystem on chip	Exynos 7885 Octa\r\nCPU	Octa-core (2x2.2 GHz Cortex-A73 & 6x1.6 GHz Cortex-A53)\r\nGPU	Mali-G71\r\nMemory	A8: 4 GB RAM\r\nA8+: 4 or 6 GB RAM\r\nStorage	32 or 64 GB\r\nRemovable storage	microSD, up to 256 GB\r\nBattery	A8: 3,000 mAh\r\nA8+: 3,500 mAh\r\nData inputs	\r\nAccelerometer\r\nBarometer\r\nElectronic compass\r\nFingerprint scanner (rear-mounted)\r\nGyroscope\r\nProximity sensor\r\nTouchscreen\r\nDisplay	A8: 5.6 in (140 mm) 1080p AMOLED, ~441ppi with Gorilla Glass\r\nA8+: 6 in (150 mm) 1080p AMOLED, ~410ppi with Gorilla Glass\r\nRear camera	16 MP, f/1.7, phase detection autofocus, LED flash, 1080p video at 30fps\r\nFront camera	Dual 16 MP + 8 MP, f/1.9, 1080p video @ 30FPS', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/XTIbHV1ZUm0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(22, 'Samsung Galaxy Ace 4', 2014, 'Series	Galaxy\r\nCompatible networks	802.11 b/g/n (b/g/n), Bluetooth 4.0, Quadro-band GSM (DCS 1800 MHz, PCS 1900 MHz, GSM 850 MHz, GSM 900 MHz), Tri-band UMTS (B5 (850), B1 (2100), B8 (900), Penta-band LTE (B7(2600), B8(900), B20(800), B3(1800), B1(2100).\r\nFirst released	1 August 2014; 4 years ago\r\nPredecessor	Samsung Galaxy Ace 3\r\nType	Smartphone\r\nForm factor	Slate\r\nDimensions	\r\n121.4 mm (4.78 in) H\r\n62.9 mm (2.48 in) W\r\n10.8 mm (0.43 in) D\r\nWeight	123.8 g (4.4 oz)\r\nOperating system	Android 4.4.2 KitKat\r\nSystem on chip	Qualcomm Snapdragon 410 8916\r\nCPU	Quad-core 1.2 GHz\r\nGPU	Qualcomm Adreno 305\r\nMemory	1GB RAM\r\nStorage	4GB\r\nRemovable storage	microSD up to 64 GB\r\nBattery	1,900 mAh, 3.8 V, internal rechargeable Li-ion, user replaceable\r\nData inputs	Multi-touch, capacitive touchscreen \r\nAccelerometer \r\nA-GPS \r\nGLONASS \r\nPush buttons \r\nCapacitive touch-sensitive buttons\r\nDisplay	4.0 in (100 mm) TFT LCD diagonal. \r\n480×800 px WVGA\r\n16M colors\r\nRear camera	5 Megapixel 2592×1944 max, autofocus, LED flash, HD video recording 1280×720 px MPEG4 at 30 FPS\r\nFront camera	1.3 Megapixel\r\nConnectivity	3.5 mm jack \r\nBluetooth v4.0 with A2DP & AVRCP \r\nDLNA \r\nStereo FM radio with RDS \r\nMicro-USB 2.0 \r\nNear field communication (NFC) \r\nWi-Fi 802.11 b/g/n', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/9rw_bfSBx-A\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `reviewrs`
--

CREATE TABLE `reviewrs` (
  `ID` int(21) NOT NULL,
  `name` varchar(125) NOT NULL,
  `password` varchar(21) NOT NULL,
  `email` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviewrs`
--

INSERT INTO `reviewrs` (`ID`, `name`, `password`, `email`) VALUES
(1, 'sachin', '111', 'varshapol33@gmail.com'),
(5, 'varsha', 'sachin', 'varshapol33@gmail.com'),
(7, 'manish', '222', 'varshapol33@gmail.com'),
(8, 'ankit', 'sjkbc', 'ankit@gmail.com'),
(9, 'sachin1', 'sachin123', 'varshapol33@gmail.com'),
(10, 'shobhit', 'jyoti', 'shobhitsingh522@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `ID` int(21) NOT NULL,
  `rating` decimal(2,1) NOT NULL,
  `movies_id` int(21) NOT NULL,
  `reviewrs_id` int(31) NOT NULL,
  `comments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`ID`, `rating`, `movies_id`, `reviewrs_id`, `comments`) VALUES
(1, '5.0', 1, 1, 'good'),
(2, '4.0', 1, 2, 'erfg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reviewrs`
--
ALTER TABLE `reviewrs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `ID` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `reviewrs`
--
ALTER TABLE `reviewrs`
  MODIFY `ID` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `ID` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
