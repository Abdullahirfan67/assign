<?php

/**
 * This file is part of project vmoex-framework.
 *
 * Author: Jake
 * Create: 2019-03-30 14:28:37
 */

namespace Yeskn\AdminBundle\QueryBuilder;

class UserQueryBuilder extends DefaultQueryBuilder
{
    protected $reservedKeys = [
        'username', 'nickname', 'role', 'createdAt'
    ];

    public function reservedQuery(array $params)
    {
        if (!empty($params['username'])) {
            $this->queryBuilder->andWhere('p.username LIKE :username');
            $this->queryBuilder->setParameter('username', "%{$params['username']}%");
        }

        if (!empty($params['nickname'])) {
            $this->queryBuilder->andWhere('p.nickname LIKE :nickname');
            $this->queryBuilder->setParameter('nickname', "%{$params['nickname']}%");
        }

        return $this->queryBuilder;
    }
}
