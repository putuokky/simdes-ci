-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2017 at 09:31 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simdes`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `kode` int(11) NOT NULL,
  `agama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`kode`, `agama`) VALUES
(1, 'HINDU'),
(3, 'ISLAM'),
(4, 'BUDHA'),
(5, 'KRISTEN'),
(6, 'KATHOLIK');

-- --------------------------------------------------------

--
-- Table structure for table `kelahiran`
--

CREATE TABLE `kelahiran` (
  `no_surat_kelahiran` int(11) NOT NULL,
  `tgl_surat` date NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `anak_ke` varchar(5) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_kelahiran` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `kodelingkungan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelahiran`
--

INSERT INTO `kelahiran` (`no_surat_kelahiran`, `tgl_surat`, `nik`, `nama`, `anak_ke`, `jenis_kelamin`, `tempat_kelahiran`, `tgl_lahir`, `alamat`, `nama_ayah`, `nama_ibu`, `kodelingkungan`) VALUES
(3, '2017-05-19', '5171011401130002', 'NI PUTU DEVI SHRIMOZA SWASTIJAYATNI', '1', 'PEREMPUAN', 'Rumah Sakit', '2013-01-14', 'sesetan', 'RAI WIJAYA', 'NI LUH PUTU JUNI WIRATNI URIP', 4),
(4, '2017-05-19', '5171012106160002', 'ANAK AGUNG SAGUNG EKA RANIA ANANDA PUTRI', '1', 'PEREMPUAN', 'Rumah Sakit', '2016-06-21', 'sesetan', 'ANAK AGUNG NGURAH MADE CATUR BAWA', 'KADEK SUSI PARWATI', 2),
(5, '2017-05-20', '5171010105170002', 'Arya Maheswara', '1', 'LAKI-LAKI', 'Rumah Sakit', '2017-05-01', 'sesetan', 'ANAK AGUNG NGURAH MADE CATUR BAWA', 'LUH PANGGIL', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kematian`
--

CREATE TABLE `kematian` (
  `no_surat_kematian` int(11) NOT NULL,
  `tgl_surat` date NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tempat_meninggal` varchar(15) NOT NULL,
  `tgl_meninggal` date NOT NULL,
  `penyebab` varchar(100) NOT NULL,
  `kodelingkungan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kematian`
--

INSERT INTO `kematian` (`no_surat_kematian`, `tgl_surat`, `nik`, `nama`, `alamat`, `tempat_meninggal`, `tgl_meninggal`, `penyebab`, `kodelingkungan`) VALUES
(1, '2017-05-19', '5102084105870003', 'KADEK SUSI PARWATI', 'sesetan', 'Rumah Sakit', '2017-05-09', 'sakit', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lingkungan`
--

CREATE TABLE `lingkungan` (
  `kode` int(11) NOT NULL,
  `lingkungan` varchar(20) NOT NULL,
  `status_lingkungan` enum('Adat','Dinas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lingkungan`
--

INSERT INTO `lingkungan` (`kode`, `lingkungan`, `status_lingkungan`) VALUES
(1, 'KAJA', 'Adat'),
(2, 'TENGAH', 'Adat'),
(3, 'PEMBUNGAN', 'Adat'),
(4, 'GADUH', 'Adat'),
(5, 'PURI AGUNG', 'Adat'),
(6, 'LANTANG BEJUH', 'Adat'),
(7, 'DUKUH SARI', 'Adat'),
(8, 'PEGOK', 'Adat'),
(9, 'SUWUNG BATAN KENDAL', 'Adat'),
(10, 'ALAS ARUM', 'Dinas'),
(11, 'KARYA DHARMA', 'Dinas'),
(12, 'TAMAN SARI', 'Dinas'),
(13, 'TAMAN SUCI', 'Dinas'),
(14, 'KAMPUNG BUGIS', 'Dinas');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `kode` int(11) NOT NULL,
  `nip` varchar(30) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` enum('Admin','Pegawai','Kepala Lurah') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telpon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`kode`, `nip`, `nama`, `username`, `password`, `level`, `alamat`, `telpon`) VALUES
(1, '', 'Okky Maheswara', 'admin', 'admin', 'Admin', '', ''),
(2, '123334445', 'Arya Maheswata', 'pegawai', 'pegawai', 'Pegawai', 'sesetan', '0361'),
(3, '123456789', 'kepala lurah', 'lurah', 'lurah', 'Kepala Lurah', 'sesetan', '0986467');

-- --------------------------------------------------------

--
-- Table structure for table `mutasi_keluar`
--

CREATE TABLE `mutasi_keluar` (
  `no_surat_keluar` int(11) NOT NULL,
  `tgl_surat` date NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `tgl_pindah` date NOT NULL,
  `alamat_tujuan` varchar(100) NOT NULL,
  `dusun_baru` varchar(50) NOT NULL,
  `kelurahan_baru` varchar(50) NOT NULL,
  `kecamatan_baru` varchar(50) NOT NULL,
  `kabkota_baru` varchar(50) NOT NULL,
  `provinsi_baru` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `kodelingkungan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mutasi_keluar`
--

INSERT INTO `mutasi_keluar` (`no_surat_keluar`, `tgl_surat`, `nik`, `nama`, `alamat`, `no_surat`, `tgl_pindah`, `alamat_tujuan`, `dusun_baru`, `kelurahan_baru`, `kecamatan_baru`, `kabkota_baru`, `provinsi_baru`, `ket`, `kodelingkungan`) VALUES
(1, '2017-05-19', '5103026506820005', 'NI LUH PUTU JUNI WIRATNI URIP', 'sesetan', '', '2017-05-21', 'kediri', 'kediri', 'kediri', 'kediri', 'tabanan', 'bali', 'pindah', 4);

-- --------------------------------------------------------

--
-- Table structure for table `mutasi_masuk`
--

CREATE TABLE `mutasi_masuk` (
  `no_surat_pendatang` int(11) NOT NULL,
  `tgl_surat` date NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `tgl_datang` date NOT NULL,
  `alamat_asal` varchar(100) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `dusun_lama` varchar(50) NOT NULL,
  `kelurahan_desa_lama` varchar(50) NOT NULL,
  `kecamatan_lama` varchar(50) NOT NULL,
  `kabkota_lama` varchar(50) NOT NULL,
  `provinsi_lama` varchar(50) NOT NULL,
  `kodelingkungan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mutasi_masuk`
--

INSERT INTO `mutasi_masuk` (`no_surat_pendatang`, `tgl_surat`, `nik`, `nama`, `no_surat`, `tgl_datang`, `alamat_asal`, `tempat_lahir`, `tgl_lahir`, `dusun_lama`, `kelurahan_desa_lama`, `kecamatan_lama`, `kabkota_lama`, `provinsi_lama`, `kodelingkungan`) VALUES
(1, '2017-05-19', '5171012702980005', 'ANAK AGUNG NGURAH YOGA SUDHARMANA', '', '2017-05-17', 'Singaraja', 'Singaraja', '1998-02-27', 'Singaraja', 'Singaraja', 'Singaraja', 'Singaraja', 'Bali', 2),
(2, '2017-05-19', '5171010912950004', 'ANAK AGUNG NGURAH WIJAYA KESUMA', '', '2017-05-18', 'Singaraja', 'Singaraja', '1995-12-09', 'Singaraja', 'Singaraja', 'Singaraja', 'Singaraja', 'Bali', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `kode` int(11) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`kode`, `pekerjaan`) VALUES
(1, 'WIRASWASTA'),
(2, 'BURUH '),
(3, 'PELAJAR / MAHASISWA'),
(5, 'GURU'),
(6, 'NELAYAN'),
(7, 'BIDAN'),
(8, 'BELUM / TIDAK BEKERJA'),
(9, 'PENGACARA'),
(10, 'BIARAWATI'),
(11, 'KEPALA LURAH'),
(12, 'PERANGKAT DESA'),
(13, 'PEDAGANG'),
(14, 'PARANORMAL'),
(15, 'PIALANG'),
(16, 'SOPIR'),
(17, 'PENELITI'),
(18, 'PELAUT'),
(19, 'PENYIAR RADIO'),
(20, 'PENYIAR TELEVISI'),
(21, 'PSIKIATER / PSIKOLOG'),
(22, 'APOTEKER'),
(23, 'PERAWAT'),
(24, 'DOKTER'),
(25, 'KONSULTAN'),
(26, 'AKUNTAN'),
(27, 'ARSITEK'),
(28, 'NOTARIS'),
(29, 'PILOT'),
(30, 'DOSEN'),
(31, 'ANGGOTA DPRD KABUPATEN / KOTA'),
(32, 'ANGGOTA DPRD PROPINSI'),
(33, 'WAKIL WALIKOTA'),
(34, 'WALIKOTA'),
(35, 'WAKIL BUPATI'),
(36, 'BUPATI'),
(37, 'WAKIL GUBERNUR'),
(38, 'GUBERNUR'),
(39, 'DUTA BESAR'),
(40, 'ANGGOTA KABINET / KEMENTRIAN'),
(41, 'ANGGOTA MAHKAMAH KONSTITUSI'),
(42, 'WAKIL PRESIDEN'),
(43, 'PRESIDEN'),
(44, 'ANGGOTA BPK'),
(45, 'ANGGOTA DPD'),
(46, 'ANGGOTA DPR-RI'),
(47, 'PROMOTOR ACARA'),
(48, 'JURU MASAK'),
(49, 'USTADZ / MUBALIGH'),
(50, 'WARTAWAN'),
(51, 'PASTOR'),
(52, 'PENDETA'),
(53, 'IMAM MASJID'),
(54, 'PENTERJEMAH'),
(55, 'PERANCANG BUSANA'),
(56, 'PARAJI'),
(57, 'TABIB'),
(58, 'SENIMAN'),
(59, 'MEKANIK'),
(60, 'PENATA RAMBUT'),
(61, 'PENATA BUSANA'),
(62, 'PENATA RIAS'),
(63, 'TUKANG GIGI'),
(64, 'TUKANG JAHIT'),
(65, 'TUKANG LAS / PANDAI BESI'),
(66, 'TUKANG SOL SEPATU'),
(67, 'TUKANG KAYU'),
(68, 'TUKANG BATU'),
(69, 'TUKANG LISTRIK'),
(70, 'TUKANG CUKUR'),
(71, 'PEMBANTU RUMAH TANGGA'),
(72, 'BURUH PERIKANAN'),
(73, 'BURUH NELAYAN / PERIKANAN'),
(74, 'BURUH TANI / PERKEBUNAN'),
(75, 'BURUH HARIAN LEPAS'),
(76, 'KARYAWAN HONORER'),
(77, 'KARYAWAN BUMD'),
(78, 'KARYAWAN BUMN'),
(79, 'KARYAWAN SWASTA'),
(80, 'TRANSPORTASI'),
(81, 'KONTRUKSI'),
(82, 'INDUSTRI'),
(83, 'NELAYAN PERIKANAN'),
(84, 'PETERNAK'),
(85, 'PETANI / PEKEBUN'),
(86, 'PERDAGANGAN'),
(87, 'KEPOLISIAN RI (POLRI)'),
(88, 'TNI'),
(89, 'PNS'),
(90, 'PENSIUNAN'),
(91, 'MENGURUS RUMAH TANGGA');

-- --------------------------------------------------------

--
-- Table structure for table `penanda_tangan`
--

CREATE TABLE `penanda_tangan` (
  `kode` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `kode` int(11) NOT NULL,
  `pendidikan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`kode`, `pendidikan`) VALUES
(1, 'STRATA III'),
(2, 'STRATA II'),
(4, 'DIPLOMA IV / STRATA I'),
(5, 'AKADEMI / DIPLOMA III / SARJANA MUDA'),
(7, 'DIPLOMA I / II'),
(8, 'SLTA / SEDERAJAT'),
(10, 'SLTP / SEDERAJAT'),
(11, 'TAMAT SD / SEDERAJAT'),
(14, 'TIDAK / BELUM SEKOLAH'),
(15, 'BELUM TAMAT SD /  SEDERAJAT');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` varchar(20) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status_kawin` varchar(15) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `gol_darah` varchar(4) NOT NULL,
  `kodelingkungan` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `status_keluarga` varchar(20) NOT NULL,
  `status_penduduk` enum('HIDUP','MATI') NOT NULL,
  `status_no_kk` enum('ADA','TIDAK ADA') NOT NULL,
  `no_urut_kk` int(5) NOT NULL,
  `status_lahir` varchar(15) NOT NULL,
  `no_akta_lahir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`nik`, `no_kk`, `nama`, `alamat`, `tempat_lahir`, `tgl_lahir`, `agama`, `status_kawin`, `pendidikan`, `pekerjaan`, `gol_darah`, `kodelingkungan`, `jenis_kelamin`, `nama_ibu`, `nama_ayah`, `status_keluarga`, `status_penduduk`, `status_no_kk`, `no_urut_kk`, `status_lahir`, `no_akta_lahir`) VALUES
('', '', '', '', '', '0000-00-00', '- Pilih -', '- Pilih -', '- Pilih -', '- Pilih -', '- Pi', '- Pilih -', '- Pilih -', '', '', '- Pilih -', 'HIDUP', 'ADA', 0, 'LENGKAP', ''),
('5102084105870003', '', 'KADEK SUSI PARWATI', 'sesetan', 'Denpasar', '1987-05-01', 'HINDU', 'KAWIN', 'SLTA / SEDERAJAT', 'KARYAWAN SWASTA', '', '2', 'PEREMPUAN', 'GUSTI AYU PUTU SUKARNI', 'I GEDE NYOMAN SUJANA', '', 'MATI', 'ADA', 0, 'LENGKAP', ''),
('5171010105170002', '', 'Arya Maheswara', 'sesetan', 'Denpasar', '2017-05-01', 'KRISTEN', 'BELUM KAWIN', 'IDAK / BELUM SEKOLAH', 'BELUM / TIDAK BEKERJA', 'A', '3', 'LAKI-LAKI', 'LUH PANGGIL', 'ANAK AGUNG NGURAH MADE CATUR BAWA', '', 'HIDUP', 'TIDAK ADA', 0, 'LENGKAP', ''),
('5171010912950004', '5171010102160002', 'ANAK AGUNG NGURAH WIJAYA KESUMA', 'sesetan', 'Singaraja', '1995-12-09', 'HINDU', 'BELUM KAWIN', 'SLTA / SEDERAJAT', 'KARYAWAN SWASTA', 'O', '2', 'LAKI-LAKI', 'A.A OKA', 'A.A. NGURAH BAGUS', 'FAMILI LAIN', 'HIDUP', 'ADA', 0, 'LENGKAP', ''),
('5171011011570001', '5171010102130005', 'NYOMAN SUDIASA', 'sesetan', 'Denpasar', '1957-11-10', 'HINDU', 'KAWIN', 'BELUM TAMAT SD /  SEDERAJAT', 'PERDAGANGAN', 'B', '4', 'LAKI-LAKI', 'LUH PANGGIL', 'NYOMAN TAHER', 'ORANG TUA', 'HIDUP', 'ADA', 0, 'LENGKAP', ''),
('5171011401130002', '', 'NI PUTU DEVI SHRIMOZA SWASTIJAYATNI', 'sesetan', 'Denpasar', '2013-01-14', 'HINDU', 'BELUM KAWIN', 'IDAK / BELUM SEKOLAH', 'BELUM / TIDAK BEKERJA', '', '4', 'PEREMPUAN', 'NI LUH PUTU JUNI WIRATNI URIP', 'RAI WIJAYA', '', 'HIDUP', 'TIDAK ADA', 0, 'LENGKAP', ''),
('5171012005580002', '5171010102160002', 'A.A. NGURAH BAGUS', 'sesetan', 'Denpasar', '1958-05-20', 'HINDU', 'KAWIN', 'TAMAT SD / SEDERAJAT', 'WIRASWASTA', 'B', '2', 'LAKI-LAKI', 'A.A. SAYU ALIT', 'A.A. SALIT GD PUGEG', 'ORANG TUA', 'HIDUP', 'ADA', 0, 'LENGKAP', ''),
('5171012106160002', '', 'ANAK AGUNG SAGUNG EKA RANIA ANANDA PUTRI', 'sesetan', 'Denpasar', '2016-06-21', 'HINDU', 'BELUM KAWIN', 'IDAK / BELUM SEKOLAH', 'BELUM / TIDAK BEKERJA', '', '2', 'PEREMPUAN', 'KADEK SUSI PARWATI', 'ANAK AGUNG NGURAH MADE CATUR BAWA', '', 'HIDUP', 'TIDAK ADA', 0, 'LENGKAP', ''),
('5171012603840003', '5171010102160002', 'ANAK AGUNG NGURAH MADE CATUR BAWA', 'sesetan', 'Denpasar', '1985-03-26', 'HINDU', 'KAWIN', 'DIPLOMA IV / STRATA I', 'PNS', 'O', '2', 'LAKI-LAKI', 'A.A. OKA', 'A.A. NGURAH BAGUS', 'KEPALA KELUARGA', 'HIDUP', 'ADA', 0, 'LENGKAP', ''),
('5171012702980005', '5171010102160002', 'ANAK AGUNG NGURAH YOGA SUDHARMANA', 'sesetan', 'Singaraja', '1998-02-27', 'HINDU', 'BELUM KAWIN', 'DIPLOMA IV / STRATA I', 'KARYAWAN SWASTA', 'O', '2', 'LAKI-LAKI', 'A.A. OKA', 'A.A. NGURAH BAGUS', 'FAMILI LAIN', 'HIDUP', 'ADA', 0, 'LENGKAP', ''),
('5171012710880002', '5171010102130005', 'RAI WIJAYA', 'sesetan', 'Denpasar', '1988-10-27', 'HINDU', 'KAWIN', 'STRATA II', 'KARYAWAN HONORER', '', '4', 'LAKI-LAKI', 'NI KETUT SUCI', 'NYOMAN SUDIASA', 'KEPALA KELUARGA', 'HIDUP', 'ADA', 0, 'LENGKAP', ''),
('5171014808610008', '5171010102160002', 'A.A. OKA', 'sesetan', 'Denpasar', '1961-08-08', 'HINDU', 'KAWIN', 'TAMAT SD / SEDERAJAT', 'PERDAGANGAN', 'O', '2', 'PEREMPUAN', 'A.A. KETUT SANTUN', 'A.A. OKA MADU', 'ORANG TUA', 'HIDUP', 'ADA', 0, 'LENGKAP', ''),
('5171016507220001', '', 'LUH PANGGIL', 'sesetan', 'Denpasar', '1922-07-25', 'HINDU', 'KAWIN', 'TIDAK / BELUM SEKOLAH', 'MENGURUS RUMAH TANGGA', 'B', '4', 'PEREMPUAN', 'NI KETUT PERLIS (ALM)', 'GURU SADA (ALM)', '', 'HIDUP', 'TIDAK ADA', 0, 'LENGKAP', ''),
('5171016702950001', '', 'KRISNA', 'sesetan', 'Denpasar', '1995-02-27', 'HINDU', 'BELUM KAWIN', 'SLTP / SEDERAJAT', 'PELAJAR / MAHASISWA', 'B', '4', 'PEREMPUAN', 'NI KETUT SUCI', 'NYOMAN SUDIASA', '', 'HIDUP', 'TIDAK ADA', 0, 'LENGKAP', ''),
('5171036506610001', '5171010102130005', 'NI KETUT SUCI', 'sesetan', 'Tabanan', '1961-06-25', 'HINDU', 'KAWIN', 'BELUM TAMAT SD /  SEDERAJAT', 'PNS', 'O', '4', 'PEREMPUAN', 'KETUT BUNTER', 'KETUT MENYET', 'ORANG TUA', 'HIDUP', 'ADA', 0, 'LENGKAP', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`no_surat_kelahiran`);

--
-- Indexes for table `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`no_surat_kematian`);

--
-- Indexes for table `lingkungan`
--
ALTER TABLE `lingkungan`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `mutasi_keluar`
--
ALTER TABLE `mutasi_keluar`
  ADD PRIMARY KEY (`no_surat_keluar`);

--
-- Indexes for table `mutasi_masuk`
--
ALTER TABLE `mutasi_masuk`
  ADD PRIMARY KEY (`no_surat_pendatang`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `penanda_tangan`
--
ALTER TABLE `penanda_tangan`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `no_surat_kelahiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kematian`
--
ALTER TABLE `kematian`
  MODIFY `no_surat_kematian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lingkungan`
--
ALTER TABLE `lingkungan`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mutasi_keluar`
--
ALTER TABLE `mutasi_keluar`
  MODIFY `no_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mutasi_masuk`
--
ALTER TABLE `mutasi_masuk`
  MODIFY `no_surat_pendatang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `penanda_tangan`
--
ALTER TABLE `penanda_tangan`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
