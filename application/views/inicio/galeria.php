<?php $this->load->view('layout/general/headerHTML')?>

<!-- CONTENEDOR DEL NAVBAR -->
  <div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;"></div> <!--removed by integration-->
    <?php $this->load->view('layout/general/navbar') ?>
<div class="j-menu-container"></div>
<!-- CONTENEDOR DEL NAVBAR -->


<div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
  <div class="b-inner-page-header__content">
    <div class="container">
      <h1 class="f-primary-l c-default">Nuestra Galeria</h1>
      <div class="f-primary-l f-inner-page-header_title-add c-senary">Mejores imagenes y vidos </div>
    </div>
  </div>
</div>
<div class="l-main-container">

    <div class="b-breadcrumbs f-breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>Inicio</a></li>
                <li><i class="fa fa-angle-right"></i><a href="#">Galeria</a></li>
                <!--<li><i class="fa fa-angle-right"></i><span>2 columns</span></li>-->
            </ul>
        </div>
    </div>
    <section class="b-infoblock--without-border">
        <div class="container">
            <!--<div class="b-category-filter f-category-filter j-filter">
                <ul>
                    <li class="is-category-filter-active"><a data-filter="all" href="#">All</a></li>
                    <li><a data-filter=".j-filter-portrait" href="#">Portrait</a></li>
                    <li><a data-filter=".j-filter-street" href="#">Street life</a></li>
                    <li><a data-filter=".j-filter-fashion" href="#">Fashion</a></li>
                    <li><a data-filter=".j-filter-landscape" href="#">Landscape</a></li>
                    <li><a data-filter=".j-filter-black-white" href="#">Black and white</a></li>
                    <li><a data-filter=".j-filter-macro" href="#">Macro</a></li>
                </ul>
            </div>-->

            <div class="j-filter-content">
              <div class="row b-col-default-indent b-gallery--secondary j-masonry">
                <div class="masonry-gridSizer col-sm-6"></div>
                <div class="j-masonry-item col-sm-6 j-filter-portrait j-filter-fashion j-filter-landscape">
                  <div>
                    <div class="b-gallery-main-item view view-eighth">
    <img data-retina='' src="<?php echo base_url('recursos/front1/'); ?>img/gallery/big/gallery_1.jpg">
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group b-default-top-indent">
                <a href="<?php echo base_url('recursos/front1/'); ?>img/gallery/big/gallery_1.jpg" class='b-btn f-btn b-btn-light f-btn-light fancybox info' rel='gallery1' title='Be my Valentine'><i class='fa fa-arrows-alt'></i></a>
                <div class="f-uppercase c-white f-title-small b-default-top-indent f-primary-b">Some title for picture</div>
            </div>
        </div>
    </div>
</div>
                  </div>
                </div>
                <div class="j-masonry-item col-sm-6 j-filter-street j-filter-black-white j-filter-macro">
                  <div>
                    <div class="b-gallery-main-item view view-eighth">
    <img data-retina='' src="<?php echo base_url('recursos/front1/'); ?>img/gallery/gallery_2.jpg">
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group b-default-top-indent">
                <a href="<?php echo base_url('recursos/front1/'); ?>img/gallery/big/gallery_2.jpg" class='b-btn f-btn b-btn-light f-btn-light fancybox info' rel='gallery1' title='Be my Valentine'><i class='fa fa-arrows-alt'></i></a>
                <div class="f-uppercase c-white f-title-small b-default-top-indent f-primary-b">Some title for picture</div>
            </div>
        </div>
    </div>
</div>
                  </div>
                </div>
                <div class="j-masonry-item col-sm-6 j-filter-street j-filter-fashion j-filter-landscape">
                  <div>
                    <div class="b-gallery-main-item view view-eighth">
    <img data-retina='' src="<?php echo base_url('recursos/front1/'); ?>img/gallery/gallery_3.jpg">
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group b-default-top-indent">
                <a href="<?php echo base_url('recursos/front1/'); ?>img/gallery/big/gallery_3.jpg" class='b-btn f-btn b-btn-light f-btn-light fancybox info' rel='gallery1' title='Be my Valentine'><i class='fa fa-arrows-alt'></i></a>
                <div class="f-uppercase c-white f-title-small b-default-top-indent f-primary-b">Some title for picture</div>
            </div>
        </div>
    </div>
</div>
                  </div>
                </div>
                <div class="j-masonry-item col-sm-6 j-filter-portrait j-filter-black-white">
                  <div>
                    <div class="b-gallery-main-item view view-eighth">
    <img data-retina='' src="<?php echo base_url('recursos/front1/'); ?>img/gallery/gallery_4.jpg">
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group b-default-top-indent">
                <a href="<?php echo base_url('recursos/front1/'); ?>img/gallery/big/gallery_4.jpg" class='b-btn f-btn b-btn-light f-btn-light fancybox info' rel='gallery1' title='Be my Valentine'><i class='fa fa-arrows-alt'></i></a>
                <div class="f-uppercase c-white f-title-small b-default-top-indent f-primary-b">Some title for picture</div>
            </div>
        </div>
    </div>
</div>
                  </div>
                </div>
                <div class="j-masonry-item col-sm-6 j-filter-street j-filter-fashion j-filter-macro">
                  <div>
                    <div class="b-gallery-main-item view view-eighth">
    <img data-retina='' src="<?php echo base_url('recursos/front1/'); ?>img/gallery/gallery_5.jpg">
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group b-default-top-indent">
                <a href="<?php echo base_url('recursos/front1/'); ?>img/gallery/big/gallery_5.jpg" class='b-btn f-btn b-btn-light f-btn-light fancybox info' rel='gallery1' title='Be my Valentine'><i class='fa fa-arrows-alt'></i></a>
                <div class="f-uppercase c-white f-title-small b-default-top-indent f-primary-b">Some title for picture</div>
            </div>
        </div>
    </div>
</div>
                  </div>
                </div>
                <div class="j-masonry-item col-sm-6 j-filter-portrait j-filter-fashion j-filter-black-white j-filter-macro">
                  <div>
                    <div class="b-gallery-main-item view view-eighth">
    <img data-retina='' src="<?php echo base_url('recursos/front1/'); ?>img/gallery/gallery_6.jpg">
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group b-default-top-indent">
                <a href="<?php echo base_url('recursos/front1/'); ?>img/gallery/big/gallery_6.jpg" class='b-btn f-btn b-btn-light f-btn-light fancybox info' rel='gallery1' title='Be my Valentine'><i class='fa fa-arrows-alt'></i></a>
                <div class="f-uppercase c-white f-title-small b-default-top-indent f-primary-b">Some title for picture</div>
            </div>
        </div>
    </div>
</div>
                  </div>
                </div>
              </div>
            </div>

            <!--<div class="b-default-top-indent b-remaining b-remaining--full-width">
                <div class="f-center b-remaining">
    <div class="b-hr-with-btn">
        <a class="b-btn b-btn--load f-btn b-btn-sm f-btn-load f-btn-sm f-primary-b"><i class="fa fa-spinner"></i> Load more</a>
    </div>-->
</div>
            </div>
        </div>
    </section>


</div>


<?php $this->load->view('layout/general/footer') ?>