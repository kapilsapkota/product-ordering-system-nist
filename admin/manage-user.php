<?php include('common/header.php') ?>
     <!-- Body Section Starts -->
     <section class="content">
        <div class="wrapper">
            <h1 class="heading">MANAGE USER</h1>
            <br>
            <?php include('config/session.php') ?>
            <br>
                <a class="btn btn-secondary user-add" href="add-user.php">Add User</a>
            <br>

            <!-- Users Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>FullName</th>
                        <th>UserName</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ashish Timalsina</td>
                        <td>aashis</td>
                        <td>P@$$w0rd</td>
                        <td>
                            <a class="btn btn-primary" href="#">
                                Edit User
                            </a>
                            <a class="btn btn-danger" href="#">
                                Delete User
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- Users Table End -->
        </div>
    </section>
    <!-- Body Section Ends -->
<?php include('common/footer.php') ?>