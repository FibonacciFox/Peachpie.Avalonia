
using Pchp.Library.Spl;

namespace Php.Threading.Tasks;

public class ManagedTaskException : Exception
{
    public ManagedTaskException(string message)
        : base(message) { }

    public ManagedTaskException(string message, long inner)
        : base(message, inner) { }
}