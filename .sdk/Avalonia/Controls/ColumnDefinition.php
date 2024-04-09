<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ColumnDefinitionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Double|double $value
	 * @param \Avalonia\Controls\GridUnitType $type
	 */
	#[MethodOverride]public function __construct_2 ($value, $type){}
	/**
	 * @param \Avalonia\Controls\GridLength $width
	 */
	#[MethodOverride]public function __construct_3 ($width){}
}
class ColumnDefinition extends \Avalonia\Controls\DefinitionBase implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	use ColumnDefinitionOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $MaxWidthProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $MinWidthProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\GridLength]
	 */
	public static $WidthProperty;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_parentIndex;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $ActualWidth;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $MaxWidth;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $MinWidth;
	/**
	 * @property
	 * @var \Avalonia\Controls\GridLength
	 */
	public $Width;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $SharedSizeGroup;
	/**
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @uses ColumnDefinitionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses ColumnDefinitionOverride::__construct_2 <br>public , args: ($value, $type)<br>
	 * @uses ColumnDefinitionOverride::__construct_3 <br>public , args: ($width)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}