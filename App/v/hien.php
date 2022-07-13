<?php
echo 'Đây là trang hiện';
echo '</br>';
echo 'Tính tổng 2 số';
?>
<p>Số a</p>
<form method='post' action='<?=  BASE_URL .'/tinh'  ?>'>
<input type='number' name='soa' min=0>
<p>Số b</p>
<input type='number'name='sob' min=0>

 <button type="submit">Tính tổng</button>
</form>
<h1>Tổng 2 số là : <?php if(isset($c)) {echo $c;}  ?></h1>
