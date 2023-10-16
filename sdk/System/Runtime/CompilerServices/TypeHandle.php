<?php
namespace System\Runtime\CompilerServices;
/**
 */
class TypeHandle extends \System\ValueType
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsNull;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsTypeDesc;
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsNull(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsTypeDesc(){}
	/**
	 * @return \System\Runtime\CompilerServices\MethodTable*
	 */
	public  function AsMethodTable(){}
	/**
	 * @return \System\Runtime\CompilerServices\TypeHandle
	 */
	public static function TypeHandleOf(){}
}
