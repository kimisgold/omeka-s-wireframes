<?php $bodyClass = "browse item-set"; ?>
<?php include('../header.php'); ?>

<h1>Item Sets</h1>

<div id="page-actions">
    <a href="add" class="button">Add Item Set</a>
</div>

<?php include('../common/pagination.php'); ?>

<div class="mobile-container">
    <table>
        <thead>
            <tr>
                <th><input type="checkbox" id="select-all"><label class="screen-reader-text" for="select-all">Select all</label></th>
                <th><a href="#" class="sorted-asc" title="Sort by name">Name</a></th>
                <th><a href="#" class="sortable" title="Sort by number of items">Items</a></th>
                <th><a href="#" class="sortable" title="Sorted by owner, ascending">Owner</a></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="checkbox" id="row-1"><label class="screen-reader-text" for="row-1">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">Histories of the National Mall</a></span>
                    <div class="actions">
                        <a href="#" class="o-icon-more"><span class="screen-reader-text">More Details</span></a>
                        <a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a>
                        <a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a>
                    </div>
                </td>
                <td><a href="#">124</a></td>
                <td><a href="#">admin</a></td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-2"><label class="screen-reader-text" for="row-2">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">War of 1812</a></span>
                    <div class="actions">
                        <a href="#" class="o-icon-more"><span class="screen-reader-text">More Details</span></a>
                        <a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a>
                        <a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a>
                    </div>
                </td>
                <td><a href="#">125</a></td>
                <td><a href="#">admin</a></td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-3"><label class="screen-reader-text" for="row-3">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">Civil Rights</a></span>
                    <div class="actions">
                        <a href="#" class="o-icon-more"><span class="screen-reader-text">More Details</span></a>
                        <a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a>
                        <a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a>
                    </div>
                </td>
                <td><a href="#">543</a></td>
                <td><a href="#">admin</a></td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-4"><label class="screen-reader-text" for="row-4">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">Popular Romance</a></span>
                    <div class="actions">
                        <a href="#" class="o-icon-more"><span class="screen-reader-text">More Details</span></a>
                        <a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a>
                        <a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a>
                    </div>
                </td>
                <td><a href="#">215</a></td>
                <td><a href="#">admin</a></td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-5"><label class="screen-reader-text" for="row-5">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">Gulag</a></span>
                    <div class="actions">
                        <a href="#" class="o-icon-more"><span class="screen-reader-text">More Details</span></a>
                        <a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a>
                        <a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a>
                    </div>
                </td>
                <td><a href="#">123</a></td>
                <td><a href="#">sherah1918</a></td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-6"><label class="screen-reader-text" for="row-6">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">Muslim Journeys</a></span>
                    <div class="actions">
                        <a href="#" class="o-icon-more"><span class="screen-reader-text">More Details</span></a>
                        <a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a>
                        <a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a>
                    </div>
                </td>
                <td><a href="#">125</a></td>
                <td><a href="#">admin</a></td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-7"><label class="screen-reader-text" for="row-7">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">Presidents</a></span>
                    <div class="actions">
                        <a href="#" class="o-icon-more"><span class="screen-reader-text">More Details</span></a>
                        <a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a>
                        <a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a>
                    </div>
                </td>
                <td><a href="#">432</a></td>
                <td><a href="#">admin</a></td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-8"><label class="screen-reader-text" for="row-8">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">Teaching History</a></span>
                    <div class="actions">
                        <a href="#" class="o-icon-more"><span class="screen-reader-text">More Details</span></a>
                        <a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a>
                        <a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a>
                    </div>
                </td>
                <td><a href="#">12</a></td>
                <td><a href="#">admin</a></td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-9"><label class="screen-reader-text" for="row-9">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">Smithsonian</a></span>
                    <div class="actions">
                        <a href="#" class="o-icon-more"><span class="screen-reader-text">More Details</span></a>
                        <a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a>
                        <a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a>
                    </div>
                </td>
                <td><a href="#">153</a></td>
                <td><a href="#">zerocrates</a></td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-10"><label class="screen-reader-text" for="row-10">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">Cooper Hewitt Collection</a></span>
                    <div class="actions">
                        <a href="#" class="o-icon-more"><span class="screen-reader-text">More Details</span></a>
                        <a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a>
                        <a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a>
                    </div>
                </td>
                <td><a href="#">125</a></td>
                <td><a href="#">admin</a></td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-11"><label class="screen-reader-text" for="row-11">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">Portraiture</a></span>
                    <div class="actions">
                        <a href="#" class="o-icon-more"><span class="screen-reader-text">More Details</span></a>
                        <a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a>
                        <a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a>
                    </div>
                </td>
                <td><a href="#">325</a></td>
                <td><a href="#">admin</a></td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-12"><label class="screen-reader-text" for="row-12">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">Space Race</a></span>
                    <div class="actions">
                        <a href="#" class="o-icon-more"><span class="screen-reader-text">More Details</span></a>
                        <a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a>
                        <a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a>
                    </div>
                </td>
                <td><a href="#">51</a></td>
                <td><a href="#">admin</a></td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-13"><label class="screen-reader-text" for="row-13">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">Martha Washington: A Life</a></span>
                    <div class="actions">
                        <a href="#" class="o-icon-more"><span class="screen-reader-text">More Details</span></a>
                        <a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a>
                        <a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a>
                    </div>
                </td>
                <td><a href="#">234</a></td>
                <td><a href="#">admin</a></td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-14"><label class="screen-reader-text" for="row-14">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">Bracero History ArchiveH</a></span>
                    <div class="actions">
                        <a href="#" class="o-icon-more"><span class="screen-reader-text">More Details</span></a>
                        <a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a>
                        <a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a>
                    </div>
                </td>
                <td><a href="#">25</a></td>
                <td><a href="#">admin</a></td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-15"><label class="screen-reader-text" for="row-16">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">Hurricane Digital Memory Bank</a></span>
                    <div class="actions">
                        <a href="#" class="o-icon-more"><span class="screen-reader-text">More Details</span></a>
                        <a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a>
                        <a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a>
                    </div>
                </td>
                <td><a href="#">14</a></td>
                <td><a href="#">admin</a></td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-17"><label class="screen-reader-text" for="row-18">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">Probing the Past: Virginia and Maryland Probate Inventories</a></span>
                    <div class="actions">
                        <a href="#" class="o-icon-more"><span class="screen-reader-text">More Details</span></a>
                        <a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a>
                        <a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a>
                    </div>
                </td>
                <td><a href="#">1534</a></td>
                <td><a href="#">admin</a></td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-19"><label class="screen-reader-text" for="row-19">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">Object of History</a></span>
                    <div class="actions">
                        <a href="#" class="o-icon-more"><span class="screen-reader-text">More Details</span></a>
                        <a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a>
                        <a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a>
                    </div>
                </td>
                <td><a href="#">123</a></td>
                <td><a href="#">admin</a></td>
            </tr>
            <tr>
                <td><input type="checkbox" id="row-20"><label class="screen-reader-text" for="row-20">Select row</label></td>
                <td>
                    <span class="record-name"><a href="#">Critical Infrastructure Protection Oral History Project</a></span>
                    <div class="actions">
                        <a href="#" class="o-icon-more"><span class="screen-reader-text">More Details</span></a>
                        <a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a>
                        <a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a>
                    </div>
                </td>
                <td><a href="#">151</a></td>
                <td><a href="#">admin</a></td>
            </tr>
        </tbody>
    </table>
</div>

  <div class="overlay"></div>
  
  <div class="modal"></div>

<?php include('../footer.php'); ?>