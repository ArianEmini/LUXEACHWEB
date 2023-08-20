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
    document.querySelector('.infosell1').style.display='inline';
    document.querySelector('.modal-2').style.display='none';
    
    document.querySelector('.close-mark-sell1').addEventListener('click',closeSell)

function closeSell(){
  document.querySelector('.infosell1').style.display='none';
}





    </script>";



} 
else
{

    echo "Porosia nuk eshte bere.Provo perseri";

}
