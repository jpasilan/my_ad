jQuery(function() {
    var imgDropzone = jQuery('#image-dropzone');

    // Set the data from the imgDropzone element data attributes.
    // The following data attributes are required.
    var dataMaxFiles = imgDropzone.data('max-files');  // Set to NULL for unlimited uploads
    var dataToken = imgDropzone.data('token');

    var dataInputName = typeof(imgDropzone.data('input-name')) !== "undefined" ? imgDropzone.data('input-name') : 'image';
    var inputName = (dataMaxFiles !== null && dataMaxFiles == 1) ? dataInputName : dataInputName + '[]';

    // Disable Dropzone auto discover.
    Dropzone.autoDiscover = false;

    var dropzone = new Dropzone('#image-dropzone',  {
        url: '/image',
        addRemoveLinks: true,
        dictCancelUpload: 'Cancel',
        dictRemoveFile: 'Remove',
        maxFiles: dataMaxFiles,
        maxFilesize: 1,
        init: function() {
            var selector = 'input[name^="' + dataInputName + '"]';
            if (jQuery(selector).length > 0) {
                var _this = this;
                var fileCount = 0;
                if (dataMaxFiles == 1) {
                    var file = JSON.parse(jQuery(selector).val());
                    var mock = {
                        name: typeof(file.original_name) !== 'undefined' ? file.original_name : file.name,
                        size: file.size,
                        serverId: file.name.split('.')[0],
                        path: file.path,
                        type: file.type
                    };

                    // Set the id attribute.
                    jQuery(selector).attr('id', mock.serverId);

                    this.emit('addedfile', mock);
                    this.emit('thumbnail', mock, file.path);
                    this.emit('success', mock, {});
                    this.files.push(mock);
                    this.options.maxFiles = this.options.maxFiles - 1;
                } else {
                    jQuery(selector).each(function(i) {
                        var file = JSON.parse(jQuery(this).val());
                        var mock = {
                            name: typeof(file.original_name) !== 'undefined' ? file.original_name : file.name,
                            size: file.size,
                            serverId: file.name.split('.')[0],
                            path: file.path,
                            type: file.type
                        };

                        // Set the id attribute.
                        jQuery(this).attr('id', mock.serverId);

                        _this.emit('addedfile', mock);
                        _this.emit('thumbnail', mock, file.path);
                        _this.emit('success', mock, {});
                        _this.files.push(mock);

                        fileCount++;
                    });
                }
                this.options.maxFiles = this.options.maxFiles - fileCount;
            }
        }
    });
    jQuery('#image-dropzone').addClass('dropzone');

    dropzone.on('sending', function(file, xhr, formData) {
        formData.append('_token', dataToken)
    });

    dropzone.on('success', function(file, response) {
        // Get only the string before the dot(.) of the file name.
        file.serverId = response.file.name.split('.')[0];

        jQuery('#ad-images').append(jQuery('<input>', {
            name: inputName,
            id: file.serverId,
            value: JSON.stringify(response.file),
            type: 'hidden'
        }));
    });

    dropzone.on('removedfile', function(file) {
        var data = JSON.parse(jQuery('#' + file.serverId).val());

        // Remove regardless of the ajax response.
        jQuery('#' + file.serverId).remove();

        // Increase the dropzone maxFiles if necessary.
        if (dropzone.options.maxFiles < dataMaxFiles) dropzone.options.maxFiles += 1;

        // Delete the file in the server.
        jQuery.ajax({
            url: '/image/delete',
            type: 'POST',
            data: {
                path: data.path,
                model_id: typeof(data.model_id) !== 'undefined' ?  data.model_id : null,
                _token: dataToken
            }
        });
    })
});
