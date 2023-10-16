<?php
namespace System\Runtime\InteropServices;
/**
 */
class VariantWrapper extends \System\Object
{
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $WrappedObject;
	/**
	 * @return \System\Object|object
	 */
	public  function get_WrappedObject(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
