/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

 var config = {
     //path contiene le librerie
    paths: {
        'glide': 'js/glide.min'
        
    }, //ordine
    shim:{
        'glide': {
            deps: ['jquery']
        },
        
        bootstrap: {
            deps: ['jquery', '@popperjs/core']
        }
    },
    map: {
        '*': {
            bootstrap: 'js/bootstrap.min',
            '@popperjs/core': 'js/popper.min',
            'glide' : 'js/glide.min',
            'app':'js/app',
            'testjs':'js/testjs',
           
            custom: 'Magento_Sales/js/custom',
            'qty-counter': 'Magento_Catalog/js/qty-counter'
        },

            'Magento_Sales/js/custom': {
                select2: 'js/select2.min'
            }

        }
    
};
