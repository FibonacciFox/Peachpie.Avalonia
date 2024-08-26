<?php
namespace Avalonia\Rendering;
class RendererDiagnostics extends \System\Object implements
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @property
	 * @var \Avalonia\Rendering\RendererDebugOverlays
	 */
	public $DebugOverlays;
	/**
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public function add_PropertyChanged($value){}
	/**
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_PropertyChanged($value){}
	/**
	 * @param \System\ComponentModel\PropertyChangedEventArgs $args
	 * @return \System\Void|void
	 */
	protected function OnPropertyChanged($args){}
	/**
	 */
	public function __construct(){}
}