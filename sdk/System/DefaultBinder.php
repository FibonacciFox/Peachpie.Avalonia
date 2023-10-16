<?php
namespace System;
/**
 */
class DefaultBinder extends \System\Reflection\Binder
{
	/**
	 * @param \System\Reflection\MethodBase[] $match
	 * @param \System\Type[] $types
	 * @return \System\Reflection\MethodBase
	 */
	public static function ExactBinding($match, $types){}
	/**
	 * @param \System\Reflection\PropertyInfo[] $match
	 * @param \System\Type $returnType
	 * @param \System\Type[] $types
	 * @return \System\Reflection\PropertyInfo
	 */
	public static function ExactPropertyBinding($match, $returnType, $types){}
	/**
	 * @param \System\Reflection\ParameterInfo[] $p1
	 * @param \System\Int32[] $paramOrder1
	 * @param \System\Type $paramArrayType1
	 * @param \System\Reflection\ParameterInfo[] $p2
	 * @param \System\Int32[] $paramOrder2
	 * @param \System\Type $paramArrayType2
	 * @param \System\Type[] $types
	 * @param \System\Object[] $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FindMostSpecific($p1, $paramOrder1, $paramArrayType1, $p2, $paramOrder2, $paramArrayType2, $types, $args){}
	/**
	 * @param \System\Type $c1
	 * @param \System\Type $c2
	 * @param \System\Type $t
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FindMostSpecificType($c1, $c2, $t){}
	/**
	 * @param \System\Reflection\MethodBase $m1
	 * @param \System\Int32[] $paramOrder1
	 * @param \System\Type $paramArrayType1
	 * @param \System\Reflection\MethodBase $m2
	 * @param \System\Int32[] $paramOrder2
	 * @param \System\Type $paramArrayType2
	 * @param \System\Type[] $types
	 * @param \System\Object[] $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FindMostSpecificMethod($m1, $paramOrder1, $paramArrayType1, $m2, $paramOrder2, $paramArrayType2, $types, $args){}
	/**
	 * @param \System\Reflection\FieldInfo $cur1
	 * @param \System\Reflection\FieldInfo $cur2
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FindMostSpecificField($cur1, $cur2){}
	/**
	 * @param \System\Reflection\PropertyInfo $cur1
	 * @param \System\Reflection\PropertyInfo $cur2
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FindMostSpecificProperty($cur1, $cur2){}
	/**
	 * @param \System\Reflection\MethodBase $m1
	 * @param \System\Reflection\MethodBase $m2
	 * @return \System\Boolean
	 */
	public static function CompareMethodSig($m1, $m2){}
	/**
	 * @param \System\Type $t
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetHierarchyDepth($t){}
	/**
	 * @param \System\Reflection\MethodBase[] $match
	 * @param \System\Int32|int $cMatches
	 * @return \System\Reflection\MethodBase
	 */
	protected static function FindMostDerivedNewSlotMeth($match, $cMatches){}
	/**
	 * @param \System\Int32[] $paramOrder
	 * @param \System\Object[] $vars
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReorderParams($paramOrder, $vars){}
	/**
	 * @param \System\Int32[] $paramOrder
	 * @param \System\Reflection\ParameterInfo[] $pars
	 * @param \System\String[] $names
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateParamOrder($paramOrder, $pars, $names){}
	/**
	 * @param \System\Type $source
	 * @param \System\Type $target
	 * @return \System\Boolean
	 */
	protected static function CanChangePrimitive($source, $target){}
}
