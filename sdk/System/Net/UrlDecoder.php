<?php
namespace System\Net;
/**
 */
class UrlDecoder extends \System\ValueType
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FlushBytes(){}
	/**
	 * @param \System\Char $ch
	 * @return \System\Void|void
	 */
	protected  function AddChar($ch){}
	/**
	 * @param \System\Byte $b
	 * @return \System\Void|void
	 */
	protected  function AddByte($b){}
	/**
	 * @return \System\String|string
	 */
	protected  function GetString(){}
}
