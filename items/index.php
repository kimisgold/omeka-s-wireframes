<?php $bodyClass = "items browse"; ?>
<?php include('../header.php'); ?>

<h1>Items</h1>

<ul class="messages">
    <li class="error">This is what an error message looks like.</li>
    <li class="success">This is what a success message looks like.</li>
    <li class="warning">This is what a warning message looks like.</li>
</ul>

<div id="page-actions">
    <a href="add" class="button">Add new item</a>
</div>

<?php include('../common/pagination.php'); ?>

<div class="mobile-container">
    <table id="items-list">
        <thead>
            <tr>
                <th><input type="checkbox" id="select-all"><label class="screen-reader-text" for="select-all">Select all</label></th>
                <th><a href="#" class="sortable">Title <span class="screen-reader-text">(Sort by name)</span></a></th>
                <th><a href="#" class="sortable">Class <span class="screen-reader-text">(Sort by type)</span></a></th>
                <th><a href="#" class="sorted-asc">Date Added <span class="screen-reader-text">(Switch to descending order)</span></a></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="checkbox" id="row-1"><label class="screen-reader-text" for="row-1">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">Rocket Row</a></span>
                    <ul class="actions">
                        <li><a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                        <li><a href="#" class="o-icon-more"><span class="screen-reader-text">Details</span></a></li>
                        <li><a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a></li>
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
                        <li><a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                        <li><a href="#" class="o-icon-more"><span class="screen-reader-text">Details</span></a></li>
                        <li><a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a></li>
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
                        <li><a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                        <li><a href="#" class="o-icon-more"><span class="screen-reader-text">Details</span></a></li>
                        <li><a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a></li>
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
                        <li><a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                        <li><a href="#" class="o-icon-more"><span class="screen-reader-text">Details</span></a></li>
                        <li><a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a></li>
                    </ul>
                </td>
                <td>Place</td>
                <td>Mar 28, 2014</td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-5"><label class="screen-reader-text" for="row-5">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">Early Cherry Blossom Festival</a></span>
                    <ul class="actions">
                        <li><a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                        <li><a href="#" class="o-icon-more"><span class="screen-reader-text">Details</span></a></li>
                        <li><a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a></li>
                    </ul>
                </td>
                <td>Event</td>
                <td>Mar 28, 2014</td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-6"><label class="screen-reader-text" for="row-6">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">Discovery of America</a></span>
                    <ul class="actions">
                        <li><a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                        <li><a href="#" class="o-icon-more"><span class="screen-reader-text">Details</span></a></li>
                        <li><a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a></li>
                    </ul>
                </td>
                <td>Place</td>
                <td>Mar 28, 2014</td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-7"><label class="screen-reader-text" for="row-7">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">American Colonization Society Hall</a></span>
                    <ul class="actions">
                        <li><a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                        <li><a href="#" class="o-icon-more"><span class="screen-reader-text">Details</span></a></li>
                        <li><a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a></li>
                    </ul>
                </td>
                <td>Place</td>
                <td>Mar 28, 2014</td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-8"><label class="screen-reader-text" for="row-8">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">Federal Government Building</a></span>
                    <ul class="actions">
                        <li><a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                        <li><a href="#" class="o-icon-more"><span class="screen-reader-text">Details</span></a></li>
                        <li><a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a></li>
                    </ul>
                </td>
                <td>Event</td>
                <td>Mar 28, 2014</td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-9"><label class="screen-reader-text" for="row-9">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">United States Slave Trade</a></span>
                    <ul class="actions">
                        <li><a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                        <li><a href="#" class="o-icon-more"><span class="screen-reader-text">Details</span></a></li>
                        <li><a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a></li>
                    </ul>
                </td>
                <td>Still Image</td>
                <td>Mar 28, 2014</td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-10"><label class="screen-reader-text" for="row-10">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">Essay on the City of Washington</a></span>
                    <ul class="actions">
                        <li><a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                        <li><a href="#" class="o-icon-more"><span class="screen-reader-text">Details</span></a></li>
                        <li><a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a></li>
                    </ul>
                </td>
                <td>Document</td>
                <td>Mar 28, 2014</td>
            </tr>
        </tbody>
    </table>
    <div class="sidebar">
        <a href="#" class="sidebar-close o-icon-close" aria-label="Close details panel" title="Close"></a>
         <div id="more">
            <h2>Rocket Row</h2>
            <h3>Description</h3>
            <p>Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nulla vitae elit libero, a pharetra augue.</p>
            <h3>Creator</h3>
            <p>admin</p>
            <h3>Coverage</h3>
            <p>1800-1875</p>
            <h3>Subject</h3>
            <p>Place</p>
        </div>
        <div id="delete">
            <h2>Delete record</h2>
            <p>Are you sure you would like to delete this record?</p>
            <button>Throw it in the garbage</button>
        </div>
    </div>
</div>

<?php include('../footer.php'); ?>