<?php

/* @var $this yii\web\View */


$this->title = 'My Yii Application';

$this->registerCssFile("@web/css/customindex.css",
    [
        'depends' => [\yii\bootstrap\BootstrapAsset::className()],
        'media' => 'screen',
    ]);
$this->registerJsFile("@web/js/three.min.js",
    [
        'depends' => [\yii\web\JqueryAsset::className()]
    ]);
$this->registerJsFile("@web/js/MTLLoader.js",
    [
        'depends' => [\yii\web\JqueryAsset::className()]
    ]);
$this->registerJsFile("@web/js/OBJLoader.js",
    [
        'depends' => [\yii\web\JqueryAsset::className()]
    ]);
$this->registerJsFile("@web/js/TrackballControls.js",
    [
        'depends' => [\yii\web\JqueryAsset::className()]
    ]);

?>
<script type="text/javascript" src="/advanced/frontend/web/js/three.js"></script>    
<!-- <script type="text/javascript" src="/advanced/frontend/web/js/MTLLoader.js"></script>     -->
<script type="text/javascript" src="/advanced/frontend/web/js/OBJLoader.js"></script>    
<script type="text/javascript" src="/advanced/frontend/web/js/TrackballControls.js"></script>    

<div class="site-index">
    <div class="page-header">
        <h2 style="text-align: center; margin-top: 60px;">Website Pemasaran Bisnis Properti Berbasis 3D</h2>
        <p style="text-align: justify; margin:20px;">Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>
    </div>

    <div class="body-content">
            <div class="col-xs-2 sidemenu">
                    <p class="lead" style="padding-top: 10px">Kategori</p>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Rumah 36
                        </label>

                        <label class="cekbox">
                            <input type="checkbox"> Rumah 72
                        </label>
                        
                        <label class="cekbox">
                            <input type="checkbox"> Rumah 96
                        </label>
                        
                        <label class="cekbox">
                            <input type="checkbox"> Rumah 112
                        </label>

                    <p class="lead" style="padding-top: 20px;">Lokasi</p>
                        <label>
                            <input type="checkbox"> Surabaya Pusat 
                        </label>

                        <label class="cekbox">
                            <input type="checkbox"> Surabaya Timur
                        </label>
                        
                        <label class="cekbox">
                            <input type="checkbox"> Surabaya Barat
                        </label>
                        
                        <label class="cekbox">
                            <input type="checkbox"> Surabaya Utara
                        </label>                    

                        <label class="cekbox">
                            <input type="checkbox"> Surabaya Selatan
                        </label>                    
                    </div>
            </div>
            <div class="col-xs-9 kontenrumah">
                    <p class="lead" style="margin-top: 10px;">Katalog Desain Rumah</p>
                    <div class="col-md-3">
                        <h5><b> Rumah Mawar Indah 1</b></h5>
                        <img src="../../../images/home1.png" alt="Levis Jeans" style="width: 100px; height: 80px" class="img-thumb">
                        <br></br>
                        <p class="price">Our Price: $19.99</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Details</button>
                    </div>

                    <div class="col-md-3">
                        <h5><b> Rumah Mawar Indah 2</b></h5>
                        <img src="../../../images/home2.png" alt="Levis Jeans" style="width: 100px; height: 80px" class="img-thumb">
                        <br></br>
                        <p class="price">Our Price: $19.99</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Details</button>
                    </div>

                    <div class="col-md-3">
                        <h5><b> Rumah Mawar Indah 3</b></h5>
                        <img src="../../../images/home3.png" alt="Levis Jeans" style="width: 100px; height: 80px" class="img-thumb">
                        <br></br>
                        <p class="price">Our Price: $19.99</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Details</button>
                    </div>

                    <div class="col-md-3">
                        <h5><b> Rumah Mawar Indah 4</b></h5>
                        <img src="../../../images/home4.png" alt="Levis Jeans" style="width: 100px; height: 80px" class="img-thumb">
                        <br></br>
                        <p class="price">Harga: $19.99</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Details</button>
                    </div>

                    <div class="col-md-3" style="margin-bottom: 10px;">
                        <h5><b> Rumah Mawar Indah 5</b></h5>
                       <img src="../../../images/home5.png" alt="Levis Jeans" style="width: 100px; height: 80px" class="img-thumb">
                        <br></br>
                        <p class="price">Our Price: $19.99</p>
                        <button type="button" class="btn btn-primary" onclick="showDetail();">Details</button>
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                            
                             <!-- MODAL POP UP -->

                            <div id="myModal3d" class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="col-md-7 modalgambar" id="load3D">
                                        <h4 style="margin: 10px; margin-top: 15px;">Detail gambar</h4>
                                        <iframe src='http://localhost:8080/three_js/objHand.html' id='iframe-3d' style="width: 100%; height: 400px"></iframe>
                                    </div>
                                    <div class="col-md-4 modalinfo">
                                        <div class="listing">
                                            <p class="lead" style="padding-top: 10px; margin-left: 5px;">Informasi Bangunan</p>
                                            <ul>
                                                <li>Halaman Depan & Halaman Belakang</li>
                                                <li>Kamar Mandi 3</li>
                                                <li>Kamar Tidur 5</li>
                                                <li>Luas Bgn 100 m2 & Luas Tanah 125 m2</li>
                                                <li>Halaman Depan & Halaman Belakang</li>
                                                <li>Kamar Mandi 3</li>
                                                <li>Kamar Tidur 5</li>
                                                <li>Garasi dan Taman</li>
                                                <li>Luas Bgn 100 m2 & Luas Tanah 125 m2</li>
                                                <li>CV Indra Jaya - Jakarta</li>
                                                <li><a href="#"> indrajaya@gmail.com </a></li><br>
                                                <p class="lead price">Harga : Rp. 25.000.000,-</p>
                                            </ul>
                                                     
                                        </div>
                                    </div>
                                    <div class="modal-footer" >
                                        <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-top: 10px;">Close</button>
                                    </div>
                            </div>
                        </div>
                    </div>
            </div>    
    </div>
</div>

<script type="text/javascript">
    function showDetail() {
        $("#myModal3d").modal("show");
        $("#iframe-3d").attr('src','http://localhost:8080/three_js/objHand.html');
    }
</script>
