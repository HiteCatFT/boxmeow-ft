<?php

function optionsframework_option_name() {
	$option_name = get_option( 'stylesheet' );
    $option_name = preg_replace( "/\W/", "_", strtolower( $option_name ) );
    return $option_name;
}

function optionsframework_options() {
    $options = array();

    // 示例: 添加一个文本输入框
    $options[] = array(
        'name' => __('示例文本输入', 'your_theme_textdomain'),
        'desc' => __('这是一个示例文本输入框。', 'your_theme_textdomain'),
        'id' => 'example_text_input',
        'std' => '',
        'type' => 'text'
    );

    // 更多设置选项...

    return $options;
}