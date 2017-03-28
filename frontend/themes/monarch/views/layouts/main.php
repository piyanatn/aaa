<?php 
    use yii\helpers\Url;
?>


<!DOCTYPE html> 
<html lang="en">
    <head>

        <style>
            /* Loading Spinner */
            .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
        </style>


        <meta charset="UTF-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title> AAA - Automatic Accounting  </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Favicons -->

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../assets/images/icons/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../assets/images/icons/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../assets/images/icons/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../../assets/images/icons/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="../../assets/images/icons/favicon.png">



        <link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.css">


        <!-- HELPERS -->

        <link rel="stylesheet" type="text/css" href="../../assets/helpers/animate.css">
        <link rel="stylesheet" type="text/css" href="../../assets/helpers/backgrounds.css">
        <link rel="stylesheet" type="text/css" href="../../assets/helpers/boilerplate.css">
        <link rel="stylesheet" type="text/css" href="../../assets/helpers/border-radius.css">
        <link rel="stylesheet" type="text/css" href="../../assets/helpers/grid.css">
        <link rel="stylesheet" type="text/css" href="../../assets/helpers/page-transitions.css">
        <link rel="stylesheet" type="text/css" href="../../assets/helpers/spacing.css">
        <link rel="stylesheet" type="text/css" href="../../assets/helpers/typography.css">
        <link rel="stylesheet" type="text/css" href="../../assets/helpers/utils.css">
        <link rel="stylesheet" type="text/css" href="../../assets/helpers/colors.css">

        <!-- ELEMENTS -->

        <link rel="stylesheet" type="text/css" href="../../assets/elements/badges.css">
        <link rel="stylesheet" type="text/css" href="../../assets/elements/buttons.css">
        <link rel="stylesheet" type="text/css" href="../../assets/elements/content-box.css">
        <link rel="stylesheet" type="text/css" href="../../assets/elements/dashboard-box.css">
        <link rel="stylesheet" type="text/css" href="../../assets/elements/forms.css">
        <link rel="stylesheet" type="text/css" href="../../assets/elements/images.css">
        <link rel="stylesheet" type="text/css" href="../../assets/elements/info-box.css">
        <link rel="stylesheet" type="text/css" href="../../assets/elements/invoice.css">
        <link rel="stylesheet" type="text/css" href="../../assets/elements/loading-indicators.css">
        <link rel="stylesheet" type="text/css" href="../../assets/elements/menus.css">
        <link rel="stylesheet" type="text/css" href="../../assets/elements/panel-box.css">
        <link rel="stylesheet" type="text/css" href="../../assets/elements/response-messages.css">
        <link rel="stylesheet" type="text/css" href="../../assets/elements/responsive-tables.css">
        <link rel="stylesheet" type="text/css" href="../../assets/elements/ribbon.css">
        <link rel="stylesheet" type="text/css" href="../../assets/elements/social-box.css">
        <link rel="stylesheet" type="text/css" href="../../assets/elements/tables.css">
        <link rel="stylesheet" type="text/css" href="../../assets/elements/tile-box.css">
        <link rel="stylesheet" type="text/css" href="../../assets/elements/timeline.css">



        <!-- ICONS -->

        <link rel="stylesheet" type="text/css" href="../../assets/icons/fontawesome/fontawesome.css">
        <link rel="stylesheet" type="text/css" href="../../assets/icons/linecons/linecons.css">
        <link rel="stylesheet" type="text/css" href="../../assets/icons/spinnericon/spinnericon.css">


        <!-- WIDGETS -->

        <link rel="stylesheet" type="text/css" href="../../assets/widgets/accordion-ui/accordion.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/calendar/calendar.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/carousel/carousel.css">

        <link rel="stylesheet" type="text/css" href="../../assets/widgets/charts/justgage/justgage.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/charts/morris/morris.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/charts/piegage/piegage.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/charts/xcharts/xcharts.css">

        <link rel="stylesheet" type="text/css" href="../../assets/widgets/chosen/chosen.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/colorpicker/colorpicker.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/datatable/datatable.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/datepicker/datepicker.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/datepicker-ui/datepicker.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/dialog/dialog.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/dropdown/dropdown.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/dropzone/dropzone.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/file-input/fileinput.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/input-switch/inputswitch.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/input-switch/inputswitch-alt.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/ionrangeslider/ionrangeslider.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/jcrop/jcrop.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/jgrowl-notifications/jgrowl.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/loading-bar/loadingbar.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/maps/vector-maps/vectormaps.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/markdown/markdown.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/modal/modal.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/multi-select/multiselect.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/multi-upload/fileupload.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/nestable/nestable.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/noty-notifications/noty.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/popover/popover.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/pretty-photo/prettyphoto.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/progressbar/progressbar.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/range-slider/rangeslider.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/slidebars/slidebars.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/slider-ui/slider.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/tabs-ui/tabs.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/theme-switcher/themeswitcher.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/timepicker/timepicker.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/tocify/tocify.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/tooltip/tooltip.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/touchspin/touchspin.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/uniform/uniform.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/wizard/wizard.css">
        <link rel="stylesheet" type="text/css" href="../../assets/widgets/xeditable/xeditable.css">

        <!-- SNIPPETS -->

        <link rel="stylesheet" type="text/css" href="../../assets/snippets/chat.css">
        <link rel="stylesheet" type="text/css" href="../../assets/snippets/files-box.css">
        <link rel="stylesheet" type="text/css" href="../../assets/snippets/login-box.css">
        <link rel="stylesheet" type="text/css" href="../../assets/snippets/notification-box.css">
        <link rel="stylesheet" type="text/css" href="../../assets/snippets/progress-box.css">
        <link rel="stylesheet" type="text/css" href="../../assets/snippets/todo.css">
        <link rel="stylesheet" type="text/css" href="../../assets/snippets/user-profile.css">
        <link rel="stylesheet" type="text/css" href="../../assets/snippets/mobile-navigation.css">

        <!-- APPLICATIONS -->

        <link rel="stylesheet" type="text/css" href="../../assets/applications/mailbox.css">

        <!-- Admin theme -->

        <link rel="stylesheet" type="text/css" href="../../assets/themes/admin/layout.css">
        <link rel="stylesheet" type="text/css" href="../../assets/themes/admin/color-schemes/default.css">

        <!-- Components theme -->

        <link rel="stylesheet" type="text/css" href="../../assets/themes/components/default.css">
        <link rel="stylesheet" type="text/css" href="../../assets/themes/components/border-radius.css">

        <!-- Admin responsive -->

        <link rel="stylesheet" type="text/css" href="../../assets/helpers/responsive-elements.css">
        <link rel="stylesheet" type="text/css" href="../../assets/helpers/admin-responsive.css">

        <!-- JS Core -->

        <script type="text/javascript" src="../../assets/js-core/jquery-core.js"></script>
        <script type="text/javascript" src="../../assets/js-core/jquery-ui-core.js"></script>
        <script type="text/javascript" src="../../assets/js-core/jquery-ui-widget.js"></script>
        <script type="text/javascript" src="../../assets/js-core/jquery-ui-mouse.js"></script>
        <script type="text/javascript" src="../../assets/js-core/jquery-ui-position.js"></script>
        <!--<script type="text/javascript" src="../../assets/js-core/transition.js"></script>-->
        <script type="text/javascript" src="../../assets/js-core/modernizr.js"></script>
        <script type="text/javascript" src="../../assets/js-core/jquery-cookie.js"></script>





        <script type="text/javascript">
            $(window).load(function () {
                setTimeout(function () {
                    $('#loading').fadeOut(400, "linear");
                }, 300);
            });
        </script>



    </head>


    <body>
        <div id="sb-site">
            <div class="sb-slidebar bg-black sb-left sb-style-overlay">
                <div class="scrollable-content scrollable-slim-sidebar">
                    <div class="pad10A">
                        <div class="divider-header">Online</div>
                        <ul class="chat-box">
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial1.jpg" alt="">
                                    <div class="small-badge bg-green"></div>
                                </div>
                                <b>
                                    Grace Padilla
                                </b>
                                <p>On the other hand, we denounce...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial2.jpg" alt="">
                                    <div class="small-badge bg-green"></div>
                                </div>
                                <b>
                                    Carl Gamble
                                </b>
                                <p>Dislike men who are so beguiled...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial3.jpg" alt="">
                                    <div class="small-badge bg-green"></div>
                                </div>
                                <b>
                                    Michael Poole
                                </b>
                                <p>Of pleasure of the moment, so...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial4.jpg" alt="">
                                    <div class="small-badge bg-green"></div>
                                </div>
                                <b>
                                    Bill Green
                                </b>
                                <p>That they cannot foresee the...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial5.jpg" alt="">
                                    <div class="small-badge bg-green"></div>
                                </div>
                                <b>
                                    Cheryl Soucy
                                </b>
                                <p>Pain and trouble that are bound...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                        </ul>
                        <div class="divider-header">Idle</div>
                        <ul class="chat-box">
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial6.jpg" alt="">
                                    <div class="small-badge bg-orange"></div>
                                </div>
                                <b>
                                    Jose Kramer
                                </b>
                                <p>Equal blame belongs to those...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial7.jpg" alt="">
                                    <div class="small-badge bg-orange"></div>
                                </div>
                                <b>
                                    Dan Garcia
                                </b>
                                <p>Weakness of will, which is same...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial8.jpg" alt="">
                                    <div class="small-badge bg-orange"></div>
                                </div>
                                <b>
                                    Edward Bridges
                                </b>
                                <p>These cases are perfectly simple...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                        </ul>
                        <div class="divider-header">Offline</div>
                        <ul class="chat-box">
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial1.jpg" alt="">
                                    <div class="small-badge bg-red"></div>
                                </div>
                                <b>
                                    Randy Herod
                                </b>
                                <p>In a free hour, when our power...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial2.jpg" alt="">
                                    <div class="small-badge bg-red"></div>
                                </div>
                                <b>
                                    Patricia Bagley
                                </b>
                                <p>when nothing prevents our being...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="sb-slidebar bg-black sb-right sb-style-overlay">
                <div class="scrollable-content scrollable-slim-sidebar">
                    <div class="pad15A">
                        <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-1" class="popover-title">
                            Cloud status
                            <span class="caret"></span>
                        </a>
                        <div id="sidebar-toggle-1" class="collapse in">
                            <div class="pad15A container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="text-center font-gray pad5B text-transform-upr font-size-12">New visits</div>
                                        <div class="chart-alt-3 font-gray-dark" data-percent="55"><span>55</span>%</div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center font-gray pad5B text-transform-upr font-size-12">Bounce rate</div>
                                        <div class="chart-alt-3 font-gray-dark" data-percent="46"><span>46</span>%</div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center font-gray pad5B text-transform-upr font-size-12">Server load</div>
                                        <div class="chart-alt-3 font-gray-dark" data-percent="92"><span>92</span>%</div>
                                    </div>
                                </div>
                                <div class="divider mrg15T mrg15B"></div>
                                <div class="text-center">
                                    <a href="#" class="btn center-div btn-info mrg5T btn-sm text-transform-upr updateEasyPieChart">
                                        <i class="glyph-icon icon-refresh"></i>
                                        Update charts
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-6" class="popover-title">
                            Latest transfers
                            <span class="caret"></span>
                        </a>
                        <div id="sidebar-toggle-6" class="collapse in">

                            <ul class="files-box">
                                <li>
                                    <i class="files-icon glyph-icon font-red icon-file-archive-o"></i>
                                    <div class="files-content">
                                        <b>blog_export.zip</b>
                                        <div class="files-date">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            added on <b>22.10.2014</b>
                                        </div>
                                    </div>
                                    <div class="files-buttons">
                                        <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                                            <i class="glyph-icon icon-cloud-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                                            <i class="glyph-icon icon-times"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <i class="files-icon glyph-icon icon-file-code-o"></i>
                                    <div class="files-content">
                                        <b>homepage-test.html</b>
                                        <div class="files-date">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            added  <b>19.10.2014</b>
                                        </div>
                                    </div>
                                    <div class="files-buttons">
                                        <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                                            <i class="glyph-icon icon-cloud-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                                            <i class="glyph-icon icon-times"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <i class="files-icon glyph-icon font-yellow icon-file-image-o"></i>
                                    <div class="files-content">
                                        <b>monthlyReport.jpg</b>
                                        <div class="files-date">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            added on <b>10.9.2014</b>
                                        </div>
                                    </div>
                                    <div class="files-buttons">
                                        <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                                            <i class="glyph-icon icon-cloud-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                                            <i class="glyph-icon icon-times"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <i class="files-icon glyph-icon font-green icon-file-word-o"></i>
                                    <div class="files-content">
                                        <b>new_presentation.doc</b>
                                        <div class="files-date">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            added on <b>5.9.2014</b>
                                        </div>
                                    </div>
                                    <div class="files-buttons">
                                        <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                                            <i class="glyph-icon icon-cloud-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                                            <i class="glyph-icon icon-times"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>

                        </div>

                        <div class="clear"></div>

                        <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-3" class="popover-title">
                            Tasks for today
                            <span class="caret"></span>
                        </a>
                        <div id="sidebar-toggle-3" class="collapse in">

                            <ul class="progress-box">
                                <li>
                                    <div class="progress-title">
                                        New features development
                                        <b>87%</b>
                                    </div>
                                    <div class="progressbar-smaller progressbar" data-value="87">
                                        <div class="progressbar-value bg-azure">
                                            <div class="progressbar-overlay"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <b class="pull-right">66%</b>
                                    <div class="progress-title">
                                        Finishing uploading files

                                    </div>
                                    <div class="progressbar-smaller progressbar" data-value="66">
                                        <div class="progressbar-value bg-red">
                                            <div class="progressbar-overlay"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="progress-title">
                                        Creating tutorials
                                        <b>58%</b>
                                    </div>
                                    <div class="progressbar-smaller progressbar" data-value="58">
                                        <div class="progressbar-value bg-blue-alt"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="progress-title">
                                        Frontend bonus theme
                                        <b>74%</b>
                                    </div>
                                    <div class="progressbar-smaller progressbar" data-value="74">
                                        <div class="progressbar-value bg-purple"></div>
                                    </div>
                                </li>
                            </ul>

                        </div>

                        <div class="clear"></div>

                        <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-4" class="popover-title">
                            Pending notifications
                            <span class="bs-label bg-orange tooltip-button" title="Label example">New</span>
                            <span class="caret"></span>
                        </a>
                        <div id="sidebar-toggle-4" class="collapse in">
                            <ul class="notifications-box notifications-box-alt">
                                <li>
                                    <span class="bg-purple icon-notification glyph-icon icon-users"></span>
                                    <span class="notification-text">This is an error notification</span>
                                    <div class="notification-time">
                                        a few seconds ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                    <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                                        <i class="glyph-icon icon-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <span class="bg-warning icon-notification glyph-icon icon-ticket"></span>
                                    <span class="notification-text">This is a warning notification</span>
                                    <div class="notification-time">
                                        <b>15</b> minutes ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                    <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                                        <i class="glyph-icon icon-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <span class="bg-green icon-notification glyph-icon icon-random"></span>
                                    <span class="notification-text font-green">A success message example.</span>
                                    <div class="notification-time">
                                        <b>2 hours</b> ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                    <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                                        <i class="glyph-icon icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="loading">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>

            <div id="page-wrapper">
                <div id="page-header" class="bg-gradient-9">
                    <div id="mobile-navigation">
                        <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
                        <a href="index.html" class="logo-content-small" title="MonarchUI"></a>
                    </div>
                    <div id="header-logo" class="logo-bg">
                        <a href="index.html" class="logo-content-big" title="MonarchUI">
                            Monarch <i>UI</i>
                            <span>The perfect solution for user interfaces</span>
                        </a>
                        <a href="index.html" class="logo-content-small" title="MonarchUI">
                            Monarch <i>UI</i>
                            <span>The perfect solution for user interfaces</span>
                        </a>
                        <a id="close-sidebar" href="#" title="Close sidebar">
                            <i class="glyph-icon icon-angle-left"></i>
                        </a>
                    </div>
                    

                    <div id="header-nav-right">
                        <a href="#" class="hdr-btn popover-button" title="Search" data-placement="bottom" data-id="#popover-search">
                            <i class="glyph-icon icon-search"></i>
                        </a>
                        <div class="hide" id="popover-search">
                            <div class="pad5A box-md">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search terms here ...">
                                    <span class="input-group-btn">
                                        <a class="btn btn-primary" href="#">Search</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="hdr-btn" id="fullscreen-btn" title="Fullscreen">
                            <i class="glyph-icon icon-arrows-alt"></i>
                        </a>
                        <a href="#" class="hdr-btn sb-toggle-left" id="chatbox-btn" title="Chat sidebar">
                            <i class="glyph-icon icon-linecons-paper-plane"></i>
                        </a>
                        <div class="dropdown" id="notifications-btn">
                            <a data-toggle="dropdown" href="#" title="">
                                <span class="small-badge bg-yellow"></span>
                                <i class="glyph-icon icon-linecons-megaphone"></i>
                            </a>
                            <div class="dropdown-menu box-md float-right">

                                <div class="popover-title display-block clearfix pad10A">
                                    Notifications
                                    <a class="text-transform-cap font-primary font-normal btn-link float-right" href="#" title="View more options">
                                        More options...
                                    </a>
                                </div>
                                <div class="scrollable-content scrollable-slim-box">
                                    <ul class="no-border notifications-box">
                                        <li>
                                            <span class="bg-danger icon-notification glyph-icon icon-bullhorn"></span>
                                            <span class="notification-text">This is an error notification</span>
                                            <div class="notification-time">
                                                a few seconds ago
                                                <span class="glyph-icon icon-clock-o"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="bg-warning icon-notification glyph-icon icon-users"></span>
                                            <span class="notification-text font-blue">This is a warning notification</span>
                                            <div class="notification-time">
                                                <b>15</b> minutes ago
                                                <span class="glyph-icon icon-clock-o"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="bg-green icon-notification glyph-icon icon-sitemap"></span>
                                            <span class="notification-text font-green">A success message example.</span>
                                            <div class="notification-time">
                                                <b>2 hours</b> ago
                                                <span class="glyph-icon icon-clock-o"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="bg-azure icon-notification glyph-icon icon-random"></span>
                                            <span class="notification-text">This is an error notification</span>
                                            <div class="notification-time">
                                                a few seconds ago
                                                <span class="glyph-icon icon-clock-o"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="bg-warning icon-notification glyph-icon icon-ticket"></span>
                                            <span class="notification-text">This is a warning notification</span>
                                            <div class="notification-time">
                                                <b>15</b> minutes ago
                                                <span class="glyph-icon icon-clock-o"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="bg-blue icon-notification glyph-icon icon-user"></span>
                                            <span class="notification-text font-blue">Alternate notification styling.</span>
                                            <div class="notification-time">
                                                <b>2 hours</b> ago
                                                <span class="glyph-icon icon-clock-o"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="bg-purple icon-notification glyph-icon icon-user"></span>
                                            <span class="notification-text">This is an error notification</span>
                                            <div class="notification-time">
                                                a few seconds ago
                                                <span class="glyph-icon icon-clock-o"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="bg-warning icon-notification glyph-icon icon-user"></span>
                                            <span class="notification-text">This is a warning notification</span>
                                            <div class="notification-time">
                                                <b>15</b> minutes ago
                                                <span class="glyph-icon icon-clock-o"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="bg-green icon-notification glyph-icon icon-user"></span>
                                            <span class="notification-text font-green">A success message example.</span>
                                            <div class="notification-time">
                                                <b>2 hours</b> ago
                                                <span class="glyph-icon icon-clock-o"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="bg-purple icon-notification glyph-icon icon-user"></span>
                                            <span class="notification-text">This is an error notification</span>
                                            <div class="notification-time">
                                                a few seconds ago
                                                <span class="glyph-icon icon-clock-o"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="bg-warning icon-notification glyph-icon icon-user"></span>
                                            <span class="notification-text">This is a warning notification</span>
                                            <div class="notification-time">
                                                <b>15</b> minutes ago
                                                <span class="glyph-icon icon-clock-o"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pad10A button-pane button-pane-alt text-center">
                                    <a href="#" class="btn btn-primary" title="View all notifications">
                                        View all notifications
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown" id="progress-btn">
                            <a data-toggle="dropdown" href="#" title="">
                                <span class="small-badge bg-azure"></span>
                                <i class="glyph-icon icon-linecons-params"></i>
                            </a>
                            <div class="dropdown-menu pad0A box-sm float-right" id="progress-dropdown">
                                <div class="scrollable-content scrollable-slim-box">
                                    <ul class="no-border progress-box progress-box-links">
                                        <li>
                                            <a href="#" title="">
                                                <b class="pull-right">23%</b>
                                                <div class="progress-title">
                                                    Finishing uploading files

                                                </div>
                                                <div class="progressbar-smaller progressbar" data-value="23">
                                                    <div class="progressbar-value bg-blue-alt">
                                                        <div class="progressbar-overlay"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <b class="pull-right">91%</b>
                                                <div class="progress-title">
                                                    Roadmap progress
                                                </div>
                                                <div class="progressbar-smaller progressbar" data-value="91">
                                                    <div class="progressbar-value bg-red">
                                                        <div class="progressbar-overlay"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <b class="pull-right">58%</b>
                                                <div class="progress-title">
                                                    Images upload
                                                </div>
                                                <div class="progressbar-smaller progressbar" data-value="58">
                                                    <div class="progressbar-value bg-green"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <b class="pull-right">74%</b>
                                                <div class="progress-title">
                                                    WordPress migration
                                                </div>
                                                <div class="progressbar-smaller progressbar" data-value="74">
                                                    <div class="progressbar-value bg-purple"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <b class="pull-right">91%</b>
                                                <div class="progress-title">
                                                    Agile development procedures
                                                </div>
                                                <div class="progressbar-smaller progressbar" data-value="91">
                                                    <div class="progressbar-value bg-black">
                                                        <div class="progressbar-overlay"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <b class="pull-right">58%</b>
                                                <div class="progress-title">
                                                    Systems integration
                                                </div>
                                                <div class="progressbar-smaller progressbar" data-value="58">
                                                    <div class="progressbar-value bg-azure"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <b class="pull-right">97%</b>
                                                <div class="progress-title">
                                                    Code optimizations
                                                </div>
                                                <div class="progressbar-smaller progressbar" data-value="97">
                                                    <div class="progressbar-value bg-yellow"></div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pad5A button-pane button-pane-alt text-center">
                                    <a href="#" class="btn display-block font-normal hover-green" title="View all notifications">
                                        View all notifications
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown" id="cloud-btn">
                            <a href="#" data-placement="bottom" class="tooltip-button sb-toggle-right" title="Statistics Sidebar">
                                <i class="glyph-icon icon-linecons-cloud"></i>
                            </a>
                        </div>
                        <div class="dropdown" id="dashnav-btn">
                            <a href="#" data-toggle="dropdown" data-placement="bottom" class="popover-button-header tooltip-button" title="Dashboard Quick Menu">
                                <i class="glyph-icon icon-linecons-cog"></i>
                            </a>
                            <div class="dropdown-menu float-right">
                                <div class="box-sm">
                                    <div class="pad5T pad5B pad10L pad10R dashboard-buttons clearfix">
                                        <a href="#" class="btn vertical-button hover-blue-alt" title="">
                                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                                            </span>
                                            Dashboard
                                        </a>
                                        <a href="#" class="btn vertical-button hover-green" title="">
                                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                                            </span>
                                            Widgets
                                        </a>
                                        <a href="#" class="btn vertical-button hover-orange" title="">
                                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                <i class="glyph-icon icon-fire opacity-80 font-size-20"></i>
                                            </span>
                                            Tables
                                        </a>
                                        <a href="#" class="btn vertical-button hover-orange" title="">
                                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                <i class="glyph-icon icon-bar-chart-o opacity-80 font-size-20"></i>
                                            </span>
                                            Charts
                                        </a>
                                        <a href="#" class="btn vertical-button hover-purple" title="">
                                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>
                                            </span>
                                            Buttons
                                        </a>
                                        <a href="#" class="btn vertical-button hover-azure" title="">
                                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                <i class="glyph-icon icon-code opacity-80 font-size-20"></i>
                                            </span>
                                            Panels
                                        </a>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="pad5T pad5B pad10L pad10R dashboard-buttons clearfix">
                                        <a href="#" class="btn vertical-button remove-border btn-info" title="">
                                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                                            </span>
                                            Dashboard
                                        </a>
                                        <a href="#" class="btn vertical-button remove-border btn-danger" title="">
                                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                                            </span>
                                            Widgets
                                        </a>
                                        <a href="#" class="btn vertical-button remove-border btn-purple" title="">
                                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                <i class="glyph-icon icon-fire opacity-80 font-size-20"></i>
                                            </span>
                                            Tables
                                        </a>
                                        <a href="#" class="btn vertical-button remove-border btn-azure" title="">
                                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                <i class="glyph-icon icon-bar-chart-o opacity-80 font-size-20"></i>
                                            </span>
                                            Charts
                                        </a>
                                        <a href="#" class="btn vertical-button remove-border btn-yellow" title="">
                                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>
                                            </span>
                                            Buttons
                                        </a>
                                        <a href="#" class="btn vertical-button remove-border btn-warning" title="">
                                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                <i class="glyph-icon icon-code opacity-80 font-size-20"></i>
                                            </span>
                                            Panels
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="header-btn" id="logout-btn" href="<?= Url::to('index.php?r=site/login') ?>" title="Lockscreen page example">
                            <i class="glyph-icon icon-linecons-lock"></i>
                        </a>

                    </div><!-- #header-nav-right -->

                </div>
                <div id="page-sidebar">
                    <div class="scroll-sidebar">


                        <ul id="sidebar-menu">
                            <li class="header"><span>Overview</span></li>
                            <li>
                                <a href="index.html" title="Admin Dashboard">
                                    <i class="glyph-icon icon-linecons-tv"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            
                            <li class="header"><span>ระบบงาน</span></li>
                            
                             <li>
                                <a href="#" title="Admin Dashboard">
                                    <i class="glyph-icon icon-linecons-lightbulb"></i>
                                    <span>ระบบศูนย์จัดเก็บรายได้(ลูกหนี้)</span>
                                </a>
                            </li>
                            
                             <li>
                                <a href="#" title="Admin Dashboard">
                                    <i class="glyph-icon icon-linecons-wallet"></i>
                                    <span>ระบบตรวจสอบสิทธิ์</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#" title="Admin Dashboard">
                                    <i class="glyph-icon icon-linecons-eye"></i>
                                    <span>ระบบแผนการจัดซื้อ</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#" title="Admin Dashboard">
                                    <i class="glyph-icon icon-linecons-megaphone"></i>
                                    <span>ระบบการจัดซื้อ(ลูกหนี้)</span>
                                </a>
                            </li>
                            
                           <li>
                                <a href="#" title="Admin Dashboard">
                                    <i class="glyph-icon icon-linecons-paper-plane"></i>
                                    <span>ระบบคลังพัสดุ</span>
                                </a>
                            </li>
                             <li>
                                <a href="#" title="Admin Dashboard">
                                    <i class="glyph-icon icon-linecons-sound"></i>
                                    <span>ระบบงานบุคลากร</span>
                                </a>
                            </li>
                             <li>
                                <a href="#" title="Admin Dashboard">
                                    <i class="glyph-icon icon-linecons-sound"></i>
                                    <span>ระบบการเงิน</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Admin Dashboard">
                                    <i class="glyph-icon icon-linecons-sound"></i>
                                    <span>ระบบบัญชี</span>
                                </a>
                            </li>
                            
                            <li class="header"><span>การจัดการทั่วไป</span></li>
                            
                            <li>
                                <a href="#" title="Admin Dashboard">
                                    <i class="glyph-icon icon-linecons-sound"></i>
                                    <span>Administrator</span>
                                </a>
                            </li>
                            
                            
                        </ul><!-- #sidebar-menu -->


                    </div>
                </div>
                <div id="page-content-wrapper">
                    <div id="page-content">

                        <div class="container">


                            <!-- Sparklines charts -->

                            <script type="text/javascript" src="../../assets/widgets/charts/sparklines/sparklines.js"></script>
                            <script type="text/javascript" src="../../assets/widgets/charts/sparklines/sparklines-demo.js"></script>

                            <!-- Flot charts -->

                            
                            
                            <!-- PieGage charts -->

                            <script type="text/javascript" src="../../assets/widgets/charts/piegage/piegage.js"></script>
                            <script type="text/javascript" src="../../assets/widgets/charts/piegage/piegage-demo.js"></script>

                            <div id="page-title">
                                <div id="theme-options" class="admin-options">
                                    <a href="javascript:void(0);" class="btn btn-primary theme-switcher tooltip-button" data-placement="left" title="Color schemes and layout options">
                                        <i class="glyph-icon icon-linecons-cog icon-spin"></i>
                                    </a>
                                    <div id="theme-switcher-wrapper">
                                        <div class="scroll-switcher">
                                            <h5 class="header">Layout options</h5>
                                            <ul class="reset-ul">
                                                <li>
                                                    <label for="boxed-layout">Boxed layout</label>
                                                    <input type="checkbox" data-toggletarget="boxed-layout" id="boxed-layout" class="input-switch-alt">
                                                </li>
                                                <li>
                                                    <label for="fixed-header">Fixed header</label>
                                                    <input type="checkbox" data-toggletarget="fixed-header" id="fixed-header" class="input-switch-alt">
                                                </li>
                                                <li>
                                                    <label for="fixed-sidebar">Fixed sidebar</label>
                                                    <input type="checkbox" data-toggletarget="fixed-sidebar" id="fixed-sidebar" class="input-switch-alt">
                                                </li>
                                                <li>
                                                    <label for="closed-sidebar">Closed sidebar</label>
                                                    <input type="checkbox" data-toggletarget="closed-sidebar" id="closed-sidebar" class="input-switch-alt">
                                                </li>
                                            </ul>
                                            <div class="boxed-bg-wrapper hide">
                                                <h5 class="header">
                                                    Boxed Page Background
                                                    <a class="set-background-style" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Clear</a>
                                                </h5>
                                                <div class="theme-color-wrapper clearfix">
                                                    <h5>Patterns</h5>
                                                    <a class="tooltip-button set-background-style pattern-bg-3" data-header-bg="pattern-bg-3" title="Pattern 3" href="javascript:void(0);">Pattern 3</a>
                                                    <a class="tooltip-button set-background-style pattern-bg-4" data-header-bg="pattern-bg-4" title="Pattern 4" href="javascript:void(0);">Pattern 4</a>
                                                    <a class="tooltip-button set-background-style pattern-bg-5" data-header-bg="pattern-bg-5" title="Pattern 5" href="javascript:void(0);">Pattern 5</a>
                                                    <a class="tooltip-button set-background-style pattern-bg-6" data-header-bg="pattern-bg-6" title="Pattern 6" href="javascript:void(0);">Pattern 6</a>
                                                    <a class="tooltip-button set-background-style pattern-bg-7" data-header-bg="pattern-bg-7" title="Pattern 7" href="javascript:void(0);">Pattern 7</a>
                                                    <a class="tooltip-button set-background-style pattern-bg-8" data-header-bg="pattern-bg-8" title="Pattern 8" href="javascript:void(0);">Pattern 8</a>
                                                    <a class="tooltip-button set-background-style pattern-bg-9" data-header-bg="pattern-bg-9" title="Pattern 9" href="javascript:void(0);">Pattern 9</a>
                                                    <a class="tooltip-button set-background-style pattern-bg-10" data-header-bg="pattern-bg-10" title="Pattern 10" href="javascript:void(0);">Pattern 10</a>

                                                    <div class="clear"></div>

                                                    <h5 class="mrg15T">Solids &amp;Images</h5>
                                                    <a class="tooltip-button set-background-style bg-black" data-header-bg="bg-black" title="Black" href="javascript:void(0);">Black</a>
                                                    <a class="tooltip-button set-background-style bg-gray mrg10R" data-header-bg="bg-gray" title="Gray" href="javascript:void(0);">Gray</a>

                                                    <a class="tooltip-button set-background-style full-bg-1" data-header-bg="full-bg-1 fixed-bg" title="Image 1" href="javascript:void(0);">Image 1</a>
                                                    <a class="tooltip-button set-background-style full-bg-2" data-header-bg="full-bg-2 fixed-bg" title="Image 2" href="javascript:void(0);">Image 2</a>
                                                    <a class="tooltip-button set-background-style full-bg-3" data-header-bg="full-bg-3 fixed-bg" title="Image 3" href="javascript:void(0);">Image 3</a>
                                                    <a class="tooltip-button set-background-style full-bg-4" data-header-bg="full-bg-4 fixed-bg" title="Image 4" href="javascript:void(0);">Image 4</a>
                                                    <a class="tooltip-button set-background-style full-bg-5" data-header-bg="full-bg-5 fixed-bg" title="Image 5" href="javascript:void(0);">Image 5</a>
                                                    <a class="tooltip-button set-background-style full-bg-6" data-header-bg="full-bg-6 fixed-bg" title="Image 6" href="javascript:void(0);">Image 6</a>

                                                </div>
                                            </div>
                                            <h5 class="header">
                                                Header Style
                                                <a class="set-adminheader-style" data-header-bg="bg-gradient-9" title="Remove all styles" href="javascript:void(0);">Clear</a>
                                            </h5>
                                            <div class="theme-color-wrapper clearfix">
                                                <h5>Solids</h5>
                                                <a class="tooltip-button set-adminheader-style bg-primary" data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);">Primary</a>
                                                <a class="tooltip-button set-adminheader-style bg-green" data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);">Green</a>
                                                <a class="tooltip-button set-adminheader-style bg-red" data-header-bg="bg-red font-inverse" title="Red" href="javascript:void(0);">Red</a>
                                                <a class="tooltip-button set-adminheader-style bg-blue" data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);">Blue</a>
                                                <a class="tooltip-button set-adminheader-style bg-warning" data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);">Warning</a>
                                                <a class="tooltip-button set-adminheader-style bg-purple" data-header-bg="bg-purple font-inverse" title="Purple" href="javascript:void(0);">Purple</a>
                                                <a class="tooltip-button set-adminheader-style bg-black" data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);">Black</a>

                                                <div class="clear"></div>

                                                <h5 class="mrg15T">Gradients</h5>
                                                <a class="tooltip-button set-adminheader-style bg-gradient-1" data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1" href="javascript:void(0);">Gradient 1</a>
                                                <a class="tooltip-button set-adminheader-style bg-gradient-2" data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2" href="javascript:void(0);">Gradient 2</a>
                                                <a class="tooltip-button set-adminheader-style bg-gradient-3" data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3" href="javascript:void(0);">Gradient 3</a>
                                                <a class="tooltip-button set-adminheader-style bg-gradient-4" data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4" href="javascript:void(0);">Gradient 4</a>
                                                <a class="tooltip-button set-adminheader-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5" href="javascript:void(0);">Gradient 5</a>
                                                <a class="tooltip-button set-adminheader-style bg-gradient-6" data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6" href="javascript:void(0);">Gradient 6</a>
                                                <a class="tooltip-button set-adminheader-style bg-gradient-7" data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7" href="javascript:void(0);">Gradient 7</a>
                                                <a class="tooltip-button set-adminheader-style bg-gradient-8" data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8" href="javascript:void(0);">Gradient 8</a>
                                            </div>
                                            <h5 class="header">
                                                Sidebar Style
                                                <a class="set-sidebar-style" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Clear</a>
                                            </h5>
                                            <div class="theme-color-wrapper clearfix">
                                                <h5>Solids</h5>
                                                <a class="tooltip-button set-sidebar-style bg-primary" data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);">Primary</a>
                                                <a class="tooltip-button set-sidebar-style bg-green" data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);">Green</a>
                                                <a class="tooltip-button set-sidebar-style bg-red" data-header-bg="bg-red font-inverse" title="Red" href="javascript:void(0);">Red</a>
                                                <a class="tooltip-button set-sidebar-style bg-blue" data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);">Blue</a>
                                                <a class="tooltip-button set-sidebar-style bg-warning" data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);">Warning</a>
                                                <a class="tooltip-button set-sidebar-style bg-purple" data-header-bg="bg-purple font-inverse" title="Purple" href="javascript:void(0);">Purple</a>
                                                <a class="tooltip-button set-sidebar-style bg-black" data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);">Black</a>

                                                <div class="clear"></div>

                                                <h5 class="mrg15T">Gradients</h5>
                                                <a class="tooltip-button set-sidebar-style bg-gradient-1" data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1" href="javascript:void(0);">Gradient 1</a>
                                                <a class="tooltip-button set-sidebar-style bg-gradient-2" data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2" href="javascript:void(0);">Gradient 2</a>
                                                <a class="tooltip-button set-sidebar-style bg-gradient-3" data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3" href="javascript:void(0);">Gradient 3</a>
                                                <a class="tooltip-button set-sidebar-style bg-gradient-4" data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4" href="javascript:void(0);">Gradient 4</a>
                                                <a class="tooltip-button set-sidebar-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5" href="javascript:void(0);">Gradient 5</a>
                                                <a class="tooltip-button set-sidebar-style bg-gradient-6" data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6" href="javascript:void(0);">Gradient 6</a>
                                                <a class="tooltip-button set-sidebar-style bg-gradient-7" data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7" href="javascript:void(0);">Gradient 7</a>
                                                <a class="tooltip-button set-sidebar-style bg-gradient-8" data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8" href="javascript:void(0);">Gradient 8</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="content">
                                    
                                    <?=$content;?>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
            </div>


            <!-- WIDGETS -->

            <script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.js"></script>

            <!-- Bootstrap Dropdown -->

<!-- <script type="text/javascript" src="../../assets/widgets/dropdown/dropdown.js"></script> -->

            <!-- Bootstrap Tooltip -->

<!-- <script type="text/javascript" src="../../assets/widgets/tooltip/tooltip.js"></script> -->

            <!-- Bootstrap Popover -->

<!-- <script type="text/javascript" src="../../assets/widgets/popover/popover.js"></script> -->

            <!-- Bootstrap Progress Bar -->

            <script type="text/javascript" src="../../assets/widgets/progressbar/progressbar.js"></script>

            <!-- Bootstrap Buttons -->

<!-- <script type="text/javascript" src="../../assets/widgets/button/button.js"></script> -->

            <!-- Bootstrap Collapse -->

<!-- <script type="text/javascript" src="../../assets/widgets/collapse/collapse.js"></script> -->

            <!-- Superclick -->

            <script type="text/javascript" src="../../assets/widgets/superclick/superclick.js"></script>

            <!-- Input switch alternate -->

            <script type="text/javascript" src="../../assets/widgets/input-switch/inputswitch-alt.js"></script>

            <!-- Slim scroll -->

            <script type="text/javascript" src="../../assets/widgets/slimscroll/slimscroll.js"></script>

            <!-- Slidebars -->

            <script type="text/javascript" src="../../assets/widgets/slidebars/slidebars.js"></script>
            <script type="text/javascript" src="../../assets/widgets/slidebars/slidebars-demo.js"></script>

            <!-- PieGage -->

            <script type="text/javascript" src="../../assets/widgets/charts/piegage/piegage.js"></script>
            <script type="text/javascript" src="../../assets/widgets/charts/piegage/piegage-demo.js"></script>

            <!-- Screenfull -->

            <script type="text/javascript" src="../../assets/widgets/screenfull/screenfull.js"></script>

            <!-- Content box -->

            <script type="text/javascript" src="../../assets/widgets/content-box/contentbox.js"></script>

            <!-- Overlay -->

            <script type="text/javascript" src="../../assets/widgets/overlay/overlay.js"></script>

            <!-- Widgets init for demo -->

            <script type="text/javascript" src="../../assets/js-init/widgets-init.js"></script>

            <!-- Theme layout -->

            <script type="text/javascript" src="../../assets/themes/admin/layout.js"></script>

            <!-- Theme switcher -->

            <script type="text/javascript" src="../../assets/widgets/theme-switcher/themeswitcher.js"></script>

        </div>
    </body>
</html>