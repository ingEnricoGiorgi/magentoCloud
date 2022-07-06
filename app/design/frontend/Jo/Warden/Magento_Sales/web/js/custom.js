define(
    [
        "jquery",
        "select2"
    ],
    function ($) {
        return function (config, element) {
            $(element).select2({"width": config.width});
        }
    })
