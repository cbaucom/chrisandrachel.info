/*
Author: Tristan Denyer (based on Charlie Griefer's original clone code)
Plugin and demo at http://tristandenyer.com/using-jquery-to-duplicate-a-section-of-a-form-maintaining-accessibility/
Ver: 0.9.1
Date: Dec 8, 2012
*/
$(function () {
    $('#btnAdd').click(function () {
        var num = $('.clonedInput').length, // how many "duplicatable" input fields we currently have
            newNum = new Number(num + 1), // the numeric ID of the new input field being added
            newElem = $('#testingDiv' + num).clone().attr('id', 'testingDiv' + newNum).fadeIn('slow'); // create the new element via clone(), and manipulate it's ID using newNum value
        // manipulate the name/id values of the input inside the new element

        // reference
        newElem.find('.heading-reference').attr('id', 'ID' + newNum + '_reference').attr('name', 'ID' + newNum + '_reference').html('Guest ' + newNum);

        // first_name
        newElem.find('.first_name_label').attr('for', 'first_name' + newNum);
        newElem.find('.first_name').attr('id', 'first_name' + newNum).attr('name', 'first_name' + newNum).val('');

        // last_name
        newElem.find('.last_name_label').attr('for', 'last_name' + newNum);
        newElem.find('.last_name').attr('id', 'last_name' + newNum ).attr('name', 'last_name' + newNum ).val('');

        // email
        newElem.find('.email_label').attr('for', 'email' + newNum);
        newElem.find('.email').attr('id', 'email' + newNum).attr('name', 'email' + newNum).val('');

        // textarea
        newElem.find('.restrictions_label').attr('for', 'restrictions' + newNum);
        newElem.find('.restrictions').attr('id', 'restrictions' + newNum).attr('name', 'restrictions' + newNum).val('');

        // insert the new element after the last "duplicatable" input field
        $('#testingDiv' + num).after(newElem);

        // enable the "remove" button
        $('#btnDel').attr('disabled', false);

        // right now you can only add 5 sections. change '5' below to the max number of times the form can be duplicated
        if (newNum == 5) $('#btnAdd').attr('disabled', true).prop('value', "You've reached the limit");
    });

    $('#btnDel').click(function () {
        // confirmation
        if (confirm("Are you sure you wish to remove this section of the form? Any information it contains will be lost!")) {
            var num = $('.clonedInput').length;
            // how many "duplicatable" input fields we currently have
            $('#testingDiv' + num).slideUp('slow', function () {
                $(this).remove();
                // if only one element remains, disable the "remove" button
                if (num - 1 === 1) $('#btnDel').attr('disabled', true);
                // enable the "add" button
                $('#btnAdd').attr('disabled', false).prop('value', "[ + ] add to this form");
            });
        }
        return false;
        // remove the last element

        // enable the "add" button
        $('#btnAdd').attr('disabled', false);
    });

    $('#btnDel').attr('disabled', true);
});