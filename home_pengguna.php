<!DOCTYPE html>
<html lang="en">

<head>
    <title>Perpustakaan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link href="./fontawesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"/>
</head>
    
    <?php
        require 'koneksi.php';
    ?>
    <!-- bagian navbar -->
    <div class="container">
      <div class="row">
        <div class="col-8">
        
    
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container-fluid">  
              
              <button class="navbar-toggler" type="button" data-toggle="collapse" 
               data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarText">
                <div class="row no-gutters">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><i class="fab fa-accusoft"></i></a>
                    </li>
                    <li>
                      <class class="nav-item active">
                        <a class="nav-link" href="home.php"><b>BOOK4U</b><span class="sr-only"></span></a>
                      </class>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#About">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="koleksi.php">Book selection</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#footer">Contact</a>
                    </li>
                </ul>
                </div>
              </div>
              

              <div class="row no-gutters">
                <div class="daftar col-auto">
                  <ul>
                    <li class="nav-item">
                      <a class="nav-link" href="login_pengguna.php">Sign in</a>
                    </li>
                    
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Alexander</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Profile</a>
                          <a class="dropdown-item" href="#">Premium</a>
                          <a class="dropdown-item" href="#">Wishlist</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="logout_pengguna.php">Logout</a>
                        </div>
                      </li>
                    
                  </ul>
              </div>
                 <div class="login col-auto" >
                  <ul>
                    <li class="nav-item">
                      <img class="card-img-top mb-5 mb-md-0" src="img/<?php echo $_SESSION['gambar']; ?>"  width ="50px" height="50px" alt="..." />
                    </li>
                  </ul>
                </div> 
                
              </div>
            </div>
        </nav>
        </div>
      </div>
    </div>
    
         
    <!-- bagian header -->
    <header>
        <div class="jumbotron mb-0 mt-5 text-light">
          <h1 class="display-4">Hello, welcome to BOOK4U</h1>
            <p class="lead">A library is a building used for storage and use of books. The library is also a storehouse of knowledge,
               where there are many types of books. Every student, student or public can use the library to borrow books and space to read
            </p>
          <hr class="my-4">
          <p>Segera daftar di BOOK4U agar mendapat informasi seputar buku yang rilis</p>
        </div>
        <div class="jumbo">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#414345" fill-opacity="1" 
            d="M0,96L160,128L320,160L480,128L640,192L800,160L960,128L1120,192L1280,96L1440,128L1440,0L1280,
            0L1120,0L960,0L800,0L640,0L480,0L320,0L160,0L0,0Z"></path>
          </svg>  
        </div>   
  
      </header>

      <!-- bagian About -->
      <section id="About">
        <div class="container mt-5">
            <div class="row text text-center mb-3">
                <div class="col">
                    
                    <br>
                    <h2>About library</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-4 text-justify">
                <div class="col-md-4">
                    <p>Libraries are so important in stimulating the brains of the nation's children to become smarter and more insightful. So, it is very feasible to encourage all schools and universities to have libraries. It is time, the culture of reading in this country will be intensified. Indonesia has been sleeping for too long in a culture of literacy, namely reading and writing that is low.
                        According to UNESCO data, the reading interest of the Indonesian people is very concerning, only 0.001 percent. This means that out of 1000 Indonesians, only 1 person is avid reader. A different research entitled "Most Littered Nation In The World" conducted by Central Connecticut State University in March 2016, Indonesia was declared to be ranked 60th out of 61 countries regarding reading interest.</p>
                </div>
             <div class="col-md-4">
                    <p>The data indicates that Indonesia is low in literacy, especially reading books. This is a concern for us. In fact, we already have libraries at schools and universities but not for reading books, but only as a display, even for using wifi.
                        Starting early The first thing that must be done to encourage the spirit of reading books is to invite children from an early age to read books. This is a hope for shaping the character of the nation's children who are smart, have broad insight and are able to compete with other nations. Reading books will be able to reduce all forms of fake news or hoaxes that always shackle us. Reading lots of books will make a person's mind more critical in reading news circulating on social media.</p>
             </div>
        </div>

            <section id="pepatah">
              <ul class="list-group">
                <li class="list-group-item list-group-item-dark text-center"><h5> "Old books are new books for those who haven't read them."</h5></li>
              </ul>
              </section>
            </section>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#343a40 " fill-opacity="1" 
              d="M0,96L160,128L320,160L480,128L640,192L800,160L960,128L1120,192L1280,96L1440,128L1440,320L1280,320L1120,
              320L960,320L800,320L640,320L480,320L320,320L160,320L0,320Z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#343a40" fill-opacity="1" 
              d="M0,160L288,256L576,192L864,160L1152,256L1440,288L1440,0L1152,0L864,0L576,0L288,0L0,0Z"></path>
            </svg>
            </section>
       
            <div class="middle">
              <h1>GIVE YOUR SELF A CHANCE TO READ A BOOK !</h1>
            </div> 
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#343a40" fill-opacity="1" d="M0,160L288,256L576,192L864,160L1152,256L1440,288L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg>
            <br>

       <section id="pilihan buku">
            <div class="card-group">
            <div class="card">
                <img src="gambar/images.JFIF" class="card-img-top" alt="image">
                <div class="card-body">
                <h5 class="card-title">Si kharismatik Charlie Wade</h5>
                <p class="card-text">Charlie Wade adalah menantu  laki-laki yang tinggal menumpang dan dibenci semua orang, tetapi sebenarnya ia adalah pewaris keluarga terpandang yang identiasnya dirahasiakan. Dia bersumpah suatu hari, semua orang yang menolak dan menjauhinya akan berlutut dan akhirnya memohon belas kasihan padanya!</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">Latest update</small><br>
                <a href="https://www.webfic.com/book_info/21000200011/null/Si-Karismatik-Charlie-Wade" class="btn btn-primary">Read this book</a>
                </div>
            </div>
            <div class="card">
                <img src="gambar/images2.JFIF" class="card-img-top" alt="image">
                <div class="card-body">
                <h5 class="card-title">The secretly rich man</h5>
                <p class="card-text">That day, my parents and sister who were all working abroad suddenly told me that I was a second-generation rich with trillions of dollars in wealth!Gerald Crawford: I am a second-generation rich?</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">Last updated 4 days ago</small><br>
                <a href="https://www.webfic.com/book_info/21000006371/null/The-Secretly-Rich-Man" class="btn btn-primary">Read this book</a>
                </div>
            </div>
            <div class="card">
                <img src="gambar/images3.JFIF" class="card-img-top" alt="image">
                <div class="card-body">
                <h5 class="card-title">El Yerno Millonario</h5>
                <p class="card-text">Charlie Wade era el yerno que todos despreciaban, pero su verdadera identidad como heredero de una familia prominente seguía siendo un secreto. ¡Juró que algún día, aquellos que lo rechazaron se arrodillarían ante él suplicando por su misericordia, eventualmente!</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">Last updated 3 weeks ago</small><br>
                <a href="https://www.webfic.com/book_info/21000200002/null/El-Yerno-Millonario" class="btn btn-primary">Read this book</a>
                </div>
            </div>
            </div>     

            <br>
              
            <div class="card-group">
            <div class="card">
                <img src="gambar/Bulan.jpg" class="card-img-top" alt="image">
                <div class="card-body">
                <h5 class="card-title">Buku Novel Bulan | Tere Liye (Best Seller)</h5>
                <p class="card-text">Setelah Serial pertamanya, Bumi, sukses melejit, kini Tere Liye menghadirkan kisah lanjutannya dengan Bulan.
                  Kini anak istimewa itu bernama Seli, masih 15 tahun. Sama halnya seperti remaja yang lain, Seli mendengarkan lagu-lagu yang sedang hits, pergi ke gerai fast food, menonton serial drama dan film. Perbedaannya, Seli bisa mengeluarkan petir.
                  Dan dengan kekuatan itu, Seli bertualang menuju tempat-tempat yang menakjubkan bersama Raib.
                  Dengan bekal hewan tunggangan empat ekor harimau salju sebagai kendaraan mereka selama festival, mereka menghadapi medan berbahaya dan binatang buas dalam hutan hutan yang siap menyerang mereka. Namun, mengapa harus mereka yang mengikuti festival berbahaya ini?</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">Latest update</small><br>
                <a href="https://www.tokopedia.com/irfanbukubisnis/buku-novel-bulan-tere-liye-best-seller?src=topads" class="btn btn-primary">Buy this book</a>
                </div>
            </div>
            <div class="card">
                <img src="gambar/selena.jfif" class="card-img-top" alt="image">
                <div class="card-body">
                <h5 class="card-title">Buku Novel Selena | Tere Liye (Best Seller)</h5>
                <p class="card-text">"Selena" dan "Nebula" adalah buku ke-8 dan ke-9 yang menceritakan siapa orangtua Raib dalam serial petualangan dunia paralel. Dua buku ini sebaiknya dibaca berurutan. Kedua buku ini juga bercerita tentang Akademi Bayangan Tingkat Tinggi, sekolah terbaik di seluruh Klan Bulan. Tentang persahabatan tiga mahasiswa, yang diam-diam memiliki rencana bertualang ke tempat-tempat jauh. Tapi petualangan itu berakhir buruk, saat persahabatan mereka diuji dengan rasa suka, egoisme, dan pengkhianatan. Ada banyak karakter baru, tempat-tempat baru, juga sejarah dunia paralel yang diungkap.
                  Di dua buku ini kalian akan berkenalan dengan salah satu karakter paling kuat di dunia paralel sejauh ini. Tapi itu jika kalian bisa menebaknya. Dua buku ini bukan akhir. Justru awal terbukanya kembali portal menuju Klan Aldebaran.</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">Last updated 4 days ago</small><br>
                <a href="https://www.tokopedia.com/irfanbukubisnis/buku-novel-selena-tere-liye-best-seller?src=topads" class="btn btn-primary">Buy this book</a>
                </div>
            </div>
            <div class="card">
                <img src="gambar/CAT.jpg" class="card-img-top" alt="image">
                <div class="card-body">
                <h5 class="card-title">Buku Wangsit Pawang Soal Sulit Hots Cat Cpns & Pppk 2021</h5>
                <p class="card-text">Hanya 8% yang Lolos Passing Grade. Penyebabnya Banyak yang Gagal di Tes Karakter Pribadi & Munculnya Soal Level HOTS.

                  Soal dibuat oleh Kemendikbud dan Asosiasi Perguruan Tinggi Indonesia sehingga memiliki tingkat kesulitan yang di atas rata-rata (Level HOTS). Jumlah peserta yang telah mengikuti SKD CPNS sebanyak 1,7 juta orang. Dari jumlah itu, hanya 128 ribu peserta yang dinyatakan lulus passing grade. Artinya, jumlah peserta yang memenuhi passing grade yang ditentukan cuma di 8%.
                  
                  Penyebab utamanya karena banyak peserta tes yang tidak lolos nilai passing grade untuk tes karakter pribadi. Para peserta juga "kaget" dengan munculnya soal HOTS yang menyita banyak waktu saat mengerjakan. Metode belajar terbaik adalah "DRILLING SOAL HOTS" sebanyak mungkin agar Anda bisa mengerjakan soal dengan cepat dan tepat.</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">Last updated 2 days ago</small><br>
                <a href="https://www.tokopedia.com/irfanbukubisnis/buku-wangsit-pawang-soal-sulit-hots-cat-cpns-pppk-2021" class="btn btn-primary">Buy this book</a>
                </div>
            </div>
            </div>        
            
            <br>
              
            <div class="card-group">
            <div class="card">
                <img src="gambar/forex.jpg" class="card-img-top" alt="image">
                <div class="card-body">
                <h5 class="card-title">Buku Mahir Online Trading Forex Dengan Meta Trader Trading Platform</h5>
                <p class="card-text"> Perkembangan zaman yang sangat pesat serta persaingan usaha yang semakin ketat membuat dunia usaha semakin sempit dan keras. PHK terjadi di mana-mana. Untuk membuka usaha sendiri pun sangat banyak pesaingnya sehingga perang harga tidak bisa dihindari.
                  Buku panduan trading ini memberikan solusi permasalahan tersebut. Dengan trading kita tidak perlu stok barang, tidak perlu lokasi dan tempat strategis untuk berjualan, bahkan juga tidak perlu pembeli. Yang Anda butuhkan hanyalah laptop dan koneksi internet yang stabil. Dari situ Anda bisa memiliki penghasilan tanpa perlu banting tulang.
                  !</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">Last updated 14 days ago</small><br>
                <a href="https://www.tokopedia.com/irfanbukubisnis/buku-mahir-online-trading-forex-dengan-meta-trader-trading-platform" class="btn btn-primary">Buy this book</a>
                </div>
            </div>
            <div class="card">
                <img src="gambar/images2.JFIF" class="card-img-top" alt="image">
                <div class="card-body">
                <h5 class="card-title">A Ruling Passion: Mr. Tremont’s Priceless Little Bride</h5>
                <p class="card-text">A plane crash had orphaned her... he too, shared the exact same fate. However, his misfortune was all her father’s doing.She was at the young age of eight when he, who was ten years older, brought her to the Tremont Estate. She thought this kind gesture came from the good will of his heart. Little did she know, it was for retribution.For ten years, she had always thought that he hated her. He was gentle and benevolent to the world, but never towards her…He forbade her from calling him ‘brother’. She could only call him by his name - Mark Tremont, Mark Tremont, over and over again till it was ingrained deeply in her head...</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">Last updated 14 days ago</small><br>
                <a href="https://www.webfic.com/book_info/21000003253/Romance/A-Ruling-Passion-Mr-Tremont-s-Priceless-Little-Bride" class="btn btn-primary">Read this book</a>
                </div>
            </div>
            <div class="card">
                <img src="gambar/images3.JFIF" class="card-img-top" alt="image">
                <div class="card-body">
                <h5 class="card-title">Love After Marriage: Mr. Lancaster's Hidden Wife</h5>
                <p class="card-text">Ever since Yvonne Frey married Henry Lancaster, she alone stayed in an empty house for three years.Just when she was on the verge of giving up, this man suddenly came back and said that he wanted to live together with her!“Mr. Lancaster… Should I prepare a guest room for you?”“What? So I’m only a guest to you?!” Henry gritted his teeth. Now, who was the dismissive one here?</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">Last updated 34 weeks ago</small><br>
                <a href="https://www.webfic.com/book_info/21000007149/null/Love-After-Marriage-Mr-Lancaster-s-Hidden-Wife" class="btn btn-primary">Read this book</a>
                </div>
            </div>
            </div> 
          </section>
        </div>
      </section>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#343a40" fill-opacity="1"
        d="M0,192L288,288L576,256L864,256L1152,64L1440,256L1440,0L1152,0L864,0L576,0L288,0L0,0Z"></path>
      </svg>
      
      <section id="About" >
        <div class="container mt-5">
            <div class="row text text-center mb-3">
                <div class="col">
                    <br>
                    <br>
                    <br>
                    <h2>Importance of Libraries for Education</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-4 text-justify">
                <div class="col-md-4">
                    <p>Libraries are so important in stimulating the brains of the nation's children to become smarter and more insightful. So, it is very feasible to encourage all schools and universities to have libraries. It is time, the culture of reading in this country will be intensified. Indonesia has been sleeping for too long in a culture of literacy, namely reading and writing that is low.
                        According to UNESCO data, the reading interest of the Indonesian people is very concerning, only 0.001 percent. This means that out of 1000 Indonesians, only 1 person is avid reader. A different research entitled "Most Littered Nation In The World" conducted by Central Connecticut State University in March 2016, Indonesia was declared to be ranked 60th out of 61 countries regarding reading interest.</p>
                </div>
                <div class="col-md-4">
                    <p>The data indicates that Indonesia is low in literacy, especially reading books. This is a concern for us. In fact, we already have libraries at schools and universities but not for reading books, but only as a display, even for using wifi.
                        Starting early The first thing that must be done to encourage the spirit of reading books is to invite children from an early age to read books. This is a hope for shaping the character of the nation's children who are smart, have broad insight and are able to compete with other nations. Reading books will be able to reduce all forms of fake news or hoaxes that always shackle us. Reading lots of books will make a person's mind more critical in reading news circulating on social media.</p>
                </div>
            </div>
            <section id="pepatah kata">
              <ul class="list-group">
                <li class="list-group-item list-group-item-dark text-center"><h5> "Old books are new books for those who haven't read them."</h5></li>
              </ul>
            </section>
            </section>

      <!-- bagian footer -->
        
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#343a40" fill-opacity="1" d="M0,192L288,288L576,256L864,256L1152,64L1440,256L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#343a40" fill-opacity="1" d="M0,0L240,128L480,160L720,32L960,192L1200,128L1440,288L1440,0L1200,0L960,0L720,0L480,0L240,0L0,0Z"></path></svg>
          <section id="footer">
            <div class="Contact text-center">
               <h3>Untuk informasi lebih lanjut silahkan hubungi kami dengan klik icon email dibawah : </h3>
             </div>
          <br>
          <table align="center">    
            <tr>
              <td style="padding: 30px"><a href="mailto:someone@yoursite.com"><img src="gambar/Mail.png" alt=" " width="48px"></a></td>    
            </tr>
          </table>
          
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#343a40" fill-opacity="1" d="M0,0L240,128L480,160L720,32L960,192L1200,128L1440,288L1440,320L1200,320L960,320L720,320L480,320L240,320L0,320Z"></path></svg>
                
                <div class="foot bg-dark text-center pb-2">
                  <p><a href="https://www.instagram.com/novan.75/" class="text-white fw-bold">Copyright 2021 | @Perpustakaan</a></p>
                </div>

              </section>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>