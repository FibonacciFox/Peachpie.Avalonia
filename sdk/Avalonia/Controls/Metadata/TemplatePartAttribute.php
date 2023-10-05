<?php
namespace Avalonia\Controls\Metadata;
/**
 */
class TemplatePartAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public $Name;
	/**
	 * @var \System\Type
	 * @property
	 */
	public $Type;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Name($value){}
	/**
	 * @return \System\Type
	 */
	public  function get_Type(){}
	/**
	 * @param \System\Type $value
	 * @return \System\Void|void
	 */
	public  function set_Type($value){}
}
