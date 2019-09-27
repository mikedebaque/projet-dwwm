$("[data-toggle=popover]").popover({
    html: true,
    sanitize: false,
    content: function () {
        return $('#favpopover-content').html();
    }
});