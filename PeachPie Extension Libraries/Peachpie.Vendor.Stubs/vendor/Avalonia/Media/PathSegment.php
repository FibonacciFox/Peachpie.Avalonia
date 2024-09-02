<?php
namespace Avalonia\Media;
class PathSegment extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \Avalonia\Media\StreamGeometryContext $ctx
	 * @return \System\Void|void
	 */
	abstract protected function ApplyTo($ctx);
	private function GetPropertyChangedSubscribers(){}
}