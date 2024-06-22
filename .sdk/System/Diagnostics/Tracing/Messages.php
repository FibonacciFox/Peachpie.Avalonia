<?php
namespace System\Diagnostics\Tracing;
class Messages extends \System\Object
{

	/**
	 * @field
	 * @var \System\String|string
	 */
	const WorkerThread = 'ActiveWorkerThreadCount={0};
RetiredWorkerThreadCount={1};
ClrInstanceID={2}';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const MinMaxThreads = 'MinWorkerThreads={0};
MaxWorkerThreads={1};
MinIOCompletionThreads={2};
MaxIOCompletionThreads={3};
ClrInstanceID={4}';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const WorkerThreadAdjustmentSample = 'Throughput={0};
ClrInstanceID={1}';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const WorkerThreadAdjustmentAdjustment = 'AverageThroughput={0};
NewWorkerThreadCount={1};
Reason={2};
ClrInstanceID={3}';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const WorkerThreadAdjustmentStats = 'Duration={0};
Throughput={1};
ThreadWave={2};
ThroughputWave={3};
ThroughputErrorEstimate={4};
AverageThroughputErrorEstimate={5};
ThroughputRatio={6};
Confidence={7};
NewControlSetting={8};
NewThreadWaveMagnitude={9};
ClrInstanceID={10}';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const IOEnqueue = 'NativeOverlapped={0};
Overlapped={1};
MultiDequeues={2};
ClrInstanceID={3}';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const IO = 'NativeOverlapped={0};
Overlapped={1};
ClrInstanceID={2}';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const WorkingThreadCount = 'Count={0};
ClrInstanceID={1}';

}