define(
    ['ko'],
    function (ko) {
        'use strict';
        return {
            numberX: ko.observable(0),
            numberY: ko.observable(0),
            isShowTime: true,
            randomNumber: function () {
                return Math.floor((Math.random() * 100));
            },
            updateTotal: function () {
                this.numberX(this.randomNumber());
                this.numberY(this.randomNumber());
            }
        }
    }
);
