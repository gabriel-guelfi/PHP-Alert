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

class PHPAlert {

    private $uri;
    
    // Construct Method. Initiate a session and register root uri for the gadget.
    public function __construct($uri = "") {
        session_start();
        @$dir = end(explode("/",__DIR__));
        $this->uri = (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] != "off" ? "https" : "http")."://".$_SERVER["SERVER_NAME"].$uri."/".$dir."/";
    }

    // Register a new alert in the queue.
    public function add($msg, $type = "warning") {
        $_SESSION['alerts'][] = (object) array(
                    "type" => $type,
                    "msg" => $msg
        );
    }

    // Show all alerts registered in the queue.
    public function show() {
        $uri = $this->uri;
        
        include __DIR__ . "/view.alert.php";

        if (empty($_SESSION['alerts']))
            unset($_SESSION['alerts']);
    }

}

?>