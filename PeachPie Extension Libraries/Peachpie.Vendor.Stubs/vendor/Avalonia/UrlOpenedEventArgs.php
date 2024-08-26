<?php
namespace Avalonia;
class UrlOpenedEventArgs extends \System\EventArgs
{
	/**
	 * @property
	 * @var \System\String[]|array
	 * @since readonly
	 */
	public $Urls;
	/**
	 * @param \System\String $urls
	 */
	public function __construct($urls){}
}