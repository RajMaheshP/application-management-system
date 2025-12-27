<h1 align="center">📄 Application Management System</h1>



<p align="center">

A secure <b>PHP \& MySQL-based web application</b> that allows users to submit applications and enables administrators to review, approve, or reject them through a role-based admin dashboard.

</p>



<hr>



<h2>🚀 Features</h2>



<h3>👤 User Module</h3>

<ul>

&nbsp; <li>User registration with unique email validation</li>

&nbsp; <li>Secure login \& logout using PHP sessions</li>

&nbsp; <li>Submit applications with subject and message</li>

&nbsp; <li>Track application status (Pending / Approved / Rejected)</li>

</ul>



<h3>🛡️ Admin Module</h3>

<ul>

&nbsp; <li>Admin authentication with role-based access</li>

&nbsp; <li>View all user applications in one dashboard</li>

&nbsp; <li>Approve or reject applications</li>

&nbsp; <li>Real-time status updates reflected for users</li>

</ul>



<hr>



<h2>🔐 Security Highlights</h2>

<ul>

&nbsp; <li>Password hashing using <code>password\_hash()</code></li>

&nbsp; <li>Session-based authentication</li>

&nbsp; <li>Role-based authorization</li>

&nbsp; <li>Database-level unique constraints</li>

</ul>



<hr>



<h2>🧰 Tech Stack</h2>

<ul>

&nbsp; <li><b>Frontend:</b> HTML, CSS</li>

&nbsp; <li><b>Backend:</b> PHP</li>

&nbsp; <li><b>Database:</b> MySQL</li>

&nbsp; <li><b>Server:</b> Apache (XAMPP)</li>

</ul>



<hr>



<h2>⚙️ Setup Instructions</h2>

<ol>

&nbsp; <li>Install XAMPP and start Apache \& MySQL</li>

&nbsp; <li>Clone the repository:</li>

</ol>



<pre>

git clone https://github.com/RajMaheshP/application-management-system.git

</pre>



<ol start="3">

&nbsp; <li>Move the project into <code>C:\\xampp\\htdocs\\</code></li>

&nbsp; <li>Create a MySQL database (e.g., <code>app\_system</code>)</li>

&nbsp; <li>Import the SQL tables</li>

&nbsp; <li>Update DB credentials in <code>config/db.php</code></li>

&nbsp; <li>Open in browser:</li>

</ol>



<pre>

http://localhost/application-management-system/

</pre>



<hr>



<h2>📂 Project Structure</h2>



<pre>

app-management/

│── admin/

│── auth/

│── user/

│── config/

│── assets/

│── index.php

│── README.md

</pre>



<hr>



<h2>📜 License</h2>

<p>This project is licensed under the <b>MIT License</b>.</p>



<hr>



<h2>👨‍💻 Author</h2>

<p>

<b>Raj Mahesh Padarthi</b><br>

Computer Science (AI) Student<br>

Passionate about Web Development \& AI

</p>



