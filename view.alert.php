<?php
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
?>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="<?php echo $uri; ?>/alert.js"></script>
<link rel="stylesheet" href="<?php echo $uri; ?>/alert.css">
<?php
// Shows all alerts setted in dialogs to user.(See Alert::add method).
if (!empty($_SESSION['alerts'])):
    $i = 0;
    foreach ($_SESSION['alerts'] as $alert):
        ?>
        <div class="alert alert-<?php echo $alert->type; ?>" data-index="<?php echo $i; ?>">
            <img src="<?php echo $uri; ?>/img/alert-<?php echo $alert->type; ?>.png">
            <span title="Close alert" class="close-alert">[X]</span>
            <p><?php echo $alert->msg; ?></p>
        </div>
        <?php
        unset($_SESSION['alerts'][$i]);
        $i++;
    endforeach;
endif;
?>