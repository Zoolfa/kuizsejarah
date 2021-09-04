<script type="text/javascript">
function paparMasa(durasi, papar) {
  var masa = durasi, minit, saat;
  setInterval(function () {
    minit = parseInt(masa / 60, 10);
    saat = parseInt(masa % 60, 10);

    minit = minit < 10 ? "0" + minit : minit;
    saat = saat < 10 ? "0" + saat : saat;

    papar.textContent = minit + ":" + saat;

    if (++masa < 0){
      masa = durasi;
    }
  }, 1000);
}
window.onload = function () {
  var zeroMinit = 60 * 0,
    papar = document.querySelector('#time');
  paparMasa(zeroMinit, papar);
};
</script>
<div>Masa menjawab <span id="time">00:00</span></div>