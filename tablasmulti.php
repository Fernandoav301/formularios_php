<?php
$inicio=$_POST['inicio'];
$fin=$_POST['fin'];

echo 'Tabla correspondiente al numero: '.$inicio.'<br/>';
echo 'concluye con el numero: '.$fin.'<br/>'.'<br/>';


	echo 'Tabla del '.$inicio.'<br/>';
	for ($i=1; $i<=$fin; $i++){
	echo $inicio.'*'.$i.'='.$inicio*$i.'<br/>';
	}
	

?>