<?php
include"db/config.php";
$sql="SELECT * FROM activities";
$result = mysqli_query($conn, $sql);
$no=mysqli_num_rows($result);
$output = "";
if(mysqli_num_rows($result)>0){
//  $output = '<div class="row" >';
 $output='<div class="row border rounded ">';
while($row = mysqli_fetch_assoc($result)){
$output.= '<div class="col-11 d-flex flex-row mb-4 p-2">';
$output.= '<div class="col-3"><img src="img/logo.png" alt="" width="200" height="250"></div>';
$output.= "<div class='col-8'>
<h3 class='mb-0'>{$row['activity_name']}</h3>
<p class='card-text mb-auto'>{$row['description']}</p>
<p class='card-text mb-auto'>Location: {$row['location']}</p>
<div>
<button class='btn btn-danger edit-btn'>price:{$row['price']}</button>
<button class='btn btn-info edit-btn'  data-toggle='modal' data-target='#exampleModal' data-eid='".$row['activityID']."'>Buy now</button>
</div></div>";
    $output.= '</div><br>';
}
$output.= '</div>';
mysqli_close($conn);
echo $output;
}
else{
    echo '<div class="alert alert-danger text-center h4" role="alert">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No movies found!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </div>';
}

?>