<?php
namespace Avalonia\Metadata;
/**
 */
class TemplateContentAttribute extends \System\Attribute
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public $TemplateResultType;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Type
	 */
	public  function get_TemplateResultType(){}
	/**
	 * @param \System\Type $value
	 * @return \System\Void|void
	 */
	public  function set_TemplateResultType($value){}
}
