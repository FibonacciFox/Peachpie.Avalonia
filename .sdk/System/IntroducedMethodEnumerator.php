<?php
namespace System;
final class IntroducedMethodEnumerator extends \System\ValueType
{

	/**
	 * @property
	 * @var \System\RuntimeMethodHandleInternal
	 * @since readonly
	 */
	public $Current;
	/**
	 * @return \System\Boolean|bool
	 */
	public function MoveNext(){}
	/**
	 * @return \System\RuntimeTypeHandle+IntroducedMethodEnumerator
	 */
	public function GetEnumerator(){}
}