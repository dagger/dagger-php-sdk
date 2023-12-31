<?php

/**
 * This class has been generated by dagger-php-sdk. DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dagger;

/**
 * A git repository.
 */
class GitRepository extends Client\AbstractObject implements Client\IdAble
{
    /**
     * Returns details on one branch.
     */
    public function branch(string $name): GitRef
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('branch');
        $innerQueryBuilder->setArgument('name', $name);
        return new \Dagger\GitRef($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Returns details on one commit.
     */
    public function commit(string $id): GitRef
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('commit');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\GitRef($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Retrieves the content-addressed identifier of the git repository.
     */
    public function id(): GitRepositoryId
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('id');
        return new \Dagger\GitRepositoryId((string)$this->queryLeaf($leafQueryBuilder, 'id'));
    }

    /**
     * Returns details on one tag.
     */
    public function tag(string $name): GitRef
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('tag');
        $innerQueryBuilder->setArgument('name', $name);
        return new \Dagger\GitRef($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }
}
