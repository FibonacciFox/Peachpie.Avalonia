<?php
namespace Avalonia\Reactive;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ObservableMethodsOverride
{
	/**
	 * @return \System\IObservable_1
	 */
	#[MethodOverride] public static function CombineLatest_1($first, $second, $resultSelector){}
	/**
	 * @return \System\IObservable_1
	 */
	#[MethodOverride] public static function CombineLatest_2($inputs){}
	/**
	 * @return \System\IObservable_1
	 */
	#[MethodOverride] public static function FromEventPattern_1($addHandler, $removeHandler){}
	/**
	 * @return \System\IObservable_1
	 */
	#[MethodOverride] public static function FromEventPattern_2($addHandler, $removeHandler){}
}
/**
 */
class Observable extends \System\Object
{
	/**
	 * @param \System\Func_2 $subscribe
	 * @return \System\IObservable_1
	 */
	public static function Create($subscribe){}
	/**
	 * @param \System\IObservable_1 $source
	 * @param \System\Action_1 $action
	 * @return \System\IDisposable
	 */
	public static function Subscribe($source, $action){}
	/**
	 * @param \System\IObservable_1 $source
	 * @param \System\Func_2 $selector
	 * @return \System\IObservable_1
	 */
	public static function Select($source, $selector){}
	/**
	 * @param \System\IObservable_1 $source
	 * @param \Avalonia\Reactive\TSource $value
	 * @return \System\IObservable_1
	 */
	public static function StartWith($source, $value){}
	/**
	 * @param \System\IObservable_1 $source
	 * @param \System\Func_2 $predicate
	 * @return \System\IObservable_1
	 */
	public static function Where($source, $predicate){}
	/**
	 * @param \System\IObservable_1 $sources
	 * @return \System\IObservable_1
	 */
	public static function Switch($sources){}
	/**
	 * @uses ObservableMethodsOverride::CombineLatest_1 ($first, $second, $resultSelector)
	 * @uses ObservableMethodsOverride::CombineLatest_2 ($inputs)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CombineLatest(mixed ...$args){}
	/**
	 * @param \System\IObservable_1 $source
	 * @param \System\Int32|int $skipCount
	 * @return \System\IObservable_1
	 */
	public static function Skip($source, $skipCount){}
	/**
	 * @param \System\IObservable_1 $source
	 * @param \System\Int32|int $takeCount
	 * @return \System\IObservable_1
	 */
	public static function Take($source, $takeCount){}
	/**
	 * @uses ObservableMethodsOverride::FromEventPattern_1 ($addHandler, $removeHandler)
	 * @uses ObservableMethodsOverride::FromEventPattern_2 ($addHandler, $removeHandler)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FromEventPattern(mixed ...$args){}
	/**
	 * @param \Avalonia\Reactive\T $value
	 * @return \System\IObservable_1
	 */
	public static function Return($value){}
	/**
	 * @return \System\IObservable_1
	 */
	public static function Empty(){}
	/**
	 * @param \Avalonia\Reactive\T $value
	 * @return \System\IObservable_1
	 */
	public static function SingleValue($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
