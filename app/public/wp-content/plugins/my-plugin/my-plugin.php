<?php
/*
 Plugin Name: マイプラグイン
 Author: takaki
*/

add_action('enqueue_block_editor_assets', function () {
  wp_enqueue_script(
    'myeditor-sctipt',
    plugins_url('myeditor.js', __FILE__),
    ['wp-blocks']
  );
});
