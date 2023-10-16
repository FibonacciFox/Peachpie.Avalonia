<?php
namespace System;
/**
 */
class IntroducedMethodEnumerator extends \System\ValueType
{
	/**
	 * @var \System\RuntimeMethodHandleInternal
	 * @property
	 */
	public readonly $Current;
	/**
	 * @return \System\Boolean
	 */
	public  function MoveNext(){}
	/**
	 * @return \System\RuntimeMethodHandleInternal
	 */
	public  function get_Current(){}
	/**
	 * @return \System\IntroducedMethodEnumerator
	 */
	public  function GetEnumerator(){}
}
