<?php
namespace Avalonia\Markup\Parsers\Nodes;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StringIndexerNodeMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function SetValueInArray_1($array, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function SetValueInArray_2($array, $indices, $value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function GetValueFromArray_1($array){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private static function GetValueFromArray_2($array, $indices){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function OnEvent_1($sender, $ev, $e){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function OnEvent_2($sender, $ev, $e){}
}
/**
 */
class StringIndexerNode extends \Avalonia\Data\Core\IndexerNodeBase implements 
	\Avalonia\Utilities\IWeakEventSubscriber_1,
	\Avalonia\Utilities\IWeakEventSubscriber_1
{
	/**
	 * @uses StringIndexerNodeMethodsOverride::SetValueInArray_1 ($array, $value)
	 * @uses StringIndexerNodeMethodsOverride::SetValueInArray_2 ($array, $indices, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetValueInArray(mixed ...$args){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	public  function get_Arguments(){}
	/**
	 * @uses StringIndexerNodeMethodsOverride::GetValueFromArray_1 ($array)
	 * @uses StringIndexerNodeMethodsOverride::GetValueFromArray_2 ($array, $indices)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetValueFromArray(mixed ...$args){}
	/**
	 * @param \System\Int32[]& $intArgs
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConvertArgumentsToInts($intArgs){}
	/**
	 * @param \System\Reflection\TypeInfo $typeInfo
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetIndexer($typeInfo){}
	/**
	 * @param \System\Int32[] $indices
	 * @param \System\Array|array $array
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidBounds($indices, $array){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\ComponentModel\PropertyChangedEventArgs $e
	 * @return \System\Boolean
	 */
	protected  function ShouldUpdate($sender, $e){}
	/**
	 * @uses StringIndexerNodeMethodsOverride::OnEvent_1 ($sender, $ev, $e)
	 * @uses StringIndexerNodeMethodsOverride::OnEvent_2 ($sender, $ev, $e)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnEvent(mixed ...$args){}
}
