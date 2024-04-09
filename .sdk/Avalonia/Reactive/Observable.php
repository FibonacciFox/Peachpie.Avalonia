<?php
namespace Avalonia\Reactive;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ObservableOverride {
	/**
	 * @deprecated
	 * @param \System\IObservable_1 $first [generic: TFirst]
	 * @param \System\IObservable_1 $second [generic: TSecond]
	 * @param \System\Func_3 $resultSelector [generic: TFirst,TSecond,TResult]
	 * @return \System\IObservable_1
	 */
	#[MethodOverride]public static function CombineLatest_1 ($first, $second, $resultSelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $inputs [generic: System\IObservable_1[TInput]
	 * @return \System\IObservable_1
	 */
	#[MethodOverride]public static function CombineLatest_2 ($inputs){}
	/**
	 * @deprecated
	 * @param \System\Action_1 $addHandler [generic: System\EventHandler]
	 * @param \System\Action_1 $removeHandler [generic: System\EventHandler]
	 * @return \System\IObservable_1
	 */
	#[MethodOverride]public static function FromEventPattern_1 ($addHandler, $removeHandler){}
	/**
	 * @deprecated
	 * @param \System\Action_1 $addHandler [generic: System\EventHandler_1[T]
	 * @param \System\Action_1 $removeHandler [generic: System\EventHandler_1[T]
	 * @return \System\IObservable_1
	 */
	#[MethodOverride]public static function FromEventPattern_2 ($addHandler, $removeHandler){}
}
class Observable extends \System\Object
{
	use ObservableOverride;

	/**
	 * @param \System\Func_2 $subscribe [generic: System\IObserver_1[TSource]
	 * @return \System\IObservable_1[TSource]
	 */
	public static function Create($subscribe){}
	/**
	 * @param \System\IObservable_1 $source [generic: T]
	 * @param \System\Action_1 $action [generic: T]
	 * @return \System\IDisposable
	 */
	public static function Subscribe($source, $action){}
	/**
	 * @param \System\IObservable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,TResult]
	 * @return \System\IObservable_1[TResult]
	 */
	public static function Select($source, $selector){}
	/**
	 * @param \System\IObservable_1 $source [generic: TSource]
	 * @param \TSource $value
	 * @return \System\IObservable_1[TSource]
	 */
	public static function StartWith($source, $value){}
	/**
	 * @param \System\IObservable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @return \System\IObservable_1[TSource]
	 */
	public static function Where($source, $predicate){}
	/**
	 * @param \System\IObservable_1 $sources [generic: System\IObservable_1[TSource]
	 * @return \System\IObservable_1[TSource]
	 */
	public static function Switch($sources){}
	/**
	 * @uses ObservableOverride::CombineLatest_1 <br>public , args: ($first, $second, $resultSelector)<br>
	 * @uses ObservableOverride::CombineLatest_2 <br>public , args: ($inputs)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IObservable_1|mixed|\override
	 */
	#[MethodOverridePublic]function CombineLatest (\override ...$args){}
	/**
	 * @param \System\IObservable_1 $source [generic: T]
	 * @param \System\Int32|int $skipCount
	 * @return \System\IObservable_1[T]
	 */
	public static function Skip($source, $skipCount){}
	/**
	 * @param \System\IObservable_1 $source [generic: T]
	 * @param \System\Int32|int $takeCount
	 * @return \System\IObservable_1[T]
	 */
	public static function Take($source, $takeCount){}
	/**
	 * @uses ObservableOverride::FromEventPattern_1 <br>public , args: ($addHandler, $removeHandler)<br>
	 * @uses ObservableOverride::FromEventPattern_2 <br>public , args: ($addHandler, $removeHandler)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IObservable_1|mixed|\override
	 */
	#[MethodOverridePublic]function FromEventPattern (\override ...$args){}
	/**
	 * @param \T|object $value
	 * @return \System\IObservable_1[T]
	 */
	public static function Return($value){}
	/**
	 * @return \System\IObservable_1[T]
	 */
	public static function Empty(){}
	/**
	 * @param \T|object $value
	 * @return \System\IObservable_1[T]
	 */
	public static function SingleValue($value){}
}