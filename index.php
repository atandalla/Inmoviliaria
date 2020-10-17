<?php include_once 'includes/funciones/articulos.php';?>
<?php 
header("Content-Type: text/html;charset=utf-8");
include_once 'includes/templates/header.php'; ?>

<?php
 $sql_anuncios = 'SELECT COUNT(*) FROM anuncio'; //RESULTADOS QUE TRAE DE LA BASE
 $sentencia_anuncios = $pdo->prepare($sql_anuncios);
 $sentencia_anuncios->execute();
 $resultado_anuncios = $sentencia_anuncios->fetchAll();

 $sql_reserva = 'SELECT COUNT(*) FROM reserva'; //RESULTADOS QUE TRAE DE LA BASE
 $sentencia_reserva = $pdo->prepare($sql_reserva);
 $sentencia_reserva->execute();
 $resultado_reserva = $sentencia_reserva->fetchAll();

 $sql_caducidad = 'SELECT COUNT(*) FROM promocion WHERE CURRENT_DATE <= caducidad'; //RESULTADOS QUE TRAE DE LA BASE
 $sentencia_caducidad = $pdo->prepare($sql_caducidad);
 $sentencia_caducidad->execute();
 $resultado_caducidad = $sentencia_caducidad->fetchAll();

?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container position-relative text-center text-lg-center" data-aos="zoom-in" data-aos-delay="100">
    <div class="row">
      <div class="col-lg-12">
        <h1>INMOBILIARIA<span> ALEA</span></h1>
        <h2>Busca con seguridad y confianza somos la marca numero uno a nivel mundial!</h2>

        <div class="btns">
          <a href="www.facebook.com.ec" class="btn-menu animated fadeInUp scrollto icofont-facebook">
            Facebook</a>
          <a href="www.youtube.com.ec" class="btn-book animated fadeInUp scrollto icofont-instagram">
            Instagram </a>
        </div>
      </div>
      <div class="col-lg-12 d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
        <a href="https://www.youtube.com/watch?v=1XRwRuB2eG0" class="venobox play-btn" data-vbtype="video"
          data-autoplay="true"></a>
      </div>

    </div>
  </div>
</section>
<!-- End Hero -->

<main id="main">

  <?php
 // $id_anuncio=$_GET['id'];

  $mysqli = new mysqli('localhost', 'root', '', 'pro_inmuebles');
 // $query = $mysqli -> query ("SELECT nombre_anuncio,usuario,comentario FROM anuncio,blog WHERE anuncio.id_anuncio='". $id_anuncio."'");
 $query = $mysqli -> query ("SELECT anuncio.nombre_anuncio,usuario,comentario FROM anuncio,blog WHERE anuncio.id_anuncio=blog.id_anuncio");
?>

  <!-- ======= Testimonials Section ======= -->

  <section id="testimonials" class="testimonials section-bg mt-5">
    <div class="container mt-5" data-aos="fade-up">
      <div class="section-title mt-5">
        <h2>COMENTARIOS-USUARIOS</h2>
        <p>Nuestros Usuarios</p>
      </div>

      <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">
        <?php while ($comentarios = mysqli_fetch_array($query)) { ?>
        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            <?php echo $comentarios['comentario']; ?>
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/user.png" class="testimonial-img" alt="" />
          <h3> <?php echo $comentarios['usuario']; ?></h3>

        </div>
        <?php } ?>
      </div>
    </div>

  </section>
  <!-- ======= Chefs Section ======= -->
  <section id="chefs" class="chefs">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Web Designer</h2>
        <p>Desarrolladores Web</p>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-3">
          <div class="member" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/chefs/andrea.jpeg" class="img-fluid" alt="" />
            <div class="member-info">
              <div class="member-info-content">
                <h4>Andrea González</h4>
                <span>Full-Stack</span>
              </div>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3">
          <div class="member" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets/img/chefs/tony2.jpeg" class="img-fluid" alt="" />
            <div class="member-info">
              <div class="member-info-content">
                <h4>Anthony Tandalla</h4>
                <span>Full-Stack</span>
              </div>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3">
          <div class="member" data-aos="zoom-in" data-aos-delay="300">
            <img src="assets/img/chefs/nico.jpeg" class="img-fluid" alt="" />
            <div class="member-info">
              <div class="member-info-content">
                <h4>Nicolás Cazco</h4>
                <span>Front-End</span>
              </div>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3">
          <div class="member" data-aos="zoom-in" data-aos-delay="300">
            <img src="assets/img/chefs/antho.jpeg" class="img-fluid" alt="" />
            <div class="member-info">
              <div class="member-info-content">
                <h4>Anthony Pizarro</h4>
                <span>Front-End</span>
              </div>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- End Chefs Section -->

</main>
<!-- End #main -->
<div class="container" style="margin-bottom: 5rem;">
  <div class="row text-center">
    <div class="col-md-10 offset-md-1 col-12 text-white">
      <h1>Control de la Empresa</h1>
      <div class="row mt-5">
        <div class="col-md-4 col-12">
          <div class="counter bg-info rounded mb-2">
            <h3 class="text-warning">Número de Clientes</h3>
            <?php
            foreach($resultado_reserva as $reserva):         
        ?>
            <span><?php echo $reserva[0]?></span>
            <?php
        endforeach;
        ?>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="counter bg-info rounded mb-2">
            <h3 class="text-warning">Inmuebles totales</h3>
            <?php
            foreach($resultado_anuncios as $anuncios):       
        ?>
            <span><?php echo $anuncios[0]?></span>
            <?php
        endforeach;
        ?>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="counter bg-info rounded mb-2">
            <h3 class="text-warning">Promociones Vigentes</h3>
            <?php
            foreach($resultado_caducidad as $caducidad):       
        ?>
            <span><?php echo $caducidad[0]?></span>
            <?php
        endforeach;
        ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once 'includes/templates/footer.php'; ?>