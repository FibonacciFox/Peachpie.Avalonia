<?php
namespace Avalonia\Markup\Xaml\Templates;
/**
 */
class ControlTemplate extends \System\Object implements 
	\Avalonia\Controls\Templates\IControlTemplate,
	\Avalonia\Controls\Templates\ITemplate_2
{
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Content;
	/**
	 * @var \System\Type
	 * @property
	 */
	public $TargetType;
	/**
	 * @return \System\Object|object
	 */
	public  function get_Content(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Content($value){}
	/**
	 * @return \System\Type
	 */
	public  function get_TargetType(){}
	/**
	 * @param \System\Type $value
	 * @return \System\Void|void
	 */
	public  function set_TargetType($value){}
	/**
	 * @param \Avalonia\Controls\Primitives\TemplatedControl $control
	 * @return \Avalonia\Controls\Templates\TemplateResult_1
	 */
	public  function Build($control){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
