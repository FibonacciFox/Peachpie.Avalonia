<?php
namespace System\ComponentModel;
class PropertyChangingEventArgs extends \System\EventArgs
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $PropertyName;
	/**
	 * @param \System\String|string $propertyName
	 */
	public function __construct($propertyName){}
}