define(['jquery', 'uiComponent', 'ko', 'numberModel'], function ($, Component, ko, numberModel) {

    /**
     * Component
     */
    var self;

    return Component.extend({
        time: ko.observable(Date()),
        color: ko.observable('#000000'),
        sayHello: "Hello world with Knockout in Magento 2",

        /**
         *
         */
        initialize: function () {
            self = this;
            this._super();
            this.updateTime();
            this.subscribeToTime();

            this.total = ko.computed(function () {
                return numberModel.numberX() + numberModel.numberY();
            }, this);
        },

        isShowTime: function () {
            return numberModel.isShowTime;
        },

        /**
         *
         * @returns {number}
         */
        randomNumber: function () {
            return Math.floor(Math.random() * 100);
        },

        /**
         *
         */
        updateTime: function () {
            setInterval(function () {
                self.time(Date());
            }, 1000);
        },

        /**
         *
         */
        subscribeToTime: function () {
            this.time.subscribe(function () {
                self.updateColor();
                numberModel.updateTotal();
            });
        },

        /**
         *
         */
        updateColor: function () {
            var randomColor = '#' + Math.floor(Math.random()*16777215).toString(16);
            this.color(randomColor);
        }
    });
});
