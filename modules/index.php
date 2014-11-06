<?php $bodyClass = 'modules browse'; ?>
<?php $js = '<script src="../javascript/jquery.modal.min.js"></script>' ?>
<?php include('../header.php'); ?>

<h1>Modules</h1>

<div id="page-actions">
    <a href="#" class="external button">Add new module</a>
</div>

<select class="filters">
    <option value="all">All</option>
    <option value="installed">Installed</option>
    <option value="uninstalled">Uninstalled</option>
    <option value="deactivated">Deactivated</option>
    <option value="active">Active</option>
    <option value="needs-upgrade">Needs Upgrade</option>
</select>

<div class="mobile-container">
    <table id="modules">
        <thead>
            <th><input type="checkbox" id="select-all"><label class="screen-reader-text" for="select-all">Select all</label></th>
            <th><a href="#" class="sorted-asc" title="Sort by date added (descending)">Name</a></th>
        </thead>
        <tbody>
            <tr class="uninstalled">
                <td><input type="checkbox" id="row-1"><label class="screen-reader-text" for="row-1">Select row</label></td>
                <td>
                    <ul class="actions">
                        <li><a href="#" class="o-icon-more" title="More details" aria-label="More details"></a></li>
                        <li><a href="#" class="o-icon-install" title="Install" aria-label="Install module"></a></li>
                    </ul>
                    <a href="#">Add Item</a> version 1.0 
                    <span class="author">by Lincoln A. Mullen</span>
                </td>
            </tr>
            <tr class="uninstalled">
                <td><input type="checkbox" id="row-2"><label class="screen-reader-text" for="row-2">Select row</label></td>
                <td>
                    <ul class="actions">
                        <li><a href="#" class="o-icon-more" title="More details" aria-label="More details"></a></li>
                        <li><a href="#" class="o-icon-install" title="Uninstall" aria-label="Uninstall module"></a></li>
                    </ul>
                    <a href="#">Atom Output</a> version 2.0 
                    <span class="author">by Roy Rosenzweig Center for History and New Media</span>
                </td>
            </tr>
            <tr class="deactivated installed">
                <td><input type="checkbox" id="row-3"><label class="screen-reader-text" for="row-3">Select row</label></td>
                <td>
                    <ul class="actions">
                        <li><a href="#" class="o-icon-more" title="More details" aria-label="More details"></a></li>
                        <li><a href="#" class="o-icon-activate" title="Activate" aria-label="Activate module"></a></li>
                        <li><a href="#" class="o-icon-uninstall" title="Uninstall" aria-label="Unnstall module"></a></li>
                    </ul>
                    <a href="#">BagIt</a> version 3.0 
                    <span class="author">by Scholars' Lab</span>
                </td>
            </tr>
            <tr class="uninstalled">
                <td><input type="checkbox" id="row-4"><label class="screen-reader-text" for="row-4">Select row</label></td>
                <td>
                    <ul class="actions">
                        <li><a href="#" class="o-icon-more" title="More details" aria-label="More details"></a></li>
                        <li><a href="#" class="o-icon-install" title="Uninstall" aria-label="Uninstall module"></a></li>
                    </ul>
                    <a href="#">CoinS</a> version 3.0 
                    <span class="author">by Roy Rosenzweig Center for History and New Media</span>
                </td>
            </tr>
            <tr class="uninstalled">
                <td><input type="checkbox" id="row-5"><label class="screen-reader-text" for="row-5">Select row</label></td>
                <td>
                    <ul class="actions">
                        <li><a href="#" class="o-icon-more" title="More details" aria-label="More details"></a></li>
                        <li><a href="#" class="o-icon-install" title="Uninstall" aria-label="Uninstall module"></a></li>
                    </ul>
                    <a href="#">Commenting</a> version 3.0 
                    <span class="author">by Roy Rosenzweig Center for History and New Media</span>
                </td>
            </tr>
            <tr class="needs-upgrade installed">
                <td><input type="checkbox" id="row-6"><label class="screen-reader-text" for="row-6">Select row</label></td>
                <td>
                    <ul class="actions">
                        <li><a href="#" class="o-icon-more" title="More details" aria-label="More details"></a></li>
                        <li><a href="#" class="o-icon-upgrade" title="Upgrade" aria-label="Upgrade module"></a></li>
                    </ul>
                    <a href="#">CSS Editor</a> version 3.0 
                    <span class="author">by Roy Rosenzweig Center for History and New Media</span>
                </td>
            </tr>
            <tr class="needs-upgrade installed">
                <td><input type="checkbox" id="row-7"><label class="screen-reader-text" for="row-7">Select row</label></td>

                <td>
                    <ul class="actions">
                        <li><a href="#" class="o-icon-more" title="More details" aria-label="More details"></a></li>
                        <li><a href="#" class="o-icon-upgrade" title="Upgrade" aria-label="Upgrade module"></a></li>
                    </ul>
                    <a href="#">Derivative Images</a> version 3.0 
                    <span class="author">by Roy Rosenzweig Center for History and New Media</span>
                </td>
            </tr>
            <tr class="active installed">
                <td><input type="checkbox" id="row-8"><label class="screen-reader-text" for="row-8">Select row</label></td>
                <td>
                    <ul class="actions">
                        <li><a href="#" class="o-icon-more" title="More details" aria-label="More details"></a></li>
                        <li><a href="#" class="o-icon-configure" title="Configure" aria-label="Configure module"></a></li>
                        <li><a href="#" class="o-icon-deactivate" title="Deactivate" aria-label="Deactivate module"></a></li>
                        <li><a href="#" class="o-icon-uninstall" title="Uninstall" aria-label="Uninstall module"></a></li>
                    </ul>
                    <span class="module-name"><a href="#">Geolocation</a></span> <span class="module-version">version 3.0</span>
                    <span class="module-author">by Roy Rosenzweig Center for History and New Media</span>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="sidebar">
        <a href="#" class="sidebar-close o-icon-close"><span class="screen-reader-text">Close</span></a>
        <h2>BagIt</h2>
        <h3>Version</h3>
        <p class="version">3.0</p>
        <h3>Author</h3>
        <p class="author"><a href="http://scholarslab.org">Scholars Lab</a></p>
        <h3>Description</h3>
        <div class="description">
            <p>Implements the BagIt specification for storing collections of files. Adds an administrative interface that allows users to (a) generate and export Bags containing files on the site and (b) import Bags and make their contents available through the Dropbox interface.</p>
            <p>This plugin implements the BagIt 0.96 specification for creating and transmitting collections of files. The plugin adds an administrative interface that allows users to (a) generate and export Bags containing files on the site and (b) import already existing bags and make their content available through the Dropbox interface.</p>
        </div>
    </div>
</div>

<?php include('../footer.php'); ?>