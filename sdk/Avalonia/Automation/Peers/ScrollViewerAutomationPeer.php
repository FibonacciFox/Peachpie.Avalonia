<?php
namespace Avalonia\Automation\Peers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ScrollViewerAutomationPeerMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\ScrollViewer
	 */
	#[MethodOverride] public  function get_Owner_1(){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride] public  function get_Owner_2(){}
}
/**
 */
class ScrollViewerAutomationPeer extends \Avalonia\Automation\Peers\ControlAutomationPeer implements 
	\Avalonia\Automation\Provider\IScrollProvider
{
	/**
	 * @var \Avalonia\Controls\ScrollViewer
	 * @property
	 */
	public readonly $Owner;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HorizontallyScrollable;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $HorizontalScrollPercent;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $HorizontalViewSize;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $VerticallyScrollable;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $VerticalScrollPercent;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $VerticalViewSize;
	/**
	 * @uses ScrollViewerAutomationPeerMethodsOverride::get_Owner_1 ()
	 * @uses ScrollViewerAutomationPeerMethodsOverride::get_Owner_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Owner(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HorizontallyScrollable(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_HorizontalScrollPercent(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_HorizontalViewSize(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_VerticallyScrollable(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_VerticalScrollPercent(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_VerticalViewSize(){}
	/**
	 * @param \Avalonia\Automation\Provider\ScrollAmount $horizontalAmount
	 * @param \Avalonia\Automation\Provider\ScrollAmount $verticalAmount
	 * @return \System\Void|void
	 */
	public  function Scroll($horizontalAmount, $verticalAmount){}
	/**
	 * @param \System\Double|double $horizontalPercent
	 * @param \System\Double|double $verticalPercent
	 * @return \System\Void|void
	 */
	public  function SetScrollPercent($horizontalPercent, $verticalPercent){}
}
