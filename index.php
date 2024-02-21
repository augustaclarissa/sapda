<?php
include_once("koneksi.php");
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Beranda</title>
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <link rel="stylesheet" href="./index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Open Sans:wght@700;800&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
  </head>

  <body>
    <div class="landing-page">
      <nav id="desktop-nav">
        <div class="tooltip"><div class="logo"><img src="./img/logo-sapda.png" alt=" logo SAPDA" /><span class="tooltiptext">Logo SAPDA</span></div></div>
        <div>
          <div class="nav-links">
            <div class="btn-container">
              <a href="index_coba.html"><button type="button" class="btn btn-color-1">Beranda</button></a>
              <a href="artikel.html"><button type="button" class="btn btn-color-2">Artikel</button></a>
              <a href="kegiatan.html"><button type="button" class="btn btn-color-2">Kegiatan</button></a>
              <a href="lowongan.html"><button type="button" class="btn btn-color-2">Lowongan</button></a>
              <a href="pusat-unduhan.html"><button type="button" class="btn btn-color-2">Pusat Unduhan</button></a>
              <a href="tentang.html"><button type="button" class="btn btn-color-2">Tentang</button></a>
              <a href="#" class="search-icon-frame">
                <span class="material-symbols-outlined small-icon">search</span>
              </a>
            </div>
          </div>
        </div>
      </nav>

      <div class="landing-detail">
        <h1 class="landing-title">SAPDA</h1>
        <p class="landing-description">
          Mewujudkan keadilan, kebebasan, kesejahteraan & kesetaraan untuk
          pemenuhan dan perlindungan hak perempuan, penyandang disabilitas dan
          anak didalam masyarakat inklusi atas dasar Hak Asasi Manusia.
        </p>
      </div>
    </div>

    <nav class="box nav-hack sidebar standalone-resource__sidebar " aria-labelledby="sidebar-header">
      <h2 id="sidebar-header" class="box-h " style="color: black;">Konten Beranda</h2>
       
       <div class="box-i">
           <ul>
           <li><a href="#konsul" style="font-size: 16px; font-weight: 1000;">Konsultasi Advokasi</a></li>
           <li><a href="#artikel" style="font-size: 16px; font-weight: 1000;">Artikel</a></li>
           <li><a href="#lowongan" style="font-size: 16px; font-weight: 1000;">Lowongan</a></li>
           <li><a href="#pusat-unduhan" style="font-size: 16px; font-weight: 1000;">Pusat Unduhan</a></li>
           <li><a href="#kegiatan" style="font-size: 16px; font-weight: 1000;">Kegiatan</a></li>
           </ul>
       </div>
     </nav>

    <div id="artikel" class="artikel-section-1">
    <div class="Konsultasi Advokasi">
      <h1 class="title">Konsultasi Advokasi</h1>
      <h2 style="color: black;">Jangan biarkan pertanyaan hukum menggantung tanpa jawaban. Waktunya bertindak! Konsultasikan masalah hukum Anda hari ini untuk langkah yang lebih baik. Klik di sini untuk mengatur konsultasi advokasi hukum dan mulailah perjalanan menuju penyelesaian yang adil dan bijaksana</h2>
      <a href="https://api.whatsapp.com/send/?phone=6281327395399&text&type=phone_number&app_absent=0"><button class="btn-3 btn-color-3" style="font-size: 20px; margin-top: 20px;">Hubungi Kami!</button></a>
    </div>
    </div>

    <div id="artikel" class="artikel-section-1">
      <h1 class="title">Artikel</h1>
      <div class="artikel-container">
        <div class="slide-container swiper">
          <div class="slide-content">
              <div class="card-wrapper swiper-wrapper">
                  <div class="card swiper-slide">
                      <div class="image-content">
                          <div class="card-image">
                              <img src="img/implementasi-uu-tpks.jpg" alt="Salah satu peserta lokakarya, jurnalis dari media Merdeka, sedang mempresentasikan hasil diskusi kelompok" class="card-img">
                          </div>
                          <h2 class="card-content">
                            Implementasi UU TPKS Pada Kasus Disabilitas Masih Menyisakan Catatan
                          </h2>
                          <div class="btn-container">
                              <a href="article.html"><button type="button" class="btn-3 btn-color-3" style="font-size: 20px; background-color: #0010A2; color: white;">
                                Baca Selengkapnya
                              </button></a>
                            </div>
                      </div>
                  </div>
                  <div class="card swiper-slide">
                      <div class="image-content">
                          <div class="card-image">
                              <img src="img/usia-mental.jpg" alt="Forum Grup Diskusi" class="card-img">
                          </div>
                          <h2 class="card-content">
                              Usia Mental & Kecakapan Hukum Disabilitas Perlu Diatur dalam Peraturan Mahkamah Agung
                          </h2>
                          <div class="btn-container">
                              <a href="article.html"><button type="button" class="btn-3 btn-color-3" style="font-size: 20px; background-color: #0010A2; color: white;">
                                Baca Selengkapnya
                              </button></a>
                            </div>
                      </div>
                  </div>
                  <div class="card swiper-slide">
                      <div class="image-content">
                          <div class="card-image">
                              <img src="img/kasus-kekerasan-disabilitas-harus-tercatat.png" alt="Direktur SAPDA Nurul Saadah Andriani sedang memaparkan rencana inisiasi penyusunan Catahu Nasional penanganan kekerasan berbasis gender dan disabilitas" class="card-img">
                          </div>
                          <h2 class="card-content">
                              Kasus Kekerasan Disabilitas Harus Tercatat
                          </h2>
                          <div class="btn-container">
                              <a href="article.html"><button type="button" class="btn-3 btn-color-3" style="font-size: 20px; background-color: #0010A2; color: white;">
                                Baca Selengkapnya
                              </button></a>
                            </div>
                      </div>
                  </div>
                  <div class="card swiper-slide">
                      <div class="image-content">
                          <div class="card-image">
                              <img src="img/rambu-rambu.png" alt="Ilustrasi Jurnalis Mewawancarai Disabilitas" class="card-img">
                          </div>
                          <h2 class="card-content">
                            Rambu-rambu yang Perlu Diperhatikan dalam Meliput Isu Disabilitas
                          </h2>
                          <div class="btn-container">
                              <a href="article.html"><button type="button" class="btn-3 btn-color-3" style="font-size: 20px; background-color: #0010A2; color: white;">
                                Baca Selengkapnya
                              </button></a>
                            </div>
                      </div>
                  </div>
                  <div class="card swiper-slide">
                      <div class="image-content">
                          <div class="card-image">
                              <img src="img/aji-bersama-sapda.jpg" alt="Simbol Perlawanan terhadap Kekerasan" class="card-img">
                          </div>
                          <h2 class="card-content">
                            AJI Bersama SAPDA Gelar Diskusi Jurnalisme Berbasis Disabilitas
                          </h2>
                          <div class="btn-container">
                              <a href="article.html"><button type="button" class="btn-3 btn-color-3" style="font-size: 20px; background-color: #0010A2; color: white;">
                                Baca Selengkapnya
                              </button></a>
                            </div>
                      </div>
                  </div>
                  <div class="card swiper-slide">
                      <div class="image-content">
                          <div class="card-image">
                              <img src="img/implementasi-pengadilan-inklusif-butuh-banyak-dukungan.jpg" alt="8 Orang berdiskusi" class="card-img">
                          </div>
                          <h2 class="card-content">
                            Implementasi Pengadilan Inklusif Butuh Banyak Dukungan
                          </h2>
                          <div class="btn-container">
                              <a href="article.html"><button type="button" class="btn-3 btn-color-3" style="font-size: 20px; background-color: #0010A2; color: white;">
                                Baca Selengkapnya
                              </button></a>
                            </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="swiper-button-next" style="background-color: white; width: 50px; height: 50px; border-radius: 100%; color: #0010A2; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></div>
          <div class="swiper-button-prev" style="background-color: white; width: 50px; height: 50px; border-radius: 100%; color: #0010A2; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></div>
          <div class="swiper-button-pagination" style="background-color: white;"></div>
      </div>
      </div>
    </div>

    <div id="lowongan" class="artikel-section-1">
      <h1 class="title">Lowongan</h1>
      <div class="artikel-container">
        <div class="slide-container swiper">
          <div class="slide-content">
              <div class="card-wrapper swiper-wrapper">
                  <div class="card swiper-slide">
                      <div class="image-content">
                          <div class="card-image">
                              <img src="./img/Lowongan-Konselor-Psikologi.png" alt="Salah satu peserta lokakarya, jurnalis dari media Merdeka, sedang mempresentasikan hasil diskusi kelompok" class="card-img">
                          </div>
                          <h2 class="card-content">
                            Lowongan Konselor Psikologis SAPDA
                          </h2>
                          <div class="btn-container">
                              <a href="article.html"><button type="button" class="btn-3 btn-color-3" style="font-size: 20px; background-color: #0010A2; color: white;">
                                Baca Selengkapnya
                              </button></a>
                            </div>
                      </div>
                  </div>
                  <div class="card swiper-slide">
                      <div class="image-content">
                          <div class="card-image">
                              <img src="./img/Lowongan-Staff-WDCC.png" alt="Forum Grup Diskusi" class="card-img">
                          </div>
                          <h2 class="card-content">
                            Staff Women Disability Crisis Center
                          </h2>
                          <div class="btn-container">
                              <a href="article.html"><button type="button" class="btn-3 btn-color-3" style="font-size: 20px; background-color: #0010A2; color: white;">
                                Baca Selengkapnya
                              </button></a>
                            </div>
                      </div>
                  </div>
                  <div class="card swiper-slide">
                      <div class="image-content">
                          <div class="card-image">
                              <img src="./img/Lowongan-Konselor-Hukum.jpg" alt="Direktur SAPDA Nurul Saadah Andriani sedang memaparkan rencana inisiasi penyusunan Catahu Nasional penanganan kekerasan berbasis gender dan disabilitas" class="card-img">
                          </div>
                          <h2 class="card-content">
                            Konselor Hukum SAPDA
                          </h2>
                          <div class="btn-container">
                              <a href="article.html"><button type="button" class="btn-3 btn-color-3" style="font-size: 20px; background-color: #0010A2; color: white;">
                                Baca Selengkapnya
                              </button></a>
                            </div>
                      </div>
                  </div>
                  <div class="card swiper-slide">
                      <div class="image-content">
                          <div class="card-image">
                              <img src="img/rambu-rambu.png" alt="Ilustrasi Jurnalis Mewawancarai Disabilitas" class="card-img">
                          </div>
                          <h2 class="card-content">
                            Staff Database SAPDA
                          </h2>
                          <div class="btn-container">
                              <a href="article.html"><button type="button" class="btn-3 btn-color-3" style="font-size: 20px; background-color: #0010A2; color: white;">
                                Baca Selengkapnya
                              </button></a>
                            </div>
                      </div>
                  </div>
                  <div class="card swiper-slide">
                      <div class="image-content">
                          <div class="card-image">
                              <img src="img/implementasi-uu-tpks.jpg" alt="Simbol Perlawanan terhadap Kekerasan" class="card-img">
                          </div>
                          <h2 class="card-content">
                            Pengumuman Seleksi Tahap 1 Calon Konselor Psikologis SAPDA
                          </h2>
                          <div class="btn-container">
                              <a href="article.html"><button type="button" class="btn-3 btn-color-3" style="font-size: 20px; background-color: #0010A2; color: white;">
                                Baca Selengkapnya
                              </button></a>
                            </div>
                      </div>
                  </div>
                  <div class="card swiper-slide">
                      <div class="image-content">
                          <div class="card-image">
                              <img src="img/implementasi-pengadilan-inklusif-butuh-banyak-dukungan.jpg" alt="8 Orang berdiskusi" class="card-img">
                          </div>
                          <h2 class="card-content">
                            Pengumuman Seleksi Tahap 1 Calon Konselor Psikologis SAPDA
                          </h2>
                          <div class="btn-container">
                              <a href="article.html"><button type="button" class="btn-3 btn-color-3" style="font-size: 20px; background-color: #0010A2; color: white;">
                                Baca Selengkapnya
                              </button></a>
                            </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="swiper-button-next" style="background-color: white; width: 50px; height: 50px; border-radius: 100%; color: #0010A2; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></div>
          <div class="swiper-button-prev" style="background-color: white; width: 50px; height: 50px; border-radius: 100%; color: #0010A2; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></div>
          <div class="swiper-button-pagination" style="background-color: white;"></div>
      </div>
      </div>
    </div>
        </div>
      </div>
    

    <div id="pusat-unduhan" class="unduhan-section">
      <h1 class="title-unduhan">Pusat Unduhan</h1> 
      <a href="pusat-unduhan.html"><button class="btn-3 btn-color-3" style="margin-left: 820px; margin-bottom: 30px; font-size: 20px;">Lihat Selengkapnya</button></a>
      <div class="unduhan-container">
        <div class="frame-unduhan-1">
          <div class="ui-iconarrow-downlight-wrapper">
            <span class="material-symbols-outlined">arrow_right_alt</span>
          </div>
          <h2>
            Riset Situasi <br />
            Perlindungan Anak Penyandang Disabilitas <br />
            di Daerah Istimewa Yogyakarta
          </h2>
        </div>

        <div class="frame-unduhan-2">
          <div class="ui-iconarrow-downlight-wrapper">
            <span class="material-symbols-outlined">arrow_right_alt</span>
          </div>
          <h2>
            Buletin SAPDA Edisi 27: <br />
            Peran Perempuan <br />
            Difabel Dalam <br />
            Masyarakat
          </h2>
        </div>
      </div>

      <div class="unduhan-container">
        <div class="frame-unduhan-3">
          <div class="ui-iconarrow-downlight-wrapper">
            <span class="material-symbols-outlined">arrow_right_alt</span>
          </div>
          <h2>
            Buletin SAPDA <br />
            Edisi 26: Mengembangkan Potensi Difabel
          </h2>
        </div>

        <div class="frame-unduhan-4">
          <div class="ui-iconarrow-downlight-wrapper">
            <span class="material-symbols-outlined">arrow_right_alt</span>
          </div>
          <h2>Buletin SAPDA Edisi 29: Belajar Kesehatan Reproduksi</h2>
        </div>
      </div>

      
    </div>

    <div id="kegiatan" class="kegiatan-section">
      <h1 class="title-kegiatan">Kegiatan</h1>
      <h1 class="description-kegiatan">SAPDA Menyediakan Layanan Konseling <br/> Rumah Cakap Bermartabat</h1>
      <div class="union-parent">
        <iframe class="union-icon" alt="" width="560" height="315" src="https://www.youtube.com/embed/Xzy7h-du8-0?si=iGiLIDfakNlCJfr-" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>

    </div>
 
    <footer>
      <div class="footer-section">
        <div class="logo-section">
          <img src="./img/logo-sapda.png" alt="" class="logo-footer" />
        </div>
        <div class="details-footer">
          <p>
            merupakan singkatan dari SENTRA ADVOKASI PEREMPUAN DIFABEL DAN ANAK,
            Badan Hukum Atas nama lembaga SAPDA no. 51 tahun 2005 dengan Akta
            Notaris Anhar Rusli, diubah dengan no. 7 tahun 2013 dengan akta
            notaris Herry Sabto Widodo, dan dilakukan perubahan bentuk
            kelembagaan menjadi Yayasan pada tahun 2016 dengan nama Yayasan
            Sentra Advokasi Perempuan, Difabel dan Anak dengan Akta Notaris Ika
            Farikha no. 4 tanggal 12 Oktober tahun, 2016 , dan disahkan dengan
            Keputusan Menteri Hukum dan Hak Asasi Manusia RI No.
            AHU-0040582.AH.01.04 tahun 2016 tentang Pengesahan Pendirian Badan
            Hukum Sentra Advokasi Perempuan, Difabel dan Anak
          </p>
        </div>
        <div class="social-media">
          <div class="nav-links">
            <div class="btn-container-4">
              <a href="https://instagram.com/sapdajogja?igshid=MzMyNGUyNmU2YQ=="><button type="button" class="btn-4 btn-color-3"style="color: #0010A2; font-size: 16px; font-weight: 1000;">Instagram</button></a>
              <a href="https://twitter.com/SAPDAJogja?t=Vza9XmaU_3tBfgTxZ1lhtA&s=09"><button type="button" class="btn-4 btn-color-3" style="color: #0010A2; font-size: 16px; font-weight: 1000;">Twitter</button></a>
              <a href="https://www.facebook.com/sapdajogja"><button type="button" class="btn-4 btn-color-3" style="color: #0010A2; font-size: 16px; font-weight: 1000;">Facebook</button></a>
              <a href="https://api.whatsapp.com/send/?phone=6281327395399&text&type=phone_number&app_absent=0"><button type="button" class="btn-4 btn-color-3"style="color: #0010A2; font-size: 16px; font-weight: 1000;">Whatsapp</button></a>
              <a href="mailto:info@sapdajogja.org"><button type="button" class="btn-4 btn-color-3" style="color: #0010A2; font-size: 16px; font-weight: 1000;">Email</button></a>
            </div>
          </div>
        </div>
        <div class="frame-child4"></div>
        <p>Dirancang Oleh A Clarissa Silvy P &#169; 2023</p>
      </div>
    </footer>
    <script>
      (function(d){
         var s = d.createElement("script");
         /* uncomment the following line to override default position*/
          s.setAttribute("data-position", 1);
         /* uncomment the following line to override default size (values: small, large)*/
          s.setAttribute("data-size", "large");
         /* uncomment the following line to override default language (e.g., fr, de, es, he, nl, etc.)*/
          s.setAttribute("data-language", "id");
         /* uncomment the following line to override color set via widget (e.g., #053f67)*/
          s.setAttribute("data-color", "#0010A2");
         /* uncomment the following line to override type set via widget (1=person, 2=chair, 3=eye, 4=text)*/
          s.setAttribute("data-type", "1");
          s.setAttribute("data-account", "YgtMui314C");
         s.setAttribute("src", "https://cdn.userway.org/widget.js");
         (d.body || d.head).appendChild(s);})(document)
 </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
  <script src="swiper-bundle.min.js"></script>
  <script src="script.js"></script>
</html>
