<?php
namespace Avalonia\Controls\Converters;
class MarginMultiplierConverter extends \System\Object implements
	\Avalonia\Data\Converters\IValueConverter
{

	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Indent;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Left;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Top;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Right;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Bottom;
	/**
	 * @param \System\Object|object $value
	 * @param \System\Type $targetType
	 * @param \System\Object|object $parameter
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	public function Convert($value, $targetType, $parameter, $culture){}
	/**
	 * @param \System\Object|object $value
	 * @param \System\Type $targetType
	 * @param \System\Object|object $parameter
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	public function ConvertBack($value, $targetType, $parameter, $culture){}
	/**
	 */
	public function __construct(){}
}