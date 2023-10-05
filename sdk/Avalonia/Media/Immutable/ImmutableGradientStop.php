<?php
namespace Avalonia\Media\Immutable;
/**
 */
class ImmutableGradientStop extends \System\Object implements 
	\Avalonia\Media\IGradientStop
{
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Offset;
	/**
	 * @var \Avalonia\Media\Color
	 * @property
	 */
	public readonly $Color;
	/**
	 * @return \System\Double|double
	 */
	public  function get_Offset(){}
	/**
	 * @return \Avalonia\Media\Color
	 */
	public  function get_Color(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
