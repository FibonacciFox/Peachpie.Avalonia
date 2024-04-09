<?php
namespace Avalonia\Controls;
class NameScope extends \System\Object implements
	\Avalonia\Controls\INameScope
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\INameScope]
	 */
	public static $NameScopeProperty;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsCompleted;
	/**
	 * @param \Avalonia\StyledElement $styled
	 * @return \Avalonia\Controls\INameScope
	 */
	public static function GetNameScope($styled){}
	/**
	 * @param \Avalonia\StyledElement $styled
	 * @param \Avalonia\Controls\INameScope $value
	 * @return \System\Void|void
	 */
	public static function SetNameScope($styled, $value){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Object|object $element
	 * @return \System\Void|void
	 */
	public function Register($name, $element){}
	/**
	 * @param \System\String|string $name
	 * @return \Avalonia\Utilities\SynchronousCompletionAsyncResult_1[System\Object]
	 */
	public function FindAsync($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Object|object
	 */
	public function Find($name){}
	/**
	 * @return \System\Void|void
	 */
	public function Complete(){}
	/**
	 */
	public function __construct(){}
}