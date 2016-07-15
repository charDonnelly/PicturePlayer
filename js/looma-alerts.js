/*
 javascript code file
 Filename: looma-alerts.js
 Description: Creates a styled translatable popup interface.
 NOTES: All methods support prompts/alerts in either text or html. If using either, any text can be converted into
 Looma's translatable spans using the provided generateTranslatableSpans() button.

 Programmer name: Thomas Woodside, Charlie Donnelly, and Sam Rosenberg
 Email: thomas.woodside@gmail.com, charlie.donnelly@menloschool.org, sam.rosenberg@menloschool.org
 Owner: VillageTech Solutions (villagetechsolutions.org)
 Date: 7/5/16
 Revision: 0.3
 */

/**
 * This function creates a popup message box that can be dismissed by the user.
 * @param msg - The message the user is presented.
 * @param time (optional)- a delay in seconds after which the popup is automatically closed
 * */
var popupInterval;
alert = function(msg, time){
    closePopup();
    $(document.body).append("<div class= 'popup clicked-dismissal'>" +
        "<button class='popup-button' id='dismiss-popup'><b>X</b></button>"+ msg +
        "<button id ='close-popup' class ='popup-button'>" + generateTranslatableSpans("OK", "ठिक छ") + "</button></div>");
    fadeInPopup();
    if (time) {
        var timeLeft = time - 1;
        var popupButton = $('#close-popup');
        popupButton.html(generateTranslatableSpans("OK (" + Math.round(timeLeft + 1) + ")",
            "ठिक छ(" + Math.round(timeLeft + 1) + ")"));
        clearInterval(popupInterval);
        popupInterval = setInterval(function() {
            if (timeLeft <= 0) {
                clearInterval(popupInterval);
                closePopup();
            }
            timeLeft -= 1;
            popupButton.html(generateTranslatableSpans("OK (" + Math.round(timeLeft + 1) + ")",
                "ठिक छ(" + Math.round(timeLeft + 1) + ")"));
        },1000);
    }
    $('#close-popup').click(function() {
        closePopup();
    });
    $('#dismiss-popup').click(function() {
        closePopup();
    });
};

/**
 * Prompts the user to confirm a message.
 * @param msg - The message the user is presented in question format.
 * @param confirmed - A function to call if the user confirms
 * @param canceled - A function to call if the user cancels
 * */
confirm = function(msg, confirmed, canceled) {
    closePopup();
    $(document.body).append("<div class='popup confirmation'>" +
        "<button class='popup-button' id='dismiss-popup'><b>X</b></button> " + msg +
        "<button id='cancel-popup' class='popup-button'>" + generateTranslatableSpans("cancel", "रद्द गरेर") + "</button>" +
        "<button id='confirm-popup' class='popup-button'>"+ generateTranslatableSpans("confirm", "निश्चय गर्नुहोस्") +"</button></div>");
    fadeInPopup();
    $('#cancel-popup').click(function() {
        closePopup();
        canceled();
    });
    $('#confirm-popup').click(function() {
        closePopup();
        confirmed();
    });
    $('#dismiss-popup').click(function() {
        closePopup();
        canceled();
    });
};

/**
 * Prompts the user to enter text.
 * @param msg - The message the user is presented, prompting them to enter text.
 * @param callback - A function where the user's text response will be sent.
 * */
prompt = function(msg, callback) {
    closePopup();
    $(document.body).append("<div class='popup textEntry'>" +
        "<button class='popup-button' id='dismiss-popup'><b>X</b></button>" + msg +
        "<textarea id='popup-textarea'></textarea>" +
        "<button id='confirm-popup' class='popup-button'>"+ generateTranslatableSpans("OK", "ठिक छ") +"</button></div>");

    fadeInPopup();
    $('#confirm-popup').click(function() {
        callback($('#popup-textarea').val());
        closePopup();
    });
    $('#dismiss-popup').click(function() {
        closePopup();
        callback(null);
    });
};


/**
 * Removes any popups on the page.
 * */
closePopup = function() {
    $('.popup').remove();
};

/**
 * Fades in the popup
 * */
fadeInPopup = function () {
    $( ".popup" ).fadeIn();
};

/**
 * Generates translatable spans given english and native translations. You will need to know the native translation;
 * this program doesn't do any translation.
 * @param english
 * @param native
 * */
generateTranslatableSpans = function(english, native){
    var language = LOOMA.readStore('language', 'local');
    if (language == "english") {
        return "<span class='english-keyword'>" + english +
            "<span class='xlat'>" + native + "</span>" + "</span>" +
            "<span class='native-keyword' hidden>"
            + native +
            "<span class='xlat'>" + english + "</span>" +
            "</span>";
    }
    return "<span class='english-keyword' hidden>" + english +
        "<span class='xlat'>" + native + "</span>" + "</span>" +
        "<span class='native-keyword'>"
        + native +
        "<span class='xlat'>" + english + "</span>" +
        "</span>";
};