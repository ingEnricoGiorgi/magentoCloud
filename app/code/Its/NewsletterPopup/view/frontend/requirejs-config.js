var config = {
    map: {
        '*': {
            newsletter: 'Its_NewsletterPopup/js/newsletter'
        }
    },
    config: {
        mixins: {
            'Magento_Ui/js/modal/modal': {
                'Its_NewsletterPopup/js/modal-widget-mixin': true
            }
        }
    }
};
