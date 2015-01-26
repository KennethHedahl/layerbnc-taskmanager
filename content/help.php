<?php
$setup = array();
$setup['title'] = "Help";
$setup['name'] = "Help";
$setup['description'] = "Learn how to use LayerTask";
Design::header($setup);
?>
<?php
$sql = "SELECT * FROM " . Config::$db_help;
$db = $con->query($sql);


while ($result = $db->fetch_object()) {
    echo '<div class="panel panel-default panel-faq">
    <div class="panel-heading">
        <a data-toggle="collapse" data-parent="#accordion-cat-' . $result->id . '" href="#faq-cat-' . $result->id . '-sub-' . $result->id . '">
            <h4 class="panel-title">
                ' . $result->title . ' <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
            </h4>
        </a>
    </div>
    <div id="faq-cat-' . $result->id . '-sub-' . $result->id . '" class="panel-collapse collapse">
        <div class="panel-body">
            ' . $result->content . ' </div>
    </div>
</div>';
}
?>
<?php
Design::footer();
