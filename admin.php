
<?php require('functions/https.php');
require('functions/auth.php');
require('functions/db.php');

$res = pg_query($db, 'SELECT * FROM registrations;');
if ($res == false)
    die(pg_last_error());

$regs = pg_fetch_all($res);

$num_total = $regs ? sizeof($regs) : '0';
$num_privates = pg_query($db, 'SELECT * FROM registrations WHERE cabin_type=\'private\';');
$num_privates = pg_num_rows($num_privates);
      
?>

<!doctype html>

<html lang="en">
  <head>
    <?php include('partials/head_content.php'); ?>
  </head>

  <body>
    <div class="content">
      <h2 class="content-head is-center">Registered people</h2>
      <ul class="l-pad">
	<li>There are 75 cabins reserved (50 private and 25 shared for 2 persons). The cabin type can be freely changed from private to shared according to registrations.</li>
	<li>Cancellations of the cabins must be done 28 days before departure, i.e. before 18.4. They however hope that these would be done as soon as possible.</li>
      </ul>
      
      <p>
	There are currently <?php echo $num_total; ?> registered (<?php echo $num_privates;?> private, <?php echo $num_total - $num_privates; ?> shared). This requires at least <?php echo $num_privates + ceil(($num_total-$num_privates)/2); ?> cabins (75 reserved).
      </p>
    

    <table class="pure-table pure-table-bordered">
    <thead>
    <tr>
    <th>Id</th>
    <th>Registered at</th>
    <th>Name</th>
    <th>Affiliation</th>
    <th>Email</th>
    <th>Order number</th>
    <th>Cabin type</th>
    <th>Share cabin with</th>
    <th>Birthdate</th>
    <th>Nationality</th>
    <th>Gender</th>
   
    <!--<th>Poster</th>
    <th>Title</th>
    <th>Abstract</th>-->
    </tr>
    </thead>
    
    <tbody>
    <?php

    
    
    foreach ($regs as $index => $reg) {
        $dt = new DateTime($reg['created_at'], new DateTimeZone('UTC'));
        $dt->setTimezone(new DateTimeZone('Europe/Helsinki'));
        $created_at = $dt->format('d M y, H:i');
        echo "<tr>";
        echo "<td>${reg['id']}</td>";
        echo "<td>${created_at}</td>";
        echo "<td>${reg['firstname']} ${reg['lastname']}</td>";
        echo "<td>${reg['affiliation']}</td>";
        echo "<td>${reg['email']}</td>";
        echo "<td>${reg['order_number']}</td>";
        echo "<td>${reg['cabin_type']}</td>";
        echo "<td>${reg['share_with']}</td>";
        echo "<td>${reg['dob']}</td>";
        echo "<td>${reg['country']}</td>";
        echo "<td>${reg['gender']}</td>";

	#echo $reg['poster_choice'] ? "<td>Yes</td>" : "<td>No</td>";
        #echo "<td>${reg['presentation_title']}</td>";
        #echo "<td>${reg['presentation_text']}</td>";
        echo "</tr>";
    }

    ?>
    </tbody>
    </table>

  </div>


  </body>
</html>
