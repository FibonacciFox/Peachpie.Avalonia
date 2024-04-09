<?php
namespace Avalonia\Media;
class Drawing extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \Avalonia\Media\DrawingContext $context
	 * @return \System\Void|void
	 */
	public function Draw($context){}
	/**
	 * @param \Avalonia\Media\DrawingContext $context
	 * @return \System\Void|void
	 */
	abstract protected function DrawCore($context);
	/**
	 * @return \Avalonia\Rect
	 */
	abstract public function GetBounds();
	private function GetPropertyChangedSubscribers(){}
}