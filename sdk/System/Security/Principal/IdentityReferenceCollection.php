<?php
namespace System\Security\Principal;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait IdentityReferenceCollectionMethodsOverride
{
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_2(){}
	/**
	 * @return \System\Security\Principal\IdentityReferenceCollection
	 */
	#[MethodOverride] public  function Translate_1($targetType){}
	/**
	 * @return \System\Security\Principal\IdentityReferenceCollection
	 */
	#[MethodOverride] public  function Translate_2($targetType, $forceSuccess){}
}
/**
 */
class IdentityReferenceCollection extends \System\Object implements 
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Security\Principal\IdentityReference
	 * @property
	 */
	public $Item;
	/**
	 * @param \System\Security\Principal\IdentityReference[] $array
	 * @param \System\Int32|int $offset
	 * @return \System\Void|void
	 */
	public  function CopyTo($array, $offset){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsReadOnly(){}
	/**
	 * @param \System\Security\Principal\IdentityReference $identity
	 * @return \System\Void|void
	 */
	public  function Add($identity){}
	/**
	 * @param \System\Security\Principal\IdentityReference $identity
	 * @return \System\Boolean
	 */
	public  function Remove($identity){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \System\Security\Principal\IdentityReference $identity
	 * @return \System\Boolean
	 */
	public  function Contains($identity){}
	/**
	 * @uses IdentityReferenceCollectionMethodsOverride::GetEnumerator_1 ()
	 * @uses IdentityReferenceCollectionMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Security\Principal\IdentityReference
	 */
	public  function get_Item($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Security\Principal\IdentityReference $value
	 * @return \System\Void|void
	 */
	public  function set_Item($index, $value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	protected  function get_Identities(){}
	/**
	 * @uses IdentityReferenceCollectionMethodsOverride::Translate_1 ($targetType)
	 * @uses IdentityReferenceCollectionMethodsOverride::Translate_2 ($targetType, $forceSuccess)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Translate(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
