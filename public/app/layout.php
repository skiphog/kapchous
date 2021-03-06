<!doctype html>
<html lang="<?php echo html($content['lang']); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php echo html($content['description']); ?>">
    <link rel="stylesheet" href="/css/app.css">
    <title><?php echo html($content['title']); ?></title>
</head>
<body>

<header class="kapcho-header">
    <nav class="navbar navbar-default navbar-fixed-top affix-top" data-spy="affix" data-offset-top="30">
        <div class="container">

            <button id="navbar-button" type="button" class="navbar-toggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <?php foreach ((array)$content['menu'] as $id => $menu) : ?>
                        <li><a class="page-scroll" href="#<?php echo $id; ?>"><?php echo html($menu); ?></a></li>
                    <?php endforeach; ?>
                    <li>
                        <a data-toggle="modal" data-target="#contact_dialog"><?php echo html($content['contact_dialog']); ?></a>
                    </li>
                </ul>
            </div>

            <div class="navbar-language">
                <label for="select-language"><?php echo html($content['lang']); ?></label>
                <input type="checkbox" id="select-language">
                <a href="/app/cookie.php?lang=<?php echo html($content['prev']); ?>"><?php echo html($content['prev']); ?></a>
            </div>

            <a class="navbar-phone" href="tel:+79126119404">
                <span class="hidden-xs hidden-sm">+7 912 611 94 04</span>
                <div class="navbar-icon-phone visible-xs-block visible-sm-block">
                    <svg enable-background="new 0 0 139 139" height="139px" class="icon-phone" version="1.1" viewBox="0 0 139 139" width="139px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="M67.317,81.952c-9.284-7.634-15.483-17.054-18.742-22.414l-2.431-4.583c0.85-0.912,7.332-7.853,10.141-11.619  c3.53-4.729-1.588-9-1.588-9S40.296,19.933,37.014,17.076c-3.282-2.861-7.06-1.272-7.06-1.272  c-6.898,4.457-14.049,8.332-14.478,26.968C15.46,60.22,28.705,78.216,43.028,92.148c14.346,15.734,34.043,31.504,53.086,31.486  c18.634-0.425,22.508-7.575,26.965-14.473c0,0,1.59-3.775-1.268-7.06c-2.86-3.284-17.265-17.688-17.265-17.688  s-4.268-5.119-8.998-1.586c-3.525,2.635-9.855,8.496-11.38,9.917C84.171,92.749,73.582,87.104,67.317,81.952z"></path></svg>
                </div>
            </a>

        </div>
    </nav>

    <img class="kapcho-logo img-responsive" src="<?php echo $content['kapcho-logo']['path']; ?>" width="820" height="300" alt="<?php echo html($content['kapcho-logo']['alt']); ?>">

    <div class="kapcho-info">

        <div class="social-links">
            <a href="https://www.facebook.com/kapchobar" target="_blank" title="facebook" rel="noopener noreferrer">
                <svg enable-background="new 0 0 128 128" version="1.1" viewBox="0 0 112.196 112.196"
                    xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <circle cx="56.098" cy="56.098" r="56.098" class="radius"/>
                            <path d="M70.201,58.294h-10.01v36.672H45.025V58.294h-7.213V45.406h7.213v-8.34 c0-5.964,2.833-15.303,15.301-15.303L71.56,21.81v12.51h-8.151c-1.337,0-3.217,0.668-3.217,3.513v7.585h11.334L70.201,58.294z"/>
                        </g>
                    </svg>
            </a>
            <a href="https://www.instagram.com/kapchobar" target="_blank" title="instagram" rel="noopener noreferrer">
                <svg enable-background="new 0 0 128 128" height="128px" version="1.1" viewBox="0 0 128 128"
                    width="128px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <circle cx="64" cy="64" class="radius" r="64"/>
                        </g>
                    <g>
                        <path d="M91.77,28H36.229C31.702,28,28,31.703,28,36.229v55.542c0,4.525,3.702,8.229,8.229,8.229h55.543 c4.525,0,8.229-3.703,8.229-8.229V36.229C100,31.703,96.297,28,91.77,28z M51.26,58.171c2.239-4.792,7.101-8.114,12.74-8.114 c5.64,0,10.5,3.322,12.74,8.114c0.844,1.806,1.318,3.818,1.318,5.943c0,7.763-6.295,14.057-14.058,14.057 c-7.764,0-14.058-6.294-14.058-14.057C49.941,61.99,50.416,59.977,51.26,58.171z M91.599,89.371c0,1.132-0.925,2.057-2.058,2.057 H38.457c-1.132,0-2.057-0.925-2.057-2.057v-31.2h6.111c-0.526,1.912-0.797,3.906-0.797,5.943c0,5.953,2.318,11.549,6.528,15.758 c4.209,4.21,9.806,6.526,15.758,6.526s11.549-2.317,15.758-6.526c4.209-4.21,6.527-9.806,6.527-15.759 c0-2.037-0.271-4.031-0.797-5.943h6.11V89.371L91.599,89.371z M91.599,47.543c0,1.509-1.233,2.744-2.743,2.744h-8.229 c-1.509,0-2.743-1.235-2.743-2.744v-8.228c0-1.509,1.234-2.743,2.743-2.743h8.229c1.509,0,2.742,1.234,2.742,2.743V47.543 L91.599,47.543z"/>
                    </g>
                    </svg>
            </a>
            <a href="https://vk.com/kapchobar" target="_blank" title="vkontakte" rel="noopener noreferrer">
                <svg enable-background="new 0 0 128 128" version="1.1" viewBox="0 0 112.196 112.196"
                    xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <g>
                                <circle cx="56.098" cy="56.098" id="XMLID_11_" r="56.098" class="radius"/>
                            </g>
                            <path d="M53.979,80.702h4.403c0,0,1.33-0.146,2.009-0.878 c0.625-0.672,0.605-1.934,0.605-1.934s-0.086-5.908,2.656-6.778c2.703-0.857,6.174,5.71,9.853,8.235 c2.782,1.911,4.896,1.492,4.896,1.492l9.837-0.137c0,0,5.146-0.317,2.706-4.363c-0.2-0.331-1.421-2.993-7.314-8.463 c-6.168-5.725-5.342-4.799,2.088-14.702c4.525-6.031,6.334-9.713,5.769-11.29c-0.539-1.502-3.867-1.105-3.867-1.105l-11.076,0.069 c0,0-0.821-0.112-1.43,0.252c-0.595,0.357-0.978,1.189-0.978,1.189s-1.753,4.667-4.091,8.636c-4.932,8.375-6.904,8.817-7.71,8.297 c-1.875-1.212-1.407-4.869-1.407-7.467c0-8.116,1.231-11.5-2.397-12.376c-1.204-0.291-2.09-0.483-5.169-0.514 c-3.952-0.041-7.297,0.012-9.191,0.94c-1.26,0.617-2.232,1.992-1.64,2.071c0.732,0.098,2.39,0.447,3.269,1.644 c1.135,1.544,1.095,5.012,1.095,5.012s0.652,9.554-1.523,10.741c-1.493,0.814-3.541-0.848-7.938-8.446 c-2.253-3.892-3.954-8.194-3.954-8.194s-0.328-0.804-0.913-1.234c-0.71-0.521-1.702-0.687-1.702-0.687l-10.525,0.069 c0,0-1.58,0.044-2.16,0.731c-0.516,0.611-0.041,1.875-0.041,1.875s8.24,19.278,17.57,28.993 C44.264,81.287,53.979,80.702,53.979,80.702L53.979,80.702z"/>
                        </g>
                    </svg>
            </a>
        </div>

        <div id="TA_cdsscrollingravewide128" class="TA_cdsscrollingravewide">
            <span class="cls"></span>
            <div id="CDSSCROLLINGRAVE" class="white shadow wide">
                <div class="rightBorder">
                    <a target="_blank" href="https://www.tripadvisor.ru/" rel="noopener noreferrer">
                        <img src="/img/Stacked_TA_logo.png" width="62" height="38" alt="Advisor">
                    </a>
                </div>
            </div>
        </div>

    </div>
</header>

<section>
    <h1 class="visually-hidden"><?php echo html($content['h1']); ?></h1>
    <video class="page-video" controls>
        <source src='/video/kap.webm' type='video/webm; codecs="vp8.0, vorbis"'/>
        <source src='/video/kap.ogv' type='video/ogg; codecs="theora, vorbis"'/>
        <source src='/video/kap.mp4' type='video/mp4; codecs="avc1.4D401E, mp4a.40.2"'/>
    </video>

</section>

<section id="cho-v-kapcho" class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2 kap-section-text">
            <h2 class="text-center"><?php echo html($content['cho-v-kapcho']['h2']); ?></h2>
            <hr class="kap-line-bottom">
            <p><?php echo html($content['cho-v-kapcho']['content']); ?></p>
        </div>
    </div>

</section>

<section id="kapcho-gallery">
    <h2 class="visually-hidden"><?php echo html($content['kapcho-gallery']['h2']); ?></h2>
    <div class="gallery">
        <?php foreach((array)$content['kapcho-gallery']['gallery'] as $img) : ?>
            <div class="gallery-item"><img src="<?php echo $img['path']; ?>" alt="<?php echo html($img['alt']); ?>"></div>
        <?php endforeach; ?>
    </div>

</section>

<section id="kapcho-eat" class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 kap-section-text">
            <div class="eat">
                <div class="eat-header">
                    <h2 class="eat-title"><?php echo html($content['kapcho-eat']['h2']); ?></h2>
                </div>

                <div class="eat-content">

                    <?php foreach((array)$content['kapcho-eat']['eat-content'] as $item) : ?>
                        <a class="eat-content-pdf" href="<?php echo $item['link']; ?>" target="_blank" rel="noopener noreferrer">
                            <div class="pdf-cover"><?php echo html($item['title']); ?></div>
                            <div class="download-text"><?php echo html($item['text']); ?></div>
                        </a>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1 kapcho-eat-info">
            <?php echo html($content['kapcho-eat']['notice']); ?>
        </div>
    </div>
</section>

<section id="kapcho-contacts" class="section-contacts text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 contacts">
                <h2 class="contacts-title"><?php echo html($content['kapcho-contacts']['h2']); ?></h2>
                <hr class="kap-line-bottom">
                <p><?php echo html($content['kapcho-contacts']['address']); ?></p>
                <p><?php echo html($content['kapcho-contacts']['mail']); ?>: <a href="mailto:kapcho.ekb@gmail.com">kapcho.ekb@gmail.com</a></p>
                <p><?php echo html($content['kapcho-contacts']['phone']); ?>: <a href="tel:+79126119404">+7 912 611 94 04</a></p>
                <p><?php echo html($content['kapcho-contacts']['what']); ?> WhatsApp</p>
            </div>
        </div>
    </div>
</section>

<section class="works-time">
    <h2 class="visually-hidden"><?php echo html($content['works-time']['h2']); ?></h2>
    <div class="container">
        <div class="row contacts text-center">
            <?php foreach((array)$content['works-time']['time'] as $time) : ?>
                <div class="col-sm-3">
                    <p><?php echo html($time['days']); ?></p>
                    <p><?php echo html($time['hours']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section>

    <h2 class="visually-hidden"><?php echo html($content['map']['h2']); ?></h2>

    <div class="map-container <?php echo html($content['lang']); ?>">
        <div class="loader loader-default"></div>
        <div id="map-google" data-point="56.83449998,60.61172628" data-mapstyle="" data-mapzoom="17"
            data-icon="/img/cho_map.png;48,64;24,32;0,0;12,32"></div>
    </div>

</section>

<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 copyright">© <?php echo html($content['copyright']); ?></div>
            <div class="footer-icons col-sm-4">
                <a href="https://www.facebook.com/kapchobar" title="Facebook" target="_blank" rel="noopener noreferrer" class="kap-block-footer-ico">
                    <svg id="Capa_2" style="enable-background:new 0 0 112.196 112.196;" version="1.1" viewBox="0 0 112.196 112.196" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <circle cx="56.098" cy="56.098" r="56.098" class="radius"/>
                            <path class="logo" d="M70.201,58.294h-10.01v36.672H45.025V58.294h-7.213V45.406h7.213v-8.34   c0-5.964,2.833-15.303,15.301-15.303L71.56,21.81v12.51h-8.151c-1.337,0-3.217,0.668-3.217,3.513v7.585h11.334L70.201,58.294z"/>
                        </g>
                    </svg>
                </a>
                <a href="https://www.instagram.com/kapchobar" title="Instagram" target="_blank" rel="noopener noreferrer" class="kap-block-footer-ico">
                    <svg enable-background="new 0 0 128 128" height="128px" id="Layer_1" version="1.1"
                        viewBox="0 0 128 128" width="128px" xml:space="preserve"
                        xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <circle cx="64" cy="64" class="radius" r="64"/>
                        </g>
                        <g>
                            <path class="logo" d="M91.77,28H36.229C31.702,28,28,31.703,28,36.229v55.542c0,4.525,3.702,8.229,8.229,8.229h55.543   c4.525,0,8.229-3.703,8.229-8.229V36.229C100,31.703,96.297,28,91.77,28z M51.26,58.171c2.239-4.792,7.101-8.114,12.74-8.114   c5.64,0,10.5,3.322,12.74,8.114c0.844,1.806,1.318,3.818,1.318,5.943c0,7.763-6.295,14.057-14.058,14.057   c-7.764,0-14.058-6.294-14.058-14.057C49.941,61.99,50.416,59.977,51.26,58.171z M91.599,89.371c0,1.132-0.925,2.057-2.058,2.057   H38.457c-1.132,0-2.057-0.925-2.057-2.057v-31.2h6.111c-0.526,1.912-0.797,3.906-0.797,5.943c0,5.953,2.318,11.549,6.528,15.758   c4.209,4.21,9.806,6.526,15.758,6.526s11.549-2.317,15.758-6.526c4.209-4.21,6.527-9.806,6.527-15.759   c0-2.037-0.271-4.031-0.797-5.943h6.11V89.371L91.599,89.371z M91.599,47.543c0,1.509-1.233,2.744-2.743,2.744h-8.229   c-1.509,0-2.743-1.235-2.743-2.744v-8.228c0-1.509,1.234-2.743,2.743-2.743h8.229c1.509,0,2.742,1.234,2.742,2.743V47.543   L91.599,47.543z"/>
                        </g>
                    </svg>
                </a>
                <a href="https://vk.com/kapchobar" title="VK" target="_blank" rel="noopener noreferrer" class="kap-block-footer-ico">
                    <svg id="Capa_1" style="enable-background:new 0 0 112.196 112.196;" version="1.1" viewBox="0 0 112.196 112.196" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <g>
                                <circle cx="56.098" cy="56.098" r="56.098" class="radius"/>
                            </g>
                            <path class="logo" d="M53.979,80.702h4.403c0,0,1.33-0.146,2.009-0.878   c0.625-0.672,0.605-1.934,0.605-1.934s-0.086-5.908,2.656-6.778c2.703-0.857,6.174,5.71,9.853,8.235   c2.782,1.911,4.896,1.492,4.896,1.492l9.837-0.137c0,0,5.146-0.317,2.706-4.363c-0.2-0.331-1.421-2.993-7.314-8.463   c-6.168-5.725-5.342-4.799,2.088-14.702c4.525-6.031,6.334-9.713,5.769-11.29c-0.539-1.502-3.867-1.105-3.867-1.105l-11.076,0.069   c0,0-0.821-0.112-1.43,0.252c-0.595,0.357-0.978,1.189-0.978,1.189s-1.753,4.667-4.091,8.636c-4.932,8.375-6.904,8.817-7.71,8.297   c-1.875-1.212-1.407-4.869-1.407-7.467c0-8.116,1.231-11.5-2.397-12.376c-1.204-0.291-2.09-0.483-5.169-0.514   c-3.952-0.041-7.297,0.012-9.191,0.94c-1.26,0.617-2.232,1.992-1.64,2.071c0.732,0.098,2.39,0.447,3.269,1.644   c1.135,1.544,1.095,5.012,1.095,5.012s0.652,9.554-1.523,10.741c-1.493,0.814-3.541-0.848-7.938-8.446   c-2.253-3.892-3.954-8.194-3.954-8.194s-0.328-0.804-0.913-1.234c-0.71-0.521-1.702-0.687-1.702-0.687l-10.525,0.069   c0,0-1.58,0.044-2.16,0.731c-0.516,0.611-0.041,1.875-0.041,1.875s8.24,19.278,17.57,28.993   C44.264,81.287,53.979,80.702,53.979,80.702L53.979,80.702z"/>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="contact_dialog" role="dialog"
    data-success-title="<?php echo html($content['form']['success']['title']); ?>"
    data-success-text="<?php echo html($content['form']['success']['text']); ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo html($content['form']['title']); ?></h4>
            </div>
            <div class="modal-body">
                <form id="contact_form" class="" method="post" action="/app/book.php">

                    <div class="form-group">
                        <label class="cols-sm-2 control-label"><?php echo html($content['form']['name']); ?> *</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="name" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="cols-sm-2 control-label"><?php echo html($content['form']['date']); ?> *</label>
                        <div class="cols-sm-10">
                            <div data-name="date" data-type="text"
                                class="bfh-datepicker cols-sm-10" data-min="today"
                                data-format="d/m/y">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="cols-sm-2 control-label"><?php echo html($content['form']['time']); ?> *</label>
                        <div class="cols-sm-10">
                            <div data-name="time" data-type="text"
                                class="bfh-timepicker cols-sm-10">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="cols-sm-2 control-label"><?php echo html($content['form']['guest']); ?> *</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-cutlery"></i></span>
                                <input name="guests" type="number" class="form-control" min="1" max="99" value="1">

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="cols-sm-2 control-label"><?php echo html($content['form']['more']); ?></label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-question-sign"></i></span>
                                <textarea name="message" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="cols-sm-2 control-label"><?php echo html($content['form']['phone']); ?> *</label>
                        <div class="cols-sm-10">
                            <input data-name="phone" name="phone" type="text"
                                class="bfh-phone cols-sm-10 form-control"
                                data-format="+7 (ddd) ddd-dd-dd">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="cols-sm-2 control-label"><?php echo html($content['form']['email']); ?> *</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="email" type="email" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            <input type="checkbox" name="rules" id="rules">
                            <div class="btn-group w100">
                                <label for="rules" class="btn btn-default check-z">
                                    <span class="glyphicon glyphicon-check"></span>
                                    <span class="glyphicon glyphicon-unchecked"></span>
                                    <span class="content"><?php echo html($content['form']['rules']); ?></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <p><b>*</b> - <?php echo html($content['form']['required']); ?></p>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="submitForm" class="btn btn-default"><?php echo html($content['form']['submit']); ?></button>
            </div>
        </div>
    </div>
</div>

<script src="/js/app.js"></script>
<script src="/js/bootstrap-formhelpers.js"></script>
<script src="https://www.jscache.com/wejs?wtype=cdsscrollingravewide&amp;uniq=128&amp;locationId=12104938&amp;lang=<?php echo html($content['lang']); ?>&amp;border=false&amp;shadow=true&amp;display_version=2"></script>
</body>
</html>

