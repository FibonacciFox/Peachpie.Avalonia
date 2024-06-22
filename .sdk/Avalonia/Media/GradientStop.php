<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait GradientStopOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Media\Color $color
	 * @param \System\Double|double $offset
	 */
	#[MethodOverride]public function __construct_2 ($color, $offset){}
}
final class GradientStop extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IGradientStop
{
	use GradientStopOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $OffsetProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Color]
	 */
	public static $ColorProperty;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Offset;
	/**
	 * @property
	 * @var \Avalonia\Media\Color
	 */
	public $Color;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @uses GradientStopOverride::__construct_1 <br>public , args: ()<br>
	 * @uses GradientStopOverride::__construct_2 <br>public , args: ($color, $offset)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}