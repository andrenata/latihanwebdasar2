-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 06 Nov 2019 pada 10.26
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisatabali`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(10) NOT NULL,
  `id_page` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `page`
--

CREATE TABLE `page` (
  `id` int(10) NOT NULL,
  `page_title` varchar(100) NOT NULL,
  `page_description` longtext NOT NULL,
  `page_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id` int(10) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_description` longtext NOT NULL,
  `post_image` varchar(200) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `post_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id`, `post_title`, `post_description`, `post_image`, `post_date`, `post_status`) VALUES
(6, 'Praesent metus tellus elementum eu', '<p>Nullam quis ante. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum. Nulla consequat massa quis enim. Nullam accumsan lorem in dui. Aliquam eu nunc.</p>\r\n\r\n<p>Maecenas nec odio et ante tincidunt tempus. Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Phasellus tempus. Sed mollis, eros et ultrices tempus, mauris ipsum aliquam libero, non adipiscing dolor urna a orci. Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus.</p>\r\n\r\n<p>Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Suspendisse non nisl sit amet velit hendrerit rutrum. Maecenas vestibulum mollis diam. Mauris sollicitudin fermentum libero.</p>\r\n', 'Kanto-Lampo-waterfall-Bali.jpg', '2019-10-02', 1),
(7, 'Spectacular Tibumana Water Bali', '<p>Aenean vulputate eleifend tellus. Nulla porta dolor. Etiam ultricies nisi vel augue. Vivamus aliquet elit ac nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.</p>\r\n\r\n<p>Etiam sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis venenatis ante odio sit amet eros. Pellentesque commodo eros a enim. Curabitur suscipit suscipit tellus. Fusce vel dui. Vestibulum dapibus nunc ac augue.</p>\r\n\r\n<p>Phasellus a est. Aenean viverra rhoncus pede. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum. Maecenas vestibulum mollis diam. In hac habitasse platea dictumst.</p>\r\n', 'Tibumana Waterfall.jpg', '2019-10-02', 1),
(8, 'Best View in Ubud Tegalalang Rice Terrace', '<p>Sed magna purus, fermentum eu, tincidunt eu, varius ut, felis. Donec sodales sagittis magna. Sed magna purus, fermentum eu, tincidunt eu, varius ut, felis. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Nam pretium turpis et arcu.</p>\r\n\r\n<p>Sed lectus. Praesent nec nisl a purus blandit viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Curabitur suscipit suscipit tellus. Ut varius tincidunt libero.</p>\r\n\r\n<p>Nullam accumsan lorem in dui. Curabitur at lacus ac velit ornare lobortis. Donec sodales sagittis magna. Nullam quis ante. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</p>\r\n\r\n<p>Pellentesque commodo eros a enim. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Proin sapien ipsum, porta a, auctor quis, euismod ut, mi. Nulla facilisi. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris.</p>\r\n', 'tour_img-1221379-145.jpg', '2019-10-02', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `page`
--
ALTER TABLE `page`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
