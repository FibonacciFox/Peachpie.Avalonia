<?php
namespace System\Security\Policy;
/**
 */
class Evidence extends \System\Object implements 
	\System\Collections\ICollection,
	\System\Collections\IEnumerable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReadOnly;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSynchronized;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Locked;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $SyncRoot;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSynchronized(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Locked(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Locked($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_SyncRoot(){}
	/**
	 * @param \System\Object|object $id
	 * @return \System\Void|void
	 */
	public  function AddAssembly($id){}
	/**
	 * @param \System\Security\Policy\T $evidence
	 * @return \System\Void|void
	 */
	public  function AddAssemblyEvidence($evidence){}
	/**
	 * @param \System\Security\Policy\T $evidence
	 * @return \System\Void|void
	 */
	public  function AddHostEvidence($evidence){}
	/**
	 * @return \System\Security\Policy\T
	 */
	public  function GetAssemblyEvidence(){}
	/**
	 * @return \System\Security\Policy\T
	 */
	public  function GetHostEvidence(){}
	/**
	 * @param \System\Object|object $id
	 * @return \System\Void|void
	 */
	public  function AddHost($id){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @return \System\Security\Policy\Evidence
	 */
	public  function Clone(){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function CopyTo($array, $index){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	public  function GetAssemblyEnumerator(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	public  function GetEnumerator(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	public  function GetHostEnumerator(){}
	/**
	 * @param \System\Security\Policy\Evidence $evidence
	 * @return \System\Void|void
	 */
	public  function Merge($evidence){}
	/**
	 * @param \System\Type $t
	 * @return \System\Void|void
	 */
	public  function RemoveType($t){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
