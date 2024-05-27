using System;
using Pchp.Core;

namespace Php.Threading.Tasks;

public class TaskCompletedEventArgs : EventArgs
{
    public int TaskId { get; }
    public object Result { get; }

    public TaskCompletedEventArgs(int taskId, object result)
    {
        TaskId = taskId;
        Result = result;
    }
}