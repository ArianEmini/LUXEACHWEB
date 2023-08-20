<?php
$connection = mysqli_connect('localhost', 'root', '', 'luxeach');

extract($_POST);

$data = '';

foreach($_POST as $k => $v) {
    if(empty($data)) {
        $data .= "$k ='$v'";
    } else {
        $data .= ", $k='$v'";
    }
}

$sql = "INSERT INTO homei set $data";
$results = mysqli_query($connection, $sql);




if($results) {
    
    echo "<script>
    document.querySelector('.infosell').style.display='inline';

    document.querySelector('.modal-1').style.display='none';

    document.querySelector('.close-mark-sell').addEventListener('click',closeSell)

function closeSell(){
  document.querySelector('.infosell').style.display='none';
}





    </script>";



} 
else
{

    echo "Porosia nuk eshte bere.Provo perseri";

}
