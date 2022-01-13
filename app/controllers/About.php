<?php


class About
{
  // Method default
  public function index($nama = 'Faisal', $pekerjaan = 'Pelajar')
  {
    echo "Hallo, Nama saya $nama .. Saya adalah seorang $pekerjaan";
  }
  public function page()
  {
    echo ('About/page');
  }
}
