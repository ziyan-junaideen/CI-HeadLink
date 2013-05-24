# CI-HeadLink (Sibling of CI-HeadScript)

## History
Without history, not every thing makes sense...

#### Little bit about me...
My history with PHP is considerably long. I wrote my first script app just 
over 6 years ago. I even developed my own mini CodeIgniter (MVC) to accelarate
my web development work. But I some how fell in love with Zend Framework 2 
for the degree of flexibility (except shared hosting) it provided. A week ago
I decided to get my website using CodeIgniter, it was easy but less fully equiped.

#### Some thing Zend has but don't seem to be with CI

In Zend Framework, I use the ViewHelperManager taken from the ServiceLocater 
to append CSS/JS in the controller. Its kind of my way of doing it. But I found
that there was no such way to handle it in CI, but some thing similar is
remakably simple to implent and here is CI-HeadLink.

#### What is HeadScript

HeadLink is a script loading library for code igniter inspired by
the functionality found in Zend Framework 2. I tried to find similar
functionality and many forum posts seem to be saying 'include it in the
view'.

Not happy about the advice, here comes a free simple script loading 
library for CodeIgniter. Useage is simple, load the library, append scripts
and echo out the html generated.

## Installation and Usage

Using HeadScript is simple, here is an example: 

1. First Copy Head_link.php to your libraries directory. The file would be under the libraries directory in this repo.
2. Then load the library in the controller
3. Then append files to the library
4. At the view, echo the html output... Thats it

````PHP
	// File - MyController.php
	// Load Library, many ways to do so...
	public function index(){
		$this->load->library('head_link');
		
		$this->head_link->append('css-1.css');
		$this->head_link->append('css-2.css');
		
		// Or simply chain it
		$this->head_link->append('css-1.css')->append('css-2.css');
		
		// Rest of your code for the controller
	}
````
Then in the view...

````PHP
	<!-- Your HTML Code before scripts -->
	
	<?php echo $this->head_link->getHtml(); ?>
	
	<!-- Your html code after scripts -->
````

I don't think this needs a user guide, but for completeness sake I will produce
one in due time. It would be able to obtained via the GitHub repo and would be
possibly hosted in my website <a href="http://www.jdeen.com">JDeen.com</a> once
I finish with it!
