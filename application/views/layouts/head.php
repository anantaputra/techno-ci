<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/adminlte/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/adminlte/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/adminlte/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/adminlte/plugins/summernote/summernote-bs4.min.css">
    <style type="text/css">/* Chart.js */
        @keyframes chartjs-render-animation{
            from{opacity:.99}to{opacity:1}
        }
        .chartjs-render-monitor{
            animation:chartjs-render-animation 1ms
        }
        .chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{
            position:absolute;
            direction:ltr;
            left:0;
            top:0;
            right:0;
            bottom:0;
            overflow:hidden;
            pointer-events:none;
            visibility:hidden;
            z-index:-1
        }
        .chartjs-size-monitor-expand>div{
            position:absolute;
            width:1000000px;
            height:1000000px;
            left:0;
            top:0
        }
        .chartjs-size-monitor-shrink>div{
            position:absolute;
            width:200%;
            height:200%;
            left:0;
            top:0
        }
    </style>
</head>