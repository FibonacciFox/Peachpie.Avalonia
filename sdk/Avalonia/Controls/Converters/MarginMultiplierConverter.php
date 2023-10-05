<?php
namespace Avalonia\Controls\Converters;
/**
 */
class MarginMultiplierConverter extends \System\Object implements 
	\Avalonia\Data\Converters\IValueConverter
{
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Indent;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Left;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Top;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Right;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Bottom;
	/**
	 * @return \System\Double|double
	 */
	public  function get_Indent(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Indent($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Left(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Left($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Top(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Top($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Right(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Right($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Bottom(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Bottom($value){}
	/**
	 * @param \System\Object|object $value
	 * @param \System\Type $targetType
	 * @param \System\Object|object $parameter
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	public  function Convert($value, $targetType, $parameter, $culture){}
	/**
	 * @param \System\Object|object $value
	 * @param \System\Type $targetType
	 * @param \System\Object|object $parameter
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	public  function ConvertBack($value, $targetType, $parameter, $culture){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
