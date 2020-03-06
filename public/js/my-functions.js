
String.prototype.permalink = function () {
    return this.toString().trim().toLowerCase().replace(/\s/g, '-');
};


$('.origin-text').on('keyup', function () {
    $('.target-text').val($(this).val().permalink());
});


$('#article').summernote({
    height: 300,                 // set editor height
    minHeight: null,             // set minimum height of editor
    maxHeight: null,             // set maximum height of editor
    focus: true                  // set focus to editable area after initializing summernote
});

