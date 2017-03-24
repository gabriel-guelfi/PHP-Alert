# PHPAlert v 0.1 Stable #

Easily implement user friendly alerts in your PHP projects with this gadget.

![Screenshot from 2017-03-24 20-07-48.png](https://bitbucket.org/repo/eza8aa/images/1883293778-Screenshot%20from%202017-03-24%2020-07-48.png)


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



## Customization ##
** How do i create my own alert types? **

First of all, we open the file named "alert.css" on PHPAlert's root and put the CSS code bellow inside it:
```
#!css
.alert-my-alert-type{
    background-color:#C7C7FF;
    color:#000099;
    border:2px solid #000099;
}
```
Now we take a PNG image we want to represent our custom alert type and put it inside "/img" folder, which is located at the root PHPAlert directory, with the same name of CSS class that we created above, preceded by "alert-". For example:

![alert-blue.png](http://blog.gabrielguelfi.com.br/wp-content/uploads/2017/01/alert-blue-300x300.png)
*... /phpalert/img/my-alert-type.png*

Done and done! Now we just need to add our custom type alert, passing the type name("my-alert-type"), and show it to viewer:

```
#!php
<?php
$alert->add("An alert message with blued custom type", "my-alert-type"); // Note that the name of alert type is the same that the name of our CSS class, without "alert-".
$alert->show();
?>
```

We shall see something like this:

![Screenshot from 2017-03-24 20-30-26.png](https://bitbucket.org/repo/eza8aa/images/3838715810-Screenshot%20from%202017-03-24%2020-30-26.png)


=]




### Who am i? ###

My name is Gabriel Valentoni Guelfi. I'm an I.T. professional, specialized in PHP and web development. And a technology enthusiastic.

#### Contact me: ####
* Skype: gabriel-guelfi
* Email: gabriel.valguelfi@gmail.com
* Website: [gabrielguelfi.com.br](http://gabrielguelfi.com.br)
* Blog: [Develog](http://blog.gabrielguelfi.com.br)
* Linkedin: [Gabriel Guelfi](https://br.linkedin.com/in/gabriel-valentoni-guelfi-30ba8b4b)