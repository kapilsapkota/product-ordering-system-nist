<?php include('common/header.php') ?>
     <!-- Body Section Starts -->
     <section class="content">
        <div class="wrapper">
            <strong class="heading">MANAGE USER</strong>


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
                            <button class="btn btn-primary">
                                Edit User
                            </button>
                            <button class="btn btn-secondary">
                                Delete User
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- Users Table End -->
        </div>
    </section>
    <!-- Body Section Ends -->
<?php include('common/footer.php') ?>