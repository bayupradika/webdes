
    <!-- Footer -->
  <div class="footer">
    <div class="container-fluid map">
      <h1>Peta Desa Salo Timur</h1>
      <div class="container-fluid maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7548813910566!2d101.00146167410011!3d0.3231019996737199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d515ca277e7d81%3A0x50d9d753e0634e97!2sKantor%20Kepala%20Desa%20Salo%20Timur!5e0!3m2!1sid!2sid!4v1690189096808!5m2!1sid!2sid" width="40%" height="200" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <h2 style="margin-top: 0; line-height:2rem">DESA SALO TIMUR <br>KECAMATAN SALO  <br>KABUPATEN KAMPAR <br>PROVINSI RIAU <br>Kode Pos 28451</h2>
      </div>
    </div>
    <div class="copyright">
      <p>&copy; 2023, <a href="instagram.com/muhammadravil2" style="color:#92cf48;"><b>KKN UIN SUSKA RIAU</b></a> X <a href="https://bayupradika09.site/" style="color:#92cf48;"><b>KKN INTEGRASI UR 2023</b></a></p>
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
</body>
</html>
<style>
  .footer {
  width: 100vw;
  background-color: #1e3a5d;
  color: white;
}
.map{
  width: 100%;
  margin: 0;
}
.map h1{
  padding: 15px 0px 0px 30px;
}

.maps{
  width: 100%;
  margin: 0;
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  gap: 50px;

}

.copyright{
  text-align: center;
}
</style>