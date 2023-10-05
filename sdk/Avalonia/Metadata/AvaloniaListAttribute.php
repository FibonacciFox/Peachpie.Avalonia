<?php
namespace Avalonia\Metadata;
/**
 */
class AvaloniaListAttribute extends \System\Attribute
{
	/**
	 * @var \System\String[]
	 * @property
	 */
	public $Separators;
	/**
	 * @var \System\StringSplitOptions
	 * @property
	 */
	public $SplitOptions;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String[]
	 */
	public  function get_Separators(){}
	/**
	 * @param \System\String[] $value
	 * @return \System\Void|void
	 */
	public  function set_Separators($value){}
	/**
	 * @return \System\StringSplitOptions
	 */
	public  function get_SplitOptions(){}
	/**
	 * @param \System\StringSplitOptions $value
	 * @return \System\Void|void
	 */
	public  function set_SplitOptions($value){}
}
