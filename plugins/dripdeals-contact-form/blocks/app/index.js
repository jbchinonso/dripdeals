const { registerBlockType } = wp.blocks;
const { __ } = wp.i18n;
console.log(wp);
//  import { Icon, shortcode } from wordpress/icons;

const {
    InspectorControls,
    BlockControls,
    AlignmentToolbar,
    BlockAlignmentToolbar
        }                             = wp.blockEditor;


const { PanelBody,
        PanelRow,
    TextControl,
    SelectControl,}                 = wp.components;


const { RawHTML }                    = wp.element;


registerBlockType('jb/dripdeals', {
    title:                 __('drip Form', 'dripdeals'),
    description:           __('Add contact form to any page or post using blocks', 'dripdeals'),

    //common, formatting, layout, widget, embed
    category:        'common',
    icon:            'buddicons-pm',
    keywords: [
                    __('contact', 'dripdeals'),
                    __('form', 'dripdeals'),
                    __('contact form', 'dripdeals')
    ],

    supports: {
        html:          false
    },

    attributes: {
        text_alignment: {
            type:       'string'
        },
        text: {
            type:        'string',
            default:     '[dripdeals-contact-form]'
        }
    },



    edit: (props) => {

        return [

            <div className={props.className}>
                <BlockControls>
                    <AlignmentToolbar
                        value={props.attributes.text_alignment}
                        onChange={(new_val) => {
                            props.setAttributes({ text_alignment: new_val });
                        }}
                    />
                </BlockControls>
                
                    <TextControl
                            label={__('Form shortcode', 'dripdeals')}
                            help={__('', 'dripdeals')}
                            value={props.attributes.text}
                            onChange={ ( text ) => props.setAttributes( { text } ) }
                    />
              

            </div>
        ]
        
    },


    save: (props) => {
        return <RawHTML>{ props.attributes.text }</RawHTML>;
    }
})