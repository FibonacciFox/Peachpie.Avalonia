<?php
namespace Avalonia\Markup\Xaml\Templates;
/**
 */
class TreeDataTemplate extends \System\Object implements 
	\Avalonia\Controls\Templates\ITreeDataTemplate,
	\Avalonia\Controls\Templates\IDataTemplate,
	\Avalonia\Controls\Templates\ITemplate_2,
	\Avalonia\Controls\Templates\ITypedDataTemplate
{
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
	 * @return \Avalonia\Data\BindingBase
	 */
	public  function get_ItemsSource(){}
	/**
	 * @param \Avalonia\Data\BindingBase $value
	 * @return \System\Void|void
	 */
	public  function set_ItemsSource($value){}
	/**
	 * @param \System\Object|object $data
	 * @return \System\Boolean
	 */
	public  function Match($data){}
	/**
	 * @param \System\Object|object $item
	 * @return \Avalonia\Data\InstancedBinding
	 */
	public  function ItemsSelector($item){}
	/**
	 * @param \System\Object|object $data
	 * @return \Avalonia\Controls\Control
	 */
	public  function Build($data){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
