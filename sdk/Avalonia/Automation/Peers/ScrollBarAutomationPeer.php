<?php
namespace Avalonia\Automation\Peers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ScrollBarAutomationPeerMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\Primitives\RangeBase
	 */
	#[MethodOverride] public  function get_Owner_1(){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride] public  function get_Owner_2(){}
}
/**
 */
class ScrollBarAutomationPeer extends \Avalonia\Automation\Peers\RangeBaseAutomationPeer implements 
	\Avalonia\Automation\Provider\IRangeValueProvider
{
	/**
	 * @var \Avalonia\Controls\Primitives\RangeBase
	 * @property
	 */
	public readonly $Owner;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReadOnly;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Maximum;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Minimum;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $SmallChange;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $LargeChange;
	/**
	 * @uses ScrollBarAutomationPeerMethodsOverride::get_Owner_1 ()
	 * @uses ScrollBarAutomationPeerMethodsOverride::get_Owner_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Owner(mixed ...$args){}
}
