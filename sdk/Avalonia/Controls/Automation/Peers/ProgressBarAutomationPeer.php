<?php
namespace Avalonia\Controls\Automation\Peers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ProgressBarAutomationPeerMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function SetValue_1($val){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_2($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function get_IsReadOnly_2(){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] private  function get_LargeChange_1(){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public  function get_LargeChange_2(){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] private  function get_SmallChange_1(){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public  function get_SmallChange_2(){}
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
class ProgressBarAutomationPeer extends \Avalonia\Automation\Peers\RangeBaseAutomationPeer implements 
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
	 * @uses ProgressBarAutomationPeerMethodsOverride::SetValue_1 ($val)
	 * @uses ProgressBarAutomationPeerMethodsOverride::SetValue_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses ProgressBarAutomationPeerMethodsOverride::get_IsReadOnly_1 ()
	 * @uses ProgressBarAutomationPeerMethodsOverride::get_IsReadOnly_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_IsReadOnly(mixed ...$args){}
	/**
	 * @uses ProgressBarAutomationPeerMethodsOverride::get_LargeChange_1 ()
	 * @uses ProgressBarAutomationPeerMethodsOverride::get_LargeChange_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_LargeChange(mixed ...$args){}
	/**
	 * @uses ProgressBarAutomationPeerMethodsOverride::get_SmallChange_1 ()
	 * @uses ProgressBarAutomationPeerMethodsOverride::get_SmallChange_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_SmallChange(mixed ...$args){}
	/**
	 * @uses ProgressBarAutomationPeerMethodsOverride::get_Owner_1 ()
	 * @uses ProgressBarAutomationPeerMethodsOverride::get_Owner_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Owner(mixed ...$args){}
}
