<?php

namespace LivingEntity;

interface LivingEntity
{
    public function getColor($color) : string;
    public function getType($type) : string;
    public function getSize($size) : int;
}