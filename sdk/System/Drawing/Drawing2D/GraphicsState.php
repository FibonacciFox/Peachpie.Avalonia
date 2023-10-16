<?php
namespace System\Drawing\Drawing2D;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GraphicsStateMethodsOverride
{
	/**
	 * @return \System\MarshalByRefObject
	 */
	#[MethodOverride] protected  function MemberwiseClone_1($cloneIdentity){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_2(){}
}
/**
 */
class GraphicsState extends \System\MarshalByRefObject
{
	/**
	 * @uses GraphicsStateMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses GraphicsStateMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
