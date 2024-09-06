<?php

namespace KyteApi\Entity;

interface Entitable
{
    public function unserialize(?array $data): self;

    public function setSequentialId(int $sequentialId): self;

    public function getSequentialId(): int;
}
