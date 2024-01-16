-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 15, 2024 at 02:46 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menaravo`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lamarrans`
--

CREATE TABLE `lamarrans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `posting_id` bigint(20) UNSIGNED NOT NULL,
  `ijazah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suratpemanggilan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lamarrans`
--

INSERT INTO `lamarrans` (`id`, `user_id`, `posting_id`, `ijazah`, `surat`, `keterangan`, `status`, `pembayaran`, `suratpemanggilan`, `created_at`, `updated_at`) VALUES
(13, 7, 6, 'ijazah/TjSSolfY1NRl4YuPV9xkiIxUVCjWff7mxFLkpXtG.doc', 'surat/4EgZPVFTB3jt42RsZhm130oxF8OIxOPcM8MeBh36.docx', 'https://drive.google.com/drive/folders/1gtmCGCpqcDSQ_EL8o5GEIDjs9JETFwOi', 'Lamaran selesai', 'pembayaran/M5xIspsqylhL4zLIYzyPoEPP15R0wRrg0eyv2U1J.doc', 'suratpemanggilan/7wIrvln71Cy84hOo0Gitfw9CfYrigpUPoZl7Q17k.docx', '2024-01-10 17:25:50', '2024-01-10 17:33:17'),
(15, 7, 6, 'ijazah/mPKtUyqSjkg1xevyMGHf3CMvC1ubc1u8n9TsL0Vf.doc', 'surat/ThYbXp7QSUB9xETb4apqLYpqdBWu2aDi6Qko3mVV.docx', 'https://drive.google.com/drive/folders/1TsEVh00JHMOb9jGBq8wxvFMVvP40gXaZ', 'Lamaran selesai', 'pembayaran/WIQ2kWJAIfullJINvSIpSfDnB6ssMCXhATQpdPnb.doc', 'suratpemanggilan/Wn2BITTcAjcIUPEdYXtSLk7Fm3cA21jtW9gLmOoS.docx', '2024-01-11 16:26:35', '2024-01-11 16:37:32'),
(24, 40, 9, 'ijazah/kTPTQAkPUsBPEeWDLaaZPaAetKe8Jp3V1gyNzQoO.docx', 'surat/pM6NGpwgePT9dQYP72frNfMQORFfPs1wTdSX91Lb.docx', 'tidak', 'sedang diproses', NULL, NULL, '2024-01-12 20:37:35', '2024-01-12 20:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(23, '2023_12_03_120107_create_profileusahas_table', 1),
(24, '2023_12_04_163452_create_pelamars_table', 1),
(25, '2023_12_04_163956_create_postingans_table', 1),
(26, '2023_12_05_091505_create_lamarans_table', 1),
(27, '2023_12_13_125512_create_postings_table', 1),
(28, '2023_12_17_001255_create_lamars_table', 2),
(29, '2023_12_18_224847_create_lamarrs_table', 3),
(30, '2023_12_25_023809_create_lamarrans_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelamars`
--

CREATE TABLE `pelamars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_lembaga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang_pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keahlian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelamars`
--

INSERT INTO `pelamars` (`id`, `user_id`, `gambar`, `asal_lembaga`, `jenjang_pendidikan`, `jk`, `ttl`, `alamat`, `status`, `keahlian`, `created_at`, `updated_at`) VALUES
(4, 7, '1705015226.jpg', 'Politeknik Negeri Bengkalis', 'D4 Rekayasa Perangkat Lunak', 'Perempuan', '2023-12-14', 'JL.H.Toyeb', 'Belum memiliki pengalaman kerja', 'Programmer', '2023-12-14 03:22:57', '2024-01-11 16:20:26'),
(17, 40, '1705116464.jpeg', 'smkn 3 bengkalis', 'tjkt', 'Laki-laki', '2007-09-10', 'jalan bantan desa senggoro', 'Belum memiliki pengalaman kerja', 'bisa mengkonfigurasikan mikrotik', '2024-01-12 20:27:44', '2024-01-12 20:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postings`
--

CREATE TABLE `postings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persyaratan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postings`
--

INSERT INTO `postings` (`id`, `user_id`, `foto`, `posisi`, `persyaratan`, `deskripsi`, `created_at`, `updated_at`) VALUES
(6, 16, '1702979345.png', 'Fullstack Programer', '1). Mengusai pemograman PHP, HTML, CSS, & JS\r\n2). Mengusai framework CI/Laravel, Boostrap/Tailwind\r\n3). Menguasai desain konten & copywriting', 'Untuk informasi dan pertanyaan lebih lanjut, bisa menghubungi kami di WA 085271243304', '2023-12-19 02:49:05', '2023-12-19 02:49:05'),
(9, 8, '1703421081.png', 'Marketing dan Penagihan', '• Pendidikan Min D3 sederajat\r\n• Usia maksimal 30 tahun\r\n• Freshgraduate/Berpengalaman sebagai Marketing/Collector\r\n• Memiliki Kendaraan Bermotor dan SIM C aktif\r\n• Menyukai Pekerjaan Lapangan', 'Dibuka lowongan kerja sebagai Supervisor Marketing / Marketing Staff / Field Collector Staff\r\nPenempatan Duri / Bengkalis\r\nSegera kirim lamaran anda ke email berikut :\r\nHr.sumbagut3@smsfinance.co.id\r\nAtau\r\nUntuk Info lebih lanjut silahkan hub no. berikut : 0815 3339 0829', '2023-12-24 05:31:21', '2023-12-24 05:31:21'),
(14, 35, '1705102359.jpg', 'Pegawai Laut ', '• Warga Negara Indonesia \r\n• Bersedia ditempatkan diseluruh Kapal Perintis yang dioperasikan PT PELNI (Persero) \r\n• Telah melaksanakan vaksin minimal dosis kedua dan melampirkan bukti vaksin \r\n• Sehat jasmani, rohani dan bebas narkoba \r\n• MCU(Medical Check Up yang dibuktikan dengan Sertifikat kesehatan standar BKKP minimal masih berlaku 1 tahun)', '• Bonus Bulanan\r\n• Penghasilan 6.000.000 S/D 10.000.000 /Bulan\r\n• Uang Makan& Transport 75.000 /Hari', '2024-01-12 16:32:39', '2024-01-12 16:32:39'),
(15, 36, '1705102943.jpeg', 'Programmer Unity ', '•Pria/Wanita, usia maksimal 20 tahun ke Atas Pendidikan minimal lulusan SMA, D1, D2, D3, S1, S2. semua jurusan \r\n•	Teliti dan pekerja keras Bersedia ditempatkan di wilayah kerja PT. Garuda Indonesia (Persero). \r\n•	Surat lamaran\r\n•	Daftar Riwayat Hidup. \r\n•	Foto Copy ijazah \r\n•	transkrip Fotokopi KTP Pasphoto ukuran 4 x 6 cm \r\n•	Nomer hp yang bisa di hubungi', '•	Bonus Bulanan\r\n•	Penghasilan 4.000.000 S/D 5.000.000 /Bulan\r\n•	Fasilitas tempat tinggal.', '2024-01-12 16:42:23', '2024-01-12 16:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `profileusahas`
--

CREATE TABLE `profileusahas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_bidang_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_perusahaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profileusahas`
--

INSERT INTO `profileusahas` (`id`, `user_id`, `gambar`, `jenis_bidang_perusahaan`, `alamat`, `kontak`, `deskripsi_perusahaan`, `visi`, `misi`, `created_at`, `updated_at`) VALUES
(3, 8, '1703688595.jpg', 'Industri Teknologi dan Komunikasi', 'Bengkalis', '082385272146', 'perusahaan yang berkembang pada bidang teknologi dan komunikasi', 'mewujudkan kinerja yang berkualitas di bidangnya.', 'bisa bersaing dengan industri lainnya', '2023-12-14 03:45:23', '2023-12-27 07:49:55'),
(4, 16, '1702978954.png', 'Software House dan Digital Agency', 'Wonosari, Kec. Bengkalis, Kabupaten Bengkalis, Riau 28713', '085271243304', 'CV Resam Solusi Tekno atau biasa disebut Resam Solutions merupakan perusahaan yang bergerak dalam bidang teknologi informasi dan multimedia yang memiliki layanan dalam pembuatan aplikasi mobile, desktop, dan website. Selain itu resam solutions juga aktif dalam menampilkan rubrik-rubrik informatif seputar teknologi masa kini di jejaring sosial media facebook, youtube, blog, dan instagram. Resam Solutions bertempat di Riau, dimana Riau sendiri merupakan Provinsi yang mulai berbenah diri dan beralih dari manual ke sistem yang terkomputerisasi. Berbekal pengetahuan dan pengalaman di bidang teknologi informasi dan passion besar di bidang Web Development, dan teknologi informasi lainnya, maka resam solutions didirikan. Kami selalu mengedepankan profesionalisme yang tinggi dan mengutamakan pelayanan yang baik & penuh cinta.', 'Menjadikan Resam Solutions sebagai perusahaan yang memiliki ide dan kreatifitas terbaik dalam bidang teknologi informasi dan multimedia yang akan menghasilkan karya berupa solusi dan inovasi teknologi masa kini', 'Mengedepankan profesionalitas, kemampuan individu, dan kerjasama tim yang berkualitas sehingga menghasilkan produk-produk teknologi masa kini.\r\nMeningkatkan ide-ide dan kreatifitas dalam bidang teknologi informasi dan multimedia.\r\nMemberikan solusi dan inovasi kepada klien dalam mengatasi permasalahan yang terjadi dalam bidang teknologi informasi sehingga dapat mengembangkan kerjasama dan meningkatkan kepercayaan.', '2023-12-19 02:42:34', '2023-12-19 02:42:34'),
(5, 18, '1703132324.png', 'Pertamina', 'Pekanbaru', '082385272146', 'perusahaan ini berkembang sejak tahun 1990', 'tidak ada', 'tidak aada', '2023-12-20 21:18:44', '2023-12-20 21:18:44'),
(6, 25, '1703593581.jpg', 'Teknologi Informasi dan KOmunikasi', 'Jl jendral Sudirman, Kecamatabn Bengkalis', '082283447726', 'Perusahaan Perseroan PT Telekomunikasi Indonesia Tbk disingkat PT Telkom Indonesia Tbk adalah sebuah badan usaha milik negara Indonesia yang bergerak di bidang teknologi informasi dan komunikasi.', 'Menjadi digital telco pilihan utama untuk memajukan masyarakat', '1. Mempercepat pembangunan Infrastruktur dan platform digital cerdas yang berkelanjutan, ekonomis, dan dapat diakses oleh seluruh masyarakat.\r\n2. Mengembangkan talenta digital unggulan yang membantu mendorong kemampuan digital dan tingkat adopsi digital bangsa.\r\n3. Mengorkestrasi ekosistem digital untuk memberikan pengalaman digital pelanggan terbaik', '2023-12-26 05:26:21', '2023-12-26 05:26:21'),
(7, 26, '1704686536.png', 'Indurtri', 'Jl. Lingkar II No. 32 Tembilahan', '082385272233', 'Perusahaan ini berjalan dalam bidang industri', 'menjadi perusahaan industri terpercaya dan terkemuka', '1. Membangun keunggulan operasional melalui pemanfaatan sistem teknologi informasi (data analitik) guna mendukung proses bisnis yang efisien dan inovatif\r\n2. Memastikan pemanfaatan aset secara optimal dan pembangunan infrastruktur pendukung relevan dengan investasi yang efektif\r\n3. Meninkatkan produktivitas, ketangkasan dan mutu kinerja SDM melalui pengembangan kapabilitas, dan kompetensi pegawai.', '2024-01-07 21:02:16', '2024-01-07 21:02:16'),
(8, 28, '1704940126.jpg', 'teknologi informasi dan komunikasi', 'JL. Pasar Baru, Sei. Pakning, Klp. Pati, Kec. Bengkalis, Kabupaten Bengkalis, Riau', '082180863539', 'PT Telkom Indonesia (Persero) Tbk (Telkom) adalah Badan Usaha Milik Negara (BUMN) yang bergerak di bidang jasa layanan teknologi informasi dan komunikasi (TIK) dan jaringan telekomunikasi di Indonesia. Pemegang saham mayoritas Telkom adalah Pemerintah Republik Indonesia sebesar 52.09%, sedangkan 47.91% sisanya dikuasai oleh publik. Saham Telkom diperdagangkan di Bursa Efek Indonesia (BEI) dengan kode “TLKM” dan New York Stock Exchange (NYSE) dengan kode “TLK”.', 'Menjadi digital telco pilihan utama untuk memajukan masyarakat', '1). Mempercepat pembangunan Infrastruktur dan platform digital cerdas yang berkelanjutan, ekonomis, dan dapat diakses oleh seluruh masyarakat.\r\n2). Mengembangkan talenta digital unggulan yang membantu mendorong kemampuan digital dan tingkat adopsi digital bangsa.\r\n3). Mengorkestrasi ekosistem digital untuk memberikan pengalaman digital pelanggan terbaik', '2024-01-10 19:28:46', '2024-01-10 19:28:46'),
(9, 31, '1705032894.png', 'teknologi informasi dan komunikasi', 'JL. Pasar Baru, Sei. Pakning', '082180863539', 'PT Telkom Indonesia (Persero) Tbk (Telkom) adalah Badan Usaha Milik Negara (BUMN) yang bergerak di bidang jasa layanan teknologi informasi dan komunikasi (TIK) dan jaringan telekomunikasi di Indonesia. Pemegang saham mayoritas Telkom adalah Pemerintah Republik Indonesia sebesar 52.09%, sedangkan 47.91% sisanya dikuasai oleh publik. Saham Telkom diperdagangkan di Bursa Efek Indonesia (BEI) dengan kode “TLKM” dan New York Stock Exchange (NYSE) dengan kode “TLK”.', 'Menjadi digital telco pilihan utama untuk memajukan masyarakat', '1). Mempercepat pembangunan Infrastruktur dan platform digital cerdas yang berkelanjutan, ekonomis, dan dapat diakses oleh seluruh masyarakat.\r\n2). Mengembangkan talenta digital unggulan yang membantu mendorong kemampuan digital dan tingkat adopsi digital bangsa.\r\n3). Mengorkestrasi ekosistem digital untuk memberikan pengalaman digital pelanggan terbaik', '2024-01-11 21:14:54', '2024-01-11 21:14:54'),
(10, 34, '1705101607.png', 'Distributor Mekanikal', 'Jln. Jend. Sudirman - Batam Kota', '082220039994', 'Distributor Elektronik dan Elektrikal komponen ( Inverter, PLC, IGBT, SCR, Transmitter, Sensor, Motor driver, ACB, MCCB, Power Supply, dll ) Distributor Mekanikal, Machinery/Equipment Parts ( Mesin Spare Parts, Motor, Encoder, Valve, Pneumatic, Controller, dll )', 'Menjadi digital telco pilihan utama untuk memajukan masyarakat', '1). Mempercepat pembangunan Infrastruktur dan platform digital cerdas yang berkelanjutan, ekonomis, dan dapat diakses oleh seluruh masyarakat.\r\n2). Mengembangkan talenta digital unggulan yang membantu mendorong kemampuan digital dan tingkat adopsi digital bangsa.\r\n3). Mengorkestrasi ekosistem digital untuk memberikan pengalaman digital pelanggan terbaik', '2024-01-12 16:20:07', '2024-01-12 16:20:07'),
(11, 35, '1705102103.png', 'jasa transportasi kapal laut', 'Batam, Kota Batam, Kepulauan Riau', '082283447790', 'PT Pelayaran Nasional Indonesia atau PT PELNI (Persero) adalah perusahaan pelayaran milik negara yang didirikan pada tanggal 28 April 1952 sesuai dengan Surat Keputusan Menteri Perhubungan No. M2/1/2 tanggal 28 April 1952. Perusahaan ini bergerak dibidang jasa transportasi kapal laut yang handal dan profesional dengan memberikan pelayanan terbaik bagi pelanggan.', 'Menjadi Perusahaan Pelayaran dan Logistik Maritim Terkemuka di Asia Tenggara', '1.	Menjamin aksesibilitas masyarakat dengan mengelola angkutan laut untuk menunjang terwujudnya Wawasan Nusantara\r\n2.	Mengelola dan mengembangkan usaha logistik maritim di Indonesia dan Asia Tenggara\r\n3.	Meningkatkan nilai perusahaan melalui kreativitas, inovasi, digitalisasi proses bisnis, dan pengembangan sumber daya manusia untuk mencapai pertumbuhan yang berkesinambungan\r\n4.	Menjalankan usaha secara adil dengan memperhatikan azas manfaat bagi semua pemangku kepentingan dengan menerapkan prinsip good corporate governance\r\n5.	Berkontribusi positif terhadap negara dan karyawan, serta berperan aktif dalam pembangunan lingkungan dan pelayanan kepada masyarakat', '2024-01-12 16:28:23', '2024-01-12 16:28:23'),
(12, 36, '1705102865.jpeg', 'Angkutan Niaga Industri', 'Dumai, Kota Dumai', '082283447790', 'Garuda Indonesia (PT Garuda Indonesia (Persero) Tbk; IDX: GIAA) adalah perusahaan maskapai penerbangan nasional Indonesia. Garuda diambil dari nama burung tunggangan Dewa Wisnu di dalam sebuah legenda pewayangan.', 'Menjadi kelompok penerbangan berkelanjutan dengan menghubungkan indonesia dan luar negeri saat memberikan perhotelan indonesia.', 'Penguatan fundamental bisnis melalui pertumbuhan pendapatan yang kuat, penerapan cost leadership, efektivitas organisasi dan penguatan sinergi kelompok dengan fokus pada standar keselamatan tinggi dan layanan berorientasi pelanggan yang diberikan oleh karyawan yang profesional & bersemangat', '2024-01-12 16:41:05', '2024-01-12 16:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `blokir` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `blokir`, `created_at`, `updated_at`) VALUES
(2, 'admin01', 'adminUlfa@gmail.com', '$2y$10$19zfv78nvlV1Cnj9EUy3quu6o.a/LM8pLHteJHpjOlDbp1Ono/91C', 'admin', 0, NULL, NULL),
(7, 'nurul liyana ulfa', 'nurulliyanaulfa@gmail.com', '$2y$10$SriFCnzOW.F7kVQbjaMeA.G2fR9plj3h21rzTiotc7ImTenN2fb82', 'user', 0, '2023-12-14 03:22:32', '2024-01-11 19:10:13'),
(8, 'PT Komunikasi', 'kakk@gmail.com', '$2y$10$KdPikci2w9Iay7sSssMtJ.DAjRrTI5NPhy55p.eF57ByCikwAtfs6', 'userPerusahaan', 0, '2023-12-14 03:41:24', '2023-12-27 07:49:55'),
(16, 'CV Resam Solusi', 'resamsolutions@gmail.com', '$2y$10$m8ps.2ighrpl7mldIp5cqeonisTR0pkYbBn.0oOS0ez4Vun1dbC9y', 'userPerusahaan', 0, '2023-12-19 02:34:43', '2023-12-19 02:34:43'),
(18, 'upa', 'adm@gmail.com', '$2y$10$DTENEDEsGFSsXl0ZKuEdheuT5w3wM9qsno4Mh4qIl4xQFEInilmXS', 'userPerusahaan', 0, '2023-12-20 21:06:58', '2023-12-20 21:06:58'),
(25, 'PT Telkom Indonesia', 'Telkom@gmail.com', '$2y$10$FCp3Q98IBChod48XxKgEr.idzAdPiD32Yv1ugLk6d44iBRO8oaEaS', 'userPerusahaan', 0, '2023-12-26 05:15:50', '2023-12-26 05:15:50'),
(26, 'CV Nanchaka Plus', 'NanchakaPlus@gmail.com', '$2y$10$QXLGijhDDqEit1faVoh5x.IQOU1RJiFaLx2hiuUmnJ1UslH9FHmYG', 'userPerusahaan', 0, '2024-01-07 20:52:33', '2024-01-07 20:52:33'),
(28, 'Telekomunikasi Indonesia', 'Telekomunikasi@gmail.com', '$2y$10$tf2Y5QxxSvkonXgNWamxyOFvREL87HAPZhAHdDaBcTma4TrWpMYHK', 'userPerusahaan', 0, '2024-01-10 19:26:49', '2024-01-10 19:26:49'),
(31, 'Telekomunikasi Indonesia (Telkom)', 'telkomm@gmail.com', '$2y$10$FU3qIedHC5N5h3zmRfx.Ye6Z8iEhkGnNv568QK3QInzPoVDiFyz6W', 'userPerusahaan', 0, '2024-01-11 21:13:36', '2024-01-11 21:13:36'),
(34, 'CV. TERAMITRA PERKASA', 'termitra@gmail.com', '$2y$10$QXQoMkPYOWgRe3l8XpVGOO.kL9WccJ5tR9QaCsx6k9aCtNUgGEqaW', 'userPerusahaan', 0, '2024-01-12 16:13:13', '2024-01-12 16:13:13'),
(35, 'Nama Perusahaan 	PT Pelayaran Nasional Indonesia', 'pelayaran@gmail.com', '$2y$10$F9KxNFCgJPS0TnZ1YI/luO.rszerM9LjApZemOVQVssRRUxXUW6ea', 'userPerusahaan', 0, '2024-01-12 16:25:06', '2024-01-12 16:25:06'),
(36, 'PT Garuda Indonesia', 'garuda@gmail.com', '$2y$10$m3Gf7kXP4LNyGe5ftrVHDeMn6kpHknethMWdTkJW5zBlTAxnpHfdy', 'userPerusahaan', 0, '2024-01-12 16:39:57', '2024-01-12 16:39:57'),
(40, 'muhammad amirul adli', 'fatwaa123@gmail.com', '$2y$10$Y9jc0hd3bk1PDqILCYjXnOK8cvGqoaJqmOLJ5HeYKe2f0HMD2pn..', 'user', 0, '2024-01-12 20:26:15', '2024-01-12 20:26:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lamarrans`
--
ALTER TABLE `lamarrans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lamarrans_user_id_foreign` (`user_id`),
  ADD KEY `lamarrans_posting_id_foreign` (`posting_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pelamars`
--
ALTER TABLE `pelamars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelamars_user_id_foreign` (`user_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `postings`
--
ALTER TABLE `postings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postings_user_id_foreign` (`user_id`);

--
-- Indexes for table `profileusahas`
--
ALTER TABLE `profileusahas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profileusahas_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lamarrans`
--
ALTER TABLE `lamarrans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pelamars`
--
ALTER TABLE `pelamars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postings`
--
ALTER TABLE `postings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `profileusahas`
--
ALTER TABLE `profileusahas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lamarrans`
--
ALTER TABLE `lamarrans`
  ADD CONSTRAINT `lamarrans_posting_id_foreign` FOREIGN KEY (`posting_id`) REFERENCES `postings` (`id`),
  ADD CONSTRAINT `lamarrans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `pelamars`
--
ALTER TABLE `pelamars`
  ADD CONSTRAINT `pelamars_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `postings`
--
ALTER TABLE `postings`
  ADD CONSTRAINT `postings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `profileusahas`
--
ALTER TABLE `profileusahas`
  ADD CONSTRAINT `profileusahas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
