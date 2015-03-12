(function($) {

    $(document).ready( function() {
        
        // Skip to content button. See http://www.bignerdranch.com/blog/web-accessibility-skip-navigation-links/
        $('.skip').click(function(e) {
            $('#main').attr('tabindex', -1).on('blur focusout', function() {
                $(this).removeAttr('tabindex');
            }).focus();
        });
        
        // Mobile navigation
        $('#mobile-nav .button').click(function(e) {
            e.preventDefault();
            var button_class = $(this).attr('class');
            var nav_id = button_class.replace(/button/, '');
            var nav_object = $('#' + nav_id.replace(/o-icon-/, ''));
            if ($('header .active').length > 0) {
                if (!($(this).hasClass('active'))) {
                    $('header .active').removeClass('active');
                    $(this).addClass('active');
                    nav_object.addClass('active');
                } else {
                    $('header .active').removeClass('active');
                }
            } else {
                $(this).addClass('active');
                nav_object.addClass('active');
            }
        });
        
        // Variables
        var add_edit_items = $('body.add,body.edit');
        var import_vocabs = $('body.import.vocabs');
        
        // Populate field template with vocabularies, then make a fresh new property field.
        $.getJSON('../javascript/vocabularies.json',function(data) {
            var properties_list = $('.property-selector > ul > li > ul');
            $.each(data, function(i) {
                var current_vocab = $('<li>' + i + '<ul></ul></li>');
                $.each(data[i][0], function(key, value) {
                    var new_property = $('<li class="property">' + key + '</li>');
                    var property_desc = $('<div class="description"><p class="o-icon-info"><span class="screen-reader-text">More Info</span></p></div>');
                    property_desc.append($('<p>' + value + '</p>'));
                    var set_property = $('<button>Set Property</button>');
                    new_property.append(property_desc);
                    new_property.append(set_property);
                    current_vocab.children('ul').append(new_property);
                });
                properties_list.append(current_vocab);                
            });
            
            if ($('#resource-values').length > 0) {
                makeNewField('resource-values');
            }
        });

        if ($('body').hasClass('resource-template')) {
            $.getJSON('../javascript/vocabularies.json',function(data) {
                var properties_list_template = $('.resource-template .all-vocabs ul');
                var count = 0;
                $.each(data, function(i) {
                    count++;
                    $('.all-vocabs .count').text(count);
                    var current_vocab = $('<li class="vocabulary">' + i + '<ul></ul></li>');
                    $.each(data[i][0], function(key, value) {
                        var new_property = $('<li class="property">' + key + '</li>');
                        var property_desc = $('<div class="description"><p class="o-icon-info"><span class="screen-reader-text">More Info</span></p></div>');
                        property_desc.append($('<p>' + value + '</p>'));
                        var set_property = $('<button class="set-property">Set Property</button>');
                        new_property.append(property_desc);
                        new_property.append(set_property);
                        current_vocab.children('ul').append(new_property);
                    });
                    properties_list_template.append(current_vocab);                
                });
                
                if ($('#resource-values').length > 0) {
                    makeNewField('resource-values');
                }
            });
        }
        
        // Setup tables' select all checkboxes.
        $('label[for="select-all"]').click(function(e) {
            e.preventDefault();
            var select_all = $(this).siblings('input[type="checkbox"]');
            var checkboxes = $(this).parents('table').find('td input[type="checkbox"]');
            var checked = 0;
            checkboxes.each(function() {
                if($(this).prop('checked') == true) {
                    checked = checked + 1;
                }
            });
            if (checked < checkboxes.length) {
                select_all.prop('checked', 'checked');
                checkboxes.each(function() {
                    $(this).prop('checked','checked');
                });
            } else {
                select_all.attr('checked', false);
                checkboxes.each(function() {
                    $(this).removeAttr('checked');
                    $(this).attr('checked', false);
                });
            }
        });


        // Attach sidebar triggers
        $('.o-icon-more').click(function(e) {
            e.preventDefault();
            openSidebar($('.sidebar'));
            $('#delete').hide();
            $('#more').show();
        });

        $('.o-icon-delete').click(function(e) {
            e.preventDefault();
            openSidebar($('.sidebar'));
            $('#more').hide();
            $('#delete').show();
        });
        
        $('.sidebar-close').click(function(e) {
            e.preventDefault();
            $(this).parent('.active').removeClass('active');
            if ($('.active.sidebar').length < 1) {
                $('#content').removeClass('sidebar-open');
            }
        });
        
        if ($('body').hasClass('add')) {
            $('body').on('click','[href="#resource-select"]', function(e) {
                e.preventDefault();
                openSidebar($('#content > .sidebar'));
            });
            $('body').on('click','.resource-name a', function(e) {
                e.preventDefault();
                openSidebar($('.sidebar .sidebar'));
            });
        }

        $('body.browse .fa-trash-o').click(function(e) {
            e.preventDefault();
            $.get('../common/delete-confirm.php', function(data) {
                $('.modal-content').html(data);
                $('.modal').attr('id', 'delete-confirm').attr('class', 'small modal');
                $('.modal-header h1').replaceWith($('.modal-content h1'));
            });
        });
        
        // Switch between section tabs.
        $('a.section, .section legend').click(function(e) {
            e.preventDefault();
            var tab = $(this);
            if (!tab.hasClass('active')) {
                $('.section.active, legend.active').removeClass('active');
                if (tab.is('legend')) {
                    var section_class = tab.parents('.section').attr('id');
                } else {
                    var section_class = tab.attr('class');
                }
                var section_id = section_class.replace(/section/, '');
                tab.addClass('active');
                $('#' + section_id).addClass('active');
            }
        });        
        
        // Set classes for expandable/collapsible content.
        $(document).on('click', 'a.expand, a.collapse', function(e) {
            e.preventDefault();
            $(this).toggleClass('collapse').toggleClass('expand');
            if ($('.expand-collapse-parent').length > 0) {
                $(this).parent().toggleClass('collapse').toggleClass('expand');
            }
        });
        
        // In the 'Select Item' modal, toggle item details.
        $(document).on('click', '.modal-content .item a', function(e) {
            e.preventDefault();
            if ($(this).parents('.previewed').length > 0) {
                $('.previewed').removeClass('previewed');
                $('#resource-select').toggleClass('active');
            } else {
                if ($('.previewed').length > 0) {
                    $('.previewed').removeClass('previewed');
                    $(this).parents('.modal .item').addClass('previewed');
                } else {
                    $(this).parents('.modal .item').addClass('previewed');
                    $('#resource-select').addClass('active');
                }
            }
        });

        $(document).on('click', '.resource-details .o-icon-close', function(e) {
            e.preventDefault();
            $('#resource-select').removeClass('show-details');
        });
        
        // Carry over any entered value from simple items search to advanced items search.
        add_edit_items.on('click', '.more-options', function(e) {
            e.preventDefault();
            var keywords = $('#resource-list-search').val();
            $('input[name="advanced-keyword"').val(keywords);
        });
        
        // Show property descriptions when clicking "more-info" icon.
        add_edit_items.on('click', '.property-selector .o-icon-info', function() {
            $(this).parents('.description').toggleClass('show');
        });
        
        // Mark existing properties for deletion and straight up remove new properties.
        add_edit_items.on('click', '.remove.button', function(e) {
            e.preventDefault();
            var current_field = $(this).parents('.field');
            if (current_field.hasClass('new')) {
                current_field.remove();
            } else {
                current_field.toggleClass('remove');
            }
        });

        add_edit_items.on('change', '.media.field select', function(e) {
            var select = $(this);
            var fileType = select.find('option:selected').attr('value');
            select.siblings('.active').removeClass('active');
            select.siblings('.' + fileType).addClass('active');
            console.log(fileType);
        });
        
        // Make new property field whenever "add property" button clicked.
        $(document).on('click', '.add-property', function(e) {
            e.preventDefault();
            makeNewField('resource-values');
        });
        
        
        // Show RDF property sets to choose from.
        add_edit_items.on('click', '.browse-properties', function(e) {
            e.preventDefault();
            $(this).siblings('.properties').toggleClass('show');
        });
        
        // Show properties
        add_edit_items.on('click', '.property-selector li', function(e) {
            e.stopPropagation();
            if ($(this).children('li')) {
                $(this).toggleClass('show');
            }
        });
        
        // Select property
        add_edit_items.on('click', '.select-property', function(e) {
            e.preventDefault();
            e.stopPropagation();
            var selected_property = $(this).parents('.properties').find('.selected').first();
            if (selected_property.length > 0) {
                selected_property.removeClass('selected');
            }
            $(this).parent().addClass('selected');
        });
        
        // Set property
        add_edit_items.on('click', '.set-property', function(e) {
            e.preventDefault();
            e.stopPropagation();
            var this_field = $(this).parents('.field');
            var field_name = cleanText($(this).parent()) + " (" + cleanText($(this).parents('.vocabulary')) + ")";
            var field_label = $('<label>' + field_name + '</label>');
            var field_desc = $(this).siblings('.description');
            field_desc.attr('class', 'field-description');
            $(this).parents('.properties').before(field_desc);
            this_field.find('input[placeholder="Property name"]').replaceWith(field_label);
            this_field.removeClass('unset');
        });

        
        // Make new value inputs whenever "add value" button clicked.
        add_edit_items.on('click', '.resource-values .add-value', function(e) {
            e.preventDefault();
            var value_section = '.' + $(this).parents('.section').attr('id');
            var new_value = $(value_section + '.field.template .value ').first().clone();
            $(this).parents('.field').find('.value').last().after(new_value);
            var value_count = $(this).parents('.field').find('.value').length;
            if (value_count == 2) {
                $(this).parents('.field').find('.remove-value').first().addClass('active');
            }
        });
        
        $('.advanced-search').on('click', '.add-value', function(e) {
            e.preventDefault();
            var inputs_section = $(this).parents('.actions').siblings('.inputs');
            var new_value = inputs_section.find('.value').first().clone();
            new_value.find('input:text, input:password, input:file, select, textarea').val('');
            new_value.find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
            inputs_section.append(new_value);
            if (inputs_section.find('.value').length > 1) {
                inputs_section.find('.remove-value').each(function() {
                    $(this).addClass('active');
                });
            }
        });
        
        // Remove value.
        $('body').on('click', '.remove-value', function(e) {
            e.preventDefault();
            var this_field = $(this).parents('.field');
            var this_value = $(this).parents('.value');
            var value_count = this_field.find('.value').length;
            if (value_count > 1) {
                this_value.remove();
                value_count = this_field.find('.value').length;
            }
            if (value_count == 1) {
                this_field.find('.remove-value').last().removeClass('active');
            }
        });
        
        // Switch between the different value options.
        $(document).on('click', '.tab', function(e) {
            var tab = $(this);
            e.preventDefault();
            if (!$(this).hasClass('active')) {
                tab.siblings('.tab.active').removeClass('active');
                tab.parent().siblings('.active:not(.remove-value)').removeClass('active');
                var current_class = '.' + tab.attr('class').split(" o-icon-")[1];
                tab.addClass('active');
                tab.parent().siblings(current_class).addClass('active');
            }
        });
        
        // Load prechosen fields.
        $('select[name="resource-type"]').change(function() {
            var item_type = $(this).find('option:selected').text().toLowerCase();
            $.getJSON('RDF.json',function(data) {
                $('#add-item .field:not(.new)').each(function() {
                    if (!$(this).hasClass('keep') && !$(this).hasClass('resource-class')) {
                        $(this).remove();
                    }
                });
                if (data[item_type]) {
                    $.each(data[item_type][0], function(key,value) {
                        if ($('label:contains(' + key + ')').length == 0) {
                            makeNewField('resource-values',key,value);
                        }
                    });
                }
            })
            .fail(function() {
              console.log( "error" );
            })
            .always(function() {
              console.log( "complete" );
            });
        });
        
        // Keep new fields that have been changed.
        $(document).on('change', '.items .field input', function() {
            $(this).parents('.field').addClass('keep');
        });
        
        // Filters modules.
        
        if ($('body').hasClass('modules')) {
            $('select.filters').on('change', function() {
                var selected = $(this).children(':selected').attr('value');
                $('#modules').attr('class', selected);
            });
        }
    });

    // Duplicates the new field template, and makes it visible by removing the "template" class.
    var makeNewField = function(section,prop,desc) {
        var field_section = '#' + section;
        var new_field = $(field_section + ' .field.template').clone();
        new_field.removeClass('template');
        new_field.find('.remove-value').removeClass('active');
        if (prop) {
            property_name = prop.toLowerCase();
            property_name = property_name.replace(/ /g, "-");
            new_field_label = $('<label for="' + property_name + '">' + prop + '</label>');
            new_field.find('[title="new-property-name"]').remove();
            new_field.find('.field-meta').prepend(new_field_label);
            new_field.removeClass('new');
        } else {
            new_field.addClass('unset');
        }
        if (desc) {
            var description_field = $('.field-description').first().clone();
            new_field.find('.field-meta label').after(description_field);
            new_field.find('.o-icon-info + p').text(desc);
        }
        if (prop) {
            $('.new.field').first().before(new_field);
        } else {
            //$('.field.template').before(new_field);
            $(field_section).find('.template').before(new_field);
        }
    }
    
    var openSidebar = function(element) {
        element.addClass('active');
        if (!$('#content').hasClass('sidebar-open')) {
            $('#content').addClass('sidebar-open');
        }
    }
    
    var cleanText = function(text) {
        new_text = text.clone();
        new_text.children().remove();
        new_text = new_text.text().replace(/^\s+|\s+$/g,'');
        return new_text;
    }
    
})(jQuery)