<?php $this->load->view('layout/general/headerHTML')?>

<!-- CONTENEDOR DEL NAVBAR -->
  <div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;"></div> <!--removed by integration-->
    <?php $this->load->view('layout/general/navbar') ?>
<div class="j-menu-container"></div>
<!-- CONTENEDOR DEL NAVBAR -->



  <div class="l-main-container">

  <div class="b-slidercontainer b-slider b-slider--thumb">
      <div class="j-fullscreenslider j-arr-nexttobullets">
          <ul>
              <li data-transition="" data-slotamount="12" >
                  <div class="tp-bannertimer"></div>
                  <img data-retina src="<?php echo base_url('recursos/front1/'); ?>img/slider/section-bg-2.jpg">
                  <div class="caption lft caption-left"  data-x="left" data-y="150" data-hoffset="60" data-speed="700" data-start="2000">
                      <div class="b-slider-lg-info-l__item-title f-slider-lg-info-l__item-title b-slider-lg-info-l__item-title-tertiary">
                          <h2 class="f-primary-l">Titulo 2 img1</h2>
                          <h1 class="f-primary-b">Titulo 1 img1</h1>
                      </div>
                  </div>
                  <div class="caption lfl caption-left"  data-x="left" data-y="270" data-speed="1000" data-start="2600">
                      <div class="b-slider-lg-info-l__item-link f-slider-lg-info-l__item-link">
                          <a href="#" class="b-slider-lg-info-l__item-anchor f-slider-lg-info-l__item-anchor f-primary-b">Barra de la img 1</a>
                          <span class="b-slider-lg-info-l__item-link-after"><i class="fa fa-chevron-right"></i></span>
                      </div>
                  </div>
              </li>
              <li data-transition="3dcurtain-vertical" data-slotamount="7" >
                  <div class="tp-bannertimer"></div>
                  <img data-retina src="<?php echo base_url('recursos/front1/'); ?>img/slider/section-bg-4.jpg">
                  <div class="caption lft caption-left"  data-x="left" data-y="150" data-hoffset="60" data-speed="700" data-start="2000">
                      <div class="b-slider-lg-info-l__item-title f-slider-lg-info-l__item-title b-slider-lg-info-l__item-title-tertiary b-bg-slider-lg-info-l__item-title">
                          <h2 class="f-primary-l">Titulo 2 img 2</h2>
                          <h1 class="f-primary-b">Titulo 1 img 2</h1>
                      </div>
                  </div>
                  <div class="caption lfl caption-left"  data-x="left" data-y="270" data-speed="1000" data-start="2600">
                      <div class="b-slider-lg-info-l__item-link f-slider-lg-info-l__item-link">
                          <a href="#" class="b-slider-lg-info-l__item-anchor f-slider-lg-info-l__item-anchor f-primary-b">Barra de la img 2</a>
                          <span class="b-slider-lg-info-l__item-link-after"><i class="fa fa-chevron-right"></i></span>
                      </div>
                  </div>
              </li>
              <li data-transition="slotfade-vertical" data-slotamount="7" >
                  <div class="tp-bannertimer"></div>
                  <img data-retina src="<?php echo base_url('recursos/front1/'); ?>img/slider/slider-education.jpg">
                  <div class="caption lft caption-left"  data-x="left" data-y="150" data-hoffset="60" data-speed="700" data-start="2000">
                      <div class="b-slider-lg-info-l__item-title f-slider-lg-info-l__item-title b-slider-lg-info-l__item-title-tertiary b-bg-slider-lg-info-l__item-title">
                          <h2 class="f-primary-l">Titulo 2 img 3 </h2>
                          <h1 class="f-primary-b">Titulo1 img 3</h1>
                      </div>
                  </div>
                  <div class="caption lfl caption-left"  data-x="left" data-y="270" data-speed="1000" data-start="2600">
                      <div class="b-slider-lg-info-l__item-link f-slider-lg-info-l__item-link">
                          <a href="#" class="b-slider-lg-info-l__item-anchor f-slider-lg-info-l__item-anchor f-primary-b">Barra de la img 3</a>
                          <span class="b-slider-lg-info-l__item-link-after"><i class="fa fa-chevron-right"></i></span>
                      </div>
                  </div>
              </li>
          </ul>
      </div>
  </div>

  <!--<section class="b-infoblock  ">
    <div class="container">
        <div class="row j-masonry b-col-default-indent">
            <div class="masonry-gridSizer col-md-4 col-sm-6 col-xs-12"></div>
            <div class="j-masonry-item col-md-4 col-sm-6 col-xs-12">
                <div class="b-blog-preview">
    <div class="b-blog-preview__img view view-sixth">
    <img data-retina="" src="<?php echo base_url('recursos/front1/'); ?>img/homepage/index_blog_1.jpg" alt="">
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="blog_detail_right_slidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
    <div class="b-blog-preview__content b-diagonal-line-bg-light">
        <div class="b-blog-preview__content-padding_box">
            <p class="f-blog-preview__content-title f-primary-b"><a href="blog_detail_right_slidebar.html">Semper at egestas sed, elementum</a></p>
            <p class="f-blog-preview__content-date f-primary-it">May 24th, 2013</p>
            <p class="b-blog-preview__content-text f-blog-preview__content-text">Suspendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. </p>
        </div>
        <div class="b-footer-mini b-alternative-bg">
            <a class="f-footer-mini__link f-more f-primary-b" href="blog_detail_right_slidebar.html"><i class="fa fa-angle-double-right"></i> Read more</a>
            <a class="f-footer-mini-text f-more f-footer-mini-right" href="#"><i class="fa fa-comment"></i> 12 Comments</a>
        </div>
    </div>
</div>
            </div>
            <div class="j-masonry-item col-md-4 col-sm-6 col-xs-12">
                <div class="b-blog-preview">
    <div class="b-blog-preview__img view view-sixth">
    <img data-retina="" src="<?php echo base_url('recursos/front1/'); ?>img/homepage/index_blog_3.jpg" alt="">
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="blog_detail_right_slidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
    <div class="b-blog-preview__content b-diagonal-line-bg-light">
        <div class="b-blog-preview__content-padding_box">
            <p class="f-blog-preview__content-title f-primary-b"><a href="blog_detail_right_slidebar.html">Semper at egestas sed, elementum</a></p>
            <p class="f-blog-preview__content-date f-primary-it">May 24th, 2013</p>
            <p class="b-blog-preview__content-text f-blog-preview__content-text">Suspendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. </p>
        </div>
        <div class="b-footer-mini b-alternative-bg">
            <a class="f-footer-mini__link f-more f-primary-b" href="blog_detail_right_slidebar.html"><i class="fa fa-angle-double-right"></i> Read more</a>
            <a class="f-footer-mini-text f-more f-footer-mini-right" href="#"><i class="fa fa-comment"></i> 12 Comments</a>
        </div>
    </div>
</div>
            </div>
            <div class="j-masonry-item col-md-4 col-sm-6 col-xs-12">
                <div class="b-blog-preview">
    <div class="b-audio-player">
        <div id="jquery_jplayer_1" class="jp-jplayer"></div>
        <div id="jp_container_1" class="jp-audio">
            <div class="b-audio-player__song-name f-audio-player__song-name f-primary-l jp-title"></div>
            <div class="jp-type-playlist">
                <div class="jp-gui jp-interface b-audio-player__content">
                    <ul class="jp-controls b-audio-player__content_nav f-audio-player__content_nav">
                        <li class="b-audio-player__content_nav_prev"><a href="<?php echo base_url('recursos/front1/'); ?>javascript:;" class="jp-previous " tabindex="1"><i class="fa fa-backward"></i></a></li>
                        <li class="b-audio-player__content_nav_play"><a href="<?php echo base_url('recursos/front1/'); ?>javascript:;" class="jp-play " tabindex="1"><i class="fa fa-play"></i></a><a href="<?php echo base_url('recursos/front1/'); ?>javascript:;" class="jp-pause" tabindex="1"><i class="fa fa-pause"></i></a></li>
                        <li class="b-audio-player__content_nav_next"><a href="<?php echo base_url('recursos/front1/'); ?>javascript:;" class="jp-next " tabindex="1"><i class="fa fa-forward"></i></a></li>
                    </ul>
                    <div class="b-audio-player__content_inner f-audio-player__content_inner">
                        <div class="jp-time-holder b-audio-player__time f-audio-player__time">
                            <div class="jp-current-time"></div>
                        </div>
                        <div class="jp-time-holder b-audio-player__full-time">
                            <div class="jp-duration"></div>
                        </div>
                        <div class="jp-progress b-audio-player__progress-bar_box">
                            <div class="b-audio-player__progress-bar_container">
                                <div class="jp-seek-bar b-audio-player__progress-bar">
                                    <div class="jp-play-bar b-audio-player__progress-bar_progress"><div class="b-audio-player__progress-bar_progress_btn"></div></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="jp-playlist">
                    <ul>
                        <li></li>
                    </ul>
                </div>
                <div class="jp-no-solution">
                    <span>Update Required</span>
                    To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                </div>
            </div>
        </div>
    </div>
    <div class="b-blog-preview__content b-diagonal-line-bg-light">
        <div class="b-blog-preview__content-padding_box">
            <p class="f-blog-preview__content-title f-primary-b"><a href="blog_detail_audio_post.html">Semper at egestas sed, elementum</a></p>
            <p class="f-blog-preview__content-date f-primary-it">May 24th, 2013</p>
            <p class="b-blog-preview__content-text f-blog-preview__content-text">Suspendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. </p>
        </div>
        <div class="b-footer-mini b-alternative-bg">
            <a class="f-footer-mini__link f-more f-primary-b" href="blog_detail_audio_post.html"><i class="fa fa-angle-double-right"></i> Read more</a>
            <a class="f-footer-mini-text f-more f-footer-mini-right" href="#"><i class="fa fa-comment"></i> 12 Comments</a>
        </div>
    </div>
</div>
            </div>
            <div class="j-masonry-item col-md-4 col-sm-6 col-xs-12">
                <div class="b-blog-preview">
    <div class="b-blog-preview__img view view-sixth">
    <img data-retina="" src="<?php echo base_url('recursos/front1/'); ?>img/homepage/index_blog_4.jpg" alt="">
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="blog_detail_right_slidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
    <div class="b-blog-preview__content b-diagonal-line-bg-light">
        <div class="b-blog-preview__content-padding_box">
            <p class="f-blog-preview__content-title f-primary-b"><a href="blog_detail_right_slidebar.html">Semper at egestas sed, elementum</a></p>
            <p class="f-blog-preview__content-date f-primary-it">May 24th, 2013</p>
            <p class="b-blog-preview__content-text f-blog-preview__content-text">Suspendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. </p>
        </div>
        <div class="b-footer-mini b-alternative-bg">
            <a class="f-footer-mini__link f-more f-primary-b" href="blog_detail_right_slidebar.html"><i class="fa fa-angle-double-right"></i> Read more</a>
            <a class="f-footer-mini-text f-more f-footer-mini-right" href="#"><i class="fa fa-comment"></i> 12 Comments</a>
        </div>
    </div>
</div>
            </div>
            <div class="j-masonry-item col-md-4 col-sm-6 col-xs-12">
                <div class="b-blog-preview">
    <div class="b-blog-preview__img view view-sixth">
    <img data-retina="" src="<?php echo base_url('recursos/front1/'); ?>img/homepage/index_blog_2.jpg" alt="">
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="blog_detail_right_slidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
    <div class="b-blog-preview__content b-diagonal-line-bg-light">
        <div class="b-blog-preview__content-padding_box">
            <p class="f-blog-preview__content-title f-primary-b"><a href="blog_detail_right_slidebar.html">Semper at egestas sed, elementum</a></p>
            <p class="f-blog-preview__content-date f-primary-it">May 24th, 2013</p>
            <p class="b-blog-preview__content-text f-blog-preview__content-text">Suspendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. </p>
        </div>
        <div class="b-footer-mini b-alternative-bg">
            <a class="f-footer-mini__link f-more f-primary-b" href="blog_detail_right_slidebar.html"><i class="fa fa-angle-double-right"></i> Read more</a>
            <a class="f-footer-mini-text f-more f-footer-mini-right" href="#"><i class="fa fa-comment"></i> 12 Comments</a>
        </div>
    </div>
</div>
            </div>
            <div class="j-masonry-item col-md-4 col-sm-6 col-xs-12">
                <div class="b-blog-preview">
    <div class="b-audio-player">
        <div id="jquery_jplayer_2" class="jp-jplayer"></div>
        <div id="jp_container_2" class="jp-audio">
            <div class="b-audio-player__song-name f-audio-player__song-name f-primary-l jp-title"></div>
            <div class="jp-type-playlist">
                <div class="jp-gui jp-interface b-audio-player__content">
                    <ul class="jp-controls b-audio-player__content_nav f-audio-player__content_nav">
                        <li class="b-audio-player__content_nav_prev"><a href="<?php echo base_url('recursos/front1/'); ?>javascript:;" class="jp-previous " tabindex="1"><i class="fa fa-backward"></i></a></li>
                        <li class="b-audio-player__content_nav_play"><a href="<?php echo base_url('recursos/front1/'); ?>javascript:;" class="jp-play " tabindex="1"><i class="fa fa-play"></i></a><a href="<?php echo base_url('recursos/front1/'); ?>javascript:;" class="jp-pause" tabindex="1"><i class="fa fa-pause"></i></a></li>
                        <li class="b-audio-player__content_nav_next"><a href="<?php echo base_url('recursos/front1/'); ?>javascript:;" class="jp-next " tabindex="1"><i class="fa fa-forward"></i></a></li>
                    </ul>
                    <div class="b-audio-player__content_inner f-audio-player__content_inner">
                        <div class="jp-time-holder b-audio-player__time f-audio-player__time">
                            <div class="jp-current-time"></div>
                        </div>
                        <div class="jp-time-holder b-audio-player__full-time">
                            <div class="jp-duration"></div>
                        </div>
                        <div class="jp-progress b-audio-player__progress-bar_box">
                            <div class="b-audio-player__progress-bar_container">
                                <div class="jp-seek-bar b-audio-player__progress-bar">
                                    <div class="jp-play-bar b-audio-player__progress-bar_progress"><div class="b-audio-player__progress-bar_progress_btn"></div></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="jp-playlist">
                    <ul>
                        <li></li>
                    </ul>
                </div>
                <div class="jp-no-solution">
                    <span>Update Required</span>
                    To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                </div>
            </div>
        </div>
    </div>
    <div class="b-blog-preview__content b-diagonal-line-bg-light">
        <div class="b-blog-preview__content-padding_box">
            <p class="f-blog-preview__content-title f-primary-b"><a href="blog_detail_audio_post.html">Semper at egestas sed, elementum</a></p>
            <p class="f-blog-preview__content-date f-primary-it">May 24th, 2013</p>
            <p class="b-blog-preview__content-text f-blog-preview__content-text">Suspendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. </p>
        </div>
        <div class="b-footer-mini b-alternative-bg">
            <a class="f-footer-mini__link f-more f-primary-b" href="blog_detail_audio_post.html"><i class="fa fa-angle-double-right"></i> Read more</a>
            <a class="f-footer-mini-text f-more f-footer-mini-right" href="#"><i class="fa fa-comment"></i> 12 Comments</a>
        </div>
    </div>
</div>
            </div>
            <div class="j-masonry-item col-md-4 col-sm-6 col-xs-12">
                <div class="b-blog-preview">
    <div class="b-blog-preview__img view view-sixth">
    <img data-retina="" src="<?php echo base_url('recursos/front1/'); ?>img/homepage/index_blog_5.jpg" alt="">
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="blog_detail_right_slidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
    <div class="b-blog-preview__content b-diagonal-line-bg-light">
        <div class="b-blog-preview__content-padding_box">
            <p class="f-blog-preview__content-title f-primary-b"><a href="blog_detail_right_slidebar.html">Semper at egestas sed, elementum</a></p>
            <p class="f-blog-preview__content-date f-primary-it">May 24th, 2013</p>
            <p class="b-blog-preview__content-text f-blog-preview__content-text">Suspendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. </p>
        </div>
        <div class="b-footer-mini b-alternative-bg">
            <a class="f-footer-mini__link f-more f-primary-b" href="blog_detail_right_slidebar.html"><i class="fa fa-angle-double-right"></i> Read more</a>
            <a class="f-footer-mini-text f-more f-footer-mini-right" href="#"><i class="fa fa-comment"></i> 12 Comments</a>
        </div>
    </div>
</div>
            </div>
            <div class="j-masonry-item col-md-4 col-sm-6 col-xs-12">
                <div class="b-blog-preview">
    <div class="b-audio-player">
        <div id="jquery_jplayer_3" class="jp-jplayer"></div>
        <div id="jp_container_3" class="jp-audio">
            <div class="b-audio-player__song-name f-audio-player__song-name f-primary-l jp-title"></div>
            <div class="jp-type-playlist">
                <div class="jp-gui jp-interface b-audio-player__content">
                    <ul class="jp-controls b-audio-player__content_nav f-audio-player__content_nav">
                        <li class="b-audio-player__content_nav_prev"><a href="<?php echo base_url('recursos/front1/'); ?>javascript:;" class="jp-previous " tabindex="1"><i class="fa fa-backward"></i></a></li>
                        <li class="b-audio-player__content_nav_play"><a href="<?php echo base_url('recursos/front1/'); ?>javascript:;" class="jp-play " tabindex="1"><i class="fa fa-play"></i></a><a href="<?php echo base_url('recursos/front1/'); ?>javascript:;" class="jp-pause" tabindex="1"><i class="fa fa-pause"></i></a></li>
                        <li class="b-audio-player__content_nav_next"><a href="<?php echo base_url('recursos/front1/'); ?>javascript:;" class="jp-next " tabindex="1"><i class="fa fa-forward"></i></a></li>
                    </ul>
                    <div class="b-audio-player__content_inner f-audio-player__content_inner">
                        <div class="jp-time-holder b-audio-player__time f-audio-player__time">
                            <div class="jp-current-time"></div>
                        </div>
                        <div class="jp-time-holder b-audio-player__full-time">
                            <div class="jp-duration"></div>
                        </div>
                        <div class="jp-progress b-audio-player__progress-bar_box">
                            <div class="b-audio-player__progress-bar_container">
                                <div class="jp-seek-bar b-audio-player__progress-bar">
                                    <div class="jp-play-bar b-audio-player__progress-bar_progress"><div class="b-audio-player__progress-bar_progress_btn"></div></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="jp-playlist">
                    <ul>
                        <li></li>
                    </ul>
                </div>
                <div class="jp-no-solution">
                    <span>Update Required</span>
                    To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                </div>
            </div>
        </div>
    </div>
    <div class="b-blog-preview__content b-diagonal-line-bg-light">
        <div class="b-blog-preview__content-padding_box">
            <p class="f-blog-preview__content-title f-primary-b"><a href="blog_detail_audio_post.html">Semper at egestas sed, elementum</a></p>
            <p class="f-blog-preview__content-date f-primary-it">May 24th, 2013</p>
            <p class="b-blog-preview__content-text f-blog-preview__content-text">Suspendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. </p>
        </div>
        <div class="b-footer-mini b-alternative-bg">
            <a class="f-footer-mini__link f-more f-primary-b" href="blog_detail_audio_post.html"><i class="fa fa-angle-double-right"></i> Read more</a>
            <a class="f-footer-mini-text f-more f-footer-mini-right" href="#"><i class="fa fa-comment"></i> 12 Comments</a>
        </div>
    </div>
</div>
            </div>
        </div>
        <div class="b-default-top-indent">
            <div class="f-center b-remaining">
    <div class="b-hr-with-btn">
        <a class="b-btn b-btn--load f-btn b-btn-sm f-btn-load f-btn-sm f-primary-b"><i class="fa fa-spinner"></i> Load more</a>
    </div>
</div>
        </div>
    </div>
  </section>

  <section class="b-infoblock b-diagonal-line-bg-light">
    <div class="container">
      <div class="col-md-4 col-sm-12 col-xs-12">
        <h3 class="f-primary-l">client <span class="f-primary-b">say</span></h3>
        <div class="b-mention-short-item">
          <div class="b-mention-short-item__comment">
            <div class="f-mention-short-item__comment_name f-primary-b">Really great work</div>
            <div class="b-mention-short-item__comment_text f-mention-short-item__comment_text">usce eu nisi risus. Vestibulum mattis, velit nec pell entesque varius, mi est dignissim massa, at volu  pat mi augue quis risus. Suspendisse vitae lectus in tellus scelerisque aliquam. Lorem ipsum dolor sit amet purus consectetuer vulputate vitae...</div>
            <div class="b-stars-group f-stars-group">
              <i class="fa fa-star is-active-stars"></i>
              <i class="fa fa-star is-active-stars"></i>
              <i class="fa fa-star is-active-stars"></i>
              <i class="fa fa-star is-active-stars"></i>
              <i class="fa fa-star"></i>
            </div>
          </div>
          <div class="b-mention-short-item__user">
            <div class="b-mention-short-item__user_img b-right">
              <img class="fade-in-animate" data-retina src="<?php echo base_url('recursos/front1/'); ?>img/users/user.png" alt=""/>
            </div>
            <div class="b-mention-short-item__user_info f-right">
              <div class="f-mention-short-item__user_name f-primary-b">Mark Alexis</div>
              <div class="f-mention-short-item__user_position">CEO & Founder - Envato</div>
            </div>
          </div>
        </div>
        <hr class="b-hr-light hidden-lg" />
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <h3 class="f-primary-l">popular <span class="f-primary-b">posts</span></h3>
        <div class="b-blog-short-post b-blog-short-post--w-img f-blog-short-post--w-img row">
          <div class="b-blog-short-post__item col-md-12 col-sm-6 col-xs-12 f-primary-b">
            <div class="b-blog-short-post__item_img">
              <a href="#"><img data-retina src="<?php echo base_url('recursos/front1/'); ?>img/homepage/post-img_1.jpg" alt=""/></a>
            </div>
            <div class="b-remaining">
              <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                <a href="#">Phasellus id mattis dolorunc et erat hendrerit, tincidunt</a>
              </div>
              <div class="b-blog-short-post__item_date f-blog-short-post__item_date f-primary-it">
                10, January, 2014
              </div>
            </div>
          </div>
          <div class="b-blog-short-post__item col-md-12 col-sm-6 col-xs-12 f-primary-b">
            <div class="b-blog-short-post__item_img">
              <a href="#"><img data-retina src="<?php echo base_url('recursos/front1/'); ?>img/homepage/post-img_2.jpg" alt=""/></a>
            </div>
            <div class="b-remaining">
              <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                <a href="#">Nam volutpat orci non nisi pharetra, vitae sagittis leo bibendum</a>
              </div>
              <div class="b-blog-short-post__item_date f-blog-short-post__item_date f-primary-it">
                14, January, 2014
              </div>
            </div>
          </div>
          <div class="b-blog-short-post__item col-md-12 col-sm-6 col-xs-12 f-primary-b">
            <div class="b-blog-short-post__item_img">
              <a href="#"><img data-retina src="<?php echo base_url('recursos/front1/'); ?>img/homepage/post-img_3.jpg" alt=""/></a>
            </div>
            <div class="b-remaining">
              <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                <a href="#">Lorem ipsum dolor sit amet purus vitae magna rhoncus</a>
              </div>
              <div class="b-blog-short-post__item_date f-blog-short-post__item_date f-primary-it">
                10, January, 2014
              </div>
            </div>
          </div>
          <div class="b-blog-short-post__item col-md-12 col-sm-6 col-xs-12 f-primary-b">
            <div class="b-blog-short-post__item_img">
              <a href="#"><img data-retina src="<?php echo base_url('recursos/front1/'); ?>img/homepage/post-img_4.jpg" alt=""/></a>
            </div>
            <div class="b-remaining">
              <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                <a href="#">Vulputate vitae, congue tristique.pulvinar vulpu</a>
              </div>
              <div class="b-blog-short-post__item_date f-blog-short-post__item_date f-primary-it">
                10, January, 2014
              </div>
            </div>
          </div>
        </div>
        <hr class="b-hr-light hidden-lg" />
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <h3 class="f-primary-l">twitter <span class="f-primary-b">feeds</span></h3>
        <div class="b-twitter-feeds row">
          <div class="col-md-12 col-sm-4 col-xs-12">
            <div class="b-twitter-feeds__item">
              <div class="b-twitter-feeds__item_name f-twitter-feeds__item_name f-primary-b"><i class="fa fa-twitter"></i> frexy studio</div>
              <div class="b-twitter-feeds__item_twit f-twitter-feeds__item_twit">
                Lorem ipsum dolor sit amet, consectetur adip iscing elit. Curabitur ut blandit sapien. <a href="http://t.co/hd3sk" target="_blank">http://t.co/hd3sk</a>
              </div>
              <div class="b-twitter-feeds__item_date f-twitter-feeds__item_date f-primary-it">2 days ago</div>
            </div>
          </div>
          <div class="col-md-12 col-sm-4 col-xs-12">
            <div class="b-twitter-feeds__item">
              <div class="b-twitter-feeds__item_name f-twitter-feeds__item_name f-primary-b"><i class="fa fa-twitter"></i> frexy studio</div>
              <div class="b-twitter-feeds__item_twit f-twitter-feeds__item_twit">
                Lorem ipsum dolor sit amet, consectetur adip iscing elit. Curabitur ut blandit sapien. <a href="http://t.co/hd3sk" target="_blank">http://t.co/hd3sk</a>
              </div>
              <div class="b-twitter-feeds__item_date f-twitter-feeds__item_date f-primary-it">2 days ago</div>
            </div>
          </div>
          <div class="col-md-12 col-sm-4 col-xs-12">
            <div class="b-twitter-feeds__item">
              <div class="b-twitter-feeds__item_name f-twitter-feeds__item_name f-primary-b"><i class="fa fa-twitter"></i> frexy studio</div>
              <div class="b-twitter-feeds__item_twit f-twitter-feeds__item_twit">
                Lorem ipsum dolor sit amet, consectetur adip iscing elit. Curabitur ut blandit sapien. <a href="http://t.co/hd3sk" target="_blank">http://t.co/hd3sk</a>
              </div>
              <div class="b-twitter-feeds__item_date f-twitter-feeds__item_date f-primary-it">2 days ago</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->

  <div class="container">
    <h3>Apuestas peleas de gallos en toda la republica</h3>
    <p>
     Nuestros Valores:
       Excelencia: Brindamos el mejor servicio, el de mejor calidad (y el más confiable), en las apuestas en peleas de gallos por internet.
 
      Integridad: Respetamos la decisión de nuestros (clientes) socios en las apuestas, (garantizando la seguridad de su dinero) y el pago inmediato de las   (como si      estuviera presente en el evento).
    </p>
  </div>

</div>

<?php $this->load->view('layout/general/footer') ?>