<?php
namespace Avalonia\Markup\Xaml\Templates;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DataTemplateMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride] public  function Build_1($data){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride] public  function Build_2($data, $existing){}
}
/**
 */
class DataTemplate extends \System\Object implements 
	\Avalonia\Controls\Templates\IRecyclingDataTemplate,
	\Avalonia\Controls\Templates\IDataTemplate,
	\Avalonia\Controls\Templates\ITemplate_2,
	\Avalonia\Controls\Templates\ITypedDataTemplate
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public $DataType;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Content;
	/**
	 * @return \System\Type
	 */
	public  function get_DataType(){}
	/**
	 * @param \System\Type $value
	 * @return \System\Void|void
	 */
	public  function set_DataType($value){}
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
	 * @param \System\Object|object $data
	 * @return \System\Boolean
	 */
	public  function Match($data){}
	/**
	 * @uses DataTemplateMethodsOverride::Build_1 ($data)
	 * @uses DataTemplateMethodsOverride::Build_2 ($data, $existing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Build(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
