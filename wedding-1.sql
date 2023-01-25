-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Apr 2021 pada 22.58
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding-1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akad`
--

CREATE TABLE `akad` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akad`
--

INSERT INTO `akad` (`id`, `judul`, `jam`, `alamat`, `no_hp`, `image`, `link_maps`) VALUES
(1, 'akad nikah', '04:39', 'jl. medan - banda aceh ', '08587637', '14214347748_db9bfb6322_k.jpg', 'https://fontawesome.com/icons/handshake?style=solid'),
(2, 'Respsi', '04:49', 'jl. medan - banda aceh ', '085270894061', '14214358898_8eed03f1d6_k.jpg', 'https://fontawesome.com/icons/handshake?style=solid'),
(3, 'Temu Keluarga', '04:50', 'jl. medan - banda aceh ', '085270894061', '14214662727_11e5c719f7_k.jpg', 'https://fontawesome.com/icons/handshake?style=solid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner_1`
--

CREATE TABLE `banner_1` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `banner_1`
--

INSERT INTO `banner_1` (`id`, `nama`, `link`, `image`) VALUES
(1, 'Wedding-1', 'https://www.youtube.com/watch?v=dgiXPSCmUE4', 'tes11.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner_service`
--

CREATE TABLE `banner_service` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `dari` varchar(255) NOT NULL,
  `sampai` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `banner_service`
--

INSERT INTO `banner_service` (`id`, `nama`, `dari`, `sampai`, `link`, `image`) VALUES
(1, 'rudi', '2021-04-21', '2021-04-02', 'https://youtu.be/MxVvr4pxJG8', 'banner-26.jpg'),
(2, 'rudi', '2021-04-15', '2021-04-23', 'https://youtu.be/MxVvr4pxJG8', 'banner-12.jpg'),
(3, 'admin', '2021-04-13', '2021-04-23', 'https://youtu.be/MxVvr4pxJG8', 'banner-15.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner_service_utm`
--

CREATE TABLE `banner_service_utm` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `dari` varchar(255) NOT NULL,
  `sampai` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `banner_service_utm`
--

INSERT INTO `banner_service_utm` (`id`, `nama`, `dari`, `sampai`, `link`, `image`) VALUES
(1, 'rudi aja', '2021-04-15', '2021-04-30', 'https://youtu.be/MxVvr4pxJG8', 'banner-13.jpg'),
(2, 'Rudi Fathur', '2021-04-22', '2021-04-23', 'https://youtu.be/MxVvr4pxJG8', 'banner-14.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner_utama`
--

CREATE TABLE `banner_utama` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `banner_utama`
--

INSERT INTO `banner_utama` (`id`, `nama`, `link`, `image`) VALUES
(0, 'terima kasih', 'https://youtu.be/MxVvr4pxJG8', '14399848562_abaad23e7a_k.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `motto` varchar(255) NOT NULL,
  `pin_maps` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `embed_maps` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `judul`, `motto`, `pin_maps`, `telp`, `email`, `embed_maps`) VALUES
(1, 'Kantor Wedding', 'Kami tidak pernah meragukan pelanggan meski permintaannya aneh aneh', 'Jl. Medan - B Aceh', '08222222', 'serdaducoding@gmail.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.085402579957!2d98.65521031395298!3d3.5678199974035993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fd8fe72dc53:0x5a4cd7bac505e236!2sRumah Sakit Universitas Sumatera Utara!5e0!3m2!1sid!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hero_image`
--

CREATE TABLE `hero_image` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hero_image`
--

INSERT INTO `hero_image` (`id`, `nama`, `image`) VALUES
(6, 'Wedding-1', 'hero-1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hero_judul`
--

CREATE TABLE `hero_judul` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `paragraph` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hero_judul`
--

INSERT INTO `hero_judul` (`id`, `judul`, `text`, `paragraph`) VALUES
(1, 'بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم', 'بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم', '                                        Saling percaya dan saling cinta menjadi satu di antara kunci yang akan menyatukan pasangan selamanya. Perasaan cinta akan benar-benar dapat dibuktikan melalui sebuah pernikahan. bla bla bla                          ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hitung_mundur`
--

CREATE TABLE `hitung_mundur` (
  `id` int(11) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `hari` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hitung_mundur`
--

INSERT INTO `hitung_mundur` (`id`, `tahun`, `bulan`, `hari`) VALUES
(1, '2021', '10', '31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hub_kami`
--

CREATE TABLE `hub_kami` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `desk` varchar(255) NOT NULL,
  `wa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hub_kami`
--

INSERT INTO `hub_kami` (`id`, `judul`, `desk`, `wa`) VALUES
(1, 'Hubungi Kami sekarang', '                                                            Dapatkan segeran Promo dan harga khusus dibulan puasa ramadhan                    ', '                                                            https://wa.me/6285270894061?text=Saya tertarik dengan harga iklan pro yang disediakan                                                            ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `instagram`
--

CREATE TABLE `instagram` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `instagram`
--

INSERT INTO `instagram` (`id`, `nama`, `link`, `image`) VALUES
(1, 'ig-11', 'https://www.instagram.com/rudyfathur_alam/', 'wed-11.png'),
(2, 'ig-2', 'https://www.instagram.com/rudyfathur_alam/', 'wed-21.png'),
(3, 'ig-3', 'https://www.instagram.com/rudyfathur_alam/', 'wed-31.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laki-laki`
--

CREATE TABLE `laki-laki` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laki-laki`
--

INSERT INTO `laki-laki` (`id`, `nama`, `image`) VALUES
(1, 'alam rudi', '14214347748_db9bfb6322_k.jpg'),
(2, 'Rudi Fathur', '14214805748_41d9615733_k.jpg'),
(3, 'Rudi Fathur', '14214839668_c094232d97_k.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logo_web`
--

CREATE TABLE `logo_web` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `logo_web`
--

INSERT INTO `logo_web` (`id`, `nama`, `image`) VALUES
(1, 'Wedding Invitation', 'logo-3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_music` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `music`
--

INSERT INTO `music` (`id`, `nama`, `id_music`) VALUES
(1, 'wedding music', '66810925');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nama_mempelai`
--

CREATE TABLE `nama_mempelai` (
  `id` int(11) NOT NULL,
  `nama_lk` varchar(255) NOT NULL,
  `nama_pr` varchar(255) NOT NULL,
  `save_the_date` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `alamat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nama_mempelai`
--

INSERT INTO `nama_mempelai` (`id`, `nama_lk`, `nama_pr`, `save_the_date`, `tanggal`, `image`, `alamat`) VALUES
(3, 'rudi', 'anya', 'save the date ', '2021-04-14', 'hero-1.jpg', 'jl. medan - banda aceh ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `page_template`
--

CREATE TABLE `page_template` (
  `id` int(11) NOT NULL,
  `harga` varchar(128) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `version` varchar(255) NOT NULL,
  `included` varchar(255) NOT NULL,
  `demo` varchar(255) NOT NULL,
  `upload` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `page_template`
--

INSERT INTO `page_template` (`id`, `harga`, `slug`, `judul`, `url`, `image`, `created_at`, `updated_at`, `version`, `included`, `demo`, `upload`) VALUES
(1, 'IDR 500k', 'wedding-invitation-digital-1', 'Wedding Invitation Digital', 'index', 'wed-1.png', 1614105156, 1614105156, 'Reguler', 'File PHP, Codeigniter, JS, CSS', 'Tersedia', ''),
(2, 'IDR 350k', 'wedding-invitation-digital-2', 'Wedding Invitation Digital - 2', 'wedding_invitation_2', 'wed-2.png', 1614107365, 1614107365, 'Reguler', 'File PHP, Codeigniter, JS, CSS', 'Tersedia', ''),
(3, 'IDR 350k', 'wedding-invitation-digital-3', 'Wedding Invitation Digital - 3', 'wedding_invitation_3', 'wed-3.png', 1614158654, 1614158654, 'Reguler', 'File PHP, Codeigniter, JS, CSS', 'Tersedia', ''),
(4, 'IDR 350k', 'wedding-invitation-digital-4', 'Wedding Invitation Digital - 4', 'wedding_invitation_4', 'wed-4.png', 1614159738, 1614159738, 'Reguler', 'File PHP, Codeigniter, JS, CSS', 'Tersedia', ''),
(5, 'IDR 350k', 'wedding-invitation-digital-5', 'Wedding Invitation Digital - 5', 'wedding_invitation_5', 'wed-5.png', 1614159793, 1614159793, 'Reguler', 'File PHP, Codeigniter, JS, CSS', 'Tersedia', ''),
(6, 'IDR 500k', 'wedding-invitation-digital-6', 'Wedding Invitation Digital - 6', 'wedding/wedding_invitation_6', 'wed-6.png', 1614182489, 1614182489, 'Reguler', 'File PHP, Codeigniter, JS, CSS', 'Tersedia', '<p><img alt=\"\" src=\"http://localhost/weddingdigital/ckeditor/uploads/wed-2.png\" xss=removed></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/weddingdigital/ckeditor/uploads/wed-4.png\" xss=removed></p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pr`
--

CREATE TABLE `pr` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pr`
--

INSERT INTO `pr` (`id`, `nama`, `image`) VALUES
(1, 'nabila angga', '14214397640_d49d0e765d_k1.jpg'),
(2, 'nanda', '14397823931_a8e8cf3fa7_k.jpg'),
(3, 'alia', '14378154996_a9923cfa6f_k.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rsvp`
--

CREATE TABLE `rsvp` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hadir_tidak` varchar(255) NOT NULL,
  `makes` varchar(255) NOT NULL,
  `ucapan` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rsvp`
--

INSERT INTO `rsvp` (`id`, `nama`, `alamat`, `hadir_tidak`, `makes`, `ucapan`) VALUES
(1, 'Rudi Fathur', 'jl. medan - banda aceh ', 'Iya, Aku akan datang', 'ikan', 'selamat ya , semoga sakinah mawaddah warahmah'),
(2, 'Rudi Fathur', 'jl. medan - banda aceh ', 'Iya, Aku akan datang', 'ikan', 'selamat ya , semoga sakinah mawaddah warahmah'),
(3, 'rudi', 'jl, abc dek', 'Maaf, Aku tidak bisa hadir', 'daging', 'selamat dan sukses ya'),
(4, 'rudi', 'jl. abd', 'Iya, Aku akan datang', 'ikan', 'fgsfgsf'),
(5, 'rudi', 'jl. abd', 'Iya, Aku akan datang', 'ikan', 'zsfhfh'),
(6, 'rudi', 'jl. abd', 'Iya, Aku akan datang', 'ikan', 'dgfgf'),
(7, 'rudi', 'jl, abc dek', 'Iya, Aku akan datang', 'babi panggang karo', 'selamat ya , semoga ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `sosmed` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `fb_icon` varchar(255) NOT NULL,
  `ig` varchar(255) NOT NULL,
  `ig_icon` varchar(255) NOT NULL,
  `yt` varchar(255) NOT NULL,
  `yt_icon` varchar(255) NOT NULL,
  `wa` varchar(255) NOT NULL,
  `wa_icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `social_media`
--

INSERT INTO `social_media` (`id`, `nama`, `sosmed`, `icon`, `fb_icon`, `ig`, `ig_icon`, `yt`, `yt_icon`, `wa`, `wa_icon`) VALUES
(1, 'twitter', 'https://twitter.com/rudyfathur', 'fab fa-twitter', '', '', '', '', '', '', ''),
(2, 'facebook', 'https://www.facebook.com/rudyfathur', 'fab fa-facebook-square', '', '', '', '', '', '', ''),
(3, 'instagram', 'https://www.instagram.com/rudyfathur_alam/', 'fab fa-instagram', '', '', '', '', '', '', ''),
(0, 'Youtube', 'https://twitter.com/rudyfathur', 'fab fa-youtube', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `judul` varchar(125) NOT NULL,
  `image` varchar(255) NOT NULL,
  `main_image` int(1) NOT NULL,
  `group_image` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `upload`
--

INSERT INTO `upload` (`id`, `judul`, `image`, `main_image`, `group_image`, `date_created`) VALUES
(1, '', 'mymitsubishi.png', 0, 1, 1614096646),
(2, '', 'sib-medan.png', 0, 1, 1614096646),
(3, '', 'RSIA-stella.png', 1, 1, 1614096646),
(4, '', 'indomart-feb.jpg', 0, 2, 1614098440),
(5, '', 'isuzu-motor.jpg', 0, 2, 1614098440),
(6, '', 'lapis-feb.jpg', 0, 2, 1614098440),
(7, '', 'sujuya-feb.jpg', 1, 2, 1614098440);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `created_at`) VALUES
(1, 'rudi fathur', 'rudifathuralam@gmail.com', 'logocvcreatornew1.jpg', '$2y$10$QdbWUgQZcw8sIMe2MdspWu/xJAvH3RVUAiVxBQDhGy3XSONJwFDuK', 1, 1, 1604323682),
(2, 'junet', 'junet@gmail.com', 'foto_cv.jpg', '$2y$10$Ser3A96Ne3hcOApJ.rXyYOuxvVDqkhzevI0hxpF1h7djGoSlKhWzm', 2, 1, 1604339906),
(5, 'fathur', 'fathur@gmail.com', 'logocvcreatornew.jpg', '$2y$10$e.PyewDy6fWvsn.aTIK/HO0TJ/x2eCq6k616WZz/IeWlbU1MgJSpm', 2, 1, 1604694068),
(6, 'alam', 'alam@gmail.com', 'default.jpg', '$2y$10$ZOQYsKopRfX9yeA0Q7IFi.G4nnJf70K2IiKSia6Hsd.g7Xah5YtJ2', 2, 0, 1604778448),
(8, 'ucok', 'ucok@gmail.com', 'default.jpg', '$2y$10$dujEYAe0cZlzyZhQz1sHH.wpnMT5fkjjf7n2Cm7p9OqUivAVNpdJi', 2, 0, 1604782830),
(9, 'fathur', 'rudyfathur26@gmail.com', 'default.jpg', '$2y$10$rPWgehQum8HR/bxEShXFueeFfbYxbaStAHWNXxsDW6vfKHDqpi8ne', 2, 1, 1604782985),
(10, 'muhammad junaidi', 'junaidimuhammad009@gmail.com', 'default.jpg', '$2y$10$zVb8b4VOArgngHGCAUPrOe.4C84wXtKg3/IlPddCYQkOADU5qwS7y', 2, 0, 1604851880);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(13, 2, 5),
(14, 1, 5),
(15, 3, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-id-card', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(8, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-cog', 1),
(9, 2, 'Ganti Password', 'user/gantipassword', 'fas fa-fw fa-key', 1),
(19, 1, 'Slider Image', 'admin/slider_image', 'fas fa-fw fa-images', 1),
(20, 1, 'Social Media', 'admin/social_media', 'fas fa-fw fa-icons', 1),
(21, 1, 'Contact', 'admin/contact', 'far fa-fw fa-address-book', 1),
(22, 1, 'Hero Link', 'admin/hero_link', 'fas fa-fw fa-photo-video', 1),
(24, 5, 'Testimonial', 'testimonial/index', 'fas fa-fw fa-quote-right', 1),
(27, 1, 'Logo Web', 'admin/logo_web', 'fas fa-fw fa-photo-video', 1),
(29, 1, 'Mempelai', 'admin/mempelai', 'fas fa-fw fa-gifts', 1),
(30, 1, 'Wedding Detail', 'admin/wedding_detail', 'fas fa-fw fa-info-circle', 1),
(31, 1, 'Akad', 'admin/akad', 'fas fa-fw fa-handshake', 1),
(32, 1, 'Laki-laki', 'admin/laki', 'fas fa-fw fa-male', 1),
(33, 1, 'Perempuan', 'admin/perempuan', 'fas fa-fw fa-female', 1),
(34, 1, 'Hitung Mundur', 'admin/mundur', 'fas fa-fw fa-stopwatch-20', 1),
(35, 1, 'Terima Kasih', 'admin/thanks', 'fas fa-fw fa-handshake', 1),
(36, 1, 'Music', 'admin/music', 'fas fa-fw fa-music', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'ucok@gmail.com', 'dasTJyX6okph2M/KVwIayLiw+QNeMKxrL4AO3qjiTAc=', 1604782830),
(3, 'junaidimuhammad009@gmail.com', '9xm32nY530oR0yBTXvs+EGmdnig2d+PKYlUFoRfdFmM=', 1604851880);

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitor`
--

CREATE TABLE `visitor` (
  `ip` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visitor`
--

INSERT INTO `visitor` (`ip`, `date`, `hits`, `online`, `time`) VALUES
('::1', '2021-01-31', 38, '1612116883', '2021-01-31 16:53:32'),
('::1', '2021-02-02', 5, '1612296086', '2021-02-02 17:59:59'),
('::1', '2021-02-03', 5, '1612373921', '2021-02-03 17:38:02'),
('::1', '2021-02-04', 30, '1612475072', '2021-02-04 19:39:45'),
('::1', '2021-02-07', 6, '1612719909', '2021-02-07 18:30:58'),
('::1', '2021-02-21', 2, '1613934944', '2021-02-21 20:15:23'),
('::1', '2021-03-11', 183, '1615498017', '2021-03-11 13:40:05'),
('::1', '2021-03-12', 10, '1615573533', '2021-03-12 12:05:12'),
('::1', '2021-03-13', 13, '1615670927', '2021-03-13 15:11:26'),
('::1', '2021-03-14', 79, '1615743862', '2021-03-14 15:19:51'),
('::1', '2021-04-03', 78, '1617481949', '2021-04-03 12:14:11'),
('::1', '2021-04-04', 59, '1617551599', '2021-04-04 11:18:58'),
('::1', '2021-04-05', 162, '1617653314', '2021-04-05 09:59:44'),
('::1', '2021-04-06', 38, '1617725397', '2021-04-06 08:26:55'),
('::1', '2021-04-07', 2, '1617813544', '2021-04-07 17:00:21'),
('::1', '2021-04-08', 30, '1617907783', '2021-04-08 10:33:53'),
('::1', '2021-04-09', 1, '1617985706', '2021-04-09 18:28:26'),
('::1', '2021-04-10', 6, '1618074492', '2021-04-10 17:40:20'),
('::1', '2021-04-11', 23, '1618165599', '2021-04-11 07:20:56'),
('::1', '2021-04-12', 32, '1618259070', '2021-04-12 09:32:49'),
('::1', '2021-04-13', 2, '1618345822', '2021-04-13 17:50:45'),
('::1', '2021-04-14', 7, '1618430687', '2021-04-14 20:14:32'),
('::1', '2021-04-15', 5, '1618508111', '2021-04-15 18:12:43'),
('::1', '2021-04-16', 18, '1618606217', '2021-04-16 00:31:35'),
('::1', '2021-04-18', 3, '1618769464', '2021-04-18 19:47:03'),
('::1', '2021-04-19', 1, '1618857157', '2021-04-19 20:32:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wedding_detail`
--

CREATE TABLE `wedding_detail` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `text` varchar(500) NOT NULL,
  `paragraph` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wedding_detail`
--

INSERT INTO `wedding_detail` (`id`, `judul`, `text`, `paragraph`) VALUES
(1, 'wedding details', 'kapan & dimana', '                    kami harap anda melihat maps kami, kami akan mengadakan di 3 tempat berbeda, kami juga berharap anda membawa kado yang sangat banyak                     ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akad`
--
ALTER TABLE `akad`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banner_1`
--
ALTER TABLE `banner_1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hero_image`
--
ALTER TABLE `hero_image`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hero_judul`
--
ALTER TABLE `hero_judul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hitung_mundur`
--
ALTER TABLE `hitung_mundur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `instagram`
--
ALTER TABLE `instagram`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laki-laki`
--
ALTER TABLE `laki-laki`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `logo_web`
--
ALTER TABLE `logo_web`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nama_mempelai`
--
ALTER TABLE `nama_mempelai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `page_template`
--
ALTER TABLE `page_template`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pr`
--
ALTER TABLE `pr`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rsvp`
--
ALTER TABLE `rsvp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wedding_detail`
--
ALTER TABLE `wedding_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akad`
--
ALTER TABLE `akad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `banner_1`
--
ALTER TABLE `banner_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `hero_image`
--
ALTER TABLE `hero_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `hero_judul`
--
ALTER TABLE `hero_judul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `hitung_mundur`
--
ALTER TABLE `hitung_mundur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `instagram`
--
ALTER TABLE `instagram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `laki-laki`
--
ALTER TABLE `laki-laki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `logo_web`
--
ALTER TABLE `logo_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `nama_mempelai`
--
ALTER TABLE `nama_mempelai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `page_template`
--
ALTER TABLE `page_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pr`
--
ALTER TABLE `pr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rsvp`
--
ALTER TABLE `rsvp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `wedding_detail`
--
ALTER TABLE `wedding_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
