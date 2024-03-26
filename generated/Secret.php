<?php

/**
 * This class has been generated by dagger-php-sdk. DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dagger;

/**
 * A reference to a secret value, which can be handled more safely than the value itself.
 */
class Secret extends Client\AbstractObject implements Client\IdAble
{
    /**
     * A unique identifier for this Secret.
     */
    public function id(): SecretId
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('id');
        return new \Dagger\SecretId((string)$this->queryLeaf($leafQueryBuilder, 'id'));
    }

    /**
     * The name of this secret.
     */
    public function name(): string
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('name');
        return (string)$this->queryLeaf($leafQueryBuilder, 'name');
    }

    /**
     * The value of this secret.
     */
    public function plaintext(): string
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('plaintext');
        return (string)$this->queryLeaf($leafQueryBuilder, 'plaintext');
    }
}
