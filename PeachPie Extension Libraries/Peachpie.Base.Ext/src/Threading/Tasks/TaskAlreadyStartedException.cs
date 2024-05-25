
using Pchp.Library.Spl;

namespace Php.Threading.Tasks;

public class TaskAlreadyStartedException : Exception
{
    public TaskAlreadyStartedException()
        : base("Task already started.") { }

    public TaskAlreadyStartedException(string message)
        : base(message) { }

    public TaskAlreadyStartedException(string message, long inner)
        : base(message, inner) { }
}