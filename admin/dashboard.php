<?php
include("../config/db.php");
session_start();

if ($_SESSION['role'] != 'admin') header("Location: ../auth/login.php");

$res = mysqli_query($conn,
    "SELECT applications.*, users.name FROM applications
     JOIN users ON applications.user_id = users.id"
);
?>
<link rel="stylesheet" href="../assets/style.css">

<div class="container">
<h2>Admin Dashboard</h2>

<table>
<tr>
<th>User</th><th>Subject</th><th>Status</th><th>Date</th><th>Action</th>
</tr>

<?php while($r=mysqli_fetch_assoc($res)) { ?>
<tr>
<td><?= $r['name'] ?></td>
<td><?= $r['subject'] ?></td>
<td class="status-<?= $r['status'] ?>"><?= $r['status'] ?></td>
<td><?= $r['created_at'] ?></td>
<td>
<a class="action-approve" href="update_status.php?id=<?= $r['id'] ?>&s=Approved">Approve</a> |
<a class="action-reject" href="update_status.php?id=<?= $r['id'] ?>&s=Rejected">Reject</a>
</td>
</tr>
<?php } ?>

</table>
<a href="../auth/logout.php">Logout</a>
</div>
