///////////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                       //
//                                          PHPAlert Gadget                                              //
//                                                                                                       //
//          Easily implement user friendly alerts in your PHP projects with this gadget.                 //
//                                                                                                       //
//          PHPAlert Gadget - Copyright (c) 2017 Gabriel Valentoni Guelfi                                //
//                                                                                                       //
//          >>> CONTACT DEVELOPER:                                                                       //
//          >>> Gabriel Guelfi                                                                           //
//          >>> Website: http://gabrielguelfi.com.br                                                     //
//          >>> Email: gabriel.valguelfi@gmail.com                                                       //
//          >>> Skype: gabriel-guelfi                                                                    //
//                                                                                                       //
//                                                                                                       //
//          This file is part of PHPAlert Gadget.                                                        //
//                                                                                                       //
//          PHPAlert Gadget is free software: you can redistribute it and/or modify                      //
//          it under the terms of the GNU General Public License as published by                         //
//          the Free Software Foundation, either version 3 of the License.                               //
//                                                                                                       //
//          PHPAlert Gadget is distributed in the hope that it will be useful,                           //
//          but WITHOUT ANY WARRANTY; without even the implied warranty of                               //
//          MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the                                //
//          GNU General Public License for more details.                                                 //
//                                                                                                       //
//          You should have received a copy of the GNU General Public License                            //
//          along with this copy of PHPAlert Gadget under the name of LICENSE.pdf.                       //
//          If not, see <http://www.gnu.org/licenses/>.                                                  //
//                                                                                                       //
//          Using, modifying and/or running this software or any of its contents, implies consent        //
//          to the terms and conditions explicit within the license, mentioned above.                    //
//                                                                                                       //
///////////////////////////////////////////////////////////////////////////////////////////////////////////

// Set a timeout to close an alert automatically.
function timeout(alert) {
    setTimeout(function () {
        alert.find('.close-alert').click();
    }, 3000);
}

// Close an alert and show the next one, if it is there.
function closeAlert(alert) {
    alert.fadeOut(300, function () {
        var index = alert.attr('data-index');
        alert.remove();

        if (jQuery('.alert').length > 0) {
            var next = jQuery('.alert[data-index="' + (parseInt(index) + 1).toString() + '"]');
            next.show();

            timeout(next);
        }
    });
}

jQuery(document).ready(function () {
    // Bind function closeAlert() to the click event of close buttons in alerts.
    jQuery('.close-alert').click(function () {
        closeAlert(jQuery(this).parent());
    });

    var first = jQuery('.alert[data-index="0"]');
    first.show();
    // Call closeAlert(), for the first alert in queue, after 3 seconds since the document is ready.
    timeout(first);
});