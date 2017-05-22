<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about" style="padding-top: 5px;">
    <h1><?= Html::encode($this->title) ?></h1>

    <p style="text-align: justify;">HOMEPEDIA merupakan suatu website pemasaran bisnis properti secara online berbasis 3D. Dalam praktiknya website ini melakukan proses pemasaran produk melalui desain rancangan rumah berbentuk prototipe 3D dengan ekstensi file .obj dan .mtl. Banyak kita tahu bahwa setiap ecommerce memiliki cara tersendiri untuk membuat tampilan katalog menarik sehingga dapat meningkatkan daya jual suatu produk yang mereka pasarkan. Dari sini kami mencoba menghadirkan suatu sistem e-commerce berbasis 3D untuk membantu pemasaran bisnis properti.  Tentu hal ini diharapkan mampu menjadi terobosan baru untuk pemasaran rumah melalui toko online dengan tampilan 3D.</p>
    <div class="container">
		<div class="col-md-4" style="align-items: center;">
			<h4 style="margin-left: 15px;"><img src="../../../images/iconadmin.png" style="height: 40px; width: 30px; margin-right: 5px;">Seputar Penjual</h4>
            <ul>
                <li> Penjual harus mendaftarkan diri pada untuk mendapatkan akses atau izin untuk melakukan penjualan produk pada HOMEPEDIA ini. </li>
                <li> Penjual harus mengisi data yang valid. </li>
                <li> Penjual bisa melakukan transaksi langsung dengan pembeli. </li>
                <li> Penjual bisa melakukan penjualan produk. </li>
                <li> Untuk tata cara Penjual menjual produk akan dijelaskan lebih lanjut. </li>                
            </ul>

            <h4 style="margin-left: 15px; margin-top: 30px;"><img src="../../../images/iconadmin.png" style="height: 40px; width: 30px; margin-right: 5px;">Info Penjual</h4>
            <ul>
                <li> Panjual melakukan SIGNUP terlebih dahulu. </li>
                <li> Penjual harus melengkapi data perusahaan dengan teliti. </li>
                <li> Penjual menyiapkan file desain bangunan dengan ekstensi .OBJ dan .MTL</li>
                <li> Penjual mengisi data mengenai informasi desain bangunan yang dipasarkan.</li> 
                <li> Penjual mengupload file. </li>               
            </ul>
		</div>
    	<div class="col-md-4">
    		<h4 style="margin-left: 15px;"><img src="../../../images/iconadmin.png" style="height: 40px; width: 30px; margin-right: 5px;">Seputar Pembeli</h4>
            <ul>
                <li> Pembeli bisa masuk tanpa harus melakukan daftar, layaknya penjual. </li>
                <li> Pembeli dapat melakukan pencarian atas desain yang di inginkan. </li>
                <li> Pembeli dapat menggunakan fitur utama dari HOMEPEDIA untuk melihat desain yang di inginkan. Untuk fitur utama sendiri adalah Zoom In, Zoom Out, dan Rotate objek 3d yang di amati. </li>
                <li> Apabila pembeli tertarik pada produk, pembeli bisa melakukan ontak langsung dengan penjual melalui kontak yang tertera pada objek 3D yang dipasarkan. </li>
            </ul>
    	</div>
    	<div class="col-md-4">
    		<h4 style="margin-left: 15px;"><img src="../../../images/iconadmin.png" style="height: 40px; width: 30px; margin-right: 5px;"> Seputar Admin</h4>
            <ul>
                <li> Admin bertugas memanage semua data yang berkaitan dengan HOMEPEDIA. </li>
                <li> Admin bertugas menjaga keamanan data. </li>
                <li> Admin berhak mengelola data dengan catatan sesuai dengan arahan dan berpatok pada HAKI. </li>
            </ul>
    	</div>
    </div>
</div>
