<?php
namespace Avalonia\Controls\PullToRefresh;
class ScrollViewerIRefreshInfoProviderAdapter extends \System\Object
{


	/**
	 * @param \Avalonia\Visual $root
	 * @param \System\Nullable_1 $refreshVIsualizerSize [generic: Avalonia\Size]
	 * @return \Avalonia\Controls\PullToRefresh\RefreshInfoProvider
	 */
	public function AdaptFromTree($root, $refreshVIsualizerSize){}
	/**
	 * @param \Avalonia\Controls\ScrollViewer $adaptee
	 * @param \System\Nullable_1 $refreshVIsualizerSize [generic: Avalonia\Size]
	 * @return \Avalonia\Controls\PullToRefresh\RefreshInfoProvider
	 */
	public function Adapt($adaptee, $refreshVIsualizerSize){}
	private function ScrollViewer_ScrollChanged($sender, $e){}
	/**
	 * @param \Avalonia\Controls\RefreshVisualizer $refreshVisualizer
	 * @return \System\Void|void
	 */
	public function SetAnimations($refreshVisualizer){}
	private function ScrollViewer_Loaded($sender, $e){}
	private function MakeInteractionSource($element){}
	private function ScrollViewer_PointerReleased($sender, $e){}
	private function ScrollViewer_PointerPressed($sender, $e){}
	private function IsWithinOffsetThreashold(){}
	private function CleanUpScrollViewer(){}
	/**
	 * @param \Avalonia\Input\PullDirection $pullDirection
	 */
	public function __construct($pullDirection){}
}