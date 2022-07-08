/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

'use strict';

/**
 * Define Themes
 *
 * area: area, one of (frontend|adminhtml|doc),
 * name: theme name in format Vendor/theme-name,
 * locale: locale,
 * files: [
 * 'css/styles-m',
 * 'css/styles-l'
 * ],
 * dsl: dynamic stylesheet language (less|sass)
 *
 */
module.exports = {
    blank: {
        area: 'frontend',
        name: 'Magento/blank',
        locale: 'en_US',
        files: [
            'css/styles-m',
            'css/styles-l',
            'css/email',
            'css/email-inline',
            'css/email-fonts'
        ],
        dsl: 'less'
    },
    luma: {
        area: 'frontend',
        name: 'Magento/luma',
        locale: 'en_US',
        files: [
            'css/styles-m',
            'css/styles-l'
        ],
        dsl: 'less'
    },
    backend: {
        area: 'adminhtml',
        name: 'Magento/backend',
        locale: 'en_US',
        files: [
            'css/styles-old',
            'css/styles'
        ],
        dsl: 'less'
    },
    Warden: {
        area: 'frontend',
        name: 'Jo/Warden',
        locale: 'en_US',
        files: [
            'css/styles-m',
            'css/styles-l'
        ],
        dsl: 'less'
    },
    Warden: {
        area: 'frontend',
        name: 'Jo/Warden',
        locale: 'de_DE',
        files: [
            'css/styles-m',
            'css/styles-l'
        ],
        dsl: 'less'
    },
    Warden: {
        area: 'frontend',
        name: 'Jo/Warden',
        locale: 'fr_FR',
        files: [
            'css/styles-m',
            'css/styles-l'
        ],
        dsl: 'less'
    },
    Warden: {
        area: 'frontend',
        name: 'Jo/Warden',
        locale: 'it_IT',
        files: [
            'css/styles-m',
            'css/styles-l'
        ],
        dsl: 'less'
    },
};