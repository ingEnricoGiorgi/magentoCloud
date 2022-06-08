/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

 var config = {
    shim:{
        bootstrap: {
            deps: ['jquery', '@popperjs/core']
        }
    },
    map: {
        '*': {
            bootstrap: 'js/bootstrap.min',
            '@popperjs/core': 'js/popper.min'
        }
    }
};