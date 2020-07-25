function filter_plugin_updates( $value ) {
    unset( $value->response['plugin-name/plugin-name.php'] );
    return $value;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );
