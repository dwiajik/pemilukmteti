<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Pemilu KMTETI 2015</title>

  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('style.css') }}">

  <script language="javascript">
    document.onmousedown=disableclick;
    status="Right Click Disabled";
    Function disableclick(event)
    {
      if(event.button==2)
       {
         alert(status);
         return false;    
       }
    }
  </script>

</head>

<body oncontextmenu="return false">
  <div class="KMTETI-top-blue"></div>
  <div class="KMTETI-top-blue-light"></div>
  <div class="KMTETI-top-green"></div>
  <div class="navbar navbar-default navbar-pemilu" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <div class="navbar-text navbar-left">
          <b class="color-white">Pemilu KMTETI 2015</b>
        </div>
      </div>
      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li><a href="#tab1" data-toggle="tab">Robbi Maulana</a></li>
          <li><a href="#tab2" data-toggle="tab">Misbach Imaduddin</a></li>
          <li id="btn-narto"><a href="#tab3" data-toggle="tab">Ahmad Khinarto</a></li>
        </ul>
      </div>
    </div>
  </div>
      <div class="row tab-content">
        <div class="tab-pane active fade in">
          <section class="wrapper2 bg-pemilu">
            <div class="container">
              <div class="col-md-4">
                <a href="#tab1" data-toggle="tab" class="img-calon-profpic-robbi"></a>
              </div>
              <div class="col-md-4">
                <a href="#tab2" data-toggle="tab" class="img-calon-profpic-imad"></a>
              </div>
              <div class="col-md-4">
                <a href="#tab3" data-toggle="tab" class="img-calon-profpic-narto"></a>
              </div>
            </div>
          </section>
        </div>
        <div class="tab-pane fade in" id="tab1">
          <section class="wrapper">
            <div class="container">
              <div class="row content">
                <div class="col-md-4">
                  <a data-toggle="modal" data-target="#voteNow1" class="img-calon-robbi" role="button"></a>
                  <div class="col-md-3">
                    <a href="#tab3" data-toggle="tab" onclick="changeActiveNarto()"><i class="arrow-vote-left fa fa-chevron-left fa-2x"></i></a>
                  </div>
                  <div class="col-md-6">
                    <a data-toggle="modal" data-target="#voteNow1" class="btn btn-lg btn-vote2 mrg-top-30 center-block"><b>Vote Robbi</b></a>
                  </div>
                  <div class="col-md-3">
                    <a href="#tab2" data-toggle="tab"><i class="arrow-vote-right fa fa-chevron-right fa-2x"></i></a>
                  </div>  
                </div>
                <div class="col-md-1">
                  <br>
                </div>
                <div class="col-md-7">
                  <h3 class="mrg-top-60 color-blue">VISI</h4>
                  <blockquote class="mrg-btm-30 color-dark-grey">Menjadikan KMTETI menjadi wadah organisasi yang menyenangkan dengan menjunjung tinggi profesionalitas, rasa solidaritas, kebersamaan, dan dilandaskan tanggung jawab serta menciptakan hubungan yang dinamis dalam lingkup internal dan eksternal JTETI
                  </blockquote>
                  <h3 class="color-blue">MISI</h4>
                  <ul class="color-dark-grey">
                    <li>Menjadikan KMTETI sebagai organisasi yang serius dan santai, dengan bersikap profesional dan menjunjung tinggi rasa kekeluargaan yang bertanggung jawab</li>
                    <li>Fokus dalam memajukan KMTETI dengan landasan manajemen  waktu yang baik</li>
                    <li>KMTETI menyapa dan KMTETI mengenal</li>
                    <li>Kreatif, peka, dan tanggap dengan lingkungan yang ada di sekitar</li>
                    <li>Mempertahankan program pengabdian masyarakat yang ada di JTETI</li>
                    <li>Mempererat hubungan mahasiswa dengan dosen dan alumni JTETI demi hubungan keluarga yang hangat di lingkup JTETI</li>
                    <li>Menyeimbangkan softskill dan hardskill mahasiswa JTETI</li>
                    <li>Memperkenalkan JTETI di lingkup Teknik, UGM, dan Masyarakat melalui prestasi  akademik dan non akademik mahasiswa JTETI</li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="tab-pane fade" id="tab2">
          <section class="wrapper">
            <div class="container">
              <div class="row content">
                <div class="col-md-4">
                  <a data-toggle="modal" data-target="#voteNow2" class="img-calon-imad" role="button"></a>
                  <div class="col-md-3">
                    <a href="#tab1" data-toggle="tab"><i class="arrow-vote-left fa fa-chevron-left fa-2x"></i></a>
                  </div>
                  <div class="col-md-6">
                    <a data-toggle="modal" data-target="#voteNow2" class="btn btn-lg btn-vote2 mrg-top-30 center-block"><b>Vote Imad</b></a>
                  </div>
                  <div class="col-md-3">
                    <a href="#tab3" data-toggle="tab"><i class="arrow-vote-right fa fa-chevron-right fa-2x"></i></a>
                  </div> 
                </div>
                <div class="col-md-1">
                  <br>
                </div>
                <div class="col-md-7">
                  <h3 class="mrg-top-60 color-blue">VISI</h4>
                  <blockquote class="mrg-btm-30 color-dark-grey">Mewujudkan KMTETI sebagai keluarga mahasiswa yang profesional, menyenangkan, serta menjunjung tinggi rasa kekeluargaan dalam rangka mencetak kader yang berkualitas serta berjiwa kepemimpinan
                  </blockquote>
                  <h3 class="color-blue">MISI</h4>
                  <ul class="color-dark-grey">
                    <li>Memperbaiki dan mempertahankan Program Kerja serta Kemajuan setiap Departemen KMTETI</li>
                    <li>Mempererat hubungan antar anggota, pengurus, dan seluruh aspek KMTETI FT UGM</li>
                    <li>Membentuk human resources yang profesional dan mempunyai rasa memiliki terhadap KMTETI</li>
                    <li>Meningkatkan dan melanjutkan fondasi KMTETI yang telah terbentuk agar menjadi lebih nyata dan kokoh</li>
                    <li>Mengembangkan sistem informasi online sebagai pusat informasi seluruh mahasiswa JTETI FT UGM</li>
                    <li>Meningkatkan dan menjaga hubungan antar KM/HM serta organisasi lainnya</li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="tab-pane fade" id="tab3">
          <section class="wrapper">
            <div class="container">
              <div class="row content">
                <div class="col-md-4">
                  <a data-toggle="modal" data-target="#voteNow3" class="img-calon-narto" role="button"></a>
                  <div class="col-md-3">
                    <a href="#tab2" data-toggle="tab"><i class="arrow-vote-left fa fa-chevron-left fa-2x" id="arrow-vote-left-robbi"></i></a>
                  </div>
                  <div class="col-md-6">
                    <a data-toggle="modal" data-target="#voteNow3" class="btn btn-lg btn-vote2 mrg-top-30 center-block"><b>Vote Narto</b></a>
                  </div>
                  <div class="col-md-3">
                    <a href="#tab1" data-toggle="tab"><i class="arrow-vote-right fa fa-chevron-right fa-2x"></i></a>
                  </div>  
                </div>
                <div class="col-md-1">
                  <br>
                </div>
                <div class="col-md-7">
                  <h3 class="mrg-top-60 color-blue">VISI</h4>
                  <blockquote class="mrg-btm-30 color-dark-grey">Menjadikan KMTETI sebagai keluarga mahasiswa yang dapat menghasilkan kader yang berkualitas, serta berpartisipasi dalam mewujudkan solidaritas teknik satu tanpa mengabaikan pentingnya rasa kekeluargaan antar sesama warga JTETI
                  </blockquote>
                  <h3 class="color-blue">MISI</h4>
                  <ul class="color-dark-grey">
                    <li>Mengembangkan sifat religius di kalangan mahasiswa JTETi dalam melakukan setiap kegiatan</li>
                    <li>Menghasilkan kader KMTETI yang memiliki rasa kepedulian terhadap orang dan lingkungan dimana ia berada</li>
                    <li>Membudayakan musyawarah dan diskusi di lingkungan KMTETI</li>
                    <li>Mempererat hubungan KMTETI dengan KM/HM, BEM dan lembaga lain untuk mendukung terwujudnya solidaritas teknik SATU</li>
                    <li>Mempererat hubungan kekeluargaan internal KMTETI melalui agenda bersama antar departemen</li>
                    <li>Menjadikan KMTETI sebagai penyalur aspirasi mahasiswa JTETi kepada pihak jurusan</li>
                    <li>Memperbaiki proses monitoring, training, dan upgrading  kader KMTETI sehingga menjadi lebih terstruktur</li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>

  <div class="modal fade" id="voteNow1" tabindex="-1" role="dialog" aria-labelledby="voteNowLabel" aria-hidden="true">
    <div class="container">
      <div class="modal-dialog modal-dialog-pemilu">
        <div class="modal-content">
          <div class="modal-header modal-header-pemilu">
            <button type="button" class="close color-white" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title color-white" id="voteNowLabel">Konfirmasi</h4>
          </div>
          <div class="modal-body color-dark-grey">
            Apakah Anda yakin memilih <b>Robbi Maulana F.S.</b> sebagai Ketua Pengurus Harian KMTETI FT UGM periode 2015?
          </div>
          <div class="modal-footer modal-footer-pemilu center-block">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            <button data-dismiss="modal" data-toggle="modal" data-target="#voteSuccess" type="button" class="btn btn-vote" onclick="redirectLogin(); post('voteCalon', {nomorCalon: '1'});">Saya Yakin!</button>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="voteNow2" tabindex="-1" role="dialog" aria-labelledby="voteNowLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-pemilu">
    <div class="modal-content">
      <div class="modal-header modal-header-pemilu">
        <button type="button" class="close color-white" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title color-white" id="voteNowLabel">Konfirmasi</h4>
      </div>
      <div class="modal-body color-dark-grey">
        Apakah Anda yakin memilih <b>Misbach Imaduddin Z.</b> sebagai Ketua Pengurus Harian KMTETI FT UGM periode 2015?
      </div>
      <div class="modal-footer modal-footer-pemilu center-block">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
        <button data-dismiss="modal" data-toggle="modal" data-target="#voteSuccess" type="button" class="btn btn-vote" onclick="redirectLogin(); post('voteCalon', {nomorCalon: '2'});">Saya Yakin!</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="voteNow3" tabindex="-1" role="dialog" aria-labelledby="voteNowLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-pemilu">
    <div class="modal-content">
      <div class="modal-header modal-header-pemilu">
        <button type="button" class="close color-white" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title color-white" id="voteNowLabel">Konfirmasi</h4>
      </div>
      <div class="modal-body color-dark-grey">
        Apakah Anda yakin memilih <b>Ahmad Khinarto</b> sebagai Ketua Pengurus Harian KMTETI FT UGM periode 2015?
      </div>
      <div class="modal-footer modal-footer-pemilu center-block">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
        <button data-dismiss="modal" data-toggle="modal" data-target="#voteSuccess" type="button" class="btn btn-vote" onclick="redirectLogin(); post('voteCalon', {nomorCalon: '3'});">Saya Yakin!</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="voteSuccess" tabindex="-1" role="dialog" aria-labelledby="voteSuccessLabel" aria-hidden="true" onclick="redirectLoginInstant()">
  <div class="modal-dialog modal-dialog-pemilu">
    <div class="modal-content">
      <div class="modal-header modal-header-pemilu">
        <button type="button" class="close color-white" data-dismiss="modal" onclick="redirectLoginInstant()"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title color-white" id="voteSuccessLabel">Vote Success</h4>
      </div>
      <div class="modal-body color-dark-grey">
        Terimakasih telah berpartisipasi dalam Pemilu KMTETI 2015.
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function redirectLogin(){
    setTimeout(function(){
      window.location="index.php";
    },3000)
  }

  function redirectLoginInstant(){
    window.location="index.php";
  }
    
  function post(path, params, method) {
    method = method || "post"; // Set method to post by default if not specified.

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);

    for(var key in params) {
        if(params.hasOwnProperty(key)) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);

            form.appendChild(hiddenField);
         }
    }

    document.body.appendChild(form);
    form.submit();
}

  function changeActiveNarto(){
    document.getElementById('btn-narto').addclass('active');
  }
</script>

  <div class="KMTETI-btm-green"></div>
  <div class="KMTETI-btm-blue-light"></div>
  <div class="KMTETI-btm-blue"></div>

  <script src="{{ URL::asset('js/jquery.js') }}"></script>
  <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
  <script src="{{ URL::asset('js/custom.js') }}"></script>

  <!--
  <section class="wrapper brd-btm-grey">
    <div class="container">
      <div class="content row">
        <div class="content col-md-4">
          <a href="#home" class="thumbnail"><img src="assets/2.jpg"></a>
        </div>
        <div class="content col-md-4">
          <a href="#home" class="thumbnail"><img src="assets/2.jpg"></a>
        </div>
        <div class="content col-md-4">
          <a href="#home" class="thumbnail"><img src="assets/2.jpg"></a>
        </div>
      </div>
    </div class="container">
  </section> -->

