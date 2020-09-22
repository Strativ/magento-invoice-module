define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'invoice',
                component: 'Strativ_Invoice/js/view/payment/method-renderer/invoice-method'
            }
        );
        return Component.extend({});
    }
);