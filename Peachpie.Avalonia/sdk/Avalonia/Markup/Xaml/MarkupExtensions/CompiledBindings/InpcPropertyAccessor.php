<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings;
/**
 */
class InpcPropertyAccessor extends \Avalonia\Data\Core\Plugins\PropertyAccessorBase implements 
	\Avalonia\Data\Core\Plugins\IPropertyAccessor,
	\System\IDisposable,
	\Avalonia\Utilities\IWeakEventSubscriber_1
{
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Utilities\WeakEvent $ev
	 * @param \System\ComponentModel\PropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	public  function OnEvent($sender, $ev, $e){}
	/**
	 * @return \System\Void|void
	 */
	protected  function SendCurrentValue(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SubscribeToChanges(){}
}
