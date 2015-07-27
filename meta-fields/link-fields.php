<?php

add_action( 'add_meta_boxes', 'cd_meta_box_add' );

function cd_meta_box_add()
{
    add_meta_box( 'my-meta-box-id', 'My First Meta Box', 'cd_meta_box_cb', 'post', 'normal', 'high' );
}

function cd_meta_box_cb() {
    echo 'What you put here, show\'s up in the meta box';
}

function cd_meta_box_cb() {
?>
    <label for="my_meta_box_text">Text Label</label>
    <input type="text" name="my_meta_box_text" id="my_meta_box_text" />
<?php
}
