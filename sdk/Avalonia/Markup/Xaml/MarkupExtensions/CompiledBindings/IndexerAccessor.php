<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait IndexerAccessorMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function OnEvent_1($sender, $ev, $args){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function OnEvent_2($sender, $ev, $e){}
}
/**
 */
class IndexerAccessor extends \Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\InpcPropertyAccessor implements 
	\Avalonia\Data\Core\Plugins\IPropertyAccessor,
	\System\IDisposable,
	\Avalonia\Utilities\IWeakEventSubscriber_1,
	\Avalonia\Utilities\IWeakEventSubscriber_1
{
	/**
	 * @var \System\WeakReference_1[System\Object]
	 * @field
	 */
	protected readonly $_reference;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $PropertyType;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Value;
	/**
	 * @uses IndexerAccessorMethodsOverride::OnEvent_1 ($sender, $ev, $args)
	 * @uses IndexerAccessorMethodsOverride::OnEvent_2 ($sender, $ev, $e)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnEvent(mixed ...$args){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ShouldNotifyListeners($e){}
}
