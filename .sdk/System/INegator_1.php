<?php
namespace System;
interface INegator_1
{


	/**
	 * @param \System\Boolean|bool $equals
	 * @return \System\Boolean|bool
	 */
	public static function NegateIfNeeded($equals);
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $equals [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector128_1[T]
	 */
	public static function NegateIfNeeded($equals);
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $equals [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector256_1[T]
	 */
	public static function NegateIfNeeded($equals);
}