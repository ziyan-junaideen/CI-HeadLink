<?php 
/**
 * HeadLink
 *
 * HeadScript is a script loading library built for the CodeIgniter platform.
 * The following file contains CSS/HTML shamelessly stolen from CodeIgniter
 * welcome view for the sake of maintaining consistancy.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Academic Free License version 3.0
 *
 * This source file is subject to the Academic Free License (AFL 3.0) is also 
 * available through the world wide web at this URL:
 * http://opensource.org/licenses/AFL-3.0
 * 
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * jdeen-solutions@outlook.com so we can send you a copy immediately.
 *
 * @package		HeadScript
 * @author		Ziyan Junaideen - JDeen Solutions
 * @copyright	Copyright (c) 2013, Ziyan Juniadeen. (http://jdeen.com/)
 * @license		http://opensource.org/licenses/AFL-3.0 Academic Free License (AFL 3.0)
 * @link		http://jdeen.com
 * @filesource
 */

if (!defined('BASEPATH')) exit('No direct access to scripts allowed');

class Head_link {
	public $links = array();

	public function append($links){
		if (is_array($links)){
			foreach($links as $link){
				$this->links[] = $link;
			}
		}
		else {
			$this->links[] = $links;
		}
		return $this;
	}

	public function prepend($links){
		if (is_array($links)){
			foreach($links as $link){
				array_unshift($this->links, $link);
			}
		}
		else {
			array_unshift($this->links, $links);
		}
		return $this;
	}

	public function getHtml(){
		$html = "";

		foreach($this->links as $link){
			$html = $html . "<link rel=\"stylesheet\" type=\"text/css\" href=\"$link\">\r\n";
		}

		return $html;
	}
}