<?php $bodyClass = "items browse"; ?>
<?php include('../header.php'); ?>

<h1>Items</h1>

<a href="add" class="add button">Add new item</a>
<a href="batch-edit" class="batch-edit button">Edit selected items</a>

<nav class="pagination" role="navigation">
    <form>
        <input type="text" name="page-input-top" id="page-input-top" value="1" size="4">
        <span class="page-count">of 3</span>
    </form>
    <a href="#" class="first icon-double-arrow-left button"><span class="screen-reader-text">Previous</span></a>
    <a href="#" class="previous icon-arrow-left button"><span class="screen-reader-text">Previous</span></a>
    <a href="#" class="next icon-arrow-right button"><span class="screen-reader-text">Next</span></a>
    <a href="#" class="last icon-double-arrow-right button"><span class="screen-reader-text">Previous</span></a>
</nav>

<table id="items-list">
    <thead>
        <tr>
            <th><input type="checkbox" id="select-all"><label class="screen-reader-text" for="select-all">Select all</label></th>
            <th>Title <a href="#" class="icon-sortable"><span class="screen-reader-text">Sort by name</span></a></th>
            <th>Class <a href="#" class="icon-sortable"><span class="screen-reader-text">Sort by type</span></a></th>
            <th>Date Added <a href="#" class="icon-arrow-up"><span class="screen-reader-text">Sort by date added (descending)</span></a></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="checkbox" id="row-1"><label class="screen-reader-text" for="row-1">Select row</label></td>
            <td>
                <span class="record-name"><a href="#">Rocket Row</a></span>
                <ul class="actions">
                    <li><a href="#" class="icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="icon-ellipsis"><span class="screen-reader-text">Details</span></a></li>
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
                    <li><a href="#" class="icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="icon-ellipsis"><span class="screen-reader-text">Details</span></a></li>
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
                    <li><a href="#" class="icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="icon-ellipsis"><span class="screen-reader-text">Details</span></a></li>
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
                    <li><a href="#" class="icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="icon-ellipsis"><span class="screen-reader-text">Details</span></a></li>
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
                    <li><a href="#" class="icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="icon-ellipsis"><span class="screen-reader-text">Details</span></a></li>
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
                    <li><a href="#" class="icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="icon-ellipsis"><span class="screen-reader-text">Details</span></a></li>
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
                    <li><a href="#" class="icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="icon-ellipsis"><span class="screen-reader-text">Details</span></a></li>
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
                    <li><a href="#" class="icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="icon-ellipsis"><span class="screen-reader-text">Details</span></a></li>
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
                    <li><a href="#" class="icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="icon-ellipsis"><span class="screen-reader-text">Details</span></a></li>
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
                    <li><a href="#" class="icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="icon-ellipsis"><span class="screen-reader-text">Details</span></a></li>
                </ul>
            </td>
            <td>Document</td>
            <td>Mar 28, 2014</td>
        </tr>
    </tbody>
</table>

<?php include('../footer.php'); ?>