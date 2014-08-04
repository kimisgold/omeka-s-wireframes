<?php $bodyClass = "users browse"; ?>
<?php include('../header.php'); ?>

<h1>Users</h1>

<a href="add" class="button">Add new user</a>

<table id="items-list">
    <thead>
        <tr>
            <th><input type="checkbox" id="select-all"><label class="screen-reader-text" for="select-all">Select all</label></th>
            <th>Name</th>
            <th>Date Added</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="checkbox" id="row-1" checked="checked"><label class="screen-reader-text" for="row-1">Select row</label></td>
            <td>
                <span class="record-name"><a href="#">admin (Kim Nguyen)</a></span>
                <ul class="actions">
                    <li><a href="#" class="fa-pencil"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="fa-eye"><span class="screen-reader-text">View</span></a></li>
                    <li><a href="#" class="fa-ellipsis-h"><span class="screen-reader-text">Details</span></a></li>
                </ul>
            </td>
            <td>Mar 28, 2014</td>
        </tr>
        <tr>
            <td><input type="checkbox" id="row-2"><label class="screen-reader-text" for="row-2">Select row</label></td>
            <td>
                <span class="record-name"><a href="#">sherah1914 (Sheila Brennan)</a></span>
                <ul class="actions">
                    <li><a href="#" class="fa-pencil"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="fa-eye"><span class="screen-reader-text">View</span></a></li>
                    <li><a href="#" class="fa-ellipsis-h"><span class="screen-reader-text">Details</span></a></li>
                </ul>
            </td>
            <td>Mar 28, 2014</td>
        </tr>
        <tr>
            <td><input type="checkbox" id="row-3"><label class="screen-reader-text" for="row-3">Select row</label></td>
            <td>
                <span class="record-name"><a href="#">zerocrates (John Flatness)</a></span>
                <ul class="actions">
                    <li><a href="#" class="fa-pencil"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="fa-eye"><span class="screen-reader-text">View</span></a></li>
                    <li><a href="#" class="fa-ellipsis-h"><span class="screen-reader-text">Details</span></a></li>
                </ul>
            </td>
            <td>Mar 28, 2014</td>
        </tr>
    </tbody>
</table>

<?php include('../footer.php'); ?>