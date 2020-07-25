function form_front_end_columns_head($fields) {
    $fields['nomerazao_social'] = 'Nome/Razão Social';
    $fields['telefone'] = 'Telefone';
    $fields['referencia'] = 'Referência';
    $fields['tecnico_responsavel'] = 'Técnico Responsável';
    $fields['data_da_realizacao'] = 'Data Realizado';
    unset($fields['title']);
    unset($fields['date']);
    return $fields;
}
function form_front_end_content($column_name, $post_ID) {
    if ($column_name == 'nomerazao_social') {
        $post_nomerazao_social = get_field('nomerazao_social',$post_ID);
        if ($post_nomerazao_social) {
            echo $post_nomerazao_social;
        }
    }
    if ($column_name == 'telefone') {
        $post_telefone = get_field('telefone',$post_ID);
        if ($post_telefone) {
            echo $post_telefone;
        }
    }
    if ($column_name == 'referencia') {
        $post_referencia = get_field('referencia',$post_ID);
        if ($post_referencia) {
            echo $post_referencia;
        }
    }
    if ($column_name == 'tecnico_responsavel') {
        $post_tecnico_responsavel = get_field('tecnico_responsavel',$post_ID);
        if ($post_tecnico_responsavel) {
            echo $post_tecnico_responsavel;
        }
    }
    if ($column_name == 'data_da_realizacao') {
        $post_data_da_realizacao = get_field('data_da_realizacao',$post_ID);
        if ($post_data_da_realizacao) {
            echo $post_data_da_realizacao;
        }
    }
}
add_filter('manage_posts_columns', 'form_front_end_columns_head');
add_action('manage_posts_custom_column', 'form_front_end_content', 10, 2);
