<?php

class WPBakeryShortCode_Message extends WPBakeryShortCode
{
}

//Message
vc_map(array(
    'name' => 'Message',
    'base' => 'message',
    'category' => sprintf(__('by %s', 'tm-dione'), TM_DIONE_PARENT_THEME_NAME),
    'icon' => 'tm-shortcode-ico message-icon',
    'description' => esc_html__('Notification box', 'tm-dione'),
    'allowed_container_element' => 'vc_row',
    'params' => array(
        array(
            'type' => 'dropdown',
            'admin_label' => true,
            'class' => '',
            'heading' => 'Type',
            'param_name' => 'type',
            'value' => array(
                'Normal' => 'normal',
                'With Icon' => 'with_icon',
            ),
            'save_always' => true,
            'description' => '',
        ),
        array(
            'type' => 'dropdown',
            'admin_label' => true,
            'class' => '',
            'heading' => 'Style',
            'param_name' => 'style',
            'value' => array(
                'Success' => 'message-success',
                'Danger' => 'message-danger',
                'Info' => 'message-info',
                'Warning' => 'message-warning',
            ),
            'save_always' => true,
            'description' => '',
        ),
        // Icons

        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Icon library', 'tm-dione'),
            'value' => array(
                esc_html__('Choose library', 'tm-dione') => '',
                esc_html__('Font Awesome', 'tm-dione') => 'fontawesome',
                esc_html__('Open Iconic', 'tm-dione') => 'openiconic',
                esc_html__('Typicons', 'tm-dione') => 'typicons',
                esc_html__('Entypo', 'tm-dione') => 'entypo',
                esc_html__('Linecons', 'tm-dione') => 'linecons',
                esc_html__('P7 Stroke', 'tm-dione') => 'pe7stroke',
            ),
            'admin_label' => true,
            'param_name' => 'icon_type',
            'description' => esc_html__('Select icon library.', 'tm-dione'),
            'dependency' => array('element' => 'type', 'value' => array('with_icon')),
        ),
        $fontawesome,
        $openiconic,
        $typicons,
        $entypo,
        $linecons,
        $pe7stroke,
        array(
            'type' => 'textfield',
            'admin_label' => true,
            'class' => '',
            'heading' => 'Size (px, em..)',
            'param_name' => 'size',
            'description' => 'Example: 2em',
            'dependency' => array('element' => 'type', 'value' => array('with_icon')),
        ),
        array(
            'type' => 'colorpicker',
            'class' => '',
            'heading' => 'Icon Color',
            'param_name' => 'icon_color',
            'description' => '',
            'dependency' => array('element' => 'type', 'value' => array('with_icon')),
        ),
        array(
            'type' => 'colorpicker',
            'class' => '',
            'heading' => 'Icon Background Color',
            'param_name' => 'icon_background_color',
            'description' => '',
            'dependency' => array('element' => 'type', 'value' => array('with_icon')),
        ),
        array(
            'type' => 'attach_image',
            'admin_label' => true,
            'class' => '',
            'heading' => 'Custom Icon',
            'param_name' => 'custom_icon',
            'dependency' => array('element' => 'type', 'value' => array('with_icon')),
        ),
        array(
            'type' => 'colorpicker',
            'admin_label' => true,
            'class' => '',
            'heading' => 'Background Color',
            'param_name' => 'background_color',
            'description' => '',
        ),
        array(
            'type' => 'dropdown',
            'admin_label' => true,
            'class' => '',
            'heading' => 'Border',
            'param_name' => 'border',
            'value' => array(
                'Default' => '',
                'No' => 'no',
                'Yes' => 'yes',
            ),
            'description' => '',
        ),
        array(
            'type' => 'textfield',
            'admin_label' => true,
            'class' => '',
            'heading' => 'Border Width (px)',
            'param_name' => 'border_width',
            'dependency' => array('element' => 'border', 'value' => array('yes')),
        ),
        array(
            'type' => 'colorpicker',
            'admin_label' => true,
            'class' => '',
            'heading' => 'Border Color',
            'param_name' => 'border_color',
            'dependency' => array('element' => 'border', 'value' => array('yes')),
        ),
        array(
            'type' => 'colorpicker',
            'class' => '',
            'heading' => 'Close Button Color',
            'param_name' => 'close_button_color',
            'description' => '',
        ),
        array(
            'type' => 'textarea_html',
            'admin_label' => true,
            'class' => '',
            'heading' => 'Content',
            'param_name' => 'content',
            'value' => '<p>'.esc_html('I test text for Message shortcode.', 'tm-dione').'</p>',
            'description' => '',
        ),
    ),
));