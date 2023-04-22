<?php

namespace MigrateV1\contract;

interface Migratory
{
    public function migrate(): void;
}
