<?php
namespace Avalonia\Styling\Activators;
/**
 */
class OrActivator extends \Avalonia\Styling\Activators\StyleActivatorBase implements 
	\Avalonia\Styling\Activators\IStyleActivator,
	\System\IDisposable,
	\Avalonia\Styling\Activators\IStyleActivatorSink
{
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \Avalonia\Styling\Activators\IStyleActivator $activator
	 * @return \System\Void|void
	 */
	public  function Add($activator){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnNext($value){}
}
