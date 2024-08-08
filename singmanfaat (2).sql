-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2023 pada 06.11
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `singmanfaat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `penerbit`, `isi`, `gambar`, `tanggal`) VALUES
(37, 'literally', 'Azmi', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus, id. Quae esse facere veniam ipsam tempore possimus autem! Consequuntur dolorem ex cumque rerum ipsam ea corporis obcaecati labore! Nisi vel ipsam ex, provident in nesciunt, ea commodi facere, sed officiis consequatur ab nemo eos rem iure. Mollitia tempora magnam vero architecto hic, expedita amet aliquam autem nihil incidunt vitae sunt eveniet voluptates a illum. Ipsum rem cum voluptatum consequuntur dolore quae, temporibus sequi corrupti non? Architecto velit, illo fuga magnam rerum magni? Nam illo eligendi nisi beatae nihil commodi reiciendis, est expedita officiis ut! Quisquam velit pariatur illum vero vel.\r\n\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam perspiciatis delectus tenetur! Temporibus sunt cum, accusamus maxime, consequuntur velit animi perferendis, iste aperiam mollitia eaque. Delectus unde, neque aliquam placeat, harum optio debitis non, fuga odit alias similique. Recusandae modi iusto consequuntur saepe sint nisi aliquam iste? Quo quisquam beatae molestiae corrupti praesentium non eveniet consequuntur tempora hic distinctio, nulla laborum ipsum accusantium ratione dicta nesciunt. Consequatur neque placeat minima. Non veritatis porro error tempore corrupti repudiandae? Praesentium iure quo cumque aut saepe animi recusandae. Hic fugiat, recusandae doloribus tempora architecto excepturi et nam iure laudantium illo, natus fuga esse error adipisci a. Numquam distinctio delectus dolorem blanditiis ab eligendi enim. Necessitatibus vitae veritatis non incidunt ipsa cumque, corrupti, voluptates et, ducimus similique maiores fugiat. Atque, eaque? Delectus dolorum error magni, ut quaerat nesciunt? Ipsam optio possimus, enim quam sit nostrum eveniet beatae consequatur inventore quisquam quaerat temporibus quia suscipit qui repudiandae aut officia ab perspiciatis consequuntur quidem mollitia ipsa. Ducimus a, rerum nostrum velit officia voluptatem eos reiciendis? Repellat rem reprehenderit nobis corrupti harum dicta unde deserunt illum consequatur dolorum voluptatem earum et eum, aspernatur quo consequuntur amet facilis, fuga eaque voluptatum perspiciatis tenetur alias at. Culpa, beatae iusto repellendus accusantium dolorem fugit, facere modi similique laboriosam tenetur dolorum? Minus sint, perferendis ipsam porro accusantium reiciendis delectus? Omnis sunt quidem, a inventore officia facere natus officiis repudiandae excepturi assumenda, ipsam velit magnam, voluptatem delectus? Et aliquid qui beatae, quaerat sunt dolores nisi eligendi dolorem sequi. Assumenda facilis adipisci dolorum aliquam nihil rem non officiis? Dolores labore officia optio explicabo adipisci animi illo minus incidunt consectetur nemo? Illum eos modi optio fuga, libero explicabo fugit quia animi voluptates ratione earum omnis pariatur facere natus dolores labore sunt delectus amet iure harum obcaecati sint! Velit aspernatur quidem et illo laborum dolorum.', 'IMG-63159fff41cee7.94163797.jpg', '2022-10-03'),
(38, 'Alam', 'Petrik', 'mawar itu biru, violet itu merah', 'IMG-6316a2db1bd993.62098856.jpg', '2021-07-13'),
(41, 'asassasasa', 'Chandra sat', 'wicis literally begitu be8i8niaoa', 'IMG-6316f4d8354945.08680968.jpg', '2022-09-09'),
(42, 'asasas', 'Ayanokouji', 'dasdwawsa', 'IMG-6316f4f6411ae2.31365575.jpg', '2022-09-09'),
(43, 'Alam', 'Chandra kun', 'alam itu hijau langit itu biru', 'IMG-6316f5aa382c18.14414391.jpg', '2022-09-23'),
(44, 'Ningen', 'Ayanokouji', 'ningen hanyalah alat', 'IMG-6316f61dabcf25.82999450.jpg', '2022-08-10'),
(45, 'Kayu Hutan', 'super_admin', 'Pengertian hasil hutan adalah semua yang diperoleh dari hutan yang digunakan oleh masyarakat dalam rangka pemenuhan kebutuhan manusia atau aktivitas komersial (jual-beli) guna meningkatkan taraf hidupnya.\r\n\r\nHutan terdiri sumber daya alam yang memberikan manfaat besar bagi kesejahteraan manusia. Sumber daya hutan dapat memberikan manfaat tangible yang dirasakan secara langsung, maupun intangible yang dirasakan secara tidak langsung.\r\n\r\nManfaat langsung seperti penyediaan kayu, satwa, dan hasil tambang. Sedangkan manfaat tidak langsung antara lain yaitu kegunaan rekreasi, perlindungan dan pengaturan tata air, pencegahan erosi.\r\n\r\nPemanfaatan hasil hutan yang memanfaatkan lahan hutan untuk mengambil hasil hutan berupa kayu atau non-kayu, termasuk jasa lingkungan secara maksimal untuk kesejahteraan masyarakat dengan tetap menjaga kelestarian hutan.\r\n\r\nKegiatan dari pemanfaatan hasil hutan ini dapat memberikan manfaat ekonomi, sosial, dan lingkungan secara maksimal dan terintegrasi sehingga tidak mengabaikan fungsi utama hutan.\r\n', 'IMG-635523582d87e7.57632649.jpg', '2022-10-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hhbk`
--

CREATE TABLE `hhbk` (
  `id` int(6) NOT NULL,
  `cdk` varchar(50) DEFAULT NULL,
  `nama_kelompok_tani_instasi` varchar(50) NOT NULL,
  `jumblah_anggota_tenaga_kerja` int(6) NOT NULL,
  `blok_alamat` varchar(50) NOT NULL,
  `desa` varchar(25) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `hhbk` varchar(50) NOT NULL,
  `satuan` varchar(25) NOT NULL,
  `link_map` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hhbk`
--

INSERT INTO `hhbk` (`id`, `cdk`, `nama_kelompok_tani_instasi`, `jumblah_anggota_tenaga_kerja`, `blok_alamat`, `desa`, `kecamatan`, `kabupaten`, `hhbk`, `satuan`, `link_map`) VALUES
(1, 'V', 'Lembur Kuring', 17, 'Kp. Gadog RT 05 RW 5', 'Pangauban', 'Cisurupan', 'Garut', 'Lebah Madu', 'Stup', '107.7772'),
(2, 'V', 'Mekar Wayu', 10, 'Kp. Cibuluh RT 004 RW 007', 'Cipancar', 'leles', 'Garut', 'Lebah Madu', 'Stup', '107.8785'),
(3, 'V', 'Mekar Rahayu', 15, 'Kp. Caringin RT 002 RW 011', 'Mekarmukti', 'Cilawu', 'Garut', 'Lebah Madu', 'Stup', '107.8789'),
(4, 'V', 'Muda Mandiri', 15, 'Kp. Ciduriat RT 002 RW 007', 'Depok', 'Pakenjeng', 'Garut', 'Lebah Madu', 'Stup', '107.6576'),
(5, 'V', 'KWT Mekar Sari', 15, 'Kp. Legok Pulus RT 01 RW 02', 'Sukakarya', 'Samarang', 'Garut', 'Lebah Madu', 'Stup', '107.8072'),
(6, 'V', 'Jaha ll', 16, 'Kp. Cimerak RT 01 RW 12', 'Saraga', 'Cibalong', 'Garut', 'Lebah Madu', 'Stup', '107.8177'),
(7, 'V', 'Duta Tani', 45, 'Babakan', 'Sukakarya', 'Banyuresmi', 'Garut', 'Bambu', 'Batang', '107.9115'),
(8, 'V', 'Usaha Mandiri', 25, 'Sukarasa', 'Sukarasa', 'Samarang', 'Garut', 'Jamur Kayu', 'Log', '107.8266'),
(9, 'V', 'Sangiang Lawang', 15, 'Kp. Sanghiang Lawang ', 'Parakan', 'Samarang', 'Garut', 'Lebah Madu', 'Stup', '107.7982'),
(10, 'V', 'Padaasih', 20, 'Kp. Pagedeng Girang RT 06 RW 04 Ds', 'Padamukti', 'Sukaresmi', 'Garut', 'Jamur Kayu', 'Log', '107.8228'),
(11, 'V', 'Sumerah', 16, 'Kp. Cigintung RT 04 RW 01', 'Sirnagalih', 'Cisurupan', 'Garut', 'Jamur Kayu', 'Log', '107.8052'),
(12, 'V', 'Paguyuban Vlll', 35, 'Kp. Rangon RT 002 RW 001', 'Sakaratu', 'Banyuresmi', 'Garut', 'Jamur Tiram', 'Log', '107.9455955'),
(13, 'V', 'Cibungur', 20, 'Kp. Ciseel RT 001 RW 005', 'Lingkungpasir', 'Cibiuk', 'Garut', 'Lebah Madu', 'Stup', '107.939157'),
(14, 'V', 'Sukasari Bangkit', 15, 'Kp. Cimareme', 'Cimareme', 'Banyuresmi', 'Garut', 'Jamur Tiram', 'Log', '107.9517898'),
(15, 'V', 'Sari Mukti', 15, 'Kp. Pasirlimus RT 05 RW 04', 'Dawungsari', 'Cilawu', 'Garut', 'Lebah Madu', 'Stup', '107.9002862'),
(16, 'V', 'Persatuan Pelestari Lebah Madu Garut', 15, 'Jl. Gunungsatria RT 6 RW 12', 'Kota Kulon', 'Garut Kota', 'Garut', 'Lebah Madu', '', '107.9045535'),
(17, 'V', 'Nurul Hikmah', 20, 'Kp. Ciherang RT 01 RW 06', 'Sarimukti', 'Pasirwangi', 'Garut', 'Jamur Tiram', '', '107.7735151'),
(18, 'V', 'Madu Darajat Berkah', 0, '', 'Karyamekar', 'Pasirwangi', 'Garut', 'Lebah Madu', '', '107.7562209'),
(19, 'V', 'Sadulur', 15, 'Kp. Wanakerta RT 01 RW 01', 'Wanamekar', 'Pangatikan', 'Garut', 'Lebah Madu', '', '107.98336'),
(20, 'V', 'Jaya Laksana', 15, 'Kp. Cisasak RT 02 RW 07', 'Cikarang', 'Cisewu', 'Garut', 'Lebah Madu', 'Stup', '107.45099'),
(21, 'V', 'Bitung Saduur', 28, 'Kp. Citulung RT 06 RW 01', 'Sukamulya', 'Talegong', 'Garut', 'Lebah Madu', 'Stup', '107.51678'),
(22, 'V', 'Sugih Mukti', 20, 'Kp. Ciheulang RT 03 RW 07 ', 'Mekarmulya', 'Talegong', 'Garut', 'Lebah Madu', 'Stup', '107.49414'),
(23, 'V', 'Sarasa', 15, 'Kp. Tarikkolot Legok RT 02 RW 06', 'Ngamplangsari', 'Cilawu', 'Garut', 'Jamur Kayu', 'kg', '107.90831'),
(24, 'V', 'Bukit Monteng', 28, 'Kp. Patrol RT 01 RW 07', 'Ibun', 'Ibun', 'Bandung', 'Lebah Madu', 'Stup', '107.77439'),
(25, 'V', 'Hutan Harapan', 20, 'Kp. NagregKendan RT 03 RW 09', 'Nagreg Kendan', 'Nagreg', 'Bandung', 'Lebah Madu', 'Stup', '107.90076'),
(26, 'V', 'Pakacangan', 15, 'Kp. Sanding RT 01 RW 12', 'Sindangsari', 'Paseh', 'Bandung', 'Jamur Kayu', 'Log', '107.77761'),
(27, 'V', 'Jamur Loa', 15, 'Kp. Babakan Loa RT 01 RW 01', 'Loa', 'Paseh', 'Bandung', 'Jamur Kayu', 'Log', '107.7855034'),
(28, 'V', 'Madu Bojong', 15, 'Kp. Pasirhuut RT/RW3/1', 'Bojong', 'Nagreg', 'Bandung', 'Lebah Madu', 'Stup', '107.8720443'),
(29, 'V', 'Petani Milenial', 18, 'Lebak Muncang', 'Lebak Muncang', 'Ciwidey', 'Bandung', 'Jamur Kayu', 'Log', '107.4387626'),
(30, 'V', 'Sauyunan', 12, '', 'Sukwening', 'Ciwidey', 'Bandung', 'Jamur Kayu', '', '107.45621');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hhhr`
--

CREATE TABLE `hhhr` (
  `id` int(10) NOT NULL,
  `cdk` varchar(50) NOT NULL,
  `nama_kelompok_tani` varchar(50) NOT NULL,
  `jumlah_anggota` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `desa` varchar(25) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `kabupaten` varchar(25) NOT NULL,
  `luas` varchar(25) NOT NULL,
  `tanaman` varchar(50) NOT NULL,
  `jenis_dari_tanaman` varchar(25) NOT NULL,
  `link_map` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hhhr`
--

INSERT INTO `hhhr` (`id`, `cdk`, `nama_kelompok_tani`, `jumlah_anggota`, `alamat`, `desa`, `kecamatan`, `kabupaten`, `luas`, `tanaman`, `jenis_dari_tanaman`, `link_map`) VALUES
(1, 'V', 'Raksa Sawargi', '20', 'Pasir Eurih 1, Pasir Eurih 2, Celak', 'Tenjolaya', 'Pasirjambu', 'Bandung', '11', 'Kebun Rakyat', 'Jeruk', 'https://www.google.com/maps/place/7%C2%B007\'33.1%22S+107%C2%B027\'42.8%22E/@-7.1258641,107.459703,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x816cbfa7804a29fd!8m2!3d-7.1258694!4d107.4618917?hl=id'),
(2, 'V', 'Sawargi', '25', 'Cikubang, Baruwangi, Ciheuleut, Ciheuleut 2', 'Margaluyu', 'Pangalengan', 'Bandung', '26', 'Hutan Rakyat, MPTS', 'Eucalypthus, Suren, Alpuk', 'https://www.google.com/maps/place/7%C2%B013\'28.1%22S+107%C2%B033\'14.7%22E/@-7.2244669,107.5518946,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x9a16d71a6c85237!8m2!3d-7.2244722!4d107.5540833?hl=id'),
(3, 'V', 'Mekar Tani', '30', 'Pasir Salam', 'Dampit', 'Cicalengka', 'Bandung', '10', 'Hutan Rakyat, MPTS', 'Manglid, Eucalyptus, Peta', '\0https://www.google.com/maps/place/7%C2%B007\'33.1%22S+107%C2%B051\'58.8%22E/@-7.1258641,107.8641307,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x40a78e0d9c1aea85!8m2!3d-7.1258694!4d107.8663194?hl=id'),
(4, 'V', 'Mekar Sari III', '20', 'Sampalan', 'Narawita', 'Cicalengka', 'Bandung', '10', 'Hutan Rakyat', 'Jati Putih', 'https://www.google.com/maps/place/7%C2%B013\'28.1%22S+107%C2%B051\'02.6%22E/@-7.2244669,107.8485363,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xc4550d875a9c961f!8m2!3d-7.2244722!4d107.850725?hl=id'),
(5, 'V', 'Tani Mukti', '30', 'Pasir Langir', 'Babakan Peuteuy', 'Cicalengka', 'Bandung', '10', 'Hutan Rakyat', 'Balsa, Manglid', 'https://www.google.com/maps/place/7%C2%B007\'33.1%22S+107%C2%B051\'36.7%22E/@-7.1258641,107.8580113,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xbdf9821046c0dc6f!8m2!3d-7.1258694!4d107.8602?hl=id'),
(6, 'V', 'Tani Mekar Harapan', '25', 'Pilar', 'Sirnajaya', 'Bungbulang', 'Garut', '25', 'Hutan Rakyat', 'Albazia', '\0https://www.google.com/maps/place/7%C2%B013\'28.1%22S+107%C2%B032\'19.3%22E/@-7.2244669,107.5365085,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xebcb0bd8483e400d!8m2!3d-7.2244722!4d107.5386972?hl=id'),
(7, 'V', 'Mekar Rahayu', '25', 'Kiarakoneng', 'Wangunjaya', 'Bungbulang', 'Garut', '25', 'Hutan Rakyat', 'Jati Putih, Albazia', '\0https://www.google.com/maps/place/7%C2%B007\'33.1%22S+107%C2%B030\'10.5%22E/@-7.1258641,107.5007196,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x7986a6b857d93101!8m2!3d-7.1258694!4d107.5029083?hl=id'),
(8, 'V', 'Winaya Mukti', '66', 'Cirarangan', 'Tegalega', 'Bungbulang', 'Garut', '25', '', '', 'https://www.google.com/maps/place/7%C2%B013\'28.1%22S+107%C2%B033\'27.5%22E/@-7.2244669,107.5554502,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xd82e060eb4cbcaf!8m2!3d-7.2244722!4d107.5576389?hl=id'),
(9, 'V', 'Sadulur', '20', 'Rokes', 'Margalaksana', 'Bungbulang', 'Garut', '25', 'Hutan Rakyat, MPTS', ' Albazia, Petai, Durian ', '\0https://www.google.com/maps/place/7%C2%B007\'33.1%22S+107%C2%B035\'34.5%22E/@-7.1258641,107.5907196,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x97639c0d6ffab293!8m2!3d-7.1258694!4d107.5929083?hl=id'),
(10, 'V', 'Sukatani', '', 'Lewiseeng', 'Jatisari', 'Cisompet', 'Garut', '42', 'Hutan Rakyat, MPTS', ' Albazia, Alpukat, Petai,', '\0https://www.google.com/maps/place/7%C2%B013\'28.1%22S+107%C2%B050\'53.7%22E/@-7.2244669,107.8460669,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x797c67a75cd01956!8m2!3d-7.2244722!4d107.8482556?hl=id'),
(11, 'V', 'Katomas', '', 'Singatuwuh', 'Jatisari', 'Cisompet', 'Garut', '27', '', '', '\0https://www.google.com/maps/place/7%C2%B007\'33.1%22S+107%C2%B051\'06.9%22E/@-7.1258641,107.8497252,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xa3b83a80885bfa4e!8m2!3d-7.1258694!4d107.8519139?hl=id'),
(12, 'V', 'Moja Jaya', '', 'Cibentang', 'Jatisari', 'Cisompet', 'Garut', '20', '', '', '\0https://www.google.com/maps/place/7%C2%B013\'28.1%22S+107%C2%B050\'55.6%22E/@-7.2244669,107.8465891,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x8a5e032574c74c9f!8m2!3d-7.2244722!4d107.8487778?hl=id'),
(13, 'V', 'Motekar', '', 'Datar Sempur', 'Jatisari', 'Cisompet', 'Garut', '11', '', '', 'https://www.google.com/maps/place/7%C2%B007\'33.1%22S+107%C2%B050\'25.0%22E/@-7.1258641,107.8380946,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x65cf8a8ccc959a4!8m2!3d-7.1258694!4d107.8402833?hl=id'),
(14, 'V', 'Mitrajaya', '', 'Geger Muncang', 'Kadongdong', 'Banjarwangi', 'Garut', '10', 'Hutan Rakyat, MPTS', ' Albizia, Alpukat ', 'https://www.google.com/maps/place/7%C2%B013\'28.1%22S+107%C2%B054\'14.9%22E/@-7.2244669,107.9019585,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xe67881355b7c78a!8m2!3d-7.2244722!4d107.9041472?hl=id'),
(15, 'V', 'Subur Lestari', '20', 'Cidawah', 'Padahurip', 'Banjarwangi', 'Garut', '', 'Hutan Rakyat, MPTS', ' Albizia, Alpukat ', '\0https://www.google.com/maps/place/7%C2%B007\'33.1%22S+107%C2%B054\'40.7%22E/@-7.1258641,107.9091169,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x994aa8fc5aa0626d!8m2!3d-7.1258694!4d107.9113056?hl=id'),
(16, 'V', 'Raksajaya ', '', 'Pasir Kincir', 'Bojong', 'Banjarwangi', 'Garut', '10', 'Hutan Rakyat, MPTS', ' Albizia, Alpukat ', '\0https://www.google.com/maps/place/7%C2%B013\'28.1%22S+107%C2%B052\'25.5%22E/@-7.2244669,107.8715613,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xcbe521e1ef019c28!8m2!3d-7.2244722!4d107.87375?hl=id'),
(17, 'V', 'Ciawitali', '', 'Ciawitali', 'Tanjungjaya', 'Banjarwangi', 'Garut', '10', 'Hutan Rakyat, MPTS', ' Albizia, Alpukat ', '\0https://www.google.com/maps/place/7%C2%B007\'33.1%22S+107%C2%B051\'29.2%22E/@-7.1258641,107.8559307,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xccec56432e2555e2!8m2!3d-7.1258694!4d107.8581194?hl=id'),
(18, 'V', 'Mitra Tani', '', 'Ciparay', 'Talagajaya ', 'Banjarwangi', 'Garut', '10', 'Hutan Rakyat, MPTS', ' Albizia, Alpukat ', '\0https://www.google.com/maps/place/7%C2%B013\'28.1%22S+107%C2%B054\'09.1%22E/@-7.2244669,107.9003391,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xe7954c8e00cafa7a!8m2!3d-7.2244722!4d107.9025278?hl=id'),
(19, 'V', 'Karya Tani III', '', 'Gombong', 'Surabaya', 'Blb. Limbangan', 'Garut', '10', '', '', '\0https://www.google.com/maps/place/7%C2%B007\'33.1%22S+107%C2%B056\'56.3%22E/@-7.1258641,107.9467807,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x3ffcf613f304fe04!8m2!3d-7.1258694!4d107.9489694?hl=id'),
(20, 'V', 'Giri Mukti ', '', 'Cikole', 'Cijolang', 'Blb. Limbangan', 'Garut', '10', '', '', '\0https://www.google.com/maps/place/7%C2%B013\'28.1%22S+107%C2%B056\'58.2%22E/@-7.2244669,107.9473057,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x2abfc15cf697cf6a!8m2!3d-7.2244722!4d107.9494944?hl=id'),
(21, 'V', 'Mekar Saluyu II', '', 'Neglasari', 'Pangeureunan', 'Blb. Limbangan', 'Garut', '10', 'Hutan Rakyat, MPTS', ' Suren, Jati Putih, Mangg', '\0https://www.google.com/maps/place/7%C2%B007\'33.1%22S+107%C2%B056\'56.3%22E/@-7.1258641,107.9467807,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x3ffcf613f304fe04!8m2!3d-7.1258694!4d107.9489694?hl=id'),
(22, 'V', 'Sinar Wangi', '', 'Pojok', 'Pasirwaru', 'Blb. Limbangan', 'Garut', '10', '', '', 'https://www.google.com/maps/place/7%C2%B013\'28.1%22S+107%C2%B057\'47.2%22E/@-7.2244669,107.9609113,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xfb1e7941ca47e939!8m2!3d-7.2244722!4d107.9631?hl=id'),
(23, 'V', 'Cipari Jaya', '', 'Cipari', 'Simpen Kaler', 'Blb. Limbangan', 'Garut', '10', '', '', 'https://www.google.com/maps/place/7%C2%B007\'33.1%22S+107%C2%B055\'12.0%22E/@-7.1258641,107.9178113,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x6cd1210a1a5c4f3c!8m2!3d-7.1258694!4d107.92?hl=id'),
(26, 'V', 'Pusaka Tani', '', 'Pasirpaisan', 'Pasirlangu', 'Pakenjeng', 'Garut', '5', '', '', '\0https://www.google.com/maps/place/7%C2%B013\'28.1%22S+107%C2%B038\'29.5%22E/@-7.2244669,107.6393307,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xc56798ca49ad3a0f!8m2!3d-7.2244722!4d107.6415194?hl=id'),
(27, 'V', 'Rimba Harapan', '', 'Tipar', 'Linggarjati', 'Pamulihan', 'Garut', '6', '', '', '\0https://www.google.com/maps/place/7%C2%B007\'33.1%22S+107%C2%B039\'10.0%22E/@-7.1258641,107.6505891,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x239f37f1f7e9a44d!8m2!3d-7.1258694!4d107.6527778?hl=id'),
(28, 'V', 'Setia Alam', '20', 'Cicariu', 'Pasirwangi', 'Pasirwangi', 'Garut', '5', '', '', '\0https://www.google.com/maps/place/7%C2%B013\'28.1%22S+107%C2%B047\'46.0%22E/@-7.2244669,107.7939224,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x7602dee2f0e65ba4!8m2!3d-7.2244722!4d107.7961111?hl=id'),
(29, 'V', 'Arum Sari', '76', 'Kamancingan', 'Sukakarya', 'Banyuresmi', 'Garut', '10', 'Hutan Rakyat', 'Balsa', '\0https://www.google.com/maps/place/7%C2%B007\'33.1%22S+107%C2%B055\'17.2%22E/@-7.1258641,107.9192641,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xf1aa5fed2d5f9d!8m2!3d-7.1258694!4d107.9214528?hl=id'),
(30, 'V', 'Mekar Sejahtera', '', 'Sekejengkol, Sukamaju', 'Cimekar', 'Cileunyi', 'Bandung', '6', '', '', '\0https://www.google.com/maps/place/7%C2%B013\'28.1%22S+107%C2%B044\'07.7%22E/@-7.2244669,107.7332835,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x1f75540a6a1e9e14!8m2!3d-7.2244722!4d107.7354722?hl=id'),
(31, 'V', 'Karya Tani Mandiri Utama', '', 'Batu Korsi', 'Citaman', 'Nagreg', 'Bandung', '6', 'MPTS', 'Jeruk California, Alpukat', '\0https://www.google.com/maps/place/7%C2%B007\'33.1%22S+107%C2%B053\'28.9%22E/@-7.1258641,107.8891724,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xedaf75078ed745d5!8m2!3d-7.1258694!4d107.8913611?hl=id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasling`
--

CREATE TABLE `jasling` (
  `id` int(10) NOT NULL,
  `cdk` varchar(50) NOT NULL,
  `pengelola` varchar(60) NOT NULL,
  `jumblah_anggota_tenaga_kerja` varchar(25) NOT NULL,
  `nama_lokasi_wisata_alam` varchar(50) NOT NULL,
  `jenis_jasa_lingkungan` varchar(25) NOT NULL,
  `fungsi_kawasan_hutan` varchar(25) NOT NULL,
  `kph` varchar(25) NOT NULL,
  `bkph` varchar(25) NOT NULL,
  `rph` varchar(25) NOT NULL,
  `desa` varchar(25) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `kabupaten` varchar(25) NOT NULL,
  `link_map` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jasling`
--

INSERT INTO `jasling` (`id`, `cdk`, `pengelola`, `jumblah_anggota_tenaga_kerja`, `nama_lokasi_wisata_alam`, `jenis_jasa_lingkungan`, `fungsi_kawasan_hutan`, `kph`, `bkph`, `rph`, `desa`, `kecamatan`, `kabupaten`, `link_map`) VALUES
(1, 'V', 'Perhutani dan LMDH Sawargi', '15', 'Situ Cibeureum', 'Wisata Alam', 'Hutan Produksi', 'Garut ', 'Bayongbong', 'Bayongbong', 'Sukalaksana', 'Samarang', 'Garut', 'A'),
(2, 'V', 'Perhutani dan LMDH Wanamukti', '20', 'Curug Cihanjawar', 'Wisata Alam', 'Hutan Produksi', 'Garut ', 'Bayongbong', 'Cisurupan', 'Sukamurni', 'Cilawu', 'Garut', '774145'),
(3, 'V', 'Perhutani dan LMDH Gandamekar (Moch. Safari)', '20', 'Papandayan Camping Ground', 'Wisata Alam', 'Hutan Produksi', 'Garut ', 'Bayongbong', 'Cisurupan', 'Sinarjaya', 'Cisurupan', 'Garut', '  7°18\'8.52\"S'),
(4, 'V', 'Perhutani dan LMDH Gandamekar (Yopi Purnama)', '20', 'Papandayan Leasure Park', 'Wisata Alam', 'Hutan Produksi', 'Garut ', 'Bayongbong', 'Cisurupan', 'Sinarjaya', 'Cisurupan', 'Garut', '  7°18\'4.24\"S'),
(5, 'V', 'Perhutani dan LMDH Gandamekar (Jajang)', '20', 'Dusun Kopi', 'Wisata Alam', 'Hutan Produksi', 'Garut ', 'Bayongbong', 'Cisurupan', 'Sinarjaya', 'Cisurupan', 'Garut', '  7°18\'10.22\"S'),
(6, 'V', 'Perhutani dan LMDH Gandamekar (Ahmad)', '20', 'Nangklak Stay Land', 'Wisata Alam', 'Hutan Produksi', 'Garut ', 'Bayongbong', 'Cisurupan', 'Sinarjaya', 'Cisurupan', 'Garut', '  7°18\'2.20\"S'),
(7, 'V', 'Perhutani dan LMDH Gandamekar (Aep)', '20', 'Bukit Nangklak', 'Wisata Alam', 'Hutan Produksi', 'Garut ', 'Bayongbong', 'Cisurupan', 'Sinarjaya', 'Cisurupan', 'Garut', '  7°18\'3.29\"S'),
(8, 'V', ' Perhutani dan LMDH Sinar Saluyu ', '20', ' Karacak Valley ', 'Wisata Alam', 'Hutan Produksi', 'Garut', 'Bayongbong', 'Bayongbong', 'Sukanegla', 'Garut Kota', 'Garut', ' 7°16\'15.19\"'),
(9, 'V', 'Perhutani dan KTH Bakti Wilaku', '20', 'Jalur pendakian Gn.Cikuray Via Pamancar', 'Wisata Alam', 'Hutan Produksi', 'Garut ', 'Bayongbong', 'Cilawu', 'Dayeuhmanggung', 'Cilawu', 'Garut', '  7°18\'24.61\"S'),
(10, 'V', 'Perhutani dan LMDH Hutan Lestari', '20', 'Curug Ngebul Kebon kopi banjarwangi', 'Wisata Alam', 'Hutan Produksi', 'Garut', 'Banjarwangi', 'Banjarwangi', 'Tanjungjaya', 'Banjarwangi', 'Garut', '  7°24\'49.40\"S'),
(11, 'V', 'Perhutani dan LMDH Wanaharja', '20', 'Pesona Leuweung Oko', 'Wisata Alam', 'Hutan Produksi', 'Garut', 'Cibatu', 'Malangbong', 'Cirapuhan ', 'Selaawi', 'Garut', '  6°59\'56.27\"S'),
(12, 'V', 'Perhutani dan LMDH Sawargi serta CV.Java Karya Wisata', '20', 'Kamojang Ecopark', 'Wisata Alam', 'Hutan Produksi', 'Garut ', 'Bayongbong', 'Bayongbong', 'SIsarua', 'Samarang', 'Garut', '  7° 9\'45.27\"S'),
(13, 'V', 'Perhutani dan karang Taruna', '20', 'Jalur pendakian Gn. Cikuray Via Cintanagara', 'Wisata Alam', 'Hutan Produksi', 'Garut ', 'Bayongbong', 'Bayongbong', 'Cintanagara', 'Bayongbong', 'Garut', '  7°18\'23.69\"S'),
(14, 'V', 'Perhutani dan LMDH Bukit Taman Langit', '20', 'Bukit Taman Langit', 'Wisata Alam', 'Hutan Produksi', 'Garut ', 'Bungbulang', 'Bungbulang', 'Wangunjaya', 'Bungbulang', 'Garut', '  7°26\'27.89\"S'),
(15, 'V', 'Perhutani dan LMDH Wana Jati', '20', 'Pesona Jati Ciwangi', 'Wisata Alam', 'Hutan Produksi', 'Garut ', 'Leles', 'Limbangan', 'Ciwangi', 'Balubur Limbangan', 'Garut', '  7° 0\'29.79\"S'),
(16, 'V', 'Perhutani dan LMDH Tani Mukti serta CV. Sugih Sajaya', '15', 'Taman Bunga Puncak kalang', 'Wisata Alam', 'Hutan Produksi', 'Garut ', 'Cibatu', 'Cibatu', 'Cinta', 'Karangtengah', 'Garut', ' 7°10\'33.58\"S'),
(17, 'V', 'Perhutani dan LMDH Sawargi serta CV.Garut Karya Wisata', '15', 'Kamojang Fillage', 'Wisata Alam', 'Hutan Produksi', 'Garut ', 'Bayongbong', 'Bayongbong', 'Sukakarya', 'Samarang', 'Garut', '7° 9\'51.11\"S');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `lvl` enum('I','II','III','IV','V','VI','VII','VIII','IX','SA') NOT NULL,
  `kabupaten_kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `pass`, `lvl`, `kabupaten_kota`) VALUES
(3, 'BGR', 'BGR', 'I', 'Kota-Bogor'),
(4, 'cdk2', 'cdk2', 'II', 'Kab-Subang'),
(5, 'cdk3', 'cdk3', 'III', 'Kab-Sukabumi'),
(6, 'cdk4', 'cdk4', 'IV', 'Kota-Cimahi'),
(7, 'cdk5', 'cdk5', 'V', 'Kab-Garut'),
(8, 'cdk6', 'cdk6', 'VI', 'Kab-Tasikmalaya'),
(9, 'cdk7', 'cdk7', 'VII', 'Kota-Banjar'),
(10, 'cdk8', 'cdk8', 'VIII', 'Kab-Cirebon'),
(11, 'cdk9', 'cdk9', 'IX', 'Kab-Indramayu'),
(12, 'super_admin', 'superadmin', 'SA', ''),
(17, 'GRT', 'GRT', 'V', 'Kab-Garut'),
(19, 'BDG', 'BDG', 'V', 'Kota-Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `youtube_video`
--

CREATE TABLE `youtube_video` (
  `id` int(10) NOT NULL,
  `youtube_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `youtube_video`
--

INSERT INTO `youtube_video` (`id`, `youtube_id`) VALUES
(10, 'hUqlSqHeGgc'),
(11, 'wZcRQOhGC1g'),
(12, 's9Iy0Jx1NVQ'),
(13, '1LdS8b5ur7M'),
(14, 'ZYTkp-YXNfY');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hhbk`
--
ALTER TABLE `hhbk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hhhr`
--
ALTER TABLE `hhhr`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jasling`
--
ALTER TABLE `jasling`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `youtube_video`
--
ALTER TABLE `youtube_video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `hhbk`
--
ALTER TABLE `hhbk`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `hhhr`
--
ALTER TABLE `hhhr`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `jasling`
--
ALTER TABLE `jasling`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `youtube_video`
--
ALTER TABLE `youtube_video`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
