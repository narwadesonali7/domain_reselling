<?php
	 include "header.php";
 ?>
 <style>
       .container {
            width: 100%;
            margin: 20px auto;
            text-align: center;
        }
        .search-container {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        a {
            text-decoration: none;
            color: #333;
        }
        a:hover {
            text-decoration: underline;
        }
        .search_inp{
            border: 1px solid black;
            height: 40px;
            width: 400px;
        }
    </style>

 <section class="single-banner mb-3 ">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <h1>Our Domains</h1>
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">
                     domains
                 </li>
                  </ol>
               </div>
            </div>
         </div>
      </section>
      <br><br>
    <section>

<section>
  <div class="container">
        <h1>Auction</h1>
        <div class="search-container">
            <input type="text" class="search_inp" id="searchInput" placeholder="Search..." />
            <button onclick="searchTable()"  class="btn btn-inline mb-3 p-2 mt-3">Search</button>
        </div>
        <h4>Search Result</h4>
        <table id="dataTable">
            <thead>
                <tr>
                    <th>Domain Name</th>
                    <th>Domain Price</th>
                    <th>Age</th>
                    <th>Estimated Value</th>
                    <th>Time Left</th>
                    <th>Enter Bid</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</section> 


<?php
include "dashboard/connection.php";
$sql = "SELECT * FROM domains";
$res = mysqli_query($conn, $sql);
$domains = array();
if ($res) {
    while ($row = mysqli_fetch_assoc($res)) {
        $d_end_date = $row['d_end_date'];
        
        $current_time = new DateTime();
        $end_time = new DateTime($d_end_date);
        $time_left = $current_time->diff($end_time);
        
        $total_seconds_left = ($time_left->days * 24 * 60 * 60) + ($time_left->h * 60 * 60) + ($time_left->i * 60) + $time_left->s;
        $row['total_seconds_left'] = $total_seconds_left;
        
        $domains[] = $row;
    }
}

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
    if ($interval->s > 0) {
        $format .= $interval->s . 's';
    }
    
    return $format;
}
?>
<script>
const data = <?php echo json_encode($domains); ?>;
function loadTableData(data) {
    const tableBody = document.querySelector('#dataTable tbody');
    tableBody.innerHTML = ''; 
    data.forEach(item => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>
                <a href="domain_detail.php?id=${item.d_id}">
                    ${item.d_name}
                </a>
            </td>
            <td>₹88,33,333</td>
            <td>${item.d_age}&nbsp;years</td>
            <td>&#8377; &nbsp;${item.d_estimated_value}</td>
            <td class="text-danger" id="time-left-${item.d_id}">${formatTimeLeft(item.total_seconds_left)}&nbsp;left</td>
            <td>
                <button class="btn btn-outline">Place Bid</button>
            </td>
        `;
        tableBody.appendChild(row);
        startCountdown(item.d_id, item.total_seconds_left);
    });
}

function formatTimeLeft(totalSeconds) {
    const days = Math.floor(totalSeconds / (24 * 60 * 60));
    const hours = Math.floor((totalSeconds % (24 * 60 * 60)) / (60 * 60));
    const seconds = totalSeconds % 60;

    return `${days}d ${hours}h ${seconds}s`;
}

function startCountdown(id, totalSeconds) {
    const countdownElement = document.getElementById(`time-left-${id}`);
    
    const interval = setInterval(() => {
        if (totalSeconds <= 0) {
            clearInterval(interval);
            countdownElement.textContent = "Expired";
            return;
        }
        
        totalSeconds--;
        countdownElement.textContent = formatTimeLeft(totalSeconds) + ' left';
    }, 1000);
}

function searchTable() {
    const searchInput = document.getElementById('searchInput').value.toLowerCase();
    const filteredData = data.filter(item => 
        item.d_name.toLowerCase().includes(searchInput) ||
        item.domainPrice.toLowerCase().includes(searchInput) ||
        item.d_age.toLowerCase().includes(searchInput) ||
        item.d_estimated_value.toLowerCase().includes(searchInput) ||
        item.time_left.toLowerCase().includes(searchInput)
    );
    loadTableData(filteredData);
}

loadTableData(data);
</script>



       

<?php
	 include "footer.php";
?>