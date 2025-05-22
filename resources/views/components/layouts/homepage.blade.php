<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'HOME PAGE' }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/admin-dashboard.css')}}">
    <style>
        navbar {
            position: sticky;
            top: 0;
            z-Index: 1000;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-Content: space-between;
            padding: 10px 50px;
            box-Shadow: 0 7px 10px rgba(0, 0, 0, 0.1);
        }

        .button {
            text-Align: center;
            color: black;
            text-Decoration: none;
            padding: 3px 0px;
            margin: 0px 10px;
            background-color: #f4f4f4;
            border-Radius: 10px;
            border: 2px solid black;
            display: inline-block;
            width: 150px;
        }

        :hover.button {
            background-color: #cccccc;
            text-decoration: none;
            color: black;
        }

        .button2 {
            text-Align: center;
            color: #f4f4f4;
            text-Decoration: none;
            padding: 3px 0px;
            margin: 0px 10px;
            background-Color: #1a8068;
            border-Radius: 10px;
            border: 2px solid black;
            display: inline-block;
            width: 150px;
        }

        :hover.button2 {
            background-color: #135e4d;
            color: #f4f4f4;
            text-decoration: none;
        }

        .modal-header {}
    </style>
</head>

<body>
    <!-- Main Content -->
    <main role="main" class="">
        <navbar>
            <div>
                <img src="{{asset('assets/bookspace-icon.png')}}" alt="Library Logo" height="100px">
            </div>
            <div>
                <a href="#home" class="button">HOME</a>
                <a href="#desk" class="button">DESK</a>
                <a href="#books" class="button">BOOKS</a>
                <a href="{{ route('profile') }}" class="button2">PROFILE</a>
            </div>
        </navbar>

        {{ $slot }}

    </main>

    <!-- view romeo dan juliet -->
    <div wire:ignore.self class="modal fade" id="view-romeo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 800px;">
            <div class="modal-content" style="padding: 0px 15px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Romeo dan Juliet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body overflow-auto" style="text-align:justify; max-height: 550px; overflow-y: auto;">
                    <div style="display: flex; gap: 15px; align-items: flex-start;">
                        <!-- Gambar -->
                        <img src="{{asset('assets/fiction1.jpg')}}" alt="Romeo dan Juliet" style="width: 150px; height: auto; border-radius: 5px;">
                        
                        <!-- Teks -->
                        <div>
                            <table>
                                <tr>
                                    <td><b>Penulis</b></td>
                                    <td><b>:</b></td>
                                    <td>William Shakespeare</td>
                                </tr>
                                <tr>
                                    <td><b>Kategori</b></td>
                                    <td><b>:</b></td>
                                    <td>Fiksi</td>
                                </tr>
                                <tr>
                                    <td><b>Tanggal terbit</b></td>
                                    <td><b>:</b></td>
                                    <td>5 September 2020</td>
                                </tr>
                                <tr>
                                    <td><b>Tebal</b></td>
                                    <td><b>:</b></td>
                                    <td>166 Halaman</td>
                                </tr>
                                <tr>
                                    <td><b>Sinopsis</b></td>
                                    <td><b>:</b></td>
                                    <td></td>
                                </tr>
                            </table>
                            <p>
                                "Oh, Romeo! Romeo! Mengapa namamu Romeo? Ingkarilah nama ayahmu dan juga namamu! Atau, kalau engkau tidak mau, demi cintaku, aku bersedia tidak menjadi seorang Capulet." 
                                Hanya karena sebuah nama, cinta Juliet dan Romeo tidak bisa berjalan sempurna. 
                                <br><br>
                                Seandainya nama Romeo bukan Romeo Montague, atau Juliet bukan Juliet Capulet, tentu cinta mereka tidak akan terhalang oleh restu. Membaca kisah cinta Romeo dan Juliet 
                                yang romantis serta tragis ini memang membuat siapa pun akan tergugu. Ketulusan cinta yang terhalang oleh keturunan serta asal-usul keluarga, siapa yang tidak akan bersedih dibuatnya. 
                                <br><br>
                                Apa artinya sebuah nama bagi seorang pecinta? Ketulusan adalah poin yang paling utama. Bagi Juliet, Romeo akan tetap menjadi Romeo dengan pribadi yang disukainya, kekasih yang dicintainya, 
                                meski namanya bukan lagi Romeo Montague. Seperti mawar yang akan tetap wangi meskipun disebut dengan nama lainnya. Bagi seorang pecinta seperti Juliet, sebuah nama tiada artinya. 
                                <br><br>
                                Selamat membaca dan menyelami pedihnya kisah cinta Romeo dan Juliet.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- view hilmy milan -->
    <div wire:ignore.self class="modal fade" id="view-hilmyMilan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 800px;"> <!-- Atur lebar modal -->
            <div class="modal-content" style="padding: 0px 15px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hilmy Milan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body overflow-auto" style="text-align:justify; max-height: 550px; overflow-y: auto;">
                    <div style="display: flex; gap: 15px; align-items: flex-start;">
                        <!-- Gambar -->
                        <img src="{{asset('assets/fiction2.png')}}" alt="Hilmy Milan" style="width: 150px; height: auto; border-radius: 5px;">
                        
                        <!-- Teks -->
                        <div>
                            <table>
                                <tr>
                                    <td><b>Penulis</b></td>
                                    <td><b>:</b></td>
                                    <td>Nadia Ristivani</td>
                                </tr>
                                <tr>
                                    <td><b>Kategori</b></td>
                                    <td><b>:</b></td>
                                    <td>Fiksi</td>
                                </tr>
                                <tr>
                                    <td><b>Tanggal terbit</b></td>
                                    <td><b>:</b></td>
                                    <td>12 November 2021</td>
                                </tr>
                                <tr>
                                    <td><b>Tebal</b></td>
                                    <td><b>:</b></td>
                                    <td>166 Halaman</td>
                                </tr>
                                <tr>
                                    <td><b>Sinopsis</b></td>
                                    <td><b>:</b></td>
                                    <td></td>
                                </tr>
                            </table>
                            <p>
                                Kata Milan, bukanlah laki-laki sempurna yang kecerdasannya melebihi Einstein, ketampanannya melampaui Leonardo DiCaprio, atau kekayaannya menyetarai Steve Jobs yang seorang wanita butuhkan. Itu memang bonus yang diidam-idamkan. Namun sebetulnya, bukan itu poin utamanya. Yang wanita butuhkan adalah kesediaan. Bersedia untuk selalu mengerti dan memahami, bersedia untuk menenangkan tanpa bertanya, dan kesediaan untuk mencintai tanpa memaksakan. 
                                <br><br>
                                Kata Hilmy, duniamu masih terlalu sempit kalau berpikir mencintai adalah tentang hubungan timbal balik. Jika selalu begitu—memaksa memiliki seseorang yang dicintai, fase kehilangan seseorang yang belum pernah dimiliki akan selalu terulang, terus terulang. 
                                <br><br>
                                Biarkan semuanya mengalir seperti yang ditorehkan catatan takdir. Tak perlu memaksa semesta bergerak terlalu cepat, atau terlalu lambat. Semua ada porsinya masing-masing. Cinta itu bukan tentang hal-hal rumit. Kuncinya hanya satu, selalu satu: Nyaman.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- viev gua jepang -->
    <div wire:ignore.self class="modal fade" id="view-guaJepang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 800px;"> <!-- Atur lebar modal -->
            <div class="modal-content" style="padding: 0px 15px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Gua Jepang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body overflow-auto" style="text-align:justify; max-height: 550px; overflow-y: auto;">
                    <div style="display: flex; gap: 15px; align-items: flex-start;">
                        <!-- Gambar -->
                        <img src="{{asset('assets/horror1.png')}}" alt="Gua Jepang" style="width: 150px; height: auto; border-radius: 5px;">
                        
                        <!-- Teks -->
                        <div>
                            <table>
                                <tr>
                                    <td><b>Penulis</b></td>
                                    <td><b>:</b></td>
                                    <td>Kisah Tanah Jawa</td>
                                </tr>
                                <tr>
                                    <td><b>Kategori</b></td>
                                    <td><b>:</b></td>
                                    <td>Horror</td>
                                </tr>
                                <tr>
                                    <td><b>Tanggal terbit</b></td>
                                    <td><b>:</b></td>
                                    <td>4 Juli 2019</td>
                                </tr>
                                <tr>
                                    <td><b>Tebal</b></td>
                                    <td><b>:</b></td>
                                    <td>184 Halaman</td>
                                </tr>
                                <tr>
                                    <td><b>Sinopsis</b></td>
                                    <td><b>:</b></td>
                                    <td></td>
                                </tr>
                            </table>
                            <p>
                                Pernahkah kamu merindukan rumah? Selalu membayangkan kenangan terindah bersama orang-orang tersayang. Kenangan yang memberi semangat untuk terus berjuang, demi mereka yang menunggumu pulang. 
                                <br><br>
                                Gua Jepang adalah saksi bisu mereka yang terampas kebebasannya; para romusha yang bekerja siang-malam tanpa istirahat dan makan, tahanan perang yang disiksa, serta jugun ianfu yang dipaksa memuaskan nafsu tentara Jepang. 
                                <br><br>
                                Mereka masih berharap bebas dan bisa kembali pulang hingga meregang nyawa di gua ini. Hingga kini “mereka” berdiam diri di sudut-sudut gua, tempat mereka mati terbunuh. Berharap ada yang datang sehingga bisa merasukinya dan membawa mereka kembali ke rumah dan bertemu keluarga. 
                                <br><br>
                                Di buku Kisah Tanah Jawa: Gua Jepang, Kawae—salah satu dari tentara Jepang yang mati dan terjebak di dalam gua—akan mengajak kita menyusuri sejarah kelam kekejaman penjajahan Jepang.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- view KKN di Desa Penari -->
    <div wire:ignore.self class="modal fade" id="view-KKN" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 800px;"> <!-- Atur lebar modal -->
            <div class="modal-content" style="padding: 0px 15px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">KKN di Desa Penari</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body overflow-auto" style="text-align:justify; max-height: 550px; overflow-y: auto;">
                    <div style="display: flex; gap: 15px; align-items: flex-start;">
                        <!-- Gambar -->
                        <img src="{{asset('assets/horror2.png')}}" alt="KKN di Desa Penari" style="width: 150px; height: auto; border-radius: 5px;">
                        
                        <!-- Teks -->
                        <div>
                            <table>
                                <tr>
                                    <td><b>Penulis</b></td>
                                    <td><b>:</b></td>
                                    <td>Simpleman</td>
                                </tr>
                                <tr>
                                    <td><b>Kategori</b></td>
                                    <td><b>:</b></td>
                                    <td>Horror</td>
                                </tr>
                                <tr>
                                    <td><b>Tanggal terbit</b></td>
                                    <td><b>:</b></td>
                                    <td>13 September 2013</td>
                                </tr>
                                <tr>
                                    <td><b>Tebal</b></td>
                                    <td><b>:</b></td>
                                    <td>255 Halaman</td>
                                </tr>
                                <tr>
                                    <td><b>Sinopsis</b></td>
                                    <td><b>:</b></td>
                                    <td></td>
                                </tr>
                            </table>
                            <p>
                                Saat motor melaju kencang menembus hutan, Widya mendengar tabuhan gamelan. 
                                Suaranya mendayu-dayu dan terasa semakin dekat. Tiba-tiba Widya melihat sesosok manusia 
                                tengah menelungkup seakan memasang pose menari. Ia berlenggak-lenggok mengikuti irama musik gamelan 
                                yang ditabuh cepat. Siapa yang menari di malam gulita seperti ini? 
                                Tiga puluh menit berlalu, dan atap rumah terlihat samar-samar dengan cahaya yang meski temaram 
                                bisa dilihat jelas oleh mata. 
                                <br><br>
                                “Mbak… kita sudah sampai di desa.”
                                *** 
                                <br><br>
                                Dari kisah yang menggemparkan dunia maya, **KKN di Desa Penari** kini diceritakan lewat lembar-lembar tulisan yang lebih rinci. 
                                Menuturkan kisah Widya, Nur, dan kawan-kawan, serta bagian-bagian yang belum pernah dibagikan di mana pun sebelumnya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- view kartun kalkulus -->
    <div wire:ignore.self class="modal fade" id="view-kartunKalkulus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 800px;"> <!-- Atur lebar modal -->
            <div class="modal-content" style="padding: 0px 15px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kartun Kalkulus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body overflow-auto" style="text-align:justify; max-height: 550px; overflow-y: auto;">
                    <div style="display: flex; gap: 15px; align-items: flex-start;">
                        <!-- Gambar -->
                        <img src="{{asset('assets/science2.png')}}" alt="Kartun Kalkulus" style="width: 150px; height: auto; border-radius: 5px;">
                        
                        <!-- Teks -->
                        <div>
                            <table>
                                <tr>
                                    <td><b>Penulis</b></td>
                                    <td><b>:</b></td>
                                    <td>Larry Gonnick</td>
                                </tr>
                                <tr>
                                    <td><b>Kategori</b></td>
                                    <td><b>:</b></td>
                                    <td>Ilmiah</td>
                                </tr>
                                <tr>
                                    <td><b>Tanggal terbit</b></td>
                                    <td><b>:</b></td>
                                    <td>11 Agustus 2021</td>
                                </tr>
                                <tr>
                                    <td><b>Tebal</b></td>
                                    <td><b>:</b></td>
                                    <td>156 Halaman</td>
                                </tr>
                                <tr>
                                    <td><b>Sinopsis</b></td>
                                    <td><b>:</b></td>
                                    <td></td>
                                </tr>
                            </table>
                            <p>
                                Larry Gonick, kartunis yang lulusan matematika, menyajikan buku pelajaran kalkulus bergambar tingkat kuliah tahun pertama 
                                yang menjelaskan dunia fungsi, limit, turunan, dan integral, menggunakan ilustrasi jelas dan membantu—serta humor untuk membuat 
                                ringan bahasan berat—Gonick mengajarkan dasar kalkulus, dengan banyak contoh dan latihan soal. 
                                <br><br>
                                Kombinasi sempurna hiburan dan pendidikan—cocok untuk mahasiswa, guru, dosen, orangtua, dan profesional. 
                                “Bagaimana cara memanusiakan kalkulus dan membuat konsepnya jadi menarik? Jawaban cerdas Larry Gonick adalah tokoh-tokoh kartun 
                                yang berbicara, berkomentar, bercanda—sambil mengajar persamaan dan konsep dan kegunaan kalkulus. Pencapaian luar biasa, dan sangat seru.” 
                                —LISA RANDALL, profesor fisika Harvard University dan penulis *Knocking on Heaven's Door*.
                                LARRY GONICK telah membuat komik sejarah, sains, dan subjek lain selama empat puluh tahun lebih. 
                                <br><br>
                                Dia pernah menjadi pengajar kalkulus di Harvard (tempat dia mendapat gelar BA dan MA matematika) serta Knight Science Journalism Fellow di MIT. 
                                Dia staf kartunis di majalah Muse.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- view akar -->
    <div wire:ignore.self class="modal fade" id="view-akar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 800px;"> <!-- Sesuaikan lebar modal -->
            <div class="modal-content" style="padding: 0px 15px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Akar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body overflow-auto" style="text-align:justify; max-height: 550px; overflow-y: auto;">
                    <div style="display: flex; gap: 15px; align-items: flex-start;">
                        <!-- Gambar -->
                        <img src="{{asset('assets/science1.png')}}" alt="Akar" style="width: 150px; height: auto; border-radius: 5px;">
                        
                        <!-- Teks -->
                        <div>
                            <table>
                                <tr>
                                    <td><b>Penulis</b></td>
                                    <td><b>:</b></td>
                                    <td>Dee Lestari</td>
                                </tr>
                                <tr>
                                    <td><b>Kategori</b></td>
                                    <td><b>:</b></td>
                                    <td>Fiksi Ilmiah</td>
                                </tr>
                                <tr>
                                    <td><b>Tanggal terbit</b></td>
                                    <td><b>:</b></td>
                                    <td>12 November 2012</td>
                                </tr>
                                <tr>
                                    <td><b>Tebal</b></td>
                                    <td><b>:</b></td>
                                    <td>286 Halaman</td>
                                </tr>
                                <tr>
                                    <td><b>Sinopsis</b></td>
                                    <td><b>:</b></td>
                                    <td></td>
                                </tr>
                            </table>
                            <p>
                                Di tahun 2003, Gio seorang naturalis keturunan Tionghoa, Indonesia, dan Portugis pergi mengunjungi Bolivia untuk bertemu dengan Chaska, ibu dari teman Quechuanya bernama Paulo yang sudah ia anggap sebagai ibu sendiri. 
                                Ketika berkunjung ke Bolivia, Gio mendapatkan telepon dari Paulo yang memberi kabar tentang hilangnya Diva Anastasia di pedalaman Amazon.
                                <br><br>
                                Cerita kemudian beralih ke tahun sebelumnya, yaitu tahun 2002. Bodhi, seorang pemuda subkultur punk yang bekerja untuk Bong, menjalani hidup penuh tantangan. Lahir dengan kondisi unik—tulang tumbuh di luar kepala—Bodhi menyembunyikan kekurangannya dengan bandana. Kemampuan anehnya untuk bertukar diri dengan makhluk hidup lain menambah misteri hidupnya.
                                <br><br>
                                Dalam perjalanan panjangnya, Bodhi bertemu dengan banyak karakter menarik, termasuk Tristan Sanders, seorang backpacker, dan Kell, seniman tato karismatik. Kisah mereka bersinggungan dengan simbolisme mendalam, yang akhirnya memengaruhi arah hidup Bodhi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- view the alpha girl's guide -->
    <div wire:ignore.self class="modal fade" id="view-theAlpha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 800px;"> <!-- Menyesuaikan lebar modal -->
            <div class="modal-content" style="padding: 0px 15px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">The Alpha Girl's Guide</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body overflow-auto" style="text-align:justify; max-height: 550px; overflow-y: auto;">
                    <div style="display: flex; gap: 15px; align-items: flex-start;">
                        <!-- Gambar -->
                        <img src="{{asset('assets/selfdev1.png')}}" alt="The Alpha Girl's Guide" style="width: 150px; height: auto; border-radius: 5px;">
                        
                        <!-- Teks -->
                        <div>
                            <table>
                                <tr>
                                    <td><b>Penulis</b></td>
                                    <td><b>:</b></td>
                                    <td>Henry Manampiring</td>
                                </tr>
                                <tr>
                                    <td><b>Kategori</b></td>
                                    <td><b>:</b></td>
                                    <td>Self Development</td>
                                </tr>
                                <tr>
                                    <td><b>Tanggal terbit</b></td>
                                    <td><b>:</b></td>
                                    <td>31 Januari 2020</td>
                                </tr>
                                <tr>
                                    <td><b>Tebal</b></td>
                                    <td><b>:</b></td>
                                    <td>280 Halaman</td>
                                </tr>
                                <tr>
                                    <td><b>Sinopsis</b></td>
                                    <td><b>:</b></td>
                                    <td></td>
                                </tr>
                            </table>
                            <p>
                                "Alpha Female" adalah para perempuan yang menginspirasi, memimpin, menggerakkan orang sekitarnya, dan membawa perubahan. Mereka cerdas, percaya diri, dan independen. Bagaimana remaja dan perempuan muda bisa mengembangkan diri menjadi mereka? 
                                <br><br>
                                Buku ini adalah hasil pengamatan, riset artikel, wawancara langsung, dan diskusi dengan banyak perempuan di media sosial. Ditulis dengan ringan, penuh ilustrasi kocak, namun tetap blak-blakan dan menohok, *The Alpha Girl's Guide* akan membuat kamu terinspirasi menjadi cewek smart, independen, dan bebas galau!
                                <br><br>
                                Penasaran pembahasan apa saja yang ada di dalam buku? *The Alpha Girl's Guide* akan membahas beberapa tips seperti:
                                <ul>
                                    <li>Mana yang lebih penting, nilai atau pengalaman berorganisasi?</li>
                                    <li>Apakah teman kamu teman sejati atau teman yang menghambat?</li>
                                    <li>Bagaimana mengetahui cowok parasit dan manipulatif?</li>
                                    <li>Dan masih banyak lagi!</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- view filosofi teras -->
    <div wire:ignore.self class="modal fade" id="view-filosofiTeras" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 800px;"> <!-- Menyesuaikan lebar modal -->
            <div class="modal-content" style="padding: 0px 15px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Filosofi Teras</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body overflow-auto" style="text-align:justify; max-height: 550px; overflow-y: auto;">
                    <div style="display: flex; gap: 15px; align-items: flex-start;">
                        <!-- Gambar -->
                        <img src="{{asset('assets/selfdev2.png')}}" alt="Filosofi Teras" style="width: 150px; height: auto; border-radius: 5px;">
                        
                        <!-- Teks -->
                        <div>
                            <table>
                                <tr>
                                    <td><b>Penulis</b></td>
                                    <td><b>:</b></td>
                                    <td>Henry Manampiring</td>
                                </tr>
                                <tr>
                                    <td><b>Kategori</b></td>
                                    <td><b>:</b></td>
                                    <td>Self Development</td>
                                </tr>
                                <tr>
                                    <td><b>Tanggal terbit</b></td>
                                    <td><b>:</b></td>
                                    <td>19 Desember 2018</td>
                                </tr>
                                <tr>
                                    <td><b>Tebal</b></td>
                                    <td><b>:</b></td>
                                    <td>346 Halaman</td>
                                </tr>
                                <tr>
                                    <td><b>Sinopsis</b></td>
                                    <td><b>:</b></td>
                                    <td></td>
                                </tr>
                            </table>
                            <p>
                                Lebih dari 2.000 tahun lalu, sebuah mazhab filsafat menemukan akar masalah dan juga solusi dari banyak emosi negatif. *Stoisisme*, atau Filosofi Teras, adalah filsafat Yunani-Romawi kuno yang bisa membantu kita mengatasi emosi negatif dan menghasilkan mental yang tangguh dalam menghadapi naik-turunnya kehidupan. 
                                <br><br>
                                Jauh dari kesan filsafat sebagai topik berat dan mengawang-awang, Filosofi Teras justru bersifat praktis dan relevan dengan kehidupan Generasi Milenial dan Gen-Z masa kini.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();

        document.querySelector('.menu-toggle').addEventListener('click', function () {
            document.querySelector('.sidebar').classList.toggle('open');
        });
    </script>
</body>

</html>