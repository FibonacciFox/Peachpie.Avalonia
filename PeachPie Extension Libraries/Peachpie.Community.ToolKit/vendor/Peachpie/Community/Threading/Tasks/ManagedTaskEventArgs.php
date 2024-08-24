<?php

namespace Peachpie\Community\Threading\Tasks;

use System\EventArgs;

class ManagedTaskEventArgs extends EventArgs
{
    public int $TaskId;
    public mixed $Result;

    /**
     * @param int $taskId
     * @param mixed|null $result
     */
    public function __construct(int $taskId , mixed $result = null)
    {
        $this->TaskId = $taskId;
        $this->Result = $result;
    }

}