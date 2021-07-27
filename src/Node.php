<?php

declare(strict_types=1);

namespace Blockchain;


final class Node
{
    /**
     * @var Miner
     */
    private $miner;


    public function __construct(Miner $miner)
    {
        $this->miner = $miner;
    }

    /**
     * @return Block[]
     */
    public function blocks(): array
    {
        return $this->miner->blockchain()->blocks();
    }

    public function mineBlock(string $data): Block
    {
        $block = $this->miner->mineBlock($data);

        return $block;
    }

    public function blockchain(): Blockchain
    {
        return $this->miner->blockchain();
    }

    public function replaceBlockchain(Blockchain $blockchain): void
    {
        $this->miner->replaceBlockchain($blockchain);
    }
}
