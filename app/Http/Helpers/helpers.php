<?php

function format_uang($angka)
{
   return number_format($angka, 0, ',', '.');
}

// Eri Maulana.~
function terbilang($angka)
{
   $angka      = abs($angka);
   $baca       = [
      '',         // index 0
      'satu',     // index 1
      'dua',      // index 2
      'tiga',     // index 3
      'empat',    // index 4
      'lima',     // index 5
      'enam',     // index 6
      'tujuh',    // index 7
      'delapan',  // index 8
      'sembilan', // index 9
      'sepuluh',  // index 10
      'sebelas'   // index 11
   ];
   $terbilang  = '';

   if ($angka < 12) {
      // 0 sampai 11
      $terbilang = ' ' . $baca[$angka];
   } elseif ($angka < 20) {
      // 12 sampai 19
      $terbilang = terbilang($angka - 10) . ' belas';
   } elseif ($angka < 100) {
      // 20 sampai 99
      $terbilang = terbilang($angka / 10) . ' puluh' . terbilang($angka % 10);
   } elseif ($angka < 200) {
      // 100 sampai 199
      $terbilang = ' seratus' . terbilang($angka - 100);
   } elseif ($angka < 1000) {
      // 200 sampai 999
      $terbilang = terbilang($angka / 100) . ' ratus' . terbilang($angka % 100);
   } elseif ($angka < 2000) {
      // 1.000 sampai 1.999
      $terbilang = ' seribu' . terbilang($angka - 1000);
   } elseif ($angka < 1000000) {
      // 2.000 sampai 999.999
      $terbilang = terbilang($angka / 1000) . ' ratus' . terbilang($angka % 1000);
   } elseif ($angka < 1000000000) {
      // 1.000.000 sampai 999.999.999
      $terbilang = terbilang($angka / 1000000) . ' ratus' . terbilang($angka % 1000000);
   }

   return $terbilang;
}

function tanggal_indonesia($tgl, $tampil_hari = true)
{
   // '2024-01-06'
   $nama_hari  = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', "Jum'at", 'Sabtu');
   $nama_bulan = array(1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

   $tahun   = substr($tgl, 0, 4);
   $bulan   = $nama_bulan[(int) substr($tgl, 5, 2)];
   $tanggal = substr($tgl, 8, 2);
   $text    = '';

   if ($tampil_hari) {
      $urutan_hari = date('w', mktime(0, 0, 0, substr($tgl, 5, 2), $tanggal, $tahun));
      $hari        = $nama_hari[$urutan_hari];
      $text       .= "$hari, $tanggal $bulan $tahun";
   } else {
      $text       .= "$tanggal $bulan $tahun";
   }
   return $text;
}
