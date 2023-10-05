<?php
namespace Avalonia\Styling\Activators;
/**
 */
class NotActivator extends \Avalonia\Styling\Activators\StyleActivatorBase implements 
	\Avalonia\Styling\Activators\IStyleActivator,
	\System\IDisposable,
	\Avalonia\Styling\Activators\IStyleActivatorSink
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSubscribed;
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnNext($value){}
}
