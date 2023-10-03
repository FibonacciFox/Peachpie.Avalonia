<?php
namespace Avalonia\Media;
/**
 */
class MediaExtensions extends \System\Object
{
	/**
	 * @param \Avalonia\Media\Stretch $stretch
	 * @param \Avalonia\Size $destinationSize
	 * @param \Avalonia\Size $sourceSize
	 * @param \Avalonia\Media\StretchDirection $stretchDirection
	 * @return \Avalonia\Vector
	 */
	public static function CalculateScaling($stretch, $destinationSize, $sourceSize, $stretchDirection){}
	/**
	 * @param \Avalonia\Media\Stretch $stretch
	 * @param \Avalonia\Size $destinationSize
	 * @param \Avalonia\Size $sourceSize
	 * @param \Avalonia\Media\StretchDirection $stretchDirection
	 * @return \Avalonia\Size
	 */
	public static function CalculateSize($stretch, $destinationSize, $sourceSize, $stretchDirection){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
