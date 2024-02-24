wp.hooks.addFilter(
    'blocks.registerBlockType',
    'my-plugin/block-group-extend',
    function( settings, name ) {
        if (name !== 'core/group') {
            return settings;
        }

        return lodash.assign({}, settings, {
            attributes: lodash.assign({}, settings.attributes, {
                customWidth: {
                    type: 'number',
                    default: 0, // Set your default width if necessary
                },
            }),
        });
    }
);

const { createHigherOrderComponent } = wp.compose;
const { InspectorControls } = wp.blockEditor;
const { PanelBody, RangeControl } = wp.components;

const withCustomWidthControl = createHigherOrderComponent((BlockEdit) => {
    return (props) => {
        // Check if we are editing the correct block
        if (props.name !== 'core/group') {
            return <BlockEdit {...props} />;
        }

        const { attributes, setAttributes } = props;
        const { customWidth } = attributes;

        return (
            <>
                <BlockEdit {...props} />
                <InspectorControls>
                    <PanelBody title="Width Settings">
                        <RangeControl
                            label="Width"
                            value={customWidth}
                            onChange={(newWidth) => setAttributes({ customWidth: newWidth })}
                            min={1}
                            max={100}
                        />
                    </PanelBody>
                </InspectorControls>
            </>
        );
    };
}, 'withCustomWidthControl');

wp.hooks.addFilter(
    'editor.BlockEdit',
    'my-plugin/with-custom-width-control',
    withCustomWidthControl
);

wp.hooks.addFilter(
    'blocks.getSaveContent.extraProps',
    'my-plugin/apply-custom-width',
    (props, blockType, attributes) => {
        if (blockType.name !== 'core/group') {
            return props;
        }

        const customStyles = {};
        if (attributes.customWidth) {
            customStyles.width = attributes.customWidth + '%';
        }

        return lodash.assign({}, props, {
            style: lodash.assign({}, props.style, customStyles),
        });
    }
);
