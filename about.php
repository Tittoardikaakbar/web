<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>mengapa memilih kami?</h3>
         <p>1.Produk Berkualitas Tinggi: Website Anda mungkin menampilkan produk furniture berkualitas dengan desain yang menarik dan bahan yang tahan lama. Kualitas yang konsisten akan membuat pelanggan merasa puas dan yakin dengan produk yang ditawarkan.

2.Informasi Produk yang Lengkap dan Jelas: Deskripsi produk yang rinci, foto yang jelas, dan informasi harga dapat membantu calon pembeli membuat keputusan dengan lebih mudah.

3.Layanan Pelanggan yang Responsif: Jika Anda menyediakan layanan pelanggan yang ramah dan cepat, seperti melalui WhatsApp atau media sosial, ini dapat memberikan kenyamanan bagi calon pembeli untuk mengajukan pertanyaan atau mendapatkan informasi tambahan.

4.Harga yang Kompetitif: Menawarkan harga yang sesuai dengan kualitas, bahkan mungkin menyediakan promo atau diskon menarik, bisa menjadi daya tarik tersendiri untuk memilih website Anda.

5.Testimoni dan Ulasan Positif: Jika ada banyak ulasan atau testimoni pelanggan yang merasa puas, ini bisa menjadi faktor penentu bagi calon pembeli untuk memilih website Anda.

            6.Kemudahan dalam Proses Pembelian: Website yang mudah digunakan, mulai dari proses pencarian produk hingga pembayaran, dapat membuat pengalaman belanja lebih nyaman bagi pengguna.

            7.Tersedia di Berbagai Platform: Dengan kehadiran di media sosial, seperti Instagram dan Facebook, pelanggan dapat berinteraksi dengan Anda di platform yang paling nyaman bagi mereka, meningkatkan kepercayaan dan kenyamanan..</p>
        
            <a href="contact.php" class="btn">Jika ada Kendala silahkan hubungi kami</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">ulasan klien</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-7.png" alt="">
         <p>Saya harap web ini terus maju dan semakin berkembang.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Vladimir Putin</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-8.png" alt="">
         <p>Aplikasi ini sangat bagus dan baik, tidak ada kendala saat saya menggunaknnya.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Barack Obama</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-9.png" alt="">
         <p> Punya iPhone 16, berasa gengsi naik dua tingkat! 📱 Kameranya bening banget, foto burung terbang pun detailnya kelihatan. Baterai awet, sinyal ngebut, dan Face ID makin responsif – bahkan pas muka bantal. Rasanya kayak punya asisten pribadi yang siap bikin hidup lebih canggih!".</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Eva Adelia</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-4.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-5.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>