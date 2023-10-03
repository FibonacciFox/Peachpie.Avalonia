<?php
namespace Avalonia\Controls;
/**
 */
class ChildNameScope extends \System\Object implements 
	\Avalonia\Controls\INameScope
{
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
	 * @return \Avalonia\Utilities\SynchronousCompletionAsyncResult_1
	 */
	public  function DoFindAsync($name){}
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
	 * @return \System\Boolean
	 */
	public  function get_IsCompleted(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
