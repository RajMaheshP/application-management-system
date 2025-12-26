<?php
include("../config/db.php");
session_start();

$res = mysqli_query($conn,
    "SELECT * FROM applications WHERE user_id='{$_SESSION['user_id']}'"
);
?>
<link rel="stylesheet" href="../assets/style.css">

<div class="container">
<h2>My Applications</h2>

<table>
<tr><th>Subject</th><th>Status</th><th>Date</th></tr>

<?php while($r=mysqli_fetch_assoc($res)) { ?>
<tr>
<td><?= $r['subject'] ?></td>
<td class="status-<?= $r['status'] ?>"><?= $r['status'] ?></td>
<td><?= $r['created_at'] ?></td>
</tr>
<?php } ?>

</table>
<a href="dashboard.php">Back</a>
</div>
