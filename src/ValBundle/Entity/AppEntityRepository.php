<?php
namespace ValBundle\Entity;
use Doctrine\ORM\EntityRepository;
// use ValBundle\Util;
/**
 * AppEntityRepository
 */
abstract class AppEntityRepository extends EntityRepository
{
    public function getLogger()
    {
        return $this->getContainer()->get('logger');
    }
    public function getContainer()
    {
        global $kernel;
        $kernel = $kernel->getKernel();
        $container = $kernel->getContainer();
        return $container;
    }
    public function nextMaxNum($numItemName)
    {
        // 論理削除無効化
        parent::getEntityManager()->getFilters()->disable('softdeleteable');
        $qb = $this->createQueryBuilder('s')->select('MAX(s.'.$numItemName.') AS maxNum')->setMaxResults(1);
        $result = $qb->getQuery()->getResult();
        // 論理削除有効化
        parent::getEntityManager()->getFilters()->enable('softdeleteable');
        $maxNum = $result[0]['maxNum'];
        $nextNum = Util::getNextNumber($maxNum);
        return $nextNum;
    }
    /**
     * 検索（ページャー対応）
     */
    public function getSearchQuery(array $searchRequest = null, $operator = null)
    {
        //TODO テーブルを跨ぐ検索の場合はrepositoryではなくserviceに実装する必要あり。
        $where = "";
        $parameters = Array();
        if ($searchRequest) {
            foreach ($searchRequest as $key => $value) {
                if (!$value || substr($key, 1) == 'id') {
                    // 未入力 or 先頭がidのカラムの場合、無視する。
                } else if(is_array($value)) {
                    // 年、月、日を別々に入力する場合、overrideする方針とする。
                } else if(stristr($key, 'Date') || stristr($key, 'matter')) {
                    $where = $where.'t.'.$key.' =:'.$key.' and ';
                    $parameters[$key] = $value;
                } else if (stristr($key, 'matter') || stristr($key, 'coordinator') ||
                           stristr($key, 'staff') || stristr($key, 'orderEntry') ||
                           stristr($key, 'workDepartment')) {
                    $where = $where.'t.'.$key.'Id =:'.$key.' and ';
                    $parameters[$key] = $value;
                } else {
                    $where = $where.'t.'.$key.' like :'.$key.' and ';
                    $parameters[$key] = '%'.$value.'%';
                }
            }
        }
        if ($where === "") {
            $query = $this->createQueryBuilder('t')->getQuery();
        } else {
            $cut = 5;
            $where = substr($where, 0, strlen($where)-$cut);
            $qb = $this->createQueryBuilder('t')->where($where)->setParameters($parameters);
            $query = $qb->getQuery();
        }
        return $query;
    }
    /**
     * モーダル検索(ページャー対応)
     */
    public function getModalSearchQuery(array $searchRequest = null)
    {
        $where = "";
        $parameters = Array();
        if ($searchRequest) {
            foreach ($searchRequest as $key => $value) {
                if (stristr($key, 'venderId')) {
                    $where = $where . 't.' . $key . '=:' . $key . ' and ';
                    $parameters[$key] = $value;
                } else {
                    $where = $where . 't.' . $key . ' like :' . $key . ' and ';
                    $parameters[$key] = '%' . $value . '%';
                }
            }
        }
        if ($where === "") {
            $query = $this->createQueryBuilder('t')->getQuery();
        } else {
            $cut = 5;
            $where = substr($where, 0, strlen($where) - $cut);
            $qb = $this->createQueryBuilder('t')->where($where)->setParameters($parameters);
            $query = $qb->getQuery();
        }
        return $query;
    }
}