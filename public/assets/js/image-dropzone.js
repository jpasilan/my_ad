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
            var selector = 'input[name="' + inputName + '"]';
            if (jQuery(selector).length > 0) {
                var _this = this;
                var fileCount = 0;
                if (dataMaxFiles == 1) {
                    var file = jQuery(selector);
                    var id = file.attr('id');
                    var filename = file.val();
                    var filesize = file.data('size');
                    var filepath = file.data('file-path');
                    var mock = { name: id, size: filesize, serverId: id, serverFile: filename, path: filepath};

                    this.emit('addedfile', mock);
                    this.emit('thumbnail', mock, filepath + filename);
                    this.emit('success', mock, {});
                    this.files.push(mock);
                    this.options.maxFiles = this.options.maxFiles - 1;
                } else {
                    jQuery(selector).each(function(i) {
                        var file = jQuery(this);
                        var id = file.attr('id');
                        var filename = file.val();
                        var filesize = file.data('size');
                        var mock = { name: id, size: filesize, serverId: id, serverFile: filename };

                        _this.emit('addedfile', mock);
                        _this.emit('thumbnail', mock, '/assets/uploads/images/' + filename);
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
        file.serverId = response.id;
        file.serverFile = response.filename;

        if (dataMaxFiles == 1) {
            var singleInput = jQuery('input[name="' + inputName + '"]');

            if (singleInput.length == 1) {
                // If hidden input is already present make a backup of it first.
                var oldInput = jQuery('input[name="' + inputName + '_old"]');

                if (oldInput.length == 1) {
                    oldInput.val(singleInput.val());
                } else {
                    jQuery('#ad-images').append('<input type="hidden" name="'+ inputName
                        + '_old" value="' + singleInput.val() + '" />');
                }

                singleInput.val(response.filename);
            } else {
                jQuery('#ad-images').append('<input type="hidden" name="'+ inputName
                    + '" value="' + response.filename + '" />');
            }
        } else {
            jQuery('#ad-images').append('<input type="hidden" name="'+ inputName
                + '" id="' + response.id + '" value="' + response.filename + '" />');
        }
    });

    dropzone.on('removedfile', function(file) {
        if (dataMaxFiles == 1) {
            var oldInputField = jQuery('input[name="' + inputName + '_old"]');
            var oldInput = '';
            if (oldInputField.length > 0) {
                // Get the previous value and delete.
                oldInput = oldInputField.val();
                oldInputField.remove();
            }

            jQuery('input[name="' + inputName + '"]').val(oldInput);
        } else {
            // Remove the input field.
            jQuery('#' + file.serverId).remove();
        }

        // Increase the dropzone maxFiles if needed.
        if (dropzone.options.maxFiles < dataMaxFiles) dropzone.options.maxFiles += 1;

        // Delete the file in the server.
        jQuery.ajax({
            url: '/image/delete',
            type: 'POST',
            data: { filename: file.serverFile, _token: dataToken }
        });
    })
});
