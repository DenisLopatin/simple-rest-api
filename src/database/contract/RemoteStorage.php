<?php

namespace Database\contract;
use Illuminate\Database\Capsule\Manager;

interface RemoteStorage
{
    public function connect(Manager $databaseManager): Manager;
}
