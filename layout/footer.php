</div>
    </div>
    <!-- Footer -->
    <div class="footer" id="foot";>
      <div class="rowflex">
        <div class="peta">
            <h1>Peta Desa Salo Timur</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7548813910566!2d101.00146167410011!3d0.3231019996737199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d515ca277e7d81%3A0x50d9d753e0634e97!2sKantor%20Kepala%20Desa%20Salo%20Timur!5e0!3m2!1sid!2sid!4v1690189096808!5m2!1sid!2sid" width="275" height="150" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="kutipan">
          <h1>Desa Salo Timur</h1>
          <p>Desa Salo Timur, Kecamatan Salo</p> 
          <p>Kabupaten Kampar, Provinsi Riau</p> 
          <p>Kode Pos 28451</p> <br>
          <p>Email : desasalotimur@gmail.com</p>
          <p>Telp : 62 852-8993-2694 (Muhammad Fajri)</p>
        </div>
        <div class="clear"></div>
      </div>
      <div class="copyright-section">
        <p>Copyright © 2023, <a href="instagram.com/muhammadravil2" style="color:#92cf48;"><b>KKN UIN Suska Riau X KKN Universitas Riau</b></a> </p>
      </div>
  </div>
  <!-- script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script>
    feather.replace()
</script>
<script>
// toggle class active
const navbarNav = document.querySelector('.navbar-nav');
// ketika hamburger menu di klik
document.querySelector('#hamburger-menu').onclick = () => {
    navbarNav.classList.toggle('active');
};

//klik diluar sidebar untuk menghilangkan nav
const hamburger = document.querySelector('#hamburger-menu');

document.addEventListener('click', function(e){
    if(!hamburger.contains(e.target) && !navbarNav.contains(e.target)){
        navbarNav.classList.remove('active');
    }
});
</script>
<script src="https://unpkg.com/feather-icons"></script>

</body>
</html>