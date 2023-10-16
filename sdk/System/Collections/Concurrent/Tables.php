<?php
namespace System\Collections\Concurrent;
/**
 */
class Tables extends \System\Object
{
	/**
	 * @var \System\Collections\Concurrent\ConcurrentDictionary_2+Node[TKey,TValue][]
	 * @field
	 */
	protected readonly $_buckets;
	/**
	 * @var \System\Object[]
	 * @field
	 */
	protected readonly $_locks;
	/**
	 * @var \System\Int32[]
	 * @field
	 */
	protected readonly $_countPerLock;
	/**
	 * @var \System\UInt64
	 * @field
	 */
	protected readonly $_fastModBucketsMultiplier;
	/**
	 * @param \System\Int32|int $hashcode
	 * @return \System\Collections\Concurrent\Node&
	 */
	protected  function GetBucket($hashcode){}
	/**
	 * @param \System\Int32|int $hashcode
	 * @param \System\UInt32& $lockNo
	 * @return \System\Collections\Concurrent\Node&
	 */
	protected  function GetBucketAndLock($hashcode, $lockNo){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
