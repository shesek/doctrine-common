<?php

namespace Doctrine\Tests\Models\Forum;

/**
 * @DoctrineEntity
 * @DoctrineTable(name="forum_entries")
 */
class ForumEntry
{
    /**
     * @DoctrineId
     * @DoctrineColumn(type="integer")
     * @DoctrineGeneratedValue(strategy="auto")
     */
    public $id;
    /**
     * @DoctrineColumn(type="varchar", length=50)
     */
    public $topic;
}
