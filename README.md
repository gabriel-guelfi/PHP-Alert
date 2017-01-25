# PHPAlert v 0.1 Stable #

Easily implement user friendly alerts in your PHP projects with this gadget.


### How do I get set up? ###

Simply put "phpalert" folder in any directory within your project, include the PHPAlert class, then instantiate a PHPAlert object, passing the URL, in which you placed the folder, to the constructor method.

Example:

```
#!php
<?php
include $_SERVER["DOCUMENT_ROOT"]."/mysite/gadgets/phpalert/class.phpalert.php";
$alert = new PHPAlert("http://www.mysite.com/gadgets");
?>
```

### Setting up an alert ###

With the PHPAlert object settled, call add() method, passing alert's message and type.

Example:

```
#!php
<?php
$alert->add("Hello World", "warning"); // You can add as many alerts you need. The gadget will create a queue with them.
?>
```
Alert types supported:

* warning
* success
* failure

### Showing up alerts queue ###

Call method show().

Example:

```
#!php
<?php
$alert->show();
?>
```
It will show the alerts registered in the queue, one by one. Each alert shown, takes 3 seconds to disappear automatically, then the next alert in queue will show up. And so on...

### Who am i? ###

My name is Gabriel Valentoni Guelfi. I'm an I.T. professional, specialized in PHP and web development. And a technology enthusiastic.

#### Contact me: ####
* Skype: gabriel-guelfi
* Email: gabriel.valguelfi@gmail.com
* Website: [gabrielguelfi.com.br](http://gabrielguelfi.com.br)
* Blog: [Develog](http://blog.gabrielguelfi.com.br)
* Linkedin: [Gabriel Guelfi](https://br.linkedin.com/in/gabriel-valentoni-guelfi-30ba8b4b)