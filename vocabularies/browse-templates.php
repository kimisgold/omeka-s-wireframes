<?php $bodyClass = "vocabs browse"; ?>
<?php include('../header.php'); ?>

<h1>Resource Templates</h1>

<div id="page-actions">
    <a href="../vocabularies/edit-template" class="button">Add new resource template</a>
</div>

<nav class="section-nav">
    <ul>
        <li><a href="../vocabularies/index.php">Vocabularies</a></li>
        <li><a href="../vocabularies/browse-templates.php" class="active">Resource Templates</a></li>
    </ul>
</nav>

<table id="template-list">
    <thead>
        <tr>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <span class="record-name"><a href="#">Artist</a></span>
                <ul class="actions">
                    <li><a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a></li>
                    <li><a href="#" class="icon-view"><span class="screen-reader-text">View vocabulary</span></a></li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <span class="record-name"><a href="#">Album</a></span>
                <ul class="actions">
                    <li><a href="#" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                    <li><a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a></li>
                    <li><a href="#" class="icon-view"><span class="screen-reader-text">View vocabulary</span></a></li>
                </ul>
            </td>
        </tr>
    </tbody>
</table>



<?php include('../footer.php'); ?>