<?php
namespace System\Collections\Generic;
/**
 */
class CopyPosition extends \System\ValueType
{
	/**
	 * @var \System\Collections\Generic\CopyPosition
	 * @property
	 */
	public readonly $Start;
	/**
	 * @return \System\Collections\Generic\CopyPosition
	 */
	public static function get_Start(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_Row(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_Column(){}
	/**
	 * @param \System\Int32|int $endColumn
	 * @return \System\Collections\Generic\CopyPosition
	 */
	public  function Normalize($endColumn){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_DebuggerDisplay(){}
}
