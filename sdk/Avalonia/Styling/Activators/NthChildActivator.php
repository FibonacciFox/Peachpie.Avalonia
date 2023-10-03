<?php
namespace Avalonia\Styling\Activators;
/**
 */
class NthChildActivator extends \Avalonia\Styling\Activators\StyleActivatorBase implements 
	\Avalonia\Styling\Activators\IStyleActivator,
	\System\IDisposable
{
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\LogicalTree\ChildIndexChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ChildIndexChanged($sender, $e){}
}
