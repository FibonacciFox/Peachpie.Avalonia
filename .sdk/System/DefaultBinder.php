<?php
namespace System;
class DefaultBinder extends \System\Reflection\Binder
{


	/**
	 * @param \System\Reflection\MethodBase $match
	 * @param \System\Type $types
	 * @return \System\Reflection\MethodBase
	 */
	public static function ExactBinding($match, $types){}
	/**
	 * @param \System\Reflection\PropertyInfo $match
	 * @param \System\Type $returnType
	 * @param \System\Type $types
	 * @return \System\Reflection\PropertyInfo
	 */
	public static function ExactPropertyBinding($match, $returnType, $types){}
	private static function FindMostSpecific($p1, $paramOrder1, $paramArrayType1, $p2, $paramOrder2, $paramArrayType2, $types, $args){}
	private static function FindMostSpecificType($c1, $c2, $t){}
	private static function FindMostSpecificMethod($m1, $paramOrder1, $paramArrayType1, $m2, $paramOrder2, $paramArrayType2, $types, $args){}
	private static function FindMostSpecificField($cur1, $cur2){}
	private static function FindMostSpecificProperty($cur1, $cur2){}
	/**
	 * @param \System\Reflection\MethodBase $m1
	 * @param \System\Reflection\MethodBase $m2
	 * @return \System\Boolean|bool
	 */
	public static function CompareMethodSig($m1, $m2){}
	private static function GetHierarchyDepth($t){}
	/**
	 * @param \System\Reflection\MethodBase $match
	 * @param \System\Int32|int $cMatches
	 * @return \System\Reflection\MethodBase
	 */
	protected static function FindMostDerivedNewSlotMeth($match, $cMatches){}
	private static function ReorderParams($paramOrder, $vars){}
	private static function CreateParamOrder($paramOrder, $pars, $names){}
	/**
	 * @param \System\Type $source
	 * @param \System\Type $target
	 * @return \System\Boolean|bool
	 */
	protected static function CanChangePrimitive($source, $target){}
	/**
	 */
	public function __construct(){}
}