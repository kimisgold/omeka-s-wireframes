<?php $bodyClass = "items browse"; ?>
<?php $js = '<script src="../javascript/jquery.modal.min.js"></script>' ?>
<?php include('../header.php'); ?>

<h1>Items</h1>

<?php include('../common/pagination.php'); ?>

<div id="page-actions">
    <a href="add" class="button">Add new item</a>
</div>

<a href="batch-edit" class="batch-edit button">Batch edit selected</a>

<table id="items-list">
    <thead>
        <tr>
            <th><input type="checkbox" id="select-all"><label class="screen-reader-text" for="select-all">Select all</label></th>
            <th>Title <a href="#" class="fa-caret-down"><span class="screen-reader-text">Sort by name</span></a></th>
            <th>Class <a href="#" class="fa-caret-down"><span class="screen-reader-text">Sort by type</span></a></th>
            <th>Date Added <a href="#" class="fa-caret-up"><span class="screen-reader-text">Sort by date added (descending)</span></a></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="checkbox" id="row-1"><label class="screen-reader-text" for="row-1">Select row</label></td>
            <td>
                <span class="record-name"><a href="#">Rocket Row</a></span>
                <ul class="actions">
                    <li><a href="#" class="fa-pencil"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="fa-ellipsis-h"><span class="screen-reader-text">Details</span></a></li>
                    <li><a href="#" class="fa-trash-o"><span class="screen-reader-text">Delete</span></a></li>
                </ul>
            </td>
            <td>Place</td>
            <td>Mar 28, 2014</td>
        </tr>
        <tr>
            <td><input type="checkbox" id="row-2"><label class="screen-reader-text" for="row-2">Select row</label></td>
            <td>
                <span class="record-name"><a href="#">Tennis Courts in the South Yard</a></span>
                <ul class="actions">
                    <li><a href="#" class="fa-pencil"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="fa-ellipsis-h"><span class="screen-reader-text">Details</span></a></li>
                    <li><a href="#" class="fa-trash-o"><span class="screen-reader-text">Delete</span></a></li>
                </ul>
            </td>
            <td>Place</td>
            <td>Mar 28, 2014</td>
        </tr>
        <tr>
            <td><input type="checkbox" id="row-3"><label class="screen-reader-text" for="row-3">Select row</label></td>
            <td>
                <span class="record-name"><a href="#">Smithsonian South Shed</a></span>
                <ul class="actions">
                    <li><a href="#" class="fa-pencil"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="fa-ellipsis-h"><span class="screen-reader-text">Details</span></a></li>
                    <li><a href="#" class="fa-trash-o"><span class="screen-reader-text">Delete</span></a></li>
                </ul>
            </td>
            <td>Place</td>
            <td>Mar 28, 2014</td>
        </tr>
        <tr>
            <td><input type="checkbox" id="row-4"><label class="screen-reader-text" for="row-4">Select row</label></td>
            <td>
                <span class="record-name"><a href="#">Japanese Lantern</a></span>
                <ul class="actions">
                    <li><a href="#" class="fa-pencil"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="fa-ellipsis-h"><span class="screen-reader-text">Details</span></a></li>
                    <li><a href="#" class="fa-trash-o"><span class="screen-reader-text">Delete</span></a></li>
                </ul>
            </td>
            <td>Place</td>
            <td>Mar 28, 2014</td>
        </tr>
        <tr>
            <td><input type="checkbox" id="row-5"><label class="screen-reader-text" for="row-6">Select row</label></td>
            <td>
                <span class="record-name"><a href="#">Early Cherry Blossom Festival</a></span>
                <ul class="actions">
                    <li><a href="#" class="fa-pencil"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="fa-ellipsis-h"><span class="screen-reader-text">Details</span></a></li>
                    <li><a href="#" class="fa-trash-o"><span class="screen-reader-text">Delete</span></a></li>
                </ul>
            </td>
            <td>Event</td>
            <td>Mar 28, 2014</td>
        </tr>
        <tr>
            <td><input type="checkbox" id="row-7"><label class="screen-reader-text" for="row-7">Select row</label></td>
            <td>
                <span class="record-name"><a href="#">Discovery of America</a></span>
                <ul class="actions">
                    <li><a href="#" class="fa-pencil"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="fa-ellipsis-h"><span class="screen-reader-text">Details</span></a></li>
                    <li><a href="#" class="fa-trash-o"><span class="screen-reader-text">Delete</span></a></li>
                </ul>
            </td>
            <td>Place</td>
            <td>Mar 28, 2014</td>
        </tr>
        <tr>
            <td><input type="checkbox" id="row-8"><label class="screen-reader-text" for="row-9">Select row</label></td>
            <td>
                <span class="record-name"><a href="#">American Colonization Society Hall</a></span>
                <ul class="actions">
                    <li><a href="#" class="fa-pencil"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="fa-ellipsis-h"><span class="screen-reader-text">Details</span></a></li>
                    <li><a href="#" class="fa-trash-o"><span class="screen-reader-text">Delete</span></a></li>
                </ul>
            </td>
            <td>Place</td>
            <td>Mar 28, 2014</td>
        </tr>
        <tr>
            <td><input type="checkbox" id="row-9"><label class="screen-reader-text" for="row-9">Select row</label></td>
            <td>
                <span class="record-name"><a href="#">Federal Government Building</a></span>
                <ul class="actions">
                    <li><a href="#" class="fa-pencil"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="fa-ellipsis-h"><span class="screen-reader-text">Details</span></a></li>
                    <li><a href="#" class="fa-trash-o"><span class="screen-reader-text">Delete</span></a></li>
                </ul>
            </td>
            <td>Event</td>
            <td>Mar 28, 2014</td>
        </tr>
        <tr>
            <td><input type="checkbox" id="row-10"><label class="screen-reader-text" for="row-10">Select row</label></td>
            <td>
                <span class="record-name"><a href="#">United States Slave Trade</a></span>
                <ul class="actions">
                    <li><a href="#" class="fa-pencil"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="fa-ellipsis-h"><span class="screen-reader-text">Details</span></a></li>
                    <li><a href="#" class="fa-trash-o"><span class="screen-reader-text">Delete</span></a></li>
                </ul>
            </td>
            <td>Still Image</td>
            <td>Mar 28, 2014</td>
        </tr>
        <tr>
            <td><input type="checkbox" id="row-11"><label class="screen-reader-text" for="row-11">Select row</label></td>
            <td>
                <span class="record-name"><a href="#">Essay on the City of Washington</a></span>
                <ul class="actions">
                    <li><a href="#" class="fa-pencil"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="fa-ellipsis-h"><span class="screen-reader-text">Details</span></a></li>
                    <li><a href="#" class="fa-trash-o"><span class="screen-reader-text">Delete</span></a></li>
                </ul>
            </td>
            <td>Document</td>
            <td>Mar 28, 2014</td>
        </tr>
    </tbody>
</table>

<div class="overlay"></div>

<div class="modal">
    <div class="modal-header">
        <a href="#" class="closeBtn fa-times"><span class="screen-reader-text">Close Me</span></a>
        <h1></h1>
    </div>
    <div class="modal-content">
    </div>
</div>

<?php include('../footer.php'); ?>