const { registerBlockType } = wp.blocks;
const { RichText } = wp.blockEditor;

registerBlockType('gc/testimonial', {
    title: 'Testimonial',
    icon: 'admin-users',
    category: 'widgets',
    attributes: {
        text: { type: 'string' },
        client: { type: 'string' }
    },
    edit: ({ attributes, setAttributes }) => {
        return wp.element.createElement('div', { className: 'testimonial-block' },
            wp.element.createElement(RichText, {
                tagName: 'p',
                placeholder: 'Testimonial text...',
                value: attributes.text,
                onChange: (value) => setAttributes({ text: value })
            }),
            wp.element.createElement(RichText, {
                tagName: 'strong',
                placeholder: 'Client name...',
                value: attributes.client,
                onChange: (value) => setAttributes({ client: value })
            })
        );
    },
    save: ({ attributes }) => {
        return wp.element.createElement('div', { className: 'testimonial-block' },
            wp.element.createElement(RichText.Content, { tagName: 'p', value: attributes.text }),
            wp.element.createElement(RichText.Content, { tagName: 'strong', value: attributes.client })
        );
    }
});
