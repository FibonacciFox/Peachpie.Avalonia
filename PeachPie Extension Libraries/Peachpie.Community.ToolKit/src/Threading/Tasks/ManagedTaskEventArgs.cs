using System;

namespace Peachpie.Community.Threading.Tasks;

public class ManagedTaskEventArgs : EventArgs
{
    public int TaskId { get; }
    public object Result { get; }
    
    public ManagedTaskEventArgs(int taskId)
    {
        TaskId = taskId;
    }

    public ManagedTaskEventArgs(int taskId, object result)
    {
        TaskId = taskId;
        Result = result;
    }
}