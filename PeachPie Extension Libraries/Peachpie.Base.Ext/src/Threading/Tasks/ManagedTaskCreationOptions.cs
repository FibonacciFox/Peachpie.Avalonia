
namespace Php.Threading.Tasks;

public enum ManagedTaskCreationOptions
{
    None = 0,
    PreferFairness = 1,
    LongRunning = 2,
    AttachedToParent = 4,
    DenyChildAttach = 8,
    HideScheduler = 16,
    RunContinuationsAsynchronously = 64
}