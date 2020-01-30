$(document).ready(function() {
    $.get("", {
            part: '',
            id: '',
            key: 'AIzaSyB49WfTkgfK2menTbmVCkLG0f9cYWQ9'},
            function(data) {
                console.log(data);
            }
    )
});