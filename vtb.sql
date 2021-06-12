-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3326
-- Creato il: Giu 12, 2021 alle 18:32
-- Versione del server: 10.4.18-MariaDB
-- Versione PHP: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vtb`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `aerei`
--

CREATE TABLE `aerei` (
  `cod_aereo` varchar(6) NOT NULL,
  `citta_partenza` varchar(25) DEFAULT NULL,
  `aeroporto_partenza` varchar(25) DEFAULT NULL,
  `citta_arrivo` varchar(25) DEFAULT NULL,
  `aeroporto_arrivo` varchar(25) DEFAULT NULL,
  `identificativo_spazio` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `aerei`
--

INSERT INTO `aerei` (`cod_aereo`, `citta_partenza`, `aeroporto_partenza`, `citta_arrivo`, `aeroporto_arrivo`, `identificativo_spazio`) VALUES
('3', 'Carolaina del nord', 'Charlotte', 'Alaska', 'Anchorage', 2),
('31', 'Alaska', 'Anchorage', 'Carolaina del nord', 'Charlotte', 21),
('321', NULL, NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `aeroporti`
--

CREATE TABLE `aeroporti` (
  `cod_aeroporto` int(6) NOT NULL,
  `nome` varchar(25) DEFAULT NULL,
  `citta` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `aeroporti`
--

INSERT INTO `aeroporti` (`cod_aeroporto`, `nome`, `citta`) VALUES
(1, 'Anchorage', 'Alaska'),
(12, 'Charlotte', 'Carolaina del nord');

-- --------------------------------------------------------

--
-- Struttura della tabella `agenzie`
--

CREATE TABLE `agenzie` (
  `id_agenzia` int(6) NOT NULL,
  `via` varchar(25) DEFAULT NULL,
  `citta` varchar(25) DEFAULT NULL,
  `nome` varchar(25) DEFAULT NULL,
  `telefono` int(13) DEFAULT NULL,
  `num_carta` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `agenzie`
--

INSERT INTO `agenzie` (`id_agenzia`, `via`, `citta`, `nome`, `telefono`, `num_carta`) VALUES
(6, 'via romeo', 'Firenze', 'vtbExpress', 2147483647, '243421231223'),
(61, 'via giuglietta', 'Firenze', 'SosViaggi', 2147483647, '433421534223');

-- --------------------------------------------------------

--
-- Struttura della tabella `biglietti`
--

CREATE TABLE `biglietti` (
  `numero` int(10) NOT NULL,
  `cod_prenotazione` int(6) DEFAULT NULL,
  `costo` int(10) DEFAULT NULL,
  `classe` varchar(15) DEFAULT NULL,
  `data_ora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `biglietti`
--

INSERT INTO `biglietti` (`numero`, `cod_prenotazione`, `costo`, `classe`, `data_ora`) VALUES
(3595, 7, 178, 'economica', '2021-07-09 09:39:02'),
(9025, 7, 478, 'Buisness', '2021-06-29 19:41:07'),
(9026, 11, 17491, 'Economy FC', '2021-06-12 11:48:49'),
(9027, 12, 504, 'Economy FC', '2021-06-12 04:09:54'),
(9028, 13, 902, 'Economy FC', '2021-06-12 04:11:31'),
(9029, 14, 388, 'Business', '2021-06-12 05:14:50'),
(9030, 15, 418, 'Business', '2021-06-12 05:39:43'),
(9031, 16, 1390, 'Business', '2021-06-12 05:53:35'),
(9032, 17, 608, 'Business', '2021-06-12 06:00:19');

-- --------------------------------------------------------

--
-- Struttura della tabella `city`
--

CREATE TABLE `city` (
  `nome` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `id_paese` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `city`
--

INSERT INTO `city` (`nome`, `img`, `id_paese`) VALUES
('Andorra la Vella ', 'https://restcountries.eu/data/and.svg', 'AD'),
('Abu Dhabi ', 'https://restcountries.eu/data/are.svg', 'AE'),
('Kabul ', 'https://restcountries.eu/data/afg.svg', 'AF'),
('The Valley ', 'https://restcountries.eu/data/aia.svg', 'AI'),
('Tirana ', 'https://restcountries.eu/data/alb.svg', 'AL'),
('Yerevan ', 'https://restcountries.eu/data/arm.svg', 'AM'),
('Luanda ', 'https://restcountries.eu/data/ago.svg', 'AO'),
(' ', 'https://restcountries.eu/data/ata.svg', 'AQ'),
('Buenos Aires ', 'https://restcountries.eu/data/arg.svg', 'AR'),
('Pago Pago ', 'https://restcountries.eu/data/asm.svg', 'AS'),
('Vienna ', 'https://restcountries.eu/data/aut.svg', 'AT'),
('Canberra ', 'https://restcountries.eu/data/aus.svg', 'AU'),
('Oranjestad ', 'https://restcountries.eu/data/abw.svg', 'AW'),
('Mariehamn ', 'https://restcountries.eu/data/ala.svg', 'AX'),
('Baku ', 'https://restcountries.eu/data/aze.svg', 'AZ'),
('Sarajevo ', 'https://restcountries.eu/data/bih.svg', 'BA'),
('Bridgetown ', 'https://restcountries.eu/data/brb.svg', 'BB'),
('Dhaka ', 'https://restcountries.eu/data/bgd.svg', 'BD'),
('Brussels ', 'https://restcountries.eu/data/bel.svg', 'BE'),
('Ouagadougou ', 'https://restcountries.eu/data/bfa.svg', 'BF'),
('Sofia ', 'https://restcountries.eu/data/bgr.svg', 'BG'),
('Manama ', 'https://restcountries.eu/data/bhr.svg', 'BH'),
('Bujumbura ', 'https://restcountries.eu/data/bdi.svg', 'BI'),
('Porto-Novo ', 'https://restcountries.eu/data/ben.svg', 'BJ'),
('Gustavia ', 'https://restcountries.eu/data/blm.svg', 'BL'),
('Hamilton ', 'https://restcountries.eu/data/bmu.svg', 'BM'),
('Bandar Seri Begawan ', 'https://restcountries.eu/data/brn.svg', 'BN'),
('Sucre ', 'https://restcountries.eu/data/bol.svg', 'BO'),
('Kralendijk ', 'https://restcountries.eu/data/bes.svg', 'BQ'),
('Brasília ', 'https://restcountries.eu/data/bra.svg', 'BR'),
('Nassau ', 'https://restcountries.eu/data/bhs.svg', 'BS'),
('Thimphu ', 'https://restcountries.eu/data/btn.svg', 'BT'),
(' ', 'https://restcountries.eu/data/bvt.svg', 'BV'),
('Gaborone ', 'https://restcountries.eu/data/bwa.svg', 'BW'),
('Minsk ', 'https://restcountries.eu/data/blr.svg', 'BY'),
('Belmopan ', 'https://restcountries.eu/data/blz.svg', 'BZ'),
('Ottawa ', 'https://restcountries.eu/data/can.svg', 'CA'),
('West Island ', 'https://restcountries.eu/data/cck.svg', 'CC'),
('Kinshasa ', 'https://restcountries.eu/data/cod.svg', 'CD'),
('Bangui ', 'https://restcountries.eu/data/caf.svg', 'CF'),
('Brazzaville ', 'https://restcountries.eu/data/cog.svg', 'CG'),
('Bern ', 'https://restcountries.eu/data/che.svg', 'CH'),
('Yamoussoukro ', 'https://restcountries.eu/data/civ.svg', 'CI'),
('Avarua ', 'https://restcountries.eu/data/cok.svg', 'CK'),
('Santiago ', 'https://restcountries.eu/data/chl.svg', 'CL'),
('Yaoundé ', 'https://restcountries.eu/data/cmr.svg', 'CM'),
('Beijing ', 'https://restcountries.eu/data/chn.svg', 'CN'),
('Bogotá ', 'https://restcountries.eu/data/col.svg', 'CO'),
('San José ', 'https://restcountries.eu/data/cri.svg', 'CR'),
('Havana ', 'https://restcountries.eu/data/cub.svg', 'CU'),
('Praia ', 'https://restcountries.eu/data/cpv.svg', 'CV'),
('Willemstad ', 'https://restcountries.eu/data/cuw.svg', 'CW'),
('Flying Fish Cove ', 'https://restcountries.eu/data/cxr.svg', 'CX'),
('Nicosia ', 'https://restcountries.eu/data/cyp.svg', 'CY'),
('Prague ', 'https://restcountries.eu/data/cze.svg', 'CZ'),
('Berlin ', 'https://restcountries.eu/data/deu.svg', 'DE'),
('Djibouti ', 'https://restcountries.eu/data/dji.svg', 'DJ'),
('Copenhagen ', 'https://restcountries.eu/data/dnk.svg', 'DK'),
('Roseau ', 'https://restcountries.eu/data/dma.svg', 'DM'),
('Santo Domingo ', 'https://restcountries.eu/data/dom.svg', 'DO'),
('Algiers ', 'https://restcountries.eu/data/dza.svg', 'DZ'),
('Quito ', 'https://restcountries.eu/data/ecu.svg', 'EC'),
('Tallinn ', 'https://restcountries.eu/data/est.svg', 'EE'),
('Cairo ', 'https://restcountries.eu/data/egy.svg', 'EG'),
('El Aaiún ', 'https://restcountries.eu/data/esh.svg', 'EH'),
('Asmara ', 'https://restcountries.eu/data/eri.svg', 'ER'),
('Madrid ', 'https://restcountries.eu/data/esp.svg', 'ES'),
('Addis Ababa ', 'https://restcountries.eu/data/eth.svg', 'ET'),
('Helsinki ', 'https://restcountries.eu/data/fin.svg', 'FI'),
('Suva ', 'https://restcountries.eu/data/fji.svg', 'FJ'),
('Stanley ', 'https://restcountries.eu/data/flk.svg', 'FK'),
('Palikir ', 'https://restcountries.eu/data/fsm.svg', 'FM'),
('Tórshavn ', 'https://restcountries.eu/data/fro.svg', 'FO'),
('Paris ', 'https://restcountries.eu/data/fra.svg', 'FR'),
('Libreville ', 'https://restcountries.eu/data/gab.svg', 'GA'),
('London ', 'https://restcountries.eu/data/gbr.svg', 'GB'),
('Tbilisi ', 'https://restcountries.eu/data/geo.svg', 'GE'),
('Cayenne ', 'https://restcountries.eu/data/guf.svg', 'GF'),
('St. Peter Port ', 'https://restcountries.eu/data/ggy.svg', 'GG'),
('Accra ', 'https://restcountries.eu/data/gha.svg', 'GH'),
('Gibraltar ', 'https://restcountries.eu/data/gib.svg', 'GI'),
('Nuuk ', 'https://restcountries.eu/data/grl.svg', 'GL'),
('Banjul ', 'https://restcountries.eu/data/gmb.svg', 'GM'),
('Conakry ', 'https://restcountries.eu/data/gin.svg', 'GN'),
('Basse-Terre ', 'https://restcountries.eu/data/glp.svg', 'GP'),
('Malabo ', 'https://restcountries.eu/data/gnq.svg', 'GQ'),
('Athens ', 'https://restcountries.eu/data/grc.svg', 'GR'),
('King Edward Point ', 'https://restcountries.eu/data/sgs.svg', 'GS'),
('Guatemala City ', 'https://restcountries.eu/data/gtm.svg', 'GT'),
('Hagåtña ', 'https://restcountries.eu/data/gum.svg', 'GU'),
('Bissau ', 'https://restcountries.eu/data/gnb.svg', 'GW'),
('Georgetown ', 'https://restcountries.eu/data/guy.svg', 'GY'),
('City of Victoria ', 'https://restcountries.eu/data/hkg.svg', 'HK'),
(' ', 'https://restcountries.eu/data/hmd.svg', 'HM'),
('Tegucigalpa ', 'https://restcountries.eu/data/hnd.svg', 'HN'),
('Zagreb ', 'https://restcountries.eu/data/hrv.svg', 'HR'),
('Port-au-Prince ', 'https://restcountries.eu/data/hti.svg', 'HT'),
('Budapest ', 'https://restcountries.eu/data/hun.svg', 'HU'),
('Jakarta ', 'https://restcountries.eu/data/idn.svg', 'ID'),
('Dublin ', 'https://restcountries.eu/data/irl.svg', 'IE'),
('Jerusalem ', 'https://restcountries.eu/data/isr.svg', 'IL'),
('Douglas ', 'https://restcountries.eu/data/imn.svg', 'IM'),
('New Delhi ', 'https://restcountries.eu/data/ind.svg', 'IN'),
('Diego Garcia ', 'https://restcountries.eu/data/iot.svg', 'IO'),
('Baghdad ', 'https://restcountries.eu/data/irq.svg', 'IQ'),
('Tehran ', 'https://restcountries.eu/data/irn.svg', 'IR'),
('Reykjavík ', 'https://restcountries.eu/data/isl.svg', 'IS'),
('Rome ', 'https://restcountries.eu/data/ita.svg', 'IT'),
('Saint Helier ', 'https://restcountries.eu/data/jey.svg', 'JE'),
('Kingston ', 'https://restcountries.eu/data/jam.svg', 'JM'),
('Amman ', 'https://restcountries.eu/data/jor.svg', 'JO'),
('Tokyo ', 'https://restcountries.eu/data/jpn.svg', 'JP'),
('Nairobi ', 'https://restcountries.eu/data/ken.svg', 'KE'),
('Bishkek ', 'https://restcountries.eu/data/kgz.svg', 'KG'),
('Phnom Penh ', 'https://restcountries.eu/data/khm.svg', 'KH'),
('South Tarawa ', 'https://restcountries.eu/data/kir.svg', 'KI'),
('Moroni ', 'https://restcountries.eu/data/com.svg', 'KM'),
('Basseterre ', 'https://restcountries.eu/data/kna.svg', 'KN'),
('Pyongyang ', 'https://restcountries.eu/data/prk.svg', 'KP'),
('Seoul ', 'https://restcountries.eu/data/kor.svg', 'KR'),
('Kuwait City ', 'https://restcountries.eu/data/kwt.svg', 'KW'),
('George Town ', 'https://restcountries.eu/data/cym.svg', 'KY'),
('Astana ', 'https://restcountries.eu/data/kaz.svg', 'KZ'),
('Vientiane ', 'https://restcountries.eu/data/lao.svg', 'LA'),
('Beirut ', 'https://restcountries.eu/data/lbn.svg', 'LB'),
('Castries ', 'https://restcountries.eu/data/lca.svg', 'LC'),
('Vaduz ', 'https://restcountries.eu/data/lie.svg', 'LI'),
('Colombo ', 'https://restcountries.eu/data/lka.svg', 'LK'),
('Monrovia ', 'https://restcountries.eu/data/lbr.svg', 'LR'),
('Maseru ', 'https://restcountries.eu/data/lso.svg', 'LS'),
('Vilnius ', 'https://restcountries.eu/data/ltu.svg', 'LT'),
('Luxembourg ', 'https://restcountries.eu/data/lux.svg', 'LU'),
('Riga ', 'https://restcountries.eu/data/lva.svg', 'LV'),
('Tripoli ', 'https://restcountries.eu/data/lby.svg', 'LY'),
('Rabat ', 'https://restcountries.eu/data/mar.svg', 'MA'),
('Monaco ', 'https://restcountries.eu/data/mco.svg', 'MC'),
('Chișinău ', 'https://restcountries.eu/data/mda.svg', 'MD'),
('Podgorica ', 'https://restcountries.eu/data/mne.svg', 'ME'),
('Marigot ', 'https://restcountries.eu/data/maf.svg', 'MF'),
('Antananarivo ', 'https://restcountries.eu/data/mdg.svg', 'MG'),
('Majuro ', 'https://restcountries.eu/data/mhl.svg', 'MH'),
('Skopje ', 'https://restcountries.eu/data/mkd.svg', 'MK'),
('Bamako ', 'https://restcountries.eu/data/mli.svg', 'ML'),
('Naypyidaw ', 'https://restcountries.eu/data/mmr.svg', 'MM'),
('Ulan Bator ', 'https://restcountries.eu/data/mng.svg', 'MN'),
(' ', 'https://restcountries.eu/data/mac.svg', 'MO'),
('Saipan ', 'https://restcountries.eu/data/mnp.svg', 'MP'),
('Fort-de-France ', 'https://restcountries.eu/data/mtq.svg', 'MQ'),
('Nouakchott ', 'https://restcountries.eu/data/mrt.svg', 'MR'),
('Plymouth ', 'https://restcountries.eu/data/msr.svg', 'MS'),
('Valletta ', 'https://restcountries.eu/data/mlt.svg', 'MT'),
('Port Louis ', 'https://restcountries.eu/data/mus.svg', 'MU'),
('Malé ', 'https://restcountries.eu/data/mdv.svg', 'MV'),
('Lilongwe ', 'https://restcountries.eu/data/mwi.svg', 'MW'),
('Mexico City ', 'https://restcountries.eu/data/mex.svg', 'MX'),
('Kuala Lumpur ', 'https://restcountries.eu/data/mys.svg', 'MY'),
('Maputo ', 'https://restcountries.eu/data/moz.svg', 'MZ'),
('Windhoek ', 'https://restcountries.eu/data/nam.svg', 'NA'),
('Nouméa ', 'https://restcountries.eu/data/ncl.svg', 'NC'),
('Niamey ', 'https://restcountries.eu/data/ner.svg', 'NE'),
('Kingston ', 'https://restcountries.eu/data/nfk.svg', 'NF'),
('Abuja ', 'https://restcountries.eu/data/nga.svg', 'NG'),
('Managua ', 'https://restcountries.eu/data/nic.svg', 'NI'),
('Amsterdam ', 'https://restcountries.eu/data/nld.svg', 'NL'),
('Oslo ', 'https://restcountries.eu/data/nor.svg', 'NO'),
('Kathmandu ', 'https://restcountries.eu/data/npl.svg', 'NP'),
('Yaren ', 'https://restcountries.eu/data/nru.svg', 'NR'),
('Alofi ', 'https://restcountries.eu/data/niu.svg', 'NU'),
('Wellington ', 'https://restcountries.eu/data/nzl.svg', 'NZ'),
('Muscat ', 'https://restcountries.eu/data/omn.svg', 'OM'),
('Panama City ', 'https://restcountries.eu/data/pan.svg', 'PA'),
('Lima ', 'https://restcountries.eu/data/per.svg', 'PE'),
('Papeetē ', 'https://restcountries.eu/data/pyf.svg', 'PF'),
('Port Moresby ', 'https://restcountries.eu/data/png.svg', 'PG'),
('Manila ', 'https://restcountries.eu/data/phl.svg', 'PH'),
('Islamabad ', 'https://restcountries.eu/data/pak.svg', 'PK'),
('Warsaw ', 'https://restcountries.eu/data/pol.svg', 'PL'),
('Saint-Pierre ', 'https://restcountries.eu/data/spm.svg', 'PM'),
('Adamstown ', 'https://restcountries.eu/data/pcn.svg', 'PN'),
('San Juan ', 'https://restcountries.eu/data/pri.svg', 'PR'),
('Ramallah ', 'https://restcountries.eu/data/pse.svg', 'PS'),
('Lisbon ', 'https://restcountries.eu/data/prt.svg', 'PT'),
('Ngerulmud ', 'https://restcountries.eu/data/plw.svg', 'PW'),
('Asunción ', 'https://restcountries.eu/data/pry.svg', 'PY'),
('Doha ', 'https://restcountries.eu/data/qat.svg', 'QA'),
('Saint-Denis ', 'https://restcountries.eu/data/reu.svg', 'RE'),
('Bucharest ', 'https://restcountries.eu/data/rou.svg', 'RO'),
('Belgrade ', 'https://restcountries.eu/data/srb.svg', 'RS'),
('Moscow ', 'https://restcountries.eu/data/rus.svg', 'RU'),
('Kigali ', 'https://restcountries.eu/data/rwa.svg', 'RW'),
('Riyadh ', 'https://restcountries.eu/data/sau.svg', 'SA'),
('Honiara ', 'https://restcountries.eu/data/slb.svg', 'SB'),
('Victoria ', 'https://restcountries.eu/data/syc.svg', 'SC'),
('Khartoum ', 'https://restcountries.eu/data/sdn.svg', 'SD'),
('Stockholm ', 'https://restcountries.eu/data/swe.svg', 'SE'),
('Singapore ', 'https://restcountries.eu/data/sgp.svg', 'SG'),
('Jamestown ', 'https://restcountries.eu/data/shn.svg', 'SH'),
('Ljubljana ', 'https://restcountries.eu/data/svn.svg', 'SI'),
('Longyearbyen ', 'https://restcountries.eu/data/sjm.svg', 'SJ'),
('Bratislava ', 'https://restcountries.eu/data/svk.svg', 'SK'),
('Freetown ', 'https://restcountries.eu/data/sle.svg', 'SL'),
('City of San Marino ', 'https://restcountries.eu/data/smr.svg', 'SM'),
('Dakar ', 'https://restcountries.eu/data/sen.svg', 'SN'),
('Mogadishu ', 'https://restcountries.eu/data/som.svg', 'SO'),
('Paramaribo ', 'https://restcountries.eu/data/sur.svg', 'SR'),
('Juba ', 'https://restcountries.eu/data/ssd.svg', 'SS'),
('São Tomé ', 'https://restcountries.eu/data/stp.svg', 'ST'),
('San Salvador ', 'https://restcountries.eu/data/slv.svg', 'SV'),
('Philipsburg ', 'https://restcountries.eu/data/sxm.svg', 'SX'),
('Damascus ', 'https://restcountries.eu/data/syr.svg', 'SY'),
('Lobamba ', 'https://restcountries.eu/data/swz.svg', 'SZ'),
('Cockburn Town ', 'https://restcountries.eu/data/tca.svg', 'TC'),
('Port-aux-Français ', 'https://restcountries.eu/data/atf.svg', 'TF'),
('Lomé ', 'https://restcountries.eu/data/tgo.svg', 'TG'),
('Bangkok ', 'https://restcountries.eu/data/tha.svg', 'TH'),
('Dushanbe ', 'https://restcountries.eu/data/tjk.svg', 'TJ'),
('Fakaofo ', 'https://restcountries.eu/data/tkl.svg', 'TK'),
('Dili ', 'https://restcountries.eu/data/tls.svg', 'TL'),
('Ashgabat ', 'https://restcountries.eu/data/tkm.svg', 'TM'),
('Tunis ', 'https://restcountries.eu/data/tun.svg', 'TN'),
('Ankara ', 'https://restcountries.eu/data/tur.svg', 'TR'),
('Port of Spain ', 'https://restcountries.eu/data/tto.svg', 'TT'),
('Funafuti ', 'https://restcountries.eu/data/tuv.svg', 'TV'),
('Taipei ', 'https://restcountries.eu/data/twn.svg', 'TW'),
('Dodoma ', 'https://restcountries.eu/data/tza.svg', 'TZ'),
('Kiev ', 'https://restcountries.eu/data/ukr.svg', 'UA'),
('Kampala ', 'https://restcountries.eu/data/uga.svg', 'UG'),
(' ', 'https://restcountries.eu/data/umi.svg', 'UM'),
('Washington, D.C. ', 'https://restcountries.eu/data/usa.svg', 'US'),
('Montevideo ', 'https://restcountries.eu/data/ury.svg', 'UY'),
('Tashkent ', 'https://restcountries.eu/data/uzb.svg', 'UZ'),
('Rome ', 'https://restcountries.eu/data/vat.svg', 'VA'),
('Kingstown ', 'https://restcountries.eu/data/vct.svg', 'VC'),
('Caracas ', 'https://restcountries.eu/data/ven.svg', 'VE'),
('Road Town ', 'https://restcountries.eu/data/vgb.svg', 'VG'),
('Charlotte Amalie ', 'https://restcountries.eu/data/vir.svg', 'VI'),
('Hanoi ', 'https://restcountries.eu/data/vnm.svg', 'VN'),
('Port Vila ', 'https://restcountries.eu/data/vut.svg', 'VU'),
('Mata-Utu ', 'https://restcountries.eu/data/wlf.svg', 'WF'),
('Apia ', 'https://restcountries.eu/data/wsm.svg', 'WS'),
('Pristina ', 'https://restcountries.eu/data/kos.svg', 'XK'),
('Mamoudzou ', 'https://restcountries.eu/data/myt.svg', 'YT'),
('Pretoria ', 'https://restcountries.eu/data/zaf.svg', 'ZA'),
('Lusaka ', 'https://restcountries.eu/data/zmb.svg', 'ZM'),
('Harare ', 'https://restcountries.eu/data/zwe.svg', 'ZW');

-- --------------------------------------------------------

--
-- Struttura della tabella `clienti`
--

CREATE TABLE `clienti` (
  `id_cliente` int(6) NOT NULL,
  `passaporto` varchar(9) DEFAULT NULL,
  `paese` varchar(25) DEFAULT NULL,
  `cap` int(5) DEFAULT NULL,
  `num_civico` varchar(6) DEFAULT NULL,
  `citta` varchar(25) DEFAULT NULL,
  `via` varchar(25) DEFAULT NULL,
  `cognome` varchar(25) DEFAULT NULL,
  `nome` varchar(25) DEFAULT NULL,
  `tel` varchar(13) DEFAULT NULL,
  `green_pass` varchar(25) DEFAULT NULL,
  `data_nascita` date DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `passwd` varchar(25) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `num_carta` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `clienti`
--

INSERT INTO `clienti` (`id_cliente`, `passaporto`, `paese`, `cap`, `num_civico`, `citta`, `via`, `cognome`, `nome`, `tel`, `green_pass`, `data_nascita`, `username`, `passwd`, `email`, `num_carta`) VALUES
(5, 'AA1234567', 'Italia', 25126, '19', 'Brescia', 'via martino franchi', 'Abdullah', 'Javed', '3283229322', 'si', '2002-08-22', 'abdu', '123', 'abdu@gmail.com', '44939929392392939'),
(51, 'BB1234269', 'Italia', 25021, '2', 'Milano', 'via  Corleone', 'Don', 'Hercules', '3283229322', 'no', '2002-08-22', 'don', '123', 'don@gmail.com', '4494323423432939'),
(52, 'n3423432', NULL, NULL, NULL, NULL, NULL, 'javed', 'abdu', '342423423', 'SI', '2002-02-22', 'luk', '123', 'luk@gmail.com', '23213123123123');

-- --------------------------------------------------------

--
-- Struttura della tabella `prenotazioni`
--

CREATE TABLE `prenotazioni` (
  `cod_prenotazione` int(6) NOT NULL,
  `id_agenzia` int(6) DEFAULT NULL,
  `id_cliente` int(6) DEFAULT NULL,
  `cod_volo` varchar(9) DEFAULT NULL,
  `posto` varchar(10) DEFAULT NULL,
  `num_adulti` int(15) DEFAULT NULL,
  `num_bambini` int(15) DEFAULT NULL,
  `data_ora` datetime DEFAULT NULL,
  `num_bagagli` int(15) DEFAULT NULL,
  `chek_in` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `prenotazioni`
--

INSERT INTO `prenotazioni` (`cod_prenotazione`, `id_agenzia`, `id_cliente`, `cod_volo`, `posto`, `num_adulti`, `num_bambini`, `data_ora`, `num_bagagli`, `chek_in`) VALUES
(7, NULL, 5, '4', '1-b', 2, 1, '2021-06-12 10:34:09', 3, 'non effettuato'),
(8, NULL, 5, '42', 'ness-2', 2, 0, '2021-06-12 08:43:58', 2, 'effettuato'),
(9, NULL, 5, '42', 'ness-2', 2, 0, '2021-06-12 08:51:26', 6, 'effettuato'),
(10, NULL, 5, '42', 'ness-2', 2, 8, '2021-06-12 08:57:23', 1, 'effettuato'),
(11, NULL, 5, '42', 'nomy-6', 4, 2, '2021-06-12 11:48:49', 4, 'effettuato'),
(12, NULL, 52, '43', 'nomy-6', 5, 4, '2021-06-12 04:09:54', 5, 'effettuato'),
(13, NULL, 52, '43', 'nomy-6', 7, 4, '2021-06-12 04:11:31', 4, 'effettuato'),
(14, NULL, 52, '43', 'ness-2', 6, 7, '2021-06-12 05:14:50', 1, 'effettuato'),
(15, NULL, 52, '43', 'ness-2', 6, 7, '2021-06-12 05:39:43', 4, 'effettuato'),
(16, NULL, 52, '43', 'ness-2', 1, 10, '2021-06-12 05:53:35', 2, 'effettuato'),
(17, NULL, 5, '43', 'ness-2', 5, 6, '2021-06-12 06:00:19', 4, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `spazi_aerei`
--

CREATE TABLE `spazi_aerei` (
  `identificativo_spazio` int(6) NOT NULL,
  `citta_inizio` varchar(25) DEFAULT NULL,
  `aeroporto_inizio` varchar(25) DEFAULT NULL,
  `citta_fine` varchar(25) DEFAULT NULL,
  `aeroporto_fine` varchar(25) DEFAULT NULL,
  `lunghezza` varchar(25) DEFAULT NULL,
  `cod_aeroporto` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `spazi_aerei`
--

INSERT INTO `spazi_aerei` (`identificativo_spazio`, `citta_inizio`, `aeroporto_inizio`, `citta_fine`, `aeroporto_fine`, `lunghezza`, `cod_aeroporto`) VALUES
(2, 'Alaska', 'Anchorage', 'Carolaina del nord', 'Charlotte', '78km', 1),
(21, 'Carolaina del nord', 'Charlotte', 'Alaska', 'Anchorage', '78km', 12);

-- --------------------------------------------------------

--
-- Struttura della tabella `voli`
--

CREATE TABLE `voli` (
  `cod_volo` varchar(9) NOT NULL,
  `cod_aereo` varchar(6) DEFAULT NULL,
  `Ora_partenza` datetime DEFAULT NULL,
  `Ora_arrivo` datetime DEFAULT NULL,
  `Data_volo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `voli`
--

INSERT INTO `voli` (`cod_volo`, `cod_aereo`, `Ora_partenza`, `Ora_arrivo`, `Data_volo`) VALUES
('4', '3', '2021-06-21 11:18:44', '2021-06-22 11:19:06', '2021-06-21'),
('41', '31', '2021-07-02 08:34:09', '2021-06-21 07:34:09', '2021-07-02'),
('42', '3', NULL, NULL, '2021-07-07'),
('43', '3', NULL, NULL, '2021-06-22');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `aerei`
--
ALTER TABLE `aerei`
  ADD PRIMARY KEY (`cod_aereo`),
  ADD KEY `aerei_ibfk_1` (`identificativo_spazio`);

--
-- Indici per le tabelle `aeroporti`
--
ALTER TABLE `aeroporti`
  ADD PRIMARY KEY (`cod_aeroporto`);

--
-- Indici per le tabelle `agenzie`
--
ALTER TABLE `agenzie`
  ADD PRIMARY KEY (`id_agenzia`);

--
-- Indici per le tabelle `biglietti`
--
ALTER TABLE `biglietti`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `biglietti_ibfk_1` (`cod_prenotazione`);

--
-- Indici per le tabelle `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id_paese`);

--
-- Indici per le tabelle `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indici per le tabelle `prenotazioni`
--
ALTER TABLE `prenotazioni`
  ADD PRIMARY KEY (`cod_prenotazione`),
  ADD KEY `prenotazioni_ibfk_1` (`id_agenzia`),
  ADD KEY `prenotazioni_ibfk_2` (`id_cliente`),
  ADD KEY `prenotazioni_ibfk_3` (`cod_volo`);

--
-- Indici per le tabelle `spazi_aerei`
--
ALTER TABLE `spazi_aerei`
  ADD PRIMARY KEY (`identificativo_spazio`),
  ADD KEY `spazi_aerei_ibfk_1` (`cod_aeroporto`);

--
-- Indici per le tabelle `voli`
--
ALTER TABLE `voli`
  ADD PRIMARY KEY (`cod_volo`),
  ADD KEY `voli_ibfk_1` (`cod_aereo`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `biglietti`
--
ALTER TABLE `biglietti`
  MODIFY `numero` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9038;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `aerei`
--
ALTER TABLE `aerei`
  ADD CONSTRAINT `aerei_ibfk_1` FOREIGN KEY (`identificativo_spazio`) REFERENCES `spazi_aerei` (`identificativo_spazio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `biglietti`
--
ALTER TABLE `biglietti`
  ADD CONSTRAINT `biglietti_ibfk_1` FOREIGN KEY (`cod_prenotazione`) REFERENCES `prenotazioni` (`cod_prenotazione`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `prenotazioni`
--
ALTER TABLE `prenotazioni`
  ADD CONSTRAINT `prenotazioni_ibfk_1` FOREIGN KEY (`id_agenzia`) REFERENCES `agenzie` (`id_agenzia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prenotazioni_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `clienti` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prenotazioni_ibfk_3` FOREIGN KEY (`cod_volo`) REFERENCES `voli` (`cod_volo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `spazi_aerei`
--
ALTER TABLE `spazi_aerei`
  ADD CONSTRAINT `spazi_aerei_ibfk_1` FOREIGN KEY (`cod_aeroporto`) REFERENCES `aeroporti` (`cod_aeroporto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `voli`
--
ALTER TABLE `voli`
  ADD CONSTRAINT `voli_ibfk_1` FOREIGN KEY (`cod_aereo`) REFERENCES `aerei` (`cod_aereo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
