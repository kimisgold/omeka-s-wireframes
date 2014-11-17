<?php $bodyClass = "vocabs browse"; ?>
<?php include('../header.php'); ?>

<h1>Vocabularies</h1>

<div id="page-actions">
    <a href="import" class="button">Import new vocabulary</a>
</div>

<nav class="section-nav">
    <ul>
        <li><a href="../vocabularies/index" class="active">Vocabularies</a></li>
        <li><a href="../vocabularies/browse-templates">Resource Templates</a></li>
    </ul>
</nav>

<table id="vocabs-list">
    <thead>
        <tr>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <span class="record-name"><a href="#">Omeka Custom</a></span>
                <ul class="actions">
                    <li><a href="#" class="icon-add"><span class="screen-reader-text">Add new class</span></a></li>
                    <li><a href="#" class="icon-view"><span class="screen-reader-text">View vocabulary</span></a></li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <span class="record-name"><a href="#">Dublin Core</a></span>
                <ul class="actions">
                    <li><a href="#" class="icon-add"><span class="screen-reader-text">Add new class</span></a></li>
                    <li><a href="#" class="icon-view"><span class="screen-reader-text">View vocabulary</span></a></li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <span class="record-name"><a href="show">FOAF</a></span>
                <ul class="actions">
                    <li><a href="#" class="icon-add"><span class="screen-reader-text">Add new class</span></a></li>
                    <li><a href="#" class="icon-view"><span class="screen-reader-text">View vocabulary</span></a></li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <span class="record-name"><a href="#">Thesaurus for Graphic Materials (TGM) 1: Subject Terms</a></span>
                <ul class="actions">
                    <li><a href="#" class="icon-add"><span class="screen-reader-text">Add new class</span></a></li>
                    <li><a href="#" class="icon-view"><span class="screen-reader-text">View vocabulary</span></a></li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <span class="record-name"><a href="#">Thesaurus for Graphic Materials (TGM) 2: Genre and Physical Characteristics</a></span>
                <ul class="actions">
                    <li><a href="#" class="icon-add"><span class="screen-reader-text">Add new class</span></a></li>
                    <li><a href="#" class="icon-view"><span class="screen-reader-text">View vocabulary</span></a></li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <span class="record-name"><a href="#">Art and Architecture Thesaurus (AAT)</a></span>
                <ul class="actions">
                    <li><a href="#" class="icon-add"><span class="screen-reader-text">Add new class</span></a></li>
                    <li><a href="#" class="icon-view"><span class="screen-reader-text">View vocabulary</span></a></li>
                </ul>
            </td>
        </tr>
    </tbody>
</table>



<?php include('../footer.php'); ?>