<?php
namespace Avalonia\PropertyStore;
class FramePriorityExtensions extends \System\Object
{


	/**
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @param \Avalonia\PropertyStore\FrameType $type
	 * @return \Avalonia\PropertyStore\FramePriority
	 */
	public static function ToFramePriority($priority, $type){}
	/**
	 * @param \Avalonia\PropertyStore\FramePriority $priority
	 * @param \Avalonia\PropertyStore\FrameType $type
	 * @return \System\Boolean|bool
	 */
	public static function IsType($priority, $type){}
}