<?php
/**
 * ECSHOP ���������Żݻ����
 * ============================================================================
 * * ��Ȩ���� 2005-2012 �Ϻ���������Ƽ����޹�˾������������Ȩ����
 * ��վ��ַ: http://www.ecshop.com��
 * ----------------------------------------------------------------------------
 * �ⲻ��һ�������������ֻ���ڲ�������ҵĿ�ĵ�ǰ���¶Գ����������޸ĺ�
 * ʹ�ã�������Գ���������κ���ʽ�κ�Ŀ�ĵ��ٷ�����
 * ============================================================================
 * $Author: liubo $
 * $Id: favourable.php 17217 2011-01-19 06:29:08Z liubo $
 */

define('IN_ECS', true);
require(dirname(__FILE__) . '/includes/init.php');
include_once(ROOT_PATH . 'includes/cls_image.php');


/*------------------------------------------------------ */
//-- ����ʱ��б�ҳ
/*------------------------------------------------------ */
$imgurl="/data/afficheimg/";
$now = gmtime();
$where .= " AND start_time <= '$now' AND end_time >= '$now' ";
/* ��ѯ */
$sql = "SELECT * ".
        "FROM " . $GLOBALS['ecs']->table('countdown_goods') .
        " WHERE 1 $where ".
        " LIMIT 1";
        
//echo $sql;
$result = array();
$res = $GLOBALS['db']->query($sql);
if (!empty($res))
{
    $row = $GLOBALS['db']->fetchRow($res);
    $result["act_id"]=iconv("gb2312","utf-8//IGNORE", $row['act_id']);
    $result["act_name"]=$row['act_name'];
    $result["end_time"]=local_date('Y-m-d H:i:s', $row['end_time']);
    $result["act_img"]=$imgurl."".iconv("gb2312","utf-8//IGNORE", $row['act_img']);
    $result["act_url"]=iconv("gb2312","utf-8//IGNORE", $row['act_url']);
}
else
{
    $result["act_name"]="��ʱû�е���ʱ�,�����ڴ�...";
}
echo json_encode($result);
?>