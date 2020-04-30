<?php 
    $this->load->view('layout/general/headerHTML');
?>

<div>
    <?php $this->load->view('layout/general/'.$entorno); ?>
</div>

<div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
  <div class="b-inner-page-header__content">
    <div class="container">
      <h1 class="f-primary-l c-default">Nosotros</h1>
    </div>
  </div>
</div>
<div class="l-main-container">

<div class="b-breadcrumbs f-breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>Inicio</a></li>
            <li><i class="fa fa-angle-right"></i><a href="#">Nosotros</a></li>
            <!--<li><i class="fa fa-angle-right"></i><span>Version 1</span></li>-->
        </ul>
    </div>
</div>
<section class="b-remaining">
    <div class="container b-infoblock--without-border">
        <div class="row b-shortcode-example">
            <div  data-active="4" class="b-tabs-vertical b-tabs-vertical--default f-tabs-vertical j-tabs-vertical b-tabs-reset row">
    <div class="col-md-3 col-sm-4 b-tabs-vertical__nav">
        <ul>
            <li><a class="f-primary-l" href="#tabs-1"><i class="fa fa-suitcase"></i>Sobre nosotros</a></li>
            <li><a class="f-primary-l" href="#tabs-2"><i class="fa fa-suitcase"></i> Misión</a></li>
            <li><a class="f-primary-l" href="#tabs-3"><i class="fa fa-suitcase"></i> Visión</a></li>
            <!--<li><a class="f-primary-l" href="#tabs-4"><i class="fa fa-users"></i> Nuestros clientes</a></li>
            <li><a class="f-primary-l" href="#tabs-5"><i class="fa fa-home"></i> Nuestras oficinas</a></li>
            <li><a class="f-primary-l" href="#tabs-6"><i class="fa fa-comments"></i> Nuestro equipo</a></li>-->
        </ul>
    </div>
    <div class="col-md-9 col-sm-8 b-tabs-vertical__content">
        <div id="tabs-1">
            <div class="b-tabs-vertical__content-text">
                <h3 class="f-tabs-vertical__title f-primary-b">Sobre nosotros</h3>
                <p>Somos la primer plataforma por internet (empresa) que hace posible las apuestas (en línea) cara a cara en peleas de gallos (de una manera ágil y segura). </p>
            </div>
        </div>
        <div id="tabs-2">
            <div class="b-tabs-vertical__content-text">
                <h3 class="f-tabs-vertical__title f-primary-b">Misión</h3>
                <p>Lograr que sea posible, (seguro) y fácil (para los amantes de los gallos el) hacer apuestas en peleas de gallos (desde cualquier lugar de la república mexicana y fuera de ella) por internet. </p>
            </div>
        </div>
        <div id="tabs-3">
            <div class="b-tabs-vertical__content-text">
                <h3 class="f-tabs-vertical__title f-primary-b">Visión</h3>
                <p>Ser la empresa líder en México en apuestas en peleas de gallos por internet. </p>
            </div>
        </div>
        <!--<div id="tabs-4">
            <div class="b-tabs-vertical__content-text">
                <h3 class="f-tabs-vertical__title f-primary-b">What our client say?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor ligula sit amet ante facilisis, id rutrum est varius. Quisque facilisis lorem vitae lacus volutpat porttitor condimentum vitae est. Mauris gravida quam dui, ac aliquet quam rhoncus et. Donec in mi eget libero aliquet bibendum. Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.</p>
                <div class="b-carousel-reset b-carousel-arr-out b-carousel-small-arr f-carousel-small-arr b-remaining">
                    <div class="f-left b-logo-group j-logo-slider">
                        <div class="b-logo-item"><a href="#">
    <img class="is-normal" src="img/slider/partner/client-logo-1.png" alt=""/>
    <img class="is-hover" src="img/slider/partner/client-logo-1h.png" alt=""/>
</a></div>
<div class="b-logo-item"><a href="#">
    <img class="is-normal" src="img/slider/partner/client-logo-2.png" alt=""/>
    <img class="is-hover" src="img/slider/partner/client-logo-2h.png" alt=""/>
</a></div>
<div class="b-logo-item"><a href="#">
    <img class="is-normal" src="img/slider/partner/client-logo-3.png" alt=""/>
    <img class="is-hover" src="img/slider/partner/client-logo-3h.png" alt=""/>
</a></div>
<div class="b-logo-item"><a href="#">
    <img class="is-normal" src="img/slider/partner/client-logo-4.png" alt=""/>
    <img class="is-hover" src="img/slider/partner/client-logo-4h.png" alt=""/>
</a></div>
<div class="b-logo-item"><a href="#">
    <img class="is-normal" src="img/slider/partner/client-logo-5.png" alt=""/>
    <img class="is-hover" src="img/slider/partner/client-logo-5h.png" alt=""/>
</a></div>
<div class="b-logo-item"><a href="#">
    <img class="is-normal" src="img/slider/partner/client-logo-3.png" alt=""/>
    <img class="is-hover" src="img/slider/partner/client-logo-3h.png" alt=""/>
</a></div>
<div class="b-logo-item"><a href="#">
    <img class="is-normal" src="img/slider/partner/client-logo-4.png" alt=""/>
    <img class="is-hover" src="img/slider/partner/client-logo-4h.png" alt=""/>
</a></div>
<div class="b-logo-item"><a href="#">
    <img class="is-normal" src="img/slider/partner/client-logo-5.png" alt=""/>
    <img class="is-hover" src="img/slider/partner/client-logo-5h.png" alt=""/>
</a></div>

                    </div>
                </div>
            </div>
        </div>
        <div id="tabs-5">
            <div class="b-tabs-vertical__content-text">
                <h3 class="f-tabs-vertical__title f-primary-b">Content heading 5</h3>
                <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
            </div>
        </div>
        <div id="tabs-6">
            <div class="b-tabs-vertical__content-text">
                <h3 class="f-tabs-vertical__title f-primary-b">Content heading 6</h3>
                <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
            </div>
        </div>-->
    </div>
</div>
        </div>
    </div>
</section>

</div>


<?php $this->load->view('layout/general/footer') ?>