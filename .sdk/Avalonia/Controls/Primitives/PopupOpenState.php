<?php
namespace Avalonia\Controls\Primitives;
class PopupOpenState extends \System\Object implements
	\System\IDisposable
{

	/**
	 * @property
	 * @var \Avalonia\Controls\TopLevel
	 * @since readonly
	 */
	public $TopLevel;
	/**
	 * @property
	 * @var \Avalonia\Controls\Control
	 */
	public $PlacementTarget;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\IPopupHost
	 * @since readonly
	 */
	public $PopupHost;
	/**
	 * @param \System\IDisposable $presenterCleanup
	 * @return \System\Void|void
	 */
	public function SetPresenterSubscription($presenterCleanup){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\Controls\Control $placementTarget
	 * @param \Avalonia\Controls\TopLevel $topLevel
	 * @param \Avalonia\Controls\Primitives\IPopupHost $popupHost
	 * @param \System\IDisposable $cleanup
	 */
	public function __construct($placementTarget, $topLevel, $popupHost, $cleanup){}
}