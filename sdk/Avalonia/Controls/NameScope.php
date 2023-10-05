<?php
namespace Avalonia\Controls;
/**
 */
class NameScope extends \System\Object implements 
	\Avalonia\Controls\INameScope
{
	/**
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\INameScope]
	 * @field
	 */
	public readonly $NameScopeProperty;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsCompleted;
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCompleted(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_IsCompleted($value){}
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
	public  function Register($name, $element){}
	/**
	 * @param \System\String|string $name
	 * @return \Avalonia\Utilities\SynchronousCompletionAsyncResult_1
	 */
	public  function FindAsync($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Object|object
	 */
	public  function Find($name){}
	/**
	 * @return \System\Void|void
	 */
	public  function Complete(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
