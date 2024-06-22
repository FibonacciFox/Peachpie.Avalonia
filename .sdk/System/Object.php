<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ObjectOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Equals_1 ($obj){}
	/**
	 * @deprecated
	 * @param \System\Object|object $objA
	 * @param \System\Object|object $objB
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function Equals_2 ($objA, $objB){}
}
class Object
{
	use ObjectOverride;


	/**
	 * @return \System\Type
	 */
	public function GetType(){}
	/**
	 * @return \System\Object|object
	 */
	protected function MemberwiseClone(){}
	/**
	 * @return \System\Void|void
	 */
	protected function Finalize(){}
	/**
	 * @return \System\String|string
	 */
	public function ToString(){}
	/**
	 * @uses ObjectOverride::Equals_1 <br>public , args: ($obj)<br>
	 * @uses ObjectOverride::Equals_2 <br>public , args: ($objA, $objB)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Equals (\override ...$args){}
	/**
	 * @param \System\Object|object $objA
	 * @param \System\Object|object $objB
	 * @return \System\Boolean|bool
	 */
	public static function ReferenceEquals($objA, $objB){}
	/**
	 * @return \System\Int32|int
	 */
	public function GetHashCode(){}
	/**
	 */
	public function __construct(){}
}