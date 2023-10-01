<?php
namespace Avalonia\Controls\PullToRefresh;
/**
 */
class ScrollViewerIRefreshInfoProviderAdapter extends \System\Object
{
	/**
	 * @param \Avalonia\Visual $root
	 * @param \System\Nullable_1 $refreshVIsualizerSize
	 * @return \Avalonia\Controls\PullToRefresh\RefreshInfoProvider
	 */
	public  function AdaptFromTree($root, $refreshVIsualizerSize){}
	/**
	 * @param \Avalonia\Controls\ScrollViewer $adaptee
	 * @param \System\Nullable_1 $refreshVIsualizerSize
	 * @return \Avalonia\Controls\PullToRefresh\RefreshInfoProvider
	 */
	public  function Adapt($adaptee, $refreshVIsualizerSize){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Controls\ScrollChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ScrollViewer_ScrollChanged($sender, $e){}
	/**
	 * @param \Avalonia\Controls\RefreshVisualizer $refreshVisualizer
	 * @return \System\Void|void
	 */
	public  function SetAnimations($refreshVisualizer){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ScrollViewer_Loaded($sender, $e){}
	/**
	 * @param \Avalonia\Input\InputElement $element
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MakeInteractionSource($element){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\PointerReleasedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ScrollViewer_PointerReleased($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ScrollViewer_PointerPressed($sender, $e){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsWithinOffsetThreashold(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CleanUpScrollViewer(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
