<?php
namespace Avalonia\Data;
/**
 */
class Binding extends \Avalonia\Data\BindingBase implements 
	\Avalonia\Data\IBinding
{

    public function __construct(string $path)
    {
    }

    /**
	 * @return \System\String|string
	 */
	public  function get_ElementName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_ElementName($value){}
	/**
	 * @return \Avalonia\Data\RelativeSource
	 */
	public  function get_RelativeSource(){}
	/**
	 * @param \Avalonia\Data\RelativeSource $value
	 * @return \System\Void|void
	 */
	public  function set_RelativeSource($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Source(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Source($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Path(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Path($value){}
	/**
	 * @return \System\Func_3
	 */
	public  function get_TypeResolver(){}
	/**
	 * @param \System\Func_3 $value
	 * @return \System\Void|void
	 */
	public  function set_TypeResolver($value){}
}
