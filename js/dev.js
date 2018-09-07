(function happyJS($) {
    $.fn.isHappy = function isHappy(config) {
        var fields = [], item;
        var pauseMessages = false;

        function isFunction(obj) {
            return typeof obj === 'function';
        }
        function defaultError(error) { 
            var msgErrorClass = config.classes && config.classes.message || 'unhappyMessage';
            return $('<span id="' + error.id + '" class="' + msgErrorClass + '" role="alert">' + error.message + '</span>');
        }
        function getError(error) { 
            if (isFunction(config.errorTemplate)) {
                return config.errorTemplate(error);
            }
            return defaultError(error);
        }
        function handleSubmit(e) {
            var  i, l;
            var errors = false;
            if (config.testMode) {
                e.preventDefault();
            }
            for (i = 0, l = fields.length; i < l; i += 1) {
                if (!fields[i].testValid(true)) {
                    errors = true;
                }
            }
            if (errors) {
                if (isFunction(config.unHappy)) config.unHappy(e);
                return false;
            } else if (config.testMode) {
                if (window.console) console.warn('would have submitted');
                if (isFunction(config.happy)) return config.happy(e);
            }
            if (isFunction(config.happy)) return config.happy(e);
        }
        function handleMouseUp() {
            pauseMessages = false;
        }
        function handleMouseDown() {
            pauseMessages = true;
        }
        function processField(opts, selector) {
            var field = $(selector);
            if (!field.length) return;

            selector = field.prop('id') || field.prop('name').replace(['[',']'], '');
            var error = {
                message: opts.message || '',
                id: selector + '_unhappy'
            };
            var errorEl = $(error.id).length > 0 ? $(error.id) : getError(error);
            var handleBlur = function handleBlur() {
                if (!pauseMessages) {
                    field.testValid();
                } else {
                    $(window).one('mouseup', field.testValid);
                }
            };

            fields.push(field);
            field.testValid = function testValid(submit) {
                var val, temp;
                var required = field.prop('required') || opts.required;
                var password = field.attr('type') === 'password';
                var arg = isFunction(opts.arg) ? opts.arg() : opts.arg;
                var errorTarget = (opts.errorTarget && $(opts.errorTarget)) || field;
                var fieldErrorClass = config.classes && config.classes.field || 'unhappy';
                var testResult = errorTarget.hasClass(fieldErrorClass);
                var oldMessage = error.message;

                if (field.length > 1) {
                    val = [];
                    field.each(function(i,obj) {
                        val.push($(obj).val());
                    });
                    val = val.join(',');
                } else {
                   
                    if (isFunction(opts.clean)) {
                        val = opts.clean(field.val());
                    } else if (!password && typeof opts.trim === 'undefined' || opts.trim) {
                        val = $.trim(field.val());
                    } else {
                        val = field.val();
                    }

                    field.val(val);
                }

                if (submit === true && required === true) {
                    testResult = !val.length;
                }
                if ((val.length > 0 || required === 'sometimes') && opts.test) {
                    if (isFunction(opts.test)) {
                        testResult = opts.test(val, arg);
                    }
                    else if (typeof opts.test === 'object') {
                        $.each(opts.test, function (i, test) {
                            if (isFunction(test)) {
                                testResult = test(val, arg);
                                if (testResult !== true) {
                                    return false;
                                }
                            }
                        });
                    }

                    if (testResult instanceof Error) {
                        error.message = testResult.message;
                    }
                    else {
                        testResult = !testResult;
                        error.message = opts.message || '';
                    }
                }

                if (!oldMessage !== error.message) {
                    temp = getError(error);
                    errorEl.replaceWith(temp);
                    errorEl = temp;
                }

                if (testResult) {
                    errorTarget.addClass(fieldErrorClass).after(errorEl);
                    return false;
                } else {
                    errorEl.remove();
                    errorTarget.removeClass(fieldErrorClass);
                    return true;
                }
            };
            field.on(opts.when || config.when || 'blur', handleBlur);
        }

        for (item in config.fields) {
            if (config.fields.hasOwnProperty(item)) {
                processField(config.fields[item], item);
            }
        }

        $(config.submitButton || this).on('mousedown', handleMouseDown);
        $(window).on('mouseup', handleMouseUp);

        if (config.submitButton) {
            $(config.submitButton).click(handleSubmit);
        } else {
            this.on('submit', handleSubmit);
        }
        return this;
    };
})(this.jQuery || this.Zepto);









var happy = {
    USPhone: function (val) {
        return /^\(?(\d{3})\)?[\- ]?\d{3}[\- ]?\d{4}$/.test(val);
    },

    // matches mm/dd/yyyy (requires leading 0's (which may be a bit silly, what do you think?)
    date: function (val) {
        return /^(?:0[1-9]|1[0-2])\/(?:0[1-9]|[12][0-9]|3[01])\/(?:\d{4})/.test(val);
    },

    email: function (val) {
        return /^(?:\w+\.?\+?)*\w+@(?:\w+\.)+\w+$/.test(val);
    },

    minLength: function (val, length) {
        return val.length >= length;
    },

    maxLength: function (val, length) {
        return val.length <= length;
    },

    equal: function (val1, val2) {
        return (val1 == val2);
    }
};
