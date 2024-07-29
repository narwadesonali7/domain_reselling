<?php
	 include "header.php";
     include "dashboard/connection.php";
 ?>
 <?php
  extract($_GET);
  $sql="SELECT * FROM domains WHERE d_id='$id'";
  $res=mysqli_query($conn,$sql);
   $data=mysqli_fetch_assoc($res); 

    $d_start_date = $data['d_start_date'];
    $d_end_date = $data['d_end_date'];


   
 ?>
<section class="single-banner mb-3 ">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <h1><?=$data['d_name']?></h1>
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Domain detail</li>
                  </ol>
               </div>
            </div>
         </div>
      </section>
      <br><br>

      <style type="text/css">
      	.table-container {
      	     width: 100%;
            height: 400px; 
            overflow: auto;
            border: 1px solid #ddd;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
        .thead_bidder{
        	height: 50px;
        	width: 100%;
        	border: 1px solid black;
        }
        .th_det1{
        	width: 50%;
        }
        .bid_inp{
        	border: 1px solid black;
        }
</style>
 <section class="domain_det">
 	<div class="container ">
 		<div class="row">
 			<div class="col-lg-12">
 				<h1 class="mb-4"><a ><?=$data['d_name']?></a></h1>
 			</div>
 			<div class="col-lg-6 mb-3 ">
 				<h5 class="mb-3">Current Bid</h5>
 				<p><b class="fs-5">$3,000</b>*USD</p>
 				<p class="mb-3">₹250,000.00</p>
 				<h5 >Time Left</h5>
    <?php
       $current_time = new DateTime();

      $end_time = new DateTime($d_end_date);

       $time_left = $current_time->diff($end_time);
    ?>
<p class="mb-2 text-danger">
    <?php
    echo  formatTimeLeft($time_left);

    ?>
    left
</p>
<?php

function formatTimeLeft($interval) {
$format = '';
if ($interval->d > 0) {
    $format .= $interval->d . 'd ';
}
if ($interval->h > 0) {
    $format .= $interval->h . 'h ';
}
if ($interval->i > 0) {
    $format .= $interval->i . 'm ';
}
if (empty($format)) {
    $format = 'Less than a minute';
}
return $format;
}
?>
 				<h5>Estimated Value <i class="fas fa-exclamation-triangle "></i>
 				</h5>
 				<p class="mb-1">₹<?=$data['d_estimated_value']?> </p>
 				<h5>Age</h5>
 				<p class="mb-3"><?=$data['d_age']?>&nbsp;Years</p>

 				<h3 class="mb-1">Your bid</h3>
 				<p class="mb-4">(place minimum bid or enter a proxy bid)</p>
 				<form>
 					<input type="text" value="USD $-00" class=" bid_inp form-control w-50" name="" ><br>
 					<button class="btn btn-outline btn-sm w-50">place bid</button>
 				</form>
 			</div>
 			<div class="col-lg-6 mt-5">
 			<table>
 				<thead>
 				<tr>
 					<th class="th_det1">Bid History</th>
 					<th class="text-end th_det1">127 Bids, 14 Bidders</th>
 				</tr>
 			</thead>
 			</table>
 			<div class="table-container">
        <table class="table_det">
            
            <tbody>
                 <tr>
                 <td class="th_det1">Bidder 11<br>
                 	5/25/2024 6:26 AM
                   </td>
                    <td class="text-end th_det1">$3,000 <br> 
                    +$12</td>
                </tr>
                <tr>
                 <td class="th_det1">Bidder 11<br>
                 	5/25/2024 6:26 AM
                   </td>
                    <td class="text-end th_det1">$3,000 <br> 
                    +$12</td>
                </tr>
                <tr>
                 <td class="th_det1">Bidder 11<br>
                 	5/25/2024 6:26 AM
                   </td>
                    <td class="text-end th_det1">$3,000 <br> 
                    +$12</td>
                </tr>
                <tr>
                 <td class="th_det1">Bidder 11<br>
                 	5/25/2024 6:26 AM
                   </td>
                    <td class="text-end th_det1">$3,000 <br> 
                    +$12</td>
                </tr>
                <tr>
                 <td class="th_det1">Bidder 11<br>
                 	5/25/2024 6:26 AM
                   </td>
                    <td class="text-end th_det1">$3,000 <br> 
                    +$12</td>
                </tr>
                <tr>
                 <td class="th_det1">Bidder 11<br>
                 	5/25/2024 6:26 AM
                   </td>
                    <td class="text-end th_det1">$3,000 <br> 
                    +$12</td>
                </tr>
                </tbody>
          </table>
       </div>
 			</div>
 		</div>
 	</div>
 </section>
 <br><br>
 <?php
    include "footer.php";
 ?>
   