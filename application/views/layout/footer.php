<footer class="footer">
   <div class="container">
    <div class="content-box wow fadeIn" data-wow-delay="0s">
      <h2>ADDRESS</h2>
      <p> Boryissa Hymri Str. No : 126<br>
        Poxniaky Greenline<br>
        Kiev - Ukraine </p>
    </div>
    <!-- end content-box -->
    <div class="content-box wow fadeIn" data-wow-delay="0.1s">
      <h2>GET IN TOUCH</h2>
      <p>+380 98 294 80 86<br>
        hello [at] verno.com.ua</p>
    </div>
    <!-- end content-box -->
    <div class="content-box wow fadeIn" data-wow-delay="0.2s">
      <h2>CAREER</h2>
      <p>To see currently open positions<br>
        career [at] verno.com.ua</p>
    </div>
    <!-- end content-box --> 
    </div>
      <!-- end container -->
  </footer>
  <!-- end footer -->
  <footer class="sub-footer">
   <div class="container wow fadeIn"><small>All rights reserved 2019 © Verno</small>
    <ul>
      <li><a href="#">Facebook</a></li>
      <li><a href="#">Behance</a></li>
      <li><a href="#">Dribbble</a></li>
    </ul>
    </div>
    <!-- end container -->
  </footer>
  <!-- end sub-footer --> 
</main>
<!-- end main --> 
<audio id="link" src="<?php echo base_url() ?>assets/audio/link.mp3" preload="auto"></audio>

<!-- JS FILES --> 
<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/swiper.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/jquery.stellar.js"></script> 
<script src="<?php echo base_url() ?>assets/js/isotope.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/imagesloaded.pkgd.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/jquery.typewriter.js"></script> 
<script src="<?php echo base_url() ?>assets/js/odometer.min.js"></script>  
<script src="<?php echo base_url() ?>assets/js/fancybox.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/wow.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/scripts.js"></script>
<script type='text/javascript'>
function closeModal() {
document.getElementById('pelajar').classList.remove('active')
document.getElementById('whatsapp').classList.remove('active')
}
function openModal() {
document.getElementById('pelajar').classList.add('active')
document.getElementById('whatsapp').classList.add('active')
}


// Onclick Whatsapp Sent!
$('#whatsapp .submit').click(WhatsApp);


var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
function WhatsApp() {
    var ph = '';
    if ($('#whatsapp .nama').val() == '') { // Cek Nama
        ph = $('#whatsapp .nama').attr('placeholder');
        alert('Silahkan tulis ' + ph);
        $('#whatsapp .nama').focus();
        return false;
    } else if ($('#whatsapp .email').val() == '') { // Cek Email
        ph = $('#whatsapp .email').attr('placeholder');
        alert('Silahkan tulis ' + ph);
        $('#whatsapp .email').focus();
        return false;
    } else if (reg.test($('#whatsapp .email').val()) == false) { // Cek Validasi Email
        alert('Alamat E-mail tidak valid.');
        $('#whatsapp .email').focus();
         return false;
    } else if ($('#whatsapp .pesan').val() == '') { // Cek Pesan
        ph = $('#whatsapp .pesan').attr('placeholder');
        alert('Silahkan tulis ' + ph);
        $('#whatsapp .pesan').focus();
        return false;
    } else {
        if (!confirm("Sudah menginstall WhatsApp?")) {
            window.open("https://www.whatsapp.com/download/");
        } else {
            // Check Device (Mobile/Desktop)
            var url_wa = 'https://web.whatsapp.com/send';
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                url_wa = 'whatsapp://send/';
            }
            // Get Value
            var tujuan = $('#whatsapp .tujuan').val(),
                    via_url = location.href,
                    nama = $('#whatsapp .nama').val(),
                    email = $('#whatsapp .email').val(),
                    pesan = $('#whatsapp .pesan').val();
            $(this).attr('href', url_wa + '?phone=62 ' + tujuan + '&text=Halo Pak Marco, saya *' + nama + '* (' + email + ').. %0A%0A' + pesan + '%0A%0Avia ' + via_url);
            var w = 960,
                    h = 540,
                    left = Number((screen.width / 2) - (w / 2)),
                    tops = Number((screen.height / 2) - (h / 2)),
                    popupWindow = window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=1, copyhistory=no, width=' + w + ', height=' + h + ', top=' + tops + ', left=' + left);
            popupWindow.focus();
            return false;
        }
    }
}

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(window).scroll(function(){
    if($(this).scrollTop() > 100){
        $('#scroll').fadeIn();
    }else{
        $('#scroll').fadeOut();
    }
});
    $('#scroll').click(function(){ 
    $("html, body").animate({ scrollTop: 0 }, 600); 
    return false; 
});

    
</script>
<script type="text/javascript">
$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() > 100){
            $('#scroll').fadeIn();
        }else{
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});
</script>
</body>

<!-- Mirrored from themezinho.net/verno/index-video-bg.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2020 07:38:30 GMT -->
</html>