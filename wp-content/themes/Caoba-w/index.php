<?php get_header();?>
<section class="main-banner">
  <div class="main-banner__content">
    <div class="main-banner__item" id="contact">
      <div class="main-banner__box">
        <div class="main-banner__img d-none d-sm-block">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="">
        </div>
        <div class="main-banner__form">
            <div class="main-banner__title">
              <p>Formulario de Contacto</p>
            </div>
            <!-- <form action="">
              <div class="form-group">
                  <input class="form-control" id="formGroupExampleInput" placeholder="Nombre *" type="text">
                </div>
                <div class="form-group">
                  <input class="form-control" id="formGroupExampleInput2" placeholder="Correo *" type="text">
                </div>
                <div class="main-grid">
                  <div class="form-group">
                    <input class="form-control" id="formGroupExampleInput2" placeholder="Celular *" type="tel">
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="formGroupExampleInput2" placeholder="Ciudad" type="text">
                  </div>
                </div>

                <div class="form-group">
                  <textarea placeholder="Mensaje" rows="8"></textarea>
                </div>
                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                  <input class="custom-control-input" id="customControlInline" type="checkbox">
                  <label class="custom-control-label" for="customControlInline">
                      Acepto
                    </label>
                  <a class="text-link" target="_blank" href="<?php echo get_template_directory_uri();?>/assets/img/MANUAL_DE_POLITICAS_PROMOTORA.pdf">
                      <strong>
                        política de privacidad
                      </strong>
                    </a>
                </div>
                <div class="float-left btn-box">
                  <button class="btn_custom btn--medium btn--filled">
                      Enviar
                    </button>
                </div>
            </form> -->
            

            <div class="main-form__active">
              <?php echo do_shortcode('[activecampaign form=5]'); ?>
              <a class="text-link" target="_blank" href="<?php echo get_template_directory_uri();?>/assets/img/MANUAL_DE_POLITICAS_PROMOTORA.pdf">
                <strong>
                  política de privacidad
                </strong>
              </a>
            </div>
            <!-- <div class="_form_5"></div><script src="https://nivel.activehosted.com/f/embed.php?id=5" type="text/javascript" charset="utf-8"></script> -->
        </div>
      </div>
    </div>
    <div class="main-banner__item" >
      <h1 class="main-banner__watermask"></h1>
      
      <div class="main-banner__slider">
        <div class="main-banner__slideritem">
          <div class="main-banner__slidercontent">
            <div class="main-banner__slidermask">
              <div class="main-banner__sliderbox">
                <div class="main-banner__img d-lg-none d-md-none d-sm-none">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="">
                </div>
                <div class="main-banner__slidertext">
                  
                    <h1>próximo lanzamiento</h1>
                    <p>Apartamentos desde <br>
                      <span>150 millones de pesos <br></span>
                      en Sabaneta, sector pan de Azúcar
                    </p>
                  </div>
                  <div class="main-banner__slidertextbottom">
                    <div class="main-banner__sliderubication">
                      <p>
                        Ubicado en un sector privilegiado de alta valorización en Sabaneta a solo 10 minutos del metro y el mejor precio de la zona <strong>¡Inscribete para aprovechar el precio del lanzamiento!</strong>
                      </p>
                    </div>
                    
                    <div class="main-banner__sliderlist">
                      <ul class="main-banner__ullist">
                        <li>Sector alta valorización</li>
                        <li>A 10 minutos estación estrella</li>
                        <li>No te pierdas las opotunidades del lanzamiento.</li>
                      </ul>
                    </div>
                    <div class="main-btn__mobile d-lg-none d-md-none d-sm none d-block">
                      <a class="btn_custom btn--medium btn--filled" href="#contact">
                        Contáctanos
                      </a>
                    </div>
                  </div>
              </div>
            </div>

            <div class="main-banner__sliderimg">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/banner.png" alt="">
            </div>
          </div>
        </div>
        <!-- <div class="main-banner__slideritem">
          <div class="main-banner__slidercontent">
            <div class="main-banner__slidermask">
              <div class="main-banner__sliderbox">
                <div class="main-banner__img d-lg-none d-md-none d-sm-none">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="">
                </div>
                <div class="main-banner__slidertext">
                    <h1>próximo lanzamiento 1</h1>
                    <p>Apartamentos desde <br>
                      <span>150 millones de pesos <br></span>
                      en Sabaneta, sector pan de Azúcar
                    </p>
                  </div>
                  <div class="main-banner__slidertextbottom">
                    <div class="main-banner__sliderubication">
                      <p>
                        Ubicado en un sector privilegiado de alta valorización en Sabaneta a solo 10 minutos del metro y el mejor precio de la zona <strong>¡Inscribete para aprovechar el precio del lanzamiento!</strong>
                      </p>
                    </div>
                    
                    <div class="main-banner__sliderlist">
                      <ul class="main-banner__ullist">
                        <li>Sector alta valorización</li>
                        <li>A 10 minutos estación estrella</li>
                        <li>No te pierdas las opotunidades del lanzamiento.</li>
                      </ul>
                    </div>
                    <div class="main-btn__mobile d-lg-none d-md-none d-sm none d-block">
                      <a class="btn_custom btn--medium btn--filled" href="" data-toggle="modal" data-target="#contact">
                        Contáctanos
                      </a>
                    </div>
                  </div>
              </div>
            </div>

            <div class="main-banner__sliderimg">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/banner.png" alt="">
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>

</section>
<?php get_footer();?>