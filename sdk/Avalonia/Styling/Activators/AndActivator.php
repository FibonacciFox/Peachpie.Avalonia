<?php
namespace Avalonia\Styling\Activators;
/**
 */
class AndActivator extends \Avalonia\Styling\Activators\StyleActivatorBase implements 
	\Avalonia\Styling\Activators\IStyleActivator,
	\System\IDisposable,
	\Avalonia\Styling\Activators\IStyleActivatorSink
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSubscribed;
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
