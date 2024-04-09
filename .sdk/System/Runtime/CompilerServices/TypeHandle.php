<?php
namespace System\Runtime\CompilerServices;
final class TypeHandle extends \System\ValueType
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNull;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsTypeDesc;
	/**
	 * @return \System\Runtime\CompilerServices\MethodTable*
	 */
	public function AsMethodTable(){}
	/**
	 * @return \System\Runtime\CompilerServices\TypeHandle
	 */
	public static function TypeHandleOf(){}
	/**
	 * @param \System\Void* $tAddr
	 */
	public function __construct($tAddr){}
}