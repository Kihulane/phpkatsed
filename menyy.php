<!doctype html>
<html>
  <head>
    <title>Men�� proov</title>
  </head>
  <body>
     <select name="maakonnad">
	   <option>Hiiumaa</option>
	   <option selected="selected">L��nemaa</option>
	   <option>Harjumaa</option>
	 </select>
	 <form action="?">
	  <select name="riigivalik">
	 <?php 
	   $riigid=array("Soome", "Eesti", "L�ti", "Leedu");
	   $valikunr=2;
	   for($riiginr=0; $riiginr<count($riigid); $riiginr++){
	      $lisand=($riiginr==$valikunr) ? "selected='selected'" : "";
	      echo "<option value='$riiginr' $lisand>$riigid[$riiginr]</option>\n";
	   }
	 ?>
	  </select>
	  <input type="submit" value="sisesta" />
	 </form>
  </body>
</html>