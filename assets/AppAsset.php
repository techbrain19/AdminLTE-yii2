<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
        'plugins/fontawesome-free/css/all.min.css',
        'plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'dist/css/adminlte.min.css',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'plugins/summernote/summernote-bs4.min.css',
        'plugins/daterangepicker/daterangepicker.css',
        'plugins/jqvmap/jqvmap.min.css',
        'plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        'plugins/ekko-lightbox/ekko-lightbox.css',
        'plugins/fullcalendar/main.css',
        'plugins/ion-rangeslider/css/ion.rangeSlider.min.css',
        'plugins/bootstrap-slider/css/bootstrap-slider.min.css',
        'plugins/toastr/toastr.min.css',
        'plugins/sweetalert2/sweetalert2.min.css',
        'plugins/uplot/uPlot.min.css',
        'plugins/flag-icon-css/css/flag-icon.min.css',
        'plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'plugins/pace-progress/themes/black/pace-theme-flat-top.css',
        'plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css',
        'plugins/select2/css/select2.min.css',
        'plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css',
        'plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css',
        'plugins/bs-stepper/css/bs-stepper.min.css',
        'plugins/dropzone/min/dropzone.min.css',
        'plugins/summernote/summernote-bs4.min.css',
        'plugins/codemirror/codemirror.css',
        'plugins/codemirror/theme/monokai.css',
        'plugins/simplemde/simplemde.min.css',
        'plugins/jsgrid/jsgrid.min.css',
        'plugins/jsgrid/jsgrid-theme.min.css',
        'plugins/datatables-responsive/css/responsive.bootstrap4.min.css',
        'plugins/datatables-buttons/css/buttons.bootstrap4.min.css',
        'plugins/datatables-bs4/css/dataTables.bootstrap4.min.css',


    ];
    public $js = [
        'plugins/jquery/jquery.min.js',
        'plugins/jquery-ui/jquery-ui.min.js',
        'plugins/bootstrap/js/bootstrap.bundle.min.js',
        'plugins/chart.js/Chart.min.js',
        'plugins/sparklines/sparkline.js',
        'plugins/jqvmap/jquery.vmap.min.js',
        'plugins/jqvmap/maps/jquery.vmap.usa.js',
        'plugins/jquery-knob/jquery.knob.min.js',
        'plugins/moment/moment.min.js',
        'plugins/daterangepicker/daterangepicker.js',
        'plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
        'plugins/summernote/summernote-bs4.min.js',
        'plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'dist/js/adminlte.js',
        'dist/js/demo.js',
        'dist/js/pages/dashboard.js',
        'dist/js/pages/dashboard2.js',
        'dist/js/pages/dashboard3.js',
        'plugins/filterizr/jquery.filterizr.min.js',
        'plugins/ekko-lightbox/ekko-lightbox.min.js',
        'plugins/fullcalendar/main.js',
        'plugins/ion-rangeslider/js/ion.rangeSlider.min.js',
        'plugins/bootstrap-slider/bootstrap-slider.min.js',
        'plugins/sweetalert2/sweeralert2.min.js',
        'plugins/toastr/toastr.min.js',
        'plugins/flot/jquery.flot.js',
        'plugins/flot/plugins/jquery.flot.resize.js',
        'plugins/flot/plugins/jquery.flot.pie.js',
        'plugins/uplot/uPlot.iife.min.js',
        'plugins/pace-progress/pace.min.js',
        'plugins/select2/js/select2.full.min.js',
        'plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js',
        'plugins/inputmask/jquery.inputmask.min.js',
        'plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js',
        'plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        'plugins/bs-stepper/js/bs-stepper.min.js',
        'plugins/dropzone/min/dropzone.min.js',
        'plugins/codemirror/codemirror.js',
        'plugins/codemirror/mode/css/css.js',
        'plugins/codemirror/mode/xml/xml.js',
        'plugins/codemirror/mode/htmlmixed/htmlmixed.js',
        'plugins/bs-custom-file-input/bs-custom-file-input.min.js',
        'plugins/jquery-validation/jquery.validate.min.js',
        'plugins/jquery-validation/additional-methods.min.js',
        'dist/js/adminlte.min.js',
        'plugins/jsgrid/demos/db.js',
        'plugins/jsgrid/jsgrid.min.js',
        'plugins/datatables/jquery.dataTables.min.js',
        'plugins/datatables-bs4/js/dataTables.bootstrap4.min.js',
        'plugins/datatables-responsive/js/dataTables.responsive.min.js',
        'plugins/datatables-responsive/js/responsive.bootstrap4.min.js',
        'plugins/datatables-buttons/js/dataTables.buttons.min.js',
        'plugins/datatables-buttons/js/buttons.bootstrap4.min.js',
        'plugins/jszip/jszip.min.js',
        'plugins/pdfmake/pdfmake.min.js',
        'plugins/pdfmake/vfs_fonts.js',
        'plugins/datatables-buttons/js/buttons.html5.min.js',
        'plugins/datatables-buttons/js/buttons.print.min.js',
        'plugins/datatables-buttons/js/buttons.colVis.min.js',
        'plugins/jquery-mousewheel/jquery.mousewheel.js',
        'plugins/raphael/raphael.min.js',
        'plugins/jquery-mapael/jquery.mapael.min.js',
        'plugins/jquery-mapael/maps/usa_states.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
