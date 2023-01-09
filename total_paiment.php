
<?php
include "nav.php";
?>

<?php
$conn = mysqli_connect("localhost","root","","artalk");
$total_prix=$_GET['total_prix'];
?>

<div style="margin-top: 40px; margin-left: 500px;">
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="aminabenjalloune@gmail.com">
<input type="hidden" name="lc" value="AR">
<input type="hidden" name="amount" value="<?php echo $total_prix;?>">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="tax_rate" value="0.000">
<input type="hidden" name="shipping" value="0">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="hidden" name="Accueil" value="http://localhost/artalk/client.php?succes_aiment">
<input type="hidden" name="Quitter" value="http://localhost/artalk/client.php?quitter_paiment">
<input type="image" src="https://i.postimg.cc/FHVxr9FK/paypal-pay-now.png" border="0" name="submit" alt="PayPal - le chemin le plus sur et le plus rapide de payer en ligne" width="200px;">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


</div>
<a href="client.php?succes" class="btn btn-primary" style="margin-top: 5px; margin-left: 568px;">Quitter</a>

</body>
</html>