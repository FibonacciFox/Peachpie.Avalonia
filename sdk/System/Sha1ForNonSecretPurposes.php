<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Sha1ForNonSecretPurposesMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Append_1($input){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Append_2($input){}
}
/**
 */
class Sha1ForNonSecretPurposes extends \System\ValueType
{
	/**
	 * @return \System\Void|void
	 */
	public  function Start(){}
	/**
	 * @uses Sha1ForNonSecretPurposesMethodsOverride::Append_1 ($input)
	 * @uses Sha1ForNonSecretPurposesMethodsOverride::Append_2 ($input)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Append(mixed ...$args){}
	/**
	 * @param \System\Span_1 $output
	 * @return \System\Void|void
	 */
	public  function Finish($output){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Drain(){}
}
