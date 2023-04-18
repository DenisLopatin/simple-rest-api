<?php

namespace Database\migrate\contract;

interface Migratory
{
    public function migrate(): void;
}
